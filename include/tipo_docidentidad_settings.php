<?php
$tdatatipo_docidentidad = array();
$tdatatipo_docidentidad[".searchableFields"] = array();
$tdatatipo_docidentidad[".ShortName"] = "tipo_docidentidad";
$tdatatipo_docidentidad[".OwnerID"] = "";
$tdatatipo_docidentidad[".OriginalTable"] = "tipo_docidentidad";


$tdatatipo_docidentidad[".pagesByType"] = my_json_decode( "{}" );
$tdatatipo_docidentidad[".originalPagesByType"] = $tdatatipo_docidentidad[".pagesByType"];
$tdatatipo_docidentidad[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatipo_docidentidad[".originalPages"] = $tdatatipo_docidentidad[".pages"];
$tdatatipo_docidentidad[".defaultPages"] = my_json_decode( "{}" );
$tdatatipo_docidentidad[".originalDefaultPages"] = $tdatatipo_docidentidad[".defaultPages"];

//	field labels
$fieldLabelstipo_docidentidad = array();
$fieldToolTipstipo_docidentidad = array();
$pageTitlestipo_docidentidad = array();
$placeHolderstipo_docidentidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_docidentidad["Spanish"] = array();
	$fieldToolTipstipo_docidentidad["Spanish"] = array();
	$placeHolderstipo_docidentidad["Spanish"] = array();
	$pageTitlestipo_docidentidad["Spanish"] = array();
	$fieldLabelstipo_docidentidad["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipstipo_docidentidad["Spanish"]["codigo"] = "";
	$placeHolderstipo_docidentidad["Spanish"]["codigo"] = "";
	$fieldLabelstipo_docidentidad["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipstipo_docidentidad["Spanish"]["nombre"] = "";
	$placeHolderstipo_docidentidad["Spanish"]["nombre"] = "";
	if (count($fieldToolTipstipo_docidentidad["Spanish"]))
		$tdatatipo_docidentidad[".isUseToolTips"] = true;
}


	$tdatatipo_docidentidad[".NCSearch"] = true;



$tdatatipo_docidentidad[".shortTableName"] = "tipo_docidentidad";
$tdatatipo_docidentidad[".nSecOptions"] = 0;

$tdatatipo_docidentidad[".mainTableOwnerID"] = "";
$tdatatipo_docidentidad[".entityType"] = 0;
$tdatatipo_docidentidad[".connId"] = "dbct_at_localhost";


$tdatatipo_docidentidad[".strOriginalTableName"] = "tipo_docidentidad";

	



$tdatatipo_docidentidad[".showAddInPopup"] = false;

$tdatatipo_docidentidad[".showEditInPopup"] = false;

$tdatatipo_docidentidad[".showViewInPopup"] = false;

$tdatatipo_docidentidad[".listAjax"] = false;
//	temporary
//$tdatatipo_docidentidad[".listAjax"] = false;

	$tdatatipo_docidentidad[".audit"] = true;

	$tdatatipo_docidentidad[".locking"] = true;


$pages = $tdatatipo_docidentidad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipo_docidentidad[".edit"] = true;
	$tdatatipo_docidentidad[".afterEditAction"] = 1;
	$tdatatipo_docidentidad[".closePopupAfterEdit"] = 1;
	$tdatatipo_docidentidad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipo_docidentidad[".add"] = true;
$tdatatipo_docidentidad[".afterAddAction"] = 1;
$tdatatipo_docidentidad[".closePopupAfterAdd"] = 1;
$tdatatipo_docidentidad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipo_docidentidad[".list"] = true;
}



$tdatatipo_docidentidad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipo_docidentidad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipo_docidentidad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipo_docidentidad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipo_docidentidad[".printFriendly"] = true;
}



$tdatatipo_docidentidad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipo_docidentidad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipo_docidentidad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipo_docidentidad[".isUseAjaxSuggest"] = true;



												

$tdatatipo_docidentidad[".ajaxCodeSnippetAdded"] = false;

$tdatatipo_docidentidad[".buttonsAdded"] = false;

$tdatatipo_docidentidad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_docidentidad[".isUseTimeForSearch"] = false;


$tdatatipo_docidentidad[".badgeColor"] = "E8926F";


$tdatatipo_docidentidad[".allSearchFields"] = array();
$tdatatipo_docidentidad[".filterFields"] = array();
$tdatatipo_docidentidad[".requiredSearchFields"] = array();

$tdatatipo_docidentidad[".googleLikeFields"] = array();
$tdatatipo_docidentidad[".googleLikeFields"][] = "codigo";
$tdatatipo_docidentidad[".googleLikeFields"][] = "nombre";



$tdatatipo_docidentidad[".tableType"] = "list";

$tdatatipo_docidentidad[".printerPageOrientation"] = 0;
$tdatatipo_docidentidad[".nPrinterPageScale"] = 100;

$tdatatipo_docidentidad[".nPrinterSplitRecords"] = 40;

$tdatatipo_docidentidad[".geocodingEnabled"] = false;










$tdatatipo_docidentidad[".pageSize"] = 20;

$tdatatipo_docidentidad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipo_docidentidad[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_docidentidad[".orderindexes"] = array();


$tdatatipo_docidentidad[".sqlHead"] = "SELECT codigo,  	nombre";
$tdatatipo_docidentidad[".sqlFrom"] = "FROM tipo_docidentidad";
$tdatatipo_docidentidad[".sqlWhereExpr"] = "";
$tdatatipo_docidentidad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_docidentidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_docidentidad[".arrGroupsPerPage"] = $arrGPP;

$tdatatipo_docidentidad[".highlightSearchResults"] = true;

$tableKeystipo_docidentidad = array();
$tdatatipo_docidentidad[".Keys"] = $tableKeystipo_docidentidad;


$tdatatipo_docidentidad[".hideMobileList"] = array();




//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "tipo_docidentidad";
	$fdata["Label"] = GetFieldLabel("tipo_docidentidad","codigo");
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


	$tdatatipo_docidentidad["codigo"] = $fdata;
		$tdatatipo_docidentidad[".searchableFields"][] = "codigo";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "tipo_docidentidad";
	$fdata["Label"] = GetFieldLabel("tipo_docidentidad","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatipo_docidentidad["nombre"] = $fdata;
		$tdatatipo_docidentidad[".searchableFields"][] = "nombre";


$tables_data["tipo_docidentidad"]=&$tdatatipo_docidentidad;
$field_labels["tipo_docidentidad"] = &$fieldLabelstipo_docidentidad;
$fieldToolTips["tipo_docidentidad"] = &$fieldToolTipstipo_docidentidad;
$placeHolders["tipo_docidentidad"] = &$placeHolderstipo_docidentidad;
$page_titles["tipo_docidentidad"] = &$pageTitlestipo_docidentidad;


changeTextControlsToDate( "tipo_docidentidad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tipo_docidentidad"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tipo_docidentidad"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipo_docidentidad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "codigo,  	nombre";
$proto0["m_strFrom"] = "FROM tipo_docidentidad";
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
	"m_strTable" => "tipo_docidentidad",
	"m_srcTableName" => "tipo_docidentidad"
));

$proto6["m_sql"] = "codigo";
$proto6["m_srcTableName"] = "tipo_docidentidad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "tipo_docidentidad",
	"m_srcTableName" => "tipo_docidentidad"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "tipo_docidentidad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tipo_docidentidad";
$proto11["m_srcTableName"] = "tipo_docidentidad";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "codigo";
$proto11["m_columns"][] = "nombre";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tipo_docidentidad";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tipo_docidentidad";
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
$proto0["m_srcTableName"]="tipo_docidentidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_docidentidad = createSqlQuery_tipo_docidentidad();


	
								;

		

$tdatatipo_docidentidad[".sqlquery"] = $queryData_tipo_docidentidad;



$tdatatipo_docidentidad[".hasEvents"] = false;

?>