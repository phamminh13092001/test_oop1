<?php

require 'controller/LopController.php';
    $action = $_GET['action'] ?? 'index';
    $controller = $_GET['controller'] ?? 'base';

    switch ($controller){
        case 'base':
    }

    switch ($action) {
        case 'index':
        case 'create':
        case 'store':
        case 'edit':
        case 'update':
        case 'delete':
            (new LopController())->$action();
            break;
        default:
            echo "Lỗi";
            break;
    }

