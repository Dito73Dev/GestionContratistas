<?php
$tdatainforme_intersup_cxc = array();
$tdatainforme_intersup_cxc[".searchableFields"] = array();
$tdatainforme_intersup_cxc[".ShortName"] = "informe_intersup_cxc";
$tdatainforme_intersup_cxc[".OwnerID"] = "cxc_numdoc";
$tdatainforme_intersup_cxc[".OriginalTable"] = "informe_intersup_cxc";


$tdatainforme_intersup_cxc[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainforme_intersup_cxc[".originalPagesByType"] = $tdatainforme_intersup_cxc[".pagesByType"];
$tdatainforme_intersup_cxc[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainforme_intersup_cxc[".originalPages"] = $tdatainforme_intersup_cxc[".pages"];
$tdatainforme_intersup_cxc[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainforme_intersup_cxc[".originalDefaultPages"] = $tdatainforme_intersup_cxc[".defaultPages"];

//	field labels
$fieldLabelsinforme_intersup_cxc = array();
$fieldToolTipsinforme_intersup_cxc = array();
$pageTitlesinforme_intersup_cxc = array();
$placeHoldersinforme_intersup_cxc = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinforme_intersup_cxc["Spanish"] = array();
	$fieldToolTipsinforme_intersup_cxc["Spanish"] = array();
	$placeHoldersinforme_intersup_cxc["Spanish"] = array();
	$pageTitlesinforme_intersup_cxc["Spanish"] = array();
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cxc_id"] = "No. Interno";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cxc_id"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cxc_id"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["inf_id_fk"] = "Código de informe";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["inf_id_fk"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["inf_id_fk"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["inf_hash_fk"] = "Código de informe";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["inf_hash_fk"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["inf_hash_fk"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cxc_tipocontrato"] = "Tipo de contrato";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cxc_tipocontrato"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cxc_tipocontrato"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cxc_cont"] = "Número de contrato";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cxc_cont"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cxc_cont"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cxc_anio"] = "Vigencia";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cxc_anio"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cxc_anio"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cxc_razonsocial"] = "Nombres y Apellidos";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cxc_razonsocial"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cxc_razonsocial"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cxc_tipodoc"] = "Cxc Tipodoc";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cxc_tipodoc"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cxc_tipodoc"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cxc_numdoc"] = "Número de documento";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cxc_numdoc"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cxc_numdoc"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cxc_periodoi"] = "Periodo inicial";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cxc_periodoi"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cxc_periodoi"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cxc_periodof"] = "Periodo final ";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cxc_periodof"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cxc_periodof"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cxc_valor"] = "Valor solicitado ";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cxc_valor"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cxc_valor"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cxc_fechaelab"] = "Fecha de elaboración";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cxc_fechaelab"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cxc_fechaelab"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cxc_planilla"] = "Número(s) de planilla(s)";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cxc_planilla"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cxc_planilla"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cxc_planillafecha"] = "Fecha pago de planilla";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cxc_planillafecha"] = "<p><em>Si realizó el pago de más de una planilla, seleccione la fecha de la </em><strong><em>última planilla pagada</em></strong></p>";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cxc_planillafecha"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cxc_planillavalor"] = "Valor total pagado";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cxc_planillavalor"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cxc_planillavalor"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["sup_name"] = "Supervisor";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["sup_name"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["sup_name"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["sup_cargo"] = "Cargo";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["sup_cargo"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["sup_cargo"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["sup_dep"] = "Dependencia";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["sup_dep"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["sup_dep"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["sys_user"] = "Creado por";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["sys_user"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["sys_user"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["sys_fecha"] = "Fecha de creación";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["sys_fecha"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["sys_fecha"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["sys_status"] = "Estado";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["sys_status"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["sys_status"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cxc_fondopenvol"] = "Fondo de pensiones voluntarias";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cxc_fondopenvol"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cxc_fondopenvol"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cxc_pagoafc"] = "Ahorro para el fomento a la construcción";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cxc_pagoafc"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cxc_pagoafc"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["de_pre"] = "De Pre";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["de_pre"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["de_pre"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["de_num"] = "De Num";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["de_num"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["de_num"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["id_cont"] = "Contrato";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["id_cont"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["id_cont"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["id_consecutivo"] = "Consecutivo | No. de pago";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["id_consecutivo"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["id_consecutivo"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cont_fechai"] = "Contrato fecha inicio";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cont_fechai"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cont_fechai"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cont_fechaf"] = "Contrato fecha terminación";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cont_fechaf"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cont_fechaf"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cont_cdp"] = "CDP";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cont_cdp"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cont_cdp"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cont_rp"] = "RP";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cont_rp"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cont_rp"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cont_rubro"] = "Rubro";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cont_rubro"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cont_rubro"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cont_uej"] = "Unidad Ejecutora";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cont_uej"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cont_uej"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cont_uso"] = "Uso | Catálogo presupuestal";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cont_uso"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cont_uso"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cont_valorcontrato"] = "Valor del contrato";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cont_valorcontrato"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cont_valorcontrato"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cont_pagomensual"] = "Pago mensual";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cont_pagomensual"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cont_pagomensual"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cont_banco"] = "Banco";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cont_banco"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cont_banco"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cont_cuentatipo"] = "Tipo de cuenta";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cont_cuentatipo"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cont_cuentatipo"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cont_cuentanumero"] = "Número de cuenta";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cont_cuentanumero"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cont_cuentanumero"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["cont_factura"] = "¿Obligado a Facturar?";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["cont_factura"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["cont_factura"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["inf_mes"] = "Mes a pagar";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["inf_mes"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["inf_mes"] = "";
	$fieldLabelsinforme_intersup_cxc["Spanish"]["inf_tipopago"] = "Tipo de pago";
	$fieldToolTipsinforme_intersup_cxc["Spanish"]["inf_tipopago"] = "";
	$placeHoldersinforme_intersup_cxc["Spanish"]["inf_tipopago"] = "";
	$pageTitlesinforme_intersup_cxc["Spanish"]["add"] = "Gestionar pago";
	if (count($fieldToolTipsinforme_intersup_cxc["Spanish"]))
		$tdatainforme_intersup_cxc[".isUseToolTips"] = true;
}


	$tdatainforme_intersup_cxc[".NCSearch"] = true;



$tdatainforme_intersup_cxc[".shortTableName"] = "informe_intersup_cxc";
$tdatainforme_intersup_cxc[".nSecOptions"] = 1;

$tdatainforme_intersup_cxc[".mainTableOwnerID"] = "cxc_numdoc";
$tdatainforme_intersup_cxc[".entityType"] = 0;
$tdatainforme_intersup_cxc[".connId"] = "dbct_at_localhost";


$tdatainforme_intersup_cxc[".strOriginalTableName"] = "informe_intersup_cxc";

	



$tdatainforme_intersup_cxc[".showAddInPopup"] = false;

$tdatainforme_intersup_cxc[".showEditInPopup"] = false;

$tdatainforme_intersup_cxc[".showViewInPopup"] = false;

$tdatainforme_intersup_cxc[".listAjax"] = false;
//	temporary
//$tdatainforme_intersup_cxc[".listAjax"] = false;

	$tdatainforme_intersup_cxc[".audit"] = false;

	$tdatainforme_intersup_cxc[".locking"] = false;


$pages = $tdatainforme_intersup_cxc[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainforme_intersup_cxc[".edit"] = true;
	$tdatainforme_intersup_cxc[".afterEditAction"] = 1;
	$tdatainforme_intersup_cxc[".closePopupAfterEdit"] = 1;
	$tdatainforme_intersup_cxc[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainforme_intersup_cxc[".add"] = true;
$tdatainforme_intersup_cxc[".afterAddAction"] = 0;
$tdatainforme_intersup_cxc[".closePopupAfterAdd"] = 1;
$tdatainforme_intersup_cxc[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatainforme_intersup_cxc[".list"] = true;
}



$tdatainforme_intersup_cxc[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainforme_intersup_cxc[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainforme_intersup_cxc[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainforme_intersup_cxc[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainforme_intersup_cxc[".printFriendly"] = true;
}



$tdatainforme_intersup_cxc[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainforme_intersup_cxc[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainforme_intersup_cxc[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainforme_intersup_cxc[".isUseAjaxSuggest"] = true;



												

$tdatainforme_intersup_cxc[".ajaxCodeSnippetAdded"] = false;

$tdatainforme_intersup_cxc[".buttonsAdded"] = false;

$tdatainforme_intersup_cxc[".addPageEvents"] = true;

// use timepicker for search panel
$tdatainforme_intersup_cxc[".isUseTimeForSearch"] = false;


$tdatainforme_intersup_cxc[".badgeColor"] = "2F4F4F";


$tdatainforme_intersup_cxc[".allSearchFields"] = array();
$tdatainforme_intersup_cxc[".filterFields"] = array();
$tdatainforme_intersup_cxc[".requiredSearchFields"] = array();

$tdatainforme_intersup_cxc[".googleLikeFields"] = array();
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cxc_id";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "de_pre";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "de_num";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "inf_id_fk";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "inf_hash_fk";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "id_cont";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "id_consecutivo";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cxc_tipocontrato";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cxc_cont";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cxc_anio";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cxc_razonsocial";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cxc_tipodoc";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cxc_numdoc";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cxc_periodoi";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cxc_periodof";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cxc_valor";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cxc_fechaelab";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cxc_planilla";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cxc_planillafecha";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cxc_planillavalor";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "sup_name";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "sup_cargo";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "sup_dep";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "sys_user";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "sys_fecha";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "sys_status";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cxc_fondopenvol";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cxc_pagoafc";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cont_fechai";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cont_fechaf";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cont_cdp";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cont_rp";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cont_rubro";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cont_uej";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cont_uso";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cont_valorcontrato";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cont_pagomensual";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cont_banco";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cont_cuentatipo";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cont_cuentanumero";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "cont_factura";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "inf_mes";
$tdatainforme_intersup_cxc[".googleLikeFields"][] = "inf_tipopago";



$tdatainforme_intersup_cxc[".tableType"] = "list";

$tdatainforme_intersup_cxc[".printerPageOrientation"] = 0;
$tdatainforme_intersup_cxc[".nPrinterPageScale"] = 100;

$tdatainforme_intersup_cxc[".nPrinterSplitRecords"] = 40;

$tdatainforme_intersup_cxc[".geocodingEnabled"] = false;




$tdatainforme_intersup_cxc[".isDisplayLoading"] = true;



$tdatainforme_intersup_cxc[".noRecordsFirstPage"] = true;



$tdatainforme_intersup_cxc[".pageSize"] = 20;

$tdatainforme_intersup_cxc[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatainforme_intersup_cxc[".strOrderBy"] = $tstrOrderBy;

$tdatainforme_intersup_cxc[".orderindexes"] = array();


$tdatainforme_intersup_cxc[".sqlHead"] = "SELECT cxc_id,  de_pre,  de_num,  inf_id_fk,  inf_hash_fk,  id_cont,  id_consecutivo,  cxc_tipocontrato,  cxc_cont,  cxc_anio,  cxc_razonsocial,  cxc_tipodoc,  cxc_numdoc,  cxc_periodoi,  cxc_periodof,  cxc_valor,  cxc_fechaelab,  cxc_planilla,  cxc_planillafecha,  cxc_planillavalor,  sup_name,  sup_cargo,  sup_dep,  sys_user,  sys_fecha,  sys_status,  cxc_fondopenvol,  cxc_pagoafc,  cont_fechai,  cont_fechaf,  cont_cdp,  cont_rp,  cont_rubro,  cont_uej,  cont_uso,  cont_valorcontrato,  cont_pagomensual,  cont_banco,  cont_cuentatipo,  cont_cuentanumero,  cont_factura,  inf_mes,  inf_tipopago";
$tdatainforme_intersup_cxc[".sqlFrom"] = "FROM informe_intersup_cxc";
$tdatainforme_intersup_cxc[".sqlWhereExpr"] = "";
$tdatainforme_intersup_cxc[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainforme_intersup_cxc[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainforme_intersup_cxc[".arrGroupsPerPage"] = $arrGPP;

$tdatainforme_intersup_cxc[".highlightSearchResults"] = true;

$tableKeysinforme_intersup_cxc = array();
$tableKeysinforme_intersup_cxc[] = "cxc_id";
$tdatainforme_intersup_cxc[".Keys"] = $tableKeysinforme_intersup_cxc;


$tdatainforme_intersup_cxc[".hideMobileList"] = array();




//	cxc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cxc_id";
	$fdata["GoodName"] = "cxc_id";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cxc_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cxc_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cxc_id"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cxc_id";
//	de_pre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "de_pre";
	$fdata["GoodName"] = "de_pre";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","de_pre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "de_pre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "de_pre";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["de_pre"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "de_pre";
//	de_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "de_num";
	$fdata["GoodName"] = "de_num";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","de_num");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "de_num";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "de_num";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["de_num"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "de_num";
//	inf_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "inf_id_fk";
	$fdata["GoodName"] = "inf_id_fk";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","inf_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "inf_id_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_id_fk";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "informe_intersup_4";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"inf_hash_fk", 'lookupF'=>"inf_hash");
	$edata["autoCompleteFields"][] = array('masterF'=>"id_cont", 'lookupF'=>"id_cont_fk");
	$edata["autoCompleteFields"][] = array('masterF'=>"cxc_tipocontrato", 'lookupF'=>"cert_modalidad");
	$edata["autoCompleteFields"][] = array('masterF'=>"cxc_cont", 'lookupF'=>"inf_numerocontrato");
	$edata["autoCompleteFields"][] = array('masterF'=>"cxc_anio", 'lookupF'=>"inf_anio");
	$edata["autoCompleteFields"][] = array('masterF'=>"cxc_razonsocial", 'lookupF'=>"inf_nombrecontratista");
	$edata["autoCompleteFields"][] = array('masterF'=>"cxc_numdoc", 'lookupF'=>"inf_doccontratista");
	$edata["autoCompleteFields"][] = array('masterF'=>"cxc_periodoi", 'lookupF'=>"inf_fecharep_i");
	$edata["autoCompleteFields"][] = array('masterF'=>"cxc_periodof", 'lookupF'=>"inf_fecharep_f");
	$edata["autoCompleteFields"][] = array('masterF'=>"sup_name", 'lookupF'=>"inf_nombre");
	$edata["autoCompleteFields"][] = array('masterF'=>"sup_cargo", 'lookupF'=>"inf_cargo");
	$edata["autoCompleteFields"][] = array('masterF'=>"sup_dep", 'lookupF'=>"inf_dependencia");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_fechai", 'lookupF'=>"inf_fechacont_i");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_fechaf", 'lookupF'=>"inf_fechacont_f");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_cdp", 'lookupF'=>"inf_cdp");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_rp", 'lookupF'=>"inf_rp");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_rubro", 'lookupF'=>"inf_rubrocode");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_uej", 'lookupF'=>"inf_rubroname");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_uso", 'lookupF'=>"inf_usopresupuestal");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_valorcontrato", 'lookupF'=>"inf_valorcontrato");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "inf_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "inf_hash";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_consecutivo";

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Ya existe una cuenta radicada con este código de informe", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["inf_id_fk"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "inf_id_fk";
//	inf_hash_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inf_hash_fk";
	$fdata["GoodName"] = "inf_hash_fk";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","inf_hash_fk");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_hash_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_hash_fk";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["inf_hash_fk"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "inf_hash_fk";
//	id_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id_cont";
	$fdata["GoodName"] = "id_cont";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","id_cont");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cont";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_bandejaentrada_supervisores";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"cont_pagomensual", 'lookupF'=>"cont_valormensual");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "numcontrato";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_consecutivo";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["id_cont"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "id_cont";
//	id_consecutivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_consecutivo";
	$fdata["GoodName"] = "id_consecutivo";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","id_consecutivo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_consecutivo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_consecutivo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_inf_plandepagos";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"inf_mes", 'lookupF'=>"inf_mes");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_tipopago", 'lookupF'=>"inf_tipopago");
	$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "inf_consecutivo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "inf_consecutivo";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "inf_id_fk", "lookup" => "inf_id_fk" );
	$edata["categoryFields"][] = array( "main" => "id_cont", "lookup" => "id_cont_fk" );

	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["id_consecutivo"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "id_consecutivo";
//	cxc_tipocontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cxc_tipocontrato";
	$fdata["GoodName"] = "cxc_tipocontrato";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cxc_tipocontrato");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cxc_tipocontrato";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_tipocontrato";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cxc_tipocontrato"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cxc_tipocontrato";
//	cxc_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cxc_cont";
	$fdata["GoodName"] = "cxc_cont";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cxc_cont");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cxc_cont";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_cont";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cxc_cont"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cxc_cont";
//	cxc_anio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cxc_anio";
	$fdata["GoodName"] = "cxc_anio";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cxc_anio");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "cxc_anio";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_anio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "cxc_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cxc_anio"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cxc_anio";
//	cxc_razonsocial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cxc_razonsocial";
	$fdata["GoodName"] = "cxc_razonsocial";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cxc_razonsocial");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cxc_razonsocial";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_razonsocial";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cxc_razonsocial"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cxc_razonsocial";
//	cxc_tipodoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cxc_tipodoc";
	$fdata["GoodName"] = "cxc_tipodoc";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cxc_tipodoc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cxc_tipodoc";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_tipodoc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cxc_tipodoc"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cxc_tipodoc";
//	cxc_numdoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cxc_numdoc";
	$fdata["GoodName"] = "cxc_numdoc";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cxc_numdoc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cxc_numdoc";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_numdoc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contractor_master";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"cont_banco", 'lookupF'=>"bank_name");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_cuentatipo", 'lookupF'=>"bank_cta_type");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_cuentanumero", 'lookupF'=>"bank_cta_number");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_factura", 'lookupF'=>"factura");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "contractor_doc_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "contractor_doc_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cxc_numdoc"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cxc_numdoc";
//	cxc_periodoi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cxc_periodoi";
	$fdata["GoodName"] = "cxc_periodoi";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cxc_periodoi");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cxc_periodoi";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_periodoi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cxc_periodoi"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cxc_periodoi";
//	cxc_periodof
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cxc_periodof";
	$fdata["GoodName"] = "cxc_periodof";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cxc_periodof");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cxc_periodof";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_periodof";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cxc_periodof"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cxc_periodof";
//	cxc_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cxc_valor";
	$fdata["GoodName"] = "cxc_valor";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cxc_valor");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cxc_valor";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_valor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cxc_valor"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cxc_valor";
//	cxc_fechaelab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cxc_fechaelab";
	$fdata["GoodName"] = "cxc_fechaelab";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cxc_fechaelab");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cxc_fechaelab";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_fechaelab";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cxc_fechaelab"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cxc_fechaelab";
//	cxc_planilla
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "cxc_planilla";
	$fdata["GoodName"] = "cxc_planilla";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cxc_planilla");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cxc_planilla";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_planilla";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cxc_planilla"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cxc_planilla";
//	cxc_planillafecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "cxc_planillafecha";
	$fdata["GoodName"] = "cxc_planillafecha";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cxc_planillafecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cxc_planillafecha";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_planillafecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cxc_planillafecha"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cxc_planillafecha";
//	cxc_planillavalor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cxc_planillavalor";
	$fdata["GoodName"] = "cxc_planillavalor";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cxc_planillavalor");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cxc_planillavalor";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_planillavalor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cxc_planillavalor"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cxc_planillavalor";
//	sup_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "sup_name";
	$fdata["GoodName"] = "sup_name";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","sup_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sup_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["sup_name"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "sup_name";
//	sup_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "sup_cargo";
	$fdata["GoodName"] = "sup_cargo";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","sup_cargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sup_cargo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_cargo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["sup_cargo"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "sup_cargo";
//	sup_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "sup_dep";
	$fdata["GoodName"] = "sup_dep";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","sup_dep");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sup_dep";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_dep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["sup_dep"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "sup_dep";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["sys_user"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "sys_user";
//	sys_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "sys_fecha";
	$fdata["GoodName"] = "sys_fecha";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","sys_fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_fecha";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["sys_fecha"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "sys_fecha";
//	sys_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "sys_status";
	$fdata["GoodName"] = "sys_status";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","sys_status");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sys_status";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["sys_status"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "sys_status";
//	cxc_fondopenvol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cxc_fondopenvol";
	$fdata["GoodName"] = "cxc_fondopenvol";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cxc_fondopenvol");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cxc_fondopenvol";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_fondopenvol";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cxc_fondopenvol"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cxc_fondopenvol";
//	cxc_pagoafc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "cxc_pagoafc";
	$fdata["GoodName"] = "cxc_pagoafc";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cxc_pagoafc");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cxc_pagoafc";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_pagoafc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cxc_pagoafc"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cxc_pagoafc";
//	cont_fechai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "cont_fechai";
	$fdata["GoodName"] = "cont_fechai";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cont_fechai");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cont_fechai";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechai";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cont_fechai"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cont_fechai";
//	cont_fechaf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "cont_fechaf";
	$fdata["GoodName"] = "cont_fechaf";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cont_fechaf");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cont_fechaf";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechaf";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cont_fechaf"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cont_fechaf";
//	cont_cdp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "cont_cdp";
	$fdata["GoodName"] = "cont_cdp";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cont_cdp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_cdp";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_cdp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cont_cdp"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cont_cdp";
//	cont_rp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "cont_rp";
	$fdata["GoodName"] = "cont_rp";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cont_rp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_rp";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_rp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cont_rp"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cont_rp";
//	cont_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "cont_rubro";
	$fdata["GoodName"] = "cont_rubro";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cont_rubro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_rubro";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_rubro";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cont_rubro"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cont_rubro";
//	cont_uej
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "cont_uej";
	$fdata["GoodName"] = "cont_uej";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cont_uej");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_uej";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_uej";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cont_uej"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cont_uej";
//	cont_uso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "cont_uso";
	$fdata["GoodName"] = "cont_uso";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cont_uso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_uso";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_uso";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cont_uso"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cont_uso";
//	cont_valorcontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "cont_valorcontrato";
	$fdata["GoodName"] = "cont_valorcontrato";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cont_valorcontrato");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cont_valorcontrato";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valorcontrato";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cont_valorcontrato"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cont_valorcontrato";
//	cont_pagomensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "cont_pagomensual";
	$fdata["GoodName"] = "cont_pagomensual";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cont_pagomensual");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cont_pagomensual";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_pagomensual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cont_pagomensual"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cont_pagomensual";
//	cont_banco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "cont_banco";
	$fdata["GoodName"] = "cont_banco";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cont_banco");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cont_banco";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_banco";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tipo_banco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "banco_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nom_banco";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cont_banco"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cont_banco";
//	cont_cuentatipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "cont_cuentatipo";
	$fdata["GoodName"] = "cont_cuentatipo";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cont_cuentatipo");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cont_cuentatipo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_cuentatipo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tipo_cta_banco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cta_numero";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "des_cuenta";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cont_cuentatipo"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cont_cuentatipo";
//	cont_cuentanumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "cont_cuentanumero";
	$fdata["GoodName"] = "cont_cuentanumero";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cont_cuentanumero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_cuentanumero";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_cuentanumero";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cont_cuentanumero"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cont_cuentanumero";
//	cont_factura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "cont_factura";
	$fdata["GoodName"] = "cont_factura";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","cont_factura");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cont_factura";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_factura";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_sn";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "sn_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "snfactura";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["cont_factura"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "cont_factura";
//	inf_mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "inf_mes";
	$fdata["GoodName"] = "inf_mes";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","inf_mes");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "inf_mes";

		$fdata["sourceSingle"] = "inf_mes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_mes";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "nomina_cont_meses";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "mes_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "mes_concepto";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["inf_mes"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "inf_mes";
//	inf_tipopago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "inf_tipopago";
	$fdata["GoodName"] = "inf_tipopago";
	$fdata["ownerTable"] = "informe_intersup_cxc";
	$fdata["Label"] = GetFieldLabel("informe_intersup_cxc","inf_tipopago");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "inf_tipopago";

		$fdata["sourceSingle"] = "inf_tipopago";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_tipopago";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_tipopago";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "tipopago_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "tipopago_nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_cxc["inf_tipopago"] = $fdata;
		$tdatainforme_intersup_cxc[".searchableFields"][] = "inf_tipopago";


$tables_data["informe_intersup_cxc"]=&$tdatainforme_intersup_cxc;
$field_labels["informe_intersup_cxc"] = &$fieldLabelsinforme_intersup_cxc;
$fieldToolTips["informe_intersup_cxc"] = &$fieldToolTipsinforme_intersup_cxc;
$placeHolders["informe_intersup_cxc"] = &$placeHoldersinforme_intersup_cxc;
$page_titles["informe_intersup_cxc"] = &$pageTitlesinforme_intersup_cxc;


changeTextControlsToDate( "informe_intersup_cxc" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["informe_intersup_cxc"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["informe_intersup_cxc"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_informe_intersup_cxc()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cxc_id,  de_pre,  de_num,  inf_id_fk,  inf_hash_fk,  id_cont,  id_consecutivo,  cxc_tipocontrato,  cxc_cont,  cxc_anio,  cxc_razonsocial,  cxc_tipodoc,  cxc_numdoc,  cxc_periodoi,  cxc_periodof,  cxc_valor,  cxc_fechaelab,  cxc_planilla,  cxc_planillafecha,  cxc_planillavalor,  sup_name,  sup_cargo,  sup_dep,  sys_user,  sys_fecha,  sys_status,  cxc_fondopenvol,  cxc_pagoafc,  cont_fechai,  cont_fechaf,  cont_cdp,  cont_rp,  cont_rubro,  cont_uej,  cont_uso,  cont_valorcontrato,  cont_pagomensual,  cont_banco,  cont_cuentatipo,  cont_cuentanumero,  cont_factura,  inf_mes,  inf_tipopago";
$proto0["m_strFrom"] = "FROM informe_intersup_cxc";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_id",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto6["m_sql"] = "cxc_id";
$proto6["m_srcTableName"] = "informe_intersup_cxc";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "de_pre",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto8["m_sql"] = "de_pre";
$proto8["m_srcTableName"] = "informe_intersup_cxc";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "de_num",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto10["m_sql"] = "de_num";
$proto10["m_srcTableName"] = "informe_intersup_cxc";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_id_fk",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto12["m_sql"] = "inf_id_fk";
$proto12["m_srcTableName"] = "informe_intersup_cxc";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_hash_fk",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto14["m_sql"] = "inf_hash_fk";
$proto14["m_srcTableName"] = "informe_intersup_cxc";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto16["m_sql"] = "id_cont";
$proto16["m_srcTableName"] = "informe_intersup_cxc";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_consecutivo",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto18["m_sql"] = "id_consecutivo";
$proto18["m_srcTableName"] = "informe_intersup_cxc";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_tipocontrato",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto20["m_sql"] = "cxc_tipocontrato";
$proto20["m_srcTableName"] = "informe_intersup_cxc";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_cont",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto22["m_sql"] = "cxc_cont";
$proto22["m_srcTableName"] = "informe_intersup_cxc";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_anio",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto24["m_sql"] = "cxc_anio";
$proto24["m_srcTableName"] = "informe_intersup_cxc";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_razonsocial",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto26["m_sql"] = "cxc_razonsocial";
$proto26["m_srcTableName"] = "informe_intersup_cxc";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_tipodoc",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto28["m_sql"] = "cxc_tipodoc";
$proto28["m_srcTableName"] = "informe_intersup_cxc";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_numdoc",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto30["m_sql"] = "cxc_numdoc";
$proto30["m_srcTableName"] = "informe_intersup_cxc";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_periodoi",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto32["m_sql"] = "cxc_periodoi";
$proto32["m_srcTableName"] = "informe_intersup_cxc";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_periodof",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto34["m_sql"] = "cxc_periodof";
$proto34["m_srcTableName"] = "informe_intersup_cxc";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_valor",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto36["m_sql"] = "cxc_valor";
$proto36["m_srcTableName"] = "informe_intersup_cxc";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_fechaelab",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto38["m_sql"] = "cxc_fechaelab";
$proto38["m_srcTableName"] = "informe_intersup_cxc";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_planilla",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto40["m_sql"] = "cxc_planilla";
$proto40["m_srcTableName"] = "informe_intersup_cxc";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_planillafecha",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto42["m_sql"] = "cxc_planillafecha";
$proto42["m_srcTableName"] = "informe_intersup_cxc";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_planillavalor",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto44["m_sql"] = "cxc_planillavalor";
$proto44["m_srcTableName"] = "informe_intersup_cxc";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_name",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto46["m_sql"] = "sup_name";
$proto46["m_srcTableName"] = "informe_intersup_cxc";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_cargo",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto48["m_sql"] = "sup_cargo";
$proto48["m_srcTableName"] = "informe_intersup_cxc";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_dep",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto50["m_sql"] = "sup_dep";
$proto50["m_srcTableName"] = "informe_intersup_cxc";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto52["m_sql"] = "sys_user";
$proto52["m_srcTableName"] = "informe_intersup_cxc";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_fecha",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto54["m_sql"] = "sys_fecha";
$proto54["m_srcTableName"] = "informe_intersup_cxc";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_status",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto56["m_sql"] = "sys_status";
$proto56["m_srcTableName"] = "informe_intersup_cxc";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_fondopenvol",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto58["m_sql"] = "cxc_fondopenvol";
$proto58["m_srcTableName"] = "informe_intersup_cxc";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_pagoafc",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto60["m_sql"] = "cxc_pagoafc";
$proto60["m_srcTableName"] = "informe_intersup_cxc";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechai",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto62["m_sql"] = "cont_fechai";
$proto62["m_srcTableName"] = "informe_intersup_cxc";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechaf",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto64["m_sql"] = "cont_fechaf";
$proto64["m_srcTableName"] = "informe_intersup_cxc";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_cdp",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto66["m_sql"] = "cont_cdp";
$proto66["m_srcTableName"] = "informe_intersup_cxc";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_rp",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto68["m_sql"] = "cont_rp";
$proto68["m_srcTableName"] = "informe_intersup_cxc";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_rubro",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto70["m_sql"] = "cont_rubro";
$proto70["m_srcTableName"] = "informe_intersup_cxc";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_uej",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto72["m_sql"] = "cont_uej";
$proto72["m_srcTableName"] = "informe_intersup_cxc";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_uso",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto74["m_sql"] = "cont_uso";
$proto74["m_srcTableName"] = "informe_intersup_cxc";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valorcontrato",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto76["m_sql"] = "cont_valorcontrato";
$proto76["m_srcTableName"] = "informe_intersup_cxc";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_pagomensual",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto78["m_sql"] = "cont_pagomensual";
$proto78["m_srcTableName"] = "informe_intersup_cxc";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_banco",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto80["m_sql"] = "cont_banco";
$proto80["m_srcTableName"] = "informe_intersup_cxc";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_cuentatipo",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto82["m_sql"] = "cont_cuentatipo";
$proto82["m_srcTableName"] = "informe_intersup_cxc";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_cuentanumero",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto84["m_sql"] = "cont_cuentanumero";
$proto84["m_srcTableName"] = "informe_intersup_cxc";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_factura",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto86["m_sql"] = "cont_factura";
$proto86["m_srcTableName"] = "informe_intersup_cxc";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_mes",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto88["m_sql"] = "inf_mes";
$proto88["m_srcTableName"] = "informe_intersup_cxc";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_tipopago",
	"m_strTable" => "informe_intersup_cxc",
	"m_srcTableName" => "informe_intersup_cxc"
));

$proto90["m_sql"] = "inf_tipopago";
$proto90["m_srcTableName"] = "informe_intersup_cxc";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto92=array();
$proto92["m_link"] = "SQLL_MAIN";
			$proto93=array();
$proto93["m_strName"] = "informe_intersup_cxc";
$proto93["m_srcTableName"] = "informe_intersup_cxc";
$proto93["m_columns"] = array();
$proto93["m_columns"][] = "cxc_id";
$proto93["m_columns"][] = "de_pre";
$proto93["m_columns"][] = "de_num";
$proto93["m_columns"][] = "inf_id_fk";
$proto93["m_columns"][] = "inf_hash_fk";
$proto93["m_columns"][] = "id_cont";
$proto93["m_columns"][] = "id_consecutivo";
$proto93["m_columns"][] = "cxc_tipocontrato";
$proto93["m_columns"][] = "cxc_cont";
$proto93["m_columns"][] = "cxc_anio";
$proto93["m_columns"][] = "cxc_razonsocial";
$proto93["m_columns"][] = "cxc_tipodoc";
$proto93["m_columns"][] = "cxc_numdoc";
$proto93["m_columns"][] = "cxc_periodoi";
$proto93["m_columns"][] = "cxc_periodof";
$proto93["m_columns"][] = "cxc_valor";
$proto93["m_columns"][] = "cxc_fechaelab";
$proto93["m_columns"][] = "cxc_planilla";
$proto93["m_columns"][] = "cxc_planillafecha";
$proto93["m_columns"][] = "cxc_planillavalor";
$proto93["m_columns"][] = "sup_name";
$proto93["m_columns"][] = "sup_cargo";
$proto93["m_columns"][] = "sup_dep";
$proto93["m_columns"][] = "sys_user";
$proto93["m_columns"][] = "sys_fecha";
$proto93["m_columns"][] = "sys_status";
$proto93["m_columns"][] = "cxc_fondopenvol";
$proto93["m_columns"][] = "cxc_pagoafc";
$proto93["m_columns"][] = "sys_radicauser";
$proto93["m_columns"][] = "sys_radicadate";
$proto93["m_columns"][] = "sys_radicatime";
$proto93["m_columns"][] = "sys_radicaperiodo";
$proto93["m_columns"][] = "ctrl";
$proto93["m_columns"][] = "send_user";
$proto93["m_columns"][] = "send_mail";
$proto93["m_columns"][] = "send_mail_obs";
$proto93["m_columns"][] = "send_date";
$proto93["m_columns"][] = "send_dev_mail";
$proto93["m_columns"][] = "send_dev_mail_obs";
$proto93["m_columns"][] = "send_dev_date";
$proto93["m_columns"][] = "send_dev_func";
$proto93["m_columns"][] = "evento_type_id_fk";
$proto93["m_columns"][] = "cont_fechai";
$proto93["m_columns"][] = "cont_fechaf";
$proto93["m_columns"][] = "cont_cdp";
$proto93["m_columns"][] = "cont_rp";
$proto93["m_columns"][] = "cont_rubro";
$proto93["m_columns"][] = "cont_uej";
$proto93["m_columns"][] = "cont_uso";
$proto93["m_columns"][] = "cont_valorcontrato";
$proto93["m_columns"][] = "cont_pagomensual";
$proto93["m_columns"][] = "cont_banco";
$proto93["m_columns"][] = "cont_cuentatipo";
$proto93["m_columns"][] = "cont_cuentanumero";
$proto93["m_columns"][] = "cont_factura";
$proto93["m_columns"][] = "inf_mes";
$proto93["m_columns"][] = "inf_tipopago";
$obj = new SQLTable($proto93);

$proto92["m_table"] = $obj;
$proto92["m_sql"] = "informe_intersup_cxc";
$proto92["m_alias"] = "";
$proto92["m_srcTableName"] = "informe_intersup_cxc";
$proto94=array();
$proto94["m_sql"] = "";
$proto94["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto94["m_column"]=$obj;
$proto94["m_contained"] = array();
$proto94["m_strCase"] = "";
$proto94["m_havingmode"] = false;
$proto94["m_inBrackets"] = false;
$proto94["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto94);

$proto92["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto92);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="informe_intersup_cxc";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_informe_intersup_cxc = createSqlQuery_informe_intersup_cxc();


	
								;

																																											

$tdatainforme_intersup_cxc[".sqlquery"] = $queryData_informe_intersup_cxc;



include_once(getabspath("include/informe_intersup_cxc_events.php"));
$tdatainforme_intersup_cxc[".hasEvents"] = true;

?>