<?php
session_start();
ob_start();
require "vendor/autoload.php";
include "app/Views/header.php";
include "app/Views/sidebar.php";



use App\Controllers\{ProductController, OrderController, Route, CategoryController};

$Route = new Route();
$_SESSION['dir'] = "/BE_xuong_ezcode";

// ProductController
$Route->get("" . $_SESSION['dir'] . "/index.php", [new ProductController(), 'home']);
$Route->get("" . $_SESSION['dir'] . "/?add-product", [new ProductController(), 'view_themThongTin']);
$Route->get("" . $_SESSION['dir'] . "/?list-product", [new ProductController(), 'inThongTin']);
$Route->get("" . $_SESSION['dir'] . "/?update-product", [new ProductController(), 'view_capNhatThongTin']);
$Route->get("" . $_SESSION['dir'] . "/?delete-product", [new ProductController(), 'xoaThongTin']);
$Route->post("" . $_SESSION['dir'] . "/?update-product", [new ProductController(), 'capNhatThongTin']);
$Route->post("" . $_SESSION['dir'] . "/?add-product", [new ProductController(), 'themThongTin']);
// CategoryController
$Route->get("" . $_SESSION['dir'] . "/?list-category", [new CategoryController(), 'inThongTin']);
$Route->get("" . $_SESSION['dir'] . "/?add-category", [new CategoryController(), 'view_themThongTin']);
$Route->get("" . $_SESSION['dir'] . "/?delete-category", [new CategoryController(), 'xoaThongTin']);
$Route->post("" . $_SESSION['dir'] . "/?add-category", [new CategoryController(), 'themThongTin']);
// OrderController
$Route->get("" . $_SESSION['dir'] . "/?list-bill", [new OrderController(), 'inThongTin']);
$Route->get("" . $_SESSION['dir'] . "/?add-don-hang", [new OrderController(), 'view_themThongTin']);
$Route->post("" . $_SESSION['dir'] . "/?bill-ban-hang", [new OrderController(), 'view_capNhatThongTin']);
$Route->post("" . $_SESSION['dir'] . "/?pay", [new OrderController(), 'pay']);
$Route->post("" . $_SESSION['dir'] . "/?success-order", [new OrderController(), 'success_order']);

// xử lý route
$url = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

if (strstr($url, "&")) { // kiểm tra xem trong chuỗi có kí tự "&" không
    $cutIndex = strpos($url, "&"); // Tìm vị trí của ký tự "&"
    $urlNew = substr($url, 0, $cutIndex); // Cắt chuỗi từ vị trí 0 đến vị trí của "&"
    $Route->handleRoute($urlNew, $method);
} else {
    $Route->handleRoute($url, $method);
}


include "app/Views/footer.php";
ob_end_flush();
