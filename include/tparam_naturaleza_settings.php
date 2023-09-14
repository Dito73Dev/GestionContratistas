<?php
$tdatatparam_naturaleza = array();
$tdatatparam_naturaleza[".searchableFields"] = array();
$tdatatparam_naturaleza[".ShortName"] = "tparam_naturaleza";
$tdatatparam_naturaleza[".OwnerID"] = "";
$tdatatparam_naturaleza[".OriginalTable"] = "tparam_naturaleza";


$tdatatparam_naturaleza[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_naturaleza[".originalPagesByType"] = $tdatatparam_naturaleza[".pagesByType"];
$tdatatparam_naturaleza[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_naturaleza[".originalPages"] = $tdatatparam_naturaleza[".pages"];
$tdatatparam_naturaleza[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_naturaleza[".originalDefaultPages"] = $tdatatparam_naturaleza[".defaultPages"];

//	field labels
$fieldLabelstparam_naturaleza = array();
$fieldToolTipstparam_naturaleza = array();
$pageTitlestparam_naturaleza = array();
$placeHolderstparam_naturaleza = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_naturaleza["Spanish"] = array();
	$fieldToolTipstparam_naturaleza["Spanish"] = array();
	$placeHolderstparam_naturaleza["Spanish"] = array();
	$pageTitlestparam_naturaleza["Spanish"] = array();
	$fieldLabelstparam_naturaleza["Spanish"]["nat_id"] = "Nat Id";
	$fieldToolTipstparam_naturaleza["Spanish"]["nat_id"] = "";
	$placeHolderstparam_naturaleza["Spanish"]["nat_id"] = "";
	$fieldLabelstparam_naturaleza["Spanish"]["nat_nom"] = "Nat Nom";
	$fieldToolTipstparam_naturaleza["Spanish"]["nat_nom"] = "";
	$placeHolderstparam_naturaleza["Spanish"]["nat_nom"] = "";
	if (count($fieldToolTipstparam_naturaleza["Spanish"]))
		$tdatatparam_naturaleza[".isUseToolTips"] = true;
}


	$tdatatparam_naturaleza[".NCSearch"] = true;



$tdatatparam_naturaleza[".shortTableName"] = "tparam_naturaleza";
$tdatatparam_naturaleza[".nSecOptions"] = 0;

$tdatatparam_naturaleza[".mainTableOwnerID"] = "";
$tdatatparam_naturaleza[".entityType"] = 0;
$tdatatparam_naturaleza[".connId"] = "dbct_at_localhost";


$tdatatparam_naturaleza[".strOriginalTableName"] = "tparam_naturaleza";

	



$tdatatparam_naturaleza[".showAddInPopup"] = false;

$tdatatparam_naturaleza[".showEditInPopup"] = false;

$tdatatparam_naturaleza[".showViewInPopup"] = false;

$tdatatparam_naturaleza[".listAjax"] = false;
//	temporary
//$tdatatparam_naturaleza[".listAjax"] = false;

	$tdatatparam_naturaleza[".audit"] = false;

	$tdatatparam_naturaleza[".locking"] = false;


$pages = $tdatatparam_naturaleza[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_naturaleza[".edit"] = true;
	$tdatatparam_naturaleza[".afterEditAction"] = 1;
	$tdatatparam_naturaleza[".closePopupAfterEdit"] = 1;
	$tdatatparam_naturaleza[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_naturaleza[".add"] = true;
$tdatatparam_naturaleza[".afterAddAction"] = 1;
$tdatatparam_naturaleza[".closePopupAfterAdd"] = 1;
$tdatatparam_naturaleza[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_naturaleza[".list"] = true;
}



$tdatatparam_naturaleza[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_naturaleza[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_naturaleza[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_naturaleza[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_naturaleza[".printFriendly"] = true;
}



$tdatatparam_naturaleza[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_naturaleza[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_naturaleza[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_naturaleza[".isUseAjaxSuggest"] = true;



												

$tdatatparam_naturaleza[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_naturaleza[".buttonsAdded"] = false;

$tdatatparam_naturaleza[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_naturaleza[".isUseTimeForSearch"] = false;


$tdatatparam_naturaleza[".badgeColor"] = "CD853F";


$tdatatparam_naturaleza[".allSearchFields"] = array();
$tdatatparam_naturaleza[".filterFields"] = array();
$tdatatparam_naturaleza[".requiredSearchFields"] = array();

$tdatatparam_naturaleza[".googleLikeFields"] = array();
$tdatatparam_naturaleza[".googleLikeFields"][] = "nat_id";
$tdatatparam_naturaleza[".googleLikeFields"][] = "nat_nom";



$tdatatparam_naturaleza[".tableType"] = "list";

$tdatatparam_naturaleza[".printerPageOrientation"] = 0;
$tdatatparam_naturaleza[".nPrinterPageScale"] = 100;

$tdatatparam_naturaleza[".nPrinterSplitRecords"] = 40;

$tdatatparam_naturaleza[".geocodingEnabled"] = false;










$tdatatparam_naturaleza[".pageSize"] = 20;

$tdatatparam_naturaleza[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_naturaleza[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_naturaleza[".orderindexes"] = array();


$tdatatparam_naturaleza[".sqlHead"] = "SELECT nat_id,  	nat_nom";
$tdatatparam_naturaleza[".sqlFrom"] = "FROM tparam_naturaleza";
$tdatatparam_naturaleza[".sqlWhereExpr"] = "";
$tdatatparam_naturaleza[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_naturaleza[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_naturaleza[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_naturaleza[".highlightSearchResults"] = true;

$tableKeystparam_naturaleza = array();
$tableKeystparam_naturaleza[] = "nat_id";
$tdatatparam_naturaleza[".Keys"] = $tableKeystparam_naturaleza;


$tdatatparam_naturaleza[".hideMobileList"] = array();




//	nat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nat_id";
	$fdata["GoodName"] = "nat_id";
	$fdata["ownerTable"] = "tparam_naturaleza";
	$fdata["Label"] = GetFieldLabel("tparam_naturaleza","nat_id");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "nat_id";

		$fdata["sourceSingle"] = "nat_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nat_id";

	
	
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


	$tdatatparam_naturaleza["nat_id"] = $fdata;
		$tdatatparam_naturaleza[".searchableFields"][] = "nat_id";
//	nat_nom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nat_nom";
	$fdata["GoodName"] = "nat_nom";
	$fdata["ownerTable"] = "tparam_naturaleza";
	$fdata["Label"] = GetFieldLabel("tparam_naturaleza","nat_nom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nat_nom";

		$fdata["sourceSingle"] = "nat_nom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nat_nom";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdatatparam_naturaleza["nat_nom"] = $fdata;
		$tdatatparam_naturaleza[".searchableFields"][] = "nat_nom";


$tables_data["tparam_naturaleza"]=&$tdatatparam_naturaleza;
$field_labels["tparam_naturaleza"] = &$fieldLabelstparam_naturaleza;
$fieldToolTips["tparam_naturaleza"] = &$fieldToolTipstparam_naturaleza;
$placeHolders["tparam_naturaleza"] = &$placeHolderstparam_naturaleza;
$page_titles["tparam_naturaleza"] = &$pageTitlestparam_naturaleza;


changeTextControlsToDate( "tparam_naturaleza" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_naturaleza"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_naturaleza"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_naturaleza()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "nat_id,  	nat_nom";
$proto0["m_strFrom"] = "FROM tparam_naturaleza";
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
	"m_strName" => "nat_id",
	"m_strTable" => "tparam_naturaleza",
	"m_srcTableName" => "tparam_naturaleza"
));

$proto6["m_sql"] = "nat_id";
$proto6["m_srcTableName"] = "tparam_naturaleza";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nat_nom",
	"m_strTable" => "tparam_naturaleza",
	"m_srcTableName" => "tparam_naturaleza"
));

$proto8["m_sql"] = "nat_nom";
$proto8["m_srcTableName"] = "tparam_naturaleza";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_naturaleza";
$proto11["m_srcTableName"] = "tparam_naturaleza";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "nat_id";
$proto11["m_columns"][] = "nat_nom";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_naturaleza";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_naturaleza";
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
$proto0["m_srcTableName"]="tparam_naturaleza";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_naturaleza = createSqlQuery_tparam_naturaleza();


	
								;

		

$tdatatparam_naturaleza[".sqlquery"] = $queryData_tparam_naturaleza;



$tdatatparam_naturaleza[".hasEvents"] = false;

?>