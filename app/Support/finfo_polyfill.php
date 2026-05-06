<?php

/**
 * Polyfill cho ext-fileinfo trên VPS thiếu extension.
 *
 * KHÔNG ai trong code của project này dùng giá trị MIME thực sự từ class `finfo`
 * (validation ảnh dùng magic bytes thủ công trong App\Services\ImageUploader).
 * Nhưng Symfony Mime / Flysystem có thể `new finfo(...)` ngầm trong vài codepath
 * (ví dụ MimeTypes::getDefault() khi Laravel response file, hoặc khi rule
 * validation `file` được Symfony fallback). Stub này đánh lừa Symfony tin rằng
 * extension đã được cài, để PHP không throw "Class finfo not found".
 *
 * Trả về 'application/octet-stream' cho mọi query — vô hại, vì code của ta tự
 * suy MIME từ extension + magic bytes.
 *
 * Chỉ kích hoạt khi extension THẬT SỰ thiếu.
 */

if (!extension_loaded('fileinfo') && !class_exists('finfo', false)) {

    if (!defined('FILEINFO_MIME_TYPE')) define('FILEINFO_MIME_TYPE', 16);
    if (!defined('FILEINFO_MIME'))      define('FILEINFO_MIME', 1040);
    if (!defined('FILEINFO_MIME_ENCODING')) define('FILEINFO_MIME_ENCODING', 1024);
    if (!defined('FILEINFO_NONE'))      define('FILEINFO_NONE', 0);

    class finfo
    {
        public function __construct(int $flags = FILEINFO_NONE, ?string $magic_database = null)
        {
        }

        public function buffer(string $string = '', int $flags = 0, $context = null): string|false
        {
            return 'application/octet-stream';
        }

        public function file(string $filename = '', int $flags = 0, $context = null): string|false
        {
            return 'application/octet-stream';
        }

        public function set_flags(int $flags): bool
        {
            return true;
        }
    }

    if (!function_exists('finfo_open')) {
        function finfo_open(int $flags = FILEINFO_NONE, ?string $magic_database = null) {
            return new finfo($flags, $magic_database);
        }
    }
    if (!function_exists('finfo_buffer')) {
        function finfo_buffer($finfo, string $string = '', int $flags = 0, $context = null) {
            return 'application/octet-stream';
        }
    }
    if (!function_exists('finfo_file')) {
        function finfo_file($finfo, string $filename = '', int $flags = 0, $context = null) {
            return 'application/octet-stream';
        }
    }
    if (!function_exists('finfo_close')) {
        function finfo_close($finfo): bool { return true; }
    }
    if (!function_exists('mime_content_type')) {
        function mime_content_type(string $filename) {
            return 'application/octet-stream';
        }
    }
}
