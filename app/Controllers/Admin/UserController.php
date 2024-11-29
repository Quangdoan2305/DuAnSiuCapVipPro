<?php

class UserController
{
    public function getAllUser()
    {
        $userModel = new UserModel();
        $listUser = $userModel->getAllData();

        include 'app/Views/Admin/user.php';
    }

    public function addUser()
    {
        include 'app/Views/Admin/add-user.php';
    }

    public function addPostUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            //Them anh
            $uploadDir = 'assets/Admin/upload';
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (!empty($_FILES['image']['name'])) {
                $fileTmpPath = $_FILES['image']['tmp_name'];
                $fileType = mime_content_type($fileTmpPath);
                $fileName = basename($_FILES['image']['name']);
                $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

                $newFileName = uniqid() . '.' . $fileExtension;


                if (in_array($fileType, $allowedTypes)) {
                    $destPath = $uploadDir . $newFileName;
                    if (!move_uploaded_file($fileTmpPath, $destPath)) {
                        $destPath = "";
                    }
                }
            }


            $userModel = new UserModel();
            $message = $userModel->addUserToDB($destPath);

            if ($message) {
                $_SESSION['message'] = 'Thêm mới thành công';
                header("Location: " . BASE_URL . "?role=admin&act=all-user");
                exit;
            } else {
                $_SESSION['message'] = 'Thêm mới không thành công';
                header("Location: " . BASE_URL . "?role=admin&act=add-user");
                exit;
            }
        }
    }
}
