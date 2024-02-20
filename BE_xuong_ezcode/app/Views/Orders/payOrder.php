<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Trang Chủ</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Quản Lý Sản Phẩm</a></li>
                                <li class="breadcrumb-item active">Thêm Sản Phẩm</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Thêm Sản Phẩm</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <form class="row" action="<?= $_SESSION['dir'] ?>/?success-order" method="post">
                            <div class="col-8 " style="overflow: scroll; height: 500px;">

                                <table class="table">
                                    <thead>
                                        <tr>

                                            <th scope="col" class="col-2">Tên sản phẩm</th>
                                            <th scope="col" class="col-2">Ảnh </th>
                                            <th scope="col" class="col-2">Giá sản phẩm</th>
                                            <th scope="col" class="col-3">Màu sắc & Kiểu dáng</th>
                                            <th scope="col" class="col-1">Số lượng</th>
                                            <th scope="col" class="col-3">Thành Tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        use Vinhphis\Templateadmin\Models\BienTheModel;

                                        if (isset($bienthe)) {
                                            foreach ($bienthe as  $value) {
                                                extract($value);
                                                $imgPath = "/BE_xuong_vaycuoi/public/images/" . $image;
                                                // var_dump($id_bienthe);
                                        ?>
                                                <tr data-toggle="collapse" data-target="#collapse<?= $id_product ?>" aria-expanded="false" aria-controls="collapse<?= $id_product ?>" style="cursor: pointer;">

                                                    <td><?= $name_product ?></td>
                                                    <td><img src="<?= $imgPath ?>" alt="" width="100"></td>
                                                    <td><?= number_format($price_product) ?></td>
                                                    <td><?= $name_color ?> & <?= $name_style ?></td>
                                                    <td><?= $soluongmua ?></td>
                                                    <td><?= $thanhtien ?></td>
                                                    <!-- bảng detail order -->
                                                    <input type="hidden" name="soluongmua[]" value="<?= $soluongmua ?>">
                                                    <input type="hidden" name="thanhtien[]" value="<?= $thanhtien ?>">
                                                    <input type="hidden" name="id_bienthe[]" value="<?= $id_bienthe ?>">
                                                    <!-- bảng order -->
                                                    <input type="hidden" name="hoten" value="<?= $hoten ?>">
                                                    <input type="hidden" name="sdt" value="<?= $sdt ?>">
                                                    <input type="hidden" name="email" value="<?= $email ?>">
                                                    <input type="hidden" name="ngaytra" value="<?= $ngaytra ?>">
                                                    <input type="hidden" name="diachi" value="<?= $diachi ?>">

                                                </tr>

                                        <?php

                                            }
                                        }
                                        ?>


                                    </tbody>
                                </table>

                            </div>
                            <div class="col-md-4">
                                <div class="card-box">
                                    <h4 class="header-title">Thanh Toán Tiền</h4>
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home">Tiền Mặt</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#menu1">Chuyển Khoản</a>
                                        </li>

                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane container active" id="home">
                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Tổng Tiền Đơn Hàng</label>
                                                <input type="text" class="form-control" id="inputId2" name="tongtien" value="<?= $sum_price ?> " readonly>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Số Tiền Khách Đưa</label>
                                                <input type="text" class="form-control" id="inputId" name="thoigian" value="" min="<?= $sum_price ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Tiền Thừa</label>
                                                <input type="text" class="form-control" id="inputId3" name="thoigian" value="" readonly>
                                            </div>

                                            <input type="submit" value="Hoàn Tất" class="btn btn-success" name="success_pay">
                                        </div>
                                        <div class="tab-pane container fade" id="menu1">...</div>
                                        <div class="tab-pane container fade" id="menu2">...</div>
                                    </div>

                                    <div>

                                        <script>
                                            // Lấy tham chiếu đến phần tử input
                                            var inputElement = document.getElementById("inputId");
                                            var inputElement2 = document.getElementById("inputId2").value;
                                            var inputElement3 = document.getElementById("inputId3");
                                            console.log(inputElement2);
                                            // Gán sự kiện "input" cho phần tử input
                                            inputElement.addEventListener("input", function() {
                                                // Lấy giá trị nhập vào từ input
                                                var inputValue = inputElement.value;

                                                // // Giá trị mặc định
                                                // var defaultValue = 1;

                                                // Trừ giá trị mặc định từ giá trị nhập vào
                                                var result = inputValue - inputElement2;

                                                // Gán giá trị đã tính vào input
                                                inputElement3.value = result.toLocaleString('vi-VN', {
                                                    style: 'currency',
                                                    currency: 'VND'
                                                });;
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <!-- end row -->
                    </div> <!-- end card-box -->
                </div><!-- end col -->
            </div>

        </div> <!-- container -->

    </div> <!-- content -->



</div>