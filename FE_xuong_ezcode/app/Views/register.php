<div class="row justify-content-center mt-4">
    <div class="col-md-6  p-5">
        <h2 class="text-center">Đăng Kí</h2>
        <form method="post" action="/FE_xuong_ezcode/?register">
            <div class="form-group">
                <label for="name">Họ và tên:</label>
                <input type="text" class="form-control" id="name" placeholder="Nhập họ và tên" name="hoten">
            </div>
            <div class="form-group">
                <label for="password">Số Điện Thoại:</label>
                <input type="password" class="form-control" id="password" placeholder="Nhập số điện thoại" name="sdt">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email">
            </div>
            <div class="form-group">
                <label for="user">Tài Khoản:</label>
                <input type="text" class="form-control" id="user" placeholder="Nhập tài khoản" name="username">
            </div>
            <p><a href="#">Quên mật khẩu</a></p>
            <div class="text-center">
                <p>Bạn đã có tài khoản? <a href="/FE_xuong_ezcode/?login">Đăng Nhập</a></p> <br>
                <!-- <button type="submit" class="btn btn-primary">Đăng Kí</button> -->
                <input type="submit" value="Đăng Ký" name="dk" class="btn btn-primary">
            </div>

        </form>
    </div>
</div>