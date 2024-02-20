<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\HomeModel;


class ProductController
{
    private $productModel, $categoryModel, $homeModel;

    public function __construct()
    {
        // $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();
        $this->homeModel = new HomeModel();
    }

    public function success_add()
    {
        echo '<script>alert("Thêm Sản Phẩm Thành Công")</script>';
    }

    public function success_update()
    {
        echo '<script>alert("Cập nhật Sản Phẩm Thành Công")</script>';
    }

    public function success_xoa()
    {
        echo '<script>alert("Xóa Sản Phẩm Thành Công")</script>';
    }

    public function error_add()
    {
        echo '<script>alert("Không được bỏ trống thông tin")</script>';
    }

    public function error_update()
    {
        echo '<script>alert("Không được bỏ trống thông tin")</script>';
    }

    public function home()
    {
        require "./app/Views/home.php";
    }

    public function inThongTin()
    {
        $listProduct = $this->homeModel->selectAllCourse("", "");
        require "./app/Views/Products/list.php";
    }

    public function view_themThongTin()
    {
        $listCategory = $this->categoryModel->selectAllCategory();
        require "./app/Views/Products/add.php";
    }

    public function themThongTin()
    {
        if (isset($_POST['add'])) {
            if (!empty($_POST['nameProduct']) && !empty($_POST['priceProuct']) && !empty($_FILES['imageProduct']['name']) && !empty($_POST['id_category']) && !empty($_POST['mota'])) {
                $target_dir = "./public/images/";
                $target_file = $target_dir . basename($_FILES['imageProduct']['name']);
                move_uploaded_file($_FILES['imageProduct']['tmp_name'], $target_file);
                $this->homeModel->add($_POST['id_category'], $_POST['nameProduct'], $_FILES['imageProduct']['name'], $_POST['priceProuct'],  $_POST['mota']);
                $this->success_add();
                $this->view_themThongTin();
            } else {
                $this->error_add();
                $this->view_themThongTin();
            }
        }
    }

    public function xoaThongTin()
    {
        if (isset($_GET['product_id'])) {
            $list =  $this->homeModel->selectOneCourse($_GET['product_id'], "");

            if ($list['action'] == 0) {
                $this->homeModel->updateAction1($_GET['product_id']);
                $this->success_xoa();
            } else {
                $this->homeModel->updateAction0($_GET['product_id']);
                $this->success_xoa();
            }
        }
        $this->inThongTin();
    }

    public function view_capNhatThongTin()
    {
        $listProduct = $this->homeModel->selectOneCourse($_GET['product_id'], "");
        $listCategory = $this->categoryModel->selectAllCategory();
        require "./app/Views/Products/update.php";
    }

    public function capNhatThongTin()
    {
        if (!empty($_POST['nameProduct']) && !empty($_POST['priceProuct'])  && !empty($_POST['id_category']) && !empty($_POST['mota'])) {
            $target_dir = "./public/images/";
            $target_file = $target_dir . basename($_FILES['imageProduct']['name']);

            move_uploaded_file($_FILES['imageProduct']['tmp_name'], $target_file);

            $this->homeModel->update($_POST['id_product'], $_POST['id_category'], $_POST['nameProduct'], $_FILES['imageProduct']['name'], $_POST['priceProuct'], $_POST['mota']);

            $this->success_update();
            $this->inThongTin();
        } else {

            $this->error_update();
            $this->inThongTin();
        }
    }
}
