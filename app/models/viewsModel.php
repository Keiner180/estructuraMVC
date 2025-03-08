<?php

namespace app\models;

class viewsModel
{

    protected function obtenerVistasModelo($vista)
    {

        $listaVista = ["dashboard", "404"];
        # Si la vista existe en el array
        if (in_array($vista, $listaVista)) {
            // #Preguntamos si el archivo existe, si existe retornamos la ruta del archivo
            if (is_file("./app/views/content/" . $vista . "-view.php")) { // Si la vista existe, retornamos la ruta de la vista
                $contenido = "./app/views/content/" . $vista . "-view.php";
            } else { // Si la vista no existe, retornamos la ruta del error 404
                $contenido = "404";
            }
        } elseif ($vista == "index") { // Si la vista es index, mandamos al dashboard
            $contenido = "dashboard";
        } else { // Si la vista no se encontró, mandamos al usuario al error 404
            $contenido = "404";
        }
        return $contenido;
    }
}
