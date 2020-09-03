<?php
require_once('Modelos/Type.php');
require_once('Modelos/Service.php');
require_once('Modelos/Repository.php');


if(isset($_POST['nombre']) && isset($_POST['icono'])){
    $type = new Type([$_POST['nombre'],$_POST['icono']]);
    $service = new Service("type");
    $service->insert($type);

}else{
    echo "Error al Guardar los datos";
}
?>