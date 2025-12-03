<?php
require_once 'Conexion.php';
require_once 'Cargo.php';
require_once 'Salario.php';

class cEmpleado {

    private $pdo;

    public function __construct() {
        $this->pdo = (new Conexion())->getConexion();
    }

    // Consultar todos los empleados
    public function consultar() {
        $sql  = "SELECT idempleado, nombre, departamento, sueldo 
                 FROM empleado
                 ORDER BY nombre";
        $stmt = $this->pdo->query($sql);
        return $stmt;
    }

    // Crear nuevo empleado
    public function crear($nombre, $departamento, $sueldo) {

        // Validaciones de dominio
        if (!Cargo::esValido($departamento)) {
            throw new Exception("Departamento no válido.");
        }

        if (!Salario::esValido($sueldo)) {
            throw new Exception("El sueldo debe ser numérico y mayor que cero.");
        }

        $sql = "INSERT INTO empleado (nombre, departamento, sueldo)
                VALUES (:nombre, :departamento, :sueldo)";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':nombre'       => $nombre,
            ':departamento' => $departamento,
            ':sueldo'       => $sueldo
        ]);
    }
}
