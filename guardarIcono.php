<?php
require_once('Modelos/Type.php');
require_once("config/database.php");
require_once("config/sql.php");
require_once('Modelos/Repository.php');
require_once('Modelos/Service.php');


$target_dir = "css/images/";
/**Target file sirve para guardar con el mismo nombre */
$target_file = $target_dir."/".basename($_FILES["fileToUpload"]["name"]);
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
    $status = "No hay datos para guardar";
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

if($uploadOK == 0){
    $uploadOK = 0;
}else{
    if(isset($_POST["name"])){
        $new_name_image = $target_dir.$_POST["name"].".".$imaFileType;
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$new_name_image)){
            $status = "El archivo fue subido exitosamente";
            $service = new Service("type");
            if(!$service->insert($_POST["name"])){
                $status = "No se pudo almacenar en la base de datos";
            }
        }else{
            $status = "Lo sentimos ocurrio un error al subir el archivo";
        }
    }
}

$url = "/maps-example/newIcon.php?status=".$status."&upload=".$uploadOK;

echo "<script>window.location='".$url."';</script>";

?>