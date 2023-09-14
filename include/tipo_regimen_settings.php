<?php
$tdatatipo_regimen = array();
$tdatatipo_regimen[".searchableFields"] = array();
$tdatatipo_regimen[".ShortName"] = "tipo_regimen";
$tdatatipo_regimen[".OwnerID"] = "";
$tdatatipo_regimen[".OriginalTable"] = "tipo_regimen";


$tdatatipo_regimen[".pagesByType"] = my_json_decode( "{}" );
$tdatatipo_regimen[".originalPagesByType"] = $tdatatipo_regimen[".pagesByType"];
$tdatatipo_regimen[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatipo_regimen[".originalPages"] = $tdatatipo_regimen[".pages"];
$tdatatipo_regimen[".defaultPages"] = my_json_decode( "{}" );
$tdatatipo_regimen[".originalDefaultPages"] = $tdatatipo_regimen[".defaultPages"];

//	field labels
$fieldLabelstipo_regimen = array();
$fieldToolTipstipo_regimen = array();
$pageTitlestipo_regimen = array();
$placeHolderstipo_regimen = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_regimen["Spanish"] = array();
	$fieldToolTipstipo_regimen["Spanish"] = array();
	$placeHolderstipo_regimen["Spanish"] = array();
	$pageTitlestipo_regimen["Spanish"] = array();
	$fieldLabelstipo_regimen["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipstipo_regimen["Spanish"]["codigo"] = "";
	$placeHolderstipo_regimen["Spanish"]["codigo"] = "";
	$fieldLabelstipo_regimen["Spanish"]["nom_regimen"] = "Nom Regimen";
	$fieldToolTipstipo_regimen["Spanish"]["nom_regimen"] = "";
	$placeHolderstipo_regimen["Spanish"]["nom_regimen"] = "";
	if (count($fieldToolTipstipo_regimen["Spanish"]))
		$tdatatipo_regimen[".isUseToolTips"] = true;
}


	$tdatatipo_regimen[".NCSearch"] = true;



$tdatatipo_regimen[".shortTableName"] = "tipo_regimen";
$tdatatipo_regimen[".nSecOptions"] = 0;

$tdatatipo_regimen[".mainTableOwnerID"] = "";
$tdatatipo_regimen[".entityType"] = 0;
$tdatatipo_regimen[".connId"] = "dbct_at_localhost";


$tdatatipo_regimen[".strOriginalTableName"] = "tipo_regimen";

	



$tdatatipo_regimen[".showAddInPopup"] = false;

$tdatatipo_regimen[".showEditInPopup"] = false;

$tdatatipo_regimen[".showViewInPopup"] = false;

$tdatatipo_regimen[".listAjax"] = false;
//	temporary
//$tdatatipo_regimen[".listAjax"] = false;

	$tdatatipo_regimen[".audit"] = true;

	$tdatatipo_regimen[".locking"] = true;


$pages = $tdatatipo_regimen[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipo_regimen[".edit"] = true;
	$tdatatipo_regimen[".afterEditAction"] = 1;
	$tdatatipo_regimen[".closePopupAfterEdit"] = 1;
	$tdatatipo_regimen[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipo_regimen[".add"] = true;
$tdatatipo_regimen[".afterAddAction"] = 1;
$tdatatipo_regimen[".closePopupAfterAdd"] = 1;
$tdatatipo_regimen[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipo_regimen[".list"] = true;
}



$tdatatipo_regimen[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipo_regimen[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipo_regimen[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipo_regimen[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipo_regimen[".printFriendly"] = true;
}



$tdatatipo_regimen[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipo_regimen[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipo_regimen[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipo_regimen[".isUseAjaxSuggest"] = true;



												

$tdatatipo_regimen[".ajaxCodeSnippetAdded"] = false;

$tdatatipo_regimen[".buttonsAdded"] = false;

$tdatatipo_regimen[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_regimen[".isUseTimeForSearch"] = false;


$tdatatipo_regimen[".badgeColor"] = "008B8B";


$tdatatipo_regimen[".allSearchFields"] = array();
$tdatatipo_regimen[".filterFields"] = array();
$tdatatipo_regimen[".requiredSearchFields"] = array();

$tdatatipo_regimen[".googleLikeFields"] = array();
$tdatatipo_regimen[".googleLikeFields"][] = "codigo";
$tdatatipo_regimen[".googleLikeFields"][] = "nom_regimen";



$tdatatipo_regimen[".tableType"] = "list";

$tdatatipo_regimen[".printerPageOrientation"] = 0;
$tdatatipo_regimen[".nPrinterPageScale"] = 100;

$tdatatipo_regimen[".nPrinterSplitRecords"] = 40;

$tdatatipo_regimen[".geocodingEnabled"] = false;










$tdatatipo_regimen[".pageSize"] = 20;

$tdatatipo_regimen[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipo_regimen[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_regimen[".orderindexes"] = array();


$tdatatipo_regimen[".sqlHead"] = "SELECT codigo,  	nom_regimen";
$tdatatipo_regimen[".sqlFrom"] = "FROM tipo_regimen";
$tdatatipo_regimen[".sqlWhereExpr"] = "";
$tdatatipo_regimen[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_regimen[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_regimen[".arrGroupsPerPage"] = $arrGPP;

$tdatatipo_regimen[".highlightSearchResults"] = true;

$tableKeystipo_regimen = array();
$tdatatipo_regimen[".Keys"] = $tableKeystipo_regimen;


$tdatatipo_regimen[".hideMobileList"] = array();




//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "tipo_regimen";
	$fdata["Label"] = GetFieldLabel("tipo_regimen","codigo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "codigo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo";

	
	
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


	$tdatatipo_regimen["codigo"] = $fdata;
		$tdatatipo_regimen[".searchableFields"][] = "codigo";
//	nom_regimen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nom_regimen";
	$fdata["GoodName"] = "nom_regimen";
	$fdata["ownerTable"] = "tipo_regimen";
	$fdata["Label"] = GetFieldLabel("tipo_regimen","nom_regimen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom_regimen";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_regimen";

	
	
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


	$tdatatipo_regimen["nom_regimen"] = $fdata;
		$tdatatipo_regimen[".searchableFields"][] = "nom_regimen";


$tables_data["tipo_regimen"]=&$tdatatipo_regimen;
$field_labels["tipo_regimen"] = &$fieldLabelstipo_regimen;
$fieldToolTips["tipo_regimen"] = &$fieldToolTipstipo_regimen;
$placeHolders["tipo_regimen"] = &$placeHolderstipo_regimen;
$page_titles["tipo_regimen"] = &$pageTitlestipo_regimen;


changeTextControlsToDate( "tipo_regimen" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tipo_regimen"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tipo_regimen"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipo_regimen()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "codigo,  	nom_regimen";
$proto0["m_strFrom"] = "FROM tipo_regimen";
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
	"m_strName" => "codigo",
	"m_strTable" => "tipo_regimen",
	"m_srcTableName" => "tipo_regimen"
));

$proto6["m_sql"] = "codigo";
$proto6["m_srcTableName"] = "tipo_regimen";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_regimen",
	"m_strTable" => "tipo_regimen",
	"m_srcTableName" => "tipo_regimen"
));

$proto8["m_sql"] = "nom_regimen";
$proto8["m_srcTableName"] = "tipo_regimen";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tipo_regimen";
$proto11["m_srcTableName"] = "tipo_regimen";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "codigo";
$proto11["m_columns"][] = "nom_regimen";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tipo_regimen";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tipo_regimen";
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
$proto0["m_srcTableName"]="tipo_regimen";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_regimen = createSqlQuery_tipo_regimen();


	
								;

		

$tdatatipo_regimen[".sqlquery"] = $queryData_tipo_regimen;



$tdatatipo_regimen[".hasEvents"] = false;

?>