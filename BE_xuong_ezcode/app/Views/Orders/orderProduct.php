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
                        <form class="row" action="<?=$_SESSION['dir']?>/?pay" method="post">
                            <div class="col-8 " style="overflow: scroll; height: 500px;">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class=""></th>
                                            <th scope="col" class="col-3">Tên sản phẩm</th>
                                            <th scope="col" class="col-2">Ảnh </th>
                                            <th scope="col" class="col-2">Giá sản phẩm</th>
                                            <th scope="col" class="col-3">Màu sắc & Kiểu dáng</th>
                                            <th scope="col" class="col-2">Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        use Vinhphis\Templateadmin\Models\BienTheModel;

                                        if (isset($listProduct)) {
                                            foreach ($listProduct as  $value) {
                                                extract($value);
                                                $imgPath = "/BE_xuong_vaycuoi/public/images/" . $image;
                                                // var_dump($id_bienthe);
                                        ?>
                                                <tr data-toggle="collapse" data-target="#collapse<?= $id_product ?>" aria-expanded="false" aria-controls="collapse<?= $id_product ?>" style="cursor: pointer;">
                                                    <td></td>
                                                    <td><?= $name_product ?></td>
                                                    <td><img src="<?= $imgPath ?>" alt="" width="100"></td>
                                                    <td><?= number_format($price_product) ?></td>
                                                    <td><?= $name_color ?> & <?= $name_style ?></td>
                                                    <td><input type="number" placeholder="Nhập số lượng" name="soluong[]" required value="1" min="1"></td>
                                                </tr>
                                                <input type="hidden" name="id_bienthe[]" value="<?=$id_bienthe?>">
                                                <input type="hidden" name="giatien[]" value="<?=$price_product?>">
                                        <?php

                                            }
                                        }
                                        ?>


                                    </tbody>
                                </table>

                            </div>
                            <div class="col-md-4">
                                <div class="card-box">
                                    <h4 class="header-title">Thông Tin Người Mua</h4>
                                    <p class="sub-header">
                                    </p>

                                    <div>
                                        <div class="form-group">
                                            <label for="inputAddress" class="col-form-label">Họ và tên</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Họ và tên" name="hoten" value="<?= $hoten ?>" readonly>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4" class="col-form-label">Số Điện Thoại</label>
                                                <input type="number" class="form-control" id="inputEmail4" name="sdt" value="<?= $sdt ?>" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4" class="col-form-label">Email</label>
                                                <input type="email" class="form-control" id="inputPassword4" name="email" value="<?= $email ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress" class="col-form-label">Ngày Trả</label>
                                            <input type="date" class="form-control" id="inputAddress" name="ngaytra" value="<?= $date ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress" class="col-form-label">Address</label>
                                            <textarea name="diachi" id="" cols="30" rows="4" class="form-control" readonly><?= $diachi ?></textarea>

                                        </div>


                                        <div class="form-group">

                                        </div>

                                        <input type="submit" value="Tiếp Theo" class="btn btn-success" name="order_next">

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