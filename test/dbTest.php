<?php

use PHPUnit\Framework\TestCase;

include_once '../api_rest/config/db.php';

class dbTest extends TestCase
{
    public function test_connection()
    {
        $db = new db();
        $conn = $db->connect();
        
        // Verificar si $conn es una instancia de PDO
        $this->assertInstanceOf(PDO::class, $conn);

        // Verificar si la conexión se establece correctamente
        $this->assertNotNull($conn);
    }

    // connect method can be called multiple times without errors
    function test_connect_multiple_times() {
        $db = new db();
        $conn1 = $db->connect();
        $conn2 = $db->connect();
        
        $this->assertInstanceOf(PDO::class, $conn1);
        $this->assertInstanceOf(PDO::class, $conn2);
        $this->assertSame($conn1, $conn2);
    }

    // PDO object returned by connect method has ERRMODE_EXCEPTION attribute set
    function test_connect_method_returns_pdo_object_with_errmode_exception_attribute_set() {
        $db = new db();
        $pdo = $db->connect();
        $this->assertInstanceOf(PDO::class, $pdo);
        $this->assertEquals(PDO::ERRMODE_EXCEPTION, $pdo->getAttribute(PDO::ATTR_ERRMODE));
    }

}
?>
