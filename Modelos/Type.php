<?php
class Type{
    public static $tablename = 'type';
    public $id_t = "autoincrement";
    public $name_t = '';

    function __construct(){ 
        $listArgs = func_get_args();
        $num_arg_list = count($listArgs);
        switch ($num_arg_list) {
            case 0:
                $this->__construct1();
                break;
            case 1:
                $this->__construct2($listArgs[0]);
                break;
            case 2:
                $this->__construct3($listArgs[0],$listArgs[1]);
            break;
        }    
    }

    function __construct1(){
    }

    function __construct2($name_t){
        $this->name_t = $name_t;
    }

    function __construct3($id_t,$name_t){
        $this->id_t = $id_t;
        $this->name_t = $name_t;
    }

    function run(){
        echo $this->id_t." ".$this->name_t."<br/>";
    }
}
?>