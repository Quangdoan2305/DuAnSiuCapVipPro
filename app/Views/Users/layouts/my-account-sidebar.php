<div class="col-lg-3">
    <div class="wrap-sidebar-account">
        <ul class="my-account-nav">
            <li>
                <a href="<?= BASE_URL ?>?act=my-account" class="my-account-nav-item 
                <?= $_GET['act'] == 'my-account' ? 'active' : '' ?>
                ">Dashboard</a></li>
            <li><a href="my-account-orders.html" class="my-account-nav-item">Orders</a></li>
            <li><a href="my-account-address.html" class="my-account-nav-item">Address</a></li>
            <li>
                <a href="<?= BASE_URL ?>?act=account-detail" class="my-account-nav-item 
                <?= $_GET['act'] == 'account-detail' ? 'active' : '' ?>
                ">Account Details</a></li>
            <li><a href="my-account-wishlist.html" class="my-account-nav-item">Wishlist</a></li>
            <li>
                <a href="<?= BASE_URL ?>?act=logout" class="my-account-nav-item 
                <?= $_GET['act'] == 'logout' ? 'active' : '' ?>  
                ">Logout</a></li>
        </ul>
    </div>