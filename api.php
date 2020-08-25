<?php
    header("content-type: text/html; charset=UTF-8");  
    include_once "Modelos/Punto.php";
    require_once("config/database.php");
    require_once("config/sql.php");
    require_once("Modelos/Repository.php");
    require_once("Modelos/Service.php");
    require_once("Modelos/GeoJson.php");
    $servicioPuntos = new Service(Punto::$tablename);
    $capaPuntos = new GeoJson("FeatureCollection","Puntos",$servicioPuntos->getAll());
    echo json_encode($capaPuntos);

?>
