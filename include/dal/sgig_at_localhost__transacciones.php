<?php
$dalTabletransacciones = array();
$dalTabletransacciones["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTabletransacciones["periodo_id"] = array("type"=>3,"varname"=>"periodo_id", "name" => "periodo_id");
$dalTabletransacciones["concepto_id"] = array("type"=>3,"varname"=>"concepto_id", "name" => "concepto_id");
$dalTabletransacciones["tipo"] = array("type"=>200,"varname"=>"tipo", "name" => "tipo");
$dalTabletransacciones["monto"] = array("type"=>3,"varname"=>"monto", "name" => "monto");
	$dalTabletransacciones["id"]["key"]=true;

$dal_info["sgig_at_localhost__transacciones"] = &$dalTabletransacciones;
?>