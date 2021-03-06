<?php

class Punto{
    public static $tablename = 'punto';
    public $id_p;
    public $name_p;
    public $type_p;
    public $description_p;
    public $addres_p;
    public $tel_p;
    public $coor_lat_p;
    public $coor_lon_p;

    function __construct(){ 
        $listArgs = func_get_args()[0];
        switch (func_num_args()) {
            case '0':
                $this->__construct1();
                break;
            case '1':
                $this->__construct2($listArgs[0],$listArgs[1],$listArgs[2],$listArgs[3],$listArgs[4],$listArgs[5],$listArgs[6],$listArgs[7]);
                break;
        }     
    }

    function __construct1(){
    }

    function __construct2($id_p,$name_p,$type_p,$description_p,$addres_p,$tel_p,$coor_lat_p,$coor_lon_p){
        $this->id_p = $id_p;
        $this->name_p = $name_p;
        $this->type_p = $type_p;
        $this->description_p = $description_p;
        $this->addres_p = $addres_p;
        $this->tel_p = $tel_p;
        $this->coor_lat_p = $coor_lat_p;
        $this->coor_lon_p = $coor_lon_p;
    }

    public function run(){
        echo  'Ejecutando'.$this->id_p.' '.$this->name_p.' '.$this->type_p.' '.$this->description_p.' '.$this->addres_p.' '.$this->tel_p.' '.$this->coor_lat_p.' '.$this->coor_lon_p.'</br> ';
    }
    public function setid_p($id_p){
        $this->id_p = $id_p;
    }

    public function getid_p(){
        return $this->id_p;
    }

    public function setname_p($name_p){
        $this->name_p = $name_p;
    }

    public function getname_p(){
        return $this->name_p;
    }

    public function settype_p($type_p){
        $this->type_p = $type_p;
    }

    public function gettype_p(){
        return $this->type_p;
    }

    public function setdescription_p($description_p){
        $this->description_p = $description_p;
    }

    public function getdescription_p(){
        return $this->description_p;
    }

    public function setaddres_p($addres_p){
        $this->addres_p = $addres_p;
    }

    public function getaddres_p(){
        return $this->addres_p;
    }

    public function settel_p($tel_p){
        $this->tel_p = $tel_p;
    }

    public function gettel_p(){
        return $this->tel_p;
    }

    public function setcoor_lat_p($coor_lat_p){
        $this->coor_lat_p = $coor_lat_p;
    } 

    public function getcoor_lat_p(){
        return $this->coor_lat_p;
    }

    public function setcoor_lon_p($coor_lon_p){
        $this->coor_lon_p = $coor_lon_p;
    }

    public function getcoor_lon_p(){
        return $this->coor_lon_p;
    }
}
?>