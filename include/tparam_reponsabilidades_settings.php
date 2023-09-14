<?php
$tdatatparam_reponsabilidades = array();
$tdatatparam_reponsabilidades[".searchableFields"] = array();
$tdatatparam_reponsabilidades[".ShortName"] = "tparam_reponsabilidades";
$tdatatparam_reponsabilidades[".OwnerID"] = "";
$tdatatparam_reponsabilidades[".OriginalTable"] = "tparam_reponsabilidades";


$tdatatparam_reponsabilidades[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatparam_reponsabilidades[".originalPagesByType"] = $tdatatparam_reponsabilidades[".pagesByType"];
$tdatatparam_reponsabilidades[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatparam_reponsabilidades[".originalPages"] = $tdatatparam_reponsabilidades[".pages"];
$tdatatparam_reponsabilidades[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatparam_reponsabilidades[".originalDefaultPages"] = $tdatatparam_reponsabilidades[".defaultPages"];

//	field labels
$fieldLabelstparam_reponsabilidades = array();
$fieldToolTipstparam_reponsabilidades = array();
$pageTitlestparam_reponsabilidades = array();
$placeHolderstparam_reponsabilidades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_reponsabilidades["Spanish"] = array();
	$fieldToolTipstparam_reponsabilidades["Spanish"] = array();
	$placeHolderstparam_reponsabilidades["Spanish"] = array();
	$pageTitlestparam_reponsabilidades["Spanish"] = array();
	$fieldLabelstparam_reponsabilidades["Spanish"]["r_id"] = "ID";
	$fieldToolTipstparam_reponsabilidades["Spanish"]["r_id"] = "";
	$placeHolderstparam_reponsabilidades["Spanish"]["r_id"] = "";
	$fieldLabelstparam_reponsabilidades["Spanish"]["codigo"] = "Código INTERNO";
	$fieldToolTipstparam_reponsabilidades["Spanish"]["codigo"] = "";
	$placeHolderstparam_reponsabilidades["Spanish"]["codigo"] = "";
	$fieldLabelstparam_reponsabilidades["Spanish"]["responsabilidad"] = "Responsabilidad";
	$fieldToolTipstparam_reponsabilidades["Spanish"]["responsabilidad"] = "";
	$placeHolderstparam_reponsabilidades["Spanish"]["responsabilidad"] = "";
	if (count($fieldToolTipstparam_reponsabilidades["Spanish"]))
		$tdatatparam_reponsabilidades[".isUseToolTips"] = true;
}


	$tdatatparam_reponsabilidades[".NCSearch"] = true;



$tdatatparam_reponsabilidades[".shortTableName"] = "tparam_reponsabilidades";
$tdatatparam_reponsabilidades[".nSecOptions"] = 0;

$tdatatparam_reponsabilidades[".mainTableOwnerID"] = "";
$tdatatparam_reponsabilidades[".entityType"] = 0;
$tdatatparam_reponsabilidades[".connId"] = "dbct_at_localhost";


$tdatatparam_reponsabilidades[".strOriginalTableName"] = "tparam_reponsabilidades";

	



$tdatatparam_reponsabilidades[".showAddInPopup"] = false;

$tdatatparam_reponsabilidades[".showEditInPopup"] = false;

$tdatatparam_reponsabilidades[".showViewInPopup"] = false;

$tdatatparam_reponsabilidades[".listAjax"] = false;
//	temporary
//$tdatatparam_reponsabilidades[".listAjax"] = false;

	$tdatatparam_reponsabilidades[".audit"] = false;

	$tdatatparam_reponsabilidades[".locking"] = false;


$pages = $tdatatparam_reponsabilidades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_reponsabilidades[".edit"] = true;
	$tdatatparam_reponsabilidades[".afterEditAction"] = 1;
	$tdatatparam_reponsabilidades[".closePopupAfterEdit"] = 1;
	$tdatatparam_reponsabilidades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_reponsabilidades[".add"] = true;
$tdatatparam_reponsabilidades[".afterAddAction"] = 1;
$tdatatparam_reponsabilidades[".closePopupAfterAdd"] = 1;
$tdatatparam_reponsabilidades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_reponsabilidades[".list"] = true;
}



$tdatatparam_reponsabilidades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_reponsabilidades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_reponsabilidades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_reponsabilidades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_reponsabilidades[".printFriendly"] = true;
}



$tdatatparam_reponsabilidades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_reponsabilidades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_reponsabilidades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_reponsabilidades[".isUseAjaxSuggest"] = true;



												

$tdatatparam_reponsabilidades[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_reponsabilidades[".buttonsAdded"] = false;

$tdatatparam_reponsabilidades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_reponsabilidades[".isUseTimeForSearch"] = false;


$tdatatparam_reponsabilidades[".badgeColor"] = "CD853F";


$tdatatparam_reponsabilidades[".allSearchFields"] = array();
$tdatatparam_reponsabilidades[".filterFields"] = array();
$tdatatparam_reponsabilidades[".requiredSearchFields"] = array();

$tdatatparam_reponsabilidades[".googleLikeFields"] = array();
$tdatatparam_reponsabilidades[".googleLikeFields"][] = "codigo";
$tdatatparam_reponsabilidades[".googleLikeFields"][] = "r_id";
$tdatatparam_reponsabilidades[".googleLikeFields"][] = "responsabilidad";



$tdatatparam_reponsabilidades[".tableType"] = "list";

$tdatatparam_reponsabilidades[".printerPageOrientation"] = 0;
$tdatatparam_reponsabilidades[".nPrinterPageScale"] = 100;

$tdatatparam_reponsabilidades[".nPrinterSplitRecords"] = 40;

$tdatatparam_reponsabilidades[".geocodingEnabled"] = false;










$tdatatparam_reponsabilidades[".pageSize"] = 20;

$tdatatparam_reponsabilidades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_reponsabilidades[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_reponsabilidades[".orderindexes"] = array();


$tdatatparam_reponsabilidades[".sqlHead"] = "SELECT codigo,  	r_id,  	responsabilidad";
$tdatatparam_reponsabilidades[".sqlFrom"] = "FROM tparam_reponsabilidades";
$tdatatparam_reponsabilidades[".sqlWhereExpr"] = "";
$tdatatparam_reponsabilidades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_reponsabilidades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_reponsabilidades[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_reponsabilidades[".highlightSearchResults"] = true;

$tableKeystparam_reponsabilidades = array();
$tableKeystparam_reponsabilidades[] = "r_id";
$tdatatparam_reponsabilidades[".Keys"] = $tableKeystparam_reponsabilidades;


$tdatatparam_reponsabilidades[".hideMobileList"] = array();




//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "tparam_reponsabilidades";
	$fdata["Label"] = GetFieldLabel("tparam_reponsabilidades","codigo");
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


	$tdatatparam_reponsabilidades["codigo"] = $fdata;
		$tdatatparam_reponsabilidades[".searchableFields"][] = "codigo";
//	r_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "r_id";
	$fdata["GoodName"] = "r_id";
	$fdata["ownerTable"] = "tparam_reponsabilidades";
	$fdata["Label"] = GetFieldLabel("tparam_reponsabilidades","r_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "r_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "r_id";

	
	
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


	$tdatatparam_reponsabilidades["r_id"] = $fdata;
		$tdatatparam_reponsabilidades[".searchableFields"][] = "r_id";
//	responsabilidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "responsabilidad";
	$fdata["GoodName"] = "responsabilidad";
	$fdata["ownerTable"] = "tparam_reponsabilidades";
	$fdata["Label"] = GetFieldLabel("tparam_reponsabilidades","responsabilidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "responsabilidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "responsabilidad";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatatparam_reponsabilidades["responsabilidad"] = $fdata;
		$tdatatparam_reponsabilidades[".searchableFields"][] = "responsabilidad";


$tables_data["tparam_reponsabilidades"]=&$tdatatparam_reponsabilidades;
$field_labels["tparam_reponsabilidades"] = &$fieldLabelstparam_reponsabilidades;
$fieldToolTips["tparam_reponsabilidades"] = &$fieldToolTipstparam_reponsabilidades;
$placeHolders["tparam_reponsabilidades"] = &$placeHolderstparam_reponsabilidades;
$page_titles["tparam_reponsabilidades"] = &$pageTitlestparam_reponsabilidades;


changeTextControlsToDate( "tparam_reponsabilidades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_reponsabilidades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_reponsabilidades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_reponsabilidades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "codigo,  	r_id,  	responsabilidad";
$proto0["m_strFrom"] = "FROM tparam_reponsabilidades";
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
	"m_strTable" => "tparam_reponsabilidades",
	"m_srcTableName" => "tparam_reponsabilidades"
));

$proto6["m_sql"] = "codigo";
$proto6["m_srcTableName"] = "tparam_reponsabilidades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "r_id",
	"m_strTable" => "tparam_reponsabilidades",
	"m_srcTableName" => "tparam_reponsabilidades"
));

$proto8["m_sql"] = "r_id";
$proto8["m_srcTableName"] = "tparam_reponsabilidades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "responsabilidad",
	"m_strTable" => "tparam_reponsabilidades",
	"m_srcTableName" => "tparam_reponsabilidades"
));

$proto10["m_sql"] = "responsabilidad";
$proto10["m_srcTableName"] = "tparam_reponsabilidades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tparam_reponsabilidades";
$proto13["m_srcTableName"] = "tparam_reponsabilidades";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "codigo";
$proto13["m_columns"][] = "r_id";
$proto13["m_columns"][] = "responsabilidad";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tparam_reponsabilidades";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tparam_reponsabilidades";
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
$proto0["m_srcTableName"]="tparam_reponsabilidades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_reponsabilidades = createSqlQuery_tparam_reponsabilidades();


	
								;

			

$tdatatparam_reponsabilidades[".sqlquery"] = $queryData_tparam_reponsabilidades;



$tdatatparam_reponsabilidades[".hasEvents"] = false;

?>