<?php 
class GeoJson{
    public $type;
    public $name;
    public $features;

    function __construct($type,$name,$features){
        $this->type = $type;
        $this->name = $name;
        $this->features = $features;
    }

    public function getType(){
        return $this->type;
    }

    public function getName(){
        return $this->name;
    }

    public function getFeatures(){
        return $this->features;
    }
} 
?>