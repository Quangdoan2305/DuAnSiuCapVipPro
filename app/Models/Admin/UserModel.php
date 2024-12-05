<?php
class UserModel
{
    public $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function getAllData()
    {
        $sql = "SELECT * FROM users";
        $query = $this->db->pdo->query($sql);
        return $query->fetchAll();
    }

    public function addUserToDB($destPath)
    {
        try {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'] != "" ? password_hash($_POST['password'], PASSWORD_BCRYPT) : password_hash($_POST['email'], PASSWORD_BCRYPT);
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $role = $_POST['role'];
            $image = $destPath; // Giả định không upload ảnh
            $now = date('Y-m-d H:i:s');

            // Kiểm tra email đã tồn tại hay chưa
            $checkSQL = "SELECT COUNT(*) FROM users WHERE email = :email";
            $checkStmt = $this->db->pdo->prepare($checkSQL);
            $checkStmt->bindParam(':email', $email);
            $checkStmt->execute();
            if ($checkStmt->fetchColumn() > 0) {
                return [
                    'success' => false,
                    'message' => 'Email đã tồn tại. Vui lòng chọn email khác.'
                ];
            }

            // Chèn dữ liệu vào bảng
            $sql = "
                INSERT INTO users(name, email, password, address, phone, image, created_at, updated_at, role) 
                VALUES (:name, :email, :password, :address, :phone, :image, :created_at, :updated_at, :role)
            ";
            $stmt = $this->db->pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':created_at', $now);
            $stmt->bindParam(':updated_at', $now);
            $stmt->bindParam(':role', $role);

            return $stmt->execute();

            return [
                'success' => true,
                'message' => 'Người dùng đã được thêm thành công!'
            ];
        } catch (PDOException $e) {
            return [
                'success' => false,
                'message' => 'Lỗi: ' . $e->getMessage()
            ];
        }
    }

    public function getUserById()
    {
        $id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            return $stmt->fetch();
        }
        return false;
    }

    public function updateUserToDB($destPath)
    {
        try {
            $user = $this->getUserById();
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'] != "" ? password_hash($_POST['password'], PASSWORD_BCRYPT) : $user->password;
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $role = $_POST['role'];
            $image = $destPath; // Giả định không upload ảnh
            $now = date('Y-m-d H:i:s');

            // Kiểm tra email đã tồn tại hay chưa
            $checkSQL = "SELECT COUNT(*) FROM users WHERE email = :email";
            $checkStmt = $this->db->pdo->prepare($checkSQL);
            $checkStmt->bindParam(':email', $email);
            $checkStmt->execute();
            if ($checkStmt->fetchColumn() > 0) {
                return [
                    'success' => false,
                    'message' => 'Email đã tồn tại. Vui lòng chọn email khác.'
                ];
            }

            // Cập nhật dữ liệu vào bảng
            $sql = "
                UPDATE users SET name=:name,email=:email,password=:password,address=:address,phone=:phone,image=:image,updated_at=:updated_at,role=:role WHERE id=:id
            ";
            $stmt = $this->db->pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':image', $image);
            $stmt->bindParam(':updated_at', $now);
            $stmt->bindParam(':role', $role);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();

            return [
                'success' => true,
                'message' => 'Người dùng đã được cập nhật thành công!'
            ];
        } catch (PDOException $e) {
            return [
                'success' => false,
                'message' => 'Lỗi: ' . $e->getMessage()
            ];
        }
    }

    public function deleteUser()
    {
        try {
            $id = $_GET['id'];
            $sql = "DELETE FROM users WHERE id = :id";
            $stmt = $this->db->pdo->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return [
                'success' => true,
                'message' => 'Người dùng đã được xóa thành công!'
            ];
        } catch (PDOException $e) {
            return [
                'success' => false,
                'message' => 'Lỗi: ' . $e->getMessage()
            ];
        }
    }
}
