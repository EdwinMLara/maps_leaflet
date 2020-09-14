<?php
    include ('Modelos/Type.php');
    $type = new Type();
    $type->run();
    echo "<br/><br/>";
    
    $type1 = new Type("punto");
    $type1->run();
    echo "<br/><br/>";
    
    $type2 = new Type("1","puto");
    $type2->run();
    echo "<br/><br/>";
?>