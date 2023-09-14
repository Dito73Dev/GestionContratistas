<?php
$tdatacontrato_attached_type = array();
$tdatacontrato_attached_type[".searchableFields"] = array();
$tdatacontrato_attached_type[".ShortName"] = "contrato_attached_type";
$tdatacontrato_attached_type[".OwnerID"] = "";
$tdatacontrato_attached_type[".OriginalTable"] = "contrato_attached_type";


$tdatacontrato_attached_type[".pagesByType"] = my_json_decode( "{}" );
$tdatacontrato_attached_type[".originalPagesByType"] = $tdatacontrato_attached_type[".pagesByType"];
$tdatacontrato_attached_type[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatacontrato_attached_type[".originalPages"] = $tdatacontrato_attached_type[".pages"];
$tdatacontrato_attached_type[".defaultPages"] = my_json_decode( "{}" );
$tdatacontrato_attached_type[".originalDefaultPages"] = $tdatacontrato_attached_type[".defaultPages"];

//	field labels
$fieldLabelscontrato_attached_type = array();
$fieldToolTipscontrato_attached_type = array();
$pageTitlescontrato_attached_type = array();
$placeHolderscontrato_attached_type = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_attached_type["Spanish"] = array();
	$fieldToolTipscontrato_attached_type["Spanish"] = array();
	$placeHolderscontrato_attached_type["Spanish"] = array();
	$pageTitlescontrato_attached_type["Spanish"] = array();
	$fieldLabelscontrato_attached_type["Spanish"]["id_att_type"] = "Id Att Type";
	$fieldToolTipscontrato_attached_type["Spanish"]["id_att_type"] = "";
	$placeHolderscontrato_attached_type["Spanish"]["id_att_type"] = "";
	$fieldLabelscontrato_attached_type["Spanish"]["att_type_cod"] = "Att Type Cod";
	$fieldToolTipscontrato_attached_type["Spanish"]["att_type_cod"] = "";
	$placeHolderscontrato_attached_type["Spanish"]["att_type_cod"] = "";
	$fieldLabelscontrato_attached_type["Spanish"]["att_type_name"] = "Att Type Name";
	$fieldToolTipscontrato_attached_type["Spanish"]["att_type_name"] = "";
	$placeHolderscontrato_attached_type["Spanish"]["att_type_name"] = "";
	$fieldLabelscontrato_attached_type["Spanish"]["att_type_ctrl"] = "Att Type Ctrl";
	$fieldToolTipscontrato_attached_type["Spanish"]["att_type_ctrl"] = "";
	$placeHolderscontrato_attached_type["Spanish"]["att_type_ctrl"] = "";
	if (count($fieldToolTipscontrato_attached_type["Spanish"]))
		$tdatacontrato_attached_type[".isUseToolTips"] = true;
}


	$tdatacontrato_attached_type[".NCSearch"] = true;



$tdatacontrato_attached_type[".shortTableName"] = "contrato_attached_type";
$tdatacontrato_attached_type[".nSecOptions"] = 0;

$tdatacontrato_attached_type[".mainTableOwnerID"] = "";
$tdatacontrato_attached_type[".entityType"] = 0;
$tdatacontrato_attached_type[".connId"] = "dbct_at_localhost";


$tdatacontrato_attached_type[".strOriginalTableName"] = "contrato_attached_type";

	



$tdatacontrato_attached_type[".showAddInPopup"] = false;

$tdatacontrato_attached_type[".showEditInPopup"] = false;

$tdatacontrato_attached_type[".showViewInPopup"] = false;

$tdatacontrato_attached_type[".listAjax"] = false;
//	temporary
//$tdatacontrato_attached_type[".listAjax"] = false;

	$tdatacontrato_attached_type[".audit"] = false;

	$tdatacontrato_attached_type[".locking"] = false;


$pages = $tdatacontrato_attached_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_attached_type[".edit"] = true;
	$tdatacontrato_attached_type[".afterEditAction"] = 1;
	$tdatacontrato_attached_type[".closePopupAfterEdit"] = 1;
	$tdatacontrato_attached_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_attached_type[".add"] = true;
$tdatacontrato_attached_type[".afterAddAction"] = 1;
$tdatacontrato_attached_type[".closePopupAfterAdd"] = 1;
$tdatacontrato_attached_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_attached_type[".list"] = true;
}



$tdatacontrato_attached_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_attached_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_attached_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_attached_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_attached_type[".printFriendly"] = true;
}



$tdatacontrato_attached_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_attached_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_attached_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_attached_type[".isUseAjaxSuggest"] = true;



												

$tdatacontrato_attached_type[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_attached_type[".buttonsAdded"] = false;

$tdatacontrato_attached_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_attached_type[".isUseTimeForSearch"] = false;


$tdatacontrato_attached_type[".badgeColor"] = "BC8F8F";


$tdatacontrato_attached_type[".allSearchFields"] = array();
$tdatacontrato_attached_type[".filterFields"] = array();
$tdatacontrato_attached_type[".requiredSearchFields"] = array();

$tdatacontrato_attached_type[".googleLikeFields"] = array();
$tdatacontrato_attached_type[".googleLikeFields"][] = "att_type_cod";
$tdatacontrato_attached_type[".googleLikeFields"][] = "att_type_ctrl";
$tdatacontrato_attached_type[".googleLikeFields"][] = "att_type_name";
$tdatacontrato_attached_type[".googleLikeFields"][] = "id_att_type";



$tdatacontrato_attached_type[".tableType"] = "list";

$tdatacontrato_attached_type[".printerPageOrientation"] = 0;
$tdatacontrato_attached_type[".nPrinterPageScale"] = 100;

$tdatacontrato_attached_type[".nPrinterSplitRecords"] = 40;

$tdatacontrato_attached_type[".geocodingEnabled"] = false;










$tdatacontrato_attached_type[".pageSize"] = 20;

$tdatacontrato_attached_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontrato_attached_type[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_attached_type[".orderindexes"] = array();


$tdatacontrato_attached_type[".sqlHead"] = "SELECT att_type_cod,  	att_type_ctrl,  	att_type_name,  	id_att_type";
$tdatacontrato_attached_type[".sqlFrom"] = "FROM contrato_attached_type";
$tdatacontrato_attached_type[".sqlWhereExpr"] = "";
$tdatacontrato_attached_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_attached_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_attached_type[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_attached_type[".highlightSearchResults"] = true;

$tableKeyscontrato_attached_type = array();
$tableKeyscontrato_attached_type[] = "id_att_type";
$tdatacontrato_attached_type[".Keys"] = $tableKeyscontrato_attached_type;


$tdatacontrato_attached_type[".hideMobileList"] = array();




//	att_type_cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "att_type_cod";
	$fdata["GoodName"] = "att_type_cod";
	$fdata["ownerTable"] = "contrato_attached_type";
	$fdata["Label"] = GetFieldLabel("contrato_attached_type","att_type_cod");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "att_type_cod";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "att_type_cod";

	
	
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


	$tdatacontrato_attached_type["att_type_cod"] = $fdata;
		$tdatacontrato_attached_type[".searchableFields"][] = "att_type_cod";
//	att_type_ctrl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "att_type_ctrl";
	$fdata["GoodName"] = "att_type_ctrl";
	$fdata["ownerTable"] = "contrato_attached_type";
	$fdata["Label"] = GetFieldLabel("contrato_attached_type","att_type_ctrl");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "att_type_ctrl";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "att_type_ctrl";

	
	
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


	$tdatacontrato_attached_type["att_type_ctrl"] = $fdata;
		$tdatacontrato_attached_type[".searchableFields"][] = "att_type_ctrl";
//	att_type_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "att_type_name";
	$fdata["GoodName"] = "att_type_name";
	$fdata["ownerTable"] = "contrato_attached_type";
	$fdata["Label"] = GetFieldLabel("contrato_attached_type","att_type_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "att_type_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "att_type_name";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacontrato_attached_type["att_type_name"] = $fdata;
		$tdatacontrato_attached_type[".searchableFields"][] = "att_type_name";
//	id_att_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_att_type";
	$fdata["GoodName"] = "id_att_type";
	$fdata["ownerTable"] = "contrato_attached_type";
	$fdata["Label"] = GetFieldLabel("contrato_attached_type","id_att_type");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_att_type";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_att_type";

	
	
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


	$tdatacontrato_attached_type["id_att_type"] = $fdata;
		$tdatacontrato_attached_type[".searchableFields"][] = "id_att_type";


$tables_data["contrato_attached_type"]=&$tdatacontrato_attached_type;
$field_labels["contrato_attached_type"] = &$fieldLabelscontrato_attached_type;
$fieldToolTips["contrato_attached_type"] = &$fieldToolTipscontrato_attached_type;
$placeHolders["contrato_attached_type"] = &$placeHolderscontrato_attached_type;
$page_titles["contrato_attached_type"] = &$pageTitlescontrato_attached_type;


changeTextControlsToDate( "contrato_attached_type" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contrato_attached_type"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contrato_attached_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contrato_attached_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "att_type_cod,  	att_type_ctrl,  	att_type_name,  	id_att_type";
$proto0["m_strFrom"] = "FROM contrato_attached_type";
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
	"m_strName" => "att_type_cod",
	"m_strTable" => "contrato_attached_type",
	"m_srcTableName" => "contrato_attached_type"
));

$proto6["m_sql"] = "att_type_cod";
$proto6["m_srcTableName"] = "contrato_attached_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "att_type_ctrl",
	"m_strTable" => "contrato_attached_type",
	"m_srcTableName" => "contrato_attached_type"
));

$proto8["m_sql"] = "att_type_ctrl";
$proto8["m_srcTableName"] = "contrato_attached_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "att_type_name",
	"m_strTable" => "contrato_attached_type",
	"m_srcTableName" => "contrato_attached_type"
));

$proto10["m_sql"] = "att_type_name";
$proto10["m_srcTableName"] = "contrato_attached_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_att_type",
	"m_strTable" => "contrato_attached_type",
	"m_srcTableName" => "contrato_attached_type"
));

$proto12["m_sql"] = "id_att_type";
$proto12["m_srcTableName"] = "contrato_attached_type";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "contrato_attached_type";
$proto15["m_srcTableName"] = "contrato_attached_type";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "att_type_cod";
$proto15["m_columns"][] = "att_type_ctrl";
$proto15["m_columns"][] = "att_type_name";
$proto15["m_columns"][] = "id_att_type";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "contrato_attached_type";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "contrato_attached_type";
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
$proto0["m_srcTableName"]="contrato_attached_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_attached_type = createSqlQuery_contrato_attached_type();


	
								;

				

$tdatacontrato_attached_type[".sqlquery"] = $queryData_contrato_attached_type;



$tdatacontrato_attached_type[".hasEvents"] = false;

?>