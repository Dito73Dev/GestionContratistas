<?php
$tdatatparam_sn_oe = array();
$tdatatparam_sn_oe[".searchableFields"] = array();
$tdatatparam_sn_oe[".ShortName"] = "tparam_sn_oe";
$tdatatparam_sn_oe[".OwnerID"] = "";
$tdatatparam_sn_oe[".OriginalTable"] = "tparam_sn_oe";


$tdatatparam_sn_oe[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdatatparam_sn_oe[".originalPagesByType"] = $tdatatparam_sn_oe[".pagesByType"];
$tdatatparam_sn_oe[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatatparam_sn_oe[".originalPages"] = $tdatatparam_sn_oe[".pages"];
$tdatatparam_sn_oe[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdatatparam_sn_oe[".originalDefaultPages"] = $tdatatparam_sn_oe[".defaultPages"];

//	field labels
$fieldLabelstparam_sn_oe = array();
$fieldToolTipstparam_sn_oe = array();
$pageTitlestparam_sn_oe = array();
$placeHolderstparam_sn_oe = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_sn_oe["Spanish"] = array();
	$fieldToolTipstparam_sn_oe["Spanish"] = array();
	$placeHolderstparam_sn_oe["Spanish"] = array();
	$pageTitlestparam_sn_oe["Spanish"] = array();
	$fieldLabelstparam_sn_oe["Spanish"]["sn_id"] = "Sn Id";
	$fieldToolTipstparam_sn_oe["Spanish"]["sn_id"] = "";
	$placeHolderstparam_sn_oe["Spanish"]["sn_id"] = "";
	$fieldLabelstparam_sn_oe["Spanish"]["sn_oe"] = "Sn Oe";
	$fieldToolTipstparam_sn_oe["Spanish"]["sn_oe"] = "";
	$placeHolderstparam_sn_oe["Spanish"]["sn_oe"] = "";
	if (count($fieldToolTipstparam_sn_oe["Spanish"]))
		$tdatatparam_sn_oe[".isUseToolTips"] = true;
}


	$tdatatparam_sn_oe[".NCSearch"] = true;



$tdatatparam_sn_oe[".shortTableName"] = "tparam_sn_oe";
$tdatatparam_sn_oe[".nSecOptions"] = 0;

$tdatatparam_sn_oe[".mainTableOwnerID"] = "";
$tdatatparam_sn_oe[".entityType"] = 0;
$tdatatparam_sn_oe[".connId"] = "dbct_at_localhost";


$tdatatparam_sn_oe[".strOriginalTableName"] = "tparam_sn_oe";

	



$tdatatparam_sn_oe[".showAddInPopup"] = false;

$tdatatparam_sn_oe[".showEditInPopup"] = false;

$tdatatparam_sn_oe[".showViewInPopup"] = false;

$tdatatparam_sn_oe[".listAjax"] = false;
//	temporary
//$tdatatparam_sn_oe[".listAjax"] = false;

	$tdatatparam_sn_oe[".audit"] = true;

	$tdatatparam_sn_oe[".locking"] = true;


$pages = $tdatatparam_sn_oe[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_sn_oe[".edit"] = true;
	$tdatatparam_sn_oe[".afterEditAction"] = 1;
	$tdatatparam_sn_oe[".closePopupAfterEdit"] = 1;
	$tdatatparam_sn_oe[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_sn_oe[".add"] = true;
$tdatatparam_sn_oe[".afterAddAction"] = 1;
$tdatatparam_sn_oe[".closePopupAfterAdd"] = 1;
$tdatatparam_sn_oe[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_sn_oe[".list"] = true;
}



$tdatatparam_sn_oe[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_sn_oe[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_sn_oe[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_sn_oe[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_sn_oe[".printFriendly"] = true;
}



$tdatatparam_sn_oe[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_sn_oe[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_sn_oe[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_sn_oe[".isUseAjaxSuggest"] = true;



												

$tdatatparam_sn_oe[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_sn_oe[".buttonsAdded"] = false;

$tdatatparam_sn_oe[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_sn_oe[".isUseTimeForSearch"] = false;


$tdatatparam_sn_oe[".badgeColor"] = "DB7093";


$tdatatparam_sn_oe[".allSearchFields"] = array();
$tdatatparam_sn_oe[".filterFields"] = array();
$tdatatparam_sn_oe[".requiredSearchFields"] = array();

$tdatatparam_sn_oe[".googleLikeFields"] = array();
$tdatatparam_sn_oe[".googleLikeFields"][] = "sn_id";
$tdatatparam_sn_oe[".googleLikeFields"][] = "sn_oe";



$tdatatparam_sn_oe[".tableType"] = "list";

$tdatatparam_sn_oe[".printerPageOrientation"] = 0;
$tdatatparam_sn_oe[".nPrinterPageScale"] = 100;

$tdatatparam_sn_oe[".nPrinterSplitRecords"] = 40;

$tdatatparam_sn_oe[".geocodingEnabled"] = false;










$tdatatparam_sn_oe[".pageSize"] = 20;

$tdatatparam_sn_oe[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_sn_oe[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_sn_oe[".orderindexes"] = array();


$tdatatparam_sn_oe[".sqlHead"] = "SELECT sn_id,  	sn_oe";
$tdatatparam_sn_oe[".sqlFrom"] = "FROM tparam_sn_oe";
$tdatatparam_sn_oe[".sqlWhereExpr"] = "";
$tdatatparam_sn_oe[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_sn_oe[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_sn_oe[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_sn_oe[".highlightSearchResults"] = true;

$tableKeystparam_sn_oe = array();
$tableKeystparam_sn_oe[] = "sn_id";
$tdatatparam_sn_oe[".Keys"] = $tableKeystparam_sn_oe;


$tdatatparam_sn_oe[".hideMobileList"] = array();




//	sn_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sn_id";
	$fdata["GoodName"] = "sn_id";
	$fdata["ownerTable"] = "tparam_sn_oe";
	$fdata["Label"] = GetFieldLabel("tparam_sn_oe","sn_id");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "sn_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sn_id";

	
	
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


	$tdatatparam_sn_oe["sn_id"] = $fdata;
		$tdatatparam_sn_oe[".searchableFields"][] = "sn_id";
//	sn_oe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sn_oe";
	$fdata["GoodName"] = "sn_oe";
	$fdata["ownerTable"] = "tparam_sn_oe";
	$fdata["Label"] = GetFieldLabel("tparam_sn_oe","sn_oe");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sn_oe";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sn_oe";

	
	
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


	$tdatatparam_sn_oe["sn_oe"] = $fdata;
		$tdatatparam_sn_oe[".searchableFields"][] = "sn_oe";


$tables_data["tparam_sn_oe"]=&$tdatatparam_sn_oe;
$field_labels["tparam_sn_oe"] = &$fieldLabelstparam_sn_oe;
$fieldToolTips["tparam_sn_oe"] = &$fieldToolTipstparam_sn_oe;
$placeHolders["tparam_sn_oe"] = &$placeHolderstparam_sn_oe;
$page_titles["tparam_sn_oe"] = &$pageTitlestparam_sn_oe;


changeTextControlsToDate( "tparam_sn_oe" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_sn_oe"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_sn_oe"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_sn_oe()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sn_id,  	sn_oe";
$proto0["m_strFrom"] = "FROM tparam_sn_oe";
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
	"m_strName" => "sn_id",
	"m_strTable" => "tparam_sn_oe",
	"m_srcTableName" => "tparam_sn_oe"
));

$proto6["m_sql"] = "sn_id";
$proto6["m_srcTableName"] = "tparam_sn_oe";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sn_oe",
	"m_strTable" => "tparam_sn_oe",
	"m_srcTableName" => "tparam_sn_oe"
));

$proto8["m_sql"] = "sn_oe";
$proto8["m_srcTableName"] = "tparam_sn_oe";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_sn_oe";
$proto11["m_srcTableName"] = "tparam_sn_oe";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "sn_id";
$proto11["m_columns"][] = "sn_oe";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_sn_oe";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_sn_oe";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_sn_oe";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_sn_oe = createSqlQuery_tparam_sn_oe();


	
								;

		

$tdatatparam_sn_oe[".sqlquery"] = $queryData_tparam_sn_oe;



$tdatatparam_sn_oe[".hasEvents"] = false;

?>