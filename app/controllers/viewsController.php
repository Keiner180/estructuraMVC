<?php

namespace app\controllers;

use app\models\viewsModel;

class viewsController extends viewsModel
{
    public function obtenerVistasControlador($vista)
    { // obtener vistas controlador para la vista del servidor
        if ($vista != "") {
            $respuesta = $this->obtenerVistasModelo($vista);
        } else { // Si no se encuentra la vista, se envia a el dashboard
            $respuesta = "dashboard";
        }
        return $respuesta;
    }
}
