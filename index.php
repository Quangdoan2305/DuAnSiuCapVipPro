<?php
session_start();
//Database
include 'app/Database/Database.php';

//Model
include 'app/Models/Admin/HomeModel.php';
include 'app/Models/Admin/UserModel.php';
include 'app/Models/Admin/CategoryModel.php';
include 'app/Models/Admin/ProductModel.php';

//Controller
include 'app/Controllers/Admin/ControllerAdmin.php';
include 'app/Controllers/Admin/HomeController.php';
include 'app/Controllers/Admin/LoginController.php';
include 'app/Controllers/Admin/UserController.php';
include 'app/Controllers/Admin/CategoryController.php';
include 'app/Controllers/Admin/ProductController.php';

const BASE_URL = "http://localhost/DuAnSiuCapVipPro/";
//Router
include 'router/web.php';

// echo password_hash('123456', PASSWORD_BCRYPT);