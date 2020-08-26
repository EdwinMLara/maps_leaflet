<?php
class Feature{
    public $type;
    public $properties;

    function __construct($type,$properties){
        $this->type = $type;
        $this->properties = $properties;
    }

    public function getType(){
        return $this->type;
    }

    public function getProperties(){
        return $this->properties;
    }
}
?>