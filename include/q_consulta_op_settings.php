<?php
$tdataq_consulta_op = array();
$tdataq_consulta_op[".searchableFields"] = array();
$tdataq_consulta_op[".ShortName"] = "q_consulta_op";
$tdataq_consulta_op[".OwnerID"] = "";
$tdataq_consulta_op[".OriginalTable"] = "q_consulta_op";


$tdataq_consulta_op[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataq_consulta_op[".originalPagesByType"] = $tdataq_consulta_op[".pagesByType"];
$tdataq_consulta_op[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataq_consulta_op[".originalPages"] = $tdataq_consulta_op[".pages"];
$tdataq_consulta_op[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataq_consulta_op[".originalDefaultPages"] = $tdataq_consulta_op[".defaultPages"];

//	field labels
$fieldLabelsq_consulta_op = array();
$fieldToolTipsq_consulta_op = array();
$pageTitlesq_consulta_op = array();
$placeHoldersq_consulta_op = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_consulta_op["Spanish"] = array();
	$fieldToolTipsq_consulta_op["Spanish"] = array();
	$placeHoldersq_consulta_op["Spanish"] = array();
	$pageTitlesq_consulta_op["Spanish"] = array();
	$fieldLabelsq_consulta_op["Spanish"]["id_cont_fk"] = "Id Cont Fk";
	$fieldToolTipsq_consulta_op["Spanish"]["id_cont_fk"] = "";
	$placeHoldersq_consulta_op["Spanish"]["id_cont_fk"] = "";
	$fieldLabelsq_consulta_op["Spanish"]["hdr_if_fk"] = "Hoja de ruta";
	$fieldToolTipsq_consulta_op["Spanish"]["hdr_if_fk"] = "";
	$placeHoldersq_consulta_op["Spanish"]["hdr_if_fk"] = "";
	$fieldLabelsq_consulta_op["Spanish"]["ordenpago_num"] = "Orden de pago";
	$fieldToolTipsq_consulta_op["Spanish"]["ordenpago_num"] = "";
	$placeHoldersq_consulta_op["Spanish"]["ordenpago_num"] = "";
	$fieldLabelsq_consulta_op["Spanish"]["op"] = "Adjunto";
	$fieldToolTipsq_consulta_op["Spanish"]["op"] = "";
	$placeHoldersq_consulta_op["Spanish"]["op"] = "";
	$fieldLabelsq_consulta_op["Spanish"]["ordenpago_fecha"] = "Fecha Orden de pago";
	$fieldToolTipsq_consulta_op["Spanish"]["ordenpago_fecha"] = "";
	$placeHoldersq_consulta_op["Spanish"]["ordenpago_fecha"] = "";
	if (count($fieldToolTipsq_consulta_op["Spanish"]))
		$tdataq_consulta_op[".isUseToolTips"] = true;
}


	$tdataq_consulta_op[".NCSearch"] = true;



$tdataq_consulta_op[".shortTableName"] = "q_consulta_op";
$tdataq_consulta_op[".nSecOptions"] = 0;

$tdataq_consulta_op[".mainTableOwnerID"] = "";
$tdataq_consulta_op[".entityType"] = 0;
$tdataq_consulta_op[".connId"] = "dbct_at_localhost";


$tdataq_consulta_op[".strOriginalTableName"] = "q_consulta_op";

	



$tdataq_consulta_op[".showAddInPopup"] = false;

$tdataq_consulta_op[".showEditInPopup"] = false;

$tdataq_consulta_op[".showViewInPopup"] = false;

$tdataq_consulta_op[".listAjax"] = false;
//	temporary
//$tdataq_consulta_op[".listAjax"] = false;

	$tdataq_consulta_op[".audit"] = false;

	$tdataq_consulta_op[".locking"] = false;


$pages = $tdataq_consulta_op[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_consulta_op[".edit"] = true;
	$tdataq_consulta_op[".afterEditAction"] = 1;
	$tdataq_consulta_op[".closePopupAfterEdit"] = 1;
	$tdataq_consulta_op[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_consulta_op[".add"] = true;
$tdataq_consulta_op[".afterAddAction"] = 1;
$tdataq_consulta_op[".closePopupAfterAdd"] = 1;
$tdataq_consulta_op[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_consulta_op[".list"] = true;
}



$tdataq_consulta_op[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_consulta_op[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_consulta_op[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_consulta_op[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_consulta_op[".printFriendly"] = true;
}



$tdataq_consulta_op[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_consulta_op[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_consulta_op[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_consulta_op[".isUseAjaxSuggest"] = true;



																																				

$tdataq_consulta_op[".ajaxCodeSnippetAdded"] = false;

$tdataq_consulta_op[".buttonsAdded"] = false;

$tdataq_consulta_op[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_consulta_op[".isUseTimeForSearch"] = false;


$tdataq_consulta_op[".badgeColor"] = "00c2c5";


$tdataq_consulta_op[".allSearchFields"] = array();
$tdataq_consulta_op[".filterFields"] = array();
$tdataq_consulta_op[".requiredSearchFields"] = array();

$tdataq_consulta_op[".googleLikeFields"] = array();
$tdataq_consulta_op[".googleLikeFields"][] = "id_cont_fk";
$tdataq_consulta_op[".googleLikeFields"][] = "hdr_if_fk";
$tdataq_consulta_op[".googleLikeFields"][] = "ordenpago_num";
$tdataq_consulta_op[".googleLikeFields"][] = "op";
$tdataq_consulta_op[".googleLikeFields"][] = "ordenpago_fecha";



$tdataq_consulta_op[".tableType"] = "list";

$tdataq_consulta_op[".printerPageOrientation"] = 0;
$tdataq_consulta_op[".nPrinterPageScale"] = 100;

$tdataq_consulta_op[".nPrinterSplitRecords"] = 40;

$tdataq_consulta_op[".geocodingEnabled"] = false;










$tdataq_consulta_op[".pageSize"] = 20;

$tdataq_consulta_op[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ordenpago_fecha";
$tdataq_consulta_op[".strOrderBy"] = $tstrOrderBy;

$tdataq_consulta_op[".orderindexes"] = array();
			$tdataq_consulta_op[".orderindexes"][] = array(5, (1 ? "ASC" : "DESC"), "ordenpago_fecha");


$tdataq_consulta_op[".sqlHead"] = "SELECT id_cont_fk,  hdr_if_fk,  ordenpago_num,  op,  ordenpago_fecha";
$tdataq_consulta_op[".sqlFrom"] = "FROM q_consulta_op";
$tdataq_consulta_op[".sqlWhereExpr"] = "";
$tdataq_consulta_op[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_consulta_op[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_consulta_op[".arrGroupsPerPage"] = $arrGPP;

$tdataq_consulta_op[".highlightSearchResults"] = true;

$tableKeysq_consulta_op = array();
$tableKeysq_consulta_op[] = "id_cont_fk";
$tableKeysq_consulta_op[] = "hdr_if_fk";
$tdataq_consulta_op[".Keys"] = $tableKeysq_consulta_op;


$tdataq_consulta_op[".hideMobileList"] = array();




//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "q_consulta_op";
	$fdata["Label"] = GetFieldLabel("q_consulta_op","id_cont_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cont_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont_fk";

	
	
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


	$tdataq_consulta_op["id_cont_fk"] = $fdata;
		$tdataq_consulta_op[".searchableFields"][] = "id_cont_fk";
//	hdr_if_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "hdr_if_fk";
	$fdata["GoodName"] = "hdr_if_fk";
	$fdata["ownerTable"] = "q_consulta_op";
	$fdata["Label"] = GetFieldLabel("q_consulta_op","hdr_if_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "hdr_if_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hdr_if_fk";

	
	
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


	$tdataq_consulta_op["hdr_if_fk"] = $fdata;
		$tdataq_consulta_op[".searchableFields"][] = "hdr_if_fk";
//	ordenpago_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ordenpago_num";
	$fdata["GoodName"] = "ordenpago_num";
	$fdata["ownerTable"] = "q_consulta_op";
	$fdata["Label"] = GetFieldLabel("q_consulta_op","ordenpago_num");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ordenpago_num";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ordenpago_num";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataq_consulta_op["ordenpago_num"] = $fdata;
		$tdataq_consulta_op[".searchableFields"][] = "ordenpago_num";
//	op
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "op";
	$fdata["GoodName"] = "op";
	$fdata["ownerTable"] = "q_consulta_op";
	$fdata["Label"] = GetFieldLabel("q_consulta_op","op");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "op";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "op";

	
	
			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
			$vdata["ShowFileSize"] = true;
			$vdata["ShowIcon"] = true;
			$vdata["DisplayPDF"] = true;
		
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataq_consulta_op["op"] = $fdata;
		$tdataq_consulta_op[".searchableFields"][] = "op";
//	ordenpago_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ordenpago_fecha";
	$fdata["GoodName"] = "ordenpago_fecha";
	$fdata["ownerTable"] = "q_consulta_op";
	$fdata["Label"] = GetFieldLabel("q_consulta_op","ordenpago_fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "ordenpago_fecha";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ordenpago_fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataq_consulta_op["ordenpago_fecha"] = $fdata;
		$tdataq_consulta_op[".searchableFields"][] = "ordenpago_fecha";


$tables_data["q_consulta_op"]=&$tdataq_consulta_op;
$field_labels["q_consulta_op"] = &$fieldLabelsq_consulta_op;
$fieldToolTips["q_consulta_op"] = &$fieldToolTipsq_consulta_op;
$placeHolders["q_consulta_op"] = &$placeHoldersq_consulta_op;
$page_titles["q_consulta_op"] = &$pageTitlesq_consulta_op;


changeTextControlsToDate( "q_consulta_op" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_consulta_op"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_consulta_op"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["q_consulta_op"][0] = $masterParams;
				$masterTablesData["q_consulta_op"][0]["masterKeys"] = array();
	$masterTablesData["q_consulta_op"][0]["masterKeys"][]="id_cont";
				$masterTablesData["q_consulta_op"][0]["detailKeys"] = array();
	$masterTablesData["q_consulta_op"][0]["detailKeys"][]="id_cont_fk";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_trpn";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_trpn";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["q_consulta_op"][1] = $masterParams;
				$masterTablesData["q_consulta_op"][1]["masterKeys"] = array();
	$masterTablesData["q_consulta_op"][1]["masterKeys"][]="hr_id";
				$masterTablesData["q_consulta_op"][1]["detailKeys"] = array();
	$masterTablesData["q_consulta_op"][1]["detailKeys"][]="hdr_if_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_consulta_op()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cont_fk,  hdr_if_fk,  ordenpago_num,  op,  ordenpago_fecha";
$proto0["m_strFrom"] = "FROM q_consulta_op";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY ordenpago_fecha";
	
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
	"m_strName" => "id_cont_fk",
	"m_strTable" => "q_consulta_op",
	"m_srcTableName" => "q_consulta_op"
));

$proto6["m_sql"] = "id_cont_fk";
$proto6["m_srcTableName"] = "q_consulta_op";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "hdr_if_fk",
	"m_strTable" => "q_consulta_op",
	"m_srcTableName" => "q_consulta_op"
));

$proto8["m_sql"] = "hdr_if_fk";
$proto8["m_srcTableName"] = "q_consulta_op";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ordenpago_num",
	"m_strTable" => "q_consulta_op",
	"m_srcTableName" => "q_consulta_op"
));

$proto10["m_sql"] = "ordenpago_num";
$proto10["m_srcTableName"] = "q_consulta_op";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "op",
	"m_strTable" => "q_consulta_op",
	"m_srcTableName" => "q_consulta_op"
));

$proto12["m_sql"] = "op";
$proto12["m_srcTableName"] = "q_consulta_op";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ordenpago_fecha",
	"m_strTable" => "q_consulta_op",
	"m_srcTableName" => "q_consulta_op"
));

$proto14["m_sql"] = "ordenpago_fecha";
$proto14["m_srcTableName"] = "q_consulta_op";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "q_consulta_op";
$proto17["m_srcTableName"] = "q_consulta_op";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "hdr_if_fk";
$proto17["m_columns"][] = "id_cont_fk";
$proto17["m_columns"][] = "op";
$proto17["m_columns"][] = "ordenpago_fecha";
$proto17["m_columns"][] = "ordenpago_num";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "q_consulta_op";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "q_consulta_op";
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
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "ordenpago_fecha",
	"m_strTable" => "q_consulta_op",
	"m_srcTableName" => "q_consulta_op"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 1;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="q_consulta_op";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_consulta_op = createSqlQuery_q_consulta_op();


	
								;

					

$tdataq_consulta_op[".sqlquery"] = $queryData_q_consulta_op;



$tdataq_consulta_op[".hasEvents"] = false;

?>