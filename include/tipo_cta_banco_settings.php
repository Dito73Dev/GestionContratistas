<?php
$tdatatipo_cta_banco = array();
$tdatatipo_cta_banco[".searchableFields"] = array();
$tdatatipo_cta_banco[".ShortName"] = "tipo_cta_banco";
$tdatatipo_cta_banco[".OwnerID"] = "";
$tdatatipo_cta_banco[".OriginalTable"] = "tipo_cta_banco";


$tdatatipo_cta_banco[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatatipo_cta_banco[".originalPagesByType"] = $tdatatipo_cta_banco[".pagesByType"];
$tdatatipo_cta_banco[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatatipo_cta_banco[".originalPages"] = $tdatatipo_cta_banco[".pages"];
$tdatatipo_cta_banco[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatatipo_cta_banco[".originalDefaultPages"] = $tdatatipo_cta_banco[".defaultPages"];

//	field labels
$fieldLabelstipo_cta_banco = array();
$fieldToolTipstipo_cta_banco = array();
$pageTitlestipo_cta_banco = array();
$placeHolderstipo_cta_banco = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_cta_banco["Spanish"] = array();
	$fieldToolTipstipo_cta_banco["Spanish"] = array();
	$placeHolderstipo_cta_banco["Spanish"] = array();
	$pageTitlestipo_cta_banco["Spanish"] = array();
	$fieldLabelstipo_cta_banco["Spanish"]["cta_numero"] = "Cta Numero";
	$fieldToolTipstipo_cta_banco["Spanish"]["cta_numero"] = "";
	$placeHolderstipo_cta_banco["Spanish"]["cta_numero"] = "";
	$fieldLabelstipo_cta_banco["Spanish"]["cta_tipotext"] = "Cta Tipotext";
	$fieldToolTipstipo_cta_banco["Spanish"]["cta_tipotext"] = "";
	$placeHolderstipo_cta_banco["Spanish"]["cta_tipotext"] = "";
	$fieldLabelstipo_cta_banco["Spanish"]["des_cuenta"] = "Des Cuenta";
	$fieldToolTipstipo_cta_banco["Spanish"]["des_cuenta"] = "";
	$placeHolderstipo_cta_banco["Spanish"]["des_cuenta"] = "";
	if (count($fieldToolTipstipo_cta_banco["Spanish"]))
		$tdatatipo_cta_banco[".isUseToolTips"] = true;
}


	$tdatatipo_cta_banco[".NCSearch"] = true;



$tdatatipo_cta_banco[".shortTableName"] = "tipo_cta_banco";
$tdatatipo_cta_banco[".nSecOptions"] = 0;

$tdatatipo_cta_banco[".mainTableOwnerID"] = "";
$tdatatipo_cta_banco[".entityType"] = 0;
$tdatatipo_cta_banco[".connId"] = "dbct_at_localhost";


$tdatatipo_cta_banco[".strOriginalTableName"] = "tipo_cta_banco";

	



$tdatatipo_cta_banco[".showAddInPopup"] = false;

$tdatatipo_cta_banco[".showEditInPopup"] = false;

$tdatatipo_cta_banco[".showViewInPopup"] = false;

$tdatatipo_cta_banco[".listAjax"] = false;
//	temporary
//$tdatatipo_cta_banco[".listAjax"] = false;

	$tdatatipo_cta_banco[".audit"] = true;

	$tdatatipo_cta_banco[".locking"] = true;


$pages = $tdatatipo_cta_banco[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipo_cta_banco[".edit"] = true;
	$tdatatipo_cta_banco[".afterEditAction"] = 1;
	$tdatatipo_cta_banco[".closePopupAfterEdit"] = 1;
	$tdatatipo_cta_banco[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipo_cta_banco[".add"] = true;
$tdatatipo_cta_banco[".afterAddAction"] = 1;
$tdatatipo_cta_banco[".closePopupAfterAdd"] = 1;
$tdatatipo_cta_banco[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipo_cta_banco[".list"] = true;
}



$tdatatipo_cta_banco[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipo_cta_banco[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipo_cta_banco[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipo_cta_banco[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipo_cta_banco[".printFriendly"] = true;
}



$tdatatipo_cta_banco[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipo_cta_banco[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipo_cta_banco[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipo_cta_banco[".isUseAjaxSuggest"] = true;



												

$tdatatipo_cta_banco[".ajaxCodeSnippetAdded"] = false;

$tdatatipo_cta_banco[".buttonsAdded"] = false;

$tdatatipo_cta_banco[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_cta_banco[".isUseTimeForSearch"] = false;


$tdatatipo_cta_banco[".badgeColor"] = "D2AF80";


$tdatatipo_cta_banco[".allSearchFields"] = array();
$tdatatipo_cta_banco[".filterFields"] = array();
$tdatatipo_cta_banco[".requiredSearchFields"] = array();

$tdatatipo_cta_banco[".googleLikeFields"] = array();
$tdatatipo_cta_banco[".googleLikeFields"][] = "cta_numero";
$tdatatipo_cta_banco[".googleLikeFields"][] = "cta_tipotext";
$tdatatipo_cta_banco[".googleLikeFields"][] = "des_cuenta";



$tdatatipo_cta_banco[".tableType"] = "list";

$tdatatipo_cta_banco[".printerPageOrientation"] = 0;
$tdatatipo_cta_banco[".nPrinterPageScale"] = 100;

$tdatatipo_cta_banco[".nPrinterSplitRecords"] = 40;

$tdatatipo_cta_banco[".geocodingEnabled"] = false;










$tdatatipo_cta_banco[".pageSize"] = 20;

$tdatatipo_cta_banco[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipo_cta_banco[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_cta_banco[".orderindexes"] = array();


$tdatatipo_cta_banco[".sqlHead"] = "SELECT cta_numero,  	cta_tipotext,  	des_cuenta";
$tdatatipo_cta_banco[".sqlFrom"] = "FROM tipo_cta_banco";
$tdatatipo_cta_banco[".sqlWhereExpr"] = "";
$tdatatipo_cta_banco[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_cta_banco[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_cta_banco[".arrGroupsPerPage"] = $arrGPP;

$tdatatipo_cta_banco[".highlightSearchResults"] = true;

$tableKeystipo_cta_banco = array();
$tdatatipo_cta_banco[".Keys"] = $tableKeystipo_cta_banco;


$tdatatipo_cta_banco[".hideMobileList"] = array();




//	cta_numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cta_numero";
	$fdata["GoodName"] = "cta_numero";
	$fdata["ownerTable"] = "tipo_cta_banco";
	$fdata["Label"] = GetFieldLabel("tipo_cta_banco","cta_numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cta_numero";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cta_numero";

	
	
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


	$tdatatipo_cta_banco["cta_numero"] = $fdata;
		$tdatatipo_cta_banco[".searchableFields"][] = "cta_numero";
//	cta_tipotext
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cta_tipotext";
	$fdata["GoodName"] = "cta_tipotext";
	$fdata["ownerTable"] = "tipo_cta_banco";
	$fdata["Label"] = GetFieldLabel("tipo_cta_banco","cta_tipotext");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cta_tipotext";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cta_tipotext";

	
	
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


	$tdatatipo_cta_banco["cta_tipotext"] = $fdata;
		$tdatatipo_cta_banco[".searchableFields"][] = "cta_tipotext";
//	des_cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "des_cuenta";
	$fdata["GoodName"] = "des_cuenta";
	$fdata["ownerTable"] = "tipo_cta_banco";
	$fdata["Label"] = GetFieldLabel("tipo_cta_banco","des_cuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "des_cuenta";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "des_cuenta";

	
	
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


	$tdatatipo_cta_banco["des_cuenta"] = $fdata;
		$tdatatipo_cta_banco[".searchableFields"][] = "des_cuenta";


$tables_data["tipo_cta_banco"]=&$tdatatipo_cta_banco;
$field_labels["tipo_cta_banco"] = &$fieldLabelstipo_cta_banco;
$fieldToolTips["tipo_cta_banco"] = &$fieldToolTipstipo_cta_banco;
$placeHolders["tipo_cta_banco"] = &$placeHolderstipo_cta_banco;
$page_titles["tipo_cta_banco"] = &$pageTitlestipo_cta_banco;


changeTextControlsToDate( "tipo_cta_banco" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tipo_cta_banco"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tipo_cta_banco"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipo_cta_banco()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cta_numero,  	cta_tipotext,  	des_cuenta";
$proto0["m_strFrom"] = "FROM tipo_cta_banco";
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
	"m_strName" => "cta_numero",
	"m_strTable" => "tipo_cta_banco",
	"m_srcTableName" => "tipo_cta_banco"
));

$proto6["m_sql"] = "cta_numero";
$proto6["m_srcTableName"] = "tipo_cta_banco";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cta_tipotext",
	"m_strTable" => "tipo_cta_banco",
	"m_srcTableName" => "tipo_cta_banco"
));

$proto8["m_sql"] = "cta_tipotext";
$proto8["m_srcTableName"] = "tipo_cta_banco";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "des_cuenta",
	"m_strTable" => "tipo_cta_banco",
	"m_srcTableName" => "tipo_cta_banco"
));

$proto10["m_sql"] = "des_cuenta";
$proto10["m_srcTableName"] = "tipo_cta_banco";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tipo_cta_banco";
$proto13["m_srcTableName"] = "tipo_cta_banco";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "cta_numero";
$proto13["m_columns"][] = "cta_tipotext";
$proto13["m_columns"][] = "des_cuenta";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tipo_cta_banco";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tipo_cta_banco";
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
$proto0["m_srcTableName"]="tipo_cta_banco";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_cta_banco = createSqlQuery_tipo_cta_banco();


	
								;

			

$tdatatipo_cta_banco[".sqlquery"] = $queryData_tipo_cta_banco;



$tdatatipo_cta_banco[".hasEvents"] = false;

?>