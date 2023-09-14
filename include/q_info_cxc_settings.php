<?php
$tdataq_info_cxc = array();
$tdataq_info_cxc[".searchableFields"] = array();
$tdataq_info_cxc[".ShortName"] = "q_info_cxc";
$tdataq_info_cxc[".OwnerID"] = "";
$tdataq_info_cxc[".OriginalTable"] = "q_info_cxc";


$tdataq_info_cxc[".pagesByType"] = my_json_decode( "{}" );
$tdataq_info_cxc[".originalPagesByType"] = $tdataq_info_cxc[".pagesByType"];
$tdataq_info_cxc[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataq_info_cxc[".originalPages"] = $tdataq_info_cxc[".pages"];
$tdataq_info_cxc[".defaultPages"] = my_json_decode( "{}" );
$tdataq_info_cxc[".originalDefaultPages"] = $tdataq_info_cxc[".defaultPages"];

//	field labels
$fieldLabelsq_info_cxc = array();
$fieldToolTipsq_info_cxc = array();
$pageTitlesq_info_cxc = array();
$placeHoldersq_info_cxc = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_info_cxc["Spanish"] = array();
	$fieldToolTipsq_info_cxc["Spanish"] = array();
	$placeHoldersq_info_cxc["Spanish"] = array();
	$pageTitlesq_info_cxc["Spanish"] = array();
	$fieldLabelsq_info_cxc["Spanish"]["cxc_id"] = "Cxc Id";
	$fieldToolTipsq_info_cxc["Spanish"]["cxc_id"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cxc_id"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["NumDoc"] = "Num Doc";
	$fieldToolTipsq_info_cxc["Spanish"]["NumDoc"] = "";
	$placeHoldersq_info_cxc["Spanish"]["NumDoc"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["inf_id_fk"] = "Inf Id Fk";
	$fieldToolTipsq_info_cxc["Spanish"]["inf_id_fk"] = "";
	$placeHoldersq_info_cxc["Spanish"]["inf_id_fk"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["inf_hash_fk"] = "Inf Hash Fk";
	$fieldToolTipsq_info_cxc["Spanish"]["inf_hash_fk"] = "";
	$placeHoldersq_info_cxc["Spanish"]["inf_hash_fk"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["id_cont"] = "Id Cont";
	$fieldToolTipsq_info_cxc["Spanish"]["id_cont"] = "";
	$placeHoldersq_info_cxc["Spanish"]["id_cont"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["id_consecutivo"] = "Id Consecutivo";
	$fieldToolTipsq_info_cxc["Spanish"]["id_consecutivo"] = "";
	$placeHoldersq_info_cxc["Spanish"]["id_consecutivo"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cxc_tipocontrato"] = "Cxc Tipocontrato";
	$fieldToolTipsq_info_cxc["Spanish"]["cxc_tipocontrato"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cxc_tipocontrato"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cxc_cont"] = "Cxc Cont";
	$fieldToolTipsq_info_cxc["Spanish"]["cxc_cont"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cxc_cont"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cxc_anio"] = "Cxc Anio";
	$fieldToolTipsq_info_cxc["Spanish"]["cxc_anio"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cxc_anio"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cxc_razonsocial"] = "Cxc Razonsocial";
	$fieldToolTipsq_info_cxc["Spanish"]["cxc_razonsocial"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cxc_razonsocial"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cxc_tipodoc"] = "Cxc Tipodoc";
	$fieldToolTipsq_info_cxc["Spanish"]["cxc_tipodoc"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cxc_tipodoc"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cxc_numdoc"] = "Cxc Numdoc";
	$fieldToolTipsq_info_cxc["Spanish"]["cxc_numdoc"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cxc_numdoc"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cxc_periodoi"] = "Cxc Periodoi";
	$fieldToolTipsq_info_cxc["Spanish"]["cxc_periodoi"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cxc_periodoi"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cxc_periodof"] = "Cxc Periodof";
	$fieldToolTipsq_info_cxc["Spanish"]["cxc_periodof"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cxc_periodof"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cxc_valor"] = "Cxc Valor";
	$fieldToolTipsq_info_cxc["Spanish"]["cxc_valor"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cxc_valor"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cxc_fechaelab"] = "Cxc Fechaelab";
	$fieldToolTipsq_info_cxc["Spanish"]["cxc_fechaelab"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cxc_fechaelab"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cxc_planilla"] = "Cxc Planilla";
	$fieldToolTipsq_info_cxc["Spanish"]["cxc_planilla"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cxc_planilla"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cxc_planillafecha"] = "Cxc Planillafecha";
	$fieldToolTipsq_info_cxc["Spanish"]["cxc_planillafecha"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cxc_planillafecha"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cxc_planillavalor"] = "Cxc Planillavalor";
	$fieldToolTipsq_info_cxc["Spanish"]["cxc_planillavalor"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cxc_planillavalor"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["sup_name"] = "Sup Name";
	$fieldToolTipsq_info_cxc["Spanish"]["sup_name"] = "";
	$placeHoldersq_info_cxc["Spanish"]["sup_name"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["sup_cargo"] = "Sup Cargo";
	$fieldToolTipsq_info_cxc["Spanish"]["sup_cargo"] = "";
	$placeHoldersq_info_cxc["Spanish"]["sup_cargo"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["sup_dep"] = "Sup Dep";
	$fieldToolTipsq_info_cxc["Spanish"]["sup_dep"] = "";
	$placeHoldersq_info_cxc["Spanish"]["sup_dep"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["sys_user"] = "Sys User";
	$fieldToolTipsq_info_cxc["Spanish"]["sys_user"] = "";
	$placeHoldersq_info_cxc["Spanish"]["sys_user"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["sys_fecha"] = "Sys Fecha";
	$fieldToolTipsq_info_cxc["Spanish"]["sys_fecha"] = "";
	$placeHoldersq_info_cxc["Spanish"]["sys_fecha"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cxc_fondopenvol"] = "Cxc Fondopenvol";
	$fieldToolTipsq_info_cxc["Spanish"]["cxc_fondopenvol"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cxc_fondopenvol"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cxc_pagoafc"] = "Cxc Pagoafc";
	$fieldToolTipsq_info_cxc["Spanish"]["cxc_pagoafc"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cxc_pagoafc"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cont_fechai"] = "Cont Fechai";
	$fieldToolTipsq_info_cxc["Spanish"]["cont_fechai"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cont_fechai"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cont_fechaf"] = "Cont Fechaf";
	$fieldToolTipsq_info_cxc["Spanish"]["cont_fechaf"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cont_fechaf"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cont_cdp"] = "Cont Cdp";
	$fieldToolTipsq_info_cxc["Spanish"]["cont_cdp"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cont_cdp"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cont_rp"] = "Cont Rp";
	$fieldToolTipsq_info_cxc["Spanish"]["cont_rp"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cont_rp"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cont_rubro"] = "Cont Rubro";
	$fieldToolTipsq_info_cxc["Spanish"]["cont_rubro"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cont_rubro"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cont_uej"] = "Cont Uej";
	$fieldToolTipsq_info_cxc["Spanish"]["cont_uej"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cont_uej"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cont_uso"] = "Cont Uso";
	$fieldToolTipsq_info_cxc["Spanish"]["cont_uso"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cont_uso"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cont_valorcontrato"] = "Cont Valorcontrato";
	$fieldToolTipsq_info_cxc["Spanish"]["cont_valorcontrato"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cont_valorcontrato"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cont_pagomensual"] = "Cont Pagomensual";
	$fieldToolTipsq_info_cxc["Spanish"]["cont_pagomensual"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cont_pagomensual"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cont_banco"] = "Cont Banco";
	$fieldToolTipsq_info_cxc["Spanish"]["cont_banco"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cont_banco"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["nom_banco"] = "Nom Banco";
	$fieldToolTipsq_info_cxc["Spanish"]["nom_banco"] = "";
	$placeHoldersq_info_cxc["Spanish"]["nom_banco"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cont_cuentatipo"] = "Cont Cuentatipo";
	$fieldToolTipsq_info_cxc["Spanish"]["cont_cuentatipo"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cont_cuentatipo"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["des_cuenta"] = "Des Cuenta";
	$fieldToolTipsq_info_cxc["Spanish"]["des_cuenta"] = "";
	$placeHoldersq_info_cxc["Spanish"]["des_cuenta"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cont_cuentanumero"] = "Cont Cuentanumero";
	$fieldToolTipsq_info_cxc["Spanish"]["cont_cuentanumero"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cont_cuentanumero"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["cont_factura"] = "Cont Factura";
	$fieldToolTipsq_info_cxc["Spanish"]["cont_factura"] = "";
	$placeHoldersq_info_cxc["Spanish"]["cont_factura"] = "";
	$fieldLabelsq_info_cxc["Spanish"]["snfactura"] = "Snfactura";
	$fieldToolTipsq_info_cxc["Spanish"]["snfactura"] = "";
	$placeHoldersq_info_cxc["Spanish"]["snfactura"] = "";
	if (count($fieldToolTipsq_info_cxc["Spanish"]))
		$tdataq_info_cxc[".isUseToolTips"] = true;
}


	$tdataq_info_cxc[".NCSearch"] = true;



$tdataq_info_cxc[".shortTableName"] = "q_info_cxc";
$tdataq_info_cxc[".nSecOptions"] = 0;

$tdataq_info_cxc[".mainTableOwnerID"] = "";
$tdataq_info_cxc[".entityType"] = 0;
$tdataq_info_cxc[".connId"] = "dbct_at_localhost";


$tdataq_info_cxc[".strOriginalTableName"] = "q_info_cxc";

	



$tdataq_info_cxc[".showAddInPopup"] = false;

$tdataq_info_cxc[".showEditInPopup"] = false;

$tdataq_info_cxc[".showViewInPopup"] = false;

$tdataq_info_cxc[".listAjax"] = false;
//	temporary
//$tdataq_info_cxc[".listAjax"] = false;

	$tdataq_info_cxc[".audit"] = false;

	$tdataq_info_cxc[".locking"] = false;


$pages = $tdataq_info_cxc[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_info_cxc[".edit"] = true;
	$tdataq_info_cxc[".afterEditAction"] = 1;
	$tdataq_info_cxc[".closePopupAfterEdit"] = 1;
	$tdataq_info_cxc[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_info_cxc[".add"] = true;
$tdataq_info_cxc[".afterAddAction"] = 1;
$tdataq_info_cxc[".closePopupAfterAdd"] = 1;
$tdataq_info_cxc[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_info_cxc[".list"] = true;
}



$tdataq_info_cxc[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_info_cxc[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_info_cxc[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_info_cxc[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_info_cxc[".printFriendly"] = true;
}



$tdataq_info_cxc[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_info_cxc[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_info_cxc[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_info_cxc[".isUseAjaxSuggest"] = true;



												

$tdataq_info_cxc[".ajaxCodeSnippetAdded"] = false;

$tdataq_info_cxc[".buttonsAdded"] = false;

$tdataq_info_cxc[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_info_cxc[".isUseTimeForSearch"] = false;


$tdataq_info_cxc[".badgeColor"] = "5F9EA0";


$tdataq_info_cxc[".allSearchFields"] = array();
$tdataq_info_cxc[".filterFields"] = array();
$tdataq_info_cxc[".requiredSearchFields"] = array();

$tdataq_info_cxc[".googleLikeFields"] = array();
$tdataq_info_cxc[".googleLikeFields"][] = "cont_banco";
$tdataq_info_cxc[".googleLikeFields"][] = "cont_cdp";
$tdataq_info_cxc[".googleLikeFields"][] = "cont_cuentanumero";
$tdataq_info_cxc[".googleLikeFields"][] = "cont_cuentatipo";
$tdataq_info_cxc[".googleLikeFields"][] = "cont_factura";
$tdataq_info_cxc[".googleLikeFields"][] = "cont_fechaf";
$tdataq_info_cxc[".googleLikeFields"][] = "cont_fechai";
$tdataq_info_cxc[".googleLikeFields"][] = "cont_pagomensual";
$tdataq_info_cxc[".googleLikeFields"][] = "cont_rp";
$tdataq_info_cxc[".googleLikeFields"][] = "cont_rubro";
$tdataq_info_cxc[".googleLikeFields"][] = "cont_uej";
$tdataq_info_cxc[".googleLikeFields"][] = "cont_uso";
$tdataq_info_cxc[".googleLikeFields"][] = "cont_valorcontrato";
$tdataq_info_cxc[".googleLikeFields"][] = "cxc_anio";
$tdataq_info_cxc[".googleLikeFields"][] = "cxc_cont";
$tdataq_info_cxc[".googleLikeFields"][] = "cxc_fechaelab";
$tdataq_info_cxc[".googleLikeFields"][] = "cxc_fondopenvol";
$tdataq_info_cxc[".googleLikeFields"][] = "cxc_id";
$tdataq_info_cxc[".googleLikeFields"][] = "cxc_numdoc";
$tdataq_info_cxc[".googleLikeFields"][] = "cxc_pagoafc";
$tdataq_info_cxc[".googleLikeFields"][] = "cxc_periodof";
$tdataq_info_cxc[".googleLikeFields"][] = "cxc_periodoi";
$tdataq_info_cxc[".googleLikeFields"][] = "cxc_planilla";
$tdataq_info_cxc[".googleLikeFields"][] = "cxc_planillafecha";
$tdataq_info_cxc[".googleLikeFields"][] = "cxc_planillavalor";
$tdataq_info_cxc[".googleLikeFields"][] = "cxc_razonsocial";
$tdataq_info_cxc[".googleLikeFields"][] = "cxc_tipocontrato";
$tdataq_info_cxc[".googleLikeFields"][] = "cxc_tipodoc";
$tdataq_info_cxc[".googleLikeFields"][] = "cxc_valor";
$tdataq_info_cxc[".googleLikeFields"][] = "des_cuenta";
$tdataq_info_cxc[".googleLikeFields"][] = "id_consecutivo";
$tdataq_info_cxc[".googleLikeFields"][] = "id_cont";
$tdataq_info_cxc[".googleLikeFields"][] = "inf_hash_fk";
$tdataq_info_cxc[".googleLikeFields"][] = "inf_id_fk";
$tdataq_info_cxc[".googleLikeFields"][] = "nom_banco";
$tdataq_info_cxc[".googleLikeFields"][] = "NumDoc";
$tdataq_info_cxc[".googleLikeFields"][] = "snfactura";
$tdataq_info_cxc[".googleLikeFields"][] = "sup_cargo";
$tdataq_info_cxc[".googleLikeFields"][] = "sup_dep";
$tdataq_info_cxc[".googleLikeFields"][] = "sup_name";
$tdataq_info_cxc[".googleLikeFields"][] = "sys_fecha";
$tdataq_info_cxc[".googleLikeFields"][] = "sys_user";



$tdataq_info_cxc[".tableType"] = "list";

$tdataq_info_cxc[".printerPageOrientation"] = 0;
$tdataq_info_cxc[".nPrinterPageScale"] = 100;

$tdataq_info_cxc[".nPrinterSplitRecords"] = 40;

$tdataq_info_cxc[".geocodingEnabled"] = false;










$tdataq_info_cxc[".pageSize"] = 20;

$tdataq_info_cxc[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_info_cxc[".strOrderBy"] = $tstrOrderBy;

$tdataq_info_cxc[".orderindexes"] = array();


$tdataq_info_cxc[".sqlHead"] = "SELECT cont_banco,  	cont_cdp,  	cont_cuentanumero,  	cont_cuentatipo,  	cont_factura,  	cont_fechaf,  	cont_fechai,  	cont_pagomensual,  	cont_rp,  	cont_rubro,  	cont_uej,  	cont_uso,  	cont_valorcontrato,  	cxc_anio,  	cxc_cont,  	cxc_fechaelab,  	cxc_fondopenvol,  	cxc_id,  	cxc_numdoc,  	cxc_pagoafc,  	cxc_periodof,  	cxc_periodoi,  	cxc_planilla,  	cxc_planillafecha,  	cxc_planillavalor,  	cxc_razonsocial,  	cxc_tipocontrato,  	cxc_tipodoc,  	cxc_valor,  	des_cuenta,  	id_consecutivo,  	id_cont,  	inf_hash_fk,  	inf_id_fk,  	nom_banco,  	NumDoc,  	snfactura,  	sup_cargo,  	sup_dep,  	sup_name,  	sys_fecha,  	sys_user";
$tdataq_info_cxc[".sqlFrom"] = "FROM q_info_cxc";
$tdataq_info_cxc[".sqlWhereExpr"] = "";
$tdataq_info_cxc[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_info_cxc[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_info_cxc[".arrGroupsPerPage"] = $arrGPP;

$tdataq_info_cxc[".highlightSearchResults"] = true;

$tableKeysq_info_cxc = array();
$tdataq_info_cxc[".Keys"] = $tableKeysq_info_cxc;


$tdataq_info_cxc[".hideMobileList"] = array();




//	cont_banco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cont_banco";
	$fdata["GoodName"] = "cont_banco";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cont_banco");
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


	$tdataq_info_cxc["cont_banco"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cont_banco";
//	cont_cdp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cont_cdp";
	$fdata["GoodName"] = "cont_cdp";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cont_cdp");
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


	$tdataq_info_cxc["cont_cdp"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cont_cdp";
//	cont_cuentanumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cont_cuentanumero";
	$fdata["GoodName"] = "cont_cuentanumero";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cont_cuentanumero");
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


	$tdataq_info_cxc["cont_cuentanumero"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cont_cuentanumero";
//	cont_cuentatipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cont_cuentatipo";
	$fdata["GoodName"] = "cont_cuentatipo";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cont_cuentatipo");
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


	$tdataq_info_cxc["cont_cuentatipo"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cont_cuentatipo";
//	cont_factura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cont_factura";
	$fdata["GoodName"] = "cont_factura";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cont_factura");
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


	$tdataq_info_cxc["cont_factura"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cont_factura";
//	cont_fechaf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cont_fechaf";
	$fdata["GoodName"] = "cont_fechaf";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cont_fechaf");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cont_fechaf";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechaf";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdataq_info_cxc["cont_fechaf"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cont_fechaf";
//	cont_fechai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cont_fechai";
	$fdata["GoodName"] = "cont_fechai";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cont_fechai");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cont_fechai";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechai";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdataq_info_cxc["cont_fechai"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cont_fechai";
//	cont_pagomensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cont_pagomensual";
	$fdata["GoodName"] = "cont_pagomensual";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cont_pagomensual");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cont_pagomensual";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_pagomensual";

	
	
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


	$tdataq_info_cxc["cont_pagomensual"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cont_pagomensual";
//	cont_rp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cont_rp";
	$fdata["GoodName"] = "cont_rp";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cont_rp");
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


	$tdataq_info_cxc["cont_rp"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cont_rp";
//	cont_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cont_rubro";
	$fdata["GoodName"] = "cont_rubro";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cont_rubro");
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


	$tdataq_info_cxc["cont_rubro"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cont_rubro";
//	cont_uej
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cont_uej";
	$fdata["GoodName"] = "cont_uej";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cont_uej");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

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


	$tdataq_info_cxc["cont_uej"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cont_uej";
//	cont_uso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cont_uso";
	$fdata["GoodName"] = "cont_uso";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cont_uso");
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


	$tdataq_info_cxc["cont_uso"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cont_uso";
//	cont_valorcontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cont_valorcontrato";
	$fdata["GoodName"] = "cont_valorcontrato";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cont_valorcontrato");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cont_valorcontrato";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valorcontrato";

	
	
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


	$tdataq_info_cxc["cont_valorcontrato"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cont_valorcontrato";
//	cxc_anio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cxc_anio";
	$fdata["GoodName"] = "cxc_anio";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cxc_anio");
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


	$tdataq_info_cxc["cxc_anio"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cxc_anio";
//	cxc_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cxc_cont";
	$fdata["GoodName"] = "cxc_cont";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cxc_cont");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

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


	$tdataq_info_cxc["cxc_cont"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cxc_cont";
//	cxc_fechaelab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cxc_fechaelab";
	$fdata["GoodName"] = "cxc_fechaelab";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cxc_fechaelab");
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataq_info_cxc["cxc_fechaelab"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cxc_fechaelab";
//	cxc_fondopenvol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cxc_fondopenvol";
	$fdata["GoodName"] = "cxc_fondopenvol";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cxc_fondopenvol");
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


	$tdataq_info_cxc["cxc_fondopenvol"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cxc_fondopenvol";
//	cxc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "cxc_id";
	$fdata["GoodName"] = "cxc_id";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cxc_id");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdataq_info_cxc["cxc_id"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cxc_id";
//	cxc_numdoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "cxc_numdoc";
	$fdata["GoodName"] = "cxc_numdoc";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cxc_numdoc");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=25";

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


	$tdataq_info_cxc["cxc_numdoc"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cxc_numdoc";
//	cxc_pagoafc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cxc_pagoafc";
	$fdata["GoodName"] = "cxc_pagoafc";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cxc_pagoafc");
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


	$tdataq_info_cxc["cxc_pagoafc"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cxc_pagoafc";
//	cxc_periodof
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cxc_periodof";
	$fdata["GoodName"] = "cxc_periodof";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cxc_periodof");
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataq_info_cxc["cxc_periodof"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cxc_periodof";
//	cxc_periodoi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "cxc_periodoi";
	$fdata["GoodName"] = "cxc_periodoi";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cxc_periodoi");
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataq_info_cxc["cxc_periodoi"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cxc_periodoi";
//	cxc_planilla
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "cxc_planilla";
	$fdata["GoodName"] = "cxc_planilla";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cxc_planilla");
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


	$tdataq_info_cxc["cxc_planilla"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cxc_planilla";
//	cxc_planillafecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "cxc_planillafecha";
	$fdata["GoodName"] = "cxc_planillafecha";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cxc_planillafecha");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdataq_info_cxc["cxc_planillafecha"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cxc_planillafecha";
//	cxc_planillavalor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "cxc_planillavalor";
	$fdata["GoodName"] = "cxc_planillavalor";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cxc_planillavalor");
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


	$tdataq_info_cxc["cxc_planillavalor"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cxc_planillavalor";
//	cxc_razonsocial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "cxc_razonsocial";
	$fdata["GoodName"] = "cxc_razonsocial";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cxc_razonsocial");
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


	$tdataq_info_cxc["cxc_razonsocial"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cxc_razonsocial";
//	cxc_tipocontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cxc_tipocontrato";
	$fdata["GoodName"] = "cxc_tipocontrato";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cxc_tipocontrato");
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


	$tdataq_info_cxc["cxc_tipocontrato"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cxc_tipocontrato";
//	cxc_tipodoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "cxc_tipodoc";
	$fdata["GoodName"] = "cxc_tipodoc";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cxc_tipodoc");
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


	$tdataq_info_cxc["cxc_tipodoc"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cxc_tipodoc";
//	cxc_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "cxc_valor";
	$fdata["GoodName"] = "cxc_valor";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","cxc_valor");
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


	$tdataq_info_cxc["cxc_valor"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "cxc_valor";
//	des_cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "des_cuenta";
	$fdata["GoodName"] = "des_cuenta";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","des_cuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "des_cuenta";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "des_cuenta";

	
	
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


	$tdataq_info_cxc["des_cuenta"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "des_cuenta";
//	id_consecutivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "id_consecutivo";
	$fdata["GoodName"] = "id_consecutivo";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","id_consecutivo");
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


	$tdataq_info_cxc["id_consecutivo"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "id_consecutivo";
//	id_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "id_cont";
	$fdata["GoodName"] = "id_cont";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","id_cont");
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


	$tdataq_info_cxc["id_cont"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "id_cont";
//	inf_hash_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "inf_hash_fk";
	$fdata["GoodName"] = "inf_hash_fk";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","inf_hash_fk");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

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


	$tdataq_info_cxc["inf_hash_fk"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "inf_hash_fk";
//	inf_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "inf_id_fk";
	$fdata["GoodName"] = "inf_id_fk";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","inf_id_fk");
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


	$tdataq_info_cxc["inf_id_fk"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "inf_id_fk";
//	nom_banco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "nom_banco";
	$fdata["GoodName"] = "nom_banco";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","nom_banco");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom_banco";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_banco";

	
	
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


	$tdataq_info_cxc["nom_banco"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "nom_banco";
//	NumDoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "NumDoc";
	$fdata["GoodName"] = "NumDoc";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","NumDoc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NumDoc";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NumDoc";

	
	
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
			$edata["EditParams"].= " maxlength=13";

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


	$tdataq_info_cxc["NumDoc"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "NumDoc";
//	snfactura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "snfactura";
	$fdata["GoodName"] = "snfactura";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","snfactura");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "snfactura";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "snfactura";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdataq_info_cxc["snfactura"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "snfactura";
//	sup_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "sup_cargo";
	$fdata["GoodName"] = "sup_cargo";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","sup_cargo");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_info_cxc["sup_cargo"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "sup_cargo";
//	sup_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "sup_dep";
	$fdata["GoodName"] = "sup_dep";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","sup_dep");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_info_cxc["sup_dep"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "sup_dep";
//	sup_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "sup_name";
	$fdata["GoodName"] = "sup_name";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","sup_name");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_info_cxc["sup_name"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "sup_name";
//	sys_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "sys_fecha";
	$fdata["GoodName"] = "sys_fecha";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","sys_fecha");
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdataq_info_cxc["sys_fecha"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "sys_fecha";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "q_info_cxc";
	$fdata["Label"] = GetFieldLabel("q_info_cxc","sys_user");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

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


	$tdataq_info_cxc["sys_user"] = $fdata;
		$tdataq_info_cxc[".searchableFields"][] = "sys_user";


$tables_data["q_info_cxc"]=&$tdataq_info_cxc;
$field_labels["q_info_cxc"] = &$fieldLabelsq_info_cxc;
$fieldToolTips["q_info_cxc"] = &$fieldToolTipsq_info_cxc;
$placeHolders["q_info_cxc"] = &$placeHoldersq_info_cxc;
$page_titles["q_info_cxc"] = &$pageTitlesq_info_cxc;


changeTextControlsToDate( "q_info_cxc" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_info_cxc"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_info_cxc"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_info_cxc()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cont_banco,  	cont_cdp,  	cont_cuentanumero,  	cont_cuentatipo,  	cont_factura,  	cont_fechaf,  	cont_fechai,  	cont_pagomensual,  	cont_rp,  	cont_rubro,  	cont_uej,  	cont_uso,  	cont_valorcontrato,  	cxc_anio,  	cxc_cont,  	cxc_fechaelab,  	cxc_fondopenvol,  	cxc_id,  	cxc_numdoc,  	cxc_pagoafc,  	cxc_periodof,  	cxc_periodoi,  	cxc_planilla,  	cxc_planillafecha,  	cxc_planillavalor,  	cxc_razonsocial,  	cxc_tipocontrato,  	cxc_tipodoc,  	cxc_valor,  	des_cuenta,  	id_consecutivo,  	id_cont,  	inf_hash_fk,  	inf_id_fk,  	nom_banco,  	NumDoc,  	snfactura,  	sup_cargo,  	sup_dep,  	sup_name,  	sys_fecha,  	sys_user";
$proto0["m_strFrom"] = "FROM q_info_cxc";
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
	"m_strName" => "cont_banco",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto6["m_sql"] = "cont_banco";
$proto6["m_srcTableName"] = "q_info_cxc";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_cdp",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto8["m_sql"] = "cont_cdp";
$proto8["m_srcTableName"] = "q_info_cxc";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_cuentanumero",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto10["m_sql"] = "cont_cuentanumero";
$proto10["m_srcTableName"] = "q_info_cxc";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_cuentatipo",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto12["m_sql"] = "cont_cuentatipo";
$proto12["m_srcTableName"] = "q_info_cxc";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_factura",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto14["m_sql"] = "cont_factura";
$proto14["m_srcTableName"] = "q_info_cxc";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechaf",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto16["m_sql"] = "cont_fechaf";
$proto16["m_srcTableName"] = "q_info_cxc";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechai",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto18["m_sql"] = "cont_fechai";
$proto18["m_srcTableName"] = "q_info_cxc";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_pagomensual",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto20["m_sql"] = "cont_pagomensual";
$proto20["m_srcTableName"] = "q_info_cxc";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_rp",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto22["m_sql"] = "cont_rp";
$proto22["m_srcTableName"] = "q_info_cxc";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_rubro",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto24["m_sql"] = "cont_rubro";
$proto24["m_srcTableName"] = "q_info_cxc";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_uej",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto26["m_sql"] = "cont_uej";
$proto26["m_srcTableName"] = "q_info_cxc";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_uso",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto28["m_sql"] = "cont_uso";
$proto28["m_srcTableName"] = "q_info_cxc";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valorcontrato",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto30["m_sql"] = "cont_valorcontrato";
$proto30["m_srcTableName"] = "q_info_cxc";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_anio",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto32["m_sql"] = "cxc_anio";
$proto32["m_srcTableName"] = "q_info_cxc";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_cont",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto34["m_sql"] = "cxc_cont";
$proto34["m_srcTableName"] = "q_info_cxc";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_fechaelab",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto36["m_sql"] = "cxc_fechaelab";
$proto36["m_srcTableName"] = "q_info_cxc";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_fondopenvol",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto38["m_sql"] = "cxc_fondopenvol";
$proto38["m_srcTableName"] = "q_info_cxc";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_id",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto40["m_sql"] = "cxc_id";
$proto40["m_srcTableName"] = "q_info_cxc";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_numdoc",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto42["m_sql"] = "cxc_numdoc";
$proto42["m_srcTableName"] = "q_info_cxc";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_pagoafc",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto44["m_sql"] = "cxc_pagoafc";
$proto44["m_srcTableName"] = "q_info_cxc";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_periodof",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto46["m_sql"] = "cxc_periodof";
$proto46["m_srcTableName"] = "q_info_cxc";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_periodoi",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto48["m_sql"] = "cxc_periodoi";
$proto48["m_srcTableName"] = "q_info_cxc";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_planilla",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto50["m_sql"] = "cxc_planilla";
$proto50["m_srcTableName"] = "q_info_cxc";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_planillafecha",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto52["m_sql"] = "cxc_planillafecha";
$proto52["m_srcTableName"] = "q_info_cxc";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_planillavalor",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto54["m_sql"] = "cxc_planillavalor";
$proto54["m_srcTableName"] = "q_info_cxc";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_razonsocial",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto56["m_sql"] = "cxc_razonsocial";
$proto56["m_srcTableName"] = "q_info_cxc";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_tipocontrato",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto58["m_sql"] = "cxc_tipocontrato";
$proto58["m_srcTableName"] = "q_info_cxc";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_tipodoc",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto60["m_sql"] = "cxc_tipodoc";
$proto60["m_srcTableName"] = "q_info_cxc";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_valor",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto62["m_sql"] = "cxc_valor";
$proto62["m_srcTableName"] = "q_info_cxc";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "des_cuenta",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto64["m_sql"] = "des_cuenta";
$proto64["m_srcTableName"] = "q_info_cxc";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "id_consecutivo",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto66["m_sql"] = "id_consecutivo";
$proto66["m_srcTableName"] = "q_info_cxc";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto68["m_sql"] = "id_cont";
$proto68["m_srcTableName"] = "q_info_cxc";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_hash_fk",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto70["m_sql"] = "inf_hash_fk";
$proto70["m_srcTableName"] = "q_info_cxc";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_id_fk",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto72["m_sql"] = "inf_id_fk";
$proto72["m_srcTableName"] = "q_info_cxc";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_banco",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto74["m_sql"] = "nom_banco";
$proto74["m_srcTableName"] = "q_info_cxc";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "NumDoc",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto76["m_sql"] = "NumDoc";
$proto76["m_srcTableName"] = "q_info_cxc";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "snfactura",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto78["m_sql"] = "snfactura";
$proto78["m_srcTableName"] = "q_info_cxc";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_cargo",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto80["m_sql"] = "sup_cargo";
$proto80["m_srcTableName"] = "q_info_cxc";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_dep",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto82["m_sql"] = "sup_dep";
$proto82["m_srcTableName"] = "q_info_cxc";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_name",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto84["m_sql"] = "sup_name";
$proto84["m_srcTableName"] = "q_info_cxc";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_fecha",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto86["m_sql"] = "sys_fecha";
$proto86["m_srcTableName"] = "q_info_cxc";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "q_info_cxc",
	"m_srcTableName" => "q_info_cxc"
));

$proto88["m_sql"] = "sys_user";
$proto88["m_srcTableName"] = "q_info_cxc";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto90=array();
$proto90["m_link"] = "SQLL_MAIN";
			$proto91=array();
$proto91["m_strName"] = "q_info_cxc";
$proto91["m_srcTableName"] = "q_info_cxc";
$proto91["m_columns"] = array();
$proto91["m_columns"][] = "cont_banco";
$proto91["m_columns"][] = "cont_cdp";
$proto91["m_columns"][] = "cont_cuentanumero";
$proto91["m_columns"][] = "cont_cuentatipo";
$proto91["m_columns"][] = "cont_factura";
$proto91["m_columns"][] = "cont_fechaf";
$proto91["m_columns"][] = "cont_fechai";
$proto91["m_columns"][] = "cont_pagomensual";
$proto91["m_columns"][] = "cont_rp";
$proto91["m_columns"][] = "cont_rubro";
$proto91["m_columns"][] = "cont_uej";
$proto91["m_columns"][] = "cont_uso";
$proto91["m_columns"][] = "cont_valorcontrato";
$proto91["m_columns"][] = "cxc_anio";
$proto91["m_columns"][] = "cxc_cont";
$proto91["m_columns"][] = "cxc_fechaelab";
$proto91["m_columns"][] = "cxc_fondopenvol";
$proto91["m_columns"][] = "cxc_id";
$proto91["m_columns"][] = "cxc_numdoc";
$proto91["m_columns"][] = "cxc_pagoafc";
$proto91["m_columns"][] = "cxc_periodof";
$proto91["m_columns"][] = "cxc_periodoi";
$proto91["m_columns"][] = "cxc_planilla";
$proto91["m_columns"][] = "cxc_planillafecha";
$proto91["m_columns"][] = "cxc_planillavalor";
$proto91["m_columns"][] = "cxc_razonsocial";
$proto91["m_columns"][] = "cxc_tipocontrato";
$proto91["m_columns"][] = "cxc_tipodoc";
$proto91["m_columns"][] = "cxc_valor";
$proto91["m_columns"][] = "des_cuenta";
$proto91["m_columns"][] = "id_consecutivo";
$proto91["m_columns"][] = "id_cont";
$proto91["m_columns"][] = "inf_hash_fk";
$proto91["m_columns"][] = "inf_id_fk";
$proto91["m_columns"][] = "nom_banco";
$proto91["m_columns"][] = "NumDoc";
$proto91["m_columns"][] = "snfactura";
$proto91["m_columns"][] = "sup_cargo";
$proto91["m_columns"][] = "sup_dep";
$proto91["m_columns"][] = "sup_name";
$proto91["m_columns"][] = "sys_fecha";
$proto91["m_columns"][] = "sys_user";
$obj = new SQLTable($proto91);

$proto90["m_table"] = $obj;
$proto90["m_sql"] = "q_info_cxc";
$proto90["m_alias"] = "";
$proto90["m_srcTableName"] = "q_info_cxc";
$proto92=array();
$proto92["m_sql"] = "";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
$proto92["m_strCase"] = "";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

$proto90["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto90);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_info_cxc";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_info_cxc = createSqlQuery_q_info_cxc();


	
								;

																																										

$tdataq_info_cxc[".sqlquery"] = $queryData_q_info_cxc;



$tdataq_info_cxc[".hasEvents"] = false;

?>