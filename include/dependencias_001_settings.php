<?php
$tdatadependencias_001 = array();
$tdatadependencias_001[".searchableFields"] = array();
$tdatadependencias_001[".ShortName"] = "dependencias_001";
$tdatadependencias_001[".OwnerID"] = "";
$tdatadependencias_001[".OriginalTable"] = "dependencias_001";


$tdatadependencias_001[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatadependencias_001[".originalPagesByType"] = $tdatadependencias_001[".pagesByType"];
$tdatadependencias_001[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatadependencias_001[".originalPages"] = $tdatadependencias_001[".pages"];
$tdatadependencias_001[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatadependencias_001[".originalDefaultPages"] = $tdatadependencias_001[".defaultPages"];

//	field labels
$fieldLabelsdependencias_001 = array();
$fieldToolTipsdependencias_001 = array();
$pageTitlesdependencias_001 = array();
$placeHoldersdependencias_001 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdependencias_001["Spanish"] = array();
	$fieldToolTipsdependencias_001["Spanish"] = array();
	$placeHoldersdependencias_001["Spanish"] = array();
	$pageTitlesdependencias_001["Spanish"] = array();
	$fieldLabelsdependencias_001["Spanish"]["id_depto_superior"] = "Id Depto Superior";
	$fieldToolTipsdependencias_001["Spanish"]["id_depto_superior"] = "";
	$placeHoldersdependencias_001["Spanish"]["id_depto_superior"] = "";
	$fieldLabelsdependencias_001["Spanish"]["Departamento_superior"] = "Departamento Superior";
	$fieldToolTipsdependencias_001["Spanish"]["Departamento_superior"] = "";
	$placeHoldersdependencias_001["Spanish"]["Departamento_superior"] = "";
	$fieldLabelsdependencias_001["Spanish"]["estructura"] = "Estructura";
	$fieldToolTipsdependencias_001["Spanish"]["estructura"] = "";
	$placeHoldersdependencias_001["Spanish"]["estructura"] = "";
	if (count($fieldToolTipsdependencias_001["Spanish"]))
		$tdatadependencias_001[".isUseToolTips"] = true;
}


	$tdatadependencias_001[".NCSearch"] = true;



$tdatadependencias_001[".shortTableName"] = "dependencias_001";
$tdatadependencias_001[".nSecOptions"] = 0;

$tdatadependencias_001[".mainTableOwnerID"] = "";
$tdatadependencias_001[".entityType"] = 0;
$tdatadependencias_001[".connId"] = "edl_at_127_0_0_1";


$tdatadependencias_001[".strOriginalTableName"] = "dependencias_001";

	



$tdatadependencias_001[".showAddInPopup"] = false;

$tdatadependencias_001[".showEditInPopup"] = false;

$tdatadependencias_001[".showViewInPopup"] = false;

$tdatadependencias_001[".listAjax"] = false;
//	temporary
//$tdatadependencias_001[".listAjax"] = false;

	$tdatadependencias_001[".audit"] = true;

	$tdatadependencias_001[".locking"] = true;


$pages = $tdatadependencias_001[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadependencias_001[".edit"] = true;
	$tdatadependencias_001[".afterEditAction"] = 1;
	$tdatadependencias_001[".closePopupAfterEdit"] = 1;
	$tdatadependencias_001[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadependencias_001[".add"] = true;
$tdatadependencias_001[".afterAddAction"] = 1;
$tdatadependencias_001[".closePopupAfterAdd"] = 1;
$tdatadependencias_001[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadependencias_001[".list"] = true;
}



$tdatadependencias_001[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadependencias_001[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadependencias_001[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadependencias_001[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadependencias_001[".printFriendly"] = true;
}



$tdatadependencias_001[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadependencias_001[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadependencias_001[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadependencias_001[".isUseAjaxSuggest"] = true;



												

$tdatadependencias_001[".ajaxCodeSnippetAdded"] = false;

$tdatadependencias_001[".buttonsAdded"] = false;

$tdatadependencias_001[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadependencias_001[".isUseTimeForSearch"] = false;


$tdatadependencias_001[".badgeColor"] = "CD5C5C";


$tdatadependencias_001[".allSearchFields"] = array();
$tdatadependencias_001[".filterFields"] = array();
$tdatadependencias_001[".requiredSearchFields"] = array();

$tdatadependencias_001[".googleLikeFields"] = array();
$tdatadependencias_001[".googleLikeFields"][] = "Departamento_superior";
$tdatadependencias_001[".googleLikeFields"][] = "estructura";
$tdatadependencias_001[".googleLikeFields"][] = "id_depto_superior";



$tdatadependencias_001[".tableType"] = "list";

$tdatadependencias_001[".printerPageOrientation"] = 0;
$tdatadependencias_001[".nPrinterPageScale"] = 100;

$tdatadependencias_001[".nPrinterSplitRecords"] = 40;

$tdatadependencias_001[".geocodingEnabled"] = false;










$tdatadependencias_001[".pageSize"] = 20;

$tdatadependencias_001[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadependencias_001[".strOrderBy"] = $tstrOrderBy;

$tdatadependencias_001[".orderindexes"] = array();


$tdatadependencias_001[".sqlHead"] = "SELECT Departamento_superior,  	estructura,  	id_depto_superior";
$tdatadependencias_001[".sqlFrom"] = "FROM dependencias_001";
$tdatadependencias_001[".sqlWhereExpr"] = "";
$tdatadependencias_001[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadependencias_001[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadependencias_001[".arrGroupsPerPage"] = $arrGPP;

$tdatadependencias_001[".highlightSearchResults"] = true;

$tableKeysdependencias_001 = array();
$tdatadependencias_001[".Keys"] = $tableKeysdependencias_001;


$tdatadependencias_001[".hideMobileList"] = array();




//	Departamento_superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Departamento_superior";
	$fdata["GoodName"] = "Departamento_superior";
	$fdata["ownerTable"] = "dependencias_001";
	$fdata["Label"] = GetFieldLabel("dependencias_001","Departamento_superior");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Departamento_superior";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Departamento_superior";

	
	
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


	$tdatadependencias_001["Departamento_superior"] = $fdata;
		$tdatadependencias_001[".searchableFields"][] = "Departamento_superior";
//	estructura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estructura";
	$fdata["GoodName"] = "estructura";
	$fdata["ownerTable"] = "dependencias_001";
	$fdata["Label"] = GetFieldLabel("dependencias_001","estructura");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estructura";

		$fdata["sourceSingle"] = "estructura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estructura";

	
	
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


	$tdatadependencias_001["estructura"] = $fdata;
		$tdatadependencias_001[".searchableFields"][] = "estructura";
//	id_depto_superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_depto_superior";
	$fdata["GoodName"] = "id_depto_superior";
	$fdata["ownerTable"] = "dependencias_001";
	$fdata["Label"] = GetFieldLabel("dependencias_001","id_depto_superior");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_depto_superior";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_depto_superior";

	
	
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


	$tdatadependencias_001["id_depto_superior"] = $fdata;
		$tdatadependencias_001[".searchableFields"][] = "id_depto_superior";


$tables_data["dependencias_001"]=&$tdatadependencias_001;
$field_labels["dependencias_001"] = &$fieldLabelsdependencias_001;
$fieldToolTips["dependencias_001"] = &$fieldToolTipsdependencias_001;
$placeHolders["dependencias_001"] = &$placeHoldersdependencias_001;
$page_titles["dependencias_001"] = &$pageTitlesdependencias_001;


changeTextControlsToDate( "dependencias_001" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dependencias_001"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dependencias_001"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dependencias_001()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Departamento_superior,  	estructura,  	id_depto_superior";
$proto0["m_strFrom"] = "FROM dependencias_001";
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
	"m_strName" => "Departamento_superior",
	"m_strTable" => "dependencias_001",
	"m_srcTableName" => "dependencias_001"
));

$proto6["m_sql"] = "Departamento_superior";
$proto6["m_srcTableName"] = "dependencias_001";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estructura",
	"m_strTable" => "dependencias_001",
	"m_srcTableName" => "dependencias_001"
));

$proto8["m_sql"] = "estructura";
$proto8["m_srcTableName"] = "dependencias_001";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_depto_superior",
	"m_strTable" => "dependencias_001",
	"m_srcTableName" => "dependencias_001"
));

$proto10["m_sql"] = "id_depto_superior";
$proto10["m_srcTableName"] = "dependencias_001";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "dependencias_001";
$proto13["m_srcTableName"] = "dependencias_001";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "Departamento_superior";
$proto13["m_columns"][] = "estructura";
$proto13["m_columns"][] = "id_depto_superior";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "dependencias_001";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "dependencias_001";
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
$proto0["m_srcTableName"]="dependencias_001";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dependencias_001 = createSqlQuery_dependencias_001();


	
								;

			

$tdatadependencias_001[".sqlquery"] = $queryData_dependencias_001;



$tdatadependencias_001[".hasEvents"] = false;

?>