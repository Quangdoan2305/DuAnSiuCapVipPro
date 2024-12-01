<?php
class ProductUserModel{
              public $db;
              public function __construct(){
                            $this->db = new Database();
              }
              public function getProductDashboard(){
                            $sql = "SELECT * FROM products ORDER BY RAND() LIMIT 12";
                            $query = $this->db->pdo->query($sql);
                            $result=$query->fetchAll();
                            return $result;
              }
}