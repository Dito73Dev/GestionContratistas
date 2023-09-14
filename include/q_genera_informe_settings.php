<?php
$tdataq_genera_informe = array();
$tdataq_genera_informe[".searchableFields"] = array();
$tdataq_genera_informe[".ShortName"] = "q_genera_informe";
$tdataq_genera_informe[".OwnerID"] = "";
$tdataq_genera_informe[".OriginalTable"] = "q_genera_informe";


$tdataq_genera_informe[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataq_genera_informe[".originalPagesByType"] = $tdataq_genera_informe[".pagesByType"];
$tdataq_genera_informe[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataq_genera_informe[".originalPages"] = $tdataq_genera_informe[".pages"];
$tdataq_genera_informe[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataq_genera_informe[".originalDefaultPages"] = $tdataq_genera_informe[".defaultPages"];

//	field labels
$fieldLabelsq_genera_informe = array();
$fieldToolTipsq_genera_informe = array();
$pageTitlesq_genera_informe = array();
$placeHoldersq_genera_informe = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_genera_informe["Spanish"] = array();
	$fieldToolTipsq_genera_informe["Spanish"] = array();
	$placeHoldersq_genera_informe["Spanish"] = array();
	$pageTitlesq_genera_informe["Spanish"] = array();
	$fieldLabelsq_genera_informe["Spanish"]["inf_id"] = "Inf Id";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_id"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_id"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_hash"] = "Inf Hash";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_hash"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_hash"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_consecutivo"] = "Inf Consecutivo";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_consecutivo"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_consecutivo"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_fechapresenta"] = "Inf Fechapresenta";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_fechapresenta"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_fechapresenta"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_periodicidad"] = "Inf Periodicidad";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_periodicidad"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_periodicidad"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["periodo_name"] = "Periodo Name";
	$fieldToolTipsq_genera_informe["Spanish"]["periodo_name"] = "";
	$placeHoldersq_genera_informe["Spanish"]["periodo_name"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_fecharep_i"] = "Inf Fecharep I";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_fecharep_i"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_fecharep_i"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_fecharep_f"] = "Inf Fecharep F";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_fecharep_f"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_fecharep_f"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_numerocontrato"] = "Inf Numerocontrato";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_numerocontrato"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_numerocontrato"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_anio"] = "Inf Anio";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_anio"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_anio"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_doccontratista"] = "Inf Doccontratista";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_doccontratista"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_doccontratista"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_nombrecontratista"] = "Inf Nombrecontratista";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_nombrecontratista"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_nombrecontratista"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_valorcontrato"] = "Inf Valorcontrato";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_valorcontrato"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_valorcontrato"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_cdp"] = "Inf Cdp";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_cdp"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_cdp"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_rp"] = "Inf Rp";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_rp"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_rp"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_rubrocode"] = "Inf Rubrocode";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_rubrocode"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_rubrocode"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_rubroname"] = "Inf Rubroname";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_rubroname"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_rubroname"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_objeto"] = "Inf Objeto";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_objeto"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_objeto"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_fechasuscripcion"] = "Inf Fechasuscripcion";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_fechasuscripcion"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_fechasuscripcion"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_fechacont_i"] = "Inf Fechacont I";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_fechacont_i"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_fechacont_i"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_fechacont_f"] = "Inf Fechacont F";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_fechacont_f"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_fechacont_f"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_plazo"] = "Inf Plazo";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_plazo"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_plazo"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_vigencia"] = "Inf Vigencia";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_vigencia"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_vigencia"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_modificacionesplazo"] = "Inf Modificacionesplazo";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_modificacionesplazo"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_modificacionesplazo"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_intersup"] = "Inf Intersup";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_intersup"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_intersup"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_nombre"] = "Inf Nombre";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_nombre"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_nombre"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_cargo"] = "Inf Cargo";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_cargo"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_cargo"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_dependencia"] = "Inf Dependencia";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_dependencia"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_dependencia"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_avgejecucion"] = "Inf Avgejecucion";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_avgejecucion"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_avgejecucion"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_actividades"] = "Inf Actividades";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_actividades"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_actividades"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_declarainconf"] = "Inf Declarainconf";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_declarainconf"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_declarainconf"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_declarainconf_obs"] = "Inf Declarainconf Obs";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_declarainconf_obs"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_declarainconf_obs"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_incumplimiento"] = "Inf Incumplimiento";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_incumplimiento"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_incumplimiento"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_incumplimiento_obs"] = "Inf Incumplimiento Obs";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_incumplimiento_obs"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_incumplimiento_obs"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["sign_verificacert_ip"] = "Sign Verificacert Ip";
	$fieldToolTipsq_genera_informe["Spanish"]["sign_verificacert_ip"] = "";
	$placeHoldersq_genera_informe["Spanish"]["sign_verificacert_ip"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["sign_verificacert_user"] = "Sign Verificacert User";
	$fieldToolTipsq_genera_informe["Spanish"]["sign_verificacert_user"] = "";
	$placeHoldersq_genera_informe["Spanish"]["sign_verificacert_user"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["sign_verificacert_date"] = "Sign Verificacert Date";
	$fieldToolTipsq_genera_informe["Spanish"]["sign_verificacert_date"] = "";
	$placeHoldersq_genera_informe["Spanish"]["sign_verificacert_date"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_estado"] = "Inf Estado";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_estado"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_estado"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["cert_modalidad"] = "Cert Modalidad";
	$fieldToolTipsq_genera_informe["Spanish"]["cert_modalidad"] = "";
	$placeHoldersq_genera_informe["Spanish"]["cert_modalidad"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["cert_mes"] = "Cert Mes";
	$fieldToolTipsq_genera_informe["Spanish"]["cert_mes"] = "";
	$placeHoldersq_genera_informe["Spanish"]["cert_mes"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["inf_usopresupuestal"] = "Inf Usopresupuestal";
	$fieldToolTipsq_genera_informe["Spanish"]["inf_usopresupuestal"] = "";
	$placeHoldersq_genera_informe["Spanish"]["inf_usopresupuestal"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["id_cont_fk"] = "Id Cont Fk";
	$fieldToolTipsq_genera_informe["Spanish"]["id_cont_fk"] = "";
	$placeHoldersq_genera_informe["Spanish"]["id_cont_fk"] = "";
	$fieldLabelsq_genera_informe["Spanish"]["mail_tercero"] = "Mail Tercero";
	$fieldToolTipsq_genera_informe["Spanish"]["mail_tercero"] = "";
	$placeHoldersq_genera_informe["Spanish"]["mail_tercero"] = "";
	if (count($fieldToolTipsq_genera_informe["Spanish"]))
		$tdataq_genera_informe[".isUseToolTips"] = true;
}


	$tdataq_genera_informe[".NCSearch"] = true;



$tdataq_genera_informe[".shortTableName"] = "q_genera_informe";
$tdataq_genera_informe[".nSecOptions"] = 0;

$tdataq_genera_informe[".mainTableOwnerID"] = "";
$tdataq_genera_informe[".entityType"] = 0;
$tdataq_genera_informe[".connId"] = "dbct_at_localhost";


$tdataq_genera_informe[".strOriginalTableName"] = "q_genera_informe";

	



$tdataq_genera_informe[".showAddInPopup"] = false;

$tdataq_genera_informe[".showEditInPopup"] = false;

$tdataq_genera_informe[".showViewInPopup"] = false;

$tdataq_genera_informe[".listAjax"] = false;
//	temporary
//$tdataq_genera_informe[".listAjax"] = false;

	$tdataq_genera_informe[".audit"] = false;

	$tdataq_genera_informe[".locking"] = false;


$pages = $tdataq_genera_informe[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_genera_informe[".edit"] = true;
	$tdataq_genera_informe[".afterEditAction"] = 1;
	$tdataq_genera_informe[".closePopupAfterEdit"] = 1;
	$tdataq_genera_informe[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_genera_informe[".add"] = true;
$tdataq_genera_informe[".afterAddAction"] = 1;
$tdataq_genera_informe[".closePopupAfterAdd"] = 1;
$tdataq_genera_informe[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_genera_informe[".list"] = true;
}



$tdataq_genera_informe[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_genera_informe[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_genera_informe[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_genera_informe[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_genera_informe[".printFriendly"] = true;
}



$tdataq_genera_informe[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_genera_informe[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_genera_informe[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_genera_informe[".isUseAjaxSuggest"] = true;



												

$tdataq_genera_informe[".ajaxCodeSnippetAdded"] = false;

$tdataq_genera_informe[".buttonsAdded"] = false;

$tdataq_genera_informe[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_genera_informe[".isUseTimeForSearch"] = false;


$tdataq_genera_informe[".badgeColor"] = "9ACD32";


$tdataq_genera_informe[".allSearchFields"] = array();
$tdataq_genera_informe[".filterFields"] = array();
$tdataq_genera_informe[".requiredSearchFields"] = array();

$tdataq_genera_informe[".googleLikeFields"] = array();
$tdataq_genera_informe[".googleLikeFields"][] = "inf_id";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_hash";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_consecutivo";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_fechapresenta";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_periodicidad";
$tdataq_genera_informe[".googleLikeFields"][] = "periodo_name";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_fecharep_i";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_fecharep_f";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_numerocontrato";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_anio";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_doccontratista";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_nombrecontratista";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_valorcontrato";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_cdp";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_rp";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_rubrocode";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_rubroname";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_objeto";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_fechasuscripcion";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_fechacont_i";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_fechacont_f";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_plazo";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_vigencia";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_modificacionesplazo";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_intersup";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_nombre";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_cargo";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_dependencia";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_avgejecucion";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_actividades";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_declarainconf";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_declarainconf_obs";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_incumplimiento";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_incumplimiento_obs";
$tdataq_genera_informe[".googleLikeFields"][] = "sign_verificacert_ip";
$tdataq_genera_informe[".googleLikeFields"][] = "sign_verificacert_user";
$tdataq_genera_informe[".googleLikeFields"][] = "sign_verificacert_date";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_estado";
$tdataq_genera_informe[".googleLikeFields"][] = "cert_modalidad";
$tdataq_genera_informe[".googleLikeFields"][] = "cert_mes";
$tdataq_genera_informe[".googleLikeFields"][] = "inf_usopresupuestal";
$tdataq_genera_informe[".googleLikeFields"][] = "id_cont_fk";
$tdataq_genera_informe[".googleLikeFields"][] = "mail_tercero";



$tdataq_genera_informe[".tableType"] = "list";

$tdataq_genera_informe[".printerPageOrientation"] = 0;
$tdataq_genera_informe[".nPrinterPageScale"] = 100;

$tdataq_genera_informe[".nPrinterSplitRecords"] = 40;

$tdataq_genera_informe[".geocodingEnabled"] = false;










$tdataq_genera_informe[".pageSize"] = 20;

$tdataq_genera_informe[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_genera_informe[".strOrderBy"] = $tstrOrderBy;

$tdataq_genera_informe[".orderindexes"] = array();


$tdataq_genera_informe[".sqlHead"] = "SELECT inf_id,  	inf_hash,  	inf_consecutivo,  	inf_fechapresenta,  	inf_periodicidad,  	periodo_name,  	inf_fecharep_i,  	inf_fecharep_f,  	inf_numerocontrato,  	inf_anio,  	inf_doccontratista,  	inf_nombrecontratista,  	inf_valorcontrato,  	inf_cdp,  	inf_rp,  	inf_rubrocode,  	inf_rubroname,  	inf_objeto,  	inf_fechasuscripcion,  	inf_fechacont_i,  	inf_fechacont_f,  	inf_plazo,  	inf_vigencia,  	inf_modificacionesplazo,  	inf_intersup,  	inf_nombre,  	inf_cargo,  	inf_dependencia,  	inf_avgejecucion,  	inf_actividades,  	inf_declarainconf,  	inf_declarainconf_obs,  	inf_incumplimiento,  	inf_incumplimiento_obs,  	sign_verificacert_ip,  	sign_verificacert_user,  	sign_verificacert_date,  	inf_estado,  	cert_modalidad,  	cert_mes,  	inf_usopresupuestal,  	id_cont_fk,  	concat(inf_mail_a,', ',inf_mail_b) as mail_tercero";
$tdataq_genera_informe[".sqlFrom"] = "FROM q_genera_informe";
$tdataq_genera_informe[".sqlWhereExpr"] = "";
$tdataq_genera_informe[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_genera_informe[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_genera_informe[".arrGroupsPerPage"] = $arrGPP;

$tdataq_genera_informe[".highlightSearchResults"] = true;

$tableKeysq_genera_informe = array();
$tdataq_genera_informe[".Keys"] = $tableKeysq_genera_informe;


$tdataq_genera_informe[".hideMobileList"] = array();




//	inf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "inf_id";
	$fdata["GoodName"] = "inf_id";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "inf_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_id";

	
	
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


	$tdataq_genera_informe["inf_id"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_id";
//	inf_hash
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "inf_hash";
	$fdata["GoodName"] = "inf_hash";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_hash");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_hash";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_hash";

	
	
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


	$tdataq_genera_informe["inf_hash"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_hash";
//	inf_consecutivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "inf_consecutivo";
	$fdata["GoodName"] = "inf_consecutivo";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_consecutivo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "inf_consecutivo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_consecutivo";

	
	
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


	$tdataq_genera_informe["inf_consecutivo"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_consecutivo";
//	inf_fechapresenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "inf_fechapresenta";
	$fdata["GoodName"] = "inf_fechapresenta";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_fechapresenta");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fechapresenta";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fechapresenta";

	
	
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


	$tdataq_genera_informe["inf_fechapresenta"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_fechapresenta";
//	inf_periodicidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inf_periodicidad";
	$fdata["GoodName"] = "inf_periodicidad";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_periodicidad");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "inf_periodicidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_periodicidad";

	
	
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


	$tdataq_genera_informe["inf_periodicidad"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_periodicidad";
//	periodo_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "periodo_name";
	$fdata["GoodName"] = "periodo_name";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","periodo_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "periodo_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_name";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdataq_genera_informe["periodo_name"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "periodo_name";
//	inf_fecharep_i
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "inf_fecharep_i";
	$fdata["GoodName"] = "inf_fecharep_i";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_fecharep_i");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fecharep_i";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fecharep_i";

	
	
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


	$tdataq_genera_informe["inf_fecharep_i"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_fecharep_i";
//	inf_fecharep_f
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "inf_fecharep_f";
	$fdata["GoodName"] = "inf_fecharep_f";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_fecharep_f");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fecharep_f";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fecharep_f";

	
	
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


	$tdataq_genera_informe["inf_fecharep_f"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_fecharep_f";
//	inf_numerocontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "inf_numerocontrato";
	$fdata["GoodName"] = "inf_numerocontrato";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_numerocontrato");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_numerocontrato";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_numerocontrato";

	
	
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


	$tdataq_genera_informe["inf_numerocontrato"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_numerocontrato";
//	inf_anio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "inf_anio";
	$fdata["GoodName"] = "inf_anio";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_anio");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "inf_anio";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_anio";

	
	
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


	$tdataq_genera_informe["inf_anio"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_anio";
//	inf_doccontratista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "inf_doccontratista";
	$fdata["GoodName"] = "inf_doccontratista";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_doccontratista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_doccontratista";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_doccontratista";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdataq_genera_informe["inf_doccontratista"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_doccontratista";
//	inf_nombrecontratista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "inf_nombrecontratista";
	$fdata["GoodName"] = "inf_nombrecontratista";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_nombrecontratista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_nombrecontratista";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_nombrecontratista";

	
	
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
			$edata["EditParams"].= " maxlength=120";

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


	$tdataq_genera_informe["inf_nombrecontratista"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_nombrecontratista";
//	inf_valorcontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "inf_valorcontrato";
	$fdata["GoodName"] = "inf_valorcontrato";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_valorcontrato");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "inf_valorcontrato";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_valorcontrato";

	
	
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


	$tdataq_genera_informe["inf_valorcontrato"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_valorcontrato";
//	inf_cdp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "inf_cdp";
	$fdata["GoodName"] = "inf_cdp";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_cdp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_cdp";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_cdp";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdataq_genera_informe["inf_cdp"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_cdp";
//	inf_rp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "inf_rp";
	$fdata["GoodName"] = "inf_rp";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_rp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_rp";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_rp";

	
	
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


	$tdataq_genera_informe["inf_rp"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_rp";
//	inf_rubrocode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "inf_rubrocode";
	$fdata["GoodName"] = "inf_rubrocode";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_rubrocode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_rubrocode";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_rubrocode";

	
	
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


	$tdataq_genera_informe["inf_rubrocode"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_rubrocode";
//	inf_rubroname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "inf_rubroname";
	$fdata["GoodName"] = "inf_rubroname";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_rubroname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_rubroname";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_rubroname";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdataq_genera_informe["inf_rubroname"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_rubroname";
//	inf_objeto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "inf_objeto";
	$fdata["GoodName"] = "inf_objeto";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_objeto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_objeto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_objeto";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdataq_genera_informe["inf_objeto"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_objeto";
//	inf_fechasuscripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "inf_fechasuscripcion";
	$fdata["GoodName"] = "inf_fechasuscripcion";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_fechasuscripcion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fechasuscripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fechasuscripcion";

	
	
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


	$tdataq_genera_informe["inf_fechasuscripcion"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_fechasuscripcion";
//	inf_fechacont_i
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "inf_fechacont_i";
	$fdata["GoodName"] = "inf_fechacont_i";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_fechacont_i");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fechacont_i";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fechacont_i";

	
	
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


	$tdataq_genera_informe["inf_fechacont_i"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_fechacont_i";
//	inf_fechacont_f
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "inf_fechacont_f";
	$fdata["GoodName"] = "inf_fechacont_f";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_fechacont_f");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fechacont_f";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fechacont_f";

	
	
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


	$tdataq_genera_informe["inf_fechacont_f"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_fechacont_f";
//	inf_plazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "inf_plazo";
	$fdata["GoodName"] = "inf_plazo";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_plazo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_plazo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_plazo";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataq_genera_informe["inf_plazo"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_plazo";
//	inf_vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "inf_vigencia";
	$fdata["GoodName"] = "inf_vigencia";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_vigencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_vigencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_vigencia";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataq_genera_informe["inf_vigencia"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_vigencia";
//	inf_modificacionesplazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "inf_modificacionesplazo";
	$fdata["GoodName"] = "inf_modificacionesplazo";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_modificacionesplazo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_modificacionesplazo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_modificacionesplazo";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdataq_genera_informe["inf_modificacionesplazo"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_modificacionesplazo";
//	inf_intersup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "inf_intersup";
	$fdata["GoodName"] = "inf_intersup";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_intersup");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_intersup";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_intersup";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataq_genera_informe["inf_intersup"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_intersup";
//	inf_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "inf_nombre";
	$fdata["GoodName"] = "inf_nombre";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_nombre";

	
	
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
			$edata["EditParams"].= " maxlength=120";

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


	$tdataq_genera_informe["inf_nombre"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_nombre";
//	inf_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "inf_cargo";
	$fdata["GoodName"] = "inf_cargo";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_cargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_cargo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_cargo";

	
	
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
			$edata["EditParams"].= " maxlength=120";

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


	$tdataq_genera_informe["inf_cargo"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_cargo";
//	inf_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "inf_dependencia";
	$fdata["GoodName"] = "inf_dependencia";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_dependencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_dependencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_dependencia";

	
	
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
			$edata["EditParams"].= " maxlength=120";

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


	$tdataq_genera_informe["inf_dependencia"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_dependencia";
//	inf_avgejecucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "inf_avgejecucion";
	$fdata["GoodName"] = "inf_avgejecucion";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_avgejecucion");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "inf_avgejecucion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_avgejecucion";

	
	
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


	$tdataq_genera_informe["inf_avgejecucion"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_avgejecucion";
//	inf_actividades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "inf_actividades";
	$fdata["GoodName"] = "inf_actividades";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_actividades");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "inf_actividades";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_actividades";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdataq_genera_informe["inf_actividades"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_actividades";
//	inf_declarainconf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "inf_declarainconf";
	$fdata["GoodName"] = "inf_declarainconf";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_declarainconf");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_declarainconf";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_declarainconf";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdataq_genera_informe["inf_declarainconf"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_declarainconf";
//	inf_declarainconf_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "inf_declarainconf_obs";
	$fdata["GoodName"] = "inf_declarainconf_obs";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_declarainconf_obs");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_declarainconf_obs";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_declarainconf_obs";

	
	
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


	$tdataq_genera_informe["inf_declarainconf_obs"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_declarainconf_obs";
//	inf_incumplimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "inf_incumplimiento";
	$fdata["GoodName"] = "inf_incumplimiento";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_incumplimiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_incumplimiento";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_incumplimiento";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdataq_genera_informe["inf_incumplimiento"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_incumplimiento";
//	inf_incumplimiento_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "inf_incumplimiento_obs";
	$fdata["GoodName"] = "inf_incumplimiento_obs";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_incumplimiento_obs");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_incumplimiento_obs";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_incumplimiento_obs";

	
	
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


	$tdataq_genera_informe["inf_incumplimiento_obs"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_incumplimiento_obs";
//	sign_verificacert_ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "sign_verificacert_ip";
	$fdata["GoodName"] = "sign_verificacert_ip";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","sign_verificacert_ip");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_verificacert_ip";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_verificacert_ip";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataq_genera_informe["sign_verificacert_ip"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "sign_verificacert_ip";
//	sign_verificacert_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "sign_verificacert_user";
	$fdata["GoodName"] = "sign_verificacert_user";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","sign_verificacert_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_verificacert_user";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_verificacert_user";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataq_genera_informe["sign_verificacert_user"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "sign_verificacert_user";
//	sign_verificacert_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "sign_verificacert_date";
	$fdata["GoodName"] = "sign_verificacert_date";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","sign_verificacert_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sign_verificacert_date";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_verificacert_date";

	
	
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


	$tdataq_genera_informe["sign_verificacert_date"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "sign_verificacert_date";
//	inf_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "inf_estado";
	$fdata["GoodName"] = "inf_estado";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_estado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "inf_estado";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_estado";

	
	
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


	$tdataq_genera_informe["inf_estado"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_estado";
//	cert_modalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "cert_modalidad";
	$fdata["GoodName"] = "cert_modalidad";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","cert_modalidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cert_modalidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_modalidad";

	
	
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
			$edata["EditParams"].= " maxlength=120";

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


	$tdataq_genera_informe["cert_modalidad"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "cert_modalidad";
//	cert_mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "cert_mes";
	$fdata["GoodName"] = "cert_mes";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","cert_mes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cert_mes";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_mes";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdataq_genera_informe["cert_mes"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "cert_mes";
//	inf_usopresupuestal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "inf_usopresupuestal";
	$fdata["GoodName"] = "inf_usopresupuestal";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","inf_usopresupuestal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_usopresupuestal";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_usopresupuestal";

	
	
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


	$tdataq_genera_informe["inf_usopresupuestal"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "inf_usopresupuestal";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "q_genera_informe";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","id_cont_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cont_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont_fk";

	
	
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


	$tdataq_genera_informe["id_cont_fk"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "id_cont_fk";
//	mail_tercero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "mail_tercero";
	$fdata["GoodName"] = "mail_tercero";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("q_genera_informe","mail_tercero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mail_tercero";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(inf_mail_a,', ',inf_mail_b)";

	
	
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


	$tdataq_genera_informe["mail_tercero"] = $fdata;
		$tdataq_genera_informe[".searchableFields"][] = "mail_tercero";


$tables_data["q_genera_informe"]=&$tdataq_genera_informe;
$field_labels["q_genera_informe"] = &$fieldLabelsq_genera_informe;
$fieldToolTips["q_genera_informe"] = &$fieldToolTipsq_genera_informe;
$placeHolders["q_genera_informe"] = &$placeHoldersq_genera_informe;
$page_titles["q_genera_informe"] = &$pageTitlesq_genera_informe;


changeTextControlsToDate( "q_genera_informe" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_genera_informe"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_genera_informe"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_genera_informe()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inf_id,  	inf_hash,  	inf_consecutivo,  	inf_fechapresenta,  	inf_periodicidad,  	periodo_name,  	inf_fecharep_i,  	inf_fecharep_f,  	inf_numerocontrato,  	inf_anio,  	inf_doccontratista,  	inf_nombrecontratista,  	inf_valorcontrato,  	inf_cdp,  	inf_rp,  	inf_rubrocode,  	inf_rubroname,  	inf_objeto,  	inf_fechasuscripcion,  	inf_fechacont_i,  	inf_fechacont_f,  	inf_plazo,  	inf_vigencia,  	inf_modificacionesplazo,  	inf_intersup,  	inf_nombre,  	inf_cargo,  	inf_dependencia,  	inf_avgejecucion,  	inf_actividades,  	inf_declarainconf,  	inf_declarainconf_obs,  	inf_incumplimiento,  	inf_incumplimiento_obs,  	sign_verificacert_ip,  	sign_verificacert_user,  	sign_verificacert_date,  	inf_estado,  	cert_modalidad,  	cert_mes,  	inf_usopresupuestal,  	id_cont_fk,  	concat(inf_mail_a,', ',inf_mail_b) as mail_tercero";
$proto0["m_strFrom"] = "FROM q_genera_informe";
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
	"m_strName" => "inf_id",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto6["m_sql"] = "inf_id";
$proto6["m_srcTableName"] = "q_genera_informe";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_hash",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto8["m_sql"] = "inf_hash";
$proto8["m_srcTableName"] = "q_genera_informe";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_consecutivo",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto10["m_sql"] = "inf_consecutivo";
$proto10["m_srcTableName"] = "q_genera_informe";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fechapresenta",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto12["m_sql"] = "inf_fechapresenta";
$proto12["m_srcTableName"] = "q_genera_informe";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_periodicidad",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto14["m_sql"] = "inf_periodicidad";
$proto14["m_srcTableName"] = "q_genera_informe";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_name",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto16["m_sql"] = "periodo_name";
$proto16["m_srcTableName"] = "q_genera_informe";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fecharep_i",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto18["m_sql"] = "inf_fecharep_i";
$proto18["m_srcTableName"] = "q_genera_informe";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fecharep_f",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto20["m_sql"] = "inf_fecharep_f";
$proto20["m_srcTableName"] = "q_genera_informe";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_numerocontrato",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto22["m_sql"] = "inf_numerocontrato";
$proto22["m_srcTableName"] = "q_genera_informe";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_anio",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto24["m_sql"] = "inf_anio";
$proto24["m_srcTableName"] = "q_genera_informe";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_doccontratista",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto26["m_sql"] = "inf_doccontratista";
$proto26["m_srcTableName"] = "q_genera_informe";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_nombrecontratista",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto28["m_sql"] = "inf_nombrecontratista";
$proto28["m_srcTableName"] = "q_genera_informe";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_valorcontrato",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto30["m_sql"] = "inf_valorcontrato";
$proto30["m_srcTableName"] = "q_genera_informe";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_cdp",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto32["m_sql"] = "inf_cdp";
$proto32["m_srcTableName"] = "q_genera_informe";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_rp",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto34["m_sql"] = "inf_rp";
$proto34["m_srcTableName"] = "q_genera_informe";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_rubrocode",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto36["m_sql"] = "inf_rubrocode";
$proto36["m_srcTableName"] = "q_genera_informe";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_rubroname",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto38["m_sql"] = "inf_rubroname";
$proto38["m_srcTableName"] = "q_genera_informe";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_objeto",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto40["m_sql"] = "inf_objeto";
$proto40["m_srcTableName"] = "q_genera_informe";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fechasuscripcion",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto42["m_sql"] = "inf_fechasuscripcion";
$proto42["m_srcTableName"] = "q_genera_informe";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fechacont_i",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto44["m_sql"] = "inf_fechacont_i";
$proto44["m_srcTableName"] = "q_genera_informe";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fechacont_f",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto46["m_sql"] = "inf_fechacont_f";
$proto46["m_srcTableName"] = "q_genera_informe";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_plazo",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto48["m_sql"] = "inf_plazo";
$proto48["m_srcTableName"] = "q_genera_informe";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_vigencia",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto50["m_sql"] = "inf_vigencia";
$proto50["m_srcTableName"] = "q_genera_informe";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_modificacionesplazo",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto52["m_sql"] = "inf_modificacionesplazo";
$proto52["m_srcTableName"] = "q_genera_informe";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_intersup",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto54["m_sql"] = "inf_intersup";
$proto54["m_srcTableName"] = "q_genera_informe";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_nombre",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto56["m_sql"] = "inf_nombre";
$proto56["m_srcTableName"] = "q_genera_informe";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_cargo",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto58["m_sql"] = "inf_cargo";
$proto58["m_srcTableName"] = "q_genera_informe";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_dependencia",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto60["m_sql"] = "inf_dependencia";
$proto60["m_srcTableName"] = "q_genera_informe";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_avgejecucion",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto62["m_sql"] = "inf_avgejecucion";
$proto62["m_srcTableName"] = "q_genera_informe";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_actividades",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto64["m_sql"] = "inf_actividades";
$proto64["m_srcTableName"] = "q_genera_informe";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_declarainconf",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto66["m_sql"] = "inf_declarainconf";
$proto66["m_srcTableName"] = "q_genera_informe";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_declarainconf_obs",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto68["m_sql"] = "inf_declarainconf_obs";
$proto68["m_srcTableName"] = "q_genera_informe";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_incumplimiento",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto70["m_sql"] = "inf_incumplimiento";
$proto70["m_srcTableName"] = "q_genera_informe";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_incumplimiento_obs",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto72["m_sql"] = "inf_incumplimiento_obs";
$proto72["m_srcTableName"] = "q_genera_informe";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_verificacert_ip",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto74["m_sql"] = "sign_verificacert_ip";
$proto74["m_srcTableName"] = "q_genera_informe";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_verificacert_user",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto76["m_sql"] = "sign_verificacert_user";
$proto76["m_srcTableName"] = "q_genera_informe";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_verificacert_date",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto78["m_sql"] = "sign_verificacert_date";
$proto78["m_srcTableName"] = "q_genera_informe";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_estado",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto80["m_sql"] = "inf_estado";
$proto80["m_srcTableName"] = "q_genera_informe";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_modalidad",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto82["m_sql"] = "cert_modalidad";
$proto82["m_srcTableName"] = "q_genera_informe";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_mes",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto84["m_sql"] = "cert_mes";
$proto84["m_srcTableName"] = "q_genera_informe";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_usopresupuestal",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto86["m_sql"] = "inf_usopresupuestal";
$proto86["m_srcTableName"] = "q_genera_informe";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "q_genera_informe",
	"m_srcTableName" => "q_genera_informe"
));

$proto88["m_sql"] = "id_cont_fk";
$proto88["m_srcTableName"] = "q_genera_informe";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$proto91=array();
$proto91["m_functiontype"] = "SQLF_CUSTOM";
$proto91["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "inf_mail_a"
));

$proto91["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "', '"
));

$proto91["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "inf_mail_b"
));

$proto91["m_arguments"][]=$obj;
$proto91["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto91);

$proto90["m_sql"] = "concat(inf_mail_a,', ',inf_mail_b)";
$proto90["m_srcTableName"] = "q_genera_informe";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "mail_tercero";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto95=array();
$proto95["m_link"] = "SQLL_MAIN";
			$proto96=array();
$proto96["m_strName"] = "q_genera_informe";
$proto96["m_srcTableName"] = "q_genera_informe";
$proto96["m_columns"] = array();
$proto96["m_columns"][] = "cert_mes";
$proto96["m_columns"][] = "cert_modalidad";
$proto96["m_columns"][] = "cert_msj";
$proto96["m_columns"][] = "id_cont_fk";
$proto96["m_columns"][] = "inf_actividades";
$proto96["m_columns"][] = "inf_anio";
$proto96["m_columns"][] = "inf_avgejecucion";
$proto96["m_columns"][] = "inf_cargo";
$proto96["m_columns"][] = "inf_cdp";
$proto96["m_columns"][] = "inf_consecutivo";
$proto96["m_columns"][] = "inf_declarainconf";
$proto96["m_columns"][] = "inf_declarainconf_obs";
$proto96["m_columns"][] = "inf_dependencia";
$proto96["m_columns"][] = "inf_doccontratista";
$proto96["m_columns"][] = "inf_estado";
$proto96["m_columns"][] = "inf_fechacont_f";
$proto96["m_columns"][] = "inf_fechacont_i";
$proto96["m_columns"][] = "inf_fechapresenta";
$proto96["m_columns"][] = "inf_fecharep_f";
$proto96["m_columns"][] = "inf_fecharep_i";
$proto96["m_columns"][] = "inf_fechasuscripcion";
$proto96["m_columns"][] = "inf_hash";
$proto96["m_columns"][] = "inf_id";
$proto96["m_columns"][] = "inf_incumplimiento";
$proto96["m_columns"][] = "inf_incumplimiento_obs";
$proto96["m_columns"][] = "inf_intersup";
$proto96["m_columns"][] = "inf_mail_a";
$proto96["m_columns"][] = "inf_mail_b";
$proto96["m_columns"][] = "inf_modificacionesplazo";
$proto96["m_columns"][] = "inf_nombre";
$proto96["m_columns"][] = "inf_nombrecontratista";
$proto96["m_columns"][] = "inf_numerocontrato";
$proto96["m_columns"][] = "inf_objeto";
$proto96["m_columns"][] = "inf_periodicidad";
$proto96["m_columns"][] = "inf_plazo";
$proto96["m_columns"][] = "inf_rp";
$proto96["m_columns"][] = "inf_rubrocode";
$proto96["m_columns"][] = "inf_rubroname";
$proto96["m_columns"][] = "inf_usopresupuestal";
$proto96["m_columns"][] = "inf_valorcontrato";
$proto96["m_columns"][] = "inf_vigencia";
$proto96["m_columns"][] = "periodo_name";
$proto96["m_columns"][] = "sign_verificacert_date";
$proto96["m_columns"][] = "sign_verificacert_ip";
$proto96["m_columns"][] = "sign_verificacert_user";
$obj = new SQLTable($proto96);

$proto95["m_table"] = $obj;
$proto95["m_sql"] = "q_genera_informe";
$proto95["m_alias"] = "";
$proto95["m_srcTableName"] = "q_genera_informe";
$proto97=array();
$proto97["m_sql"] = "";
$proto97["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto97["m_column"]=$obj;
$proto97["m_contained"] = array();
$proto97["m_strCase"] = "";
$proto97["m_havingmode"] = false;
$proto97["m_inBrackets"] = false;
$proto97["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto97);

$proto95["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto95);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_genera_informe";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_genera_informe = createSqlQuery_q_genera_informe();


	
								;

																																											

$tdataq_genera_informe[".sqlquery"] = $queryData_q_genera_informe;



$tdataq_genera_informe[".hasEvents"] = false;

?>