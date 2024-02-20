<?php
if (isset($checkCourse)) :
    extract($checkCourse);
    $imgPath = "public/images/" . $image_course;
?>
    <div class="row p-5">
        <div class="col-md-7  d-flex  justify-content-center" style="position: relative; ">
            <p style="width: 600px;"><?= $mota_course ?></p>
            <form method="post" action="/FE_xuong_ezcode/?pay_course">
                <input type="hidden" name="name_course" value="<?= $name_course ?>">
                <input type="hidden" name="id_course" value="<?= $id_course ?>">
                <div class="group-form">
                    <input type="submit" name="pay_course" value="Thanh toán ngay <?= number_format($price_course) . "VND"  ?>" class="btn btn-primary " style="width: 80%;position: absolute; bottom: 100px; left: 100px;">
                </div>
            </form>
        </div>
        <div class="col-md-5 text-center">

            <div>
                <img src="<?= $imgPath ?>" alt="">
            </div>
            <div>
                <h2><?= $name_course ?></h2>
                <p><?= number_format($price_course) . "VND" ?></p>
            </div>



        </div>
    </div>
<?php
endif;
?>