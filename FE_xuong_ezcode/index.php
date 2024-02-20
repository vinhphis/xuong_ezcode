<?php
session_start();
ob_start();
require_once '../FE_xuong_ezcode/app/Config/env.php';
require_once 'vendor/autoload.php';
include "../FE_xuong_ezcode/app/Views/header.php";

use App\Controllers\AccountController;
use App\Controllers\HomeController;
use App\Controllers\Route;



$Route = new Route();

$Route->get("/FE_xuong_ezcode/index.php", [new HomeController(), 'home']);
$Route->get("/FE_xuong_ezcode/?ct_course", [new HomeController(), 'ct_course']);
$Route->get("/FE_xuong_ezcode/?khoa_hoc", [new HomeController(), 'khoaHoc']);
$Route->get("/FE_xuong_ezcode/?dk_kh", [new HomeController(), 'dk_khoaHoc']);
$Route->post("/FE_xuong_ezcode/?dk_kh", [new HomeController(), 'dk_khoaHoc']);
$Route->get("/FE_xuong_ezcode/?video_kh", [new HomeController(), 'video_kh']);
$Route->get("/FE_xuong_ezcode/?pay_course", [new HomeController(), 'pay_course']);
$Route->post("/FE_xuong_ezcode/?pay_course", [new HomeController(), 'pay_course']);
$Route->get("/FE_xuong_ezcode/?lo_trinh_hoc", [new HomeController(), 'loTrinhHoc']);

$Route->get("/FE_xuong_ezcode/?login", [new AccountController(), 'login']);
$Route->post("/FE_xuong_ezcode/?login", [new AccountController(), 'login']);
$Route->get("/FE_xuong_ezcode/?register", [new AccountController(), 'register']);
$Route->post("/FE_xuong_ezcode/?register", [new AccountController(), 'register']);
$Route->get("/FE_xuong_ezcode/?logout", [new AccountController(), 'logout']);


$url = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

if (strstr($url, "&")) { // kiểm tra xem trong chuỗi có kí tự "&" không
    $cutIndex = strpos($url, "&"); // Tìm vị trí của ký tự "&"
    $urlNew = substr($url, 0, $cutIndex); // Cắt chuỗi từ vị trí 0 đến vị trí của "&"
    $Route->handleRoute($urlNew, $method);
} else {
    $Route->handleRoute($url, $method);
}


include '../FE_xuong_ezcode/app/Views/footer.php';
ob_end_flush();
