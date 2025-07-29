<?php
require_once 'controllers/AuthController.php';

$action = $_GET['action'] ?? '';

$auth = new AuthController();

switch ($action) {
    case 'login':
        $auth->login();
        break;
    case 'register':
        $auth->register();
        break;
    default:
        echo json_encode(['status' => 'error', 'message' => 'Ruta no encontrada']);
}
