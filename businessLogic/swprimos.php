<?php
include '../dataAccess/dataAccessLogic/Primo.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Agregar número primo
    $numero = intval($_POST['numero']);
    $conexionPrimos = new ConexionPrimos();
    $primo = new Primo($conexionPrimos);

    $primo->setNumero($numero);
    if ($primo->addPrimo()) {
        echo json_encode(['success' => true, 'message' => 'Número primo agregado correctamente']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al agregar número primo']);
    }
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Leer números primos
    $conexionPrimos = new ConexionPrimos();
    $primo = new Primo($conexionPrimos);
    $primos = $primo->readPrimos();
    echo json_encode($primos);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    // Eliminar número primo
    $id = intval($_GET['id']);
    $conexionPrimos = new ConexionPrimos();
    $primo = new Primo($conexionPrimos);
    $primo->setId($id);
    if ($primo->deletePrimo()) {
        echo json_encode(['success' => true, 'message' => 'Número primo eliminado correctamente']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al eliminar número primo']);
    }
    exit;
}

?>
