<?php
require_once "clases/cEmpleado.php";
require_once "clases/Salario.php";

header('Content-Type: text/html; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Datos del formulario
    $nom  = trim($_POST['nombres']      ?? '');
    $dep  = trim($_POST['departamento'] ?? '');
    $suel = trim($_POST['sueldo']       ?? '');

    $errores = [];

    // Validaciones básicas
    if ($nom === '') {
        $errores[] = "El nombre es obligatorio.";
    }
    if ($dep === '') {
        $errores[] = "El departamento es obligatorio.";
    }
    if (!Salario::esValido($suel)) {
        $errores[] = "El sueldo debe ser numérico y mayor que cero.";
    }

    if (!empty($errores)) {
        echo "<ul>";
        foreach ($errores as $e) {
            echo "<li>" . htmlspecialchars($e) . "</li>";
        }
        echo "</ul>";
    } else {
        try {
            $objempleados = new cEmpleado();
            if ($objempleados->crear($nom, $dep, $suel)) {
                echo "<p>Registro grabado correctamente.</p>";
            } else {
                echo "<p>Error de grabación.</p>";
            }
        } catch (Exception $e) {
            echo "<p>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
        }
    }

    // Siempre mostrar la tabla actualizada
    include('consulta.php');
}
?>
