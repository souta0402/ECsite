<?php
require_once __DIR__ . '/../models/UserModel.php';

class UserController {
    private $model;

    public function __construct($pdo) {
        $this->model = new UserModel($pdo);
    }

    public function handleInsert($postData) {
        if (
            !empty($postData['user_name']) &&
            !empty($postData['user_address']) &&
            !empty($postData['user_email']) &&
            !empty($postData['user_pnumber'])
        ) {
            $this->model->insertUser($postData);
            include __DIR__ . '/../views/success.php';
        } else {
            echo "全ての項目を入力してください。";
        }
    }
}

