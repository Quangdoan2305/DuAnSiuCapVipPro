<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">


<!-- Mirrored from themesflat.co/html/ecomus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 14:40:41 GMT -->

<head>
    <meta charset="utf-8">
    <title>Ecomus - Shop</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- font -->
    <link rel="stylesheet" href="assets/Users/fonts/fonts.css">
    <link rel="stylesheet" href="assets/Users/fonts/font-icons.css">
    <link rel="stylesheet" href="assets/Users/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/Users/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/Users/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/Users/css/styles.css" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/Users/images/logo/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/Users/images/logo/favicon.png">
    <style>
        .header-default {
            margin-bottom: 0 !important;
        }
    </style>

</head>

<body class="preload-wrapper popup-loader">


    <!-- preload -->
    <!-- <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div> -->
    <!-- /preload -->
    <div id="wrapper">
        <!-- Header -->
        <?php include 'app/Views/Users/layouts/header.php' ?>
        <!-- /Header -->
        <div class="tf-page-title style-2">
            <div class="container-full">
                <div class="heading text-center">
                    <?php
                    if (isset($category)) {
                        echo $category->name;
                    } else {
                        echo "New Arrival";
                    }
                    ?>

                </div>
            </div>
        </div>

        <section class="flat-spacing-2">
            <div class="container">
                <div class="tf-shop-control grid-3 align-items-center">
                    <div class="tf-control-filter">
                        <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-btn-filter"><span class="icon icon-filter"></span><span class="text">Filter</span></a>
                    </div>
                    <ul class="tf-control-layout d-flex justify-content-center">

                        <li class="tf-view-layout-switch sw-layout-6" data-value-grid="grid-6">
                            <div class="item"><span class="icon icon-grid-6"></span></div>
                        </li>
                    </ul>
                    <div class="tf-control-sorting d-flex justify-content-end">
                        <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                            <div class="btn-select">
                                <span class="text-sort-value">Featured</span>
                                <span class="icon icon-arrow-down"></span>
                            </div>
                            <div class="dropdown-menu">
                                <div class="select-item active">
                                    <span class="text-value-item">Featured</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Best selling</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Alphabetically, A-Z</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Alphabetically, Z-A</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Price, low to high</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Price, high to low</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Date, old to new</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Date, new to old</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="wrapper-control-shop">
                    <div class="meta-filter-shop"></div>
                    <div class="grid-layout wrapper-shop" data-grid="grid-2">
                        <!-- card product 1 -->
                        <?php foreach ($listProduct as $key => $value): ?>
                            <div class="card-product" data-price="<?= $value->price ?>" data-color="orange black white">
                                <div class="card-product-wrapper">
                                    <a href="<?= BASE_URL ?>?act=product-detail&product_id=<?= $value->id ?>" class="product-img">
                                        <img class="img-product ls-is-cached lazyloaded" data-src="<?= $value->image_main ?>" src="<?= $value->image_main ?>" alt="image-product">
                                        <img class="img-hover ls-is-cached lazyloaded" data-src="<?= $value->image_main ?>" src="<?= $value->image_main ?>" alt="image-product">
                                    </a>
                                    <div class="list-product-btn absolute-2">
                                        <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                            <span class="icon icon-bag"></span>
                                            <span class="tooltip">Quick Add</span>
                                        </a>
                                        <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                            <span class="icon icon-heart"></span>
                                            <span class="tooltip">Add to Wishlist</span>
                                            <span class="icon icon-delete"></span>
                                        </a>
                                        <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                            <span class="icon icon-view"></span>
                                            <span class="tooltip">Quick View</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-product-info">
                                    <a href="<?= BASE_URL ?>?act=product-detail&product_id=<?= $value->id ?>" class="title link"><?= $value->name ?></a>

                                    <?php
                                    if ($value->price_sale != null): ?>
                                        <span class="price" style="margin-right: 5px; text-decoration: line-through">
                                            <?= number_format($value->price) ?> $
                                        </span>
                                        <span class="price price_sale">
                                            <?= number_format($value->price_sale) ?> $
                                        </span>
                                    <?php else: ?>
                                        <span class="price" style="margin-right: 5px;">
                                            <?= number_format($value->price) ?> $
                                        </span>
                                    <?php endif; ?>


                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- pagination -->
                    <ul class="tf-pagination-wrap tf-pagination-list tf-pagination-btn">
                        <li class="active">
                            <a href="#" class="pagination-link">1</a>
                        </li>
                        <li>
                            <a href="#" class="pagination-link animate-hover-btn">2</a>
                        </li>
                        <li>
                            <a href="#" class="pagination-link animate-hover-btn">3</a>
                        </li>
                        <li>
                            <a href="#" class="pagination-link animate-hover-btn">4</a>
                        </li>
                        <li>
                            <a href="#" class="pagination-link animate-hover-btn">
                                <span class="icon icon-arrow-right"></span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </section>

        <!-- Filter -->
        <div class="offcanvas offcanvas-start canvas-filter" id="filterShop" aria-modal="true" role="dialog">
            <div class="canvas-wrapper">
                <header class="canvas-header header-bg" style="top: -94px;">
                    <div class="filter-icon">
                        <span class="icon icon-filter"></span>
                        <span>Filter</span>
                    </div>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                </header>
                <div class="canvas-body">

                    <div class="widget-facet">
                        <div class="facet-title" data-bs-target="#product-name" data-bs-toggle="collapse" aria-expanded="true" aria-controls="product-name">
                            <span>Products Name</span>
                            <span class="icon icon-arrow-up"></span>
                        </div>
                        <div id="product-name" class="collapse show">
                            <form action="<?= BASE_URL ?>" method="get">
                                <div class="d-flex mb-5">
                                    <input type="hidden" name="act" value="shop">
                                    <input type="text" placeholder="Product Name" name="product-name">
                                    <button class="btn btn-primary btn-sm">Tìm kiếm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget-facet wd-categories">
                        <div class="facet-title" data-bs-target="#categories" data-bs-toggle="collapse" aria-expanded="true" aria-controls="categories">
                            <span>Product categories</span>
                            <span class="icon icon-arrow-up"></span>
                        </div>
                        <div id="categories" class="collapse show">
                            <ul class="list-categoris current-scrollbar mb_36">
                                <?php foreach ($listCategory as $key => $value): ?>
                                    <li class="cate-item
                                    <?php if (isset($_GET['category_id']) && $_GET['category_id'] == $value->id): ?>
                                        current
                                    <?php endif; ?>
                                ">
                                        <a href="<?= BASE_URL ?>?act=shop&category_id=<?= $value->id ?>"><span><?= $value->name ?></span></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="widget-facet">
                            <div class="facet-title" data-bs-target="#availability" data-bs-toggle="collapse" aria-expanded="true" aria-controls="availability">
                                <span>Availability</span>
                                <span class="icon icon-arrow-up"></span>
                            </div>
                            <div id="availability" class="collapse show">
                                <ul class="tf-filter-group current-scrollbar mb_36">
                                    <li class="list-item d-flex gap-12 align-items-center">

                                        <a
                                            <?php
                                            if (isset($_GET['category_id'])) {
                                                echo 'href="' . BASE_URL . '?act=shop&category_id=' . $_GET['category_id'] . '&instock=true"';
                                            } else {
                                                echo 'href="' . BASE_URL . '?act=shop&instock=true"';
                                            }
                                            ?>
                                            class="label">
                                            <span>In stock</span>&nbsp;<span>(<?= $stock[0]->instock ?>)</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <a
                                            <?php
                                            if (isset($_GET['category_id'])) {
                                                echo 'href="' . BASE_URL . '?act=shop&category_id=' . $_GET['category_id'] . '&outstock=true"';
                                            } else {
                                                echo 'href="' . BASE_URL . '?act=shop&outstock=true"';
                                            }
                                            ?>
                                            class="label">
                                            <span>Out of stock</span>&nbsp;<span>(<?= $stock[1]->outstock ?>)</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget-facet">
                            <div class="facet-title" data-bs-target="#price" data-bs-toggle="collapse" aria-expanded="true" aria-controls="price">
                                <span>Price</span>
                                <span class="icon icon-arrow-up"></span>
                            </div>
                            <div id="price" class="collapse show">
                                <form action="<?= BASE_URL ?>" method="get">
                                    <div class="widget-price filter-price">
                                        <div class="d-flex">
                                            <input type="hidden" name="act" value="shop">
                                            <input type="number" placeholder="Min" class="me-3" name="min">
                                            <input type="number" placeholder="Max" name="max">
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-primary mt-2 btn-sm">Tìm kiếm</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="widget-facet">
                            <div class="facet-title" data-bs-target="#brand" data-bs-toggle="collapse" aria-expanded="true" aria-controls="brand">
                                <span>Brand</span>
                                <span class="icon icon-arrow-up"></span>
                            </div>
                            <div id="brand" class="collapse show">
                                <ul class="tf-filter-group current-scrollbar mb_36">
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="radio" name="brand" class="tf-check" id="brand-1">
                                        <label for="brand-1" class="label"><span>Ecomus</span>&nbsp;<span>(8)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="radio" name="brand" class="tf-check" id="brand-2">
                                        <label for="brand-2" class="label"><span>M&amp;H</span>&nbsp;<span>(8)</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget-facet">
                            <div class="facet-title" data-bs-target="#color" data-bs-toggle="collapse" aria-expanded="true" aria-controls="color">
                                <span>Color</span>
                                <span class="icon icon-arrow-up"></span>
                            </div>
                            <div id="color" class="collapse show">
                                <ul class="tf-filter-group filter-color current-scrollbar mb_36">
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_beige" id="beige" value="beige">
                                        <label for="beige" class="label"><span>Beige</span>&nbsp;<span>(3)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_dark" id="black" value="black">
                                        <label for="black" class="label"><span>Black</span>&nbsp;<span>(18)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_blue-2" id="blue" value="blue">
                                        <label for="blue" class="label"><span>Blue</span>&nbsp;<span>(3)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_brown" id="brown" value="brown">
                                        <label for="brown" class="label"><span>Brown</span>&nbsp;<span>(3)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_cream" id="cream" value="cream">
                                        <label for="cream" class="label"><span>Cream</span>&nbsp;<span>(1)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_dark-beige" id="dark-beige" value="dark-beige">
                                        <label for="dark-beige" class="label"><span>Dark Beige</span>&nbsp;<span>(1)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_dark-blue" id="dark-blue" value="dark-blue">
                                        <label for="dark-blue" class="label"><span>Dark Blue</span>&nbsp;<span>(3)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_dark-green" id="dark-green" value="dark-green">
                                        <label for="dark-green" class="label"><span>Dark Green</span>&nbsp;<span>(1)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_dark-grey" id="dark-grey" value="dark-grey">
                                        <label for="dark-grey" class="label"><span>Dark Grey</span>&nbsp;<span>(1)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_grey" id="grey" value="grey">
                                        <label for="grey" class="label"><span>Grey</span>&nbsp;<span>(2)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_light-blue" id="light-blue" value="light-blue">
                                        <label for="light-blue" class="label"><span>Light Blue</span>&nbsp;<span>(5)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_light-green" id="light-green" value="light-green">
                                        <label for="light-green" class="label"><span>Light Green</span>&nbsp;<span>(3)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_light-grey" id="light-grey" value="light-grey">
                                        <label for="light-grey" class="label"><span>Light Grey</span>&nbsp;<span>(1)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_light-pink" id="light-pink" value="light-pink">
                                        <label for="light-pink" class="label"><span>Light Pink</span>&nbsp;<span>(2)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_purple" id="light-purple" value="light-purple">
                                        <label for="light-purple" class="label"><span>Light Purple</span>&nbsp;<span>(2)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_light-yellow" id="light-yellow" value="light-yellow">
                                        <label for="light-yellow" class="label"><span>Light Yellow</span>&nbsp;<span>(1)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_orange" id="orange" value="orange">
                                        <label for="orange" class="label"><span>Orange</span>&nbsp;<span>(1)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_pink" id="pink" value="pink">
                                        <label for="pink" class="label"><span>Pink</span>&nbsp;<span>(2)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_taupe" id="taupe" value="taupe">
                                        <label for="taupe" class="label"><span>Taupe</span>&nbsp;<span>(1)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_white" id="white" value="white">
                                        <label for="white" class="label"><span>White</span>&nbsp;<span>(14)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="checkbox" name="color" class="tf-check-color bg_yellow" id="yellow" value="yellow">
                                        <label for="yellow" class="label"><span>Yellow</span>&nbsp;<span>(1)</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget-facet">
                            <div class="facet-title" data-bs-target="#size" data-bs-toggle="collapse" aria-expanded="true" aria-controls="size">
                                <span>Size</span>
                                <span class="icon icon-arrow-up"></span>
                            </div>
                            <div id="size" class="collapse show">
                                <ul class="tf-filter-group current-scrollbar">
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="radio" name="size" class="tf-check tf-check-size" value="s" id="s">
                                        <label for="s" class="label"><span>S</span>&nbsp;<span>(7)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="radio" name="size" class="tf-check tf-check-size" value="m" id="m">
                                        <label for="m" class="label"><span>M</span>&nbsp;<span>(8)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="radio" name="size" class="tf-check tf-check-size" value="l" id="l">
                                        <label for="l" class="label"><span>L</span>&nbsp;<span>(8)</span></label>
                                    </li>
                                    <li class="list-item d-flex gap-12 align-items-center">
                                        <input type="radio" name="size" class="tf-check tf-check-size" value="xl" id="xl">
                                        <label for="xl" class="label"><span>XL</span>&nbsp;<span>(6)</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <?php include 'app/Views/Users/layouts/footer.php' ?>
        <!-- /Footer -->

    </div>



    <!-- gotop -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>
    <!-- /gotop -->

    <!-- Javascript -->
    <script type="text/javascript" src="assets/Users/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/Users/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/Users/js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="assets/Users/js/carousel.js"></script>
    <script type="text/javascript" src="assets/Users/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="assets/Users/js/lazysize.min.js"></script>
    <script type="text/javascript" src="assets/Users/js/count-down.js"></script>
    <script type="text/javascript" src="assets/Users/js/wow.min.js"></script>
    <script type="text/javascript" src="assets/Users/js/multiple-modal.js"></script>
    <script type="text/javascript" src="assets/Users/js/main.js"></script>
</body>


<!-- Mirrored from themesflat.co/html/ecomus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 14:42:11 GMT -->

</html>