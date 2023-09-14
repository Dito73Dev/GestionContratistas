<?php
$tdatadependencia = array();
$tdatadependencia[".searchableFields"] = array();
$tdatadependencia[".ShortName"] = "dependencia";
$tdatadependencia[".OwnerID"] = "";
$tdatadependencia[".OriginalTable"] = "dependencia";


$tdatadependencia[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatadependencia[".originalPagesByType"] = $tdatadependencia[".pagesByType"];
$tdatadependencia[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatadependencia[".originalPages"] = $tdatadependencia[".pages"];
$tdatadependencia[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatadependencia[".originalDefaultPages"] = $tdatadependencia[".defaultPages"];

//	field labels
$fieldLabelsdependencia = array();
$fieldToolTipsdependencia = array();
$pageTitlesdependencia = array();
$placeHoldersdependencia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdependencia["Spanish"] = array();
	$fieldToolTipsdependencia["Spanish"] = array();
	$placeHoldersdependencia["Spanish"] = array();
	$pageTitlesdependencia["Spanish"] = array();
	$fieldLabelsdependencia["Spanish"]["id"] = "Id";
	$fieldToolTipsdependencia["Spanish"]["id"] = "";
	$placeHoldersdependencia["Spanish"]["id"] = "";
	$fieldLabelsdependencia["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsdependencia["Spanish"]["nombre"] = "";
	$placeHoldersdependencia["Spanish"]["nombre"] = "";
	$fieldLabelsdependencia["Spanish"]["estado"] = "Estado";
	$fieldToolTipsdependencia["Spanish"]["estado"] = "";
	$placeHoldersdependencia["Spanish"]["estado"] = "";
	$fieldLabelsdependencia["Spanish"]["id_depto_superior"] = "Id Depto Superior";
	$fieldToolTipsdependencia["Spanish"]["id_depto_superior"] = "";
	$placeHoldersdependencia["Spanish"]["id_depto_superior"] = "";
	$fieldLabelsdependencia["Spanish"]["proceso"] = "Proceso";
	$fieldToolTipsdependencia["Spanish"]["proceso"] = "";
	$placeHoldersdependencia["Spanish"]["proceso"] = "";
	$fieldLabelsdependencia["Spanish"]["estructura"] = "Estructura";
	$fieldToolTipsdependencia["Spanish"]["estructura"] = "";
	$placeHoldersdependencia["Spanish"]["estructura"] = "";
	if (count($fieldToolTipsdependencia["Spanish"]))
		$tdatadependencia[".isUseToolTips"] = true;
}


	$tdatadependencia[".NCSearch"] = true;



$tdatadependencia[".shortTableName"] = "dependencia";
$tdatadependencia[".nSecOptions"] = 0;

$tdatadependencia[".mainTableOwnerID"] = "";
$tdatadependencia[".entityType"] = 0;
$tdatadependencia[".connId"] = "edl_at_127_0_0_1";


$tdatadependencia[".strOriginalTableName"] = "dependencia";

	



$tdatadependencia[".showAddInPopup"] = false;

$tdatadependencia[".showEditInPopup"] = false;

$tdatadependencia[".showViewInPopup"] = false;

$tdatadependencia[".listAjax"] = false;
//	temporary
//$tdatadependencia[".listAjax"] = false;

	$tdatadependencia[".audit"] = true;

	$tdatadependencia[".locking"] = true;


$pages = $tdatadependencia[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadependencia[".edit"] = true;
	$tdatadependencia[".afterEditAction"] = 1;
	$tdatadependencia[".closePopupAfterEdit"] = 1;
	$tdatadependencia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadependencia[".add"] = true;
$tdatadependencia[".afterAddAction"] = 1;
$tdatadependencia[".closePopupAfterAdd"] = 1;
$tdatadependencia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadependencia[".list"] = true;
}



$tdatadependencia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadependencia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadependencia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadependencia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadependencia[".printFriendly"] = true;
}



$tdatadependencia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadependencia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadependencia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadependencia[".isUseAjaxSuggest"] = true;



												

$tdatadependencia[".ajaxCodeSnippetAdded"] = false;

$tdatadependencia[".buttonsAdded"] = false;

$tdatadependencia[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadependencia[".isUseTimeForSearch"] = false;


$tdatadependencia[".badgeColor"] = "7B68EE";


$tdatadependencia[".allSearchFields"] = array();
$tdatadependencia[".filterFields"] = array();
$tdatadependencia[".requiredSearchFields"] = array();

$tdatadependencia[".googleLikeFields"] = array();
$tdatadependencia[".googleLikeFields"][] = "estado";
$tdatadependencia[".googleLikeFields"][] = "estructura";
$tdatadependencia[".googleLikeFields"][] = "id";
$tdatadependencia[".googleLikeFields"][] = "id_depto_superior";
$tdatadependencia[".googleLikeFields"][] = "nombre";
$tdatadependencia[".googleLikeFields"][] = "proceso";



$tdatadependencia[".tableType"] = "list";

$tdatadependencia[".printerPageOrientation"] = 0;
$tdatadependencia[".nPrinterPageScale"] = 100;

$tdatadependencia[".nPrinterSplitRecords"] = 40;

$tdatadependencia[".geocodingEnabled"] = false;










$tdatadependencia[".pageSize"] = 20;

$tdatadependencia[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadependencia[".strOrderBy"] = $tstrOrderBy;

$tdatadependencia[".orderindexes"] = array();


$tdatadependencia[".sqlHead"] = "SELECT estado,  	estructura,  	id,  	id_depto_superior,  	nombre,  	proceso";
$tdatadependencia[".sqlFrom"] = "FROM dependencia";
$tdatadependencia[".sqlWhereExpr"] = "";
$tdatadependencia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadependencia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadependencia[".arrGroupsPerPage"] = $arrGPP;

$tdatadependencia[".highlightSearchResults"] = true;

$tableKeysdependencia = array();
$tableKeysdependencia[] = "id";
$tdatadependencia[".Keys"] = $tableKeysdependencia;


$tdatadependencia[".hideMobileList"] = array();




//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "dependencia";
	$fdata["Label"] = GetFieldLabel("dependencia","estado");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "estado";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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


	$tdatadependencia["estado"] = $fdata;
		$tdatadependencia[".searchableFields"][] = "estado";
//	estructura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estructura";
	$fdata["GoodName"] = "estructura";
	$fdata["ownerTable"] = "dependencia";
	$fdata["Label"] = GetFieldLabel("dependencia","estructura");
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


	$tdatadependencia["estructura"] = $fdata;
		$tdatadependencia[".searchableFields"][] = "estructura";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dependencia";
	$fdata["Label"] = GetFieldLabel("dependencia","id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatadependencia["id"] = $fdata;
		$tdatadependencia[".searchableFields"][] = "id";
//	id_depto_superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_depto_superior";
	$fdata["GoodName"] = "id_depto_superior";
	$fdata["ownerTable"] = "dependencia";
	$fdata["Label"] = GetFieldLabel("dependencia","id_depto_superior");
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


	$tdatadependencia["id_depto_superior"] = $fdata;
		$tdatadependencia[".searchableFields"][] = "id_depto_superior";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "dependencia";
	$fdata["Label"] = GetFieldLabel("dependencia","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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


	$tdatadependencia["nombre"] = $fdata;
		$tdatadependencia[".searchableFields"][] = "nombre";
//	proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "proceso";
	$fdata["GoodName"] = "proceso";
	$fdata["ownerTable"] = "dependencia";
	$fdata["Label"] = GetFieldLabel("dependencia","proceso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "proceso";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "proceso";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatadependencia["proceso"] = $fdata;
		$tdatadependencia[".searchableFields"][] = "proceso";


$tables_data["dependencia"]=&$tdatadependencia;
$field_labels["dependencia"] = &$fieldLabelsdependencia;
$fieldToolTips["dependencia"] = &$fieldToolTipsdependencia;
$placeHolders["dependencia"] = &$placeHoldersdependencia;
$page_titles["dependencia"] = &$pageTitlesdependencia;


changeTextControlsToDate( "dependencia" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dependencia"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dependencia"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dependencia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "estado,  	estructura,  	id,  	id_depto_superior,  	nombre,  	proceso";
$proto0["m_strFrom"] = "FROM dependencia";
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
	"m_strName" => "estado",
	"m_strTable" => "dependencia",
	"m_srcTableName" => "dependencia"
));

$proto6["m_sql"] = "estado";
$proto6["m_srcTableName"] = "dependencia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estructura",
	"m_strTable" => "dependencia",
	"m_srcTableName" => "dependencia"
));

$proto8["m_sql"] = "estructura";
$proto8["m_srcTableName"] = "dependencia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "dependencia",
	"m_srcTableName" => "dependencia"
));

$proto10["m_sql"] = "id";
$proto10["m_srcTableName"] = "dependencia";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_depto_superior",
	"m_strTable" => "dependencia",
	"m_srcTableName" => "dependencia"
));

$proto12["m_sql"] = "id_depto_superior";
$proto12["m_srcTableName"] = "dependencia";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "dependencia",
	"m_srcTableName" => "dependencia"
));

$proto14["m_sql"] = "nombre";
$proto14["m_srcTableName"] = "dependencia";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "proceso",
	"m_strTable" => "dependencia",
	"m_srcTableName" => "dependencia"
));

$proto16["m_sql"] = "proceso";
$proto16["m_srcTableName"] = "dependencia";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dependencia";
$proto19["m_srcTableName"] = "dependencia";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "estado";
$proto19["m_columns"][] = "estructura";
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "id_depto_superior";
$proto19["m_columns"][] = "nombre";
$proto19["m_columns"][] = "proceso";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "dependencia";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "dependencia";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dependencia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dependencia = createSqlQuery_dependencia();


	
								;

						

$tdatadependencia[".sqlquery"] = $queryData_dependencia;



$tdatadependencia[".hasEvents"] = false;

?>