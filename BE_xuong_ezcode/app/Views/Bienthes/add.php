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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Quản Lý Danh Mục</a></li>
                                <li class="breadcrumb-item active">Thêm Biến Thể</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Thêm Biến Thể</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">


                        <div class="row">
                            <div class="col-12">
                                <div class="p-2">
                                    <form class="form-horizontal" role="form" method="post"
                                          action="<?=$_SESSION['dir']?>/?add-bienthe" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Sản Phẩm</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="id_product">
                                                    <option value="0" hidden="">-- Vui lòng Chọn --</option>
                                                    <?php
                                                    if (isset($listProduct)) :
                                                        foreach ($listProduct as $value) :
                                                            extract($value);
                                                            ?>
                                                            <option value="<?= $id_product ?>"><?= $name_product ?></option>
                                                        <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Màu Sắc</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="id_color">
                                                    <option value="0" hidden="">-- Vui lòng Chọn --</option>
                                                    <?php
                                                    if (isset($listColor)) :
                                                        foreach ($listColor as $value) :
                                                            extract($value);
                                                            ?>
                                                            <option value="<?= $id_color ?>"><?= $name_color ?></option>
                                                        <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kiểu Dáng</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="id_style">
                                                    <option value="0" hidden="">-- Vui lòng Chọn --</option>
                                                    <?php
                                                    if (isset($styleModel)) :
                                                        foreach ($styleModel as $value) :
                                                            extract($value);
                                                            ?>
                                                            <option value="<?= $id_style ?>"><?= $name_style ?></option>
                                                        <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="simpleinput">Số Lượng</label>
                                            <div class="col-sm-10">
                                                <input type="number" id="simpleinput" name="soluong"
                                                       class="form-control" placeholder="Nhập số lượng">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="add">Thêm Biến Thể</button>
                                        <a href="<?=$_SESSION['dir']?>/?list-color" class="btn btn-secondary">Quay trang danh
                                            sách biến thể</a>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                    </div> <!-- end card-box -->
                </div><!-- end col -->
            </div>
            <!-- end row -->


        </div> <!-- container -->

    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    2016 - 2019 &copy; Minton theme by <a href="">Coderthemes</a>
                </div>
                <div class="col-md-6">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript:void(0);">About Us</a>
                        <a href="javascript:void(0);">Help</a>
                        <a href="javascript:void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>