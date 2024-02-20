<?php

namespace App\Controllers;

date_default_timezone_set('Asia/Ho_Chi_Minh');

use DateTime;
use App\Models\BienTheModel;
use App\Models\BillModel;
use App\Models\DetailOrderModel;
use App\Models\HomeModel;
use App\Models\OrderModel;
use App\Models\ProductModel;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class OrderController
{
    protected $homeModel, $orderModel;
    public function __construct()
    {
        $this->homeModel = new HomeModel();

        $this->orderModel = new BillModel();
        // $this->detailOrderModel = new DetailOrderModel();
    }
    public function inThongTin()
    {
        $listProduct = $this->orderModel->selectBillAccount("");
        require "./app/Views/Orders/list.php";
    }


    public  function senMailOrder($hoten, $sdt, $email, $diachi, $donHang, $tongtien)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
            $mail->SMTPDebug = 0;                    //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'qvinhjr10@gmail.com';                     //SMTP username
            $mail->Password   = 'eurm ngqu dmlf sfhm';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('qvinhjr10@gmail.com', 'vinh');
            $mail->addAddress('' . $email . '', '' . $hoten . '');     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content

            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'VGshop Thong Bao!!';
            $mail->Body    = '
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <h1>Bạn vừa thanh toán thành công đơn hàng</h1>
            <p><strong>Người mua hàng : </strong> ' . $hoten . '</p>
            <span><strong>Số điện thoại : </strong> ' . $sdt . '</span>
            <span><strong>Email : </strong> ' . $email . '</span>
            <p><strong>Địa chỉ : </strong> ' . $diachi . '</p>
        
            <h3>Thông tin đơn hàng</h3>
        
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Màu sắc & Kiểu dáng</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
        
                    </tr>
                </thead>
                <tbody>';

            foreach ($donHang as $item) {
                // extract($item);
                $mail->Body .= '
        <tr>
            <td>' . $item['name_product'] . '</td>
            <td>' . $item['price_product'] . '</td>
            <td>' . $item['name_color'] . '& ' . $item['name_style'] . '</td>
            <td>' . $item['so_luong'] . '</td>
            <td>' . $item['tong_tien'] . '</td>
        </tr>';
            }

            $mail->Body .= '
                    <tr>
                        <td colspan="3" class="text-center">Tồng Tiền</td>
                        <td colspan="2" class="text-center">' . $tongtien . '</td>
        
                    </tr>
                </tbody>
            </table>
        
            <h3>Cảm ơn quý khách đã sử dụng dịch vụ bên VGshop.</h3>
            ';


            $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
