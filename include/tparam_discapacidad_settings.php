<?php
$tdatatparam_discapacidad = array();
$tdatatparam_discapacidad[".searchableFields"] = array();
$tdatatparam_discapacidad[".ShortName"] = "tparam_discapacidad";
$tdatatparam_discapacidad[".OwnerID"] = "";
$tdatatparam_discapacidad[".OriginalTable"] = "tparam_discapacidad";


$tdatatparam_discapacidad[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatatparam_discapacidad[".originalPagesByType"] = $tdatatparam_discapacidad[".pagesByType"];
$tdatatparam_discapacidad[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatatparam_discapacidad[".originalPages"] = $tdatatparam_discapacidad[".pages"];
$tdatatparam_discapacidad[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatatparam_discapacidad[".originalDefaultPages"] = $tdatatparam_discapacidad[".defaultPages"];

//	field labels
$fieldLabelstparam_discapacidad = array();
$fieldToolTipstparam_discapacidad = array();
$pageTitlestparam_discapacidad = array();
$placeHolderstparam_discapacidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_discapacidad["Spanish"] = array();
	$fieldToolTipstparam_discapacidad["Spanish"] = array();
	$placeHolderstparam_discapacidad["Spanish"] = array();
	$pageTitlestparam_discapacidad["Spanish"] = array();
	$fieldLabelstparam_discapacidad["Spanish"]["discap_id"] = "Discap Id";
	$fieldToolTipstparam_discapacidad["Spanish"]["discap_id"] = "";
	$placeHolderstparam_discapacidad["Spanish"]["discap_id"] = "";
	$fieldLabelstparam_discapacidad["Spanish"]["discap_nom"] = "Discap Nom";
	$fieldToolTipstparam_discapacidad["Spanish"]["discap_nom"] = "";
	$placeHolderstparam_discapacidad["Spanish"]["discap_nom"] = "";
	if (count($fieldToolTipstparam_discapacidad["Spanish"]))
		$tdatatparam_discapacidad[".isUseToolTips"] = true;
}


	$tdatatparam_discapacidad[".NCSearch"] = true;



$tdatatparam_discapacidad[".shortTableName"] = "tparam_discapacidad";
$tdatatparam_discapacidad[".nSecOptions"] = 0;

$tdatatparam_discapacidad[".mainTableOwnerID"] = "";
$tdatatparam_discapacidad[".entityType"] = 0;
$tdatatparam_discapacidad[".connId"] = "dbct_at_localhost";


$tdatatparam_discapacidad[".strOriginalTableName"] = "tparam_discapacidad";

	



$tdatatparam_discapacidad[".showAddInPopup"] = false;

$tdatatparam_discapacidad[".showEditInPopup"] = false;

$tdatatparam_discapacidad[".showViewInPopup"] = false;

$tdatatparam_discapacidad[".listAjax"] = false;
//	temporary
//$tdatatparam_discapacidad[".listAjax"] = false;

	$tdatatparam_discapacidad[".audit"] = true;

	$tdatatparam_discapacidad[".locking"] = true;


$pages = $tdatatparam_discapacidad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_discapacidad[".edit"] = true;
	$tdatatparam_discapacidad[".afterEditAction"] = 1;
	$tdatatparam_discapacidad[".closePopupAfterEdit"] = 1;
	$tdatatparam_discapacidad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_discapacidad[".add"] = true;
$tdatatparam_discapacidad[".afterAddAction"] = 1;
$tdatatparam_discapacidad[".closePopupAfterAdd"] = 1;
$tdatatparam_discapacidad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_discapacidad[".list"] = true;
}



$tdatatparam_discapacidad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_discapacidad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_discapacidad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_discapacidad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_discapacidad[".printFriendly"] = true;
}



$tdatatparam_discapacidad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_discapacidad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_discapacidad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_discapacidad[".isUseAjaxSuggest"] = true;



												

$tdatatparam_discapacidad[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_discapacidad[".buttonsAdded"] = false;

$tdatatparam_discapacidad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_discapacidad[".isUseTimeForSearch"] = false;


$tdatatparam_discapacidad[".badgeColor"] = "00C2C5";


$tdatatparam_discapacidad[".allSearchFields"] = array();
$tdatatparam_discapacidad[".filterFields"] = array();
$tdatatparam_discapacidad[".requiredSearchFields"] = array();

$tdatatparam_discapacidad[".googleLikeFields"] = array();
$tdatatparam_discapacidad[".googleLikeFields"][] = "discap_id";
$tdatatparam_discapacidad[".googleLikeFields"][] = "discap_nom";



$tdatatparam_discapacidad[".tableType"] = "list";

$tdatatparam_discapacidad[".printerPageOrientation"] = 0;
$tdatatparam_discapacidad[".nPrinterPageScale"] = 100;

$tdatatparam_discapacidad[".nPrinterSplitRecords"] = 40;

$tdatatparam_discapacidad[".geocodingEnabled"] = false;










$tdatatparam_discapacidad[".pageSize"] = 20;

$tdatatparam_discapacidad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_discapacidad[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_discapacidad[".orderindexes"] = array();


$tdatatparam_discapacidad[".sqlHead"] = "SELECT discap_id,  	discap_nom";
$tdatatparam_discapacidad[".sqlFrom"] = "FROM tparam_discapacidad";
$tdatatparam_discapacidad[".sqlWhereExpr"] = "";
$tdatatparam_discapacidad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_discapacidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_discapacidad[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_discapacidad[".highlightSearchResults"] = true;

$tableKeystparam_discapacidad = array();
$tableKeystparam_discapacidad[] = "discap_id";
$tdatatparam_discapacidad[".Keys"] = $tableKeystparam_discapacidad;


$tdatatparam_discapacidad[".hideMobileList"] = array();




//	discap_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "discap_id";
	$fdata["GoodName"] = "discap_id";
	$fdata["ownerTable"] = "tparam_discapacidad";
	$fdata["Label"] = GetFieldLabel("tparam_discapacidad","discap_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "discap_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "discap_id";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdatatparam_discapacidad["discap_id"] = $fdata;
		$tdatatparam_discapacidad[".searchableFields"][] = "discap_id";
//	discap_nom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "discap_nom";
	$fdata["GoodName"] = "discap_nom";
	$fdata["ownerTable"] = "tparam_discapacidad";
	$fdata["Label"] = GetFieldLabel("tparam_discapacidad","discap_nom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "discap_nom";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "discap_nom";

	
	
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


	$tdatatparam_discapacidad["discap_nom"] = $fdata;
		$tdatatparam_discapacidad[".searchableFields"][] = "discap_nom";


$tables_data["tparam_discapacidad"]=&$tdatatparam_discapacidad;
$field_labels["tparam_discapacidad"] = &$fieldLabelstparam_discapacidad;
$fieldToolTips["tparam_discapacidad"] = &$fieldToolTipstparam_discapacidad;
$placeHolders["tparam_discapacidad"] = &$placeHolderstparam_discapacidad;
$page_titles["tparam_discapacidad"] = &$pageTitlestparam_discapacidad;


changeTextControlsToDate( "tparam_discapacidad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_discapacidad"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_discapacidad"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_discapacidad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "discap_id,  	discap_nom";
$proto0["m_strFrom"] = "FROM tparam_discapacidad";
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
	"m_strName" => "discap_id",
	"m_strTable" => "tparam_discapacidad",
	"m_srcTableName" => "tparam_discapacidad"
));

$proto6["m_sql"] = "discap_id";
$proto6["m_srcTableName"] = "tparam_discapacidad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "discap_nom",
	"m_strTable" => "tparam_discapacidad",
	"m_srcTableName" => "tparam_discapacidad"
));

$proto8["m_sql"] = "discap_nom";
$proto8["m_srcTableName"] = "tparam_discapacidad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_discapacidad";
$proto11["m_srcTableName"] = "tparam_discapacidad";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "discap_id";
$proto11["m_columns"][] = "discap_nom";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_discapacidad";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_discapacidad";
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
$proto0["m_srcTableName"]="tparam_discapacidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_discapacidad = createSqlQuery_tparam_discapacidad();


	
								;

		

$tdatatparam_discapacidad[".sqlquery"] = $queryData_tparam_discapacidad;



$tdatatparam_discapacidad[".hasEvents"] = false;

?>