<?php
$dalTabletipo_banco = array();
$dalTabletipo_banco["banco_id"] = array("type"=>3,"varname"=>"banco_id", "name" => "banco_id", "autoInc" => "1");
$dalTabletipo_banco["banco_sal"] = array("type"=>3,"varname"=>"banco_sal", "name" => "banco_sal", "autoInc" => "0");
$dalTabletipo_banco["cod_banco"] = array("type"=>3,"varname"=>"cod_banco", "name" => "cod_banco", "autoInc" => "0");
$dalTabletipo_banco["codigo"] = array("type"=>3,"varname"=>"codigo", "name" => "codigo", "autoInc" => "0");
$dalTabletipo_banco["nit_banco"] = array("type"=>3,"varname"=>"nit_banco", "name" => "nit_banco", "autoInc" => "0");
$dalTabletipo_banco["nom_banco"] = array("type"=>200,"varname"=>"nom_banco", "name" => "nom_banco", "autoInc" => "0");
$dalTabletipo_banco["banco_id"]["key"]=true;

$dal_info["dbct_at_localhost__tipo_banco"] = &$dalTabletipo_banco;
?>