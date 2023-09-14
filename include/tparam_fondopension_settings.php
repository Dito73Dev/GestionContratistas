<?php
$tdatatparam_fondopension = array();
$tdatatparam_fondopension[".searchableFields"] = array();
$tdatatparam_fondopension[".ShortName"] = "tparam_fondopension";
$tdatatparam_fondopension[".OwnerID"] = "";
$tdatatparam_fondopension[".OriginalTable"] = "tparam_fondopension";


$tdatatparam_fondopension[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatparam_fondopension[".originalPagesByType"] = $tdatatparam_fondopension[".pagesByType"];
$tdatatparam_fondopension[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatparam_fondopension[".originalPages"] = $tdatatparam_fondopension[".pages"];
$tdatatparam_fondopension[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatparam_fondopension[".originalDefaultPages"] = $tdatatparam_fondopension[".defaultPages"];

//	field labels
$fieldLabelstparam_fondopension = array();
$fieldToolTipstparam_fondopension = array();
$pageTitlestparam_fondopension = array();
$placeHolderstparam_fondopension = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_fondopension["Spanish"] = array();
	$fieldToolTipstparam_fondopension["Spanish"] = array();
	$placeHolderstparam_fondopension["Spanish"] = array();
	$pageTitlestparam_fondopension["Spanish"] = array();
	$fieldLabelstparam_fondopension["Spanish"]["tfo_cdfdoces_b"] = "Tfo Cdfdoces B";
	$fieldToolTipstparam_fondopension["Spanish"]["tfo_cdfdoces_b"] = "";
	$placeHolderstparam_fondopension["Spanish"]["tfo_cdfdoces_b"] = "";
	$fieldLabelstparam_fondopension["Spanish"]["tfo_dsfdoces_b"] = "Tfo Dsfdoces B";
	$fieldToolTipstparam_fondopension["Spanish"]["tfo_dsfdoces_b"] = "";
	$placeHolderstparam_fondopension["Spanish"]["tfo_dsfdoces_b"] = "";
	$fieldLabelstparam_fondopension["Spanish"]["tfo_apropia_status"] = "Tfo Apropia Status";
	$fieldToolTipstparam_fondopension["Spanish"]["tfo_apropia_status"] = "";
	$placeHolderstparam_fondopension["Spanish"]["tfo_apropia_status"] = "";
	if (count($fieldToolTipstparam_fondopension["Spanish"]))
		$tdatatparam_fondopension[".isUseToolTips"] = true;
}


	$tdatatparam_fondopension[".NCSearch"] = true;



$tdatatparam_fondopension[".shortTableName"] = "tparam_fondopension";
$tdatatparam_fondopension[".nSecOptions"] = 0;

$tdatatparam_fondopension[".mainTableOwnerID"] = "";
$tdatatparam_fondopension[".entityType"] = 0;
$tdatatparam_fondopension[".connId"] = "dbct_at_localhost";


$tdatatparam_fondopension[".strOriginalTableName"] = "tparam_fondopension";

	



$tdatatparam_fondopension[".showAddInPopup"] = false;

$tdatatparam_fondopension[".showEditInPopup"] = false;

$tdatatparam_fondopension[".showViewInPopup"] = false;

$tdatatparam_fondopension[".listAjax"] = false;
//	temporary
//$tdatatparam_fondopension[".listAjax"] = false;

	$tdatatparam_fondopension[".audit"] = true;

	$tdatatparam_fondopension[".locking"] = true;


$pages = $tdatatparam_fondopension[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_fondopension[".edit"] = true;
	$tdatatparam_fondopension[".afterEditAction"] = 1;
	$tdatatparam_fondopension[".closePopupAfterEdit"] = 1;
	$tdatatparam_fondopension[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_fondopension[".add"] = true;
$tdatatparam_fondopension[".afterAddAction"] = 1;
$tdatatparam_fondopension[".closePopupAfterAdd"] = 1;
$tdatatparam_fondopension[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_fondopension[".list"] = true;
}



$tdatatparam_fondopension[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_fondopension[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_fondopension[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_fondopension[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_fondopension[".printFriendly"] = true;
}



$tdatatparam_fondopension[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_fondopension[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_fondopension[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_fondopension[".isUseAjaxSuggest"] = true;



												

$tdatatparam_fondopension[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_fondopension[".buttonsAdded"] = false;

$tdatatparam_fondopension[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_fondopension[".isUseTimeForSearch"] = false;


$tdatatparam_fondopension[".badgeColor"] = "E8926F";


$tdatatparam_fondopension[".allSearchFields"] = array();
$tdatatparam_fondopension[".filterFields"] = array();
$tdatatparam_fondopension[".requiredSearchFields"] = array();

$tdatatparam_fondopension[".googleLikeFields"] = array();
$tdatatparam_fondopension[".googleLikeFields"][] = "tfo_apropia_status";
$tdatatparam_fondopension[".googleLikeFields"][] = "tfo_cdfdoces_b";
$tdatatparam_fondopension[".googleLikeFields"][] = "tfo_dsfdoces_b";



$tdatatparam_fondopension[".tableType"] = "list";

$tdatatparam_fondopension[".printerPageOrientation"] = 0;
$tdatatparam_fondopension[".nPrinterPageScale"] = 100;

$tdatatparam_fondopension[".nPrinterSplitRecords"] = 40;

$tdatatparam_fondopension[".geocodingEnabled"] = false;










$tdatatparam_fondopension[".pageSize"] = 20;

$tdatatparam_fondopension[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_fondopension[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_fondopension[".orderindexes"] = array();


$tdatatparam_fondopension[".sqlHead"] = "SELECT tfo_apropia_status,  	tfo_cdfdoces_b,  	tfo_dsfdoces_b";
$tdatatparam_fondopension[".sqlFrom"] = "FROM tparam_fondopension";
$tdatatparam_fondopension[".sqlWhereExpr"] = "";
$tdatatparam_fondopension[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_fondopension[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_fondopension[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_fondopension[".highlightSearchResults"] = true;

$tableKeystparam_fondopension = array();
$tableKeystparam_fondopension[] = "tfo_cdfdoces_b";
$tdatatparam_fondopension[".Keys"] = $tableKeystparam_fondopension;


$tdatatparam_fondopension[".hideMobileList"] = array();




//	tfo_apropia_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tfo_apropia_status";
	$fdata["GoodName"] = "tfo_apropia_status";
	$fdata["ownerTable"] = "tparam_fondopension";
	$fdata["Label"] = GetFieldLabel("tparam_fondopension","tfo_apropia_status");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "tfo_apropia_status";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tfo_apropia_status";

	
	
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


	$tdatatparam_fondopension["tfo_apropia_status"] = $fdata;
		$tdatatparam_fondopension[".searchableFields"][] = "tfo_apropia_status";
//	tfo_cdfdoces_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tfo_cdfdoces_b";
	$fdata["GoodName"] = "tfo_cdfdoces_b";
	$fdata["ownerTable"] = "tparam_fondopension";
	$fdata["Label"] = GetFieldLabel("tparam_fondopension","tfo_cdfdoces_b");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tfo_cdfdoces_b";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tfo_cdfdoces_b";

	
	
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


	$tdatatparam_fondopension["tfo_cdfdoces_b"] = $fdata;
		$tdatatparam_fondopension[".searchableFields"][] = "tfo_cdfdoces_b";
//	tfo_dsfdoces_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tfo_dsfdoces_b";
	$fdata["GoodName"] = "tfo_dsfdoces_b";
	$fdata["ownerTable"] = "tparam_fondopension";
	$fdata["Label"] = GetFieldLabel("tparam_fondopension","tfo_dsfdoces_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tfo_dsfdoces_b";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tfo_dsfdoces_b";

	
	
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


	$tdatatparam_fondopension["tfo_dsfdoces_b"] = $fdata;
		$tdatatparam_fondopension[".searchableFields"][] = "tfo_dsfdoces_b";


$tables_data["tparam_fondopension"]=&$tdatatparam_fondopension;
$field_labels["tparam_fondopension"] = &$fieldLabelstparam_fondopension;
$fieldToolTips["tparam_fondopension"] = &$fieldToolTipstparam_fondopension;
$placeHolders["tparam_fondopension"] = &$placeHolderstparam_fondopension;
$page_titles["tparam_fondopension"] = &$pageTitlestparam_fondopension;


changeTextControlsToDate( "tparam_fondopension" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_fondopension"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_fondopension"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_fondopension()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tfo_apropia_status,  	tfo_cdfdoces_b,  	tfo_dsfdoces_b";
$proto0["m_strFrom"] = "FROM tparam_fondopension";
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
	"m_strName" => "tfo_apropia_status",
	"m_strTable" => "tparam_fondopension",
	"m_srcTableName" => "tparam_fondopension"
));

$proto6["m_sql"] = "tfo_apropia_status";
$proto6["m_srcTableName"] = "tparam_fondopension";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tfo_cdfdoces_b",
	"m_strTable" => "tparam_fondopension",
	"m_srcTableName" => "tparam_fondopension"
));

$proto8["m_sql"] = "tfo_cdfdoces_b";
$proto8["m_srcTableName"] = "tparam_fondopension";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tfo_dsfdoces_b",
	"m_strTable" => "tparam_fondopension",
	"m_srcTableName" => "tparam_fondopension"
));

$proto10["m_sql"] = "tfo_dsfdoces_b";
$proto10["m_srcTableName"] = "tparam_fondopension";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tparam_fondopension";
$proto13["m_srcTableName"] = "tparam_fondopension";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "tfo_apropia_status";
$proto13["m_columns"][] = "tfo_cdfdoces_b";
$proto13["m_columns"][] = "tfo_dsfdoces_b";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tparam_fondopension";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tparam_fondopension";
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
$proto0["m_srcTableName"]="tparam_fondopension";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_fondopension = createSqlQuery_tparam_fondopension();


	
								;

			

$tdatatparam_fondopension[".sqlquery"] = $queryData_tparam_fondopension;



$tdatatparam_fondopension[".hasEvents"] = false;

?>