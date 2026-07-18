<?php
$dalTableconceptos = array();
$dalTableconceptos["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableconceptos["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre");
$dalTableconceptos["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion");
	$dalTableconceptos["id"]["key"]=true;

$dal_info["sgig_at_localhost__conceptos"] = &$dalTableconceptos;
?>