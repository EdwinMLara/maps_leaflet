<?php
require_once('Modelos/Type.php');
require_once('Modelos/Repository.php');
require_once('Modelos/Service.php');

$target_dir = "css/images";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOK = 1;
$imaFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$status = ""; 

if(isset($_POST["submit"])){
    $image_size = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($image_size !== false){
        $uploadOK = 1;
    }
    else{
        $status =  "El archivo no es una imagen";
        $uploadOK = 0;
    }
}else{
    $status = "Error al Guardar los datos";
}

if(file_exists($target_file)){
    $status = "Lo siento el archivo ya existe";
    $uploadOK = 0;
}

if($_FILES["fileToUpload"]["size"] > 500000){
    $status = "el archivo es my grande";
}

if($imaFileType != "jpg" && $imaFileType != "png" && $imaFileType != "jpeg"){
    $status = "Lo sentimos, solo se aceptan JPG, JPEG y PNG";
    $uploadOK = 0;
}

if(!$uploadOK){
    $status = "Lo sentimos el archivo no fue subido";
    $uploadOK = 0;
}else{
    if(isset($_POST["name"])){
        $_FILES["fileToUpload"]["tmp_name"] = $_POST["name"];
    }
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
        $status = "El archivo fue subido exitosamente";
        $type = new Type([$_POST['nombre'],$_POST['icono']]);
        $service = new Service("type");
        $service->insert($type);
    }else{
        $status = "Lo sentimos ocurrio un error al subir el archivo";
    }
}
$url = "/maps-example/newIcon.php?status=".$status."&upload=".$uploadOK;

echo "<script>window.location='".$url."';</script>";

?>