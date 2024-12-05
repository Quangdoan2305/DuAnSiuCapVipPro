<?php
class LoginModel{
              public $db;
              public function __construct(){
              $this->db = new Database();
              }


              public function checkLogin(){
                            $email = $_POST['email'];
                            $password = $_POST['password'];
                            $sql = "SELECT * FROM users WHERE email = :email and role = 2";
                            $stmt = $this->db->pdo->prepare($sql);
                            $stmt->bindParam(':email', $email);
                            $stmt->execute();

                            $result = $stmt->fetch();
                            if ($result && password_verify($password, $result->password)) {
                            //Nếu mk khớp
                            return $result;
                            }
                            return false;
              }
              public function addUserToDB(){
                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                            $now = date('Y-m-d H:i:s');
                            $role = 2;

                            $sqlCheck = "SELECT * FROM users WHERE email = :email";
                            $stmt = $this->db->pdo->prepare($sqlCheck);
                            $stmt->bindParam(':email', $email); 
                            $stmt->execute();
                            if (count($stmt->fetchAll()) > 0) {
                                          // throw new Exception("Email đã tồn tại trong hệ thống.");
                                          return false;
                            }


                            $sql = "
                            INSERT INTO users(name, email, password,  created_at, updated_at, role) 
                            VALUES (:name, :email, :password, :created_at, :updated_at, :role)
                            ";
                            $stmt = $this->db->pdo->prepare($sql);
                            $stmt->bindParam(':name', $name);
                            $stmt->bindParam(':email', $email);
                            $stmt->bindParam(':password', $password);
                            $stmt->bindParam(':created_at', $now);
                            $stmt->bindParam(':updated_at', $now);
                            $stmt->bindParam(':role', $role);

                            return $stmt->execute();
              }
}