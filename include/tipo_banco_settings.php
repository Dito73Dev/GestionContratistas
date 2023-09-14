<?php
$tdatatipo_banco = array();
$tdatatipo_banco[".searchableFields"] = array();
$tdatatipo_banco[".ShortName"] = "tipo_banco";
$tdatatipo_banco[".OwnerID"] = "";
$tdatatipo_banco[".OriginalTable"] = "tipo_banco";


$tdatatipo_banco[".pagesByType"] = my_json_decode( "{}" );
$tdatatipo_banco[".originalPagesByType"] = $tdatatipo_banco[".pagesByType"];
$tdatatipo_banco[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatipo_banco[".originalPages"] = $tdatatipo_banco[".pages"];
$tdatatipo_banco[".defaultPages"] = my_json_decode( "{}" );
$tdatatipo_banco[".originalDefaultPages"] = $tdatatipo_banco[".defaultPages"];

//	field labels
$fieldLabelstipo_banco = array();
$fieldToolTipstipo_banco = array();
$pageTitlestipo_banco = array();
$placeHolderstipo_banco = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_banco["Spanish"] = array();
	$fieldToolTipstipo_banco["Spanish"] = array();
	$placeHolderstipo_banco["Spanish"] = array();
	$pageTitlestipo_banco["Spanish"] = array();
	$fieldLabelstipo_banco["Spanish"]["banco_id"] = "Banco Id";
	$fieldToolTipstipo_banco["Spanish"]["banco_id"] = "";
	$placeHolderstipo_banco["Spanish"]["banco_id"] = "";
	$fieldLabelstipo_banco["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipstipo_banco["Spanish"]["codigo"] = "";
	$placeHolderstipo_banco["Spanish"]["codigo"] = "";
	$fieldLabelstipo_banco["Spanish"]["nit_banco"] = "Nit Banco";
	$fieldToolTipstipo_banco["Spanish"]["nit_banco"] = "";
	$placeHolderstipo_banco["Spanish"]["nit_banco"] = "";
	$fieldLabelstipo_banco["Spanish"]["nom_banco"] = "Nom Banco";
	$fieldToolTipstipo_banco["Spanish"]["nom_banco"] = "";
	$placeHolderstipo_banco["Spanish"]["nom_banco"] = "";
	$fieldLabelstipo_banco["Spanish"]["cod_banco"] = "Cod Banco";
	$fieldToolTipstipo_banco["Spanish"]["cod_banco"] = "";
	$placeHolderstipo_banco["Spanish"]["cod_banco"] = "";
	$fieldLabelstipo_banco["Spanish"]["banco_sal"] = "Banco Sal";
	$fieldToolTipstipo_banco["Spanish"]["banco_sal"] = "";
	$placeHolderstipo_banco["Spanish"]["banco_sal"] = "";
	if (count($fieldToolTipstipo_banco["Spanish"]))
		$tdatatipo_banco[".isUseToolTips"] = true;
}


	$tdatatipo_banco[".NCSearch"] = true;



$tdatatipo_banco[".shortTableName"] = "tipo_banco";
$tdatatipo_banco[".nSecOptions"] = 0;

$tdatatipo_banco[".mainTableOwnerID"] = "";
$tdatatipo_banco[".entityType"] = 0;
$tdatatipo_banco[".connId"] = "dbct_at_localhost";


$tdatatipo_banco[".strOriginalTableName"] = "tipo_banco";

	



$tdatatipo_banco[".showAddInPopup"] = false;

$tdatatipo_banco[".showEditInPopup"] = false;

$tdatatipo_banco[".showViewInPopup"] = false;

$tdatatipo_banco[".listAjax"] = false;
//	temporary
//$tdatatipo_banco[".listAjax"] = false;

	$tdatatipo_banco[".audit"] = true;

	$tdatatipo_banco[".locking"] = true;


$pages = $tdatatipo_banco[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipo_banco[".edit"] = true;
	$tdatatipo_banco[".afterEditAction"] = 1;
	$tdatatipo_banco[".closePopupAfterEdit"] = 1;
	$tdatatipo_banco[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipo_banco[".add"] = true;
$tdatatipo_banco[".afterAddAction"] = 1;
$tdatatipo_banco[".closePopupAfterAdd"] = 1;
$tdatatipo_banco[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipo_banco[".list"] = true;
}



$tdatatipo_banco[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipo_banco[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipo_banco[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipo_banco[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipo_banco[".printFriendly"] = true;
}



$tdatatipo_banco[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipo_banco[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipo_banco[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipo_banco[".isUseAjaxSuggest"] = true;



												

$tdatatipo_banco[".ajaxCodeSnippetAdded"] = false;

$tdatatipo_banco[".buttonsAdded"] = false;

$tdatatipo_banco[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_banco[".isUseTimeForSearch"] = false;


$tdatatipo_banco[".badgeColor"] = "EDCA00";


$tdatatipo_banco[".allSearchFields"] = array();
$tdatatipo_banco[".filterFields"] = array();
$tdatatipo_banco[".requiredSearchFields"] = array();

$tdatatipo_banco[".googleLikeFields"] = array();
$tdatatipo_banco[".googleLikeFields"][] = "banco_id";
$tdatatipo_banco[".googleLikeFields"][] = "codigo";
$tdatatipo_banco[".googleLikeFields"][] = "nit_banco";
$tdatatipo_banco[".googleLikeFields"][] = "nom_banco";
$tdatatipo_banco[".googleLikeFields"][] = "cod_banco";
$tdatatipo_banco[".googleLikeFields"][] = "banco_sal";



$tdatatipo_banco[".tableType"] = "list";

$tdatatipo_banco[".printerPageOrientation"] = 0;
$tdatatipo_banco[".nPrinterPageScale"] = 100;

$tdatatipo_banco[".nPrinterSplitRecords"] = 40;

$tdatatipo_banco[".geocodingEnabled"] = false;










$tdatatipo_banco[".pageSize"] = 20;

$tdatatipo_banco[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipo_banco[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_banco[".orderindexes"] = array();


$tdatatipo_banco[".sqlHead"] = "SELECT banco_id,  	codigo,  	nit_banco,  	nom_banco,  	cod_banco,  	banco_sal";
$tdatatipo_banco[".sqlFrom"] = "FROM tipo_banco";
$tdatatipo_banco[".sqlWhereExpr"] = "banco_sal is not null";
$tdatatipo_banco[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_banco[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_banco[".arrGroupsPerPage"] = $arrGPP;

$tdatatipo_banco[".highlightSearchResults"] = true;

$tableKeystipo_banco = array();
$tableKeystipo_banco[] = "banco_id";
$tdatatipo_banco[".Keys"] = $tableKeystipo_banco;


$tdatatipo_banco[".hideMobileList"] = array();




//	banco_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "banco_id";
	$fdata["GoodName"] = "banco_id";
	$fdata["ownerTable"] = "tipo_banco";
	$fdata["Label"] = GetFieldLabel("tipo_banco","banco_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "banco_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "banco_id";

	
	
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


	$tdatatipo_banco["banco_id"] = $fdata;
		$tdatatipo_banco[".searchableFields"][] = "banco_id";
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "tipo_banco";
	$fdata["Label"] = GetFieldLabel("tipo_banco","codigo");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatatipo_banco["codigo"] = $fdata;
		$tdatatipo_banco[".searchableFields"][] = "codigo";
//	nit_banco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nit_banco";
	$fdata["GoodName"] = "nit_banco";
	$fdata["ownerTable"] = "tipo_banco";
	$fdata["Label"] = GetFieldLabel("tipo_banco","nit_banco");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "nit_banco";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nit_banco";

	
	
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


	$tdatatipo_banco["nit_banco"] = $fdata;
		$tdatatipo_banco[".searchableFields"][] = "nit_banco";
//	nom_banco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nom_banco";
	$fdata["GoodName"] = "nom_banco";
	$fdata["ownerTable"] = "tipo_banco";
	$fdata["Label"] = GetFieldLabel("tipo_banco","nom_banco");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom_banco";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_banco";

	
	
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


	$tdatatipo_banco["nom_banco"] = $fdata;
		$tdatatipo_banco[".searchableFields"][] = "nom_banco";
//	cod_banco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cod_banco";
	$fdata["GoodName"] = "cod_banco";
	$fdata["ownerTable"] = "tipo_banco";
	$fdata["Label"] = GetFieldLabel("tipo_banco","cod_banco");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cod_banco";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cod_banco";

	
	
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


	$tdatatipo_banco["cod_banco"] = $fdata;
		$tdatatipo_banco[".searchableFields"][] = "cod_banco";
//	banco_sal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "banco_sal";
	$fdata["GoodName"] = "banco_sal";
	$fdata["ownerTable"] = "tipo_banco";
	$fdata["Label"] = GetFieldLabel("tipo_banco","banco_sal");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "banco_sal";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "banco_sal";

	
	
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


	$tdatatipo_banco["banco_sal"] = $fdata;
		$tdatatipo_banco[".searchableFields"][] = "banco_sal";


$tables_data["tipo_banco"]=&$tdatatipo_banco;
$field_labels["tipo_banco"] = &$fieldLabelstipo_banco;
$fieldToolTips["tipo_banco"] = &$fieldToolTipstipo_banco;
$placeHolders["tipo_banco"] = &$placeHolderstipo_banco;
$page_titles["tipo_banco"] = &$pageTitlestipo_banco;


changeTextControlsToDate( "tipo_banco" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tipo_banco"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tipo_banco"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipo_banco()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "banco_id,  	codigo,  	nit_banco,  	nom_banco,  	cod_banco,  	banco_sal";
$proto0["m_strFrom"] = "FROM tipo_banco";
$proto0["m_strWhere"] = "banco_sal is not null";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "banco_sal is not null";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "banco_sal",
	"m_strTable" => "tipo_banco",
	"m_srcTableName" => "tipo_banco"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "is not null";
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
	"m_strName" => "banco_id",
	"m_strTable" => "tipo_banco",
	"m_srcTableName" => "tipo_banco"
));

$proto6["m_sql"] = "banco_id";
$proto6["m_srcTableName"] = "tipo_banco";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "tipo_banco",
	"m_srcTableName" => "tipo_banco"
));

$proto8["m_sql"] = "codigo";
$proto8["m_srcTableName"] = "tipo_banco";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nit_banco",
	"m_strTable" => "tipo_banco",
	"m_srcTableName" => "tipo_banco"
));

$proto10["m_sql"] = "nit_banco";
$proto10["m_srcTableName"] = "tipo_banco";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_banco",
	"m_strTable" => "tipo_banco",
	"m_srcTableName" => "tipo_banco"
));

$proto12["m_sql"] = "nom_banco";
$proto12["m_srcTableName"] = "tipo_banco";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cod_banco",
	"m_strTable" => "tipo_banco",
	"m_srcTableName" => "tipo_banco"
));

$proto14["m_sql"] = "cod_banco";
$proto14["m_srcTableName"] = "tipo_banco";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "banco_sal",
	"m_strTable" => "tipo_banco",
	"m_srcTableName" => "tipo_banco"
));

$proto16["m_sql"] = "banco_sal";
$proto16["m_srcTableName"] = "tipo_banco";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "tipo_banco";
$proto19["m_srcTableName"] = "tipo_banco";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "banco_id";
$proto19["m_columns"][] = "banco_sal";
$proto19["m_columns"][] = "cod_banco";
$proto19["m_columns"][] = "codigo";
$proto19["m_columns"][] = "nit_banco";
$proto19["m_columns"][] = "nom_banco";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "tipo_banco";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "tipo_banco";
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
$proto0["m_srcTableName"]="tipo_banco";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_banco = createSqlQuery_tipo_banco();


	
								;

						

$tdatatipo_banco[".sqlquery"] = $queryData_tipo_banco;



$tdatatipo_banco[".hasEvents"] = false;

?>