<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Đăng ký</h5>
                </div>
                <div class="card-body">
                    <form action="./action.php?req=dang-ky" method="post">
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" id="fullName" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Xác nhận mật khẩu</label>
                            <input type="password" class="form-control" id="confirmPassword" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>