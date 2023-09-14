<?php
$tdatacontrato_attached = array();
$tdatacontrato_attached[".searchableFields"] = array();
$tdatacontrato_attached[".ShortName"] = "contrato_attached";
$tdatacontrato_attached[".OwnerID"] = "";
$tdatacontrato_attached[".OriginalTable"] = "contrato_attached";


$tdatacontrato_attached[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_attached[".originalPagesByType"] = $tdatacontrato_attached[".pagesByType"];
$tdatacontrato_attached[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_attached[".originalPages"] = $tdatacontrato_attached[".pages"];
$tdatacontrato_attached[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_attached[".originalDefaultPages"] = $tdatacontrato_attached[".defaultPages"];

//	field labels
$fieldLabelscontrato_attached = array();
$fieldToolTipscontrato_attached = array();
$pageTitlescontrato_attached = array();
$placeHolderscontrato_attached = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_attached["Spanish"] = array();
	$fieldToolTipscontrato_attached["Spanish"] = array();
	$placeHolderscontrato_attached["Spanish"] = array();
	$pageTitlescontrato_attached["Spanish"] = array();
	$fieldLabelscontrato_attached["Spanish"]["id_att"] = "Id Att";
	$fieldToolTipscontrato_attached["Spanish"]["id_att"] = "";
	$placeHolderscontrato_attached["Spanish"]["id_att"] = "";
	$fieldLabelscontrato_attached["Spanish"]["id_cont_fk"] = "Id Cont Fk";
	$fieldToolTipscontrato_attached["Spanish"]["id_cont_fk"] = "";
	$placeHolderscontrato_attached["Spanish"]["id_cont_fk"] = "";
	$fieldLabelscontrato_attached["Spanish"]["cont_pre"] = "Cont Pre";
	$fieldToolTipscontrato_attached["Spanish"]["cont_pre"] = "";
	$placeHolderscontrato_attached["Spanish"]["cont_pre"] = "";
	$fieldLabelscontrato_attached["Spanish"]["cont_num"] = "Cont Num";
	$fieldToolTipscontrato_attached["Spanish"]["cont_num"] = "";
	$placeHolderscontrato_attached["Spanish"]["cont_num"] = "";
	$fieldLabelscontrato_attached["Spanish"]["cont_vigencia"] = "Cont Vigencia";
	$fieldToolTipscontrato_attached["Spanish"]["cont_vigencia"] = "";
	$placeHolderscontrato_attached["Spanish"]["cont_vigencia"] = "";
	$fieldLabelscontrato_attached["Spanish"]["att_type"] = "Tipo de anexo";
	$fieldToolTipscontrato_attached["Spanish"]["att_type"] = "";
	$placeHolderscontrato_attached["Spanish"]["att_type"] = "";
	$fieldLabelscontrato_attached["Spanish"]["att_cod"] = "Att Cod";
	$fieldToolTipscontrato_attached["Spanish"]["att_cod"] = "";
	$placeHolderscontrato_attached["Spanish"]["att_cod"] = "";
	$fieldLabelscontrato_attached["Spanish"]["att_file"] = "Documento anexo";
	$fieldToolTipscontrato_attached["Spanish"]["att_file"] = "";
	$placeHolderscontrato_attached["Spanish"]["att_file"] = "";
	$fieldLabelscontrato_attached["Spanish"]["sys_user"] = "Sys User";
	$fieldToolTipscontrato_attached["Spanish"]["sys_user"] = "";
	$placeHolderscontrato_attached["Spanish"]["sys_user"] = "";
	$fieldLabelscontrato_attached["Spanish"]["sys_date"] = "Sys Date";
	$fieldToolTipscontrato_attached["Spanish"]["sys_date"] = "";
	$placeHolderscontrato_attached["Spanish"]["sys_date"] = "";
	$fieldLabelscontrato_attached["Spanish"]["sys_time"] = "Sys Time";
	$fieldToolTipscontrato_attached["Spanish"]["sys_time"] = "";
	$placeHolderscontrato_attached["Spanish"]["sys_time"] = "";
	$fieldLabelscontrato_attached["Spanish"]["sys_stat"] = "Sys Stat";
	$fieldToolTipscontrato_attached["Spanish"]["sys_stat"] = "";
	$placeHolderscontrato_attached["Spanish"]["sys_stat"] = "";
	$fieldLabelscontrato_attached["Spanish"]["nom_doc"] = "Nom Doc";
	$fieldToolTipscontrato_attached["Spanish"]["nom_doc"] = "";
	$placeHolderscontrato_attached["Spanish"]["nom_doc"] = "";
	if (count($fieldToolTipscontrato_attached["Spanish"]))
		$tdatacontrato_attached[".isUseToolTips"] = true;
}


	$tdatacontrato_attached[".NCSearch"] = true;



$tdatacontrato_attached[".shortTableName"] = "contrato_attached";
$tdatacontrato_attached[".nSecOptions"] = 0;

$tdatacontrato_attached[".mainTableOwnerID"] = "";
$tdatacontrato_attached[".entityType"] = 0;
$tdatacontrato_attached[".connId"] = "dbct_at_localhost";


$tdatacontrato_attached[".strOriginalTableName"] = "contrato_attached";

	



$tdatacontrato_attached[".showAddInPopup"] = false;

$tdatacontrato_attached[".showEditInPopup"] = false;

$tdatacontrato_attached[".showViewInPopup"] = false;

$tdatacontrato_attached[".listAjax"] = false;
//	temporary
//$tdatacontrato_attached[".listAjax"] = false;

	$tdatacontrato_attached[".audit"] = false;

	$tdatacontrato_attached[".locking"] = false;


$pages = $tdatacontrato_attached[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_attached[".edit"] = true;
	$tdatacontrato_attached[".afterEditAction"] = 1;
	$tdatacontrato_attached[".closePopupAfterEdit"] = 1;
	$tdatacontrato_attached[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_attached[".add"] = true;
$tdatacontrato_attached[".afterAddAction"] = 1;
$tdatacontrato_attached[".closePopupAfterAdd"] = 1;
$tdatacontrato_attached[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_attached[".list"] = true;
}



$tdatacontrato_attached[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_attached[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_attached[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_attached[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_attached[".printFriendly"] = true;
}



$tdatacontrato_attached[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_attached[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_attached[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_attached[".isUseAjaxSuggest"] = true;



																								

$tdatacontrato_attached[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_attached[".buttonsAdded"] = false;

$tdatacontrato_attached[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_attached[".isUseTimeForSearch"] = false;


$tdatacontrato_attached[".badgeColor"] = "E67349";


$tdatacontrato_attached[".allSearchFields"] = array();
$tdatacontrato_attached[".filterFields"] = array();
$tdatacontrato_attached[".requiredSearchFields"] = array();

$tdatacontrato_attached[".googleLikeFields"] = array();
$tdatacontrato_attached[".googleLikeFields"][] = "att_cod";
$tdatacontrato_attached[".googleLikeFields"][] = "att_file";
$tdatacontrato_attached[".googleLikeFields"][] = "att_type";
$tdatacontrato_attached[".googleLikeFields"][] = "cont_num";
$tdatacontrato_attached[".googleLikeFields"][] = "cont_pre";
$tdatacontrato_attached[".googleLikeFields"][] = "cont_vigencia";
$tdatacontrato_attached[".googleLikeFields"][] = "id_att";
$tdatacontrato_attached[".googleLikeFields"][] = "id_cont_fk";
$tdatacontrato_attached[".googleLikeFields"][] = "nom_doc";
$tdatacontrato_attached[".googleLikeFields"][] = "sys_date";
$tdatacontrato_attached[".googleLikeFields"][] = "sys_stat";
$tdatacontrato_attached[".googleLikeFields"][] = "sys_time";
$tdatacontrato_attached[".googleLikeFields"][] = "sys_user";



$tdatacontrato_attached[".tableType"] = "list";

$tdatacontrato_attached[".printerPageOrientation"] = 0;
$tdatacontrato_attached[".nPrinterPageScale"] = 100;

$tdatacontrato_attached[".nPrinterSplitRecords"] = 40;

$tdatacontrato_attached[".geocodingEnabled"] = false;










$tdatacontrato_attached[".pageSize"] = 20;

$tdatacontrato_attached[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontrato_attached[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_attached[".orderindexes"] = array();


$tdatacontrato_attached[".sqlHead"] = "SELECT att_cod,  	att_file,  	att_type,  	cont_num,  	cont_pre,  	cont_vigencia,  	id_att,  	id_cont_fk,  	nom_doc,  	sys_date,  	sys_stat,  	sys_time,  	sys_user";
$tdatacontrato_attached[".sqlFrom"] = "FROM contrato_attached";
$tdatacontrato_attached[".sqlWhereExpr"] = "";
$tdatacontrato_attached[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_attached[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_attached[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_attached[".highlightSearchResults"] = true;

$tableKeyscontrato_attached = array();
$tableKeyscontrato_attached[] = "id_att";
$tdatacontrato_attached[".Keys"] = $tableKeyscontrato_attached;


$tdatacontrato_attached[".hideMobileList"] = array();




//	att_cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "att_cod";
	$fdata["GoodName"] = "att_cod";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached","att_cod");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "att_cod";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "att_cod";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatacontrato_attached["att_cod"] = $fdata;
		$tdatacontrato_attached[".searchableFields"][] = "att_cod";
//	att_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "att_file";
	$fdata["GoodName"] = "att_file";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached","att_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "att_file";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "att_file";

	
	
				$fdata["UploadFolder"] = "../GestionContratos/_attached/";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatacontrato_attached["att_file"] = $fdata;
		$tdatacontrato_attached[".searchableFields"][] = "att_file";
//	att_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "att_type";
	$fdata["GoodName"] = "att_type";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached","att_type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "att_type";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "att_type";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contrato_attached_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_att_type";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "att_type_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatacontrato_attached["att_type"] = $fdata;
		$tdatacontrato_attached[".searchableFields"][] = "att_type";
//	cont_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cont_num";
	$fdata["GoodName"] = "cont_num";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached","cont_num");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_num";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_num";

	
	
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


	$tdatacontrato_attached["cont_num"] = $fdata;
		$tdatacontrato_attached[".searchableFields"][] = "cont_num";
//	cont_pre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cont_pre";
	$fdata["GoodName"] = "cont_pre";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached","cont_pre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_pre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_pre";

	
	
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


	$tdatacontrato_attached["cont_pre"] = $fdata;
		$tdatacontrato_attached[".searchableFields"][] = "cont_pre";
//	cont_vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cont_vigencia";
	$fdata["GoodName"] = "cont_vigencia";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached","cont_vigencia");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "cont_vigencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_vigencia";

	
	
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


	$tdatacontrato_attached["cont_vigencia"] = $fdata;
		$tdatacontrato_attached[".searchableFields"][] = "cont_vigencia";
//	id_att
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_att";
	$fdata["GoodName"] = "id_att";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached","id_att");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_att";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_att";

	
	
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


	$tdatacontrato_attached["id_att"] = $fdata;
		$tdatacontrato_attached[".searchableFields"][] = "id_att";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached","id_cont_fk");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contrato";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cont_hash";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatacontrato_attached["id_cont_fk"] = $fdata;
		$tdatacontrato_attached[".searchableFields"][] = "id_cont_fk";
//	nom_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "nom_doc";
	$fdata["GoodName"] = "nom_doc";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached","nom_doc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom_doc";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_doc";

	
	
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


	$tdatacontrato_attached["nom_doc"] = $fdata;
		$tdatacontrato_attached[".searchableFields"][] = "nom_doc";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached","sys_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_date";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
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


	$tdatacontrato_attached["sys_date"] = $fdata;
		$tdatacontrato_attached[".searchableFields"][] = "sys_date";
//	sys_stat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sys_stat";
	$fdata["GoodName"] = "sys_stat";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached","sys_stat");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sys_stat";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_stat";

	
	
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


	$tdatacontrato_attached["sys_stat"] = $fdata;
		$tdatacontrato_attached[".searchableFields"][] = "sys_stat";
//	sys_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sys_time";
	$fdata["GoodName"] = "sys_time";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached","sys_time");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_time";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_time";

	
	
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


	$tdatacontrato_attached["sys_time"] = $fdata;
		$tdatacontrato_attached[".searchableFields"][] = "sys_time";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdatacontrato_attached["sys_user"] = $fdata;
		$tdatacontrato_attached[".searchableFields"][] = "sys_user";


$tables_data["contrato_attached"]=&$tdatacontrato_attached;
$field_labels["contrato_attached"] = &$fieldLabelscontrato_attached;
$fieldToolTips["contrato_attached"] = &$fieldToolTipscontrato_attached;
$placeHolders["contrato_attached"] = &$placeHolderscontrato_attached;
$page_titles["contrato_attached"] = &$pageTitlescontrato_attached;


changeTextControlsToDate( "contrato_attached" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contrato_attached"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contrato_attached"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_attached"][0] = $masterParams;
				$masterTablesData["contrato_attached"][0]["masterKeys"] = array();
	$masterTablesData["contrato_attached"][0]["masterKeys"][]="id_cont";
				$masterTablesData["contrato_attached"][0]["detailKeys"] = array();
	$masterTablesData["contrato_attached"][0]["detailKeys"][]="id_cont_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contrato_attached()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "att_cod,  	att_file,  	att_type,  	cont_num,  	cont_pre,  	cont_vigencia,  	id_att,  	id_cont_fk,  	nom_doc,  	sys_date,  	sys_stat,  	sys_time,  	sys_user";
$proto0["m_strFrom"] = "FROM contrato_attached";
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
	"m_strName" => "att_cod",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached"
));

$proto6["m_sql"] = "att_cod";
$proto6["m_srcTableName"] = "contrato_attached";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "att_file",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached"
));

$proto8["m_sql"] = "att_file";
$proto8["m_srcTableName"] = "contrato_attached";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "att_type",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached"
));

$proto10["m_sql"] = "att_type";
$proto10["m_srcTableName"] = "contrato_attached";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_num",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached"
));

$proto12["m_sql"] = "cont_num";
$proto12["m_srcTableName"] = "contrato_attached";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_pre",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached"
));

$proto14["m_sql"] = "cont_pre";
$proto14["m_srcTableName"] = "contrato_attached";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_vigencia",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached"
));

$proto16["m_sql"] = "cont_vigencia";
$proto16["m_srcTableName"] = "contrato_attached";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_att",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached"
));

$proto18["m_sql"] = "id_att";
$proto18["m_srcTableName"] = "contrato_attached";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached"
));

$proto20["m_sql"] = "id_cont_fk";
$proto20["m_srcTableName"] = "contrato_attached";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_doc",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached"
));

$proto22["m_sql"] = "nom_doc";
$proto22["m_srcTableName"] = "contrato_attached";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached"
));

$proto24["m_sql"] = "sys_date";
$proto24["m_srcTableName"] = "contrato_attached";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_stat",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached"
));

$proto26["m_sql"] = "sys_stat";
$proto26["m_srcTableName"] = "contrato_attached";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_time",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached"
));

$proto28["m_sql"] = "sys_time";
$proto28["m_srcTableName"] = "contrato_attached";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached"
));

$proto30["m_sql"] = "sys_user";
$proto30["m_srcTableName"] = "contrato_attached";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "contrato_attached";
$proto33["m_srcTableName"] = "contrato_attached";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "att_cod";
$proto33["m_columns"][] = "att_file";
$proto33["m_columns"][] = "att_type";
$proto33["m_columns"][] = "cont_num";
$proto33["m_columns"][] = "cont_pre";
$proto33["m_columns"][] = "cont_vigencia";
$proto33["m_columns"][] = "id_att";
$proto33["m_columns"][] = "id_cont_fk";
$proto33["m_columns"][] = "nom_doc";
$proto33["m_columns"][] = "sys_date";
$proto33["m_columns"][] = "sys_stat";
$proto33["m_columns"][] = "sys_time";
$proto33["m_columns"][] = "sys_user";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "contrato_attached";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "contrato_attached";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_attached";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_attached = createSqlQuery_contrato_attached();


	
								;

													

$tdatacontrato_attached[".sqlquery"] = $queryData_contrato_attached;



$tdatacontrato_attached[".hasEvents"] = false;

?>