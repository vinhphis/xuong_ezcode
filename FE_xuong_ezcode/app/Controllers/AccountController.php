<?php

namespace App\Controllers;

use App\Models\AccountModel;
use App\Controllers\SendMail;

class AccountController
{
    protected $accountModel, $homeController, $sendMail;
    public function __construct()
    {
        $this->accountModel = new AccountModel();
        $this->homeController = new HomeController();
        $this->sendMail = new SendMail();
    }

    public function login()
    {
        if (isset($_POST['dn'])) {
            if (empty($_POST['username'])) {
                echo "<script>
                alert('Vui lòng không bỏ trống thông tin');
              </script>";
            } else {
                echo "<script>
                alert('Đăng nhập thành công');
              </script>";
                $_SESSION['user'] =  $this->accountModel->checkAccount($_POST['username'], $_POST['password']);
                
                header("location: /FE_xuong_ezcode/index.php");
            }
        }

        require 'app/Views/login.php';
    }
    public function register()
    {
        if (isset($_POST['dk'])) {
            $check = 1;
            if (!isset($_POST['hoten']) || empty($_POST['hoten']) && empty($_POST['sdt']) && empty($_POST['email'])) {
                echo "<script>
                alert('Vui lòng không bỏ trống thông tin');
              </script>";
            } else {
                if (is_numeric($_POST['hoten']))  $check = 0;
                echo "<script> alert('Họ tên không hợp lệ') </script>";
                if (!is_numeric($_POST['sdt']) || strlen($_POST['sdt']) != 10)  $check = 0;
                echo "<script> alert('Số điện thoại không hợp lệ') </script>";

                if ($check == 1) {
                    echo "<script>
                    alert('Đăng ký thành công');
                  </script>";
                    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                    $password = substr(str_shuffle($chars), 0, 10);

                    $this->accountModel->addAccount($_POST['hoten'], $_POST['sdt'], $_POST['username'], $password, $_POST['email']);
                    $this->sendMail->SendMail($_POST['email'], $_POST['hoten'], $password);
                    header("location: /FE_xuong_ezcode/?login");
                }
            }
        }
        require 'app/Views/register.php';
    }
    public function logout()
    {
        if (isset($_SESSION['user'])) unset($_SESSION['user']);
        header("location: /FE_xuong_ezcode/index.php");
    }
}
