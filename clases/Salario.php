<?php
class Salario {

    public static function esValido($monto) {
        if (!is_numeric($monto)) {
            return false;
        }
        if ($monto <= 0) {
            return false;
        }
        return true;
    }

    public static function formatear($monto) {
        return number_format($monto, 2, '.', ',');
    }
}
