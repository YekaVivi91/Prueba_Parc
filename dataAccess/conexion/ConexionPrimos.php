<?php
class ConexionPrimos {
    private $host = 'localhost:3306';
    private $db = 'primos_db';
    private $user = 'root';
    private $password = '';

    public function conectar() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->db}";
            $pdo = new PDO($dsn, $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
?>
