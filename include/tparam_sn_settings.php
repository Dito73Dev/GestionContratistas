<?php
$tdatatparam_sn = array();
$tdatatparam_sn[".searchableFields"] = array();
$tdatatparam_sn[".ShortName"] = "tparam_sn";
$tdatatparam_sn[".OwnerID"] = "";
$tdatatparam_sn[".OriginalTable"] = "tparam_sn";


$tdatatparam_sn[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatatparam_sn[".originalPagesByType"] = $tdatatparam_sn[".pagesByType"];
$tdatatparam_sn[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatatparam_sn[".originalPages"] = $tdatatparam_sn[".pages"];
$tdatatparam_sn[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatatparam_sn[".originalDefaultPages"] = $tdatatparam_sn[".defaultPages"];

//	field labels
$fieldLabelstparam_sn = array();
$fieldToolTipstparam_sn = array();
$pageTitlestparam_sn = array();
$placeHolderstparam_sn = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_sn["Spanish"] = array();
	$fieldToolTipstparam_sn["Spanish"] = array();
	$placeHolderstparam_sn["Spanish"] = array();
	$pageTitlestparam_sn["Spanish"] = array();
	$fieldLabelstparam_sn["Spanish"]["sn_id"] = "Sn Id";
	$fieldToolTipstparam_sn["Spanish"]["sn_id"] = "";
	$placeHolderstparam_sn["Spanish"]["sn_id"] = "";
	$fieldLabelstparam_sn["Spanish"]["sn"] = "Sn";
	$fieldToolTipstparam_sn["Spanish"]["sn"] = "";
	$placeHolderstparam_sn["Spanish"]["sn"] = "";
	$fieldLabelstparam_sn["Spanish"]["sn_oe"] = "Sn Oe";
	$fieldToolTipstparam_sn["Spanish"]["sn_oe"] = "";
	$placeHolderstparam_sn["Spanish"]["sn_oe"] = "";
	$fieldLabelstparam_sn["Spanish"]["snfactura"] = "Snfactura";
	$fieldToolTipstparam_sn["Spanish"]["snfactura"] = "";
	$placeHolderstparam_sn["Spanish"]["snfactura"] = "";
	if (count($fieldToolTipstparam_sn["Spanish"]))
		$tdatatparam_sn[".isUseToolTips"] = true;
}


	$tdatatparam_sn[".NCSearch"] = true;



$tdatatparam_sn[".shortTableName"] = "tparam_sn";
$tdatatparam_sn[".nSecOptions"] = 0;

$tdatatparam_sn[".mainTableOwnerID"] = "";
$tdatatparam_sn[".entityType"] = 0;
$tdatatparam_sn[".connId"] = "dbct_at_localhost";


$tdatatparam_sn[".strOriginalTableName"] = "tparam_sn";

	



$tdatatparam_sn[".showAddInPopup"] = false;

$tdatatparam_sn[".showEditInPopup"] = false;

$tdatatparam_sn[".showViewInPopup"] = false;

$tdatatparam_sn[".listAjax"] = false;
//	temporary
//$tdatatparam_sn[".listAjax"] = false;

	$tdatatparam_sn[".audit"] = true;

	$tdatatparam_sn[".locking"] = true;


$pages = $tdatatparam_sn[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_sn[".edit"] = true;
	$tdatatparam_sn[".afterEditAction"] = 1;
	$tdatatparam_sn[".closePopupAfterEdit"] = 1;
	$tdatatparam_sn[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_sn[".add"] = true;
$tdatatparam_sn[".afterAddAction"] = 1;
$tdatatparam_sn[".closePopupAfterAdd"] = 1;
$tdatatparam_sn[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_sn[".list"] = true;
}



$tdatatparam_sn[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_sn[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_sn[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_sn[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_sn[".printFriendly"] = true;
}



$tdatatparam_sn[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_sn[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_sn[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_sn[".isUseAjaxSuggest"] = true;



												

$tdatatparam_sn[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_sn[".buttonsAdded"] = false;

$tdatatparam_sn[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_sn[".isUseTimeForSearch"] = false;


$tdatatparam_sn[".badgeColor"] = "CD853F";


$tdatatparam_sn[".allSearchFields"] = array();
$tdatatparam_sn[".filterFields"] = array();
$tdatatparam_sn[".requiredSearchFields"] = array();

$tdatatparam_sn[".googleLikeFields"] = array();
$tdatatparam_sn[".googleLikeFields"][] = "sn";
$tdatatparam_sn[".googleLikeFields"][] = "sn_id";
$tdatatparam_sn[".googleLikeFields"][] = "sn_oe";
$tdatatparam_sn[".googleLikeFields"][] = "snfactura";



$tdatatparam_sn[".tableType"] = "list";

$tdatatparam_sn[".printerPageOrientation"] = 0;
$tdatatparam_sn[".nPrinterPageScale"] = 100;

$tdatatparam_sn[".nPrinterSplitRecords"] = 40;

$tdatatparam_sn[".geocodingEnabled"] = false;










$tdatatparam_sn[".pageSize"] = 20;

$tdatatparam_sn[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_sn[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_sn[".orderindexes"] = array();


$tdatatparam_sn[".sqlHead"] = "SELECT sn,  	sn_id,  	sn_oe,  	snfactura";
$tdatatparam_sn[".sqlFrom"] = "FROM tparam_sn";
$tdatatparam_sn[".sqlWhereExpr"] = "";
$tdatatparam_sn[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_sn[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_sn[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_sn[".highlightSearchResults"] = true;

$tableKeystparam_sn = array();
$tableKeystparam_sn[] = "sn_id";
$tdatatparam_sn[".Keys"] = $tableKeystparam_sn;


$tdatatparam_sn[".hideMobileList"] = array();




//	sn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sn";
	$fdata["GoodName"] = "sn";
	$fdata["ownerTable"] = "tparam_sn";
	$fdata["Label"] = GetFieldLabel("tparam_sn","sn");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sn";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sn";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatatparam_sn["sn"] = $fdata;
		$tdatatparam_sn[".searchableFields"][] = "sn";
//	sn_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sn_id";
	$fdata["GoodName"] = "sn_id";
	$fdata["ownerTable"] = "tparam_sn";
	$fdata["Label"] = GetFieldLabel("tparam_sn","sn_id");
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


	$tdatatparam_sn["sn_id"] = $fdata;
		$tdatatparam_sn[".searchableFields"][] = "sn_id";
//	sn_oe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sn_oe";
	$fdata["GoodName"] = "sn_oe";
	$fdata["ownerTable"] = "tparam_sn";
	$fdata["Label"] = GetFieldLabel("tparam_sn","sn_oe");
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


	$tdatatparam_sn["sn_oe"] = $fdata;
		$tdatatparam_sn[".searchableFields"][] = "sn_oe";
//	snfactura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "snfactura";
	$fdata["GoodName"] = "snfactura";
	$fdata["ownerTable"] = "tparam_sn";
	$fdata["Label"] = GetFieldLabel("tparam_sn","snfactura");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "snfactura";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "snfactura";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdatatparam_sn["snfactura"] = $fdata;
		$tdatatparam_sn[".searchableFields"][] = "snfactura";


$tables_data["tparam_sn"]=&$tdatatparam_sn;
$field_labels["tparam_sn"] = &$fieldLabelstparam_sn;
$fieldToolTips["tparam_sn"] = &$fieldToolTipstparam_sn;
$placeHolders["tparam_sn"] = &$placeHolderstparam_sn;
$page_titles["tparam_sn"] = &$pageTitlestparam_sn;


changeTextControlsToDate( "tparam_sn" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_sn"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_sn"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_sn()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sn,  	sn_id,  	sn_oe,  	snfactura";
$proto0["m_strFrom"] = "FROM tparam_sn";
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
	"m_strName" => "sn",
	"m_strTable" => "tparam_sn",
	"m_srcTableName" => "tparam_sn"
));

$proto6["m_sql"] = "sn";
$proto6["m_srcTableName"] = "tparam_sn";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sn_id",
	"m_strTable" => "tparam_sn",
	"m_srcTableName" => "tparam_sn"
));

$proto8["m_sql"] = "sn_id";
$proto8["m_srcTableName"] = "tparam_sn";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sn_oe",
	"m_strTable" => "tparam_sn",
	"m_srcTableName" => "tparam_sn"
));

$proto10["m_sql"] = "sn_oe";
$proto10["m_srcTableName"] = "tparam_sn";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "snfactura",
	"m_strTable" => "tparam_sn",
	"m_srcTableName" => "tparam_sn"
));

$proto12["m_sql"] = "snfactura";
$proto12["m_srcTableName"] = "tparam_sn";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tparam_sn";
$proto15["m_srcTableName"] = "tparam_sn";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "sn";
$proto15["m_columns"][] = "sn_id";
$proto15["m_columns"][] = "sn_oe";
$proto15["m_columns"][] = "snfactura";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tparam_sn";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tparam_sn";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_sn";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_sn = createSqlQuery_tparam_sn();


	
								;

				

$tdatatparam_sn[".sqlquery"] = $queryData_tparam_sn;



$tdatatparam_sn[".hasEvents"] = false;

?>