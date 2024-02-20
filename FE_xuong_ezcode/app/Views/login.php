<div class="row justify-content-center">
    <div class="col-md-6 p-5">
        <h2 class="text-center">Đăng Nhập</h2>
        <form method="post" action="/FE_xuong_ezcode/?login">
            <div class="form-group">
                <label for="email">Tài Khoản: </label>
                <input type="text" class="form-control" id="email" placeholder="Nhập tài khoản" name="username">
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" name="password">
            </div>
            <p><a href="#">Quên mật khẩu</a></p>
            <div class="text-center">
                <p>Bạn chưa có tài khoản? <a href="/FE_xuong_ezcode/?register">Đăng Ký</a></p> <br>
                <!-- <button type="submit" class="btn btn-primary">Đăng Nhập</button> -->
                <input type="submit" value="Đăng Nhập" name="dn" class="btn btn-primary">
            </div>

        </form>
    </div>
</div>