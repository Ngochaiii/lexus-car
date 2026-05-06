# Laravel Drive Publisher - Project Specification

> **Hướng dẫn dùng file này:** Paste toàn bộ nội dung file này vào Claude (claude.ai hoặc Claude Code) để Claude generate đầy đủ source code. Hoặc paste từng phần khi cần.

---

## 1. Tổng quan dự án

Build một hệ thống admin trong Laravel cho phép đồng bộ bài viết từ Google Drive (Google Docs) về database, sau đó admin review và publish thủ công bằng nút bấm.

**Không dùng AI ở giai đoạn này** — kiến trúc phải mở để dễ thêm AI sau (rewrite SEO, generate meta description, generate từ topic).

### Yêu cầu chính

- Đọc file Google Docs từ folder Drive được chỉ định
- 1 file Drive có thể chứa nhiều bài viết, tách bằng delimiter `===POST===`
- Đồng bộ tạo các record `draft` trong DB
- Admin xem preview và bấm "Đăng" để publish
- Tránh trùng lặp khi sync lại
- Nếu file Drive có nội dung mới hơn → update bài draft tương ứng (không update bài đã published)

---

## 2. Tech Stack

- **Framework:** Laravel 10
- **PHP:** >= 8.1
- **Database:** MySQL/MariaDB (hoặc PostgreSQL)
- **Frontend admin:** Bootstrap 5 (CDN, không cần build tool)
- **Google API:** `google/apiclient` ^2.15
- **Authentication Google:** Service Account (không dùng OAuth user)

---

## 3. Quy ước format file Google Docs

Trong mỗi file Google Docs, viết các bài theo format sau:

```
===POST===
TITLE: Tiêu đề bài viết 1
SLUG: tieu-de-bai-viet-1
META: Mô tả ngắn cho SEO meta description (tùy chọn, nếu thiếu sẽ tự generate)
CONTENT:
Đây là nội dung bài viết 1.
Có thể nhiều dòng, nhiều đoạn.

Vẫn thuộc bài 1 cho đến delimiter tiếp theo.

===POST===
TITLE: Tiêu đề bài viết 2
SLUG: tieu-de-bai-viet-2
META: Meta description bài 2
CONTENT:
Nội dung bài 2 ở đây...
```

**Quy tắc parse:**
- `TITLE:` bắt buộc, lấy text sau dấu `:` đến hết dòng
- `SLUG:` tùy chọn, nếu thiếu → tự generate từ title bằng `Str::slug()`
- `META:` tùy chọn, nếu thiếu → để NULL (sau này AI sẽ generate)
- `CONTENT:` bắt buộc, lấy toàn bộ text từ sau `CONTENT:` đến delimiter `===POST===` tiếp theo (hoặc hết file)
- Trim whitespace ở đầu/cuối mỗi field
- Block không có TITLE hoặc CONTENT → bỏ qua, log warning

---

## 4. Database Schema

### Bảng `posts`

| Field | Type | Note |
|---|---|---|
| id | bigint PK | |
| title | string(255) | |
| slug | string(255) UNIQUE | |
| meta_description | text NULLABLE | |
| content | longtext | |
| status | enum('draft','published') | default 'draft' |
| source_file_id | string NULLABLE | Drive file ID, NULL nếu tạo thủ công |
| source_file_name | string NULLABLE | Tên file Drive để hiển thị |
| source_post_hash | string NULLABLE | md5(title + content), detect content change |
| source_post_key | string NULLABLE | `{file_id}::{index}` - định danh duy nhất cho 1 bài trong 1 file |
| published_at | timestamp NULLABLE | thời điểm publish |
| created_at | timestamp | |
| updated_at | timestamp | |

**Indexes:**
- `INDEX (status)` - lọc tab nhanh
- `INDEX (source_post_key)` - tra cứu khi sync
- `INDEX (source_file_id, source_post_hash)` - detect duplicate

### Logic update khi sync lại

Khi sync 1 bài có `source_post_key` đã tồn tại trong DB:

```
IF post tồn tại với cùng source_post_key:
    IF post.status == 'draft':
        IF post.source_post_hash != hash mới:
            → UPDATE: title, content, meta_description, hash
        ELSE:
            → Skip (không có gì thay đổi)
    ELSE (status == 'published'):
        → Skip (không động vào bài đã đăng)
ELSE:
    → INSERT mới với status='draft'
```

---

## 5. Cấu trúc thư mục

```
app/
├── Http/
│   └── Controllers/
│       └── Admin/
│           └── PostController.php          # CRUD + sync + publish
├── Models/
│   └── Post.php
├── Services/
│   ├── Contracts/
│   │   └── DriveReaderInterface.php        # Interface để dễ mock test
│   └── Drive/
│       ├── GoogleDriveReader.php           # Implementation
│       ├── PostParser.php                  # Parse nội dung file thành array bài
│       └── DriveSyncService.php            # Orchestrator: đọc Drive + parse + lưu DB
config/
├── services.php                            # Thêm key 'google_drive'
database/
└── migrations/
    └── 2026_05_02_000001_create_posts_table.php
resources/
└── views/
    ├── layouts/
    │   └── admin.blade.php                 # Layout Bootstrap 5
    └── admin/
        └── posts/
            ├── index.blade.php             # Trang chính: 2 tabs draft/published
            ├── show.blade.php              # Preview chi tiết
            └── edit.blade.php              # Form sửa
routes/
└── web.php                                 # Routes admin
```

---

## 6. Routes (admin)

```php
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('posts', [PostController::class, 'index'])->name('posts.index');
    Route::post('posts/sync-drive', [PostController::class, 'syncDrive'])->name('posts.sync-drive');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::post('posts/{post}/publish', [PostController::class, 'publish'])->name('posts.publish');
    Route::post('posts/{post}/unpublish', [PostController::class, 'unpublish'])->name('posts.unpublish');
    Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});
```

> **Lưu ý:** Thêm middleware `auth` và `can:manage-posts` cho phù hợp với hệ thống auth hiện tại của project.

---

## 7. UI/UX chi tiết (Bootstrap 5)

### Trang `admin/posts` (index)

```
┌──────────────────────────────────────────────────────────────┐
│ Quản lý bài viết                       [🔄 Đồng bộ Drive]    │
├──────────────────────────────────────────────────────────────┤
│ [Tab: Bài chờ (3)]  [Tab: Đã đăng (12)]                      │
├──────────────────────────────────────────────────────────────┤
│  # │ Tiêu đề          │ Từ file       │ Cập nhật │ Actions  │
│ ───┼──────────────────┼───────────────┼──────────┼────────  │
│  1 │ Bài viết về X    │ posts.docx    │ 2/5 10:00│ 👁 ✓ ✏️ 🗑│
│  2 │ Bài viết Y       │ posts.docx    │ 2/5 10:00│ 👁 ✓ ✏️ 🗑│
└──────────────────────────────────────────────────────────────┘
```

**Actions:**
- 👁 Xem (button → modal preview hoặc redirect tới `show`)
- ✓ Đăng (form POST `/admin/posts/{id}/publish`, confirm "Đăng bài này?")
- ✏️ Sửa (link tới `edit`)
- 🗑 Xóa (form DELETE, confirm)

**Tab "Đã đăng":** Tương tự nhưng nút ✓ đổi thành ⏸ Gỡ xuống (unpublish, đưa về draft).

**Flash messages:** Hiển thị alert Bootstrap (success/error) sau mỗi action.

### Trang `show` (preview)

- Hiện title to, meta description
- Render content (giữ nguyên line break: dùng `nl2br(e($post->content))`)
- Hiện status badge
- Nút "Đăng" / "Gỡ xuống" tùy status
- Nút "Sửa", "Quay lại"

### Trang `edit`

- Form với các field: title, slug, meta_description, content (textarea), status
- Submit PUT `/admin/posts/{id}`

---

## 8. Service classes

### `DriveReaderInterface`

```php
namespace App\Services\Contracts;

interface DriveReaderInterface
{
    /**
     * @return array<int, array{id: string, name: string, modified_time: string}>
     */
    public function listDocs(string $folderId): array;

    public function readDocContent(string $fileId): string;
}
```

### `GoogleDriveReader implements DriveReaderInterface`

- Khởi tạo Google\Client với Service Account credentials path từ config
- Scope: `Drive::DRIVE_READONLY` + `Docs::DOCUMENTS_READONLY`
- `listDocs()`: query files mimeType `application/vnd.google-apps.document` trong folder, không trashed
- `readDocContent()`: dùng Docs API, duyệt body content lấy text từ paragraph + textRun

### `PostParser`

```php
namespace App\Services\Drive;

class PostParser
{
    /**
     * Parse text content thành array bài viết.
     *
     * @return array<int, array{
     *     index: int,
     *     title: string,
     *     slug: ?string,
     *     meta: ?string,
     *     content: string,
     *     hash: string
     * }>
     */
    public function parse(string $content): array;
}
```

Tách bằng regex `===POST===`, mỗi block parse các field TITLE/SLUG/META/CONTENT.

### `DriveSyncService`

```php
namespace App\Services\Drive;

class DriveSyncService
{
    public function __construct(
        private DriveReaderInterface $driveReader,
        private PostParser $parser,
    ) {}

    /**
     * Sync toàn bộ folder, trả về thống kê.
     *
     * @return array{
     *     files_processed: int,
     *     posts_created: int,
     *     posts_updated: int,
     *     posts_skipped: int,
     *     errors: array<string>
     * }
     */
    public function syncFolder(string $folderId): array;
}
```

Logic:
1. Gọi `driveReader->listDocs($folderId)`
2. Với mỗi file: đọc content → parse → loop từng bài
3. Áp dụng logic update đã mô tả ở mục 4
4. Wrap trong DB transaction
5. Try/catch từng file để 1 file lỗi không làm dừng toàn bộ sync

---

## 9. Controller

### `PostController`

```php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Services\Drive\DriveSyncService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $tab = $request->query('tab', 'draft'); // draft | published
        $posts = Post::where('status', $tab)
            ->latest('updated_at')
            ->paginate(20);

        $draftCount = Post::where('status', 'draft')->count();
        $publishedCount = Post::where('status', 'published')->count();

        return view('admin.posts.index', compact('posts', 'tab', 'draftCount', 'publishedCount'));
    }

    public function syncDrive(DriveSyncService $sync)
    {
        try {
            $folderId = config('services.google_drive.folder_id');
            $stats = $sync->syncFolder($folderId);

            $msg = sprintf(
                'Đồng bộ xong: %d file, tạo mới %d bài, cập nhật %d bài, bỏ qua %d bài.',
                $stats['files_processed'],
                $stats['posts_created'],
                $stats['posts_updated'],
                $stats['posts_skipped']
            );

            if (!empty($stats['errors'])) {
                $msg .= ' Có ' . count($stats['errors']) . ' lỗi.';
                session()->flash('errors_detail', $stats['errors']);
            }

            return redirect()->route('admin.posts.index')->with('success', $msg);
        } catch (\Throwable $e) {
            report($e);
            return redirect()->route('admin.posts.index')
                ->with('error', 'Lỗi đồng bộ: ' . $e->getMessage());
        }
    }

    public function show(Post $post) { /* ... */ }
    public function edit(Post $post) { /* ... */ }
    public function update(Request $request, Post $post) { /* validate + update */ }

    public function publish(Post $post)
    {
        $post->update([
            'status' => 'published',
            'published_at' => $post->published_at ?? now(),
        ]);
        return back()->with('success', 'Đã đăng bài: ' . $post->title);
    }

    public function unpublish(Post $post)
    {
        $post->update(['status' => 'draft']);
        return back()->with('success', 'Đã gỡ bài: ' . $post->title);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')
            ->with('success', 'Đã xóa bài: ' . $post->title);
    }
}
```

---

## 10. Setup Google Drive Service Account

**Hướng dẫn admin (đưa vào README):**

1. Vào https://console.cloud.google.com/
2. Tạo project mới (hoặc chọn project có sẵn)
3. Vào **APIs & Services > Library**, enable:
   - Google Drive API
   - Google Docs API
4. Vào **IAM & Admin > Service Accounts > Create Service Account**
   - Đặt tên: `drive-publisher-bot`
   - Role: không cần (Service Account không cần GCP role để gọi Drive API)
5. Vào service account vừa tạo > tab **Keys > Add Key > Create new key > JSON**
   - File JSON tự động tải về, lưu vào `storage/app/google/credentials.json`
   - **KHÔNG commit file này vào git** (thêm vào `.gitignore`)
6. Mở email của service account (dạng `xxx@yyy.iam.gserviceaccount.com`)
7. Vào folder Drive muốn sync, click **Share**, paste email service account, chọn quyền **Viewer**
8. Lấy Folder ID từ URL: `https://drive.google.com/drive/folders/{FOLDER_ID}`

**Cấu hình `.env`:**

```env
GOOGLE_DRIVE_CREDENTIALS_PATH=/full/path/to/storage/app/google/credentials.json
GOOGLE_DRIVE_FOLDER_ID=xxx_paste_folder_id_xxx
```

**Cấu hình `config/services.php`:**

```php
'google_drive' => [
    'credentials_path' => env('GOOGLE_DRIVE_CREDENTIALS_PATH'),
    'folder_id' => env('GOOGLE_DRIVE_FOLDER_ID'),
],
```

---

## 11. Service Provider Binding

Trong `app/Providers/AppServiceProvider.php`:

```php
use App\Services\Contracts\DriveReaderInterface;
use App\Services\Drive\GoogleDriveReader;

public function register(): void
{
    $this->app->bind(DriveReaderInterface::class, GoogleDriveReader::class);
}
```

---

## 12. Mở rộng AI sau này (chuẩn bị sẵn kiến trúc)

Khi thêm AI sau, chỉ cần thêm:

```
app/Services/AI/
├── Contracts/
│   └── AIProviderInterface.php       # rewriteSEO(), generateMeta(), generateFromTopic()
├── GeminiProvider.php
├── GroqProvider.php
└── AIPostProcessor.php               # orchestrator
```

Và thêm route + button mới trong UI:
```php
Route::post('posts/{post}/ai-optimize', [PostController::class, 'aiOptimize']);
```

Method `aiOptimize` chạy AI → preview kết quả trên trang riêng → bấm "Lưu thay đổi" mới update DB.

**Không phải sửa logic core của sync/publish** → đó là lý do thiết kế hiện tại đã sẵn sàng.

---

## 13. Yêu cầu Claude generate code

Hãy generate đầy đủ các file sau, code production-ready:

1. **Migration** `database/migrations/2026_05_02_000001_create_posts_table.php`
2. **Model** `app/Models/Post.php` (với scope `draft()`, `published()`, helper `isPublished()`)
3. **Interface** `app/Services/Contracts/DriveReaderInterface.php`
4. **Service** `app/Services/Drive/GoogleDriveReader.php` (đầy đủ Google API code)
5. **Service** `app/Services/Drive/PostParser.php` (parse logic + unit-testable)
6. **Service** `app/Services/Drive/DriveSyncService.php` (orchestrator với DB transaction, try/catch từng file)
7. **Controller** `app/Http/Controllers/Admin/PostController.php` (đầy đủ CRUD + sync + publish/unpublish)
8. **Routes** thêm vào `routes/web.php`
9. **Config** patch cho `config/services.php`
10. **Layout** `resources/views/layouts/admin.blade.php` (Bootstrap 5 CDN, có sidebar đơn giản)
11. **View** `resources/views/admin/posts/index.blade.php` (2 tabs, table với actions, flash messages)
12. **View** `resources/views/admin/posts/show.blade.php` (preview)
13. **View** `resources/views/admin/posts/edit.blade.php` (form edit)
14. **Service Provider** binding interface trong `app/Providers/AppServiceProvider.php`
15. **README** ngắn gọn hướng dẫn setup (composer require, migrate, setup Service Account, .env)

### Yêu cầu chất lượng code

- Type hints đầy đủ (PHP 8.1+)
- DocBlock cho mọi public method
- Validation đầy đủ ở Controller (FormRequest hoặc inline đều OK)
- Xử lý exception khi gọi Google API (network error, file không đọc được)
- CSRF token đầy đủ trong form
- Confirm dialog (JS confirm hoặc Bootstrap modal) cho action publish/delete
- Comment tiếng Việt giải thích logic phức tạp
- Không dùng package phụ trợ ngoài `google/apiclient` (giữ minimal)

### Format trả về

Hãy trả về source code lần lượt từng file, mỗi file 1 code block, có header rõ ràng kiểu:

```
### File: app/Models/Post.php
```

Đừng tóm tắt giữa các file. Sau khi xong tất cả mới có 1 đoạn note ngắn cuối cùng về cách deploy.

---

## 14. Test workflow sau khi build xong

```bash
# Cài dependencies
composer require google/apiclient

# Migrate DB
php artisan migrate

# Tạo file Google Docs trong folder Drive đã share, viết test:
# ===POST===
# TITLE: Test bài viết đầu tiên
# CONTENT:
# Đây là nội dung test.

# Truy cập trang admin
# http://your-app.test/admin/posts

# Bấm "Đồng bộ Drive" → bài Test xuất hiện ở tab "Bài chờ"
# Bấm "Xem" → preview nội dung
# Bấm "Đăng" → bài chuyển sang tab "Đã đăng"
```

---

## 15. Checklist sau khi nhận code

- [ ] Migration chạy không lỗi
- [ ] Tạo bài thủ công qua trang edit OK
- [ ] Sync Drive thành công (ít nhất 1 file có 1 bài)
- [ ] Sync lại file đã sync → không tạo duplicate
- [ ] Sửa nội dung file Drive → sync → bài draft cập nhật
- [ ] Bài đã published → sync lại không bị ghi đè
- [ ] Publish/unpublish/delete hoạt động đúng
- [ ] Flash messages hiển thị OK

---

**Hết spec. Hãy generate code đầy đủ theo đúng yêu cầu trên.**

