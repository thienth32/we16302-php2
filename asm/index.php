<?php
require_once './vendor/autoload.php';
$url = isset($_GET['url']) ? $_GET['url'] : "/";
use App\Controllers\HomeController;
use App\Controllers\ProductController;
switch ($url) {
    case '/':
        // trang chủ - hiển thị danh sách sản phẩm theo danh mục
        $ctr = new HomeController();
        $ctr->index();
        break;
    case 'san-pham':
        // trang chi tiết sản phẩm sẽ có tham số đường dẫn ?id=xxx
        // hiển thị thông tin chi tiết của sản phẩm
        $ctr = new ProductController();
        $ctr->index();
        break;
    case 'san-pham/tao-moi':
        // hiển thị giao diện form tạo mới sản phẩm
        break;
    case 'san-pham/luu-tao-moi':
        // Thực hiện nhận dữ liệu từ màn hình tạo mới
        // lưu dữ liệu vào db 
        // sau đó điều hướng về trang chủ
        break;
    case 'san-pham/cap-nhat':
        // có tham số ?id=xxx
        // hiển thị giao diện form cập nhật thông tin sản phẩm
        break;
    case 'san-pham/luu-cap-nhat':
        // Thực hiện nhận dữ liệu từ màn hình cập nhật
        // lưu dữ liệu vào db 
        // sau đó điều hướng về trang chủ
        break;
    case 'san-pham/xoa':
        // có tham số đường dẫn ?id=xxx
        // thực hiện xóa sản phẩm khỏi db
        // sau đó điều hướng về trang chủ
        break;
    default:
        # code...
        break;
}
?>