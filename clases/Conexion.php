<?php
class Conexion {
    private $pdo;

    public function __construct() {
        $host    = 'localhost';
        $db      = 'empleados';   // nombre de tu BD
        $user    = 'root';        // tu usuario
        $pass    = '';            // tu contraseña
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

        $opciones = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $this->pdo = new PDO($dsn, $user, $pass, $opciones);
    }

    public function getConexion() {
        return $this->pdo;
    }
}
