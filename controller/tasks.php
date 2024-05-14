<?php 
include_once __DIR__ . '/../model/task.php';
$method = $_SERVER['REQUEST_METHOD'];

$tasks_model = new TasksModel();


switch ($method) {
    case 'GET':
        $tasks_model->handleGetRequest();
        break;
    case 'POST':
        $tasks_model->handlePostRequest();
        break;
    case 'PUT':
        $tasks_model->handlePutRequest();
        break;
    case 'DELETE':
        $tasks_model->handleDeleteRequest();
        break;
    default:
        // Manejar cualquier otro método de solicitud
        $tasks_model->handleUnsupportedMethod();
        break;
}

?>
