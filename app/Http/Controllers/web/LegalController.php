<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;

class LegalController extends Controller
{
    public function privacy()
    {
        return $this->renderLegal(
            slug: 'chinh-sach-bao-mat',
            title: 'Chính Sách Bảo Mật Thông Tin',
            metaDesc: 'Chính sách bảo mật thông tin khách hàng tại Lexus Thăng Long. Cam kết bảo vệ dữ liệu cá nhân theo luật Việt Nam và thông lệ quốc tế.',
            sections: [
                ['heading' => '1. Mục đích thu thập thông tin', 'body' => 'Lexus Thăng Long thu thập thông tin khách hàng nhằm phục vụ tư vấn báo giá, đặt lịch lái thử, hỗ trợ sau bán hàng, gửi thông tin khuyến mãi (khi khách hàng đồng ý) và cải thiện chất lượng dịch vụ.'],
                ['heading' => '2. Phạm vi sử dụng', 'body' => 'Thông tin cá nhân chỉ được dùng nội bộ và không chuyển giao cho bên thứ ba ngoại trừ: ngân hàng đối tác (khi khách yêu cầu vay trả góp), hãng Lexus (xác minh quyền lợi bảo hành), cơ quan nhà nước có yêu cầu hợp pháp.'],
                ['heading' => '3. Thời gian lưu trữ', 'body' => 'Dữ liệu được lưu tối đa 5 năm hoặc đến khi khách hàng yêu cầu xóa.'],
                ['heading' => '4. Quyền của khách hàng', 'body' => 'Khách hàng có quyền yêu cầu xem, chỉnh sửa, xóa thông tin cá nhân bằng cách liên hệ hotline 0962.896.582 hoặc email contact@tuvangiaxelexus.com.'],
                ['heading' => '5. Cookies', 'body' => 'Website sử dụng cookies để phân tích hành vi truy cập và tối ưu trải nghiệm. Khách hàng có thể tắt cookies trong trình duyệt nếu không đồng ý.'],
                ['heading' => '6. Bảo mật kỹ thuật', 'body' => 'Dữ liệu được mã hóa qua HTTPS/TLS 1.2+, lưu trên hạ tầng được kiểm soát truy cập nghiêm ngặt.'],
            ],
        );
    }

    public function terms()
    {
        return $this->renderLegal(
            slug: 'dieu-khoan-su-dung',
            title: 'Điều Khoản Sử Dụng Website',
            metaDesc: 'Điều khoản sử dụng website tuvangiaxelexus.com. Quy định về quyền & nghĩa vụ khi truy cập, sử dụng nội dung và dịch vụ tư vấn xe Lexus.',
            sections: [
                ['heading' => '1. Chấp nhận điều khoản', 'body' => 'Khi truy cập website, bạn đồng ý tuân thủ các điều khoản dưới đây. Nếu không đồng ý, vui lòng ngừng sử dụng website.'],
                ['heading' => '2. Quyền sở hữu trí tuệ', 'body' => 'Toàn bộ nội dung, hình ảnh, logo trên website thuộc bản quyền của Lexus Thăng Long hoặc Tập đoàn Toyota/Lexus. Nghiêm cấm sao chép thương mại không phép.'],
                ['heading' => '3. Thông tin sản phẩm và giá', 'body' => 'Giá bán, thông số xe và ưu đãi có thể thay đổi theo chính sách hãng. Thông tin chính thức được xác nhận khi khách hàng làm việc trực tiếp với tư vấn viên.'],
                ['heading' => '4. Trách nhiệm người dùng', 'body' => 'Người dùng cam kết cung cấp thông tin chính xác, không sử dụng website cho mục đích bất hợp pháp, không gửi nội dung gây hại hoặc xâm phạm bên thứ ba.'],
                ['heading' => '5. Giới hạn trách nhiệm', 'body' => 'Lexus Thăng Long không chịu trách nhiệm với thiệt hại gián tiếp phát sinh từ việc sử dụng website ngoài phạm vi tư vấn bán xe và hậu mãi.'],
                ['heading' => '6. Thay đổi điều khoản', 'body' => 'Lexus Thăng Long có quyền cập nhật điều khoản. Bản mới có hiệu lực ngay khi đăng tải trên website.'],
            ],
        );
    }

    public function warranty()
    {
        return $this->renderLegal(
            slug: 'chinh-sach-bao-hanh',
            title: 'Chính Sách Bảo Hành Xe Lexus Chính Hãng',
            metaDesc: 'Chính sách bảo hành Lexus chính hãng: 5 năm hoặc 100.000 km, cứu hộ 24/7, dịch vụ Lexus Care toàn quốc tại Lexus Thăng Long.',
            sections: [
                ['heading' => '1. Thời hạn bảo hành', 'body' => 'Xe Lexus mới được bảo hành 5 năm hoặc 100.000 km, tùy điều kiện nào đến trước, áp dụng từ ngày giao xe.'],
                ['heading' => '2. Phạm vi bảo hành', 'body' => 'Bảo hành miễn phí mọi lỗi do nhà sản xuất: động cơ, hộp số, hệ thống điện, điều hòa, hệ thống an toàn. Bảo hành ắc-quy 2 năm, lốp theo chính sách nhà sản xuất lốp.'],
                ['heading' => '3. Trường hợp không áp dụng', 'body' => 'Hư hỏng do tai nạn, thiên tai, sử dụng sai mục đích, không bảo dưỡng định kỳ tại đại lý ủy quyền, hoặc lắp đặt phụ tùng không chính hãng.'],
                ['heading' => '4. Cứu hộ Lexus 24/7', 'body' => 'Khách hàng được hỗ trợ cứu hộ miễn phí trong thời gian bảo hành: kéo xe, sửa chữa khẩn cấp, hỗ trợ thay xe khi xe nằm xưởng dài ngày.'],
                ['heading' => '5. Lexus Care', 'body' => 'Chương trình hậu mãi đẳng cấp: bảo dưỡng định kỳ, kiểm tra miễn phí mùa lễ, ưu đãi khách hàng thân thiết, đặt lịch online qua hotline 0962.896.582.'],
            ],
        );
    }

    public function returnPolicy()
    {
        return $this->renderLegal(
            slug: 'chinh-sach-doi-tra',
            title: 'Chính Sách Đổi Trả Xe Lexus',
            metaDesc: 'Chính sách đổi trả xe Lexus tại Lexus Thăng Long: minh bạch, đúng quy định nhà sản xuất và pháp luật Việt Nam.',
            sections: [
                ['heading' => '1. Nguyên tắc chung', 'body' => 'Việc đổi trả xe Lexus tuân thủ chính sách của Lexus Việt Nam và pháp luật Việt Nam về bảo vệ quyền lợi người tiêu dùng.'],
                ['heading' => '2. Đổi trả khi giao xe', 'body' => 'Khi nhận xe, khách hàng có quyền kiểm tra ngoại thất, nội thất, vận hành. Nếu phát hiện lỗi từ nhà sản xuất, đại lý hỗ trợ đổi xe khác cùng cấu hình hoặc hoàn tiền theo quy trình.'],
                ['heading' => '3. Đổi trả sau khi nhận xe', 'body' => 'Sau khi xe đã ra biển số và đăng ký, các vấn đề kỹ thuật được xử lý theo chính sách bảo hành thay vì đổi trả, trừ trường hợp lỗi nghiêm trọng được hãng xác nhận.'],
                ['heading' => '4. Đặt cọc', 'body' => 'Tiền cọc được hoàn trả nếu đại lý không đáp ứng đúng thời gian giao xe đã cam kết. Quy trình hoàn cọc minh bạch và có biên bản.'],
                ['heading' => '5. Liên hệ hỗ trợ', 'body' => 'Mọi thắc mắc về đổi trả vui lòng liên hệ 0962.896.582 hoặc đến trực tiếp showroom.'],
            ],
        );
    }

    public function delivery()
    {
        return $this->renderLegal(
            slug: 'chinh-sach-giao-xe',
            title: 'Chính Sách Giao Xe Lexus Toàn Quốc',
            metaDesc: 'Quy trình giao xe Lexus tại Lexus Thăng Long: kiểm tra PDI, đăng ký biển số, giao xe tận nơi toàn quốc.',
            sections: [
                ['heading' => '1. Thời gian giao xe', 'body' => 'Đối với xe có sẵn: giao trong 3-7 ngày làm việc sau khi hoàn tất thủ tục. Xe đặt cấu hình riêng: 30-90 ngày tùy dòng xe và phiên bản.'],
                ['heading' => '2. Quy trình PDI', 'body' => 'Mọi xe đều được kiểm tra Pre-Delivery Inspection theo tiêu chuẩn Lexus toàn cầu trước khi giao đến khách hàng.'],
                ['heading' => '3. Hỗ trợ đăng ký xe', 'body' => 'Đại lý hỗ trợ làm thủ tục đăng ký, đăng kiểm, biển số, bảo hiểm bắt buộc và các giấy tờ liên quan.'],
                ['heading' => '4. Giao xe tận nơi', 'body' => 'Lexus Thăng Long hỗ trợ giao xe đến địa chỉ khách hàng yêu cầu trên toàn quốc, chi phí thỏa thuận theo từng tỉnh/thành.'],
                ['heading' => '5. Bàn giao xe', 'body' => 'Khi giao xe, tư vấn viên hướng dẫn sử dụng các tính năng thông minh, đồng bộ điện thoại, kết nối Lexus Connect và trả lời mọi câu hỏi của khách hàng.'],
            ],
        );
    }

    private function renderLegal(string $slug, string $title, string $metaDesc, array $sections)
    {
        $seo = [
            'title' => $title . ' | Lexus Thăng Long',
            'description' => $metaDesc,
            'keywords' => $title . ', Lexus Thăng Long, ' . str_replace('-', ' ', $slug),
        ];

        $breadcrumbs = [
            ['name' => 'Trang chủ', 'url' => '/'],
            ['name' => $title],
        ];

        return view('src.web.legal.show', [
            'pageTitle' => $title,
            'sections' => $sections,
            'seo' => $seo,
            'breadcrumbs' => $breadcrumbs,
        ]);
    }
}
