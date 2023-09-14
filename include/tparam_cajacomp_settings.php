<?php
$tdatatparam_cajacomp = array();
$tdatatparam_cajacomp[".searchableFields"] = array();
$tdatatparam_cajacomp[".ShortName"] = "tparam_cajacomp";
$tdatatparam_cajacomp[".OwnerID"] = "";
$tdatatparam_cajacomp[".OriginalTable"] = "tparam_cajacomp";


$tdatatparam_cajacomp[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatparam_cajacomp[".originalPagesByType"] = $tdatatparam_cajacomp[".pagesByType"];
$tdatatparam_cajacomp[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatparam_cajacomp[".originalPages"] = $tdatatparam_cajacomp[".pages"];
$tdatatparam_cajacomp[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatparam_cajacomp[".originalDefaultPages"] = $tdatatparam_cajacomp[".defaultPages"];

//	field labels
$fieldLabelstparam_cajacomp = array();
$fieldToolTipstparam_cajacomp = array();
$pageTitlestparam_cajacomp = array();
$placeHolderstparam_cajacomp = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_cajacomp["Spanish"] = array();
	$fieldToolTipstparam_cajacomp["Spanish"] = array();
	$placeHolderstparam_cajacomp["Spanish"] = array();
	$pageTitlestparam_cajacomp["Spanish"] = array();
	$fieldLabelstparam_cajacomp["Spanish"]["caj_cdcajcom_b"] = "Caj Cdcajcom B";
	$fieldToolTipstparam_cajacomp["Spanish"]["caj_cdcajcom_b"] = "";
	$placeHolderstparam_cajacomp["Spanish"]["caj_cdcajcom_b"] = "";
	$fieldLabelstparam_cajacomp["Spanish"]["caj_dscajcom_b"] = "Caj Dscajcom B";
	$fieldToolTipstparam_cajacomp["Spanish"]["caj_dscajcom_b"] = "";
	$placeHolderstparam_cajacomp["Spanish"]["caj_dscajcom_b"] = "";
	$fieldLabelstparam_cajacomp["Spanish"]["caj_diskette_b"] = "Caj Diskette B";
	$fieldToolTipstparam_cajacomp["Spanish"]["caj_diskette_b"] = "";
	$placeHolderstparam_cajacomp["Spanish"]["caj_diskette_b"] = "";
	$fieldLabelstparam_cajacomp["Spanish"]["caj_listado_b"] = "Caj Listado B";
	$fieldToolTipstparam_cajacomp["Spanish"]["caj_listado_b"] = "";
	$placeHolderstparam_cajacomp["Spanish"]["caj_listado_b"] = "";
	$fieldLabelstparam_cajacomp["Spanish"]["caj_concepto_b"] = "Caj Concepto B";
	$fieldToolTipstparam_cajacomp["Spanish"]["caj_concepto_b"] = "";
	$placeHolderstparam_cajacomp["Spanish"]["caj_concepto_b"] = "";
	if (count($fieldToolTipstparam_cajacomp["Spanish"]))
		$tdatatparam_cajacomp[".isUseToolTips"] = true;
}


	$tdatatparam_cajacomp[".NCSearch"] = true;



$tdatatparam_cajacomp[".shortTableName"] = "tparam_cajacomp";
$tdatatparam_cajacomp[".nSecOptions"] = 0;

$tdatatparam_cajacomp[".mainTableOwnerID"] = "";
$tdatatparam_cajacomp[".entityType"] = 0;
$tdatatparam_cajacomp[".connId"] = "dbct_at_localhost";


$tdatatparam_cajacomp[".strOriginalTableName"] = "tparam_cajacomp";

	



$tdatatparam_cajacomp[".showAddInPopup"] = false;

$tdatatparam_cajacomp[".showEditInPopup"] = false;

$tdatatparam_cajacomp[".showViewInPopup"] = false;

$tdatatparam_cajacomp[".listAjax"] = false;
//	temporary
//$tdatatparam_cajacomp[".listAjax"] = false;

	$tdatatparam_cajacomp[".audit"] = true;

	$tdatatparam_cajacomp[".locking"] = true;


$pages = $tdatatparam_cajacomp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_cajacomp[".edit"] = true;
	$tdatatparam_cajacomp[".afterEditAction"] = 1;
	$tdatatparam_cajacomp[".closePopupAfterEdit"] = 1;
	$tdatatparam_cajacomp[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_cajacomp[".add"] = true;
$tdatatparam_cajacomp[".afterAddAction"] = 1;
$tdatatparam_cajacomp[".closePopupAfterAdd"] = 1;
$tdatatparam_cajacomp[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_cajacomp[".list"] = true;
}



$tdatatparam_cajacomp[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_cajacomp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_cajacomp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_cajacomp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_cajacomp[".printFriendly"] = true;
}



$tdatatparam_cajacomp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_cajacomp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_cajacomp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_cajacomp[".isUseAjaxSuggest"] = true;



												

$tdatatparam_cajacomp[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_cajacomp[".buttonsAdded"] = false;

$tdatatparam_cajacomp[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_cajacomp[".isUseTimeForSearch"] = false;


$tdatatparam_cajacomp[".badgeColor"] = "9ACD32";


$tdatatparam_cajacomp[".allSearchFields"] = array();
$tdatatparam_cajacomp[".filterFields"] = array();
$tdatatparam_cajacomp[".requiredSearchFields"] = array();

$tdatatparam_cajacomp[".googleLikeFields"] = array();
$tdatatparam_cajacomp[".googleLikeFields"][] = "caj_cdcajcom_b";
$tdatatparam_cajacomp[".googleLikeFields"][] = "caj_concepto_b";
$tdatatparam_cajacomp[".googleLikeFields"][] = "caj_diskette_b";
$tdatatparam_cajacomp[".googleLikeFields"][] = "caj_dscajcom_b";
$tdatatparam_cajacomp[".googleLikeFields"][] = "caj_listado_b";



$tdatatparam_cajacomp[".tableType"] = "list";

$tdatatparam_cajacomp[".printerPageOrientation"] = 0;
$tdatatparam_cajacomp[".nPrinterPageScale"] = 100;

$tdatatparam_cajacomp[".nPrinterSplitRecords"] = 40;

$tdatatparam_cajacomp[".geocodingEnabled"] = false;










$tdatatparam_cajacomp[".pageSize"] = 20;

$tdatatparam_cajacomp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_cajacomp[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_cajacomp[".orderindexes"] = array();


$tdatatparam_cajacomp[".sqlHead"] = "SELECT caj_cdcajcom_b,  	caj_concepto_b,  	caj_diskette_b,  	caj_dscajcom_b,  	caj_listado_b";
$tdatatparam_cajacomp[".sqlFrom"] = "FROM tparam_cajacomp";
$tdatatparam_cajacomp[".sqlWhereExpr"] = "";
$tdatatparam_cajacomp[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_cajacomp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_cajacomp[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_cajacomp[".highlightSearchResults"] = true;

$tableKeystparam_cajacomp = array();
$tableKeystparam_cajacomp[] = "caj_cdcajcom_b";
$tdatatparam_cajacomp[".Keys"] = $tableKeystparam_cajacomp;


$tdatatparam_cajacomp[".hideMobileList"] = array();




//	caj_cdcajcom_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "caj_cdcajcom_b";
	$fdata["GoodName"] = "caj_cdcajcom_b";
	$fdata["ownerTable"] = "tparam_cajacomp";
	$fdata["Label"] = GetFieldLabel("tparam_cajacomp","caj_cdcajcom_b");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "caj_cdcajcom_b";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "caj_cdcajcom_b";

	
	
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


	$tdatatparam_cajacomp["caj_cdcajcom_b"] = $fdata;
		$tdatatparam_cajacomp[".searchableFields"][] = "caj_cdcajcom_b";
//	caj_concepto_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "caj_concepto_b";
	$fdata["GoodName"] = "caj_concepto_b";
	$fdata["ownerTable"] = "tparam_cajacomp";
	$fdata["Label"] = GetFieldLabel("tparam_cajacomp","caj_concepto_b");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "caj_concepto_b";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "caj_concepto_b";

	
	
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


	$tdatatparam_cajacomp["caj_concepto_b"] = $fdata;
		$tdatatparam_cajacomp[".searchableFields"][] = "caj_concepto_b";
//	caj_diskette_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "caj_diskette_b";
	$fdata["GoodName"] = "caj_diskette_b";
	$fdata["ownerTable"] = "tparam_cajacomp";
	$fdata["Label"] = GetFieldLabel("tparam_cajacomp","caj_diskette_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "caj_diskette_b";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "caj_diskette_b";

	
	
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
			$edata["EditParams"].= " maxlength=8";

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


	$tdatatparam_cajacomp["caj_diskette_b"] = $fdata;
		$tdatatparam_cajacomp[".searchableFields"][] = "caj_diskette_b";
//	caj_dscajcom_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "caj_dscajcom_b";
	$fdata["GoodName"] = "caj_dscajcom_b";
	$fdata["ownerTable"] = "tparam_cajacomp";
	$fdata["Label"] = GetFieldLabel("tparam_cajacomp","caj_dscajcom_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "caj_dscajcom_b";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "caj_dscajcom_b";

	
	
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


	$tdatatparam_cajacomp["caj_dscajcom_b"] = $fdata;
		$tdatatparam_cajacomp[".searchableFields"][] = "caj_dscajcom_b";
//	caj_listado_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "caj_listado_b";
	$fdata["GoodName"] = "caj_listado_b";
	$fdata["ownerTable"] = "tparam_cajacomp";
	$fdata["Label"] = GetFieldLabel("tparam_cajacomp","caj_listado_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "caj_listado_b";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "caj_listado_b";

	
	
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
			$edata["EditParams"].= " maxlength=8";

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


	$tdatatparam_cajacomp["caj_listado_b"] = $fdata;
		$tdatatparam_cajacomp[".searchableFields"][] = "caj_listado_b";


$tables_data["tparam_cajacomp"]=&$tdatatparam_cajacomp;
$field_labels["tparam_cajacomp"] = &$fieldLabelstparam_cajacomp;
$fieldToolTips["tparam_cajacomp"] = &$fieldToolTipstparam_cajacomp;
$placeHolders["tparam_cajacomp"] = &$placeHolderstparam_cajacomp;
$page_titles["tparam_cajacomp"] = &$pageTitlestparam_cajacomp;


changeTextControlsToDate( "tparam_cajacomp" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_cajacomp"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_cajacomp"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_cajacomp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "caj_cdcajcom_b,  	caj_concepto_b,  	caj_diskette_b,  	caj_dscajcom_b,  	caj_listado_b";
$proto0["m_strFrom"] = "FROM tparam_cajacomp";
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
	"m_strName" => "caj_cdcajcom_b",
	"m_strTable" => "tparam_cajacomp",
	"m_srcTableName" => "tparam_cajacomp"
));

$proto6["m_sql"] = "caj_cdcajcom_b";
$proto6["m_srcTableName"] = "tparam_cajacomp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "caj_concepto_b",
	"m_strTable" => "tparam_cajacomp",
	"m_srcTableName" => "tparam_cajacomp"
));

$proto8["m_sql"] = "caj_concepto_b";
$proto8["m_srcTableName"] = "tparam_cajacomp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "caj_diskette_b",
	"m_strTable" => "tparam_cajacomp",
	"m_srcTableName" => "tparam_cajacomp"
));

$proto10["m_sql"] = "caj_diskette_b";
$proto10["m_srcTableName"] = "tparam_cajacomp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "caj_dscajcom_b",
	"m_strTable" => "tparam_cajacomp",
	"m_srcTableName" => "tparam_cajacomp"
));

$proto12["m_sql"] = "caj_dscajcom_b";
$proto12["m_srcTableName"] = "tparam_cajacomp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "caj_listado_b",
	"m_strTable" => "tparam_cajacomp",
	"m_srcTableName" => "tparam_cajacomp"
));

$proto14["m_sql"] = "caj_listado_b";
$proto14["m_srcTableName"] = "tparam_cajacomp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tparam_cajacomp";
$proto17["m_srcTableName"] = "tparam_cajacomp";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "caj_cdcajcom_b";
$proto17["m_columns"][] = "caj_concepto_b";
$proto17["m_columns"][] = "caj_diskette_b";
$proto17["m_columns"][] = "caj_dscajcom_b";
$proto17["m_columns"][] = "caj_listado_b";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tparam_cajacomp";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tparam_cajacomp";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_cajacomp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_cajacomp = createSqlQuery_tparam_cajacomp();


	
								;

					

$tdatatparam_cajacomp[".sqlquery"] = $queryData_tparam_cajacomp;



$tdatatparam_cajacomp[".hasEvents"] = false;

?>