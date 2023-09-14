<?php
$tdataq_divipola = array();
$tdataq_divipola[".searchableFields"] = array();
$tdataq_divipola[".ShortName"] = "q_divipola";
$tdataq_divipola[".OwnerID"] = "";
$tdataq_divipola[".OriginalTable"] = "q_divipola";


$tdataq_divipola[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdataq_divipola[".originalPagesByType"] = $tdataq_divipola[".pagesByType"];
$tdataq_divipola[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdataq_divipola[".originalPages"] = $tdataq_divipola[".pages"];
$tdataq_divipola[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdataq_divipola[".originalDefaultPages"] = $tdataq_divipola[".defaultPages"];

//	field labels
$fieldLabelsq_divipola = array();
$fieldToolTipsq_divipola = array();
$pageTitlesq_divipola = array();
$placeHoldersq_divipola = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_divipola["Spanish"] = array();
	$fieldToolTipsq_divipola["Spanish"] = array();
	$placeHoldersq_divipola["Spanish"] = array();
	$pageTitlesq_divipola["Spanish"] = array();
	$fieldLabelsq_divipola["Spanish"]["CODDPTO"] = "CODDPTO";
	$fieldToolTipsq_divipola["Spanish"]["CODDPTO"] = "";
	$placeHoldersq_divipola["Spanish"]["CODDPTO"] = "";
	$fieldLabelsq_divipola["Spanish"]["CODMUN"] = "CODMUN";
	$fieldToolTipsq_divipola["Spanish"]["CODMUN"] = "";
	$placeHoldersq_divipola["Spanish"]["CODMUN"] = "";
	$fieldLabelsq_divipola["Spanish"]["NOMDPTO"] = "NOMDPTO";
	$fieldToolTipsq_divipola["Spanish"]["NOMDPTO"] = "";
	$placeHoldersq_divipola["Spanish"]["NOMDPTO"] = "";
	$fieldLabelsq_divipola["Spanish"]["NOMMUNICIPIO"] = "NOMMUNICIPIO";
	$fieldToolTipsq_divipola["Spanish"]["NOMMUNICIPIO"] = "";
	$placeHoldersq_divipola["Spanish"]["NOMMUNICIPIO"] = "";
	$fieldLabelsq_divipola["Spanish"]["TIPOCENTPOBLADO"] = "TIPOCENTPOBLADO";
	$fieldToolTipsq_divipola["Spanish"]["TIPOCENTPOBLADO"] = "";
	$placeHoldersq_divipola["Spanish"]["TIPOCENTPOBLADO"] = "";
	$fieldLabelsq_divipola["Spanish"]["LON"] = "LON";
	$fieldToolTipsq_divipola["Spanish"]["LON"] = "";
	$placeHoldersq_divipola["Spanish"]["LON"] = "";
	$fieldLabelsq_divipola["Spanish"]["LAT"] = "LAT";
	$fieldToolTipsq_divipola["Spanish"]["LAT"] = "";
	$placeHoldersq_divipola["Spanish"]["LAT"] = "";
	if (count($fieldToolTipsq_divipola["Spanish"]))
		$tdataq_divipola[".isUseToolTips"] = true;
}


	$tdataq_divipola[".NCSearch"] = true;



$tdataq_divipola[".shortTableName"] = "q_divipola";
$tdataq_divipola[".nSecOptions"] = 0;

$tdataq_divipola[".mainTableOwnerID"] = "";
$tdataq_divipola[".entityType"] = 0;
$tdataq_divipola[".connId"] = "dbusers_at_127_0_0_1";


$tdataq_divipola[".strOriginalTableName"] = "q_divipola";

	



$tdataq_divipola[".showAddInPopup"] = false;

$tdataq_divipola[".showEditInPopup"] = false;

$tdataq_divipola[".showViewInPopup"] = false;

$tdataq_divipola[".listAjax"] = false;
//	temporary
//$tdataq_divipola[".listAjax"] = false;

	$tdataq_divipola[".audit"] = true;

	$tdataq_divipola[".locking"] = true;


$pages = $tdataq_divipola[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_divipola[".edit"] = true;
	$tdataq_divipola[".afterEditAction"] = 1;
	$tdataq_divipola[".closePopupAfterEdit"] = 1;
	$tdataq_divipola[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_divipola[".add"] = true;
$tdataq_divipola[".afterAddAction"] = 1;
$tdataq_divipola[".closePopupAfterAdd"] = 1;
$tdataq_divipola[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_divipola[".list"] = true;
}



$tdataq_divipola[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_divipola[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_divipola[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_divipola[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_divipola[".printFriendly"] = true;
}



$tdataq_divipola[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_divipola[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_divipola[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_divipola[".isUseAjaxSuggest"] = true;



												

$tdataq_divipola[".ajaxCodeSnippetAdded"] = false;

$tdataq_divipola[".buttonsAdded"] = false;

$tdataq_divipola[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_divipola[".isUseTimeForSearch"] = false;


$tdataq_divipola[".badgeColor"] = "8FBC8B";


$tdataq_divipola[".allSearchFields"] = array();
$tdataq_divipola[".filterFields"] = array();
$tdataq_divipola[".requiredSearchFields"] = array();

$tdataq_divipola[".googleLikeFields"] = array();
$tdataq_divipola[".googleLikeFields"][] = "CODDPTO";
$tdataq_divipola[".googleLikeFields"][] = "CODMUN";
$tdataq_divipola[".googleLikeFields"][] = "LAT";
$tdataq_divipola[".googleLikeFields"][] = "LON";
$tdataq_divipola[".googleLikeFields"][] = "NOMDPTO";
$tdataq_divipola[".googleLikeFields"][] = "NOMMUNICIPIO";
$tdataq_divipola[".googleLikeFields"][] = "TIPOCENTPOBLADO";



$tdataq_divipola[".tableType"] = "list";

$tdataq_divipola[".printerPageOrientation"] = 0;
$tdataq_divipola[".nPrinterPageScale"] = 100;

$tdataq_divipola[".nPrinterSplitRecords"] = 40;

$tdataq_divipola[".geocodingEnabled"] = false;










$tdataq_divipola[".pageSize"] = 20;

$tdataq_divipola[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_divipola[".strOrderBy"] = $tstrOrderBy;

$tdataq_divipola[".orderindexes"] = array();


$tdataq_divipola[".sqlHead"] = "SELECT CODDPTO,  	CODMUN,  	LAT,  	LON,  	NOMDPTO,  	NOMMUNICIPIO,  	TIPOCENTPOBLADO";
$tdataq_divipola[".sqlFrom"] = "FROM q_divipola";
$tdataq_divipola[".sqlWhereExpr"] = "";
$tdataq_divipola[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_divipola[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_divipola[".arrGroupsPerPage"] = $arrGPP;

$tdataq_divipola[".highlightSearchResults"] = true;

$tableKeysq_divipola = array();
$tdataq_divipola[".Keys"] = $tableKeysq_divipola;


$tdataq_divipola[".hideMobileList"] = array();




//	CODDPTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CODDPTO";
	$fdata["GoodName"] = "CODDPTO";
	$fdata["ownerTable"] = "q_divipola";
	$fdata["Label"] = GetFieldLabel("q_divipola","CODDPTO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CODDPTO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CODDPTO";

	
	
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


	$tdataq_divipola["CODDPTO"] = $fdata;
		$tdataq_divipola[".searchableFields"][] = "CODDPTO";
//	CODMUN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CODMUN";
	$fdata["GoodName"] = "CODMUN";
	$fdata["ownerTable"] = "q_divipola";
	$fdata["Label"] = GetFieldLabel("q_divipola","CODMUN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CODMUN";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CODMUN";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdataq_divipola["CODMUN"] = $fdata;
		$tdataq_divipola[".searchableFields"][] = "CODMUN";
//	LAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LAT";
	$fdata["GoodName"] = "LAT";
	$fdata["ownerTable"] = "q_divipola";
	$fdata["Label"] = GetFieldLabel("q_divipola","LAT");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "LAT";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAT";

	
	
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


	$tdataq_divipola["LAT"] = $fdata;
		$tdataq_divipola[".searchableFields"][] = "LAT";
//	LON
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LON";
	$fdata["GoodName"] = "LON";
	$fdata["ownerTable"] = "q_divipola";
	$fdata["Label"] = GetFieldLabel("q_divipola","LON");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "LON";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LON";

	
	
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


	$tdataq_divipola["LON"] = $fdata;
		$tdataq_divipola[".searchableFields"][] = "LON";
//	NOMDPTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "NOMDPTO";
	$fdata["GoodName"] = "NOMDPTO";
	$fdata["ownerTable"] = "q_divipola";
	$fdata["Label"] = GetFieldLabel("q_divipola","NOMDPTO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NOMDPTO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMDPTO";

	
	
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


	$tdataq_divipola["NOMDPTO"] = $fdata;
		$tdataq_divipola[".searchableFields"][] = "NOMDPTO";
//	NOMMUNICIPIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NOMMUNICIPIO";
	$fdata["GoodName"] = "NOMMUNICIPIO";
	$fdata["ownerTable"] = "q_divipola";
	$fdata["Label"] = GetFieldLabel("q_divipola","NOMMUNICIPIO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NOMMUNICIPIO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMMUNICIPIO";

	
	
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


	$tdataq_divipola["NOMMUNICIPIO"] = $fdata;
		$tdataq_divipola[".searchableFields"][] = "NOMMUNICIPIO";
//	TIPOCENTPOBLADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TIPOCENTPOBLADO";
	$fdata["GoodName"] = "TIPOCENTPOBLADO";
	$fdata["ownerTable"] = "q_divipola";
	$fdata["Label"] = GetFieldLabel("q_divipola","TIPOCENTPOBLADO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TIPOCENTPOBLADO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPOCENTPOBLADO";

	
	
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


	$tdataq_divipola["TIPOCENTPOBLADO"] = $fdata;
		$tdataq_divipola[".searchableFields"][] = "TIPOCENTPOBLADO";


$tables_data["q_divipola"]=&$tdataq_divipola;
$field_labels["q_divipola"] = &$fieldLabelsq_divipola;
$fieldToolTips["q_divipola"] = &$fieldToolTipsq_divipola;
$placeHolders["q_divipola"] = &$placeHoldersq_divipola;
$page_titles["q_divipola"] = &$pageTitlesq_divipola;


changeTextControlsToDate( "q_divipola" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_divipola"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_divipola"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_divipola()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CODDPTO,  	CODMUN,  	LAT,  	LON,  	NOMDPTO,  	NOMMUNICIPIO,  	TIPOCENTPOBLADO";
$proto0["m_strFrom"] = "FROM q_divipola";
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
	"m_strName" => "CODDPTO",
	"m_strTable" => "q_divipola",
	"m_srcTableName" => "q_divipola"
));

$proto6["m_sql"] = "CODDPTO";
$proto6["m_srcTableName"] = "q_divipola";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CODMUN",
	"m_strTable" => "q_divipola",
	"m_srcTableName" => "q_divipola"
));

$proto8["m_sql"] = "CODMUN";
$proto8["m_srcTableName"] = "q_divipola";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LAT",
	"m_strTable" => "q_divipola",
	"m_srcTableName" => "q_divipola"
));

$proto10["m_sql"] = "LAT";
$proto10["m_srcTableName"] = "q_divipola";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "LON",
	"m_strTable" => "q_divipola",
	"m_srcTableName" => "q_divipola"
));

$proto12["m_sql"] = "LON";
$proto12["m_srcTableName"] = "q_divipola";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMDPTO",
	"m_strTable" => "q_divipola",
	"m_srcTableName" => "q_divipola"
));

$proto14["m_sql"] = "NOMDPTO";
$proto14["m_srcTableName"] = "q_divipola";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMMUNICIPIO",
	"m_strTable" => "q_divipola",
	"m_srcTableName" => "q_divipola"
));

$proto16["m_sql"] = "NOMMUNICIPIO";
$proto16["m_srcTableName"] = "q_divipola";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPOCENTPOBLADO",
	"m_strTable" => "q_divipola",
	"m_srcTableName" => "q_divipola"
));

$proto18["m_sql"] = "TIPOCENTPOBLADO";
$proto18["m_srcTableName"] = "q_divipola";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "q_divipola";
$proto21["m_srcTableName"] = "q_divipola";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "CODDPTO";
$proto21["m_columns"][] = "CODMUN";
$proto21["m_columns"][] = "LAT";
$proto21["m_columns"][] = "LON";
$proto21["m_columns"][] = "NOMDPTO";
$proto21["m_columns"][] = "NOMMUNICIPIO";
$proto21["m_columns"][] = "TIPOCENTPOBLADO";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "q_divipola";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "q_divipola";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_divipola";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_divipola = createSqlQuery_q_divipola();


	
								;

							

$tdataq_divipola[".sqlquery"] = $queryData_q_divipola;



$tdataq_divipola[".hasEvents"] = false;

?>