<!-- end header section -->
<!-- slider section -->
<?php
if (isset($_COOKIE['thongbao'])) echo $_COOKIE['thongbao'];
?>

<section class=" slider_section position-relative">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col">
                            <div class="detail-box">
                                <div>
                                    <h2>
                                        Chào mừng bạn đến với
                                    </h2>
                                    <h1>
                                        VGshop
                                    </h1>
                                    <p>
                                        Khơi nguồn sáng tạo, kiến tạo tương lai cùng khóa học lập trình!
                                    </p>
                                    <div class="">
                                        <a href="#ltlg">
                                            Tìm hiểu ngay
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col">
                            <div class="detail-box">
                                <div>
                                    <h2>
                                        Chào mừng bạn đến với
                                    </h2>
                                    <h1>
                                        VGshop
                                    </h1>
                                    <p>
                                        Chúng tôi có nhiều khóa học miễn phí và khóa học PRO dành cho nhiều mọi người lựa chọn
                                    </p>
                                    <div class="">
                                        <a href="/FE_xuong_ezcode/?khoa_hoc">
                                            Xem ngay
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col">
                            <div class="detail-box">
                                <div>
                                    <h2>
                                        Chào mừng bạn đến với
                                    </h2>
                                    <h1>
                                        VGshop
                                    </h1>
                                    <p>
                                        Mọi thắc mắc hãy trao đổi với chúng tôi, chúng tôi sẽ giúp bạn.
                                    </p>
                                    <div class="">
                                        <a href="#lienhe">
                                            Liên hệ
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- end slider section -->
</div>

<!-- do section -->

<section class="do_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                Bạn muốn học lập trình?
            </h2>
            <p>
                Khám phá sức mạnh của mã nguồn - Học lập trình ngay!
            </p>
        </div>
        <div class="do_container">
            <?php
            if (isset($listCategory)) :
                $i = 1;
                foreach ($listCategory as  $value) :
                    extract($value);
                    $imagePath = "public/images/" . $image_category;
            ?>
                    <div class="box <?php if ($i < 5) echo "arrow-start arrow_bg"; ?>">
                        <div class="img-box">
                            <img src="<?= $imagePath ?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>
                                <?= $name_category ?>
                            </h6>
                        </div>
                    </div>
            <?php
                    $i++;
                endforeach;
            endif;
            ?>

        </div>
    </div>
</section>

<!-- end do section -->

<!-- who section -->

<section class="who_section " id="ltlg">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="img-box">
                    <img src="public/images/who-img.jpg" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            Lập trình là gì?
                        </h2>
                    </div>
                    <p>
                        là quá trình tạo ra các chương trình máy tính, thường được gọi là chương trình hoặc mã nguồn, để thực hiện các nhiệm vụ xử lý thông tin trên máy tính. Nó bao gồm việc viết mã nguồn bằng các ngôn ngữ lập trình và sử dụng các công cụ phát triển phù hợp để biên dịch hoặc thông dịch mã nguồn thành mã máy thực thi.
                    </p>
                    <p>
                        Lập trình có thể được sử dụng để tạo ra các ứng dụng di động, trang web, phần mềm máy tính, trò chơi điện tử và nhiều hơn nữa. Nó là quá trình tạo ra các lệnh và thuật toán để điều khiển hành vi của máy tính và giải quyết các vấn đề cụ thể.
                    </p>
                    <div>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end who section -->


<!-- work section -->
<!-- <section class="work_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2>
                CREATIVE WORKS
            </h2>
            <p>
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation
            </p>
        </div>
        <div class="work_container layout_padding2">
            <div class="box b-1">
                <img src="public/images/w-1.png" alt="">
            </div>
            <div class="box b-2">
                <img src="public/images/w-2.png" alt="">

            </div>
            <div class="box b-3">
                <img src="public/images/w-3.png" alt="">

            </div>
            <div class="box b-4">
                <img src="public/images/w-4.png" alt="">

            </div>
        </div>
    </div>
</section> -->

<!-- end work section -->

<!-- client section -->
<section class="client_section mt-5">
    <div class="container">
        <div class="heading_container">
            <h2>
                Khóa Học Nổi Bật
            </h2>
        </div>
        <div class="carousel-wrap ">
            <div class="owl-carousel">
                <?php

                use App\Models\BillModel;

                if (isset($listCourse)) {
                    foreach ($listCourse as  $value) {
                        extract($value);
                        $imagePath = "public/images/" . $image_course;
                ?>
                        <div class="item">
                            <a href="/FE_xuong_ezcode/?ct_course&id_course=<?= $id_course ?>" style="color: black;">
                                <div class="box">
                                    <img src="<?= $imagePath ?>" alt="" style="height: 150px; width: 300px; object-fit: fill;">
                                    <div class="detail-box">
                                        <h5><?= $name_course ?></h5>
                                        <p>
                                            <?php
                                            $billModel = new BillModel();
                                            $checkBill = false;
                                            if (isset($_SESSION['user']['id_account'])) {
                                                $checkBill = $billModel->selectBill($id_course, $_SESSION['user']['id_account']);
                                            }


                                            if ($checkBill == false) {
                                                if (is_numeric($price_course)) echo number_format($price_course) . "<sup>đ</sup>";
                                                else echo $price_course;
                                            } else {
                                                echo "Tiếp Tục Học";
                                            }

                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- end client section -->

<!-- target section -->
<section class="target_section layout_padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="detail-box">
                    <h2>
                        1000+
                    </h2>
                    <h5>
                        Years of Business
                    </h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="detail-box">
                    <h2>
                        20000+
                    </h2>
                    <h5>
                        Projects Delivered
                    </h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="detail-box">
                    <h2>
                        10000+
                    </h2>
                    <h5>
                        Satisfied Customers
                    </h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="detail-box">
                    <h2>
                        1500+
                    </h2>
                    <h5>
                        Cups of Coffee
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end target section -->


<!-- contact section -->

<section class="contact_section layout_padding" id="lienhe">
    <div class="container">

        <div class="heading_container">
            <h2>
                Gửi phản hồi lại chúng tôi.
            </h2>
        </div>
        <div class="">
            <div class="">
                <div class="row">
                    <div class="col-md-9 mx-auto">
                        <div class="contact-form">
                            <form action="">
                                <div>
                                    <input type="text" placeholder="Họ tên " class="form-control">
                                </div>
                                <div>
                                    <input type="text" placeholder="Số điện thoại" class="form-control">
                                </div>
                                <div>
                                    <input type="email" placeholder="Email" class="form-control">
                                </div>
                                <div>
                                    <textarea name="" id="" cols="30" rows="8" placeholder="Phản hồi của bạn" class="form-control"></textarea>

                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn_on-hover">
                                        Gửi
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map_img-box">
            <img src="images/map-img.png" alt="">
        </div>
    </div>
</section>


<!-- end contact section -->