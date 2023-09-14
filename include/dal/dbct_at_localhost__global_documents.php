<?php
$dalTableglobal_documents = array();
$dalTableglobal_documents["doc_file"] = array("type"=>200,"varname"=>"doc_file", "name" => "doc_file", "autoInc" => "0");
$dalTableglobal_documents["doc_id"] = array("type"=>3,"varname"=>"doc_id", "name" => "doc_id", "autoInc" => "1");
$dalTableglobal_documents["doc_name"] = array("type"=>200,"varname"=>"doc_name", "name" => "doc_name", "autoInc" => "0");
$dalTableglobal_documents["doc_id"]["key"]=true;

$dal_info["dbct_at_localhost__global_documents"] = &$dalTableglobal_documents;
?>