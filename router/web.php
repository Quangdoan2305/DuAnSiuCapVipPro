<?php 
$role = isset($_GET['role']) ? $_GET['role'] : "user";
$act = isset($_GET['act']) ? $_GET['act'] : "";

if($role == "user"){
    echo "Trang User";
}else{
    switch($act){
        // http://localhost/DuAnSiuCapVipPro/?role=admin&act=home
        case 'home': {
            $homeController = new HomeController();
            $homeController->dashboard();
            break;
        }
        // http://localhost/DuAnSiuCapVipPro/?role=admin&act=login
        case 'login': {
            $homeController = new HomeController();
            $homeController->login();
            break;
        }
        // http://localhost/DuAnSiuCapVipPro/?role=admin&act=post-login
        case 'post-login': {
            $homeController = new HomeController();
            $homeController->postLogin();
            break;
        }

        case 'prodcut' : {
            break;
        }

        default:{
            $homeController = new HomeController();
            $homeController->dashboard();
            break;
        }
    }
}
