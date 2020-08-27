<?php
class Feature{
    public $type;
    public $properties;
    public $geometry;

    function __construct($type,$properties,$geometry){
        $this->type = $type;
        $this->properties = $properties;
        $this->geometry = $geometry;
    }

    public function getType(){
        return $this->type;
    }

    public function getProperties(){
        return $this->properties;
    }

    public function getGeometry(){
        return $this->geometry;
    }
}
?>