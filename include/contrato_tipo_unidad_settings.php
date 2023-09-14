<?php
$tdatacontrato_tipo_unidad = array();
$tdatacontrato_tipo_unidad[".searchableFields"] = array();
$tdatacontrato_tipo_unidad[".ShortName"] = "contrato_tipo_unidad";
$tdatacontrato_tipo_unidad[".OwnerID"] = "";
$tdatacontrato_tipo_unidad[".OriginalTable"] = "contrato_tipo_unidad";


$tdatacontrato_tipo_unidad[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatacontrato_tipo_unidad[".originalPagesByType"] = $tdatacontrato_tipo_unidad[".pagesByType"];
$tdatacontrato_tipo_unidad[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatacontrato_tipo_unidad[".originalPages"] = $tdatacontrato_tipo_unidad[".pages"];
$tdatacontrato_tipo_unidad[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatacontrato_tipo_unidad[".originalDefaultPages"] = $tdatacontrato_tipo_unidad[".defaultPages"];

//	field labels
$fieldLabelscontrato_tipo_unidad = array();
$fieldToolTipscontrato_tipo_unidad = array();
$pageTitlescontrato_tipo_unidad = array();
$placeHolderscontrato_tipo_unidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_tipo_unidad["Spanish"] = array();
	$fieldToolTipscontrato_tipo_unidad["Spanish"] = array();
	$placeHolderscontrato_tipo_unidad["Spanish"] = array();
	$pageTitlescontrato_tipo_unidad["Spanish"] = array();
	$fieldLabelscontrato_tipo_unidad["Spanish"]["cod_tipounidad"] = "Cod Tipounidad";
	$fieldToolTipscontrato_tipo_unidad["Spanish"]["cod_tipounidad"] = "";
	$placeHolderscontrato_tipo_unidad["Spanish"]["cod_tipounidad"] = "";
	$fieldLabelscontrato_tipo_unidad["Spanish"]["nom_tipounidad"] = "Nom Tipounidad";
	$fieldToolTipscontrato_tipo_unidad["Spanish"]["nom_tipounidad"] = "";
	$placeHolderscontrato_tipo_unidad["Spanish"]["nom_tipounidad"] = "";
	$fieldLabelscontrato_tipo_unidad["Spanish"]["periodo"] = "Periodo";
	$fieldToolTipscontrato_tipo_unidad["Spanish"]["periodo"] = "";
	$placeHolderscontrato_tipo_unidad["Spanish"]["periodo"] = "";
	if (count($fieldToolTipscontrato_tipo_unidad["Spanish"]))
		$tdatacontrato_tipo_unidad[".isUseToolTips"] = true;
}


	$tdatacontrato_tipo_unidad[".NCSearch"] = true;



$tdatacontrato_tipo_unidad[".shortTableName"] = "contrato_tipo_unidad";
$tdatacontrato_tipo_unidad[".nSecOptions"] = 0;

$tdatacontrato_tipo_unidad[".mainTableOwnerID"] = "";
$tdatacontrato_tipo_unidad[".entityType"] = 0;
$tdatacontrato_tipo_unidad[".connId"] = "dbct_at_localhost";


$tdatacontrato_tipo_unidad[".strOriginalTableName"] = "contrato_tipo_unidad";

	



$tdatacontrato_tipo_unidad[".showAddInPopup"] = false;

$tdatacontrato_tipo_unidad[".showEditInPopup"] = false;

$tdatacontrato_tipo_unidad[".showViewInPopup"] = false;

$tdatacontrato_tipo_unidad[".listAjax"] = false;
//	temporary
//$tdatacontrato_tipo_unidad[".listAjax"] = false;

	$tdatacontrato_tipo_unidad[".audit"] = false;

	$tdatacontrato_tipo_unidad[".locking"] = false;


$pages = $tdatacontrato_tipo_unidad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_tipo_unidad[".edit"] = true;
	$tdatacontrato_tipo_unidad[".afterEditAction"] = 1;
	$tdatacontrato_tipo_unidad[".closePopupAfterEdit"] = 1;
	$tdatacontrato_tipo_unidad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_tipo_unidad[".add"] = true;
$tdatacontrato_tipo_unidad[".afterAddAction"] = 1;
$tdatacontrato_tipo_unidad[".closePopupAfterAdd"] = 1;
$tdatacontrato_tipo_unidad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_tipo_unidad[".list"] = true;
}



$tdatacontrato_tipo_unidad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_tipo_unidad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_tipo_unidad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_tipo_unidad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_tipo_unidad[".printFriendly"] = true;
}



$tdatacontrato_tipo_unidad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_tipo_unidad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_tipo_unidad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_tipo_unidad[".isUseAjaxSuggest"] = true;



												

$tdatacontrato_tipo_unidad[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_tipo_unidad[".buttonsAdded"] = false;

$tdatacontrato_tipo_unidad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_tipo_unidad[".isUseTimeForSearch"] = false;


$tdatacontrato_tipo_unidad[".badgeColor"] = "CD853F";


$tdatacontrato_tipo_unidad[".allSearchFields"] = array();
$tdatacontrato_tipo_unidad[".filterFields"] = array();
$tdatacontrato_tipo_unidad[".requiredSearchFields"] = array();

$tdatacontrato_tipo_unidad[".googleLikeFields"] = array();
$tdatacontrato_tipo_unidad[".googleLikeFields"][] = "cod_tipounidad";
$tdatacontrato_tipo_unidad[".googleLikeFields"][] = "nom_tipounidad";
$tdatacontrato_tipo_unidad[".googleLikeFields"][] = "periodo";



$tdatacontrato_tipo_unidad[".tableType"] = "list";

$tdatacontrato_tipo_unidad[".printerPageOrientation"] = 0;
$tdatacontrato_tipo_unidad[".nPrinterPageScale"] = 100;

$tdatacontrato_tipo_unidad[".nPrinterSplitRecords"] = 40;

$tdatacontrato_tipo_unidad[".geocodingEnabled"] = false;










$tdatacontrato_tipo_unidad[".pageSize"] = 20;

$tdatacontrato_tipo_unidad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontrato_tipo_unidad[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_tipo_unidad[".orderindexes"] = array();


$tdatacontrato_tipo_unidad[".sqlHead"] = "SELECT cod_tipounidad,  	nom_tipounidad,  	periodo";
$tdatacontrato_tipo_unidad[".sqlFrom"] = "FROM contrato_tipo_unidad";
$tdatacontrato_tipo_unidad[".sqlWhereExpr"] = "";
$tdatacontrato_tipo_unidad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_tipo_unidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_tipo_unidad[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_tipo_unidad[".highlightSearchResults"] = true;

$tableKeyscontrato_tipo_unidad = array();
$tableKeyscontrato_tipo_unidad[] = "cod_tipounidad";
$tdatacontrato_tipo_unidad[".Keys"] = $tableKeyscontrato_tipo_unidad;


$tdatacontrato_tipo_unidad[".hideMobileList"] = array();




//	cod_tipounidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cod_tipounidad";
	$fdata["GoodName"] = "cod_tipounidad";
	$fdata["ownerTable"] = "contrato_tipo_unidad";
	$fdata["Label"] = GetFieldLabel("contrato_tipo_unidad","cod_tipounidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cod_tipounidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cod_tipounidad";

	
	
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


	$tdatacontrato_tipo_unidad["cod_tipounidad"] = $fdata;
		$tdatacontrato_tipo_unidad[".searchableFields"][] = "cod_tipounidad";
//	nom_tipounidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nom_tipounidad";
	$fdata["GoodName"] = "nom_tipounidad";
	$fdata["ownerTable"] = "contrato_tipo_unidad";
	$fdata["Label"] = GetFieldLabel("contrato_tipo_unidad","nom_tipounidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom_tipounidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_tipounidad";

	
	
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


	$tdatacontrato_tipo_unidad["nom_tipounidad"] = $fdata;
		$tdatacontrato_tipo_unidad[".searchableFields"][] = "nom_tipounidad";
//	periodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "periodo";
	$fdata["GoodName"] = "periodo";
	$fdata["ownerTable"] = "contrato_tipo_unidad";
	$fdata["Label"] = GetFieldLabel("contrato_tipo_unidad","periodo");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "periodo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo";

	
	
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


	$tdatacontrato_tipo_unidad["periodo"] = $fdata;
		$tdatacontrato_tipo_unidad[".searchableFields"][] = "periodo";


$tables_data["contrato_tipo_unidad"]=&$tdatacontrato_tipo_unidad;
$field_labels["contrato_tipo_unidad"] = &$fieldLabelscontrato_tipo_unidad;
$fieldToolTips["contrato_tipo_unidad"] = &$fieldToolTipscontrato_tipo_unidad;
$placeHolders["contrato_tipo_unidad"] = &$placeHolderscontrato_tipo_unidad;
$page_titles["contrato_tipo_unidad"] = &$pageTitlescontrato_tipo_unidad;


changeTextControlsToDate( "contrato_tipo_unidad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contrato_tipo_unidad"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contrato_tipo_unidad"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contrato_tipo_unidad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cod_tipounidad,  	nom_tipounidad,  	periodo";
$proto0["m_strFrom"] = "FROM contrato_tipo_unidad";
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
	"m_strName" => "cod_tipounidad",
	"m_strTable" => "contrato_tipo_unidad",
	"m_srcTableName" => "contrato_tipo_unidad"
));

$proto6["m_sql"] = "cod_tipounidad";
$proto6["m_srcTableName"] = "contrato_tipo_unidad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_tipounidad",
	"m_strTable" => "contrato_tipo_unidad",
	"m_srcTableName" => "contrato_tipo_unidad"
));

$proto8["m_sql"] = "nom_tipounidad";
$proto8["m_srcTableName"] = "contrato_tipo_unidad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo",
	"m_strTable" => "contrato_tipo_unidad",
	"m_srcTableName" => "contrato_tipo_unidad"
));

$proto10["m_sql"] = "periodo";
$proto10["m_srcTableName"] = "contrato_tipo_unidad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "contrato_tipo_unidad";
$proto13["m_srcTableName"] = "contrato_tipo_unidad";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "cod_tipounidad";
$proto13["m_columns"][] = "nom_tipounidad";
$proto13["m_columns"][] = "periodo";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "contrato_tipo_unidad";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "contrato_tipo_unidad";
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
$proto0["m_srcTableName"]="contrato_tipo_unidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_tipo_unidad = createSqlQuery_contrato_tipo_unidad();


	
								;

			

$tdatacontrato_tipo_unidad[".sqlquery"] = $queryData_contrato_tipo_unidad;



$tdatacontrato_tipo_unidad[".hasEvents"] = false;

?>