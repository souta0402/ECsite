<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../controllers/UserController.php';

$controller = new UserController($pdo);
$controller->handleInsert($_POST);
