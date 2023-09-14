<?php
$tdatahoja_ruta_2020_files = array();
$tdatahoja_ruta_2020_files[".searchableFields"] = array();
$tdatahoja_ruta_2020_files[".ShortName"] = "hoja_ruta_2020_files";
$tdatahoja_ruta_2020_files[".OwnerID"] = "";
$tdatahoja_ruta_2020_files[".OriginalTable"] = "hoja_ruta_2020_files";


$tdatahoja_ruta_2020_files[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatahoja_ruta_2020_files[".originalPagesByType"] = $tdatahoja_ruta_2020_files[".pagesByType"];
$tdatahoja_ruta_2020_files[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatahoja_ruta_2020_files[".originalPages"] = $tdatahoja_ruta_2020_files[".pages"];
$tdatahoja_ruta_2020_files[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatahoja_ruta_2020_files[".originalDefaultPages"] = $tdatahoja_ruta_2020_files[".defaultPages"];

//	field labels
$fieldLabelshoja_ruta_2020_files = array();
$fieldToolTipshoja_ruta_2020_files = array();
$pageTitleshoja_ruta_2020_files = array();
$placeHoldershoja_ruta_2020_files = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshoja_ruta_2020_files["Spanish"] = array();
	$fieldToolTipshoja_ruta_2020_files["Spanish"] = array();
	$placeHoldershoja_ruta_2020_files["Spanish"] = array();
	$pageTitleshoja_ruta_2020_files["Spanish"] = array();
	$fieldLabelshoja_ruta_2020_files["Spanish"]["file_hr_id"] = "File Hr Id";
	$fieldToolTipshoja_ruta_2020_files["Spanish"]["file_hr_id"] = "";
	$placeHoldershoja_ruta_2020_files["Spanish"]["file_hr_id"] = "";
	$fieldLabelshoja_ruta_2020_files["Spanish"]["hr_id_fk"] = "Hr Id Fk";
	$fieldToolTipshoja_ruta_2020_files["Spanish"]["hr_id_fk"] = "";
	$placeHoldershoja_ruta_2020_files["Spanish"]["hr_id_fk"] = "";
	$fieldLabelshoja_ruta_2020_files["Spanish"]["hr_file"] = "Adjunto";
	$fieldToolTipshoja_ruta_2020_files["Spanish"]["hr_file"] = "";
	$placeHoldershoja_ruta_2020_files["Spanish"]["hr_file"] = "";
	$fieldLabelshoja_ruta_2020_files["Spanish"]["sys_user"] = "Subido por:";
	$fieldToolTipshoja_ruta_2020_files["Spanish"]["sys_user"] = "";
	$placeHoldershoja_ruta_2020_files["Spanish"]["sys_user"] = "";
	$fieldLabelshoja_ruta_2020_files["Spanish"]["sys_date"] = "Fecha de carga:";
	$fieldToolTipshoja_ruta_2020_files["Spanish"]["sys_date"] = "";
	$placeHoldershoja_ruta_2020_files["Spanish"]["sys_date"] = "";
	$fieldLabelshoja_ruta_2020_files["Spanish"]["hr_tipo_doc"] = "Hr Tipo Doc";
	$fieldToolTipshoja_ruta_2020_files["Spanish"]["hr_tipo_doc"] = "";
	$placeHoldershoja_ruta_2020_files["Spanish"]["hr_tipo_doc"] = "";
	if (count($fieldToolTipshoja_ruta_2020_files["Spanish"]))
		$tdatahoja_ruta_2020_files[".isUseToolTips"] = true;
}


	$tdatahoja_ruta_2020_files[".NCSearch"] = true;



$tdatahoja_ruta_2020_files[".shortTableName"] = "hoja_ruta_2020_files";
$tdatahoja_ruta_2020_files[".nSecOptions"] = 0;

$tdatahoja_ruta_2020_files[".mainTableOwnerID"] = "";
$tdatahoja_ruta_2020_files[".entityType"] = 0;
$tdatahoja_ruta_2020_files[".connId"] = "contratacion_at_172_18_0_115";


$tdatahoja_ruta_2020_files[".strOriginalTableName"] = "hoja_ruta_2020_files";

	



$tdatahoja_ruta_2020_files[".showAddInPopup"] = false;

$tdatahoja_ruta_2020_files[".showEditInPopup"] = false;

$tdatahoja_ruta_2020_files[".showViewInPopup"] = false;

$tdatahoja_ruta_2020_files[".listAjax"] = false;
//	temporary
//$tdatahoja_ruta_2020_files[".listAjax"] = false;

	$tdatahoja_ruta_2020_files[".audit"] = false;

	$tdatahoja_ruta_2020_files[".locking"] = false;


$pages = $tdatahoja_ruta_2020_files[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahoja_ruta_2020_files[".edit"] = true;
	$tdatahoja_ruta_2020_files[".afterEditAction"] = 1;
	$tdatahoja_ruta_2020_files[".closePopupAfterEdit"] = 1;
	$tdatahoja_ruta_2020_files[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahoja_ruta_2020_files[".add"] = true;
$tdatahoja_ruta_2020_files[".afterAddAction"] = 1;
$tdatahoja_ruta_2020_files[".closePopupAfterAdd"] = 1;
$tdatahoja_ruta_2020_files[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahoja_ruta_2020_files[".list"] = true;
}



$tdatahoja_ruta_2020_files[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahoja_ruta_2020_files[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahoja_ruta_2020_files[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahoja_ruta_2020_files[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahoja_ruta_2020_files[".printFriendly"] = true;
}



$tdatahoja_ruta_2020_files[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahoja_ruta_2020_files[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahoja_ruta_2020_files[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahoja_ruta_2020_files[".isUseAjaxSuggest"] = true;



																								

$tdatahoja_ruta_2020_files[".ajaxCodeSnippetAdded"] = false;

$tdatahoja_ruta_2020_files[".buttonsAdded"] = false;

$tdatahoja_ruta_2020_files[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahoja_ruta_2020_files[".isUseTimeForSearch"] = false;


$tdatahoja_ruta_2020_files[".badgeColor"] = "edca00";


$tdatahoja_ruta_2020_files[".allSearchFields"] = array();
$tdatahoja_ruta_2020_files[".filterFields"] = array();
$tdatahoja_ruta_2020_files[".requiredSearchFields"] = array();

$tdatahoja_ruta_2020_files[".googleLikeFields"] = array();
$tdatahoja_ruta_2020_files[".googleLikeFields"][] = "file_hr_id";
$tdatahoja_ruta_2020_files[".googleLikeFields"][] = "hr_file";
$tdatahoja_ruta_2020_files[".googleLikeFields"][] = "hr_id_fk";
$tdatahoja_ruta_2020_files[".googleLikeFields"][] = "hr_tipo_doc";
$tdatahoja_ruta_2020_files[".googleLikeFields"][] = "sys_date";
$tdatahoja_ruta_2020_files[".googleLikeFields"][] = "sys_user";



$tdatahoja_ruta_2020_files[".tableType"] = "list";

$tdatahoja_ruta_2020_files[".printerPageOrientation"] = 0;
$tdatahoja_ruta_2020_files[".nPrinterPageScale"] = 100;

$tdatahoja_ruta_2020_files[".nPrinterSplitRecords"] = 40;

$tdatahoja_ruta_2020_files[".geocodingEnabled"] = false;










$tdatahoja_ruta_2020_files[".pageSize"] = 20;

$tdatahoja_ruta_2020_files[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahoja_ruta_2020_files[".strOrderBy"] = $tstrOrderBy;

$tdatahoja_ruta_2020_files[".orderindexes"] = array();


$tdatahoja_ruta_2020_files[".sqlHead"] = "SELECT file_hr_id,  	hr_file,  	hr_id_fk,  	hr_tipo_doc,  	sys_date,  	sys_user";
$tdatahoja_ruta_2020_files[".sqlFrom"] = "FROM hoja_ruta_2020_files";
$tdatahoja_ruta_2020_files[".sqlWhereExpr"] = "";
$tdatahoja_ruta_2020_files[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahoja_ruta_2020_files[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahoja_ruta_2020_files[".arrGroupsPerPage"] = $arrGPP;

$tdatahoja_ruta_2020_files[".highlightSearchResults"] = true;

$tableKeyshoja_ruta_2020_files = array();
$tableKeyshoja_ruta_2020_files[] = "file_hr_id";
$tdatahoja_ruta_2020_files[".Keys"] = $tableKeyshoja_ruta_2020_files;


$tdatahoja_ruta_2020_files[".hideMobileList"] = array();




//	file_hr_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "file_hr_id";
	$fdata["GoodName"] = "file_hr_id";
	$fdata["ownerTable"] = "hoja_ruta_2020_files";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_files","file_hr_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "file_hr_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "file_hr_id";

	
	
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


	$tdatahoja_ruta_2020_files["file_hr_id"] = $fdata;
		$tdatahoja_ruta_2020_files[".searchableFields"][] = "file_hr_id";
//	hr_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "hr_file";
	$fdata["GoodName"] = "hr_file";
	$fdata["ownerTable"] = "hoja_ruta_2020_files";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_files","hr_file");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "hr_file";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_file";

	
	
				$fdata["UploadFolder"] = "../GestionFinanciera/hdr_anexos/";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
	
				$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
					$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
	
				$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
	
				$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;


	$fdata["Absolute"] = true;


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


	$tdatahoja_ruta_2020_files["hr_file"] = $fdata;
		$tdatahoja_ruta_2020_files[".searchableFields"][] = "hr_file";
//	hr_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "hr_id_fk";
	$fdata["GoodName"] = "hr_id_fk";
	$fdata["ownerTable"] = "hoja_ruta_2020_files";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_files","hr_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "hr_id_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_id_fk";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "hoja_ruta_2020";
	$edata["LookupConnId"] = "contratacion_at_172_18_0_115";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "hr_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "obligacion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdatahoja_ruta_2020_files["hr_id_fk"] = $fdata;
		$tdatahoja_ruta_2020_files[".searchableFields"][] = "hr_id_fk";
//	hr_tipo_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "hr_tipo_doc";
	$fdata["GoodName"] = "hr_tipo_doc";
	$fdata["ownerTable"] = "hoja_ruta_2020_files";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_files","hr_tipo_doc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "hr_tipo_doc";

		$fdata["sourceSingle"] = "hr_tipo_doc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hr_tipo_doc";

	
	
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


	$tdatahoja_ruta_2020_files["hr_tipo_doc"] = $fdata;
		$tdatahoja_ruta_2020_files[".searchableFields"][] = "hr_tipo_doc";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "hoja_ruta_2020_files";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_files","sys_date");
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


	$tdatahoja_ruta_2020_files["sys_date"] = $fdata;
		$tdatahoja_ruta_2020_files[".searchableFields"][] = "sys_date";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "hoja_ruta_2020_files";
	$fdata["Label"] = GetFieldLabel("hoja_ruta_2020_files","sys_user");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

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


	$tdatahoja_ruta_2020_files["sys_user"] = $fdata;
		$tdatahoja_ruta_2020_files[".searchableFields"][] = "sys_user";


$tables_data["hoja_ruta_2020_files"]=&$tdatahoja_ruta_2020_files;
$field_labels["hoja_ruta_2020_files"] = &$fieldLabelshoja_ruta_2020_files;
$fieldToolTips["hoja_ruta_2020_files"] = &$fieldToolTipshoja_ruta_2020_files;
$placeHolders["hoja_ruta_2020_files"] = &$placeHoldershoja_ruta_2020_files;
$page_titles["hoja_ruta_2020_files"] = &$pageTitleshoja_ruta_2020_files;


changeTextControlsToDate( "hoja_ruta_2020_files" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hoja_ruta_2020_files"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hoja_ruta_2020_files"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="hoja_ruta_2020";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="hoja_ruta_2020_trpn_jur";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "hoja_ruta_2020_trpn_jur";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["hoja_ruta_2020_files"][0] = $masterParams;
				$masterTablesData["hoja_ruta_2020_files"][0]["masterKeys"] = array();
	$masterTablesData["hoja_ruta_2020_files"][0]["masterKeys"][]="hr_id";
				$masterTablesData["hoja_ruta_2020_files"][0]["detailKeys"] = array();
	$masterTablesData["hoja_ruta_2020_files"][0]["detailKeys"][]="hr_id_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hoja_ruta_2020_files()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "file_hr_id,  	hr_file,  	hr_id_fk,  	hr_tipo_doc,  	sys_date,  	sys_user";
$proto0["m_strFrom"] = "FROM hoja_ruta_2020_files";
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
	"m_strName" => "file_hr_id",
	"m_strTable" => "hoja_ruta_2020_files",
	"m_srcTableName" => "hoja_ruta_2020_files"
));

$proto6["m_sql"] = "file_hr_id";
$proto6["m_srcTableName"] = "hoja_ruta_2020_files";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_file",
	"m_strTable" => "hoja_ruta_2020_files",
	"m_srcTableName" => "hoja_ruta_2020_files"
));

$proto8["m_sql"] = "hr_file";
$proto8["m_srcTableName"] = "hoja_ruta_2020_files";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_id_fk",
	"m_strTable" => "hoja_ruta_2020_files",
	"m_srcTableName" => "hoja_ruta_2020_files"
));

$proto10["m_sql"] = "hr_id_fk";
$proto10["m_srcTableName"] = "hoja_ruta_2020_files";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "hr_tipo_doc",
	"m_strTable" => "hoja_ruta_2020_files",
	"m_srcTableName" => "hoja_ruta_2020_files"
));

$proto12["m_sql"] = "hr_tipo_doc";
$proto12["m_srcTableName"] = "hoja_ruta_2020_files";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "hoja_ruta_2020_files",
	"m_srcTableName" => "hoja_ruta_2020_files"
));

$proto14["m_sql"] = "sys_date";
$proto14["m_srcTableName"] = "hoja_ruta_2020_files";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "hoja_ruta_2020_files",
	"m_srcTableName" => "hoja_ruta_2020_files"
));

$proto16["m_sql"] = "sys_user";
$proto16["m_srcTableName"] = "hoja_ruta_2020_files";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "hoja_ruta_2020_files";
$proto19["m_srcTableName"] = "hoja_ruta_2020_files";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "file_hr_id";
$proto19["m_columns"][] = "hr_file";
$proto19["m_columns"][] = "hr_id_fk";
$proto19["m_columns"][] = "hr_tipo_doc";
$proto19["m_columns"][] = "sys_date";
$proto19["m_columns"][] = "sys_user";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "hoja_ruta_2020_files";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "hoja_ruta_2020_files";
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
$proto0["m_srcTableName"]="hoja_ruta_2020_files";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hoja_ruta_2020_files = createSqlQuery_hoja_ruta_2020_files();


	
								;

						

$tdatahoja_ruta_2020_files[".sqlquery"] = $queryData_hoja_ruta_2020_files;



$tdatahoja_ruta_2020_files[".hasEvents"] = false;

?>