<?php
$tdatainforme_intersup_estado = array();
$tdatainforme_intersup_estado[".searchableFields"] = array();
$tdatainforme_intersup_estado[".ShortName"] = "informe_intersup_estado";
$tdatainforme_intersup_estado[".OwnerID"] = "";
$tdatainforme_intersup_estado[".OriginalTable"] = "informe_intersup_estado";


$tdatainforme_intersup_estado[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatainforme_intersup_estado[".originalPagesByType"] = $tdatainforme_intersup_estado[".pagesByType"];
$tdatainforme_intersup_estado[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatainforme_intersup_estado[".originalPages"] = $tdatainforme_intersup_estado[".pages"];
$tdatainforme_intersup_estado[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatainforme_intersup_estado[".originalDefaultPages"] = $tdatainforme_intersup_estado[".defaultPages"];

//	field labels
$fieldLabelsinforme_intersup_estado = array();
$fieldToolTipsinforme_intersup_estado = array();
$pageTitlesinforme_intersup_estado = array();
$placeHoldersinforme_intersup_estado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinforme_intersup_estado["Spanish"] = array();
	$fieldToolTipsinforme_intersup_estado["Spanish"] = array();
	$placeHoldersinforme_intersup_estado["Spanish"] = array();
	$pageTitlesinforme_intersup_estado["Spanish"] = array();
	$fieldLabelsinforme_intersup_estado["Spanish"]["estadoi_id"] = "Estadoi Id";
	$fieldToolTipsinforme_intersup_estado["Spanish"]["estadoi_id"] = "";
	$placeHoldersinforme_intersup_estado["Spanish"]["estadoi_id"] = "";
	$fieldLabelsinforme_intersup_estado["Spanish"]["estadoname"] = "Estadoname";
	$fieldToolTipsinforme_intersup_estado["Spanish"]["estadoname"] = "";
	$placeHoldersinforme_intersup_estado["Spanish"]["estadoname"] = "";
	$fieldLabelsinforme_intersup_estado["Spanish"]["estadoname_a"] = "Estadoname A";
	$fieldToolTipsinforme_intersup_estado["Spanish"]["estadoname_a"] = "";
	$placeHoldersinforme_intersup_estado["Spanish"]["estadoname_a"] = "";
	$fieldLabelsinforme_intersup_estado["Spanish"]["group_st"] = "Group St";
	$fieldToolTipsinforme_intersup_estado["Spanish"]["group_st"] = "";
	$placeHoldersinforme_intersup_estado["Spanish"]["group_st"] = "";
	if (count($fieldToolTipsinforme_intersup_estado["Spanish"]))
		$tdatainforme_intersup_estado[".isUseToolTips"] = true;
}


	$tdatainforme_intersup_estado[".NCSearch"] = true;



$tdatainforme_intersup_estado[".shortTableName"] = "informe_intersup_estado";
$tdatainforme_intersup_estado[".nSecOptions"] = 0;

$tdatainforme_intersup_estado[".mainTableOwnerID"] = "";
$tdatainforme_intersup_estado[".entityType"] = 0;
$tdatainforme_intersup_estado[".connId"] = "dbct_at_localhost";


$tdatainforme_intersup_estado[".strOriginalTableName"] = "informe_intersup_estado";

	



$tdatainforme_intersup_estado[".showAddInPopup"] = false;

$tdatainforme_intersup_estado[".showEditInPopup"] = false;

$tdatainforme_intersup_estado[".showViewInPopup"] = false;

$tdatainforme_intersup_estado[".listAjax"] = false;
//	temporary
//$tdatainforme_intersup_estado[".listAjax"] = false;

	$tdatainforme_intersup_estado[".audit"] = true;

	$tdatainforme_intersup_estado[".locking"] = true;


$pages = $tdatainforme_intersup_estado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainforme_intersup_estado[".edit"] = true;
	$tdatainforme_intersup_estado[".afterEditAction"] = 1;
	$tdatainforme_intersup_estado[".closePopupAfterEdit"] = 1;
	$tdatainforme_intersup_estado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainforme_intersup_estado[".add"] = true;
$tdatainforme_intersup_estado[".afterAddAction"] = 1;
$tdatainforme_intersup_estado[".closePopupAfterAdd"] = 1;
$tdatainforme_intersup_estado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainforme_intersup_estado[".list"] = true;
}



$tdatainforme_intersup_estado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainforme_intersup_estado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainforme_intersup_estado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainforme_intersup_estado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainforme_intersup_estado[".printFriendly"] = true;
}



$tdatainforme_intersup_estado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainforme_intersup_estado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainforme_intersup_estado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainforme_intersup_estado[".isUseAjaxSuggest"] = true;



												

$tdatainforme_intersup_estado[".ajaxCodeSnippetAdded"] = false;

$tdatainforme_intersup_estado[".buttonsAdded"] = false;

$tdatainforme_intersup_estado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainforme_intersup_estado[".isUseTimeForSearch"] = false;


$tdatainforme_intersup_estado[".badgeColor"] = "4682B4";


$tdatainforme_intersup_estado[".allSearchFields"] = array();
$tdatainforme_intersup_estado[".filterFields"] = array();
$tdatainforme_intersup_estado[".requiredSearchFields"] = array();

$tdatainforme_intersup_estado[".googleLikeFields"] = array();
$tdatainforme_intersup_estado[".googleLikeFields"][] = "estadoi_id";
$tdatainforme_intersup_estado[".googleLikeFields"][] = "estadoname";
$tdatainforme_intersup_estado[".googleLikeFields"][] = "estadoname_a";
$tdatainforme_intersup_estado[".googleLikeFields"][] = "group_st";



$tdatainforme_intersup_estado[".tableType"] = "list";

$tdatainforme_intersup_estado[".printerPageOrientation"] = 0;
$tdatainforme_intersup_estado[".nPrinterPageScale"] = 100;

$tdatainforme_intersup_estado[".nPrinterSplitRecords"] = 40;

$tdatainforme_intersup_estado[".geocodingEnabled"] = false;










$tdatainforme_intersup_estado[".pageSize"] = 20;

$tdatainforme_intersup_estado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatainforme_intersup_estado[".strOrderBy"] = $tstrOrderBy;

$tdatainforme_intersup_estado[".orderindexes"] = array();


$tdatainforme_intersup_estado[".sqlHead"] = "SELECT estadoi_id,  	estadoname,  	estadoname_a,  	group_st";
$tdatainforme_intersup_estado[".sqlFrom"] = "FROM informe_intersup_estado";
$tdatainforme_intersup_estado[".sqlWhereExpr"] = "";
$tdatainforme_intersup_estado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainforme_intersup_estado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainforme_intersup_estado[".arrGroupsPerPage"] = $arrGPP;

$tdatainforme_intersup_estado[".highlightSearchResults"] = true;

$tableKeysinforme_intersup_estado = array();
$tableKeysinforme_intersup_estado[] = "estadoi_id";
$tdatainforme_intersup_estado[".Keys"] = $tableKeysinforme_intersup_estado;


$tdatainforme_intersup_estado[".hideMobileList"] = array();




//	estadoi_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "estadoi_id";
	$fdata["GoodName"] = "estadoi_id";
	$fdata["ownerTable"] = "informe_intersup_estado";
	$fdata["Label"] = GetFieldLabel("informe_intersup_estado","estadoi_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "estadoi_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estadoi_id";

	
	
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


	$tdatainforme_intersup_estado["estadoi_id"] = $fdata;
		$tdatainforme_intersup_estado[".searchableFields"][] = "estadoi_id";
//	estadoname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estadoname";
	$fdata["GoodName"] = "estadoname";
	$fdata["ownerTable"] = "informe_intersup_estado";
	$fdata["Label"] = GetFieldLabel("informe_intersup_estado","estadoname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estadoname";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estadoname";

	
	
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


	$tdatainforme_intersup_estado["estadoname"] = $fdata;
		$tdatainforme_intersup_estado[".searchableFields"][] = "estadoname";
//	estadoname_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "estadoname_a";
	$fdata["GoodName"] = "estadoname_a";
	$fdata["ownerTable"] = "informe_intersup_estado";
	$fdata["Label"] = GetFieldLabel("informe_intersup_estado","estadoname_a");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estadoname_a";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estadoname_a";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatainforme_intersup_estado["estadoname_a"] = $fdata;
		$tdatainforme_intersup_estado[".searchableFields"][] = "estadoname_a";
//	group_st
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "group_st";
	$fdata["GoodName"] = "group_st";
	$fdata["ownerTable"] = "informe_intersup_estado";
	$fdata["Label"] = GetFieldLabel("informe_intersup_estado","group_st");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "group_st";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_st";

	
	
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


	$tdatainforme_intersup_estado["group_st"] = $fdata;
		$tdatainforme_intersup_estado[".searchableFields"][] = "group_st";


$tables_data["informe_intersup_estado"]=&$tdatainforme_intersup_estado;
$field_labels["informe_intersup_estado"] = &$fieldLabelsinforme_intersup_estado;
$fieldToolTips["informe_intersup_estado"] = &$fieldToolTipsinforme_intersup_estado;
$placeHolders["informe_intersup_estado"] = &$placeHoldersinforme_intersup_estado;
$page_titles["informe_intersup_estado"] = &$pageTitlesinforme_intersup_estado;


changeTextControlsToDate( "informe_intersup_estado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["informe_intersup_estado"] = array();
//	informe_intersup_4
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="informe_intersup_4";
		$detailsParam["dOriginalTable"] = "informe_intersup";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "informe_intersup_4";
	$detailsParam["dCaptionTable"] = GetTableCaption("informe_intersup_4");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["informe_intersup_estado"][$dIndex] = $detailsParam;

	
		$detailsTablesData["informe_intersup_estado"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["informe_intersup_estado"][$dIndex]["masterKeys"][]="estadoi_id";

				$detailsTablesData["informe_intersup_estado"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["informe_intersup_estado"][$dIndex]["detailKeys"][]="inf_estado";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["informe_intersup_estado"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_informe_intersup_estado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "estadoi_id,  	estadoname,  	estadoname_a,  	group_st";
$proto0["m_strFrom"] = "FROM informe_intersup_estado";
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
	"m_strName" => "estadoi_id",
	"m_strTable" => "informe_intersup_estado",
	"m_srcTableName" => "informe_intersup_estado"
));

$proto6["m_sql"] = "estadoi_id";
$proto6["m_srcTableName"] = "informe_intersup_estado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estadoname",
	"m_strTable" => "informe_intersup_estado",
	"m_srcTableName" => "informe_intersup_estado"
));

$proto8["m_sql"] = "estadoname";
$proto8["m_srcTableName"] = "informe_intersup_estado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "estadoname_a",
	"m_strTable" => "informe_intersup_estado",
	"m_srcTableName" => "informe_intersup_estado"
));

$proto10["m_sql"] = "estadoname_a";
$proto10["m_srcTableName"] = "informe_intersup_estado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "group_st",
	"m_strTable" => "informe_intersup_estado",
	"m_srcTableName" => "informe_intersup_estado"
));

$proto12["m_sql"] = "group_st";
$proto12["m_srcTableName"] = "informe_intersup_estado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "informe_intersup_estado";
$proto15["m_srcTableName"] = "informe_intersup_estado";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "estadoi_id";
$proto15["m_columns"][] = "estadoname";
$proto15["m_columns"][] = "estadoname_a";
$proto15["m_columns"][] = "group_st";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "informe_intersup_estado";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "informe_intersup_estado";
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
$proto0["m_srcTableName"]="informe_intersup_estado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_informe_intersup_estado = createSqlQuery_informe_intersup_estado();


	
								;

				

$tdatainforme_intersup_estado[".sqlquery"] = $queryData_informe_intersup_estado;



$tdatainforme_intersup_estado[".hasEvents"] = false;

?>