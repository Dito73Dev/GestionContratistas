<?php
$tdatainterventor_periodos = array();
$tdatainterventor_periodos[".searchableFields"] = array();
$tdatainterventor_periodos[".ShortName"] = "interventor_periodos";
$tdatainterventor_periodos[".OwnerID"] = "";
$tdatainterventor_periodos[".OriginalTable"] = "interventor_periodos";


$tdatainterventor_periodos[".pagesByType"] = my_json_decode( "{}" );
$tdatainterventor_periodos[".originalPagesByType"] = $tdatainterventor_periodos[".pagesByType"];
$tdatainterventor_periodos[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatainterventor_periodos[".originalPages"] = $tdatainterventor_periodos[".pages"];
$tdatainterventor_periodos[".defaultPages"] = my_json_decode( "{}" );
$tdatainterventor_periodos[".originalDefaultPages"] = $tdatainterventor_periodos[".defaultPages"];

//	field labels
$fieldLabelsinterventor_periodos = array();
$fieldToolTipsinterventor_periodos = array();
$pageTitlesinterventor_periodos = array();
$placeHoldersinterventor_periodos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinterventor_periodos["Spanish"] = array();
	$fieldToolTipsinterventor_periodos["Spanish"] = array();
	$placeHoldersinterventor_periodos["Spanish"] = array();
	$pageTitlesinterventor_periodos["Spanish"] = array();
	$fieldLabelsinterventor_periodos["Spanish"]["id_periodo"] = "Id Periodo";
	$fieldToolTipsinterventor_periodos["Spanish"]["id_periodo"] = "";
	$placeHoldersinterventor_periodos["Spanish"]["id_periodo"] = "";
	$fieldLabelsinterventor_periodos["Spanish"]["periodo_name"] = "Periodo Name";
	$fieldToolTipsinterventor_periodos["Spanish"]["periodo_name"] = "";
	$placeHoldersinterventor_periodos["Spanish"]["periodo_name"] = "";
	$fieldLabelsinterventor_periodos["Spanish"]["periodo_value"] = "Periodo Value";
	$fieldToolTipsinterventor_periodos["Spanish"]["periodo_value"] = "";
	$placeHoldersinterventor_periodos["Spanish"]["periodo_value"] = "";
	$fieldLabelsinterventor_periodos["Spanish"]["periodo_dias"] = "Periodo Dias";
	$fieldToolTipsinterventor_periodos["Spanish"]["periodo_dias"] = "";
	$placeHoldersinterventor_periodos["Spanish"]["periodo_dias"] = "";
	$fieldLabelsinterventor_periodos["Spanish"]["periodo_meses"] = "Periodo Meses";
	$fieldToolTipsinterventor_periodos["Spanish"]["periodo_meses"] = "";
	$placeHoldersinterventor_periodos["Spanish"]["periodo_meses"] = "";
	if (count($fieldToolTipsinterventor_periodos["Spanish"]))
		$tdatainterventor_periodos[".isUseToolTips"] = true;
}


	$tdatainterventor_periodos[".NCSearch"] = true;



$tdatainterventor_periodos[".shortTableName"] = "interventor_periodos";
$tdatainterventor_periodos[".nSecOptions"] = 0;

$tdatainterventor_periodos[".mainTableOwnerID"] = "";
$tdatainterventor_periodos[".entityType"] = 0;
$tdatainterventor_periodos[".connId"] = "dbct_at_localhost";


$tdatainterventor_periodos[".strOriginalTableName"] = "interventor_periodos";

	



$tdatainterventor_periodos[".showAddInPopup"] = false;

$tdatainterventor_periodos[".showEditInPopup"] = false;

$tdatainterventor_periodos[".showViewInPopup"] = false;

$tdatainterventor_periodos[".listAjax"] = false;
//	temporary
//$tdatainterventor_periodos[".listAjax"] = false;

	$tdatainterventor_periodos[".audit"] = true;

	$tdatainterventor_periodos[".locking"] = true;


$pages = $tdatainterventor_periodos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainterventor_periodos[".edit"] = true;
	$tdatainterventor_periodos[".afterEditAction"] = 1;
	$tdatainterventor_periodos[".closePopupAfterEdit"] = 1;
	$tdatainterventor_periodos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainterventor_periodos[".add"] = true;
$tdatainterventor_periodos[".afterAddAction"] = 1;
$tdatainterventor_periodos[".closePopupAfterAdd"] = 1;
$tdatainterventor_periodos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainterventor_periodos[".list"] = true;
}



$tdatainterventor_periodos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainterventor_periodos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainterventor_periodos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainterventor_periodos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainterventor_periodos[".printFriendly"] = true;
}



$tdatainterventor_periodos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainterventor_periodos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainterventor_periodos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainterventor_periodos[".isUseAjaxSuggest"] = true;



												

$tdatainterventor_periodos[".ajaxCodeSnippetAdded"] = false;

$tdatainterventor_periodos[".buttonsAdded"] = false;

$tdatainterventor_periodos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainterventor_periodos[".isUseTimeForSearch"] = false;


$tdatainterventor_periodos[".badgeColor"] = "D2691E";


$tdatainterventor_periodos[".allSearchFields"] = array();
$tdatainterventor_periodos[".filterFields"] = array();
$tdatainterventor_periodos[".requiredSearchFields"] = array();

$tdatainterventor_periodos[".googleLikeFields"] = array();
$tdatainterventor_periodos[".googleLikeFields"][] = "id_periodo";
$tdatainterventor_periodos[".googleLikeFields"][] = "periodo_name";
$tdatainterventor_periodos[".googleLikeFields"][] = "periodo_value";
$tdatainterventor_periodos[".googleLikeFields"][] = "periodo_dias";
$tdatainterventor_periodos[".googleLikeFields"][] = "periodo_meses";



$tdatainterventor_periodos[".tableType"] = "list";

$tdatainterventor_periodos[".printerPageOrientation"] = 0;
$tdatainterventor_periodos[".nPrinterPageScale"] = 100;

$tdatainterventor_periodos[".nPrinterSplitRecords"] = 40;

$tdatainterventor_periodos[".geocodingEnabled"] = false;










$tdatainterventor_periodos[".pageSize"] = 20;

$tdatainterventor_periodos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatainterventor_periodos[".strOrderBy"] = $tstrOrderBy;

$tdatainterventor_periodos[".orderindexes"] = array();


$tdatainterventor_periodos[".sqlHead"] = "SELECT id_periodo,  	periodo_name,  	periodo_value,  	periodo_dias,  	periodo_meses";
$tdatainterventor_periodos[".sqlFrom"] = "FROM interventor_periodos";
$tdatainterventor_periodos[".sqlWhereExpr"] = "";
$tdatainterventor_periodos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainterventor_periodos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainterventor_periodos[".arrGroupsPerPage"] = $arrGPP;

$tdatainterventor_periodos[".highlightSearchResults"] = true;

$tableKeysinterventor_periodos = array();
$tableKeysinterventor_periodos[] = "id_periodo";
$tdatainterventor_periodos[".Keys"] = $tableKeysinterventor_periodos;


$tdatainterventor_periodos[".hideMobileList"] = array();




//	id_periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_periodo";
	$fdata["GoodName"] = "id_periodo";
	$fdata["ownerTable"] = "interventor_periodos";
	$fdata["Label"] = GetFieldLabel("interventor_periodos","id_periodo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_periodo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_periodo";

	
	
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


	$tdatainterventor_periodos["id_periodo"] = $fdata;
		$tdatainterventor_periodos[".searchableFields"][] = "id_periodo";
//	periodo_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "periodo_name";
	$fdata["GoodName"] = "periodo_name";
	$fdata["ownerTable"] = "interventor_periodos";
	$fdata["Label"] = GetFieldLabel("interventor_periodos","periodo_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "periodo_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_name";

	
	
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


	$tdatainterventor_periodos["periodo_name"] = $fdata;
		$tdatainterventor_periodos[".searchableFields"][] = "periodo_name";
//	periodo_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "periodo_value";
	$fdata["GoodName"] = "periodo_value";
	$fdata["ownerTable"] = "interventor_periodos";
	$fdata["Label"] = GetFieldLabel("interventor_periodos","periodo_value");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "periodo_value";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_value";

	
	
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


	$tdatainterventor_periodos["periodo_value"] = $fdata;
		$tdatainterventor_periodos[".searchableFields"][] = "periodo_value";
//	periodo_dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "periodo_dias";
	$fdata["GoodName"] = "periodo_dias";
	$fdata["ownerTable"] = "interventor_periodos";
	$fdata["Label"] = GetFieldLabel("interventor_periodos","periodo_dias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "periodo_dias";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_dias";

	
	
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


	$tdatainterventor_periodos["periodo_dias"] = $fdata;
		$tdatainterventor_periodos[".searchableFields"][] = "periodo_dias";
//	periodo_meses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "periodo_meses";
	$fdata["GoodName"] = "periodo_meses";
	$fdata["ownerTable"] = "interventor_periodos";
	$fdata["Label"] = GetFieldLabel("interventor_periodos","periodo_meses");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "periodo_meses";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_meses";

	
	
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


	$tdatainterventor_periodos["periodo_meses"] = $fdata;
		$tdatainterventor_periodos[".searchableFields"][] = "periodo_meses";


$tables_data["interventor_periodos"]=&$tdatainterventor_periodos;
$field_labels["interventor_periodos"] = &$fieldLabelsinterventor_periodos;
$fieldToolTips["interventor_periodos"] = &$fieldToolTipsinterventor_periodos;
$placeHolders["interventor_periodos"] = &$placeHoldersinterventor_periodos;
$page_titles["interventor_periodos"] = &$pageTitlesinterventor_periodos;


changeTextControlsToDate( "interventor_periodos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["interventor_periodos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["interventor_periodos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_interventor_periodos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_periodo,  	periodo_name,  	periodo_value,  	periodo_dias,  	periodo_meses";
$proto0["m_strFrom"] = "FROM interventor_periodos";
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
	"m_strName" => "id_periodo",
	"m_strTable" => "interventor_periodos",
	"m_srcTableName" => "interventor_periodos"
));

$proto6["m_sql"] = "id_periodo";
$proto6["m_srcTableName"] = "interventor_periodos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_name",
	"m_strTable" => "interventor_periodos",
	"m_srcTableName" => "interventor_periodos"
));

$proto8["m_sql"] = "periodo_name";
$proto8["m_srcTableName"] = "interventor_periodos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_value",
	"m_strTable" => "interventor_periodos",
	"m_srcTableName" => "interventor_periodos"
));

$proto10["m_sql"] = "periodo_value";
$proto10["m_srcTableName"] = "interventor_periodos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_dias",
	"m_strTable" => "interventor_periodos",
	"m_srcTableName" => "interventor_periodos"
));

$proto12["m_sql"] = "periodo_dias";
$proto12["m_srcTableName"] = "interventor_periodos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_meses",
	"m_strTable" => "interventor_periodos",
	"m_srcTableName" => "interventor_periodos"
));

$proto14["m_sql"] = "periodo_meses";
$proto14["m_srcTableName"] = "interventor_periodos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "interventor_periodos";
$proto17["m_srcTableName"] = "interventor_periodos";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id_periodo";
$proto17["m_columns"][] = "periodo_name";
$proto17["m_columns"][] = "periodo_value";
$proto17["m_columns"][] = "periodo_dias";
$proto17["m_columns"][] = "periodo_meses";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "interventor_periodos";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "interventor_periodos";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="interventor_periodos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_interventor_periodos = createSqlQuery_interventor_periodos();


	
								;

					

$tdatainterventor_periodos[".sqlquery"] = $queryData_interventor_periodos;



$tdatainterventor_periodos[".hasEvents"] = false;

?>