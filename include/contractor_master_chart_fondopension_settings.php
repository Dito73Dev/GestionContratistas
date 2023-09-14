<?php
$tdatacontractor_master_chart_fondopension = array();
$tdatacontractor_master_chart_fondopension[".searchableFields"] = array();
$tdatacontractor_master_chart_fondopension[".ShortName"] = "contractor_master_chart_fondopension";
$tdatacontractor_master_chart_fondopension[".OwnerID"] = "";
$tdatacontractor_master_chart_fondopension[".OriginalTable"] = "contractor_master";


$tdatacontractor_master_chart_fondopension[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatacontractor_master_chart_fondopension[".originalPagesByType"] = $tdatacontractor_master_chart_fondopension[".pagesByType"];
$tdatacontractor_master_chart_fondopension[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatacontractor_master_chart_fondopension[".originalPages"] = $tdatacontractor_master_chart_fondopension[".pages"];
$tdatacontractor_master_chart_fondopension[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatacontractor_master_chart_fondopension[".originalDefaultPages"] = $tdatacontractor_master_chart_fondopension[".defaultPages"];

//	field labels
$fieldLabelscontractor_master_chart_fondopension = array();
$fieldToolTipscontractor_master_chart_fondopension = array();
$pageTitlescontractor_master_chart_fondopension = array();
$placeHolderscontractor_master_chart_fondopension = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontractor_master_chart_fondopension["Spanish"] = array();
	$fieldToolTipscontractor_master_chart_fondopension["Spanish"] = array();
	$placeHolderscontractor_master_chart_fondopension["Spanish"] = array();
	$pageTitlescontractor_master_chart_fondopension["Spanish"] = array();
	$fieldLabelscontractor_master_chart_fondopension["Spanish"]["contractor_fondopensiones"] = "FONDO DE PENSIÓN";
	$fieldToolTipscontractor_master_chart_fondopension["Spanish"]["contractor_fondopensiones"] = "";
	$placeHolderscontractor_master_chart_fondopension["Spanish"]["contractor_fondopensiones"] = "";
	$fieldLabelscontractor_master_chart_fondopension["Spanish"]["qtygen"] = "Q";
	$fieldToolTipscontractor_master_chart_fondopension["Spanish"]["qtygen"] = "";
	$placeHolderscontractor_master_chart_fondopension["Spanish"]["qtygen"] = "";
	if (count($fieldToolTipscontractor_master_chart_fondopension["Spanish"]))
		$tdatacontractor_master_chart_fondopension[".isUseToolTips"] = true;
}


	$tdatacontractor_master_chart_fondopension[".NCSearch"] = true;

	$tdatacontractor_master_chart_fondopension[".ChartRefreshTime"] = 0;


$tdatacontractor_master_chart_fondopension[".shortTableName"] = "contractor_master_chart_fondopension";
$tdatacontractor_master_chart_fondopension[".nSecOptions"] = 0;

$tdatacontractor_master_chart_fondopension[".mainTableOwnerID"] = "";
$tdatacontractor_master_chart_fondopension[".entityType"] = 3;
$tdatacontractor_master_chart_fondopension[".connId"] = "dbct_at_localhost";


$tdatacontractor_master_chart_fondopension[".strOriginalTableName"] = "contractor_master";

	



$tdatacontractor_master_chart_fondopension[".showAddInPopup"] = false;

$tdatacontractor_master_chart_fondopension[".showEditInPopup"] = false;

$tdatacontractor_master_chart_fondopension[".showViewInPopup"] = false;

$tdatacontractor_master_chart_fondopension[".listAjax"] = false;
//	temporary
//$tdatacontractor_master_chart_fondopension[".listAjax"] = false;

	$tdatacontractor_master_chart_fondopension[".audit"] = false;

	$tdatacontractor_master_chart_fondopension[".locking"] = false;


$pages = $tdatacontractor_master_chart_fondopension[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontractor_master_chart_fondopension[".edit"] = true;
	$tdatacontractor_master_chart_fondopension[".afterEditAction"] = 1;
	$tdatacontractor_master_chart_fondopension[".closePopupAfterEdit"] = 1;
	$tdatacontractor_master_chart_fondopension[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontractor_master_chart_fondopension[".add"] = true;
$tdatacontractor_master_chart_fondopension[".afterAddAction"] = 1;
$tdatacontractor_master_chart_fondopension[".closePopupAfterAdd"] = 1;
$tdatacontractor_master_chart_fondopension[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontractor_master_chart_fondopension[".list"] = true;
}



$tdatacontractor_master_chart_fondopension[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontractor_master_chart_fondopension[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontractor_master_chart_fondopension[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontractor_master_chart_fondopension[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontractor_master_chart_fondopension[".printFriendly"] = true;
}



$tdatacontractor_master_chart_fondopension[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontractor_master_chart_fondopension[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontractor_master_chart_fondopension[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontractor_master_chart_fondopension[".isUseAjaxSuggest"] = true;



												

$tdatacontractor_master_chart_fondopension[".ajaxCodeSnippetAdded"] = false;

$tdatacontractor_master_chart_fondopension[".buttonsAdded"] = false;

$tdatacontractor_master_chart_fondopension[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontractor_master_chart_fondopension[".isUseTimeForSearch"] = false;


$tdatacontractor_master_chart_fondopension[".badgeColor"] = "E07878";


$tdatacontractor_master_chart_fondopension[".allSearchFields"] = array();
$tdatacontractor_master_chart_fondopension[".filterFields"] = array();
$tdatacontractor_master_chart_fondopension[".requiredSearchFields"] = array();

$tdatacontractor_master_chart_fondopension[".googleLikeFields"] = array();
$tdatacontractor_master_chart_fondopension[".googleLikeFields"][] = "contractor_fondopensiones";
$tdatacontractor_master_chart_fondopension[".googleLikeFields"][] = "qtygen";



$tdatacontractor_master_chart_fondopension[".tableType"] = "chart";

$tdatacontractor_master_chart_fondopension[".printerPageOrientation"] = 0;
$tdatacontractor_master_chart_fondopension[".nPrinterPageScale"] = 100;

$tdatacontractor_master_chart_fondopension[".nPrinterSplitRecords"] = 40;

$tdatacontractor_master_chart_fondopension[".geocodingEnabled"] = false;



// chart settings
$tdatacontractor_master_chart_fondopension[".chartType"] = "2DColumn";
// end of chart settings

$tdatacontractor_master_chart_fondopension[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdatacontractor_master_chart_fondopension[".strOrderBy"] = $tstrOrderBy;

$tdatacontractor_master_chart_fondopension[".orderindexes"] = array();


$tdatacontractor_master_chart_fondopension[".sqlHead"] = "SELECT contractor_master.contractor_fondopensiones,  Count(contractor_master.contractor_fondopensiones) as qtygen";
$tdatacontractor_master_chart_fondopension[".sqlFrom"] = "FROM  contractor_master";
$tdatacontractor_master_chart_fondopension[".sqlWhereExpr"] = "contractor_master.contractor_fondopensiones IS NOT NULL";
$tdatacontractor_master_chart_fondopension[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontractor_master_chart_fondopension[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontractor_master_chart_fondopension[".arrGroupsPerPage"] = $arrGPP;

$tdatacontractor_master_chart_fondopension[".highlightSearchResults"] = true;

$tableKeyscontractor_master_chart_fondopension = array();
$tdatacontractor_master_chart_fondopension[".Keys"] = $tableKeyscontractor_master_chart_fondopension;


$tdatacontractor_master_chart_fondopension[".hideMobileList"] = array();




//	contractor_fondopensiones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "contractor_fondopensiones";
	$fdata["GoodName"] = "contractor_fondopensiones";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_chart_fondopension","contractor_fondopensiones");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "contractor_fondopensiones";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_master.contractor_fondopensiones";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_fondopension";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "tfo_cdfdoces_b";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tfo_dsfdoces_b";

	

	
	$edata["LookupOrderBy"] = "tfo_dsfdoces_b";

	
	
	
	

	
	
	
// End Lookup Settings


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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatacontractor_master_chart_fondopension["contractor_fondopensiones"] = $fdata;
		$tdatacontractor_master_chart_fondopension[".searchableFields"][] = "contractor_fondopensiones";
//	qtygen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "qtygen";
	$fdata["GoodName"] = "qtygen";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("contractor_master_chart_fondopension","qtygen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "qtygen";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Count(contractor_master.contractor_fondopensiones)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatacontractor_master_chart_fondopension["qtygen"] = $fdata;
		$tdatacontractor_master_chart_fondopension[".searchableFields"][] = "qtygen";

$tdatacontractor_master_chart_fondopension[".chartLabelField"] = "contractor_fondopensiones";
$tdatacontractor_master_chart_fondopension[".chartSeries"] = array();
$tdatacontractor_master_chart_fondopension[".chartSeries"][] = array(
	"field" => "qtygen",
	"total" => ""
);
	$tdatacontractor_master_chart_fondopension[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">contractor_master_chart_fondopension</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatacontractor_master_chart_fondopension[".chartXml"] .= '<attr value="0">
			<attr value="name">qtygen</attr>';
	$tdatacontractor_master_chart_fondopension[".chartXml"] .= '</attr>';
	$tdatacontractor_master_chart_fondopension[".chartXml"] .= '<attr value="1">
		<attr value="name">contractor_fondopensiones</attr>
	</attr>';
	$tdatacontractor_master_chart_fondopension[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatacontractor_master_chart_fondopension[".chartXml"] .= '<attr value="head">'.xmlencode("Caracterización contratistas por FONDO DE PENSION").'</attr>
<attr value="foot">'.xmlencode("FONDO DE PENSION").'</attr>
<attr value="y_axis_label">'.xmlencode("contractor_sup_jerarquico").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatacontractor_master_chart_fondopension[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatacontractor_master_chart_fondopension[".chartXml"] .= '<attr value="0">
		<attr value="name">contractor_fondopensiones</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("contractor_master_chart_fondopension","contractor_fondopensiones")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacontractor_master_chart_fondopension[".chartXml"] .= '<attr value="1">
		<attr value="name">qtygen</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("contractor_master_chart_fondopension","qtygen")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatacontractor_master_chart_fondopension[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">contractor_master_chart_fondopension</attr>
<attr value="short_table_name">contractor_master_chart_fondopension</attr>
</attr>

</chart>';

$tables_data["contractor_master_chart_fondopension"]=&$tdatacontractor_master_chart_fondopension;
$field_labels["contractor_master_chart_fondopension"] = &$fieldLabelscontractor_master_chart_fondopension;
$fieldToolTips["contractor_master_chart_fondopension"] = &$fieldToolTipscontractor_master_chart_fondopension;
$placeHolders["contractor_master_chart_fondopension"] = &$placeHolderscontractor_master_chart_fondopension;
$page_titles["contractor_master_chart_fondopension"] = &$pageTitlescontractor_master_chart_fondopension;


changeTextControlsToDate( "contractor_master_chart_fondopension" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contractor_master_chart_fondopension"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contractor_master_chart_fondopension"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contractor_master_chart_fondopension()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "contractor_master.contractor_fondopensiones,  Count(contractor_master.contractor_fondopensiones) as qtygen";
$proto0["m_strFrom"] = "FROM  contractor_master";
$proto0["m_strWhere"] = "contractor_master.contractor_fondopensiones IS NOT NULL";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "contractor_master.contractor_fondopensiones IS NOT NULL";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "contractor_fondopensiones",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_chart_fondopension"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "IS NOT NULL";
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
	"m_strName" => "contractor_fondopensiones",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_chart_fondopension"
));

$proto6["m_sql"] = "contractor_master.contractor_fondopensiones";
$proto6["m_srcTableName"] = "contractor_master_chart_fondopension";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_COUNT";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "contractor_fondopensiones",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_chart_fondopension"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "Count";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "Count(contractor_master.contractor_fondopensiones)";
$proto8["m_srcTableName"] = "contractor_master_chart_fondopension";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "qtygen";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "contractor_master";
$proto12["m_srcTableName"] = "contractor_master_chart_fondopension";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "active";
$proto12["m_columns"][] = "actividad_economica";
$proto12["m_columns"][] = "bank_cta_number";
$proto12["m_columns"][] = "bank_cta_type";
$proto12["m_columns"][] = "bank_name";
$proto12["m_columns"][] = "contractor_address";
$proto12["m_columns"][] = "contractor_arl";
$proto12["m_columns"][] = "contractor_cajacompensacion";
$proto12["m_columns"][] = "contractor_city";
$proto12["m_columns"][] = "contractor_decljur";
$proto12["m_columns"][] = "contractor_dependencia";
$proto12["m_columns"][] = "contractor_dependientes";
$proto12["m_columns"][] = "contractor_doc_dv";
$proto12["m_columns"][] = "contractor_doc_id";
$proto12["m_columns"][] = "contractor_email";
$proto12["m_columns"][] = "contractor_email_mincit";
$proto12["m_columns"][] = "contractor_eps";
$proto12["m_columns"][] = "contractor_fondopensiones";
$proto12["m_columns"][] = "contractor_id";
$proto12["m_columns"][] = "contractor_image";
$proto12["m_columns"][] = "contractor_lname";
$proto12["m_columns"][] = "contractor_medicinapre_file";
$proto12["m_columns"][] = "contractor_mobile";
$proto12["m_columns"][] = "contractor_name";
$proto12["m_columns"][] = "contractor_naturaleza";
$proto12["m_columns"][] = "contractor_nombresfull";
$proto12["m_columns"][] = "contractor_phone";
$proto12["m_columns"][] = "contractor_picmonetaria_file";
$proto12["m_columns"][] = "contractor_pwd";
$proto12["m_columns"][] = "contractor_sup_jerarquico";
$proto12["m_columns"][] = "contractor_type";
$proto12["m_columns"][] = "ct_fecha_nacimiento";
$proto12["m_columns"][] = "ct_fecha_nacimiento_mun";
$proto12["m_columns"][] = "ct_nacionalidad";
$proto12["m_columns"][] = "dem_discapacidad";
$proto12["m_columns"][] = "dem_edad";
$proto12["m_columns"][] = "dem_educacion";
$proto12["m_columns"][] = "dem_genero";
$proto12["m_columns"][] = "dem_ocupacion";
$proto12["m_columns"][] = "dem_profesion";
$proto12["m_columns"][] = "emergencia";
$proto12["m_columns"][] = "enlace_sigep";
$proto12["m_columns"][] = "factura";
$proto12["m_columns"][] = "groupid";
$proto12["m_columns"][] = "iva_regimen";
$proto12["m_columns"][] = "pin";
$proto12["m_columns"][] = "reset_date";
$proto12["m_columns"][] = "reset_date1";
$proto12["m_columns"][] = "reset_token";
$proto12["m_columns"][] = "reset_token1";
$proto12["m_columns"][] = "responsabilidades";
$proto12["m_columns"][] = "signature";
$proto12["m_columns"][] = "sys_date";
$proto12["m_columns"][] = "sys_last_upd";
$proto12["m_columns"][] = "sys_level";
$proto12["m_columns"][] = "sys_status";
$proto12["m_columns"][] = "sys_update";
$proto12["m_columns"][] = "sys_user";
$proto12["m_columns"][] = "terms_acepta";
$proto12["m_columns"][] = "terms_msj";
$proto12["m_columns"][] = "ubica_dep";
$proto12["m_columns"][] = "ubica_extension";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "contractor_master";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "contractor_master_chart_fondopension";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto15=array();
						$obj = new SQLField(array(
	"m_strName" => "contractor_fondopensiones",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_chart_fondopension"
));

$proto15["m_column"]=$obj;
$obj = new SQLGroupByItem($proto15);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contractor_master_chart_fondopension";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contractor_master_chart_fondopension = createSqlQuery_contractor_master_chart_fondopension();


	
								;

		

$tdatacontractor_master_chart_fondopension[".sqlquery"] = $queryData_contractor_master_chart_fondopension;



$tdatacontractor_master_chart_fondopension[".hasEvents"] = false;

?>