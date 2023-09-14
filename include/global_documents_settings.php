<?php
$tdataglobal_documents = array();
$tdataglobal_documents[".searchableFields"] = array();
$tdataglobal_documents[".ShortName"] = "global_documents";
$tdataglobal_documents[".OwnerID"] = "";
$tdataglobal_documents[".OriginalTable"] = "global_documents";


$tdataglobal_documents[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataglobal_documents[".originalPagesByType"] = $tdataglobal_documents[".pagesByType"];
$tdataglobal_documents[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataglobal_documents[".originalPages"] = $tdataglobal_documents[".pages"];
$tdataglobal_documents[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataglobal_documents[".originalDefaultPages"] = $tdataglobal_documents[".defaultPages"];

//	field labels
$fieldLabelsglobal_documents = array();
$fieldToolTipsglobal_documents = array();
$pageTitlesglobal_documents = array();
$placeHoldersglobal_documents = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_documents["Spanish"] = array();
	$fieldToolTipsglobal_documents["Spanish"] = array();
	$placeHoldersglobal_documents["Spanish"] = array();
	$pageTitlesglobal_documents["Spanish"] = array();
	$fieldLabelsglobal_documents["Spanish"]["doc_id"] = "Doc Id";
	$fieldToolTipsglobal_documents["Spanish"]["doc_id"] = "";
	$placeHoldersglobal_documents["Spanish"]["doc_id"] = "";
	$fieldLabelsglobal_documents["Spanish"]["doc_name"] = "Nombre del documento";
	$fieldToolTipsglobal_documents["Spanish"]["doc_name"] = "";
	$placeHoldersglobal_documents["Spanish"]["doc_name"] = "";
	$fieldLabelsglobal_documents["Spanish"]["doc_file"] = "Adjunto";
	$fieldToolTipsglobal_documents["Spanish"]["doc_file"] = "";
	$placeHoldersglobal_documents["Spanish"]["doc_file"] = "";
	if (count($fieldToolTipsglobal_documents["Spanish"]))
		$tdataglobal_documents[".isUseToolTips"] = true;
}


	$tdataglobal_documents[".NCSearch"] = true;



$tdataglobal_documents[".shortTableName"] = "global_documents";
$tdataglobal_documents[".nSecOptions"] = 0;

$tdataglobal_documents[".mainTableOwnerID"] = "";
$tdataglobal_documents[".entityType"] = 0;
$tdataglobal_documents[".connId"] = "dbct_at_localhost";


$tdataglobal_documents[".strOriginalTableName"] = "global_documents";

	



$tdataglobal_documents[".showAddInPopup"] = false;

$tdataglobal_documents[".showEditInPopup"] = false;

$tdataglobal_documents[".showViewInPopup"] = false;

$tdataglobal_documents[".listAjax"] = false;
//	temporary
//$tdataglobal_documents[".listAjax"] = false;

	$tdataglobal_documents[".audit"] = false;

	$tdataglobal_documents[".locking"] = false;


$pages = $tdataglobal_documents[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_documents[".edit"] = true;
	$tdataglobal_documents[".afterEditAction"] = 1;
	$tdataglobal_documents[".closePopupAfterEdit"] = 1;
	$tdataglobal_documents[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_documents[".add"] = true;
$tdataglobal_documents[".afterAddAction"] = 1;
$tdataglobal_documents[".closePopupAfterAdd"] = 1;
$tdataglobal_documents[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_documents[".list"] = true;
}



$tdataglobal_documents[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_documents[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_documents[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_documents[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_documents[".printFriendly"] = true;
}



$tdataglobal_documents[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_documents[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_documents[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_documents[".isUseAjaxSuggest"] = true;



												

$tdataglobal_documents[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_documents[".buttonsAdded"] = false;

$tdataglobal_documents[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_documents[".isUseTimeForSearch"] = false;


$tdataglobal_documents[".badgeColor"] = "008B8B";


$tdataglobal_documents[".allSearchFields"] = array();
$tdataglobal_documents[".filterFields"] = array();
$tdataglobal_documents[".requiredSearchFields"] = array();

$tdataglobal_documents[".googleLikeFields"] = array();
$tdataglobal_documents[".googleLikeFields"][] = "doc_file";
$tdataglobal_documents[".googleLikeFields"][] = "doc_id";
$tdataglobal_documents[".googleLikeFields"][] = "doc_name";



$tdataglobal_documents[".tableType"] = "list";

$tdataglobal_documents[".printerPageOrientation"] = 0;
$tdataglobal_documents[".nPrinterPageScale"] = 100;

$tdataglobal_documents[".nPrinterSplitRecords"] = 40;

$tdataglobal_documents[".geocodingEnabled"] = false;




$tdataglobal_documents[".isDisplayLoading"] = true;






$tdataglobal_documents[".pageSize"] = 20;

$tdataglobal_documents[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_documents[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_documents[".orderindexes"] = array();


$tdataglobal_documents[".sqlHead"] = "SELECT doc_file,  	doc_id,  	doc_name";
$tdataglobal_documents[".sqlFrom"] = "FROM global_documents";
$tdataglobal_documents[".sqlWhereExpr"] = "";
$tdataglobal_documents[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_documents[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_documents[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_documents[".highlightSearchResults"] = true;

$tableKeysglobal_documents = array();
$tableKeysglobal_documents[] = "doc_id";
$tdataglobal_documents[".Keys"] = $tableKeysglobal_documents;


$tdataglobal_documents[".hideMobileList"] = array();




//	doc_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "doc_file";
	$fdata["GoodName"] = "doc_file";
	$fdata["ownerTable"] = "global_documents";
	$fdata["Label"] = GetFieldLabel("global_documents","doc_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doc_file";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_file";

	
	
				$fdata["UploadFolder"] = "files/docs";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdataglobal_documents["doc_file"] = $fdata;
		$tdataglobal_documents[".searchableFields"][] = "doc_file";
//	doc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "doc_id";
	$fdata["GoodName"] = "doc_id";
	$fdata["ownerTable"] = "global_documents";
	$fdata["Label"] = GetFieldLabel("global_documents","doc_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "doc_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_id";

	
	
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


	$tdataglobal_documents["doc_id"] = $fdata;
		$tdataglobal_documents[".searchableFields"][] = "doc_id";
//	doc_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "doc_name";
	$fdata["GoodName"] = "doc_name";
	$fdata["ownerTable"] = "global_documents";
	$fdata["Label"] = GetFieldLabel("global_documents","doc_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doc_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_name";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdataglobal_documents["doc_name"] = $fdata;
		$tdataglobal_documents[".searchableFields"][] = "doc_name";


$tables_data["global_documents"]=&$tdataglobal_documents;
$field_labels["global_documents"] = &$fieldLabelsglobal_documents;
$fieldToolTips["global_documents"] = &$fieldToolTipsglobal_documents;
$placeHolders["global_documents"] = &$placeHoldersglobal_documents;
$page_titles["global_documents"] = &$pageTitlesglobal_documents;


changeTextControlsToDate( "global_documents" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_documents"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_documents"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_documents()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "doc_file,  	doc_id,  	doc_name";
$proto0["m_strFrom"] = "FROM global_documents";
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
	"m_strName" => "doc_file",
	"m_strTable" => "global_documents",
	"m_srcTableName" => "global_documents"
));

$proto6["m_sql"] = "doc_file";
$proto6["m_srcTableName"] = "global_documents";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_id",
	"m_strTable" => "global_documents",
	"m_srcTableName" => "global_documents"
));

$proto8["m_sql"] = "doc_id";
$proto8["m_srcTableName"] = "global_documents";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_name",
	"m_strTable" => "global_documents",
	"m_srcTableName" => "global_documents"
));

$proto10["m_sql"] = "doc_name";
$proto10["m_srcTableName"] = "global_documents";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "global_documents";
$proto13["m_srcTableName"] = "global_documents";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "doc_file";
$proto13["m_columns"][] = "doc_id";
$proto13["m_columns"][] = "doc_name";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "global_documents";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "global_documents";
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
$proto0["m_srcTableName"]="global_documents";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_documents = createSqlQuery_global_documents();


	
								;

			

$tdataglobal_documents[".sqlquery"] = $queryData_global_documents;



$tdataglobal_documents[".hasEvents"] = false;

?>