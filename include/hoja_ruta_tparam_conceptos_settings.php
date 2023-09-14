<?php
$tdatahoja_ruta_tparam_conceptos = array();
$tdatahoja_ruta_tparam_conceptos[".searchableFields"] = array();
$tdatahoja_ruta_tparam_conceptos[".ShortName"] = "hoja_ruta_tparam_conceptos";
$tdatahoja_ruta_tparam_conceptos[".OwnerID"] = "";
$tdatahoja_ruta_tparam_conceptos[".OriginalTable"] = "hoja_ruta_tparam_conceptos";


$tdatahoja_ruta_tparam_conceptos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahoja_ruta_tparam_conceptos[".originalPagesByType"] = $tdatahoja_ruta_tparam_conceptos[".pagesByType"];
$tdatahoja_ruta_tparam_conceptos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahoja_ruta_tparam_conceptos[".originalPages"] = $tdatahoja_ruta_tparam_conceptos[".pages"];
$tdatahoja_ruta_tparam_conceptos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahoja_ruta_tparam_conceptos[".originalDefaultPages"] = $tdatahoja_ruta_tparam_conceptos[".defaultPages"];

//	field labels
$fieldLabelshoja_ruta_tparam_conceptos = array();
$fieldToolTipshoja_ruta_tparam_conceptos = array();
$pageTitleshoja_ruta_tparam_conceptos = array();
$placeHoldershoja_ruta_tparam_conceptos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshoja_ruta_tparam_conceptos["Spanish"] = array();
	$fieldToolTipshoja_ruta_tparam_conceptos["Spanish"] = array();
	$placeHoldershoja_ruta_tparam_conceptos["Spanish"] = array();
	$pageTitleshoja_ruta_tparam_conceptos["Spanish"] = array();
	$fieldLabelshoja_ruta_tparam_conceptos["Spanish"]["concepto_id"] = "Concepto Id";
	$fieldToolTipshoja_ruta_tparam_conceptos["Spanish"]["concepto_id"] = "";
	$placeHoldershoja_ruta_tparam_conceptos["Spanish"]["concepto_id"] = "";
	$fieldLabelshoja_ruta_tparam_conceptos["Spanish"]["concepto"] = "Concepto";
	$fieldToolTipshoja_ruta_tparam_conceptos["Spanish"]["concepto"] = "";
	$placeHoldershoja_ruta_tparam_conceptos["Spanish"]["concepto"] = "";
	$fieldLabelshoja_ruta_tparam_conceptos["Spanish"]["concepto_grupo"] = "Concepto Grupo";
	$fieldToolTipshoja_ruta_tparam_conceptos["Spanish"]["concepto_grupo"] = "";
	$placeHoldershoja_ruta_tparam_conceptos["Spanish"]["concepto_grupo"] = "";
	if (count($fieldToolTipshoja_ruta_tparam_conceptos["Spanish"]))
		$tdatahoja_ruta_tparam_conceptos[".isUseToolTips"] = true;
}


	$tdatahoja_ruta_tparam_conceptos[".NCSearch"] = true;



$tdatahoja_ruta_tparam_conceptos[".shortTableName"] = "hoja_ruta_tparam_conceptos";
$tdatahoja_ruta_tparam_conceptos[".nSecOptions"] = 0;

$tdatahoja_ruta_tparam_conceptos[".mainTableOwnerID"] = "";
$tdatahoja_ruta_tparam_conceptos[".entityType"] = 0;
$tdatahoja_ruta_tparam_conceptos[".connId"] = "contratacion_at_172_18_0_115";


$tdatahoja_ruta_tparam_conceptos[".strOriginalTableName"] = "hoja_ruta_tparam_conceptos";

	



$tdatahoja_ruta_tparam_conceptos[".showAddInPopup"] = false;

$tdatahoja_ruta_tparam_conceptos[".showEditInPopup"] = false;

$tdatahoja_ruta_tparam_conceptos[".showViewInPopup"] = false;

$tdatahoja_ruta_tparam_conceptos[".listAjax"] = false;
//	temporary
//$tdatahoja_ruta_tparam_conceptos[".listAjax"] = false;

	$tdatahoja_ruta_tparam_conceptos[".audit"] = false;

	$tdatahoja_ruta_tparam_conceptos[".locking"] = false;


$pages = $tdatahoja_ruta_tparam_conceptos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahoja_ruta_tparam_conceptos[".edit"] = true;
	$tdatahoja_ruta_tparam_conceptos[".afterEditAction"] = 1;
	$tdatahoja_ruta_tparam_conceptos[".closePopupAfterEdit"] = 1;
	$tdatahoja_ruta_tparam_conceptos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahoja_ruta_tparam_conceptos[".add"] = true;
$tdatahoja_ruta_tparam_conceptos[".afterAddAction"] = 1;
$tdatahoja_ruta_tparam_conceptos[".closePopupAfterAdd"] = 1;
$tdatahoja_ruta_tparam_conceptos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahoja_ruta_tparam_conceptos[".list"] = true;
}



$tdatahoja_ruta_tparam_conceptos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahoja_ruta_tparam_conceptos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahoja_ruta_tparam_conceptos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahoja_ruta_tparam_conceptos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahoja_ruta_tparam_conceptos[".printFriendly"] = true;
}



$tdatahoja_ruta_tparam_conceptos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahoja_ruta_tparam_conceptos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahoja_ruta_tparam_conceptos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahoja_ruta_tparam_conceptos[".isUseAjaxSuggest"] = true;



												

$tdatahoja_ruta_tparam_conceptos[".ajaxCodeSnippetAdded"] = false;

$tdatahoja_ruta_tparam_conceptos[".buttonsAdded"] = false;

$tdatahoja_ruta_tparam_conceptos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahoja_ruta_tparam_conceptos[".isUseTimeForSearch"] = false;


$tdatahoja_ruta_tparam_conceptos[".badgeColor"] = "4682B4";


$tdatahoja_ruta_tparam_conceptos[".allSearchFields"] = array();
$tdatahoja_ruta_tparam_conceptos[".filterFields"] = array();
$tdatahoja_ruta_tparam_conceptos[".requiredSearchFields"] = array();

$tdatahoja_ruta_tparam_conceptos[".googleLikeFields"] = array();
$tdatahoja_ruta_tparam_conceptos[".googleLikeFields"][] = "concepto";
$tdatahoja_ruta_tparam_conceptos[".googleLikeFields"][] = "concepto_grupo";
$tdatahoja_ruta_tparam_conceptos[".googleLikeFields"][] = "concepto_id";



$tdatahoja_ruta_tparam_conceptos[".tableType"] = "list";

$tdatahoja_ruta_tparam_conceptos[".printerPageOrientation"] = 0;
$tdatahoja_ruta_tparam_conceptos[".nPrinterPageScale"] = 100;

$tdatahoja_ruta_tparam_conceptos[".nPrinterSplitRecords"] = 40;

$tdatahoja_ruta_tparam_conceptos[".geocodingEnabled"] = false;










$tdatahoja_ruta_tparam_conceptos[".pageSize"] = 20;

$tdatahoja_ruta_tparam_conceptos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahoja_ruta_tparam_conceptos[".strOrderBy"] = $tstrOrderBy;

$tdatahoja_ruta_tparam_conceptos[".orderindexes"] = array();


$tdatahoja_ruta_tparam_conceptos[".sqlHead"] = "SELECT concepto,  	concepto_grupo,  	concepto_id";
$tdatahoja_ruta_tparam_conceptos[".sqlFrom"] = "FROM hoja_ruta_tparam_conceptos";
$tdatahoja_ruta_tparam_conceptos[".sqlWhereExpr"] = "";
$tdatahoja_ruta_tparam_conceptos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahoja_ruta_tparam_conceptos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahoja_ruta_tparam_conceptos[".arrGroupsPerPage"] = $arrGPP;

$tdatahoja_ruta_tparam_conceptos[".highlightSearchResults"] = true;

$tableKeyshoja_ruta_tparam_conceptos = array();
$tableKeyshoja_ruta_tparam_conceptos[] = "concepto_id";
$tdatahoja_ruta_tparam_conceptos[".Keys"] = $tableKeyshoja_ruta_tparam_conceptos;


$tdatahoja_ruta_tparam_conceptos[".hideMobileList"] = array();




//	concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "concepto";
	$fdata["GoodName"] = "concepto";
	$fdata["ownerTable"] = "hoja_ruta_tparam_conceptos";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_tparam_conceptos","concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "concepto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concepto";

	
	
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


	$tdatahoja_ruta_tparam_conceptos["concepto"] = $fdata;
		$tdatahoja_ruta_tparam_conceptos[".searchableFields"][] = "concepto";
//	concepto_grupo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "concepto_grupo";
	$fdata["GoodName"] = "concepto_grupo";
	$fdata["ownerTable"] = "hoja_ruta_tparam_conceptos";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_tparam_conceptos","concepto_grupo");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "concepto_grupo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concepto_grupo";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatahoja_ruta_tparam_conceptos["concepto_grupo"] = $fdata;
		$tdatahoja_ruta_tparam_conceptos[".searchableFields"][] = "concepto_grupo";
//	concepto_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "concepto_id";
	$fdata["GoodName"] = "concepto_id";
	$fdata["ownerTable"] = "hoja_ruta_tparam_conceptos";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_tparam_conceptos","concepto_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "concepto_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concepto_id";

	
	
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


	$tdatahoja_ruta_tparam_conceptos["concepto_id"] = $fdata;
		$tdatahoja_ruta_tparam_conceptos[".searchableFields"][] = "concepto_id";


$tables_data["hoja_ruta_tparam_conceptos"]=&$tdatahoja_ruta_tparam_conceptos;
$field_labels["hoja_ruta_tparam_conceptos"] = &$fieldLabelshoja_ruta_tparam_conceptos;
$fieldToolTips["hoja_ruta_tparam_conceptos"] = &$fieldToolTipshoja_ruta_tparam_conceptos;
$placeHolders["hoja_ruta_tparam_conceptos"] = &$placeHoldershoja_ruta_tparam_conceptos;
$page_titles["hoja_ruta_tparam_conceptos"] = &$pageTitleshoja_ruta_tparam_conceptos;


changeTextControlsToDate( "hoja_ruta_tparam_conceptos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hoja_ruta_tparam_conceptos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hoja_ruta_tparam_conceptos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hoja_ruta_tparam_conceptos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "concepto,  	concepto_grupo,  	concepto_id";
$proto0["m_strFrom"] = "FROM hoja_ruta_tparam_conceptos";
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
	"m_strName" => "concepto",
	"m_strTable" => "hoja_ruta_tparam_conceptos",
	"m_srcTableName" => "hoja_ruta_tparam_conceptos"
));

$proto6["m_sql"] = "concepto";
$proto6["m_srcTableName"] = "hoja_ruta_tparam_conceptos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "concepto_grupo",
	"m_strTable" => "hoja_ruta_tparam_conceptos",
	"m_srcTableName" => "hoja_ruta_tparam_conceptos"
));

$proto8["m_sql"] = "concepto_grupo";
$proto8["m_srcTableName"] = "hoja_ruta_tparam_conceptos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "concepto_id",
	"m_strTable" => "hoja_ruta_tparam_conceptos",
	"m_srcTableName" => "hoja_ruta_tparam_conceptos"
));

$proto10["m_sql"] = "concepto_id";
$proto10["m_srcTableName"] = "hoja_ruta_tparam_conceptos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "hoja_ruta_tparam_conceptos";
$proto13["m_srcTableName"] = "hoja_ruta_tparam_conceptos";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "concepto";
$proto13["m_columns"][] = "concepto_grupo";
$proto13["m_columns"][] = "concepto_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "hoja_ruta_tparam_conceptos";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "hoja_ruta_tparam_conceptos";
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
$proto0["m_srcTableName"]="hoja_ruta_tparam_conceptos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hoja_ruta_tparam_conceptos = createSqlQuery_hoja_ruta_tparam_conceptos();


	
								;

			

$tdatahoja_ruta_tparam_conceptos[".sqlquery"] = $queryData_hoja_ruta_tparam_conceptos;



$tdatahoja_ruta_tparam_conceptos[".hasEvents"] = false;

?>