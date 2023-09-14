<?php
$tdatatparam_fondosalud = array();
$tdatatparam_fondosalud[".searchableFields"] = array();
$tdatatparam_fondosalud[".ShortName"] = "tparam_fondosalud";
$tdatatparam_fondosalud[".OwnerID"] = "";
$tdatatparam_fondosalud[".OriginalTable"] = "tparam_fondosalud";


$tdatatparam_fondosalud[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatatparam_fondosalud[".originalPagesByType"] = $tdatatparam_fondosalud[".pagesByType"];
$tdatatparam_fondosalud[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatatparam_fondosalud[".originalPages"] = $tdatatparam_fondosalud[".pages"];
$tdatatparam_fondosalud[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatatparam_fondosalud[".originalDefaultPages"] = $tdatatparam_fondosalud[".defaultPages"];

//	field labels
$fieldLabelstparam_fondosalud = array();
$fieldToolTipstparam_fondosalud = array();
$pageTitlestparam_fondosalud = array();
$placeHolderstparam_fondosalud = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_fondosalud["Spanish"] = array();
	$fieldToolTipstparam_fondosalud["Spanish"] = array();
	$placeHolderstparam_fondosalud["Spanish"] = array();
	$pageTitlestparam_fondosalud["Spanish"] = array();
	$fieldLabelstparam_fondosalud["Spanish"]["tfo_cdfdosal_b"] = "Tfo Cdfdosal B";
	$fieldToolTipstparam_fondosalud["Spanish"]["tfo_cdfdosal_b"] = "";
	$placeHolderstparam_fondosalud["Spanish"]["tfo_cdfdosal_b"] = "";
	$fieldLabelstparam_fondosalud["Spanish"]["tfo_dsfdosal_b"] = "Tfo Dsfdosal B";
	$fieldToolTipstparam_fondosalud["Spanish"]["tfo_dsfdosal_b"] = "";
	$placeHolderstparam_fondosalud["Spanish"]["tfo_dsfdosal_b"] = "";
	$fieldLabelstparam_fondosalud["Spanish"]["tfo_status"] = "Tfo Status";
	$fieldToolTipstparam_fondosalud["Spanish"]["tfo_status"] = "";
	$placeHolderstparam_fondosalud["Spanish"]["tfo_status"] = "";
	if (count($fieldToolTipstparam_fondosalud["Spanish"]))
		$tdatatparam_fondosalud[".isUseToolTips"] = true;
}


	$tdatatparam_fondosalud[".NCSearch"] = true;



$tdatatparam_fondosalud[".shortTableName"] = "tparam_fondosalud";
$tdatatparam_fondosalud[".nSecOptions"] = 0;

$tdatatparam_fondosalud[".mainTableOwnerID"] = "";
$tdatatparam_fondosalud[".entityType"] = 0;
$tdatatparam_fondosalud[".connId"] = "dbct_at_localhost";


$tdatatparam_fondosalud[".strOriginalTableName"] = "tparam_fondosalud";

	



$tdatatparam_fondosalud[".showAddInPopup"] = false;

$tdatatparam_fondosalud[".showEditInPopup"] = false;

$tdatatparam_fondosalud[".showViewInPopup"] = false;

$tdatatparam_fondosalud[".listAjax"] = false;
//	temporary
//$tdatatparam_fondosalud[".listAjax"] = false;

	$tdatatparam_fondosalud[".audit"] = true;

	$tdatatparam_fondosalud[".locking"] = true;


$pages = $tdatatparam_fondosalud[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_fondosalud[".edit"] = true;
	$tdatatparam_fondosalud[".afterEditAction"] = 1;
	$tdatatparam_fondosalud[".closePopupAfterEdit"] = 1;
	$tdatatparam_fondosalud[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_fondosalud[".add"] = true;
$tdatatparam_fondosalud[".afterAddAction"] = 1;
$tdatatparam_fondosalud[".closePopupAfterAdd"] = 1;
$tdatatparam_fondosalud[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_fondosalud[".list"] = true;
}



$tdatatparam_fondosalud[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_fondosalud[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_fondosalud[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_fondosalud[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_fondosalud[".printFriendly"] = true;
}



$tdatatparam_fondosalud[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_fondosalud[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_fondosalud[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_fondosalud[".isUseAjaxSuggest"] = true;



												

$tdatatparam_fondosalud[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_fondosalud[".buttonsAdded"] = false;

$tdatatparam_fondosalud[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_fondosalud[".isUseTimeForSearch"] = false;


$tdatatparam_fondosalud[".badgeColor"] = "4682B4";


$tdatatparam_fondosalud[".allSearchFields"] = array();
$tdatatparam_fondosalud[".filterFields"] = array();
$tdatatparam_fondosalud[".requiredSearchFields"] = array();

$tdatatparam_fondosalud[".googleLikeFields"] = array();
$tdatatparam_fondosalud[".googleLikeFields"][] = "tfo_cdfdosal_b";
$tdatatparam_fondosalud[".googleLikeFields"][] = "tfo_dsfdosal_b";
$tdatatparam_fondosalud[".googleLikeFields"][] = "tfo_status";



$tdatatparam_fondosalud[".tableType"] = "list";

$tdatatparam_fondosalud[".printerPageOrientation"] = 0;
$tdatatparam_fondosalud[".nPrinterPageScale"] = 100;

$tdatatparam_fondosalud[".nPrinterSplitRecords"] = 40;

$tdatatparam_fondosalud[".geocodingEnabled"] = false;










$tdatatparam_fondosalud[".pageSize"] = 20;

$tdatatparam_fondosalud[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_fondosalud[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_fondosalud[".orderindexes"] = array();


$tdatatparam_fondosalud[".sqlHead"] = "SELECT tfo_cdfdosal_b,  	tfo_dsfdosal_b,  	tfo_status";
$tdatatparam_fondosalud[".sqlFrom"] = "FROM tparam_fondosalud";
$tdatatparam_fondosalud[".sqlWhereExpr"] = "";
$tdatatparam_fondosalud[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_fondosalud[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_fondosalud[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_fondosalud[".highlightSearchResults"] = true;

$tableKeystparam_fondosalud = array();
$tableKeystparam_fondosalud[] = "tfo_cdfdosal_b";
$tdatatparam_fondosalud[".Keys"] = $tableKeystparam_fondosalud;


$tdatatparam_fondosalud[".hideMobileList"] = array();




//	tfo_cdfdosal_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tfo_cdfdosal_b";
	$fdata["GoodName"] = "tfo_cdfdosal_b";
	$fdata["ownerTable"] = "tparam_fondosalud";
	$fdata["Label"] = GetFieldLabel("tparam_fondosalud","tfo_cdfdosal_b");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tfo_cdfdosal_b";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tfo_cdfdosal_b";

	
	
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


	$tdatatparam_fondosalud["tfo_cdfdosal_b"] = $fdata;
		$tdatatparam_fondosalud[".searchableFields"][] = "tfo_cdfdosal_b";
//	tfo_dsfdosal_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tfo_dsfdosal_b";
	$fdata["GoodName"] = "tfo_dsfdosal_b";
	$fdata["ownerTable"] = "tparam_fondosalud";
	$fdata["Label"] = GetFieldLabel("tparam_fondosalud","tfo_dsfdosal_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tfo_dsfdosal_b";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tfo_dsfdosal_b";

	
	
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


	$tdatatparam_fondosalud["tfo_dsfdosal_b"] = $fdata;
		$tdatatparam_fondosalud[".searchableFields"][] = "tfo_dsfdosal_b";
//	tfo_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tfo_status";
	$fdata["GoodName"] = "tfo_status";
	$fdata["ownerTable"] = "tparam_fondosalud";
	$fdata["Label"] = GetFieldLabel("tparam_fondosalud","tfo_status");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "tfo_status";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tfo_status";

	
	
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


	$tdatatparam_fondosalud["tfo_status"] = $fdata;
		$tdatatparam_fondosalud[".searchableFields"][] = "tfo_status";


$tables_data["tparam_fondosalud"]=&$tdatatparam_fondosalud;
$field_labels["tparam_fondosalud"] = &$fieldLabelstparam_fondosalud;
$fieldToolTips["tparam_fondosalud"] = &$fieldToolTipstparam_fondosalud;
$placeHolders["tparam_fondosalud"] = &$placeHolderstparam_fondosalud;
$page_titles["tparam_fondosalud"] = &$pageTitlestparam_fondosalud;


changeTextControlsToDate( "tparam_fondosalud" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_fondosalud"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_fondosalud"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_fondosalud()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tfo_cdfdosal_b,  	tfo_dsfdosal_b,  	tfo_status";
$proto0["m_strFrom"] = "FROM tparam_fondosalud";
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
	"m_strName" => "tfo_cdfdosal_b",
	"m_strTable" => "tparam_fondosalud",
	"m_srcTableName" => "tparam_fondosalud"
));

$proto6["m_sql"] = "tfo_cdfdosal_b";
$proto6["m_srcTableName"] = "tparam_fondosalud";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tfo_dsfdosal_b",
	"m_strTable" => "tparam_fondosalud",
	"m_srcTableName" => "tparam_fondosalud"
));

$proto8["m_sql"] = "tfo_dsfdosal_b";
$proto8["m_srcTableName"] = "tparam_fondosalud";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tfo_status",
	"m_strTable" => "tparam_fondosalud",
	"m_srcTableName" => "tparam_fondosalud"
));

$proto10["m_sql"] = "tfo_status";
$proto10["m_srcTableName"] = "tparam_fondosalud";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tparam_fondosalud";
$proto13["m_srcTableName"] = "tparam_fondosalud";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "tfo_cdfdosal_b";
$proto13["m_columns"][] = "tfo_dsfdosal_b";
$proto13["m_columns"][] = "tfo_status";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tparam_fondosalud";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tparam_fondosalud";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_fondosalud";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_fondosalud = createSqlQuery_tparam_fondosalud();


	
								;

			

$tdatatparam_fondosalud[".sqlquery"] = $queryData_tparam_fondosalud;



$tdatatparam_fondosalud[".hasEvents"] = false;

?>