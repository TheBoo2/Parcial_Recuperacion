<?php
class Cargo {

    // Departamentos válidos (puedes editar esta lista)
    private static $cargosValidos = [
        'Informatica',
        'Contabilidad',
        'Administracion',
    ];

    public static function lista() {
        return self::$cargosValidos;
    }

    public static function esValido($departamento) {
        return in_array($departamento, self::$cargosValidos);
    }
}
