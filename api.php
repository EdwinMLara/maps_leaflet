<?php
    include_once "Modelos/Punto.php";
    include_once "Modelos/Type.php";
    require_once("config/database.php");
    require_once("config/sql.php");
    require_once("Modelos/Repository.php");
    require_once("Modelos/Service.php");
    require_once("Modelos/GeoJson.php");
    require_once("Modelos/Feature.php");
    require_once("Modelos/Geometry.php");
    $servicioPuntos = new Service(Punto::$tablename);
    $servicioTypes = new Service(Type::$tablename);
    
    $Api = new stdClass();
    $Types =  $servicioTypes->getAll();
    $Api->Types = $Types;
    $Puntos =  $servicioPuntos->getAll();
    $arrayCapas = array();
    foreach($Types as $Type){
        $id_filter = $Type->name_t[0];
        $array_filtered = array_filter($Puntos,function ($Punto) use ($id_filter){
            if($Punto->type_p == $id_filter){
                return true;
            }
        });
        
        $features = array();
        foreach($array_filtered as $aux_filter){
            $coordinates = array($aux_filter->coor_lat_p, $aux_filter->coor_lon_p);
            $geometry = new Geometry("Point",$coordinates);
            $feature = new Feature("Feature",$aux_filter,$geometry);
            array_push($features,$feature);
        }
        $capaGeojson = new GeoJson("FeatureCollection",$Type->name_t,$features);
        array_push($arrayCapas,$capaGeojson);       
    }
    $Api->Capas = $arrayCapas;
    echo json_encode($Api);

?>
