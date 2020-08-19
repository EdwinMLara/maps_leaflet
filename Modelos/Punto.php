<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/maps-example/config/database.php";
echo $path;

include($path);

class Punto{
    private static $tablename = 'punto';
    private $id_p;
    private $name_p;
    private $type_p;
    private $description_p;
    private $addres_p;
    private $tel_p;
    private $coor_lat_p;
    private $coor_lon_p;

    function __construct($id_p,$name_p,$type_p,$description_p,$addres_p,$tel_p,$coor_lat_p,$coor_lon_p){
        $this->id_p = $id_p;
        $this->name_p = $name_p;
        $this->type_p = $type_p;
        $this->description_p = $description_p;
        $this->addres_p = $addres_p;
        $this->tel_p = $tel_p;
        $this->coor_lat_p = $coor_lat_p;
        $this->coor_lon_p = $coor_lon_p;
    }

    public static function getAll(){
        echo 'probando';
        //return find_all(self::$tablename);
    }
}
?>