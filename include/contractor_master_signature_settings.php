<?php
$tdatacontractor_master_signature = array();
$tdatacontractor_master_signature[".searchableFields"] = array();
$tdatacontractor_master_signature[".ShortName"] = "contractor_master_signature";
$tdatacontractor_master_signature[".OwnerID"] = "contractor_doc_id";
$tdatacontractor_master_signature[".OriginalTable"] = "contractor_master";


$tdatacontractor_master_signature[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontractor_master_signature[".originalPagesByType"] = $tdatacontractor_master_signature[".pagesByType"];
$tdatacontractor_master_signature[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontractor_master_signature[".originalPages"] = $tdatacontractor_master_signature[".pages"];
$tdatacontractor_master_signature[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontractor_master_signature[".originalDefaultPages"] = $tdatacontractor_master_signature[".defaultPages"];

//	field labels
$fieldLabelscontractor_master_signature = array();
$fieldToolTipscontractor_master_signature = array();
$pageTitlescontractor_master_signature = array();
$placeHolderscontractor_master_signature = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontractor_master_signature["Spanish"] = array();
	$fieldToolTipscontractor_master_signature["Spanish"] = array();
	$placeHolderscontractor_master_signature["Spanish"] = array();
	$pageTitlescontractor_master_signature["Spanish"] = array();
	$fieldLabelscontractor_master_signature["Spanish"]["contractor_doc_id"] = "Número de documento";
	$fieldToolTipscontractor_master_signature["Spanish"]["contractor_doc_id"] = "";
	$placeHolderscontractor_master_signature["Spanish"]["contractor_doc_id"] = "";
	$fieldLabelscontractor_master_signature["Spanish"]["signature"] = "Firma";
	$fieldToolTipscontractor_master_signature["Spanish"]["signature"] = "";
	$placeHolderscontractor_master_signature["Spanish"]["signature"] = "";
	$fieldLabelscontractor_master_signature["Spanish"]["pin"] = "Pin";
	$fieldToolTipscontractor_master_signature["Spanish"]["pin"] = "";
	$placeHolderscontractor_master_signature["Spanish"]["pin"] = "";
	$pageTitlescontractor_master_signature["Spanish"]["edit"] = "Signature, Editar [{%contractor_doc_id}]";
	if (count($fieldToolTipscontractor_master_signature["Spanish"]))
		$tdatacontractor_master_signature[".isUseToolTips"] = true;
}


	$tdatacontractor_master_signature[".NCSearch"] = true;



$tdatacontractor_master_signature[".shortTableName"] = "contractor_master_signature";
$tdatacontractor_master_signature[".nSecOptions"] = 1;

$tdatacontractor_master_signature[".mainTableOwnerID"] = "contractor_doc_id";
$tdatacontractor_master_signature[".entityType"] = 1;
$tdatacontractor_master_signature[".connId"] = "dbct_at_localhost";


$tdatacontractor_master_signature[".strOriginalTableName"] = "contractor_master";

	



$tdatacontractor_master_signature[".showAddInPopup"] = false;

$tdatacontractor_master_signature[".showEditInPopup"] = false;

$tdatacontractor_master_signature[".showViewInPopup"] = false;

$tdatacontractor_master_signature[".listAjax"] = false;
//	temporary
//$tdatacontractor_master_signature[".listAjax"] = false;

	$tdatacontractor_master_signature[".audit"] = true;

	$tdatacontractor_master_signature[".locking"] = true;


$pages = $tdatacontractor_master_signature[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontractor_master_signature[".edit"] = true;
	$tdatacontractor_master_signature[".afterEditAction"] = 0;
	$tdatacontractor_master_signature[".closePopupAfterEdit"] = 1;
	$tdatacontractor_master_signature[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatacontractor_master_signature[".add"] = true;
$tdatacontractor_master_signature[".afterAddAction"] = 1;
$tdatacontractor_master_signature[".closePopupAfterAdd"] = 1;
$tdatacontractor_master_signature[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontractor_master_signature[".list"] = true;
}



$tdatacontractor_master_signature[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontractor_master_signature[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontractor_master_signature[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontractor_master_signature[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontractor_master_signature[".printFriendly"] = true;
}



$tdatacontractor_master_signature[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontractor_master_signature[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontractor_master_signature[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontractor_master_signature[".isUseAjaxSuggest"] = true;



												

$tdatacontractor_master_signature[".ajaxCodeSnippetAdded"] = false;

$tdatacontractor_master_signature[".buttonsAdded"] = false;

$tdatacontractor_master_signature[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontractor_master_signature[".isUseTimeForSearch"] = false;


$tdatacontractor_master_signature[".badgeColor"] = "5F9EA0";


$tdatacontractor_master_signature[".allSearchFields"] = array();
$tdatacontractor_master_signature[".filterFields"] = array();
$tdatacontractor_master_signature[".requiredSearchFields"] = array();

$tdatacontractor_master_signature[".googleLikeFields"] = array();
$tdatacontractor_master_signature[".googleLikeFields"][] = "contractor_doc_id";
$tdatacontractor_master_signature[".googleLikeFields"][] = "signature";
$tdatacontractor_master_signature[".googleLikeFields"][] = "pin";



$tdatacontractor_master_signature[".tableType"] = "list";

$tdatacontractor_master_signature[".printerPageOrientation"] = 0;
$tdatacontractor_master_signature[".nPrinterPageScale"] = 100;

$tdatacontractor_master_signature[".nPrinterSplitRecords"] = 40;

$tdatacontractor_master_signature[".geocodingEnabled"] = false;










$tdatacontractor_master_signature[".pageSize"] = 20;

$tdatacontractor_master_signature[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontractor_master_signature[".strOrderBy"] = $tstrOrderBy;

$tdatacontractor_master_signature[".orderindexes"] = array();


$tdatacontractor_master_signature[".sqlHead"] = "SELECT contractor_doc_id,  signature,  pin";
$tdatacontractor_master_signature[".sqlFrom"] = "FROM contractor_master";
$tdatacontractor_master_signature[".sqlWhereExpr"] = "";
$tdatacontractor_master_signature[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontractor_master_signature[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontractor_master_signature[".arrGroupsPerPage"] = $arrGPP;

$tdatacontractor_master_signature[".highlightSearchResults"] = true;

$tableKeyscontractor_master_signature = array();
$tableKeyscontractor_master_signature[] = "contractor_doc_id";
$tdatacontractor_master_signature[".Keys"] = $tableKeyscontractor_master_signature;


$tdatacontractor_master_signature[".hideMobileList"] = array();




//	contractor_doc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "contractor_doc_id";
	$fdata["GoodName"] = "contractor_doc_id";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_signature","contractor_doc_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_doc_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_doc_id";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatacontractor_master_signature["contractor_doc_id"] = $fdata;
		$tdatacontractor_master_signature[".searchableFields"][] = "contractor_doc_id";
//	signature
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "signature";
	$fdata["GoodName"] = "signature";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_signature","signature");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "signature";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "signature";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "QRCode");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "SignaturePad");

	
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


	$tdatacontractor_master_signature["signature"] = $fdata;
		$tdatacontractor_master_signature[".searchableFields"][] = "signature";
//	pin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pin";
	$fdata["GoodName"] = "pin";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_signature","pin");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pin";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pin";

	
	
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

	$edata = array("EditFormat" => "Gestury");

	
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


	$tdatacontractor_master_signature["pin"] = $fdata;
		$tdatacontractor_master_signature[".searchableFields"][] = "pin";


$tables_data["contractor_master_signature"]=&$tdatacontractor_master_signature;
$field_labels["contractor_master_signature"] = &$fieldLabelscontractor_master_signature;
$fieldToolTips["contractor_master_signature"] = &$fieldToolTipscontractor_master_signature;
$placeHolders["contractor_master_signature"] = &$placeHolderscontractor_master_signature;
$page_titles["contractor_master_signature"] = &$pageTitlescontractor_master_signature;


changeTextControlsToDate( "contractor_master_signature" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contractor_master_signature"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contractor_master_signature"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contractor_master_signature()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "contractor_doc_id,  signature,  pin";
$proto0["m_strFrom"] = "FROM contractor_master";
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
	"m_strName" => "contractor_doc_id",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_signature"
));

$proto6["m_sql"] = "contractor_doc_id";
$proto6["m_srcTableName"] = "contractor_master_signature";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "signature",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_signature"
));

$proto8["m_sql"] = "signature";
$proto8["m_srcTableName"] = "contractor_master_signature";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "pin",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_signature"
));

$proto10["m_sql"] = "pin";
$proto10["m_srcTableName"] = "contractor_master_signature";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "contractor_master";
$proto13["m_srcTableName"] = "contractor_master_signature";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "active";
$proto13["m_columns"][] = "actividad_economica";
$proto13["m_columns"][] = "bank_cta_number";
$proto13["m_columns"][] = "bank_cta_type";
$proto13["m_columns"][] = "bank_name";
$proto13["m_columns"][] = "contractor_address";
$proto13["m_columns"][] = "contractor_arl";
$proto13["m_columns"][] = "contractor_cajacompensacion";
$proto13["m_columns"][] = "contractor_city";
$proto13["m_columns"][] = "contractor_decljur";
$proto13["m_columns"][] = "contractor_dependencia";
$proto13["m_columns"][] = "contractor_dependientes";
$proto13["m_columns"][] = "contractor_doc_dv";
$proto13["m_columns"][] = "contractor_doc_id";
$proto13["m_columns"][] = "contractor_email";
$proto13["m_columns"][] = "contractor_email_mincit";
$proto13["m_columns"][] = "contractor_eps";
$proto13["m_columns"][] = "contractor_fondopensiones";
$proto13["m_columns"][] = "contractor_id";
$proto13["m_columns"][] = "contractor_image";
$proto13["m_columns"][] = "contractor_lname";
$proto13["m_columns"][] = "contractor_medicinapre_file";
$proto13["m_columns"][] = "contractor_mobile";
$proto13["m_columns"][] = "contractor_name";
$proto13["m_columns"][] = "contractor_naturaleza";
$proto13["m_columns"][] = "contractor_nombresfull";
$proto13["m_columns"][] = "contractor_phone";
$proto13["m_columns"][] = "contractor_picmonetaria_file";
$proto13["m_columns"][] = "contractor_pwd";
$proto13["m_columns"][] = "contractor_sup_jerarquico";
$proto13["m_columns"][] = "contractor_type";
$proto13["m_columns"][] = "ct_fecha_nacimiento";
$proto13["m_columns"][] = "ct_fecha_nacimiento_mun";
$proto13["m_columns"][] = "ct_nacionalidad";
$proto13["m_columns"][] = "dem_discapacidad";
$proto13["m_columns"][] = "dem_edad";
$proto13["m_columns"][] = "dem_educacion";
$proto13["m_columns"][] = "dem_genero";
$proto13["m_columns"][] = "dem_ocupacion";
$proto13["m_columns"][] = "dem_profesion";
$proto13["m_columns"][] = "emergencia";
$proto13["m_columns"][] = "enlace_sigep";
$proto13["m_columns"][] = "factura";
$proto13["m_columns"][] = "groupid";
$proto13["m_columns"][] = "iva_regimen";
$proto13["m_columns"][] = "pin";
$proto13["m_columns"][] = "reset_date";
$proto13["m_columns"][] = "reset_date1";
$proto13["m_columns"][] = "reset_token";
$proto13["m_columns"][] = "reset_token1";
$proto13["m_columns"][] = "responsabilidades";
$proto13["m_columns"][] = "signature";
$proto13["m_columns"][] = "sys_date";
$proto13["m_columns"][] = "sys_last_upd";
$proto13["m_columns"][] = "sys_level";
$proto13["m_columns"][] = "sys_status";
$proto13["m_columns"][] = "sys_update";
$proto13["m_columns"][] = "sys_user";
$proto13["m_columns"][] = "terms_acepta";
$proto13["m_columns"][] = "terms_msj";
$proto13["m_columns"][] = "ubica_dep";
$proto13["m_columns"][] = "ubica_extension";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "contractor_master";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "contractor_master_signature";
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
$proto0["m_srcTableName"]="contractor_master_signature";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contractor_master_signature = createSqlQuery_contractor_master_signature();


	
								;

			

$tdatacontractor_master_signature[".sqlquery"] = $queryData_contractor_master_signature;



$tdatacontractor_master_signature[".hasEvents"] = false;

?>