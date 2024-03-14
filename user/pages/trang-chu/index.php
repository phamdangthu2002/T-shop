<?php
require_once '../model/SanPhamModel.php';
require_once '../model/AnhSpModel.php';
require_once '../model/CommonModel.php';
$sp = new SanPhamModel();
$anhSp = new AnhSpModel();
$cm = new CommonModel();
$sp__Get_Top_Updated_5 = $sp->SanPham__Get_Top_Updated(5);
$sp__Get_Top_Updated_8 = $sp->SanPham__Get_Top_Updated(8);
$sp__Get_Top_Sale = $sp->SanPham__Get_Top_Sale();
$sp__Get_Top_Random = $sp->SanPham__Get_Top_Random(5);

$top = 0;
?>

<div class="banner">
    <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../assets/images/banner_img.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="slide-light-text"> Sắp ra mắt </div>
                    <div class="slide-bold-text">
                        NIKE PHÁT HÀNH BỘ SƯU TẬP GIÀY ĐÁ BÓNG MAD READY KHỞI ĐỘNG 2024
                    </div>
                    <div class="slide-btn">
                        <a href="index.php?pages=loai-sp" class="slide-btn2">MUA HÀNG</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../assets/images/banner_img1.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="slide-light-text"> Sắp ra mắt </div>
                    <div class="slide-bold-text">
                        NIKE PHÁT HÀNH BỘ SƯU TẬP GIÀY ĐÁ BÓNG MAD READY KHỞI ĐỘNG 2024
                    </div>
                    <div class="slide-btn">
                        <a href="index.php?pages=loai-sp" class="slide-btn2">MUA HÀNG</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../assets/images/banner_img2.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="slide-light-text"> Sắp ra mắt </div>
                    <div class="slide-bold-text">
                        BỘ SƯU TẬP ADIDAS SOLAR ENERGY PACK
                    </div>
                    <div class="slide-btn">
                        <a href="index.php?pages=loai-sp" class="slide-btn2">MUA HÀNG</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $products = [
    [
        'image' => '../assets/uploads/1/ss1_1706722837.png',
        'title' => 'Product 1',
        'description' => 'Description for product 1.',
        'link' => '#'
    ],
    [
        'image' => '../assets/uploads/1/ss1_1706723500.png',
        'title' => 'Product 2',
        'description' => 'Description for product 2.',
        'link' => '#'
    ],
    [
        'image' => '../assets/uploads/1/ss2_1706722837.png',
        'title' => 'Product 2',
        'description' => 'Description for product 2.',
        'link' => '#'
    ],
    [
        'image' => '../assets/uploads/1/ss3_1706722837.png',
        'title' => 'Product 2',
        'description' => 'Description for product 2.',
        'link' => '#'
    ],
    [
        'image' => '../assets/uploads/1/ss3_1706722837.png',
        'title' => 'Product 2',
        'description' => 'Description for product 2.',
        'link' => '#'
    ],
    [
        'image' => '../assets/uploads/1/ss3_1706722837.png',
        'title' => 'Product 2',
        'description' => 'Description for product 2.',
        'link' => '#'
    ],
    [
        'image' => '../assets/uploads/1/ss3_1706722837.png',
        'title' => 'Product 2',
        'description' => 'Description for product 2.',
        'link' => '#'
    ],
    // Add more products as needed
]; ?>






<div class="main-center">
    <div class="main-title-container">
        <a href="index.php?pages=sp-moi&page=1">
            <div class="item-title color-7"><i class='bx bx-star bx-tada'></i>MỚI CẬP NHẬT</div>
        </a>
    </div>
    <div class="row">
        <?php foreach ($sp__Get_Top_Updated_5 as $item): ?>
            <?php if (count($sp__Get_Top_Updated_5) > 0): ?>
                <?php $anhSp__Get_By_Id_Sp_First = $anhSp->AnhSp__Get_By_Id_Sp_First($item->masp); ?>
                <?php if (isset($anhSp__Get_By_Id_Sp_First->masp)): ?>
                    <div class="col-md-2">
                        <div class="card mb-5">
                            <a <?= $anhSp__Get_By_Id_Sp_First->masp ?>>
                                <span class="manga-note background-1"><i class="bx bxs-badge-dollar"></i>
                                    <?= $cm->getTimeAgo($item->ngaythem) ?>
                                </span>
                                <img src="../assets/<?= $anhSp__Get_By_Id_Sp_First->hinhanh ?>">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <div class="manga-title color-1">
                                            <?= $item->tensp ?>
                                        </div>
                                    </h5>
                                    <p class="card-text">

                                    </p>
                                    <a href="index.php?pages=chi-tiet&masp=<?= $anhSp__Get_By_Id_Sp_First->masp ?>"
                                        class="btn btn-primary">Mua Ngay</a>
                                </div>
                        </div>
                    </div>
                <?php endif ?>
            <?php endif ?>
        <?php endforeach; ?>
    </div>
</div>



<div class="main-center">
    <div class="main-title-container__left">
        <a href="index.php?pages=sp-top">
            <div class="item-title color-8"><i class='bx bx-star bx-tada'></i>Sản phẩm chất lượng</div>
        </a>
    </div>
    <div class="row">
        <?php foreach ($sp__Get_Top_Updated_8 as $item): ?>
            <?php if (count($sp__Get_Top_Updated_8) > 0): ?>
                <?php $anhSp__Get_By_Id_Sp_First = $anhSp->AnhSp__Get_By_Id_Sp_First($item->masp); ?>
                <?php if (isset($anhSp__Get_By_Id_Sp_First->masp)): ?>
                    <div class="col-md-3">
                        <div class="card mb-5">
                            <div class="manga-container">
                                <div class="manga-thumbnail">
                                    <img src="../assets/<?= $anhSp__Get_By_Id_Sp_First->hinhanh ?>">
                                    <span class="manga-note background-1"><i class="bx bxs-badge-dollar"></i>
                                        <?= number_format($item->dongia) ?>đ
                                    </span>
                                </div>

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="manga-title color-1">
                                        <?= $item->tensp ?>
                                    </div>
                                </h5>
                                <p class="card-text">

                                </p>
                                <a href="index.php?pages=chi-tiet&masp=<?= $anhSp__Get_By_Id_Sp_First->masp ?>"
                                    class="btn btn-primary">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            <?php endif ?>
        <?php endforeach; ?>
    </div>

</div>




<div class="main-center">
    <div class="main-title-container__right">
        <a href="index.php?pages=sp-top">
            <div class="item-title color-3"><i class='bx bx-star bx-tada'></i>TOP BÁN CHẠY</div>
        </a>
    </div>
    <div class="row">
        <?php foreach ($sp__Get_Top_Sale as $item): ?>
            <?php if (count($sp__Get_Top_Sale) > 0): ?>
                <?php $anhSp__Get_By_Id_Sp_First = $anhSp->AnhSp__Get_By_Id_Sp_First($item->masp); ?>
                <?php if (isset($anhSp__Get_By_Id_Sp_First->masp)): ?>
                    <div class="col-md-4">
                        <div class="card mb-5">
                            <div class="manga-container__right" id="top_<?= $top++ ?>">
                                <div class="manga-thumbnail">
                                    <img src="../assets/<?= $anhSp__Get_By_Id_Sp_First->hinhanh ?>">
                                    <span class="manga-note background-7"> <b>Top
                                            <?= $top ?>
                                        </b> |
                                        <?= $cm->formatThousand($item->luotmua) ?> lượt mua
                                    </span>
                                </div>
                                <div class="blur"></div>
                                <div class="manga-title color-3">
                                    <?= $item->tensp ?>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="manga-title color-3">
                                        <?= $item->tensp ?>
                                    </div>
                                </h5>
                                <p class="card-text">

                                </p>
                                <a href="index.php?pages=chi-tiet&masp=<?= $anhSp__Get_By_Id_Sp_First->masp ?>"
                                    class="btn btn-primary">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            <?php endif ?>
        <?php endforeach; ?>
    </div>
</div>




<div class="main-center">
    <div class="main-title-container">
        <a href="index.php?pages=sp-ngau-nhien">
            <div class="item-title color-8"><i class='bx bx-book-reader'></i>HÔM NAY MUA GÌ?</div>
        </a>
    </div>
    <div class="row">
        <?php foreach ($sp__Get_Top_Random as $item): ?>
            <?php if (count($sp__Get_Top_Random) > 0): ?>
                <?php $anhSp__Get_By_Id_Sp_First = $anhSp->AnhSp__Get_By_Id_Sp_First($item->masp); ?>
                <?php if (isset($anhSp__Get_By_Id_Sp_First->masp)): ?>
                    <div class="col-md-2">
                        <div class="card mb-5">
                            <div class="manga-container">
                                <div class="manga-thumbnail">
                                    <img src="../assets/<?= $anhSp__Get_By_Id_Sp_First->hinhanh ?>">
                                    <span class="manga-note background-8">
                                        <?= number_format($item->dongia) ?>đ</i>
                                    </span>
                                </div>

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <div class="manga-title color-8">
                                        <?= $item->tensp ?>
                                    </div>
                                </h5>
                                <p class="card-text">

                                </p>
                                <a href="index.php?pages=chi-tiet&masp=<?= $anhSp__Get_By_Id_Sp_First->masp ?>"
                                    class="btn btn-primary">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            <?php endif ?>
        <?php endforeach; ?>
    </div>
</div>








<div class="row">
    <?php foreach ($products as $product): ?>
        <div class="col-md-3">
            <div class="card mb-5">
                <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['title']; ?>">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $product['title']; ?>
                    </h5>
                    <p class="card-text">
                        <?php echo $product['description']; ?>
                    </p>
                    <a href="<?php echo $product['link']; ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>





<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 10000,
            autoplayHoverPause: true,
            autoplaySpeed: 3000,
            smartSpeed: 3000,
            fluidSpeed: 3000,
            dragEndSpeed: 3000,
            touchDrag: true,
            mouseDrag: true,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }

        });
    });
</script>