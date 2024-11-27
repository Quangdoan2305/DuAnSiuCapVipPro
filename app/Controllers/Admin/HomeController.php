<?php
class HomeController{
    public function dashboard(){
        $homeModel = new HomeModel();
        $dataUsers = $homeModel->getUsers();
        include 'app/Views/Admin/index.php';
    }

    public function login(){
        include 'app/Views/Admin/login.php';
    }

    public function postLogin(){
        // $_POST['name']
        // $_POST['password']

        $homeModel = new HomeModel();
        $dataUsers = $homeModel->checkLogin();
        if ($dataUsers) {
            header("Location: " . BASE_URL . "?role=admin&act=home");
        }else {
            $_SESSION['error'] = "Email hoặc Password không đúng";
            header("Location: " . BASE_URL . "?role=admin&act=login");
            exit;
        }
    }
}