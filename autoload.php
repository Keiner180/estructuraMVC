<?php
 # El autoload para que carguen las clases automaticamnte, funciona con el nameSpace
 # Se activa cuando se usa la palabra reservada USE
spl_autoload_register(function ($archivo) {
    $archivo = __DIR__ . "/" . $archivo . ".php";
    $archivo = str_replace("\\", "/", $archivo); //str_replace la usamos para evitar errores de rutas en sistemas operativos
    # Sí el archivo existe, incluimos el documento
    if (is_file($archivo)) {
        require_once($archivo);
    };
});
