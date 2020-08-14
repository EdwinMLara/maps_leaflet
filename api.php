<?php
    require_once("config/load.php");
    $types = find_by_typo('punto','1');
    echo json_encode($types);

?>
