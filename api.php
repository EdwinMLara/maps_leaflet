<?php
    header("content-type: text/html; charset=UTF-8");  
    include_once "Modelos/Punto.php";
    require_once("config/database.php");
    require_once("config/sql.php");
    Punto::getAll();

?>
