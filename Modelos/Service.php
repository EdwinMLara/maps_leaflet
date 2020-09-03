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

        public function getByForeingKey($key,$secondTable){
            
        }

        public function deleteById($id){
            return delete_by_id($this->typeService,$id);
        }

        public function insert($arguments){
            $typeClass = ucfirst($this->typeService);
            $object = new $typeClass($arguments);
            return insertbyTable($this->typeService,$object);
        }

    }
?>