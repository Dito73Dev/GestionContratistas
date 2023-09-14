<?php
$tdatatparam_tipopago = array();
$tdatatparam_tipopago[".searchableFields"] = array();
$tdatatparam_tipopago[".ShortName"] = "tparam_tipopago";
$tdatatparam_tipopago[".OwnerID"] = "";
$tdatatparam_tipopago[".OriginalTable"] = "tparam_tipopago";


$tdatatparam_tipopago[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_tipopago[".originalPagesByType"] = $tdatatparam_tipopago[".pagesByType"];
$tdatatparam_tipopago[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_tipopago[".originalPages"] = $tdatatparam_tipopago[".pages"];
$tdatatparam_tipopago[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_tipopago[".originalDefaultPages"] = $tdatatparam_tipopago[".defaultPages"];

//	field labels
$fieldLabelstparam_tipopago = array();
$fieldToolTipstparam_tipopago = array();
$pageTitlestparam_tipopago = array();
$placeHolderstparam_tipopago = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_tipopago["Spanish"] = array();
	$fieldToolTipstparam_tipopago["Spanish"] = array();
	$placeHolderstparam_tipopago["Spanish"] = array();
	$pageTitlestparam_tipopago["Spanish"] = array();
	$fieldLabelstparam_tipopago["Spanish"]["tipopago_id"] = "Tipopago Id";
	$fieldToolTipstparam_tipopago["Spanish"]["tipopago_id"] = "";
	$placeHolderstparam_tipopago["Spanish"]["tipopago_id"] = "";
	$fieldLabelstparam_tipopago["Spanish"]["tipopago_nombre"] = "Tipopago Nombre";
	$fieldToolTipstparam_tipopago["Spanish"]["tipopago_nombre"] = "";
	$placeHolderstparam_tipopago["Spanish"]["tipopago_nombre"] = "";
	if (count($fieldToolTipstparam_tipopago["Spanish"]))
		$tdatatparam_tipopago[".isUseToolTips"] = true;
}


	$tdatatparam_tipopago[".NCSearch"] = true;



$tdatatparam_tipopago[".shortTableName"] = "tparam_tipopago";
$tdatatparam_tipopago[".nSecOptions"] = 0;

$tdatatparam_tipopago[".mainTableOwnerID"] = "";
$tdatatparam_tipopago[".entityType"] = 0;
$tdatatparam_tipopago[".connId"] = "dbct_at_localhost";


$tdatatparam_tipopago[".strOriginalTableName"] = "tparam_tipopago";

	



$tdatatparam_tipopago[".showAddInPopup"] = false;

$tdatatparam_tipopago[".showEditInPopup"] = false;

$tdatatparam_tipopago[".showViewInPopup"] = false;

$tdatatparam_tipopago[".listAjax"] = false;
//	temporary
//$tdatatparam_tipopago[".listAjax"] = false;

	$tdatatparam_tipopago[".audit"] = false;

	$tdatatparam_tipopago[".locking"] = false;


$pages = $tdatatparam_tipopago[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_tipopago[".edit"] = true;
	$tdatatparam_tipopago[".afterEditAction"] = 1;
	$tdatatparam_tipopago[".closePopupAfterEdit"] = 1;
	$tdatatparam_tipopago[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_tipopago[".add"] = true;
$tdatatparam_tipopago[".afterAddAction"] = 1;
$tdatatparam_tipopago[".closePopupAfterAdd"] = 1;
$tdatatparam_tipopago[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_tipopago[".list"] = true;
}



$tdatatparam_tipopago[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_tipopago[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_tipopago[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_tipopago[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_tipopago[".printFriendly"] = true;
}



$tdatatparam_tipopago[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_tipopago[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_tipopago[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_tipopago[".isUseAjaxSuggest"] = true;



												

$tdatatparam_tipopago[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_tipopago[".buttonsAdded"] = false;

$tdatatparam_tipopago[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_tipopago[".isUseTimeForSearch"] = false;


$tdatatparam_tipopago[".badgeColor"] = "DC143C";


$tdatatparam_tipopago[".allSearchFields"] = array();
$tdatatparam_tipopago[".filterFields"] = array();
$tdatatparam_tipopago[".requiredSearchFields"] = array();

$tdatatparam_tipopago[".googleLikeFields"] = array();
$tdatatparam_tipopago[".googleLikeFields"][] = "tipopago_id";
$tdatatparam_tipopago[".googleLikeFields"][] = "tipopago_nombre";



$tdatatparam_tipopago[".tableType"] = "list";

$tdatatparam_tipopago[".printerPageOrientation"] = 0;
$tdatatparam_tipopago[".nPrinterPageScale"] = 100;

$tdatatparam_tipopago[".nPrinterSplitRecords"] = 40;

$tdatatparam_tipopago[".geocodingEnabled"] = false;










$tdatatparam_tipopago[".pageSize"] = 20;

$tdatatparam_tipopago[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_tipopago[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_tipopago[".orderindexes"] = array();


$tdatatparam_tipopago[".sqlHead"] = "SELECT tipopago_id,  	tipopago_nombre";
$tdatatparam_tipopago[".sqlFrom"] = "FROM tparam_tipopago";
$tdatatparam_tipopago[".sqlWhereExpr"] = "";
$tdatatparam_tipopago[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_tipopago[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_tipopago[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_tipopago[".highlightSearchResults"] = true;

$tableKeystparam_tipopago = array();
$tableKeystparam_tipopago[] = "tipopago_id";
$tdatatparam_tipopago[".Keys"] = $tableKeystparam_tipopago;


$tdatatparam_tipopago[".hideMobileList"] = array();




//	tipopago_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tipopago_id";
	$fdata["GoodName"] = "tipopago_id";
	$fdata["ownerTable"] = "tparam_tipopago";
	$fdata["Label"] = GetFieldLabel("tparam_tipopago","tipopago_id");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tipopago_id";

		$fdata["sourceSingle"] = "tipopago_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipopago_id";

	
	
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


	$tdatatparam_tipopago["tipopago_id"] = $fdata;
		$tdatatparam_tipopago[".searchableFields"][] = "tipopago_id";
//	tipopago_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipopago_nombre";
	$fdata["GoodName"] = "tipopago_nombre";
	$fdata["ownerTable"] = "tparam_tipopago";
	$fdata["Label"] = GetFieldLabel("tparam_tipopago","tipopago_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipopago_nombre";

		$fdata["sourceSingle"] = "tipopago_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipopago_nombre";

	
	
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


	$tdatatparam_tipopago["tipopago_nombre"] = $fdata;
		$tdatatparam_tipopago[".searchableFields"][] = "tipopago_nombre";


$tables_data["tparam_tipopago"]=&$tdatatparam_tipopago;
$field_labels["tparam_tipopago"] = &$fieldLabelstparam_tipopago;
$fieldToolTips["tparam_tipopago"] = &$fieldToolTipstparam_tipopago;
$placeHolders["tparam_tipopago"] = &$placeHolderstparam_tipopago;
$page_titles["tparam_tipopago"] = &$pageTitlestparam_tipopago;


changeTextControlsToDate( "tparam_tipopago" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_tipopago"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_tipopago"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_tipopago()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tipopago_id,  	tipopago_nombre";
$proto0["m_strFrom"] = "FROM tparam_tipopago";
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
	"m_strName" => "tipopago_id",
	"m_strTable" => "tparam_tipopago",
	"m_srcTableName" => "tparam_tipopago"
));

$proto6["m_sql"] = "tipopago_id";
$proto6["m_srcTableName"] = "tparam_tipopago";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipopago_nombre",
	"m_strTable" => "tparam_tipopago",
	"m_srcTableName" => "tparam_tipopago"
));

$proto8["m_sql"] = "tipopago_nombre";
$proto8["m_srcTableName"] = "tparam_tipopago";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_tipopago";
$proto11["m_srcTableName"] = "tparam_tipopago";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "tipopago_id";
$proto11["m_columns"][] = "tipopago_nombre";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_tipopago";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_tipopago";
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
$proto0["m_srcTableName"]="tparam_tipopago";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_tipopago = createSqlQuery_tparam_tipopago();


	
								;

		

$tdatatparam_tipopago[".sqlquery"] = $queryData_tparam_tipopago;



$tdatatparam_tipopago[".hasEvents"] = false;

?>