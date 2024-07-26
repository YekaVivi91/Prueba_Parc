<?php
include('../dataAccess/conexion/ConexionPrimos.php');
class Primo {
    private $numero;
    private $conexion;

    public function __construct(ConexionPrimos $conexion) {
        $this->conexion = $conexion->conectar();
    }

    public function setNumero(int $numero): void {
        $this->numero = $numero;
    }

    public function addPrimo(): bool {
        try {
            $sql = "INSERT INTO primos (numero) VALUES (?)";
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute([$this->numero]);
            return $stmt->rowCount() > 0;
        } catch (PDOException $e) {
            echo "Error al agregar número primo: " . $e->getMessage();
            return false;
        }
    }
}
?>
