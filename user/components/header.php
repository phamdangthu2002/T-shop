<?php
require_once "../model/LoaiSpModel.php";
require_once "../model/ThuongHieuModel.php";
require_once "../model/ChiTietGioHangModel.php";
require_once "../model/GioHangModel.php";
$loaisp = new LoaiSpModel();
$th = new ThuongHieuModel();
$ctgh = new ChiTietGioHangModel();
$gh = new GioHangModel();
// Lấy danh sách thể loại
$loaiSp__Get_All = $loaisp->LoaiSp__Get_All();
$thuongHieu__Get_All = $th->ThuongHieu__Get_All();
?>

<!-- Header -->
<header class="p-3 text-white bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 text-white btn btn-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white btn btn-secondary">Features</a></li>
                <!-- <div class="dropdown">
                        <div class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </div>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div> -->
                <?php $brands = array("Adidas", "Nike", "Vietnam"); ?>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Thương hiệu
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <!-- Lặp qua mảng và tạo các mục trong dropdown -->
                        <?php foreach ($thuongHieu__Get_All as $item): ?>
                            <li><a class='dropdown-item' href="index.php?pages=thuong-hieu&math=<?= $item->math ?>">
                                    <?= $item->tenth ?>
                                </a></li>
                        <?php endforeach ?>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </div>
                <li><a href="#" class="nav-link px-2 text-white btn btn-secondary">Pricing</a></li>
                <li><a href="#" class="nav-link px-2 text-white btn btn-secondary">FAQs</a></li>




            </ul>



            <div class="navbar-display-user-action">
                <a href="#" class="nav-link px-2 text-white btn btn-secondary">
                    <?php if (isset($_SESSION['user'])): ?>
                        <div class="navbar-display-cart" onclick="return(location.href='./index.php?pages=gio-hang')">
                            <i class='bx bxs-cart'>
                                <?php
                                $res = 0;
                                if (isset($_SESSION['user'])) {
                                    $magh = isset($gh->GioHang__Get_By_Id_Kh($_SESSION['user']->makh)->magh) ? $gh->GioHang__Get_By_Id_Kh($_SESSION['user']->makh)->magh : 0;
                                    $res = count($ctgh->ChiTietGioHang__Get_By_Id_GH($magh));
                                }
                                ?>
                                <span id="cart-item">
                                    <?= ($res) ?>
                                </span>
                            </i>
                        </div>

                    <?php else: ?>
                        <div class="navbar-display-cart" onclick="return checkLogin()">
                            <i class='bx bxs-cart'>
                                <span id="cart-item">0</span>
                            </i>
                        </div>
                    <?php endif ?>
                </a>
            </div>



            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>
            <div class="text-end">
                <!-- Kiểm tra nếu người dùng đã đăng nhập -->
                <?php if (isset($_SESSION['user'])): ?>
                    <!-- Hiển thị dropdown khi đã đăng nhập -->
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle show"
                            data-bs-toggle="dropdown" aria-expanded="true">
                            <!-- <img src="https://github.com/mdo.png" alt="mdo" width="50" height="50" class="rounded-circle btn btn-secondary"> -->
                            <img width="40" height="50" class="rounded-circle btn btn-secondary"
                                src="../assets/images/scooter.2.svg">
                        </a>
                        <ul class="dropdown-menu text-small hidden"
                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 34px);"
                            data-popper-placement="bottom-start">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../auth/pages/action.php?req=dang-xuat">Sign out</a></li>
                        </ul>
                    </div>
                <?php else: ?>

                    <!-- Hiển thị nút Đăng nhập nếu chưa đăng nhập -->
                    <button type="button" class="btn btn-outline-light me-2"
                        onclick="window.location.href='../auth?pages=dang-nhap'">Login</button>
                    <!-- Nút Đăng ký -->
                    <button type="button" class="btn btn-warning">Sign-up</button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
<!-- <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div> -->






<!-- Nút hành động nổi -->
<!-- <div class="floating-action"> -->
<!-- Nút chuyển đổi tìm kiếm -->
<!-- <div class="action-item action-toggle"><i class="bx bx-target-lock"></i></div> -->
<!-- Nút trang chủ -->
<!-- <div class="action-item action-home"><i class="bx bx-home"></i></div> -->
<!-- Nút menu -->
<!-- <div class="action-item action-menu"><i class="bx bx-menu"></i></div> -->
<!-- Nút người dùng -->
<!-- <div class="action-item action-user"><i class="bx bx-user"></i></div> -->
<!-- Nút lên đầu trang -->
<!-- <div class="action-item action-top"><i class="bx bx-chevron-up"></i></div> -->
<!-- </div>  -->