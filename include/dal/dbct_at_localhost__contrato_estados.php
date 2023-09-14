<?php
$dalTablecontrato_estados = array();
$dalTablecontrato_estados["estado_id"] = array("type"=>3,"varname"=>"estado_id", "name" => "estado_id", "autoInc" => "1");
$dalTablecontrato_estados["estado_img"] = array("type"=>200,"varname"=>"estado_img", "name" => "estado_img", "autoInc" => "0");
$dalTablecontrato_estados["estado_lnk"] = array("type"=>200,"varname"=>"estado_lnk", "name" => "estado_lnk", "autoInc" => "0");
$dalTablecontrato_estados["estado_nombre"] = array("type"=>200,"varname"=>"estado_nombre", "name" => "estado_nombre", "autoInc" => "0");
$dalTablecontrato_estados["estado_id"]["key"]=true;

$dal_info["dbct_at_localhost__contrato_estados"] = &$dalTablecontrato_estados;
?>