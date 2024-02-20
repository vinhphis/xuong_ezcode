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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Quản Lý Khóa Học</a></li>
                                <li class="breadcrumb-item active">Thêm Khóa Học</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Thêm Khóa Học</h4>
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
                                    <form class="form-horizontal" role="form" method="post" action="<?=$_SESSION['dir']?>/?add-product" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="simpleinput">Tên Khóa Học</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="simpleinput" name="nameProduct" class="form-control" placeholder="Nhập tên sản phẩm">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="simpleinput">Giá Khóa Học</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="simpleinput" name="priceProuct" class="form-control" placeholder="Nhập giá sản phẩm">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="example-fileinput">Ảnh</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="example-fileinput" name="imageProduct">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Danh Mục</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="id_category">
                                                    <option value="0" hidden="">-- Vui lòng Chọn --</option>
                                                    <?php
                                                    if (isset($listCategory)) :
                                                        foreach ($listCategory as $value) :
                                                            extract($value);
                                                    ?>
                                                            <option value="<?= $id_category ?>"><?= $name_category ?></option>
                                                    <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="example-textarea">Mô Tả</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="example-textarea" rows="5" name="mota" placeholder="Mô tả sản phẩm"></textarea>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary" name="add">Thêm Khóa Học</button>
                                        <a href="<?=$_SESSION['dir']?>/?list-product" class="btn btn-secondary">Quay trang danh sách khóa học</a>
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