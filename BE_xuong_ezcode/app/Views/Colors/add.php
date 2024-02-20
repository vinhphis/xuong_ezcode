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
                                <li class="breadcrumb-item active">Thêm Màu Sắc</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Thêm Màu Sắc</h4>
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
                                          action="<?=$_SESSION['dir']?>/?add-color" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="simpleinput">Tên Màu Sắc</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="simpleinput" name="nameColor"
                                                       class="form-control" placeholder="Nhập màu sắc">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="add">Thêm Màu Sắc</button>
                                        <a href="<?=$_SESSION['dir']?>/?list-color" class="btn btn-secondary">Quay trang danh
                                            sách màu sắc</a>
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