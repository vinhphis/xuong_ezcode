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
                        <form class="row" action="<?= $_SESSION['dir'] ?>/?bill-ban-hang" method="post">
                            <div class="col-8 " style="overflow: scroll; height: 500px;">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" class=""></th>
                                            <th scope="col" class="">Tên sản phẩm</th>
                                            <th scope="col" class="">Ảnh </th>
                                            <th scope="col" class="">Giá sản phẩm</th>
                                            <!-- <th scope="col" class="col-3">Màu sắc & Kiểu dáng</th>
                                                <th scope="col" class="col-2">Số lượng</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        use Vinhphis\Templateadmin\Models\BienTheModel;

                                        $date = date("Y-m-d");
                                        // echo $date;
                                        if (isset($listProduct)) {
                                            foreach ($listProduct as  $value) {
                                                extract($value);
                                                $imgPath = "/BE_xuong_vaycuoi/public/images/" . $image;

                                        ?>
                                                <tr data-toggle="collapse" data-target="#collapse<?= $id_product ?>" aria-expanded="false" aria-controls="collapse<?= $id_product ?>" style="cursor: pointer;">
                                                    <td></td>
                                                    <td><?= $name_product ?></td>
                                                    <td><img src="<?= $imgPath ?>" alt="" width="100"></td>
                                                    <td><?= number_format($price_product) ?></td>
                                                    <!-- <td>Xem Thêm</td>
                                                        <td>Xem Thêm</td> -->
                                                </tr>
                                                <?php
                                                $listBienThe = new BienTheModel();
                                                $selectbt =   $listBienThe->selectAllPro($id_product);
                                                foreach ($selectbt as  $value1) :
                                                ?>
                                                    <tr>
                                                        <td class="collapse" id="collapse<?= $id_product ?>"><input type="checkbox" name="id_bienthe[]" value="<?= $value1['id_bienthe'] ?>"></td>
                                                        <td class="collapse" colspan="2" id="collapse<?= $id_product ?>">
                                                            <strong>Màu sắc & Kiểu dáng :</strong> <?= $value1['name_color'] ?> & <?= $value1['name_style'] ?>
                                                        </td>
                                                        <td class="collapse" id="collapse<?= $id_product ?>">
                                                            <strong>Số lượng :</strong> <?= $value1['so_luong'] ?>
                                                        </td>
                                                    </tr>
                                        <?php
                                                endforeach;
                                            }
                                        }
                                        ?>

                                        <!-- <tr data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            <td>Dữ liệu hàng 4</td>
                                            <td>Dữ liệu hàng 5</td>
                                            <td>Dữ liệu hàng 6</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="collapse" id="collapse2">
                                                Nội dung con của hàng 2
                                            </td>
                                        </tr> -->
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
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Họ và tên" name="hoten">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4" class="col-form-label">Số Điện Thoại</label>
                                                <input type="number" class="form-control" id="inputEmail4" placeholder="Số điện thoại" name="sdt">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4" class="col-form-label">Email</label>
                                                <input type="email" class="form-control" id="inputPassword4" placeholder="Email" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress" class="col-form-label">Ngày Trả</label>
                                            <input type="date" class="form-control" id="inputAddress" name="thoigian" min="<?= date('Y-m-d', strtotime($date . " +1 days")) ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress" class="col-form-label">Address</label>
                                            <textarea name="diachi" id="" cols="30" rows="4" class="form-control"></textarea>

                                        </div>


                                        <div class="form-group">

                                        </div>
                                        <input type="submit" value="Tiếp Tục" class="btn btn-success" name="order_next">

                                    </div>
                                </div>
                            </div>

                        </form>
                        <!-- end row -->

                    </div> <!-- end card-box -->
                </div><!-- end col -->
            </div>
            <!-- end row -->



            <!-- end row -->






            <!-- Form row -->

            <!-- end row -->


        </div> <!-- container -->

    </div> <!-- content -->



</div>