<?php
#-------------- Incluyendo los archivos de la configuración -----
require_once("./config/config.php");
require_once("./autoload.php");
#-------------- Incluyendo el archivo de inicio de sesión -----
require_once("./app/views/inc/session_star.php");


if (isset($_GET["views"])) {
    $url = explode("/", $_GET['views']);
} else {
    $url = ["dashboard"];
}
?>
<!-- //-------------- Estructura báscia de html -->
<!DOCTYPE html>
<html lang="es" class="overflow">
<?php
#------Usar el use para que el archivo se incluya -----------
use app\controllers\viewsController;
#-----------LLamando una nueva instancia del controlador
$viewsController = new viewsController();
$vista = $viewsController->obtenerVistasControlador($url[0]);

// Incluyendo la vista 
if ($vista === "404" || $vista === "dashboard") {
    require_once("./app/views/content/" . $vista . "-view.php");
} else {
    require_once($vista);
}

?>

</html>