<?php
require_once('load.php');
$file = find_by_code('file',$_GET["code"]);
$code = $file['code'];
	$url ="../admin/".$file['url'];
	$filename = $file['filename'];
	//$ext=$file->extencion;
	if(!$file['is_folder']){
		$fullurl=$url.$filename;
		header("Content-Disposition: attachment; filename=$filename");
        readfile($fullurl); // or echo file_get_contents($filename);
        $download = "update file set contador = contador+1 where code= '{$code}'";
        $db->query($download);}
?>
	
