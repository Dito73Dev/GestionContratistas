<?php
$dalTablenomina_cont_meses = array();
$dalTablenomina_cont_meses["mes_concepto"] = array("type"=>200,"varname"=>"mes_concepto", "name" => "mes_concepto", "autoInc" => "0");
$dalTablenomina_cont_meses["mes_ctrl"] = array("type"=>16,"varname"=>"mes_ctrl", "name" => "mes_ctrl", "autoInc" => "0");
$dalTablenomina_cont_meses["mes_dias"] = array("type"=>3,"varname"=>"mes_dias", "name" => "mes_dias", "autoInc" => "0");
$dalTablenomina_cont_meses["mes_id"] = array("type"=>3,"varname"=>"mes_id", "name" => "mes_id", "autoInc" => "1");
$dalTablenomina_cont_meses["mes_name"] = array("type"=>200,"varname"=>"mes_name", "name" => "mes_name", "autoInc" => "0");
$dalTablenomina_cont_meses["mes_id"]["key"]=true;

$dal_info["dbct_at_localhost__nomina_cont_meses"] = &$dalTablenomina_cont_meses;
?>