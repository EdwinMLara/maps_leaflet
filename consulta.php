<?php
    include ('config/load.php');
    $datos = find_by_typo('punto',1);

    echo json_encode($datos);
?>