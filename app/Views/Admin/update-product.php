<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Mirrored from themesflat.co/html/ecomus/admin-ecomus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 14:58:29 GMT -->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Ecomus - Ultimate Admin Dashboard HTML</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="assets/Admin/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/Admin/css/animation.css">
    <link rel="stylesheet" type="text/css" href="assets/Admin/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/Admin/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="assets/Admin/css/styles.css">



    <!-- Font -->
    <link rel="stylesheet" href="assets/Admin/font/fonts.css">

    <!-- Icon -->
    <link rel="stylesheet" href="assets/Admin/icon/style.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="assets/Admin/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/Admin/images/favicon.png">

</head>

<body>

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap">
                <!-- preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                <!-- /preload -->
                <!-- section-menu-left -->
                <?php include 'app/Views/Admin/layouts/sidebar.php' ?>
                <!-- /section-menu-left -->
                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
                    <?php include 'app/Views/Admin/layouts/header.php' ?>
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="wg-box">
                                    <?php
                                    if (isset($_SESSION['message'])) {
                                        echo "<p>" . $_SESSION['message'] . "</p>";
                                        unset($_SESSION['message']);
                                    }
                                    if (isset($_SESSION['error'])) {
                                        echo "<p>" . $_SESSION['error'] . "</p>";
                                        unset($_SESSION['error']);
                                    }
                                    ?>
                                    <div class="title-box">
                                        Chỉnh sửa Product
                                    </div>
                                    <form action="<?= BASE_URL ?>?role=admin&act=update-post-product&id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" placeholder="Name" name="name" class="form-control" value="<?= $product->name ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="category">Category</label>
                                            <select name="category" id="category">
                                                <?php foreach ($listCategory as $key => $value): ?>
                                                    <option value="<?= $value->id ?>"
                                                        <?php if ($product->category_id == $value->id): ?> selected
                                                        <?php endif ?>><?= $value->name ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="mb-5">
                                            <label for="price">Price</label>
                                            <input type="text" id="price" placeholder="Price" name="price" class="form-control" value="<?= $product->price ?>">
                                        </div>

                                        <div class="mb-5">
                                            <label for="price-sale">Price Sale</label>
                                            <input type="text" id="price-sale" placeholder="Price Sale" name="pricesale" class="form-control" value="<?= $product->price_sale ?>">
                                        </div>

                                        <div class="mb-5">
                                            <label for="stock">Stock</label>
                                            <input type="text" id="stock" placeholder="Stock" name="stock" class="form-control" value="<?= $product->stock ?>">
                                        </div>

                                        <div class="mb-5">
                                            <label for="image_main">Image Main</label>
                                            <img src="<?= $product->image_main ?>" alt="" width="50">
                                            <input type="file" id="image_main" placeholder="Image Main" name="image_main" class="form-control" accept="image/*">
                                        </div>

                                        <div class="mb-5">
                                            <label for="description">Description</label>
                                            <textarea id="description" placeholder="Description" name="description" class="form-control"><?= $product->description ?></textarea>
                                        </div>

                                        <div class="mb-5">
                                            <h4>List Image</h4>
                                            <button class="btn-sm btn btn-primary" id="btnAddImage">Add image</button>
                                            <div class="block-image">

                                            </div>
                                        </div>
                                        <hr>
                                        <button class="btn btn-warning">Chỉnh sửa</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <?php include 'app/Views/Admin/layouts/footer.php' ?>
                        <!-- /bottom-page -->
                    </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="assets/Admin/js/jquery.min.js"></script>
    <script src="assets/Admin/js/bootstrap.min.js"></script>
    <script src="assets/Admin/js/bootstrap-select.min.js"></script>
    <script src="assets/Admin/js/zoom.js"></script>
    <script src="assets/Admin/js/morris.min.js"></script>
    <script src="assets/Admin/js/raphael.min.js"></script>
    <script src="assets/Admin/js/morris.js"></script>
    <script src="assets/Admin/js/jvectormap.min.js"></script>
    <script src="assets/Admin/js/jvectormap-us-lcc.js"></script>
    <script src="assets/Admin/js/jvectormap-data.js"></script>
    <script src="assets/Admin/js/jvectormap.js"></script>
    <script src="assets/Admin/js/apexcharts/apexcharts.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-1.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-2.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-3.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-4.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-5.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-6.js"></script>
    <script src="assets/Admin/js/apexcharts/line-chart-7.js"></script>
    <script src="assets/Admin/js/switcher.js"></script>
    <script defer src="assets/Admin/js/theme-settings.js"></script>
    <script src="assets/Admin/js/main.js"></script>


    <script>
        $(".block-image").empty();
        <?php if (count($listProductImage) > 0): ?>
            let UI = ""
            <?php foreach ($listProductImage as $key => $value): ?>
                UI = `
                    <div class="mt-4 mb-4">
                        <span>Hình ảnh</span><br>
                        <img src="<?= $value->image ?>" alt="" width="50">
                            <div class="d-flex">
                                <input type="file" class="form-control" name="image[]" accept="image/*">
                                <button class="btn-sm btn btn-danger btn-delete">Xóa</button></div>
                            </div>
                    `;
                $(".block-image").append(UI)

            <?php endforeach ?>
        <?php endif ?>

        $("#btnAddImage").click(function(e) {
            e.preventDefault();
            let UI = `
                    <div class="mt-4 mb-4">
                        <span>Hình ảnh</span> 
                            <div class="d-flex">
                                <input type="file" class="form-control" name="image[]" accept="image/*">
                                <button class="btn-sm btn btn-danger btn-delete">Xóa</button></div>
                            </div>
                    `;
            $(".block-image").append(UI)

        })

        $(".block-image").on('click', '.btn-delete', function() {
            $(this).parent().parent().remove()
        })
    </script>
</body>


<!-- Mirrored from themesflat.co/html/ecomus/admin-ecomus/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 14:58:54 GMT -->

</html>