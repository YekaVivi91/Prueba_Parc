<?php
// Procesar formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Incluye las clases necesarias
    include '../../dataAccess/conexion/ConexionPrimos.php';
    include '../../dataAccess/dataAccessLogic/Primo.php';

    // Obtener el número del formulario
    $numero = intval($_POST['numero']);

    // Crear conexión y objeto Primo
    $conexionPrimos = new ConexionPrimos();
    $primo = new Primo($conexionPrimos);

    // Verificar si el número es primo
    if (esPrimo($numero)) {
        $primo->setNumero($numero);
        if ($primo->addPrimo()) {
            echo "<script>alert('Número primo agregado correctamente.'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Error al agregar el número primo.'); window.location.href='formulario_primos.html';</script>";
        }
    } else {
        echo "<script>alert('El número no es primo.'); window.location.href='formulario_primos.html';</script>";
    }
}

// Función para verificar si un número es primo
function esPrimo($numero) {
    if ($numero <= 1) return false;
    if ($numero == 2) return true;
    if ($numero % 2 == 0) return false;
    for ($i = 3; $i <= sqrt($numero); $i += 2) {
        if ($numero % $i == 0) return false;
    }
    return true;
}
?>
