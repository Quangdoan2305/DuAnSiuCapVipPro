<?php
class OrderUserModel
{
    public $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function order()
    {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $note = $_POST['note'];
        $total = $_POST['total'];
        $user_id = $_SESSION['users']['id'];

        $sql = "insert INTO `order`(`user_id`, `status`, `total`, `created_at`, `updated_at`, `name`, `address`, `phone`, `email`, `notes`) 
        VALUES (:user_id, :status, :total, :created_at, :updated_at, :name, :address, :phone, :email, :notes)";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
    }
}
