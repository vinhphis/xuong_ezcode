<!-- who section -->

<section class="who_section layout_padding mt-5">
  <div class="container">
    <?php
    // foreach ($listCourse as  $value) {
    use App\Models\BillModel;

    extract($listCourse);
    $imagePath = "public/images/" . $image_course;
    ?>
    <div class="row">
      <div class="col-md-5">
        <div class="img-box">
          <img src="<?= $imagePath ?>" alt="123">
        </div>
      </div>
      <div class="col-md-7">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              <?= $name_course ?>
            </h2>
            <span>
              <?php
              if (is_numeric($price_course)) echo number_format($price_course) . "<sup>đ</sup>";
              else echo $price_course;
              ?>
            </span>
          </div>
          <p>
            <?= $mota_course ?>
          </p>
          <form method="post" action="/FE_xuong_ezcode/?dk_kh">
            <input type="hidden" name="id_course" value=" <?= $id_course ?>">
            <input type="hidden" name="price_course" value=" <?= $price_course ?>">
            <?php
            $billModel = new BillModel();
            $checkBill = false;
            if (isset($_SESSION['user']['id_account'])) {
              $checkBill = $billModel->selectBill($id_course, $_SESSION['user']['id_account']);
            }
            // var_dump($checkBill);
            if ($checkBill == false) {
              echo ' <input type="submit" value="Đăng Ký Ngay" name="dk_kh">';
            } else {
              echo '<input type="submit" value="Tiếp Tục Học" name="next">';
            }
            ?>

          </form>
        </div>
      </div>
    </div>
    <?php

    ?>
  </div>
</section>
<!-- <script>
  alert('Vui lòng không bỏ trống thông tin');
</script> -->
<!-- end who section -->