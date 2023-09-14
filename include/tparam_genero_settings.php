<?php
$tdatatparam_genero = array();
$tdatatparam_genero[".searchableFields"] = array();
$tdatatparam_genero[".ShortName"] = "tparam_genero";
$tdatatparam_genero[".OwnerID"] = "";
$tdatatparam_genero[".OriginalTable"] = "tparam_genero";


$tdatatparam_genero[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatatparam_genero[".originalPagesByType"] = $tdatatparam_genero[".pagesByType"];
$tdatatparam_genero[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatatparam_genero[".originalPages"] = $tdatatparam_genero[".pages"];
$tdatatparam_genero[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatatparam_genero[".originalDefaultPages"] = $tdatatparam_genero[".defaultPages"];

//	field labels
$fieldLabelstparam_genero = array();
$fieldToolTipstparam_genero = array();
$pageTitlestparam_genero = array();
$placeHolderstparam_genero = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_genero["Spanish"] = array();
	$fieldToolTipstparam_genero["Spanish"] = array();
	$placeHolderstparam_genero["Spanish"] = array();
	$pageTitlestparam_genero["Spanish"] = array();
	$fieldLabelstparam_genero["Spanish"]["sex_cdsex_b"] = "Sex Cdsex B";
	$fieldToolTipstparam_genero["Spanish"]["sex_cdsex_b"] = "";
	$placeHolderstparam_genero["Spanish"]["sex_cdsex_b"] = "";
	$fieldLabelstparam_genero["Spanish"]["sex_dssex_b"] = "Sex Dssex B";
	$fieldToolTipstparam_genero["Spanish"]["sex_dssex_b"] = "";
	$placeHolderstparam_genero["Spanish"]["sex_dssex_b"] = "";
	if (count($fieldToolTipstparam_genero["Spanish"]))
		$tdatatparam_genero[".isUseToolTips"] = true;
}


	$tdatatparam_genero[".NCSearch"] = true;



$tdatatparam_genero[".shortTableName"] = "tparam_genero";
$tdatatparam_genero[".nSecOptions"] = 0;

$tdatatparam_genero[".mainTableOwnerID"] = "";
$tdatatparam_genero[".entityType"] = 0;
$tdatatparam_genero[".connId"] = "dbct_at_localhost";


$tdatatparam_genero[".strOriginalTableName"] = "tparam_genero";

	



$tdatatparam_genero[".showAddInPopup"] = false;

$tdatatparam_genero[".showEditInPopup"] = false;

$tdatatparam_genero[".showViewInPopup"] = false;

$tdatatparam_genero[".listAjax"] = false;
//	temporary
//$tdatatparam_genero[".listAjax"] = false;

	$tdatatparam_genero[".audit"] = true;

	$tdatatparam_genero[".locking"] = true;


$pages = $tdatatparam_genero[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_genero[".edit"] = true;
	$tdatatparam_genero[".afterEditAction"] = 1;
	$tdatatparam_genero[".closePopupAfterEdit"] = 1;
	$tdatatparam_genero[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_genero[".add"] = true;
$tdatatparam_genero[".afterAddAction"] = 1;
$tdatatparam_genero[".closePopupAfterAdd"] = 1;
$tdatatparam_genero[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_genero[".list"] = true;
}



$tdatatparam_genero[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_genero[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_genero[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_genero[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_genero[".printFriendly"] = true;
}



$tdatatparam_genero[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_genero[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_genero[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_genero[".isUseAjaxSuggest"] = true;



												

$tdatatparam_genero[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_genero[".buttonsAdded"] = false;

$tdatatparam_genero[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_genero[".isUseTimeForSearch"] = false;


$tdatatparam_genero[".badgeColor"] = "DAA520";


$tdatatparam_genero[".allSearchFields"] = array();
$tdatatparam_genero[".filterFields"] = array();
$tdatatparam_genero[".requiredSearchFields"] = array();

$tdatatparam_genero[".googleLikeFields"] = array();
$tdatatparam_genero[".googleLikeFields"][] = "sex_cdsex_b";
$tdatatparam_genero[".googleLikeFields"][] = "sex_dssex_b";



$tdatatparam_genero[".tableType"] = "list";

$tdatatparam_genero[".printerPageOrientation"] = 0;
$tdatatparam_genero[".nPrinterPageScale"] = 100;

$tdatatparam_genero[".nPrinterSplitRecords"] = 40;

$tdatatparam_genero[".geocodingEnabled"] = false;










$tdatatparam_genero[".pageSize"] = 20;

$tdatatparam_genero[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_genero[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_genero[".orderindexes"] = array();


$tdatatparam_genero[".sqlHead"] = "SELECT sex_cdsex_b,  	sex_dssex_b";
$tdatatparam_genero[".sqlFrom"] = "FROM tparam_genero";
$tdatatparam_genero[".sqlWhereExpr"] = "";
$tdatatparam_genero[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_genero[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_genero[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_genero[".highlightSearchResults"] = true;

$tableKeystparam_genero = array();
$tableKeystparam_genero[] = "sex_cdsex_b";
$tdatatparam_genero[".Keys"] = $tableKeystparam_genero;


$tdatatparam_genero[".hideMobileList"] = array();




//	sex_cdsex_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sex_cdsex_b";
	$fdata["GoodName"] = "sex_cdsex_b";
	$fdata["ownerTable"] = "tparam_genero";
	$fdata["Label"] = GetFieldLabel("tparam_genero","sex_cdsex_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sex_cdsex_b";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sex_cdsex_b";

	
	
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


	$tdatatparam_genero["sex_cdsex_b"] = $fdata;
		$tdatatparam_genero[".searchableFields"][] = "sex_cdsex_b";
//	sex_dssex_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sex_dssex_b";
	$fdata["GoodName"] = "sex_dssex_b";
	$fdata["ownerTable"] = "tparam_genero";
	$fdata["Label"] = GetFieldLabel("tparam_genero","sex_dssex_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sex_dssex_b";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sex_dssex_b";

	
	
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


	$tdatatparam_genero["sex_dssex_b"] = $fdata;
		$tdatatparam_genero[".searchableFields"][] = "sex_dssex_b";


$tables_data["tparam_genero"]=&$tdatatparam_genero;
$field_labels["tparam_genero"] = &$fieldLabelstparam_genero;
$fieldToolTips["tparam_genero"] = &$fieldToolTipstparam_genero;
$placeHolders["tparam_genero"] = &$placeHolderstparam_genero;
$page_titles["tparam_genero"] = &$pageTitlestparam_genero;


changeTextControlsToDate( "tparam_genero" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_genero"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_genero"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_genero()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sex_cdsex_b,  	sex_dssex_b";
$proto0["m_strFrom"] = "FROM tparam_genero";
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
	"m_strName" => "sex_cdsex_b",
	"m_strTable" => "tparam_genero",
	"m_srcTableName" => "tparam_genero"
));

$proto6["m_sql"] = "sex_cdsex_b";
$proto6["m_srcTableName"] = "tparam_genero";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sex_dssex_b",
	"m_strTable" => "tparam_genero",
	"m_srcTableName" => "tparam_genero"
));

$proto8["m_sql"] = "sex_dssex_b";
$proto8["m_srcTableName"] = "tparam_genero";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_genero";
$proto11["m_srcTableName"] = "tparam_genero";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "sex_cdsex_b";
$proto11["m_columns"][] = "sex_dssex_b";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_genero";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_genero";
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
$proto0["m_srcTableName"]="tparam_genero";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_genero = createSqlQuery_tparam_genero();


	
								;

		

$tdatatparam_genero[".sqlquery"] = $queryData_tparam_genero;



$tdatatparam_genero[".hasEvents"] = false;

?>