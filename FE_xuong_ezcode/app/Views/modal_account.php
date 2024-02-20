<style>
  .modal {
    padding: 50px;
  }
</style>
<img src="public/images/user.png" alt="" data-toggle="modal" data-target="#myModal">

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Xin chào : <strong><?= $_SESSION['user']['hoten']  ?></strong></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body ">
        <ul class="nav nav-tabs d-flex justify-content-center" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Quản Lý Tài Khoản</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Khóa Học Của Tôi</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/FE_xuong_ezcode/?logout">Đăng Xuất</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div id="home" class="container tab-pane active"><br>
            <form action="#">
              <div class="form-group">
                <label for="username">Tên đăng nhập</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $_SESSION['user']['username'] ?>" disabled>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $_SESSION['user']['email'] ?>">
              </div>
              <div class="form-group">
                <label for="fullname">Họ và tên</label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $_SESSION['user']['hoten'] ?>">
              </div>
              <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?= $_SESSION['user']['sdt'] ?>">
              </div>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-success ">Lưu thay đổi</button>
              </div>

            </form>

          </div>

          <div id="menu1" class="container tab-pane fade"><br>
            <section style="height: 300px; overflow-y: scroll;">
              <table class="table table-bordered">
                <thead>
                  <tr style="border-collapse: collapse;">
                    <th scope="col">Khóa Học</th>
                    <th scope="col">Tác Vụ</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  use App\Models\BillModel;

                  $billModel = new BillModel();
                  $listCourseUser = $billModel->selectBillAccount($_SESSION['user']['id_account']);
                  foreach ($listCourseUser as $value) {
                    extract($value);
                    $imgPath = "public/images/" . $image_course;
                    $linkKh = "/FE_xuong_ezcode/?video_kh";
                  ?>
                    <tr>

                      <td colspan="">
                        <img src="<?= $imgPath ?>" alt="" height="100">
                        <span><?= $name_course ?></span>
                      </td>

                      <td>
                        <a href="<?= $linkKh ?>">Xem khóa học</a>
                      </td>
                    </tr>
                  <?php  } ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->

    </div>
  </div>
</div>