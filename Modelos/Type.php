<?php
class Type{
    public static $tablename = 'type';
    public $id_t;
    public $name_t;

    function __construct(){ 
        $listArgs = func_get_args()[0];
        switch (func_num_args()) {
            case '0':
                $this->__construct1();
                break;
            case '1':
                $this->__construct2($listArgs[0],$listArgs[1]);
                break;
        }     
    }

    function __construct1(){
    }

    function __construct2($id_t,$name_t){
        $this->id_t = $id_t;
        $this->name_t = $name_t;
    }
}
?>