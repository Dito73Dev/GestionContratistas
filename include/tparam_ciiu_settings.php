<?php
$tdatatparam_ciiu = array();
$tdatatparam_ciiu[".searchableFields"] = array();
$tdatatparam_ciiu[".ShortName"] = "tparam_ciiu";
$tdatatparam_ciiu[".OwnerID"] = "";
$tdatatparam_ciiu[".OriginalTable"] = "tparam_ciiu";


$tdatatparam_ciiu[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatatparam_ciiu[".originalPagesByType"] = $tdatatparam_ciiu[".pagesByType"];
$tdatatparam_ciiu[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatatparam_ciiu[".originalPages"] = $tdatatparam_ciiu[".pages"];
$tdatatparam_ciiu[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatatparam_ciiu[".originalDefaultPages"] = $tdatatparam_ciiu[".defaultPages"];

//	field labels
$fieldLabelstparam_ciiu = array();
$fieldToolTipstparam_ciiu = array();
$pageTitlestparam_ciiu = array();
$placeHolderstparam_ciiu = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_ciiu["Spanish"] = array();
	$fieldToolTipstparam_ciiu["Spanish"] = array();
	$placeHolderstparam_ciiu["Spanish"] = array();
	$pageTitlestparam_ciiu["Spanish"] = array();
	$fieldLabelstparam_ciiu["Spanish"]["Clase"] = "Clase";
	$fieldToolTipstparam_ciiu["Spanish"]["Clase"] = "";
	$placeHolderstparam_ciiu["Spanish"]["Clase"] = "";
	$fieldLabelstparam_ciiu["Spanish"]["Descripci_n"] = "Descripción";
	$fieldToolTipstparam_ciiu["Spanish"]["Descripci_n"] = "";
	$placeHolderstparam_ciiu["Spanish"]["Descripci_n"] = "";
	if (count($fieldToolTipstparam_ciiu["Spanish"]))
		$tdatatparam_ciiu[".isUseToolTips"] = true;
}


	$tdatatparam_ciiu[".NCSearch"] = true;



$tdatatparam_ciiu[".shortTableName"] = "tparam_ciiu";
$tdatatparam_ciiu[".nSecOptions"] = 0;

$tdatatparam_ciiu[".mainTableOwnerID"] = "";
$tdatatparam_ciiu[".entityType"] = 0;
$tdatatparam_ciiu[".connId"] = "dbct_at_localhost";


$tdatatparam_ciiu[".strOriginalTableName"] = "tparam_ciiu";

	



$tdatatparam_ciiu[".showAddInPopup"] = false;

$tdatatparam_ciiu[".showEditInPopup"] = false;

$tdatatparam_ciiu[".showViewInPopup"] = false;

$tdatatparam_ciiu[".listAjax"] = false;
//	temporary
//$tdatatparam_ciiu[".listAjax"] = false;

	$tdatatparam_ciiu[".audit"] = false;

	$tdatatparam_ciiu[".locking"] = false;


$pages = $tdatatparam_ciiu[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_ciiu[".edit"] = true;
	$tdatatparam_ciiu[".afterEditAction"] = 1;
	$tdatatparam_ciiu[".closePopupAfterEdit"] = 1;
	$tdatatparam_ciiu[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_ciiu[".add"] = true;
$tdatatparam_ciiu[".afterAddAction"] = 1;
$tdatatparam_ciiu[".closePopupAfterAdd"] = 1;
$tdatatparam_ciiu[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_ciiu[".list"] = true;
}



$tdatatparam_ciiu[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_ciiu[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_ciiu[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_ciiu[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_ciiu[".printFriendly"] = true;
}



$tdatatparam_ciiu[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_ciiu[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_ciiu[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_ciiu[".isUseAjaxSuggest"] = true;



												

$tdatatparam_ciiu[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_ciiu[".buttonsAdded"] = false;

$tdatatparam_ciiu[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_ciiu[".isUseTimeForSearch"] = false;


$tdatatparam_ciiu[".badgeColor"] = "DC143C";


$tdatatparam_ciiu[".allSearchFields"] = array();
$tdatatparam_ciiu[".filterFields"] = array();
$tdatatparam_ciiu[".requiredSearchFields"] = array();

$tdatatparam_ciiu[".googleLikeFields"] = array();
$tdatatparam_ciiu[".googleLikeFields"][] = "Clase";
$tdatatparam_ciiu[".googleLikeFields"][] = "Descripción";



$tdatatparam_ciiu[".tableType"] = "list";

$tdatatparam_ciiu[".printerPageOrientation"] = 0;
$tdatatparam_ciiu[".nPrinterPageScale"] = 100;

$tdatatparam_ciiu[".nPrinterSplitRecords"] = 40;

$tdatatparam_ciiu[".geocodingEnabled"] = false;










$tdatatparam_ciiu[".pageSize"] = 20;

$tdatatparam_ciiu[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_ciiu[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_ciiu[".orderindexes"] = array();


$tdatatparam_ciiu[".sqlHead"] = "SELECT Clase,  	`Descripción`";
$tdatatparam_ciiu[".sqlFrom"] = "FROM tparam_ciiu";
$tdatatparam_ciiu[".sqlWhereExpr"] = "";
$tdatatparam_ciiu[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_ciiu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_ciiu[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_ciiu[".highlightSearchResults"] = true;

$tableKeystparam_ciiu = array();
$tdatatparam_ciiu[".Keys"] = $tableKeystparam_ciiu;


$tdatatparam_ciiu[".hideMobileList"] = array();




//	Clase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Clase";
	$fdata["GoodName"] = "Clase";
	$fdata["ownerTable"] = "tparam_ciiu";
	$fdata["Label"] = GetFieldLabel("tparam_ciiu","Clase");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Clase";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Clase";

	
	
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


	$tdatatparam_ciiu["Clase"] = $fdata;
		$tdatatparam_ciiu[".searchableFields"][] = "Clase";
//	Descripción
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Descripción";
	$fdata["GoodName"] = "Descripci_n";
	$fdata["ownerTable"] = "tparam_ciiu";
	$fdata["Label"] = GetFieldLabel("tparam_ciiu","Descripci_n");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Descripción";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Descripción`";

	
	
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


	$tdatatparam_ciiu["Descripción"] = $fdata;
		$tdatatparam_ciiu[".searchableFields"][] = "Descripción";


$tables_data["tparam_ciiu"]=&$tdatatparam_ciiu;
$field_labels["tparam_ciiu"] = &$fieldLabelstparam_ciiu;
$fieldToolTips["tparam_ciiu"] = &$fieldToolTipstparam_ciiu;
$placeHolders["tparam_ciiu"] = &$placeHolderstparam_ciiu;
$page_titles["tparam_ciiu"] = &$pageTitlestparam_ciiu;


changeTextControlsToDate( "tparam_ciiu" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_ciiu"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_ciiu"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_ciiu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Clase,  	`Descripción`";
$proto0["m_strFrom"] = "FROM tparam_ciiu";
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
	"m_strName" => "Clase",
	"m_strTable" => "tparam_ciiu",
	"m_srcTableName" => "tparam_ciiu"
));

$proto6["m_sql"] = "Clase";
$proto6["m_srcTableName"] = "tparam_ciiu";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripción",
	"m_strTable" => "tparam_ciiu",
	"m_srcTableName" => "tparam_ciiu"
));

$proto8["m_sql"] = "`Descripción`";
$proto8["m_srcTableName"] = "tparam_ciiu";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_ciiu";
$proto11["m_srcTableName"] = "tparam_ciiu";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Clase";
$proto11["m_columns"][] = "Descripción";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_ciiu";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_ciiu";
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
$proto0["m_srcTableName"]="tparam_ciiu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_ciiu = createSqlQuery_tparam_ciiu();


	
								;

		

$tdatatparam_ciiu[".sqlquery"] = $queryData_tparam_ciiu;



$tdatatparam_ciiu[".hasEvents"] = false;

?>