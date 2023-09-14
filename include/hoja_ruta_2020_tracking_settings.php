<?php
$tdatahoja_ruta_2020_tracking = array();
$tdatahoja_ruta_2020_tracking[".searchableFields"] = array();
$tdatahoja_ruta_2020_tracking[".ShortName"] = "hoja_ruta_2020_tracking";
$tdatahoja_ruta_2020_tracking[".OwnerID"] = "";
$tdatahoja_ruta_2020_tracking[".OriginalTable"] = "hoja_ruta_2020_tracking";


$tdatahoja_ruta_2020_tracking[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahoja_ruta_2020_tracking[".originalPagesByType"] = $tdatahoja_ruta_2020_tracking[".pagesByType"];
$tdatahoja_ruta_2020_tracking[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahoja_ruta_2020_tracking[".originalPages"] = $tdatahoja_ruta_2020_tracking[".pages"];
$tdatahoja_ruta_2020_tracking[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahoja_ruta_2020_tracking[".originalDefaultPages"] = $tdatahoja_ruta_2020_tracking[".defaultPages"];

//	field labels
$fieldLabelshoja_ruta_2020_tracking = array();
$fieldToolTipshoja_ruta_2020_tracking = array();
$pageTitleshoja_ruta_2020_tracking = array();
$placeHoldershoja_ruta_2020_tracking = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshoja_ruta_2020_tracking["Spanish"] = array();
	$fieldToolTipshoja_ruta_2020_tracking["Spanish"] = array();
	$placeHoldershoja_ruta_2020_tracking["Spanish"] = array();
	$pageTitleshoja_ruta_2020_tracking["Spanish"] = array();
	$fieldLabelshoja_ruta_2020_tracking["Spanish"]["hist_hr_id"] = "Hist Hr Id";
	$fieldToolTipshoja_ruta_2020_tracking["Spanish"]["hist_hr_id"] = "";
	$placeHoldershoja_ruta_2020_tracking["Spanish"]["hist_hr_id"] = "";
	$fieldLabelshoja_ruta_2020_tracking["Spanish"]["hr_id_fk"] = "Hr Id Fk";
	$fieldToolTipshoja_ruta_2020_tracking["Spanish"]["hr_id_fk"] = "";
	$placeHoldershoja_ruta_2020_tracking["Spanish"]["hr_id_fk"] = "";
	$fieldLabelshoja_ruta_2020_tracking["Spanish"]["hr_asunto"] = "Asunto";
	$fieldToolTipshoja_ruta_2020_tracking["Spanish"]["hr_asunto"] = "";
	$placeHoldershoja_ruta_2020_tracking["Spanish"]["hr_asunto"] = "";
	$fieldLabelshoja_ruta_2020_tracking["Spanish"]["hr_valor"] = "Valor";
	$fieldToolTipshoja_ruta_2020_tracking["Spanish"]["hr_valor"] = "";
	$placeHoldershoja_ruta_2020_tracking["Spanish"]["hr_valor"] = "";
	$fieldLabelshoja_ruta_2020_tracking["Spanish"]["hr_fechaingreso"] = "Fecha";
	$fieldToolTipshoja_ruta_2020_tracking["Spanish"]["hr_fechaingreso"] = "";
	$placeHoldershoja_ruta_2020_tracking["Spanish"]["hr_fechaingreso"] = "";
	$fieldLabelshoja_ruta_2020_tracking["Spanish"]["sys_user"] = "Usuario";
	$fieldToolTipshoja_ruta_2020_tracking["Spanish"]["sys_user"] = "";
	$placeHoldershoja_ruta_2020_tracking["Spanish"]["sys_user"] = "";
	$fieldLabelshoja_ruta_2020_tracking["Spanish"]["sysdate"] = "Fecha";
	$fieldToolTipshoja_ruta_2020_tracking["Spanish"]["sysdate"] = "";
	$placeHoldershoja_ruta_2020_tracking["Spanish"]["sysdate"] = "";
	$fieldLabelshoja_ruta_2020_tracking["Spanish"]["not_msg"] = "Comentario";
	$fieldToolTipshoja_ruta_2020_tracking["Spanish"]["not_msg"] = "";
	$placeHoldershoja_ruta_2020_tracking["Spanish"]["not_msg"] = "";
	$fieldLabelshoja_ruta_2020_tracking["Spanish"]["evento_type_id_fk"] = "Actividad";
	$fieldToolTipshoja_ruta_2020_tracking["Spanish"]["evento_type_id_fk"] = "";
	$placeHoldershoja_ruta_2020_tracking["Spanish"]["evento_type_id_fk"] = "";
	if (count($fieldToolTipshoja_ruta_2020_tracking["Spanish"]))
		$tdatahoja_ruta_2020_tracking[".isUseToolTips"] = true;
}


	$tdatahoja_ruta_2020_tracking[".NCSearch"] = true;



$tdatahoja_ruta_2020_tracking[".shortTableName"] = "hoja_ruta_2020_tracking";
$tdatahoja_ruta_2020_tracking[".nSecOptions"] = 0;

$tdatahoja_ruta_2020_tracking[".mainTableOwnerID"] = "";
$tdatahoja_ruta_2020_tracking[".entityType"] = 0;
$tdatahoja_ruta_2020_tracking[".connId"] = "dbct_at_localhost";


$tdatahoja_ruta_2020_tracking[".strOriginalTableName"] = "hoja_ruta_2020_tracking";

	



$tdatahoja_ruta_2020_tracking[".showAddInPopup"] = false;

$tdatahoja_ruta_2020_tracking[".showEditInPopup"] = false;

$tdatahoja_ruta_2020_tracking[".showViewInPopup"] = false;

$tdatahoja_ruta_2020_tracking[".listAjax"] = false;
//	temporary
//$tdatahoja_ruta_2020_tracking[".listAjax"] = false;

	$tdatahoja_ruta_2020_tracking[".audit"] = false;

	$tdatahoja_ruta_2020_tracking[".locking"] = false;


$pages = $tdatahoja_ruta_2020_tracking[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahoja_ruta_2020_tracking[".edit"] = true;
	$tdatahoja_ruta_2020_tracking[".afterEditAction"] = 1;
	$tdatahoja_ruta_2020_tracking[".closePopupAfterEdit"] = 1;
	$tdatahoja_ruta_2020_tracking[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahoja_ruta_2020_tracking[".add"] = true;
$tdatahoja_ruta_2020_tracking[".afterAddAction"] = 1;
$tdatahoja_ruta_2020_tracking[".closePopupAfterAdd"] = 1;
$tdatahoja_ruta_2020_tracking[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahoja_ruta_2020_tracking[".list"] = true;
}



$tdatahoja_ruta_2020_tracking[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahoja_ruta_2020_tracking[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahoja_ruta_2020_tracking[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahoja_ruta_2020_tracking[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahoja_ruta_2020_tracking[".printFriendly"] = true;
}



$tdatahoja_ruta_2020_tracking[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahoja_ruta_2020_tracking[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahoja_ruta_2020_tracking[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahoja_ruta_2020_tracking[".isUseAjaxSuggest"] = true;



																																				

$tdatahoja_ruta_2020_tracking[".ajaxCodeSnippetAdded"] = false;

$tdatahoja_ruta_2020_tracking[".buttonsAdded"] = false;

$tdatahoja_ruta_2020_tracking[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahoja_ruta_2020_tracking[".isUseTimeForSearch"] = false;


$tdatahoja_ruta_2020_tracking[".badgeColor"] = "9acd32";


$tdatahoja_ruta_2020_tracking[".allSearchFields"] = array();
$tdatahoja_ruta_2020_tracking[".filterFields"] = array();
$tdatahoja_ruta_2020_tracking[".requiredSearchFields"] = array();

$tdatahoja_ruta_2020_tracking[".googleLikeFields"] = array();
$tdatahoja_ruta_2020_tracking[".googleLikeFields"][] = "hist_hr_id";
$tdatahoja_ruta_2020_tracking[".googleLikeFields"][] = "hr_id_fk";
$tdatahoja_ruta_2020_tracking[".googleLikeFields"][] = "hr_asunto";
$tdatahoja_ruta_2020_tracking[".googleLikeFields"][] = "hr_valor";
$tdatahoja_ruta_2020_tracking[".googleLikeFields"][] = "hr_fechaingreso";
$tdatahoja_ruta_2020_tracking[".googleLikeFields"][] = "sys_user";
$tdatahoja_ruta_2020_tracking[".googleLikeFields"][] = "sysdate";
$tdatahoja_ruta_2020_tracking[".googleLikeFields"][] = "not_msg";
$tdatahoja_ruta_2020_tracking[".googleLikeFields"][] = "evento_type_id_fk";



$tdatahoja_ruta_2020_tracking[".tableType"] = "list";

$tdatahoja_ruta_2020_tracking[".printerPageOrientation"] = 0;
$tdatahoja_ruta_2020_tracking[".nPrinterPageScale"] = 100;

$tdatahoja_ruta_2020_tracking[".nPrinterSplitRecords"] = 40;

$tdatahoja_ruta_2020_tracking[".geocodingEnabled"] = false;










$tdatahoja_ruta_2020_tracking[".pageSize"] = 20;

$tdatahoja_ruta_2020_tracking[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahoja_ruta_2020_tracking[".strOrderBy"] = $tstrOrderBy;

$tdatahoja_ruta_2020_tracking[".orderindexes"] = array();


$tdatahoja_ruta_2020_tracking[".sqlHead"] = "SELECT hist_hr_id,  hr_id_fk,  hr_asunto,  hr_valor,  hr_fechaingreso,  sys_user,  `sysdate`,  not_msg,  evento_type_id_fk";
$tdatahoja_ruta_2020_tracking[".sqlFrom"] = "FROM hoja_ruta_2020_tracking";
$tdatahoja_ruta_2020_tracking[".sqlWhereExpr"] = "";
$tdatahoja_ruta_2020_tracking[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahoja_ruta_2020_tracking[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahoja_ruta_2020_tracking[".arrGroupsPerPage"] = $arrGPP;

$tdatahoja_ruta_2020_tracking[".highlightSearchResults"] = true;

$tableKeyshoja_ruta_2020_tracking = array();
$tableKeyshoja_ruta_2020_tracking[] = "hist_hr_id";
$tdatahoja_ruta_2020_tracking[".Keys"] = $tableKeyshoja_ruta_2020_tracking;


$tdatahoja_ruta_2020_tracking[".hideMobileList"] = array();




//	hist_hr_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "hist_hr_id";
	$fdata["GoodName"] = "hist_hr_id";
	$fdata["ownerTable"] = "hoja_ruta_2020_tracking";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_tracking","hist_hr_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "hist_hr_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hist_hr_id";

	
	
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


	$tdatahoja_ruta_2020_tracking["hist_hr_id"] = $fdata;
		$tdatahoja_ruta_2020_tracking[".searchableFields"][] = "hist_hr_id";
//	hr_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "hr_id_fk";
	$fdata["GoodName"] = "hr_id_fk";
	$fdata["ownerTable"] = "hoja_ruta_2020_tracking";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_tracking","hr_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "hr_id_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_id_fk";

	
	
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


	$tdatahoja_ruta_2020_tracking["hr_id_fk"] = $fdata;
		$tdatahoja_ruta_2020_tracking[".searchableFields"][] = "hr_id_fk";
//	hr_asunto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "hr_asunto";
	$fdata["GoodName"] = "hr_asunto";
	$fdata["ownerTable"] = "hoja_ruta_2020_tracking";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_tracking","hr_asunto");
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


	$tdatahoja_ruta_2020_tracking["hr_asunto"] = $fdata;
		$tdatahoja_ruta_2020_tracking[".searchableFields"][] = "hr_asunto";
//	hr_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "hr_valor";
	$fdata["GoodName"] = "hr_valor";
	$fdata["ownerTable"] = "hoja_ruta_2020_tracking";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_tracking","hr_valor");
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


	$tdatahoja_ruta_2020_tracking["hr_valor"] = $fdata;
		$tdatahoja_ruta_2020_tracking[".searchableFields"][] = "hr_valor";
//	hr_fechaingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "hr_fechaingreso";
	$fdata["GoodName"] = "hr_fechaingreso";
	$fdata["ownerTable"] = "hoja_ruta_2020_tracking";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_tracking","hr_fechaingreso");
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


	$tdatahoja_ruta_2020_tracking["hr_fechaingreso"] = $fdata;
		$tdatahoja_ruta_2020_tracking[".searchableFields"][] = "hr_fechaingreso";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "hoja_ruta_2020_tracking";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_tracking","sys_user");
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatahoja_ruta_2020_tracking["sys_user"] = $fdata;
		$tdatahoja_ruta_2020_tracking[".searchableFields"][] = "sys_user";
//	sysdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sysdate";
	$fdata["GoodName"] = "sysdate";
	$fdata["ownerTable"] = "hoja_ruta_2020_tracking";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_tracking","sysdate");
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


	$tdatahoja_ruta_2020_tracking["sysdate"] = $fdata;
		$tdatahoja_ruta_2020_tracking[".searchableFields"][] = "sysdate";
//	not_msg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "not_msg";
	$fdata["GoodName"] = "not_msg";
	$fdata["ownerTable"] = "hoja_ruta_2020_tracking";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_tracking","not_msg");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "not_msg";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "not_msg";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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
			$edata["EditParams"].= " maxlength=800";

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


	$tdatahoja_ruta_2020_tracking["not_msg"] = $fdata;
		$tdatahoja_ruta_2020_tracking[".searchableFields"][] = "not_msg";
//	evento_type_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "evento_type_id_fk";
	$fdata["GoodName"] = "evento_type_id_fk";
	$fdata["ownerTable"] = "hoja_ruta_2020_tracking";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_tracking","evento_type_id_fk");
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


	$tdatahoja_ruta_2020_tracking["evento_type_id_fk"] = $fdata;
		$tdatahoja_ruta_2020_tracking[".searchableFields"][] = "evento_type_id_fk";


$tables_data["hoja_ruta_2020_tracking"]=&$tdatahoja_ruta_2020_tracking;
$field_labels["hoja_ruta_2020_tracking"] = &$fieldLabelshoja_ruta_2020_tracking;
$fieldToolTips["hoja_ruta_2020_tracking"] = &$fieldToolTipshoja_ruta_2020_tracking;
$placeHolders["hoja_ruta_2020_tracking"] = &$placeHoldershoja_ruta_2020_tracking;
$page_titles["hoja_ruta_2020_tracking"] = &$pageTitleshoja_ruta_2020_tracking;


changeTextControlsToDate( "hoja_ruta_2020_tracking" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hoja_ruta_2020_tracking"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hoja_ruta_2020_tracking"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_trpn";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_trpn";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hoja_ruta_2020_tracking"][0] = $masterParams;
				$masterTablesData["hoja_ruta_2020_tracking"][0]["masterKeys"] = array();
	$masterTablesData["hoja_ruta_2020_tracking"][0]["masterKeys"][]="hr_id";
				$masterTablesData["hoja_ruta_2020_tracking"][0]["detailKeys"] = array();
	$masterTablesData["hoja_ruta_2020_tracking"][0]["detailKeys"][]="hr_id_fk";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_trpn_jur";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_trpn_jur";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hoja_ruta_2020_tracking"][1] = $masterParams;
				$masterTablesData["hoja_ruta_2020_tracking"][1]["masterKeys"] = array();
	$masterTablesData["hoja_ruta_2020_tracking"][1]["masterKeys"][]="hr_id";
				$masterTablesData["hoja_ruta_2020_tracking"][1]["detailKeys"] = array();
	$masterTablesData["hoja_ruta_2020_tracking"][1]["detailKeys"][]="hr_id_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hoja_ruta_2020_tracking()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "hist_hr_id,  hr_id_fk,  hr_asunto,  hr_valor,  hr_fechaingreso,  sys_user,  `sysdate`,  not_msg,  evento_type_id_fk";
$proto0["m_strFrom"] = "FROM hoja_ruta_2020_tracking";
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
	"m_strName" => "hist_hr_id",
	"m_strTable" => "hoja_ruta_2020_tracking",
	"m_srcTableName" => "hoja_ruta_2020_tracking"
));

$proto6["m_sql"] = "hist_hr_id";
$proto6["m_srcTableName"] = "hoja_ruta_2020_tracking";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_id_fk",
	"m_strTable" => "hoja_ruta_2020_tracking",
	"m_srcTableName" => "hoja_ruta_2020_tracking"
));

$proto8["m_sql"] = "hr_id_fk";
$proto8["m_srcTableName"] = "hoja_ruta_2020_tracking";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_asunto",
	"m_strTable" => "hoja_ruta_2020_tracking",
	"m_srcTableName" => "hoja_ruta_2020_tracking"
));

$proto10["m_sql"] = "hr_asunto";
$proto10["m_srcTableName"] = "hoja_ruta_2020_tracking";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_valor",
	"m_strTable" => "hoja_ruta_2020_tracking",
	"m_srcTableName" => "hoja_ruta_2020_tracking"
));

$proto12["m_sql"] = "hr_valor";
$proto12["m_srcTableName"] = "hoja_ruta_2020_tracking";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_fechaingreso",
	"m_strTable" => "hoja_ruta_2020_tracking",
	"m_srcTableName" => "hoja_ruta_2020_tracking"
));

$proto14["m_sql"] = "hr_fechaingreso";
$proto14["m_srcTableName"] = "hoja_ruta_2020_tracking";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "hoja_ruta_2020_tracking",
	"m_srcTableName" => "hoja_ruta_2020_tracking"
));

$proto16["m_sql"] = "sys_user";
$proto16["m_srcTableName"] = "hoja_ruta_2020_tracking";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sysdate",
	"m_strTable" => "hoja_ruta_2020_tracking",
	"m_srcTableName" => "hoja_ruta_2020_tracking"
));

$proto18["m_sql"] = "`sysdate`";
$proto18["m_srcTableName"] = "hoja_ruta_2020_tracking";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "not_msg",
	"m_strTable" => "hoja_ruta_2020_tracking",
	"m_srcTableName" => "hoja_ruta_2020_tracking"
));

$proto20["m_sql"] = "not_msg";
$proto20["m_srcTableName"] = "hoja_ruta_2020_tracking";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "evento_type_id_fk",
	"m_strTable" => "hoja_ruta_2020_tracking",
	"m_srcTableName" => "hoja_ruta_2020_tracking"
));

$proto22["m_sql"] = "evento_type_id_fk";
$proto22["m_srcTableName"] = "hoja_ruta_2020_tracking";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "hoja_ruta_2020_tracking";
$proto25["m_srcTableName"] = "hoja_ruta_2020_tracking";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "evento_type_id_fk";
$proto25["m_columns"][] = "hist_hr_id";
$proto25["m_columns"][] = "hr_asunto";
$proto25["m_columns"][] = "hr_fechaingreso";
$proto25["m_columns"][] = "hr_id_fk";
$proto25["m_columns"][] = "hr_valor";
$proto25["m_columns"][] = "last_act_user";
$proto25["m_columns"][] = "not_date";
$proto25["m_columns"][] = "not_mail";
$proto25["m_columns"][] = "not_msg";
$proto25["m_columns"][] = "not_user";
$proto25["m_columns"][] = "sys_user";
$proto25["m_columns"][] = "sysdate";
$proto25["m_columns"][] = "tercero_email";
$proto25["m_columns"][] = "user_from";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "hoja_ruta_2020_tracking";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "hoja_ruta_2020_tracking";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hoja_ruta_2020_tracking";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hoja_ruta_2020_tracking = createSqlQuery_hoja_ruta_2020_tracking();


	
								;

									

$tdatahoja_ruta_2020_tracking[".sqlquery"] = $queryData_hoja_ruta_2020_tracking;



$tdatahoja_ruta_2020_tracking[".hasEvents"] = false;

?>