<div class="container">
    <div class="row justify-content-center login-container">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Đăng nhập</h5>
                </div>
                <div class="card-body">
                    <form action="./pages/action.php?req=dang-nhap" method="post">
                        <div class="mb-3">
                            <label for="emailUsername" class="form-label">Email hoặc tên người dùng</label>
                            <input type="text" class="form-control" id="emailUsername" name="emailUsername"
                                aria-describedby="emailUsernameHelp" placeholder="example: taikhoan@gmail.com ..."
                                required autofocus>
                            <div id="emailUsernameHelp" class="form-text">Nhập email hoặc tên người dùng của bạn.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng nhập</button>
                        <div id="emailUsernameHelp" class="form-text" >Bạn chưa có tài khoản?<a href='../auth?pages=dang-ky'>đăng ký ngay</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>