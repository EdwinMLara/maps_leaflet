<?php
class Geometry{
    public $type;
    public $coordinates;
    
    function __construct($type,$coordinates){
        $this->type = $type;
        $this->coordinates = $coordinates;
    }

    public function getType(){
        return $this->type;
    }

    public function getCoordinates(){
        return $this->coordinates;
    }

}
?>