<?php
    class Service implements Repository{
        public $typeService;
        

        function __construct($className){
            $this->typeService = $className;
        }

        public function getAll(){
            $all = array();
            $typeClass = ucfirst($this->typeService);
            $arrayArgumentsArray = find_all($this->typeService);
            foreach($arrayArgumentsArray as $argumets){
                $object = new $typeClass($argumets);
                array_push($all,$object);
            }
            return $all;
        }

        public function getByType(){
            
        }

    }
?>