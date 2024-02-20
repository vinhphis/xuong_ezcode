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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Trang Chú</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Quản Lý Khóa Học</a></li>
                                <li class="breadcrumb-item active">Danh Sách Khóa Học</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Danh Sách Khóa Học</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">


                        <div class="mb-2">
                            <div class="row">
                                <div class="col-12 text-sm-center form-inline">
                                    <div class="form-group mr-2">
                                        <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                            <option value="" hidden>Show all</option>
                                            <option value="active">Active</option>
                                            <option value="disabled">Disabled</option>
                                            <option value="suspended">Suspended</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                                    </div>
                                </div>
                                <div class="col-12 text-lg-right mr-2">
                                    <a href="<?= $_SESSION['dir'] ?>/?add-product" class="btn btn-success">Thêm Khóa Học</a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                <thead>
                                    <tr>
                                        <th data-toggle="true">Tên Khóa Học</th>
                                        <th>Giá</th>
                                        <th data-hide="phone">Ảnh</th>
                                        <th data-hide="phone, tablet">Danh Mục</th>
                                        <th data-hide="phone, tablet">Mô Tả</th>
                                        <th data-hide="phone, tablet">Đánh Giá</th>
                                        <!-- <th data-hide="phone, tablet">Status</th> -->
                                        <th>Tác Vụ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($listProduct)) :
                                        foreach ($listProduct as $value) :

                                            extract($value);

                                            $imagePath = "/BE_xuong_ezcode/public/images/" . $image_course;
                                            $xoaProduct = $_SESSION['dir'] . "/?delete-product&product_id=" . $id_course;
                                            $suaProduct = $_SESSION['dir'] . "/?update-product&product_id=" . $id_course;

                                    ?>
                                            <tr>
                                                <td><?= $name_course ?></td>
                                                <td>
                                                    <?php
                                                    if (is_numeric($price_course)) echo number_format($price_course) . "<sup>đ</sup>";
                                                    else echo $price_course;      ?>
                                                </td>
                                                <td><img src="<?= $imagePath ?>" alt="" height="100"></td>
                                                <td><?= $name_category ?></td>
                                                <td><?= $mota_course ?></td>
                                                <td><?= $rating ?></td>
                                                <!-- <?php
                                                        if ($action == 0) {
                                                            echo ' <td><span class="badge label-table badge-secondary">Disabled</span></td>';
                                                        } else  if ($action == 1) {
                                                            echo ' <td><span class="badge label-table badge-success">Active</span></td>';
                                                        } else if ($action == 2) {
                                                            echo '<td><span class="badge label-table badge-danger">Suspended</span></td>';
                                                        }
                                                        ?> -->
                                                <td>
                                                    <?php
                                                    // var_dump($act);
                                                    if ($act == 0) {
                                                    ?>
                                                        <a href="<?= $xoaProduct ?>" onclick="return confirm('Bạn có muốn hiện sản phẩm này không?')"><i class="fe-eye-off" style="font-size: 25px; color: black;"></i> </a>
                                                    <?php
                                                    } else if ($act == 1) {
                                                    ?>
                                                        <a href="<?= $xoaProduct ?>" onclick="return confirm('Bạn có muốn ẩn sản phẩm này không?')"><i class="fe-eye" style="font-size: 25px; color: black;"></i> </a>
                                                    <?php
                                                    }
                                                    ?>
                                                    <a href="<?= $suaProduct ?>"><i class="remixicon-edit-box-fill" style="font-size: 25px;  color: black;"></i></a>
                                                </td>
                                            </tr>
                                    <?php
                                        endforeach;
                                    endif;
                                    ?>

                                </tbody>
                                <tfoot>
                                    <tr class="active">
                                        <td colspan="7">
                                            <div class="text-right">
                                                <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div> <!-- end .table-responsive-->
                    </div> <!-- end card-box -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->


        </div> <!-- container -->

    </div> <!-- content -->

    <!-- Footer Start -->

    <!-- end Footer -->

</div>