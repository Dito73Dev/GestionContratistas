<?php
$dalTabledependencia = array();
$dalTabledependencia["estado"] = array("type"=>20,"varname"=>"estado", "name" => "estado", "autoInc" => "0");
$dalTabledependencia["estructura"] = array("type"=>200,"varname"=>"estructura", "name" => "estructura", "autoInc" => "0");
$dalTabledependencia["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "0");
$dalTabledependencia["id_depto_superior"] = array("type"=>3,"varname"=>"id_depto_superior", "name" => "id_depto_superior", "autoInc" => "0");
$dalTabledependencia["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre", "autoInc" => "0");
$dalTabledependencia["proceso"] = array("type"=>200,"varname"=>"proceso", "name" => "proceso", "autoInc" => "0");
$dalTabledependencia["id"]["key"]=true;

$dal_info["edl_at_127_0_0_1__dependencia"] = &$dalTabledependencia;
?>