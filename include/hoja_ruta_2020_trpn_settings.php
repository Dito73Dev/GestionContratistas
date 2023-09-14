<?php
$tdatahoja_ruta_2020_trpn = array();
$tdatahoja_ruta_2020_trpn[".searchableFields"] = array();
$tdatahoja_ruta_2020_trpn[".ShortName"] = "hoja_ruta_2020_trpn";
$tdatahoja_ruta_2020_trpn[".OwnerID"] = "hr_nit_contra_ta";
$tdatahoja_ruta_2020_trpn[".OriginalTable"] = "hoja_ruta_2020";


$tdatahoja_ruta_2020_trpn[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahoja_ruta_2020_trpn[".originalPagesByType"] = $tdatahoja_ruta_2020_trpn[".pagesByType"];
$tdatahoja_ruta_2020_trpn[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahoja_ruta_2020_trpn[".originalPages"] = $tdatahoja_ruta_2020_trpn[".pages"];
$tdatahoja_ruta_2020_trpn[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahoja_ruta_2020_trpn[".originalDefaultPages"] = $tdatahoja_ruta_2020_trpn[".defaultPages"];

//	field labels
$fieldLabelshoja_ruta_2020_trpn = array();
$fieldToolTipshoja_ruta_2020_trpn = array();
$pageTitleshoja_ruta_2020_trpn = array();
$placeHoldershoja_ruta_2020_trpn = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshoja_ruta_2020_trpn["Spanish"] = array();
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"] = array();
	$placeHoldershoja_ruta_2020_trpn["Spanish"] = array();
	$pageTitleshoja_ruta_2020_trpn["Spanish"] = array();
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["hr_id"] = "Hoja de ruta";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["hr_id"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["hr_id"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["id_cont_fk"] = "Contrato";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["id_cont_fk"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["id_cont_fk"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["id_informe_fk"] = "Informe";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["id_informe_fk"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["id_informe_fk"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["hr_concepto_id"] = "Concepto";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["hr_concepto_id"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["hr_concepto_id"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["hr_anio"] = "Vigencia";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["hr_anio"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["hr_anio"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["hr_nit_contra_ta"] = "Nombres y apellidos";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["hr_nit_contra_ta"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["hr_nit_contra_ta"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["hr_asunto"] = "Asunto";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["hr_asunto"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["hr_asunto"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["hr_valor"] = "Valor solicitado";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["hr_valor"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["hr_valor"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["hr_fechaingreso"] = "Fecha de creacion";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["hr_fechaingreso"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["hr_fechaingreso"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["sys_user"] = "Enviar esta solicitud a:";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["sys_user"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["sys_user"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["sys_fecha_reg"] = "Fecha sistema";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["sys_fecha_reg"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["sys_fecha_reg"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["not_mail"] = "Notificado a:";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["not_mail"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["not_mail"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["evento_type_id_fk"] = "Actividad";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["evento_type_id_fk"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["evento_type_id_fk"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["user_from"] = "User From";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["user_from"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["user_from"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["tercero_email"] = "Correo(s) contratista";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["tercero_email"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["tercero_email"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["last_act_user"] = "Ultima actividad";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["last_act_user"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["last_act_user"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["etapa"] = "Etapa";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["etapa"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["etapa"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["cxc_id_fk"] = "Número interno de la solicitud de pago";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["cxc_id_fk"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["cxc_id_fk"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["sysdate"] = "Fecha de actualización";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["sysdate"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["sysdate"] = "";
	$fieldLabelshoja_ruta_2020_trpn["Spanish"]["supervisor_email"] = "Correo supervisor";
	$fieldToolTipshoja_ruta_2020_trpn["Spanish"]["supervisor_email"] = "";
	$placeHoldershoja_ruta_2020_trpn["Spanish"]["supervisor_email"] = "";
	$pageTitleshoja_ruta_2020_trpn["Spanish"]["add"] = "Radicar solicitud de pago";
	if (count($fieldToolTipshoja_ruta_2020_trpn["Spanish"]))
		$tdatahoja_ruta_2020_trpn[".isUseToolTips"] = true;
}


	$tdatahoja_ruta_2020_trpn[".NCSearch"] = true;



$tdatahoja_ruta_2020_trpn[".shortTableName"] = "hoja_ruta_2020_trpn";
$tdatahoja_ruta_2020_trpn[".nSecOptions"] = 1;

$tdatahoja_ruta_2020_trpn[".mainTableOwnerID"] = "hr_nit_contra_ta";
$tdatahoja_ruta_2020_trpn[".entityType"] = 1;
$tdatahoja_ruta_2020_trpn[".connId"] = "contratacion_at_172_18_0_115";


$tdatahoja_ruta_2020_trpn[".strOriginalTableName"] = "hoja_ruta_2020";

	



$tdatahoja_ruta_2020_trpn[".showAddInPopup"] = false;

$tdatahoja_ruta_2020_trpn[".showEditInPopup"] = false;

$tdatahoja_ruta_2020_trpn[".showViewInPopup"] = false;

$tdatahoja_ruta_2020_trpn[".listAjax"] = false;
//	temporary
//$tdatahoja_ruta_2020_trpn[".listAjax"] = false;

	$tdatahoja_ruta_2020_trpn[".audit"] = false;

	$tdatahoja_ruta_2020_trpn[".locking"] = false;


$pages = $tdatahoja_ruta_2020_trpn[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahoja_ruta_2020_trpn[".edit"] = true;
	$tdatahoja_ruta_2020_trpn[".afterEditAction"] = 1;
	$tdatahoja_ruta_2020_trpn[".closePopupAfterEdit"] = 1;
	$tdatahoja_ruta_2020_trpn[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahoja_ruta_2020_trpn[".add"] = true;
$tdatahoja_ruta_2020_trpn[".afterAddAction"] = 1;
$tdatahoja_ruta_2020_trpn[".closePopupAfterAdd"] = 1;
$tdatahoja_ruta_2020_trpn[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahoja_ruta_2020_trpn[".list"] = true;
}



$tdatahoja_ruta_2020_trpn[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahoja_ruta_2020_trpn[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahoja_ruta_2020_trpn[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahoja_ruta_2020_trpn[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahoja_ruta_2020_trpn[".printFriendly"] = true;
}



$tdatahoja_ruta_2020_trpn[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahoja_ruta_2020_trpn[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahoja_ruta_2020_trpn[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahoja_ruta_2020_trpn[".isUseAjaxSuggest"] = true;



												

$tdatahoja_ruta_2020_trpn[".ajaxCodeSnippetAdded"] = false;

$tdatahoja_ruta_2020_trpn[".buttonsAdded"] = false;

$tdatahoja_ruta_2020_trpn[".addPageEvents"] = true;

// use timepicker for search panel
$tdatahoja_ruta_2020_trpn[".isUseTimeForSearch"] = false;


$tdatahoja_ruta_2020_trpn[".badgeColor"] = "B22222";


$tdatahoja_ruta_2020_trpn[".allSearchFields"] = array();
$tdatahoja_ruta_2020_trpn[".filterFields"] = array();
$tdatahoja_ruta_2020_trpn[".requiredSearchFields"] = array();

$tdatahoja_ruta_2020_trpn[".googleLikeFields"] = array();
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "hr_id";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "hr_nit_contra_ta";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "id_cont_fk";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "id_informe_fk";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "hr_concepto_id";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "hr_anio";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "hr_asunto";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "hr_valor";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "hr_fechaingreso";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "sys_user";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "sys_fecha_reg";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "not_mail";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "evento_type_id_fk";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "etapa";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "user_from";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "tercero_email";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "last_act_user";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "cxc_id_fk";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "sysdate";
$tdatahoja_ruta_2020_trpn[".googleLikeFields"][] = "supervisor_email";



$tdatahoja_ruta_2020_trpn[".tableType"] = "list";

$tdatahoja_ruta_2020_trpn[".printerPageOrientation"] = 0;
$tdatahoja_ruta_2020_trpn[".nPrinterPageScale"] = 100;

$tdatahoja_ruta_2020_trpn[".nPrinterSplitRecords"] = 40;

$tdatahoja_ruta_2020_trpn[".geocodingEnabled"] = false;




$tdatahoja_ruta_2020_trpn[".isDisplayLoading"] = true;






$tdatahoja_ruta_2020_trpn[".pageSize"] = 20;

$tdatahoja_ruta_2020_trpn[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahoja_ruta_2020_trpn[".strOrderBy"] = $tstrOrderBy;

$tdatahoja_ruta_2020_trpn[".orderindexes"] = array();


$tdatahoja_ruta_2020_trpn[".sqlHead"] = "SELECT hr_id,  hr_nit_contra_ta,  id_cont_fk,  id_informe_fk,  hr_concepto_id,  hr_anio,  hr_asunto,  hr_valor,  hr_fechaingreso,  sys_user,  sys_fecha_reg,  not_mail,  evento_type_id_fk,  evento_type_id_fk AS etapa,  user_from,  tercero_email,  last_act_user,  cxc_id_fk,  `sysdate`,  supervisor_email";
$tdatahoja_ruta_2020_trpn[".sqlFrom"] = "FROM hoja_ruta_2020";
$tdatahoja_ruta_2020_trpn[".sqlWhereExpr"] = "(hr_anio = year(now()))";
$tdatahoja_ruta_2020_trpn[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatahoja_ruta_2020_trpn[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahoja_ruta_2020_trpn[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahoja_ruta_2020_trpn[".arrGroupsPerPage"] = $arrGPP;

$tdatahoja_ruta_2020_trpn[".highlightSearchResults"] = true;

$tableKeyshoja_ruta_2020_trpn = array();
$tableKeyshoja_ruta_2020_trpn[] = "hr_id";
$tdatahoja_ruta_2020_trpn[".Keys"] = $tableKeyshoja_ruta_2020_trpn;


$tdatahoja_ruta_2020_trpn[".hideMobileList"] = array();




//	hr_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "hr_id";
	$fdata["GoodName"] = "hr_id";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","hr_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "hr_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_id";

	
	
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


	$tdatahoja_ruta_2020_trpn["hr_id"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "hr_id";
//	hr_nit_contra_ta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "hr_nit_contra_ta";
	$fdata["GoodName"] = "hr_nit_contra_ta";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","hr_nit_contra_ta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "hr_nit_contra_ta";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_nit_contra_ta";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cont_nit_contra_ta";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "contractor_nombresfull";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_cont_fk";

	
	
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
		
		$edata["autoUpdatable"] = true;

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


	$tdatahoja_ruta_2020_trpn["hr_nit_contra_ta"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "hr_nit_contra_ta";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","id_cont_fk");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_bandejaentrada_supervisores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "numcontrato";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "hr_nit_contra_ta", "lookup" => "cont_nit_contra_ta" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_informe_fk";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "supervisor_email";

	
	
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


	$tdatahoja_ruta_2020_trpn["id_cont_fk"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "id_cont_fk";
//	id_informe_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_informe_fk";
	$fdata["GoodName"] = "id_informe_fk";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","id_informe_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_informe_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_informe_fk";

	
	
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
	$edata["LookupTable"] = "q_genera_informe";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"tercero_email", 'lookupF'=>"mail_tercero");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "inf_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "inf_hash";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_cont_fk", "lookup" => "id_cont_fk" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "cxc_id_fk";

	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Documento %value% ya existe", "messageType" => "Text");

	
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


	$tdatahoja_ruta_2020_trpn["id_informe_fk"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "id_informe_fk";
//	hr_concepto_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "hr_concepto_id";
	$fdata["GoodName"] = "hr_concepto_id";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","hr_concepto_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "hr_concepto_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_concepto_id";

	
	
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
	$edata["LookupTable"] = "hoja_ruta_tparam_conceptos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "concepto_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concepto";

				$edata["LookupWhereCode"] = true;


	
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
		
		$edata["autoUpdatable"] = true;

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


	$tdatahoja_ruta_2020_trpn["hr_concepto_id"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "hr_concepto_id";
//	hr_anio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "hr_anio";
	$fdata["GoodName"] = "hr_anio";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","hr_anio");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "hr_anio";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_anio";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "hr_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatahoja_ruta_2020_trpn["hr_anio"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "hr_anio";
//	hr_asunto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "hr_asunto";
	$fdata["GoodName"] = "hr_asunto";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","hr_asunto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "hr_asunto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_asunto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "nomina_cont_meses";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "mes_concepto";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "mes_concepto";

	

	
	$edata["LookupOrderBy"] = "mes_id";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "nomina_cont_meses";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "mes_concepto";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "mes_concepto";

	

	
	$edata["LookupOrderBy"] = "mes_id";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatahoja_ruta_2020_trpn["hr_asunto"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "hr_asunto";
//	hr_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "hr_valor";
	$fdata["GoodName"] = "hr_valor";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","hr_valor");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "hr_valor";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_valor";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
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


	$tdatahoja_ruta_2020_trpn["hr_valor"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "hr_valor";
//	hr_fechaingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "hr_fechaingreso";
	$fdata["GoodName"] = "hr_fechaingreso";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","hr_fechaingreso");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "hr_fechaingreso";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_fechaingreso";

	
	
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


	$tdatahoja_ruta_2020_trpn["hr_fechaingreso"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "hr_fechaingreso";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","sys_user");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "global_users";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"not_mail", 'lookupF'=>"usr_email");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
	$edata["LookupOrderBy"] = "usr_nombresfull";

	
	
	
	

	
	
	
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


	$tdatahoja_ruta_2020_trpn["sys_user"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "sys_user";
//	sys_fecha_reg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sys_fecha_reg";
	$fdata["GoodName"] = "sys_fecha_reg";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","sys_fecha_reg");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_fecha_reg";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_fecha_reg";

	
	
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


	$tdatahoja_ruta_2020_trpn["sys_fecha_reg"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "sys_fecha_reg";
//	not_mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "not_mail";
	$fdata["GoodName"] = "not_mail";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","not_mail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "not_mail";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "not_mail";

	
	
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


	$tdatahoja_ruta_2020_trpn["not_mail"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "not_mail";
//	evento_type_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "evento_type_id_fk";
	$fdata["GoodName"] = "evento_type_id_fk";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","evento_type_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "evento_type_id_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evento_type_id_fk";

	
	
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
	$edata["LookupTable"] = "hoja_ruta_event_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "evento_type_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "evento_type_name";

				$edata["LookupWhereCode"] = true;


	
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
		
		$edata["autoUpdatable"] = true;

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


	$tdatahoja_ruta_2020_trpn["evento_type_id_fk"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "evento_type_id_fk";
//	etapa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "etapa";
	$fdata["GoodName"] = "etapa";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","etapa");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "evento_type_id_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evento_type_id_fk";

	
	
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
	$edata["LookupTable"] = "hoja_ruta_event_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "evento_type_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "evento_type_desc";

	

	
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


	$tdatahoja_ruta_2020_trpn["etapa"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "etapa";
//	user_from
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "user_from";
	$fdata["GoodName"] = "user_from";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","user_from");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user_from";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_from";

	
	
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


	$tdatahoja_ruta_2020_trpn["user_from"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "user_from";
//	tercero_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "tercero_email";
	$fdata["GoodName"] = "tercero_email";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","tercero_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tercero_email";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tercero_email";

	
	
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


	$tdatahoja_ruta_2020_trpn["tercero_email"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "tercero_email";
//	last_act_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "last_act_user";
	$fdata["GoodName"] = "last_act_user";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","last_act_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "last_act_user";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_act_user";

	
	
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


	$tdatahoja_ruta_2020_trpn["last_act_user"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "last_act_user";
//	cxc_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "cxc_id_fk";
	$fdata["GoodName"] = "cxc_id_fk";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","cxc_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cxc_id_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cxc_id_fk";

	
	
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
	$edata["LookupTable"] = "q_info_cxc";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"hr_valor", 'lookupF'=>"cxc_valor");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cxc_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cxc_id";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_informe_fk", "lookup" => "inf_id_fk" );

	
	

	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Solicitud ya se encuentra registrada!", "messageType" => "Text");

	
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


	$tdatahoja_ruta_2020_trpn["cxc_id_fk"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "cxc_id_fk";
//	sysdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "sysdate";
	$fdata["GoodName"] = "sysdate";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","sysdate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sysdate";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sysdate`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatahoja_ruta_2020_trpn["sysdate"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "sysdate";
//	supervisor_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "supervisor_email";
	$fdata["GoodName"] = "supervisor_email";
	$fdata["ownerTable"] = "hoja_ruta_2020";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_trpn","supervisor_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "supervisor_email";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "supervisor_email";

	
	
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
	$edata["LookupTable"] = "interventor_interno";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "sup_mailnot";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "sup_mailnot";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_cont_fk", "lookup" => "id_cont_fk" );

	
	

	
	
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


	$tdatahoja_ruta_2020_trpn["supervisor_email"] = $fdata;
		$tdatahoja_ruta_2020_trpn[".searchableFields"][] = "supervisor_email";


$tables_data["hoja_ruta_2020_trpn"]=&$tdatahoja_ruta_2020_trpn;
$field_labels["hoja_ruta_2020_trpn"] = &$fieldLabelshoja_ruta_2020_trpn;
$fieldToolTips["hoja_ruta_2020_trpn"] = &$fieldToolTipshoja_ruta_2020_trpn;
$placeHolders["hoja_ruta_2020_trpn"] = &$placeHoldershoja_ruta_2020_trpn;
$page_titles["hoja_ruta_2020_trpn"] = &$pageTitleshoja_ruta_2020_trpn;


changeTextControlsToDate( "hoja_ruta_2020_trpn" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hoja_ruta_2020_trpn"] = array();
//	informe_intersup_anexos_contratista
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="informe_intersup_anexos_contratista";
		$detailsParam["dOriginalTable"] = "informe_intersup_anexos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "informe_intersup_anexos_contratista";
	$detailsParam["dCaptionTable"] = GetTableCaption("informe_intersup_anexos_contratista");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hoja_ruta_2020_trpn"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hoja_ruta_2020_trpn"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hoja_ruta_2020_trpn"][$dIndex]["masterKeys"][]="id_informe_fk";

				$detailsTablesData["hoja_ruta_2020_trpn"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hoja_ruta_2020_trpn"][$dIndex]["detailKeys"][]="inf_id_fk";
//	hoja_ruta_2020_tracking
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="hoja_ruta_2020_tracking";
		$detailsParam["dOriginalTable"] = "hoja_ruta_2020_tracking";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "hoja_ruta_2020_tracking";
	$detailsParam["dCaptionTable"] = GetTableCaption("hoja_ruta_2020_tracking");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hoja_ruta_2020_trpn"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hoja_ruta_2020_trpn"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hoja_ruta_2020_trpn"][$dIndex]["masterKeys"][]="hr_id";

				$detailsTablesData["hoja_ruta_2020_trpn"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hoja_ruta_2020_trpn"][$dIndex]["detailKeys"][]="hr_id_fk";
//	q_consulta_op
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="q_consulta_op";
		$detailsParam["dOriginalTable"] = "q_consulta_op";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "q_consulta_op";
	$detailsParam["dCaptionTable"] = GetTableCaption("q_consulta_op");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["hoja_ruta_2020_trpn"][$dIndex] = $detailsParam;

	
		$detailsTablesData["hoja_ruta_2020_trpn"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["hoja_ruta_2020_trpn"][$dIndex]["masterKeys"][]="hr_id";

				$detailsTablesData["hoja_ruta_2020_trpn"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["hoja_ruta_2020_trpn"][$dIndex]["detailKeys"][]="hdr_if_fk";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hoja_ruta_2020_trpn"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hoja_ruta_2020_trpn()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "hr_id,  hr_nit_contra_ta,  id_cont_fk,  id_informe_fk,  hr_concepto_id,  hr_anio,  hr_asunto,  hr_valor,  hr_fechaingreso,  sys_user,  sys_fecha_reg,  not_mail,  evento_type_id_fk,  evento_type_id_fk AS etapa,  user_from,  tercero_email,  last_act_user,  cxc_id_fk,  `sysdate`,  supervisor_email";
$proto0["m_strFrom"] = "FROM hoja_ruta_2020";
$proto0["m_strWhere"] = "(hr_anio = year(now()))";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "hr_anio = year(now())";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "hr_anio",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= year(now())";
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
	"m_strName" => "hr_id",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto6["m_sql"] = "hr_id";
$proto6["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_nit_contra_ta",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto8["m_sql"] = "hr_nit_contra_ta";
$proto8["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto10["m_sql"] = "id_cont_fk";
$proto10["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_informe_fk",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto12["m_sql"] = "id_informe_fk";
$proto12["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_concepto_id",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto14["m_sql"] = "hr_concepto_id";
$proto14["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_anio",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto16["m_sql"] = "hr_anio";
$proto16["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_asunto",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto18["m_sql"] = "hr_asunto";
$proto18["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_valor",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto20["m_sql"] = "hr_valor";
$proto20["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_fechaingreso",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto22["m_sql"] = "hr_fechaingreso";
$proto22["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto24["m_sql"] = "sys_user";
$proto24["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_fecha_reg",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto26["m_sql"] = "sys_fecha_reg";
$proto26["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "not_mail",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto28["m_sql"] = "not_mail";
$proto28["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "evento_type_id_fk",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto30["m_sql"] = "evento_type_id_fk";
$proto30["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "evento_type_id_fk",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto32["m_sql"] = "evento_type_id_fk";
$proto32["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "etapa";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "user_from",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto34["m_sql"] = "user_from";
$proto34["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "tercero_email",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto36["m_sql"] = "tercero_email";
$proto36["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "last_act_user",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto38["m_sql"] = "last_act_user";
$proto38["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "cxc_id_fk",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto40["m_sql"] = "cxc_id_fk";
$proto40["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "sysdate",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto42["m_sql"] = "`sysdate`";
$proto42["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "supervisor_email",
	"m_strTable" => "hoja_ruta_2020",
	"m_srcTableName" => "hoja_ruta_2020_trpn"
));

$proto44["m_sql"] = "supervisor_email";
$proto44["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "hoja_ruta_2020";
$proto47["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "anio";
$proto47["m_columns"][] = "cont_num";
$proto47["m_columns"][] = "ctrlpagos_id_fk";
$proto47["m_columns"][] = "cxc_id_fk";
$proto47["m_columns"][] = "evento_type_id_fk";
$proto47["m_columns"][] = "hr_anio";
$proto47["m_columns"][] = "hr_aprob_estado";
$proto47["m_columns"][] = "hr_aprob_fecha";
$proto47["m_columns"][] = "hr_aprob_user";
$proto47["m_columns"][] = "hr_asunto";
$proto47["m_columns"][] = "hr_concepto_id";
$proto47["m_columns"][] = "hr_estado_fecha";
$proto47["m_columns"][] = "hr_estado_file";
$proto47["m_columns"][] = "hr_estado_firma";
$proto47["m_columns"][] = "hr_estado_numero";
$proto47["m_columns"][] = "hr_estado_user";
$proto47["m_columns"][] = "hr_fecha_salida";
$proto47["m_columns"][] = "hr_fechaingreso";
$proto47["m_columns"][] = "hr_file";
$proto47["m_columns"][] = "hr_id";
$proto47["m_columns"][] = "hr_nit_contra_ta";
$proto47["m_columns"][] = "hr_valor";
$proto47["m_columns"][] = "id_cont_fk";
$proto47["m_columns"][] = "id_informe_fk";
$proto47["m_columns"][] = "last_act_user";
$proto47["m_columns"][] = "mes";
$proto47["m_columns"][] = "not_date";
$proto47["m_columns"][] = "not_mail";
$proto47["m_columns"][] = "not_msg";
$proto47["m_columns"][] = "not_status";
$proto47["m_columns"][] = "not_time";
$proto47["m_columns"][] = "not_user";
$proto47["m_columns"][] = "obligacion";
$proto47["m_columns"][] = "periodo_id";
$proto47["m_columns"][] = "supervisor_email";
$proto47["m_columns"][] = "sys_dep";
$proto47["m_columns"][] = "sys_fecha_reg";
$proto47["m_columns"][] = "sys_sup";
$proto47["m_columns"][] = "sys_user";
$proto47["m_columns"][] = "sys_user_actual";
$proto47["m_columns"][] = "sysdate";
$proto47["m_columns"][] = "tercero_email";
$proto47["m_columns"][] = "tercero_email_a";
$proto47["m_columns"][] = "tercero_email_b";
$proto47["m_columns"][] = "user_from";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "hoja_ruta_2020";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "hoja_ruta_2020_trpn";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hoja_ruta_2020_trpn";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hoja_ruta_2020_trpn = createSqlQuery_hoja_ruta_2020_trpn();


	
								;

																				

$tdatahoja_ruta_2020_trpn[".sqlquery"] = $queryData_hoja_ruta_2020_trpn;



include_once(getabspath("include/hoja_ruta_2020_trpn_events.php"));
$tdatahoja_ruta_2020_trpn[".hasEvents"] = true;

?>