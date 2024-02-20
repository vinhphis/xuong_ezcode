<?php

namespace App\Controllers;

use App\Models\BillModel;
use App\Models\HomeModel;

class HomeController
{
    protected $homeModel, $billModel;
    public function __construct()
    {
        $this->homeModel = new HomeModel();
        $this->billModel = new BillModel();
    }
    public function home()
    {
        $listCourse = $this->homeModel->selectAllCourse("", "");
        $listCategory = $this->homeModel->selectAllCategory();
        require 'app/Views/home.php';
    }
    public function loTrinhHoc()
    {
        
        require 'app/Views/loTrinhHoc.php';
    }
    public function ct_course()
    {
        // if (isset($_GET['id_course'])) $id = $_GET['id_course'];
        $id = isset($_GET['id_course']) ? $_GET['id_course'] : "";
        $listCourse = $this->homeModel->selectOneCourse($id, "");
        require 'app/Views/ct_course.php';
    }
    public function khoaHoc()
    {
        $listCourseFree = $this->homeModel->selectAllCourse("", "1");
        $listCourse = $this->homeModel->selectAllCourse("1", "");
        require 'app/Views/khoaHocCuaToi.php';
    }
    public function video_kh()
    {

        require 'app/Views/video_kh.php';
    }
    public function dk_khoaHoc()
    {
        if (!isset($_SESSION['user'])) {
            $thongbao = "<script>
            alert('Vui lòng đăng nhập');
          </script>";
            setcookie("thongbao", $thongbao, time() + 1);
            header("location: /FE_xuong_ezcode/?login");
        } else {
            if (isset($_POST['next'])) {
                header("location: /FE_xuong_ezcode/?video_kh");
            }
            if (isset($_POST['dk_kh'])) {
                $checkCourse = $this->homeModel->selectOneCourse($_POST['id_course'], "1");
                if ($checkCourse) { // điều kiện $checkCourse == fales 
                    $this->billModel->addBill($checkCourse['id_course'], $_SESSION['user']['id_account']);
                    $thongbao = "<script>
                    alert('Đăng ký thành công khóa học');
                  </script>";
                    setcookie("thongbao", $thongbao, time() + 1);
                    header("location: /FE_xuong_ezcode/?video_kh");
                } else {
                    $this->pay_course();
                }
            }
        }
    }
    public function pay_course()
    {
        if (isset($_POST['pay_course'])) {
            $this->billModel->addBill($_POST['id_course'], $_SESSION['user']['id_account']);
            $thongbao = "<script> alert('Bạn đã thanh toán thành công khóa học " . $_POST['name_course'] . "'); </script>";
            setcookie("thongbao", $thongbao, time() + 1);
            header("location: /FE_xuong_ezcode/?video_kh");
        }
        $checkCourse = $this->homeModel->selectOneCourse($_POST['id_course'], "");
        require 'app/Views/pay_course.php';
    }
}
