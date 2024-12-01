<?php
class DashboardController {
              public function dashboard(){
                            $categoryModel = new CategoryUserModel();
                            $listCategory=$categoryModel->getCategoryDashboard();

                            $productModel = new ProductUserModel();
                            $listProduct = $productModel->getProductDashboard();
                            include 'app/Views/Users/index.php';
              }
              public function myAccount(){
                            include 'app/Views/Users/myaccount.php';
              }
              public function accountDetail(){
                            $userModel = new UserModel2();
                            $user=$userModel->getCurrentUser();
                            
                            include 'app/Views/Users/account-detail.php';
              }
              public function accountUpdate(){
                            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                          $this->changePassword();

                                          $userModel = new UserModel2();
                                          $user = $userModel->getCurrentUser();
                                          
                                          //Them anh
                                          $uploadDir = 'assets/Admin/upload';
                                          $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                                          $destPath = $user->image;

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
                                                        // Xóa ảnh cũ
                                                        unlink($user->image);
                                                        }
                                          }


                                          $userModel = new UserModel2();
                                          $message = $userModel->updateCurrentUser($destPath);

                                          if ($message) {
                                                        $_SESSION['message'] = 'Chỉnh sửa thành công';
                                                        header("Location: " . BASE_URL . "?act=account-detail");
                                                        exit;
                                          }else{
                                                        $_SESSION['message'] = 'Chỉnh sửa không thành công';
                                                        header("Location: " . BASE_URL . "?act=account-detail");
                                                        exit;
                                          }
                                                        }
              }
              public function changePassword(){
                            if($_POST['current-password'] != "" &&
                            $_POST['new-password'] != "" &&
                            $_POST['confirm-password'] != "" &&
                            $_POST['new-password'] == $_POST['confirm-password']
                            ){
                                          $userModel = new UserModel2();
                                          $userModel->changePassword();
                            }
              }
              }
