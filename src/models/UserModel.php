<?php
class UserModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function insertUser($data) {
        $stmt = $this->pdo->prepare("
            INSERT INTO user_info (user_name, user_address, user_email, user_pnumber)
            VALUES (:user_name, :user_address, :user_email, :user_pnumber)
        ");
        $stmt->bindParam(':user_name', $data['user_name']);
        $stmt->bindParam(':user_address', $data['user_address']);
        $stmt->bindParam(':user_email', $data['user_email']);
        $stmt->bindParam(':user_pnumber', $data['user_pnumber']);
        $stmt->execute();
    }
}
