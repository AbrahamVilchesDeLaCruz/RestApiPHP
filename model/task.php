<?php

class TasksModel extends db {

    public function handleGetRequest() {
        // Consultar todas las tareas
        $query = "SELECT * FROM tasks";
        $result = $this->connect()->query($query);

        // Consultar todas las tareas
        $query = "SELECT * FROM tasks";
        $stmt = $this->connect()->query($query);

        // Verificar si hay resultados
        if ($stmt->rowCount() > 0) {
            $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // Convertir los datos a formato JSON
            echo json_encode($tasks);
        } else {
            // Si no hay resultados, imprimir un JSON vacío o un mensaje de error
            echo json_encode(array('message' => 'No tasks found'));
        }
    }

    public function handlePostRequest() {
        // Lógica para manejar solicitudes POST
        echo 'Handling POST request';
    }

    public function handlePutRequest() {
        // Lógica para manejar solicitudes PUT
        echo 'Handling PUT request';
    }

    public function handleDeleteRequest() {
        // Lógica para manejar solicitudes DELETE
        echo 'Handling DELETE request';
    }

    public function handleUnsupportedMethod() {
        // Manejar cualquier otro método de solicitud no admitido
        echo 'Unsupported request method';
    }
}

?>