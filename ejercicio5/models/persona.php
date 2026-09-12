<?php
abstract class persona {
    protected $nombre;
    protected $documento;
    protected $correo;
    protected static $totalPersonas = 0;

    public function __construct($nombre, $documento, $correo) {
        if (!self::validarDocumento($documento)) {
            throw new Exception("Documento inválido");
        }
        if (!$this->validarCorreo($correo)) {
            throw new Exception("Correo inválido");
        }
        $this->nombre = $nombre;
        $this->documento = $documento;
        $this->correo = $correo;
        self::$totalPersonas++;
    }

    public static function validarDocumento($doc) {
        return ctype_digit($doc);
    }

    public function validarCorreo($correo) {
        return filter_var($correo, FILTER_VALIDATE_EMAIL);
    }

    public static function getTotalPersonas() {
        return self::$totalPersonas;
    }

    abstract public function mostrarInfo();
}
