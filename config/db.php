<?php 


class db {
    private $host;
    private $db_name;
    private $user;
    private $pass;
    private $conn;

    public function __construct() {
        $this->host = 'localhost';
        $this->db_name = 'api_rest';
        $this->user = 'root';
        $this->pass = '';
        $this->conn = null;
    }

    /**
     * Establishes a connection to the MySQL database.
     *
     * @return PDO|null The PDO object representing the database connection.
     */
    public function connect() {
        try {
            $this->conn = $this->is_connection_exist();

            if ($this->conn === null) {
                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name,
                    $this->user, $this->pass);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        }  catch(PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
            throw $e;
        }

        return $this->conn;
    }

    private function is_connection_exist() {
        if ($this->conn !== null) {
            return $this->conn;
        }
    }
}


?>