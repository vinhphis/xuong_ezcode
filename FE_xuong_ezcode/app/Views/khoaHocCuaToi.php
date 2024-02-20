<section class="client_section mt-5">
    <div class="container">
        <div class="heading_container">
            <h2>
                Khóa Học Miễn Phí
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
<section class="client_section mt-5">
    <div class="container">
        <div class="heading_container">
            <h2>
                Khóa Học Proo
            </h2>
        </div>
        <div class="carousel-wrap ">
            <div class="owl-carousel">
                <?php
                if (isset($listCourseFree)) {
                    foreach ($listCourseFree as  $value) {
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