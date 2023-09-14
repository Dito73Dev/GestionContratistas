<?php
class ProjectSettings
{
	var $_table;

	var $_pageMode;

	var $_pageType;

	var $_page;

	var $_viewPage = PAGE_VIEW;

	var $_defaultViewPage = PAGE_VIEW;

	var $_editPage = PAGE_EDIT;

	var $_defaultEditPage = PAGE_EDIT;

	var $_tableData = array();

	var $_optionsFile = array();

	/**
	 * _auxTableData is used for all page-related settings such as getDefaultPage, getPageOption etc
	 * The only page so far where table != auxTable is Register
	 * table is <users> there and auxTable is GLOBAL_PAGES
	 */
	var $_auxTable = "";
	var $_auxTableData = array();

	var $_pageOptions = array();

	var $_mastersTableData = array();

	var $_detailsTableData = array();

	var $_dashboardElemPSet = array();

	/**
	 * @param String table - project entity where table and field-level settings are read from
	 * @param pageType
	 * @param page - specific page id. When empty, the default page of type $pageType is used.
	 * 				 IMPORTANT! $page is stronger that $pageType. When page contradicts pageType,
	 * 	  			 e.g. $page.type is 'view', but $pageType is 'list', $pageType is ignored
	 * @param $pageTable - project entity where page-level settigns are read from. When empty, $table is used
	 */
	function __construct($table = "", $pageType = "", $page = "", $pageTable = "")
	{
		if( !$table )
			$table = GLOBAL_PAGES;
		if( !$pageTable )
			$pageTable = $table;
		$this->setTable($table);
		if( $table == $pageTable) {
			$this->_auxTableData = & $this->_tableData;
			$this->_auxTable = $this->_table;
		} else {
			$this->loadAuxTable( $pageTable );
		}
		if( $page ) {
			//	determine the page type to avoid unnecessary permission reading
			//	when creating pSetSearch
			$this->_pageType = $this->getOriginalPageType( $page );
		}



		if( $page && array_key_exists($page, $this->getPageIds()) ) {
			$this->setPage($page);
			$this->setPageType( $this->getPageType() );
		} else {
			if( !$pageType ) {
				//	pick default page type for the entity
				$pageType = $this->getDefaultPageType();
			}
			if( $pageType ) {
				$this->_pageType = $pageType;
				$page = $this->getDefaultPage( $pageType );
				if( $page )
				{
					$this->setPage( $page );
				}
			}
		}
		if( $page && !$pageType ) {
			$pageType = $this->getPageType();
		}
		if ( $pageType ) {
			$this->setPageType($pageType);
		}

		//	substitute page if mobile substitution needed
		global $mediaType;
		$mobileSub = $this->getMobileSub();
		if( $mediaType && $mobileSub ) {
			if( array_key_exists( $mobileSub, $this->getPageIds()) ) {
				$this->setPage( $mobileSub );
			}
		}
	}

	/**
	 * Return default poage type for the current entity
	 */
	function getDefaultPageType() {
		$pageTypes = array();

		$pageTypes[ titTABLE ] = "list";
		$pageTypes[ titVIEW ] = "list";
		$pageTypes[ titREPORT ] = "report";
		$pageTypes[ titCHART ] = "chart";
		$pageTypes[ titDASHBOARD ] = "dashboard";
		$pageTypes[ titSQL ] = "list";
		$pageTypes[ titREST ] = "list";
		$pageTypes[ titSQL_REPORT ] = "report";
		$pageTypes[ titSQL_CHART ] = "chart";
		$pageTypes[ titREST_REPORT ] = "report";
		$pageTypes[ titREST_CHART ] = "chart";
		return $pageTypes[ $this->getEntityType() ];

	}

	function table() {
		return $this->_table;
	}

	function loadPageOptions( $option = "" ) {
		if( $this->_pageOptions )
			return;
		importPageOptions( $this->_auxTable, $this->_page );
		global $page_options;
		$this->_pageOptions = &$page_options[$this->_auxTable][$this->_page];


	}

	function setPage($page) {
		if( $page != $this->_page ) {
			$dummy = null;
			$this->_pageOptions = &$dummy;
		}
		$this->_page = $page;
		//	there is no such page!
		if( array_search( $page, $this->getPageIds() ) === FALSE ) {
			return;
		}
		$this->_optionsFile = getabspath("include/pages/". GetTableURL( $this->_auxTable ) . "_" . $page . ".json");
	}

	function setTable($table)
	{
		$this->_table = $table;
		global $tables_data, $field_labels, $fieldToolTips, $placeHolders, $page_titles, $detailsTablesData, $masterTablesData, $bSubqueriesSupported;
		if(GetTableURL($table) != "") {
			importTableSettings( $table );
		}

		if(isset($tables_data[$this->_table]))
			$this->_tableData = &$tables_data[$this->_table];

		$this->_mastersTableData = &$masterTablesData[$this->_table];
		$this->_detailsTableData = &$detailsTablesData[$this->_table];

		$tableType = $this->getTableType();

		$this->_editPage = $this->getDefaultEditPageType($tableType);
		$this->_viewPage = $this->getDefaultViewPageType($tableType);
		$this->_defaultEditPage = $this->_editPage;
		$this->_defaultViewPage = $this->_viewPage;
	}

	function loadAuxTable($auxTable)
	{
		$this->_auxTable = $auxTable;
		global $tables_data;
		if(GetTableURL($auxTable) != "") {
			importTableSettings( $auxTable );
		}

		if(isset($tables_data[$this->_auxTable]))
			$this->_auxTableData = &$tables_data[$this->_auxTable];
	}


	function pageName() {
		return $this->_page;
	}

	function pageType() {
		return $this->_pageType;
	}


	/**
	 * Return table where the page belongs. <global> for Login, Register page desite table==usersTable
	 */
	function pageTable() {
		return $this->_auxTable;
	}

	function getDefaultViewPageType($tableType)
	{
		if($tableType == PAGE_CHART || $tableType == PAGE_REPORT)
			return $tableType;

		return PAGE_VIEW;
	}

	function getDefaultEditPageType($tableType)
	{
		if($tableType == PAGE_CHART || $tableType == PAGE_REPORT)
			return PAGE_SEARCH;

		return PAGE_EDIT;
	}

	function setPageType($page)
	{
		//	a deeper checking for table and page types compatibility might be added here
		if($this->isPageTypeForView($page))
		{
			$tableType = $this->getTableType();
			if($tableType != "report" && $tableType != "chart"
				&& ($page == PAGE_CHART || $page == PAGE_REPORT))
				$this->_viewPage = PAGE_LIST;
			else
				$this->_viewPage = $page;
			$this->_defaultViewPage = $this->getDefaultViewPageType($tableType);
		}
		if($this->isPageTypeForEdit($page))
		{
			$this->_editPage = $page;
			$this->_defaultEditPage = $this->getDefaultEditPageType($this->getTableType());
		}
	}

	function getDefaultPages() {
		$this->updatePages();
		return $this->getAuxTableData(".defaultPages");
	}

	function getDefaultPage( $type, $pageTable = "" ) {
		$this->updatePages();
		if( isAdminPage( $this->_auxTable ) )
			return $this->_pageType;
		$defPages =& $this->getAuxTableData(".defaultPages");
		$defPage = $defPages[$type];
		if( $defPage )
			return $defPage;
		return null;
	}

	function getPageIds() {
		$this->updatePages();
		$ret = $this->getAuxTableData(".pages");
		if( !is_array( $ret ) )
			return array();
		return $ret;
	}

	function getEditPageType()
	{
		return $this->_editPage;
	}

	function isPageTypeForView($ptype)
	{
		global $pageTypesForView;
		return in_array(strtolower($ptype), $pageTypesForView);
	}

	function isPageTypeForEdit($ptype)
	{
		global $pageTypesForEdit;
		return in_array(strtolower($ptype), $pageTypesForEdit);
	}

	/**
	 * DEPRECATED
	 * Use new ProjectSettings instead
	 */
	function getTable($table, $page = "")
	{
		return new ProjectSettings($table, $page);
	}

	function getPageTypeByFieldEditFormat($field, $editFormat)
	{
		if(isset($this->_tableData[$field]) && isset($this->_tableData[$field][FORMAT_EDIT]))
		{
			foreach($this->_tableData[$field][FORMAT_EDIT] as $pageType => $editSettings)
			{
				if(isset($editSettings["EditFormat"]) && $editSettings["EditFormat"] == $editFormat)
					return $pageType;
			}
		}
		return "";
	}

	function getTableData($key)
	{
		if(!$this->isExistsTableKey($key))
			return $this->getDefaultValueByKey(substr($key,1));
		return $this->_tableData[$key];
	}

	function getAuxTableData($key)
	{
		if(!$this->isExistsAuxTableKey($key))
			return $this->getDefaultValueByKey(substr($key,1));
		return $this->_auxTableData[$key];
	}

	/**
	 * Specify path to arguments in $key1, $key2 etc
	 * Returns FALSE if not found
	 */
	function getPageOption($key1, $key2 = FALSE, $key3 = FALSE, $key4 = FALSE, $key5 = FALSE )
	{
		$this->loadPageOptions( $key1.$key2 );
		if( !isset( $this->_pageOptions[ $key1 ] ) )
			return FALSE;
		$keys = array( $key1 );
		if( $key2!== FALSE )
			$keys[]= $key2;
		if( $key3!== FALSE )
			$keys[]= $key3;
		if( $key4!== FALSE )
			$keys[]= $key4;
		if( $key5!== FALSE )
			$keys[]= $key5;

		$opt = &$this->_pageOptions;
		foreach( $keys as $k ) {
			if( !is_array( $opt ) )
				return FALSE;
			if( !isset( $opt[ $k ] ) )
				return FALSE;
			$opt = &$opt[$k];
		}
		return $opt;
	}

	/**
	 * Like getPageOption, but always returns an array
	 */
	function getPageOptionAsArray($key1, $key2 = FALSE, $key3 = FALSE, $key4 = FALSE, $key5 = FALSE ) {
		$ret =& $this->getPageOption( $key1, $key2, $key3, $key4, $key5);
		if( !$ret || !is_array( $ret ) ) {
			return array();
		}
		return $ret;
	}

	/**
	 * Specify path to arguments in $key1, $key2 etc
	 * Returns FALSE if not found
	 */
	function getPageOptionArray( $keys )
	{
		$this->loadPageOptions();
		$opt = &$this->_pageOptions;
		foreach( $keys as $k ) {
			if( !is_array( $opt ) )
				return FALSE;
			if( !isset( $opt[ $k ] ) )
				return FALSE;
			$opt = &$opt[$k];
		}
		return $opt;
	}


	private function getEffectiveEditPage( $field )
	{
		if( $this->isSeparate($field) )
		{
			return $this->_editPage;
		}
		return $this->_defaultEditPage;
	}

	private function getEffectiveViewPage( $field )
	{
		if( $this->isSeparate($field) )
		{
			if( $this->_pageMode == EDIT_INLINE && $this->_viewPage != PAGE_VIEW )
				return PAGE_LIST;
			else if ( $this->_pageMode == LIST_MASTER && $this->_viewPage == PAGE_LIST )
				return PAGE_MASTER_INFO_LIST;
			else if ( $this->_pageMode == LIST_MASTER && $this->_viewPage == PAGE_REPORT )
				return PAGE_MASTER_INFO_REPORT;
			else if ( $this->_pageMode == PRINT_MASTER && $this->_viewPage == PAGE_RPRINT )
				return PAGE_MASTER_INFO_RPRINT;
			else if ( $this->_pageMode == PRINT_MASTER )
				return PAGE_MASTER_INFO_PRINT;

			return $this->_viewPage;
		}
		return $this->_defaultViewPage;
	}
	function getFieldData( $field, $key )
	{
		global $g_settingsType;
		if( $this->getEntityType() == titDASHBOARD )
		{
			return $this->getDashFieldData( $field, $key );
		}

		if(!isset($this->_tableData[$field]))
			return $this->getDefaultValueByKey($key);

		$settingType = $g_settingsType[$key];
		if($settingType == null)
			$settingType = "";

		switch($settingType)
		{
			case SETTING_TYPE_VIEW:
				$viewPage = $this->getEffectiveViewPage( $field );

				if(isset($this->_tableData[$field][FORMAT_VIEW][$viewPage][$key]))
					return $this->_tableData[$field][FORMAT_VIEW][$viewPage][$key];
				break;
			case SETTING_TYPE_EDIT:
				$editPage = $this->getEffectiveEditPage( $field );

				if(isset($this->_tableData[$field][FORMAT_EDIT][$editPage][$key]))
					return $this->_tableData[$field][FORMAT_EDIT][$editPage][$key];
				break;
			default:
				if (isset($this->_tableData[$field][$key]))
					return $this->_tableData[$field][$key];
				break;
		}
		return $this->getDefaultValueByKey($key);
	}

	function setFieldData( $field, $key, $value )
	{
		$oldValue = $this->getFieldData( $field, $key );
		global $g_settingsType;

		$settingType = $g_settingsType[$key];
		if($settingType == null)
			$settingType = "";

		switch($settingType)
		{
			case SETTING_TYPE_VIEW:
				$viewPage = $this->getEffectiveViewPage( $field );
				$this->_tableData[$field][FORMAT_VIEW][$viewPage][$key] = $value;
				break;
			case SETTING_TYPE_EDIT:
				$editPage = $this->getEffectiveEditPage( $field );
				$this->_tableData[$field][FORMAT_EDIT][$editPage][$key] = $value;
				break;
			default:
				$this->_tableData[$field][$key] = $value;
				break;
		}
		return $oldValue;
	}

	/**
	 * getTableName
	 * Returns table name the class is created for
	 */
	function getTableName()
	{
		return $this->_table;
	}

	/**
	 * findField
	 * Returns field name in correct case if the field is found. Empty string otherwise.
	 * @param {string} field name in arbitrary case, original or GoodFieldName result
	 */

	function findField( $f )
	{
		global $field_labels, $mlang_defaultlang;
		//	check exact match
		$fields = $this->getFieldsList();
		if( array_search( $f, $fields ) !== FALSE )
			return $f;

		//	check goodfieldname
		$gTable = GoodFieldName( $this->_table );
		if( isset( $field_labels[ $mlang_defaultlang ][ $f ] ) )
			return $this->getFieldByGoodFieldName( $f );

		//	case-insensitive check
		$f = strtoupper( $f );
		foreach( $fields as $ff )
		{
			if( strtoupper( $ff ) == $f )
				return $ff;

			if( strtoupper( GoodFieldName($ff) ) == $f )
				return $ff;
		}
		return "";

	}

	/**
	 * addCustomExpressionIndex
	 * Add new index to list, for determination of custom expressions position in SQL query
	 * @param {string} table wich contain a lookup field
	 * @param {string} name of lookup field
	 * @param {int} index
	 */
	function addCustomExpressionIndex($mainTable, $mainField, $index)
	{
		if(!$this->isExistsTableKey(".customExpressionIndexes"))
			$this->_tableData[".customExpressionIndexes"] = array();
		if(!isset($this->_tableData[".customExpressionIndexes"][$mainTable]))
			$this->_tableData[".customExpressionIndexes"][$mainTable] = array();
		$this->_tableData[".customExpressionIndexes"][$mainTable][$mainField] = $index;
	}

	/**
	 * getCustomExpressionIndex
	 * Get index of custom expression in SQL field
	 * @param {string} table wich contain a lookup field
	 * @param {string} name of lookup field
	 */
	function getCustomExpressionIndex($mainTable, $mainField)
	{
		if(!$this->isExistsTableKey(".customExpressionIndexes"))
			$this->_tableData[".customExpressionIndexes"] = array();
		if(isset($this->_tableData[".customExpressionIndexes"][$mainTable])
			&& isset($this->_tableData[".customExpressionIndexes"][$mainTable][$mainField]))
			return $this->_tableData[".customExpressionIndexes"][$mainTable][$mainField];

		return FALSE;
	}

	function isExistsTableKey($key)
	{
		if(!isset($this->_tableData[$key]))
			return false;
		return true;
	}

	function isExistsAuxTableKey($key)
	{
		if(!isset($this->_auxTableData[$key]))
			return false;
		return true;
	}

	function isExistsFieldKey($field, $key)
	{
		if(!$this->isExistsTableKey($field))
			return false;
		if(!isset($this->_tableData[$field][$key]))
			return false;
		return true;
	}

	function getDefaultValueByKey($key)
	{
		global $g_defaultOptionValues;
		if(isset($g_defaultOptionValues[$key]))
			return $g_defaultOptionValues[$key];
		return false;
	}

	/**
	 * Returns array of master tables , which are master for current detail table
	 * @return array if success otherwise false
	 */
	function getMasterTablesArr()
	{
		return $this->_mastersTableData;
	}

	/**
	 * Returns array of master keys for passed detailTable
	 *
	 * @param string $dTableName - it's detail data sourse table name,
	 * @return array if success otherwise false
	 */
	function getMasterKeysByDetailTable($dTableName, $default = array())
	{
		if(!$dTableName)
			return $default;
		foreach ($this->_detailsTableData as $dTableDataArr)
		{
			if ($dTableDataArr['dDataSourceTable'] == $dTableName)
				return $dTableDataArr['masterKeys'];
		}
		return $default;
	}

	/**
	 * Returns array of detail tables , which are detail for current master table
	 * @param string $tName - it's data source master table name
	 * @return array if success otherwise false
	 */
	function getDetailTablesArr()
	{
		if( !is_array( $this->_detailsTableData ) )
			return array();
		return $this->_detailsTableData;
	}

	/**
	 * Returns array of detail keys for passed masterTable
	 *
	 * @param string $mTableName - it's master table name,
	 * @param array $default
	 * @return array if success otherwise default value
	 */
	function getDetailKeysByMasterTable($mTableName = "", $default = array())
	{
		if(!$mTableName)
			return $default;
		foreach($this->_mastersTableData as $mTableDataArr)
		{
			if ($mTableDataArr['mDataSourceTable'] == $mTableName)
				return $mTableDataArr['detailKeys'];
		}
		return $default;
	}

	/**
	 * Returns array of detail keys for passed detailTable
	 *
	 * @param string $dTableName - It's detail data sourse table name
	 * @param string $tName - current(master) table name
	 * @return array if success otherwise false
	 */
	function getDetailKeysByDetailTable($dTableName, $default = array())
	{
		foreach ($this->_detailsTableData as $dTableDataArr)
		{
			if ($dTableDataArr['dDataSourceTable'] == $dTableName)
				return $dTableDataArr['detailKeys'];
		}
		return $default;
	}

	/**
	 * Returns details preview Type
	 *
	 * @param string $dTableName - it's detail data sourse table name,
	 * @param string $tName - current(master) table name
	 * @return array if success otherwise false
	 */
	function getDPType($dTableName)
	{
		if(!$dTableName)
			return false;
		foreach ($this->_detailsTableData as $dTableDataArr)
		{
			if ($dTableDataArr['dDataSourceTable'] == $dTableName)
				return $dTableDataArr['previewOnList'];
		}
		return false;
	}

	function GetFieldByIndex($index)
	{
		foreach($this->_tableData as $key => $value)
		{
			if(!is_array($value))
				continue;
			elseif(!isset($value["Index"]))
				continue;
			if($value["Index"] == $index && $this->getFieldIndex($key))
				return $key;
		}
		return null;
	}

	//	Is field has separate type for editing and viewing
	function isSeparate($field)
	{
		return !!$this->_tableData[$field]["isSeparate"];
	}

	// return field label
	function label($field)
	{
		$result = GetFieldLabel( GoodFieldName($this->_table), GoodFieldName($field) );
		return $result != "" ? $result : $field;
	}

	//	return filename field if any
	//	viewFormat setting
	function getFilenameField($field)
	{
		return $this->getFieldData($field, "Filename");
	}

	//	return hyperlink prefix
	//	viewFormat setting
	function getLinkPrefix($field)
	{
		return $this->getFieldData($field, "LinkPrefix");
	}

	/**
	 * Get hyperlink type
	 */
	function getLinkType($field)
	{
		return $this->getFieldData($field, "hlType");
	}

	/**
	 * Get hyperlink display field for title
	 * @return string field name
	 */
	function getLinkDisplayField($field)
	{
		return $this->getFieldData($field, "hlTitleField");
	}

	function openLinkInNewWindow($field)
	{
		return $this->getFieldData($field, "hlNewWindow");
	}

	function getLinkWordNameType($field)
	{
		return $this->getFieldData($field, "hlLinkWordNameType");
	}

	function getLinkWordText($field)
	{
		return $this->getFieldData($field, "hlLinkWordText");
	}

	//	return database field type
	//	using ADO DataTypeEnum constants
	//	the full list available at:
	//	http://msdn.microsoft.com/library/default.asp?url=/library/en-us/ado270/htm/mdcstdatatypeenum.asp
	function getFieldType($field)
	{
		return $this->getFieldData($field, "FieldType");
	}

	function getFieldDateFormat($field)
	{
		return $this->getFieldData($field, "dateFormat");
	}

	function isAutoincField($field)
	{
		return $this->getFieldData($field, "AutoInc");
	}

	function getDefaultValue($field, $table = "")
	{
		$tableName = $table ? $table : $this->_table;
		$editPage = $this->_editPage;
		if(!$this->isSeparate($field))
			return;
		return GetDefaultValue($field, $editPage, $tableName);
	}

	function isAutoUpdatable($field)
	{
		return $this->getFieldData($field, "autoUpdatable");
	}

	function getAutoUpdateValue($field)
	{
		$editPage = $this->_editPage;
		if(!$this->isSeparate($field))
			$editPage = $this->getDefaultEditPageType($this->getTableType());;
		return GetAutoUpdateValue($field, $editPage, $this->_table);
	}

	//	return Edit format
	//	editFormats
	function getEditFormat($field)
	{
		return $this->getFieldData($field, "EditFormat");
	}

	//	return View format
	//	viewFormat setting
	function getViewFormat($field)
	{
		return $this->getFieldData($field, "ViewFormat");
	}

	//	show time in datepicker or not
	function dateEditShowTime($field)
	{
		return $this->getFieldData($field, "ShowTime");
	}

	function lookupControlType($field)
	{
		return $this->getFieldData($field, "LCType");
	}

	function lookupListPageId($field)
	{
		return $this->getFieldData($field, "listPageId");
	}
	function lookupAddPageId($field)
	{
		return $this->getFieldData($field, "addPageId");
	}

	function isDeleteAssociatedFile($field)
	{
		return $this->getFieldData($field, "DeleteAssociatedFile");
	}

	//	is Lookup wizard dependent or not
	function useCategory($field)
	{
		return $this->getFieldData($field, "UseCategory");
	}

	//	is Lookup wizard with multiple selection
	function multiSelect($field)
	{
		return $this->getFieldData($field, "Multiselect");
	}

	/**
	 * Returns list of fields in the table that use cloud storage providers
	 * Only OAuth providers are checked here
	 * GoogleDrive, OneDrive, Dropbox
	 * @return Array of string
	 */
	function getOAuthCloudFields() {
		if( !GetGlobalData( "GoogleDriveClientID" )
			&& !GetGlobalData( "OneDriveClientID" )
			&& !GetGlobalData( "DropboxClientID" )
		) {
			//	nothing to check
			return array();
		}
		$fields = array();
		foreach( $this->getFieldsList() as $field ) {
			$stp = $this->fileStorageProvider( $field );
			if( $stp === stpGOOGLEDRIVE
				|| $stp === stpDROPBOX
				|| $stp === stpONEDRIVE ) {

				$fields[] = $field;
			}
		}
		return $fields;
	}

	/**
	 * When a field is edited as single-select lookup wizard
	 * Use case:
	 * if( $pSet->multiSelect() && $pSet->singleSelectLookupEdit() )
	 * multiselect on search, single-select on add/edit.
	 * In that specific case multiple selected search values
	 * should be interpreted as:
	 * field=value1 or field=value2 or etc
	 *
	 */
	function singleSelectLookupEdit( $field )
	{
		$hasLookup = false;
		foreach( $this->_tableData[$field][FORMAT_EDIT] as $pageType => $editFormat ) {
			if( $pageType != "edit" && $pageType != "add" )
				continue;
			if( $editFormat["EditFormat"] != EDIT_FORMAT_LOOKUP_WIZARD )
				continue;
			$hasLookup = true;
			if( $editFormat["Multiselect"] )
				return false;
		}
		return $hasLookup;
	}

	/**
	 * Check whether the field is a true multiselect lookup.
	 * True multiselect has this option on Add or Edit page, not only on Search.
	*/
	function multiSelectLookupEdit( $field )
	{
		foreach( $this->_tableData[$field][FORMAT_EDIT] as $pageType => $editFormat ) {
			if( $pageType != "edit" && $pageType != "add" )
				continue;
			if( $editFormat["EditFormat"] != EDIT_FORMAT_LOOKUP_WIZARD )
				continue;
			if( $editFormat["Multiselect"] )
				return true;
		}
		return false;
	}

	/**
	 * Check whether the field is a lookup wizard with Link Field != Display field.
	*/
	function lookupField( $field )
	{
		foreach( $this->_tableData[$field][FORMAT_EDIT] as $pageType => $editFormat ) {
			if( $editFormat["EditFormat"] != EDIT_FORMAT_LOOKUP_WIZARD )
				continue;
			if( $editFormat["LinkField"] != $editFormat["DisplayField"] )
				return true;
		}
		return false;
	}


	// Lookup wizard select size
	function selectSize($field)
	{
		return $this->getFieldData($field, "SelectSize");
	}

	function showThumbnail($field)
	{
		return $this->getFieldData($field, "ShowThumbnail");
	}

	function isImageURL($field)
	{
		return $this->getFieldData($field, "fieldIsImageUrl");
	}

	function showCustomExpr($field)
	{
		return $this->getFieldData($field, "ShowCustomExpr");
	}

	function showFileSize($field)
	{
		return $this->getFieldData($field, "ShowFileSize");
	}

	function displayPDF($field)
	{
		return $this->getFieldData($field, "DisplayPDF");
	}

	function showIcon($field)
	{
		return $this->getFieldData($field, "ShowIcon");
	}

	function getImageWidth($field)
	{
		return $this->getFieldData($field, "ImageWidth");
	}

	function getImageHeight($field)
	{
		return $this->getFieldData($field, "ImageHeight");
	}

	function getThumbnailWidth($field)
	{
		return $this->getFieldData($field, "ThumbWidth");
	}

	function getThumbnailHeight($field)
	{
		return $this->getFieldData($field, "ThumbHeight");
	}

	// Get nLookupType for current field
	function getLookupType($field)
	{
		return $this->getFieldData($field, "LookupType");
	}

	//Get lookup table name
	function getLookupTable($field)
	{
		return $this->getFieldData($field, "LookupTable");
	}

	/**
	 *	Returns true if Lookup Where clause is specified as PHP code expression
	 *	@return Boolean
	 */
	function isLookupWhereCode($field)
	{
		return $this->getFieldData($field, "LookupWhereCode");
	}

	function isLookupWhereSet($field)
	{
		if( $this->isLookupWhereCode( $field ) )
			return true;
		return 0 != strlen( $this->getFieldData($field, "LookupWhere") );
	}


	function getLookupWhere($field)
	{
		if( $this->isLookupWhereCode( $field )) {
			$tName = $this->_table;
			if( $this->getEntityType() == titDASHBOARD )
			{
				$dashSearchFields = $this->getDashboardSearchFields();
				if( isset($dashSearchFields[$field]) ) {
					$tName = $dashSearchFields[$field][0]["table"];
					$field = $dashSearchFields[$field][0]["field"];
				}
			}

			return GetLWWhere( $field, $this->getEffectiveEditPage( $field ), $tName );
		}

		return $this->getFieldData($field, "LookupWhere");
	}



	function getNotProjectLookupTableConnId($field)
	{
		return $this->getFieldData($field, "LookupConnId");
	}

	function getConnId()
	{
		$connId = $this->getTableData( ".connId" );
		if( $connId == "" ) {
			return "dbct_at_localhost";
		}
		return $connId;
	}

	function getLinkField($field)
	{
		return $this->getFieldData($field, "LinkField");
	}

	function getLWLinkFieldType($field)
	{
		return $this->getFieldData($field, "LinkFieldType");
	}

	function getDisplayField($field)
	{
		return $this->getFieldData($field, "DisplayField");
	}

	function getCustomDisplay($field)
	{
		return $this->getFieldData($field, 'CustomDisplay');
	}

	//	viewFormats
	function NeedEncode($field)
	{
		return $this->getFieldData($field, "NeedEncode");
	}

	/**
	 * Get array of validation for control
	 * return array - of validations
	 */
	function getValidation($field)
	{
		return $this->getFieldData($field, "validateAs");
	}


	/**
	 * Returns array of items for a given field
	 */
	function getFieldItems( $field )
	{
		return $this->getPageOption( "fields", "fieldItems", $field );
	}

	/**
	 * Returns array of group fields
	 */
	function getGroupFields()
	{
		return $this->getPageOption( "dataGrid", "groupFields");
	}

	/**
	 * Check is appear current field on list page
	 * return boolean - true or false
	 */
	function appearOnListPage($field)
	{
		if( array_search( $field, $this->getPageOption("fields", "gridFields") ) !== FALSE )
			return true;
		if( isReport( $this->getEntityType() ) ) {
			return array_search( $field, $this->getReportGroupFields() ) !== FALSE;
		}
		return false;
	}

	/**
	 * Check is appear current field on add page
	 * return boolean - true or false
	 */
	function appearOnAddPage($field)
	{
		return $this->appearOnPage( $field );
	}

	/**
	 * Check is appear current field on inline add
	 * return boolean
	 */
	function appearOnInlineAdd($field)
	{
		$fields =& $this->getInlineAddFields();
		if( !$fields ) {
			return false;
		}
		return array_search( $field, $fields ) !== FALSE;
	}

	/**
	 * Check is appear current field on edit page
	 * return boolean - true or false
	 */
	function appearOnEditPage($field)
	{
		return $this->appearOnPage( $field );
	}

	/**
	 * Check is appear current field on edit page
	 * return boolean - true or false
	 */
	function appearOnInlineEdit($field)
	{
		$inlineFields =& $this->getInlineEditFields();
		if( !$inlineFields ) {
			return false;
		}
		return array_search( $field, $inlineFields ) !== FALSE;
		//return $this->getFieldData($field, "bInlineEdit");
	}

	/**
	 * Check is appear current field on edit page
	 * return boolean - true or false
	 */
	function appearOnUpdateSelected($field)
	{
		$updateOnEditFields = $this->getPageOption("fields", "updateOnEditFields");
		if( !$updateOnEditFields )
			return false;

		return array_search( $field, $this->getPageOption("fields", "updateOnEditFields") ) !== FALSE;
		//return $this->getFieldData($field, "bUpdateSelected");
	}

	function appearOnPage($field)
	{
		$gridFields = &$this->getPageOption("fields", "gridFields");
		if( !$gridFields )
			$ret = false;
		else
			$ret = ( array_search( $field, $gridFields ) !== FALSE );
		if( !$ret ) {
			if( $this->getPageType() === 'report' || $this->getPageType() === 'rprint' )
				return array_search( $field, $this->getReportGroupFields() ) !== false;
		}
		return $ret;
	}

	function appearOnSearchPanel($field)
	{
		$fields = &$this->getPageOption("fields", "searchPanelFields");
		if( !$fields )
			return false;

		return array_search( $field, $fields ) !== FALSE;
	}


	function appearAlwaysOnSearchPanel( $field ) {
		$fields  = &$this->getPageOption("listSearch", "alwaysOnPanelFields");
		if( !$fields )
			return false;

		return array_search( $field, $fields ) !== FALSE;

	}

	function getPageFields()
	{
		$fields = $this->getPageOptionAsArray("fields", "gridFields" );
		if( isReport( $this->getEntityType() ) ) {
			return array_merge( $fields, $this->getReportGroupFields() );
		}
		return $fields;
	}

	/**
	 * Check is appear current field on view page
	 * return boolean - true or false
	 */
	function appearOnViewPage($field)
	{
		return $this->appearOnPage( $field );
	}

	/**
	 * Check is appear current field on print page
	 * return boolean - true or false
	 */
	function appearOnPrinterPage($field)
	{
		return $this->appearOnListPage($field);
	}

	function isVideoUrlField($field)
	{
		return $this->getFieldData($field, "fieldIsVideoUrl");
	}

	function isAbsolute($field)
	{
		return $this->getFieldData($field, "Absolute");
	}

	function getAudioTitleField($field)
	{
		return $this->getFieldData($field, "audioTitleField");
	}

	function getVideoWidth($field)
	{
		return $this->getFieldData($field, "videoWidth");
	}

	function getVideoHeight($field)
	{
		return $this->getFieldData($field, "videoHeight");
	}

	function isRewindEnabled($field)
	{
		return $this->getFieldData($field, "RewindEnabled");
	}

	/**
	 * @param String field
	 * @return Array
	 */
	function getParentFieldsData( $field )
	{
		return $this->getFieldData($field, "categoryFields");
	}

	/**
	 * @param String field
	 * @return Array
	 */
	function getLookupParentFNames( $field )
	{
		$fNames = array();
		foreach( $this->getParentFieldsData( $field ) as $data )
		{
			$fNames[] = $data["main"];
		}
		return $fNames;
	}

	function isLookupUnique($field)
	{
		return $this->getFieldData($field, "LookupUnique");
	}

	function getLookupOrderBy($field)
	{
		return $this->getFieldData($field, "LookupOrderBy");
	}

	function isLookupDesc($field)
	{
		return $this->getFieldData($field, "LookupDesc");
	}

	function getOwnerTable($field)
	{
		return $this->getFieldData($field, "ownerTable");
	}

	function isFieldEncrypted($field)
	{
		return $this->getFieldData($field, "bIsEncrypted");
	}

	function isAllowToAdd($field)
	{
		return $this->getFieldData($field, "AllowToAdd");
	}

	function isSimpleAdd($field)
	{
		return $this->getFieldData($field, "SimpleAdd");
	}

	/**
	 * Get the array containing the autocomplete fields data
	 * basing on page's type and lookup wizard settings
	 * @param String field
	 * @return Array
	 */
	function getAutoCompleteFields($field)
	{
		$editPageType = $this->getEditPageType();

		if( $editPageType == PAGE_REGISTER || $editPageType == PAGE_ADD || $editPageType == PAGE_EDIT && ( $this->isSeparate($field) || $this->isAutoCompleteFieldsOnEdit($field) ) )
		{
			return $this->getFieldData($field, "autoCompleteFields");
		}

		return $this->getDefaultValueByKey("autoCompleteFields");
	}

	function isAutoCompleteFieldsOnEdit($field)
	{
		return $this->getFieldData($field, "autoCompleteFieldsOnEdit");
	}

	function isFreeInput($field)
	{
		return $this->getFieldData($field, "freeInput");
	}

	function getMapData($field)
	{
		return $this->getFieldData($field, "mapData");
	}

	function getFormatTimeAttrs($field)
	{
		return $this->getFieldData($field, "FormatTimeAttrs");
	}

	function getViewAsTimeFormatData( $field ) {
		return $this->getFieldData( $field, "timeFormatData" );
	}

	function showDaysInTimeTotals( $field ) {
		$formatData = $this->getViewAsTimeFormatData( $field );
		return $formatData ? $formatData["showDaysInTotals"] : false;
	}

	/**
	 * Check is appear current field on export page
	 * return boolean - true or false
	 */
	function appearOnExportPage($field)
	{
		return $this->appearOnpage($field);
	}

	/**
	 * Return original table name for report or chart
	 */
	function getStrOriginalTableName()
	{
		return $this->getTableData(".strOriginalTableName");
	}

	function getSearchableFields()
	{
		if( $this->getEntityType() == titDASHBOARD ) {
			return $this->getPageOption( 'dashSearch', 'allSearchFields');
		}
		return $this->getTableData(".searchableFields");
	}

	function getAllSearchFields()
	{
		return $this->getEntityType() == titDASHBOARD
			? $this->getPageOptionAsArray("dashSearch", "allSearchFields")
			: $this->getPageOptionAsArray("fields", "searchPanelFields");
	}

	function getAdvSearchFields()
	{
		return $this->getPageOptionAsArray("fields", "gridFields");
	}

	function isUseTimeForSearch()
	{
		return $this->getTableData(".isUseTimeForSearch");
	}

	/**
	 * @deprecated
	 */
	function isUseToolTips()
	{
		return $this->getTableData(".isUseToolTips");
	}

	function isUseVideo()
	{
		return $this->getTableData(".isUseVideo");
	}

	function isUseAudio()
	{
		return $this->getTableData(".isUseAudio");
	}

	function isUseAudioOnDetails()
	{
		for($i = 0; $i < count($this->_detailsTableData); $i++)
		{
			if($this->_detailsTableData[$i]["isUseAudio"])
				return true;
		}
		return false;
	}

	function getTableType()
	{
		return $this->getTableData(".tableType");
	}

	function getShortTableName()
	{
		return GetTableURL( $this->_table );
	}

	function isShowAddInPopup()
	{
		return $this->getPageOption("list", "addInPopup");
	}

	function isShowEditInPopup()
	{
		return $this->getPageOption("list", "editInPopup");
	}

	function isShowViewInPopup()
	{
		return $this->getPageOption("list", "viewInPopup");
	}

	function isResizeColumns()
	{
		return $this->getTableData(".isResizeColumns");
	}

	function isUseAjaxSuggest()
	{
		return $this->getTableData(".isUseAjaxSuggest");
	}

/*
	function getDetailsLinksOnList()
	{
		return $this->getTableData(".detailsLinksOnList");
	}
*/

	function getAllPageFields()
	{
		return array_merge( $this->getPageFields(), $this->getAllSearchFields() );
	}

	function getPanelSearchFields()
	{
		return $this->getPageOptionAsArray("listSearch", "alwaysOnPanelFields");
	}

	function getSearchPanelOptions()
	{
		return $this->GetTableData(".searchPanelOptions");
	}

	function getGoogleLikeFields()
	{
		if( $this->getEntityType() == titDASHBOARD )
		{
			return $this->getPageOptionAsArray( 'dashSearch', 'googleLikeFields');
		}
		return $this->getTableData(".googleLikeFields");

	}

	function getInlineEditFields()
	{
		return $this->getPageOptionAsArray("fields", "inlineEditFields");
	}

	function getUpdateSelectedFields()
	{
		return $this->getPageOptionAsArray("fields", "updateOnEditFields");
	}

	function getExportFields()
	{
		return $this->getPageOptionAsArray("fields", "exportFields");
	}

	function getImportFields()
	{
		return $this->getPageOptionAsArray("fields", "gridFields");
	}

	function getEditFields()
	{
		return $this->getPageOptionAsArray("fields", "gridFields" );
	}

	function getInlineAddFields()
	{
		return $this->getPageOptionAsArray("fields", "inlineAddFields");
	}

	function getAddFields()
	{
		return $this->getPageOptionAsArray("fields", "gridFields" );
	}

	function getMasterListFields()
	{
		return $this->getPageOptionAsArray("fields", "gridFields" );
	}

	function getViewFields()
	{
		return $this->getPageOptionAsArray("fields", "gridFields" );
	}

	function getFieldFilterFields()
	{
		$ret = array();
		foreach( $this->getPageOptionAsArray("fields", "fieldFilterFields" ) as $f ) {
			if( !IsBinaryType( $this->getFieldType( $f ) ) ) {
				$ret[] = $f;
			}
		}
		return $ret;
	}

	function getPrinterFields()
	{
		return $this->getPageFields();
	}

	function getListFields()
	{
		$fields = $this->getPageOptionAsArray("fields", "gridFields" );
		if( isReport( $this->getEntityType() ) ) {
			return array_merge( $fields, $this->getReportGroupFields() );
		}
		return $fields;
	}

	function isAddPageEvents()
	{
		return $this->getAuxTableData(".addPageEvents");
	}

	function hasAjaxSnippet()
	{
		return $this->getTableData(".ajaxCodeSnippetAdded");
	}

	function hasButtonsAdded()
	{
		return $this->getPageOption("page", "hasCustomButtons");
	}

	function customButtons()
	{
		return $this->getPageOptionAsArray("page", "customButtons");
	}

	function isUseFieldsMaps()
	{
		return $this->getTableData(".isUseFieldsMaps");
	}

	function getOrderIndexes()
	{
		return $this->getTableData(".orderindexes");
	}

	function getStrOrderBy()
	{
		return $this->getTableData(".strOrderBy");
	}

	function getSQLQuery()
	{
		$query = $this->getTableData(".sqlquery");
		if($query != null)
		{
			return $query;
		}
		return null;
	}
	/* Dashboard-safe version of getSQLQuery
	*/
	function getSQLQueryByField( $field )
	{
		if( $this->getTableType() == PAGE_DASHBOARD )
		{
			$query = $this->getDashTableData($field, ".sqlquery");
			if($query != null)
			{
				return $query;
			}
			return null;

		}
		else
		{
			$query = $this->getTableData(".sqlquery");
			if($query != null)
			{
				return $query;
			}
			return null;
		}

	}

	/**
	 * Create Thumbnail or not
	 */
	function getCreateThumbnail($field)
	{
		return $this->getFieldData($field, "CreateThumbnail");
	}

	/**
	 * Return Thumbnail prefix
	 */
	function getStrThumbnail($field)
	{
		return $this->getFieldData($field, "StrThumbnail");
	}

	/**
	 * Return Thumbnail prefix
	 */
	function getThumbnailSize($field)
	{
		return $this->getFieldData($field, "ThumbnailSize");
	}

	/**
	 * Resize on upload
	 */
	function getResizeOnUpload($field)
	{
		return $this->getFieldData($field, "ResizeImage");
	}

	/**
	 * True if FileField must work in old single-file mode
	 */
	function isBasicUploadUsed($field)
	{
		return $this->getFieldData($field, "CompatibilityMode");
	}

	/**
	 * True if file in FileField must be uploaded immediately after choosing or dropping
	 */
	function isAutoUpload($field)
	{
		return $this->getFieldData($field, "autoUpload");
	}

	/**
	 * Get size to reduce image after upload
	 */
	function getNewImageSize($field)
	{
		return $this->getFieldData($field, "NewSize");
	}

	function getAcceptFileTypes($field)
	{
		return $this->getFieldData($field, "acceptFileTypes");
	}

	function getAcceptFileTypesHtml($field)
	{
		return $this->getFieldData($field, "acceptFileTypesHtml");
	}

	/**
	 * Get maximum allowed size for uploaded files
	 */
	function getMaxFileSize($field)
	{
		return $this->getFieldData($field, "maxFileSize");
	}

	/**
	 * Get maximum allowed size for all uploaded files per field
	 */
	function getMaxTotalFilesSize($field)
	{
		return $this->getFieldData($field, "maxTotalFilesSize");
	}

	/**
	 * Get maximum allowed number of uploaded files
	 */
	function getMaxNumberOfFiles($field)
	{
		return $this->getFieldData($field, "maxNumberOfFiles");
	}

	/**
	 * Get maximum allowed width of uploaded image
	 */
	function getMaxImageWidth($field)
	{
		return $this->getFieldData($field, "maxImageWidth");
	}

	/**
	 * Get maximum allowed heiht of uploaded image
	 */
	function getMaxImageHeight($field)
	{
		return $this->getFieldData($field, "maxImageHeight");
	}

	/**
	 * Get size to reduce image after upload
	 */
	function getStrFilename($field)
	{
		return $this->getFieldData($field, "strFilename");
	}

	/**
	 * Return height of text area
	 * EditFormat setting
	 */
	function getNRows($field)
	{
		return $this->getFieldData($field, "nRows");
	}

	/**
	 * Return width of text area
	 * EditFormat setting
	 */
	function getNCols($field)
	{
		return $this->getFieldData($field, "nCols");
	}

	/**
	 * Return original table name
	 */
	function getOriginalTableName()
	{
		$result = $this->getTableData(".OriginalTable");
		return $result != "" ? $result : $this->_table;
	}

	/**
	 * Return list of key fields
	 */
	function getTableKeys()
	{
		return $this->getTableData(".Keys");
	}

	function isLargeTextTruncationSet($field)
	{
		return $this->getFieldData($field, "truncateText");
	}

	/**
	 * Return number of chars to show before "More..." link
	 */
	function getNumberOfChars($field)
	{
		return $this->getFieldData($field, "NumberOfChars");
	}

	/**
	 * Check if the field is an sql expression
	 */
	function isSQLExpression($field)
	{
		return $this->getFieldData($field, "isSQLExpression");
	}

	/**
	 * Get full field name
	 */
	function getFullFieldName($field)
	{
		return $this->getFieldData($field, "FullName");
	}

	/**
	 * set full field name
	 */
	function setFullFieldName($field, $value)
	{
		return $this->setFieldData($field, "FullName", $value);
	}


	/**
	 * Return table Owner ID field
	 */
	function getTableOwnerID()
	{
		return $this->getTableData(".OwnerID");
	}

	/**
	 * Is field marked as required
	 * EditFormat setting
	 */
	function isRequired($field)
	{
		return $this->getFieldData($field, "IsRequired");
	}

	function insertNull($field)
	{
		return $this->getFieldData($field, "insertNull");
	}

	/**
	 * IS use Rich Text Editor or not
	 */
	function isUseRTE($field)
	{
		return $this->getFieldData($field, "UseRTE");
	}

	/**
	 * Is use Rich Text Editor BASIC or not
	 */
	function isUseRTEBasic($field)
	{
		global $isUseRTEBasic;
		return $this->isUseRTE($field) && $isUseRTEBasic;
	}

	/**
	 * Is use Rich Text Editor FCK or not
	 */
	function isUseRTEFCK($field)
	{
		global $isUseRTECK;
		return $this->isUseRTE($field) && $isUseRTECK;
	}

	/**
	 * check if RTE CKEditor version 5 is used in project
	 */
	function isUseRTECKNew($field)
	{
		global $isUseRTECKNew;
		return $this->isUseRTE($field) && $isUseRTECKNew;
	}

	/**
	 * Is use Rich Text Editor INNOVA or not
	 */
	function isUseRTEInnova($field)
	{
		global $isUseRTEInnova;
		return $this->isUseRTE($field) && $isUseRTEInnova;
	}

	/**
	 * Add timestamp to filename when files uploading or not
	 * EditFormat setting
	 */
	function isUseTimestamp($field)
	{
		return $this->getFieldData($field, "UseTimestamp");
	}

	function getFieldIndex($field)
	{
		return $this->getFieldData($field, "Index");
	}

	function getEntityType()
	{
		return $this->getTableData(".entityType");
	}


	/**
	 * Return Date field edit type
	 */
	function getDateEditType($field)
	{
		return $this->getFieldData($field, "DateEditType");
	}

	function getHTML5InputType($field)
	{
		return $this->getFieldData($field, "HTML5InuptType");
	}

	/**
	 * Return text edit parameters
	 */
	function getEditParams($field)
	{
		return $this->getFieldData($field, "EditParams");
	}


	function getControlWidth($field)
	{
		return $this->getFieldData($field, "controlWidth");
	}

	/**
	 * Check whether field is viewable
	 */
	function checkFieldPermissions($field)
	{
		return $this->appearOnPage( $field );
	}

	function getTableOwnerIdField()
	{
		return $this->getTableData(".mainTableOwnerID");
	}

	function isHorizontalLookup($field)
	{
		return $this->getFieldData($field, "HorizontalLookup");
	}

	function isDecimalDigits($field)
	{
		return $this->getFieldData($field, "DecimalDigits");
	}

	function getLookupValues($field)
	{
		return $this->getFieldData($field, "LookupValues");
	}

	function hasEditPage()
	{
		return !!$this->getDefaultPage( "edit" );
	}

	function hasAddPage()
	{
		return !!$this->getDefaultPage( "add" );
	}

	function hasListPage()
	{
		return !!$this->getDefaultPage( "list" );
	}

	function hasImportPage()
	{
		return !!$this->getDefaultPage( "import" );
	}

	function hasInlineEdit()
	{
		return $this->getPageOption("list", "inlineEdit");
	}

	function hasUpdateSelected()
	{
		return $this->getPageOption("list", "updateSelected");
	}

	function updateSelectedButtons()
	{
		$data = $this->labeledButtons();
		return $data['update_records'];
	}

	function activatonMessages()
	{
		$data = $this->labeledButtons();
		if( !is_array( $data['register_activate_message'] ) )
			return array();
		return $data['register_activate_message'];
	}

	function labeledButtons()
	{
		return $this->getPageOptionAsArray("page", "labeledButtons");
	}

	function printPagesLabelsData()
	{
		$data = $this->labeledButtons();
		return $data['print_pages'];
	}

	function hasSortByDropdown()
	{
		return $this->getPageOption("list", "sortDropdown");
	}

	function getSortControlSettingsJSONString()
	{
		return $this->getTableData(".strSortControlSettingsJSON");
	}
	function getClickActionJSONString()
	{
		return $this->getTableData(".strClickActionJSON");
	}

	function hasCopyPage()
	{
		return true;
		//return $this->getPageOption("pageLinks", "copy");
	}
	function hasViewPage()
	{
		return !!$this->getDefaultPage("view");
	}
	function hasExportPage()
	{
		return !!$this->getDefaultPage("export");
	}
	function hasPrintPage()
	{
		return !!$this->getDefaultPage("print") || !!$this->getDefaultPage("rprint");
	}
	function hasDelete()
	{
		return $this->getPageOption("list", "delete");
	}
	function getTotalsFields()
	{
		$ret = array();
		foreach( $this->getPageOptionAsArray('totals') as $field => $totals ) {
			if( $totals /* ?? */ && $totals["totalsType"] ) {
				$ret[] = array(
					"fName" => $field,
					"numRows" => 0,
					"totalsType" => $totals["totalsType"],
					"viewFormat" => $this->getViewFormat( $field )

				);
			}
		}
		return $ret;
	}

	function calcTotalsFor() {
		return $this->getPageOption("page", "calcTotalsFor");
	}

	function getExportTxtFormattingType()
	{
		return $this->getPageOption("export","format");
	}

	function getExportDelimiter()
	{
		return $this->getPageOption("export","delimiter");
	}

	function chekcExportDelimiterSelection()
	{
		return $this->getPageOption("export","selectDelimiter");
	}

	function checkExportFieldsSelection()
	{
		return $this->getPageOption("export","selectFields");
	}

	function exportFileTypes()
	{
		return $this->getPageOption("export", "exportFileTypes");
	}

	function getLoginFormType()
	{
		return $this->getPageOption("loginForm", "loginForm");
	}

	function getAdvancedSecurityType()
	{
		if( !Security::advancedSecurityAvailable() )
			return ADVSECURITY_ALL;
		return $this->getTableData(".nSecOptions");
	}
	function displayLoading()
	{
		return $this->getTableData(".isDisplayLoading");
	}
	function getRecordsPerPageArray()
	{
		return $this->getTableData(".arrRecsPerPage");
	}
	function getGroupsPerPageArray()
	{
		return $this->getTableData(".arrGroupsPerPage");
	}

	function isReportWithGroups()
	{
		return !!$this->getPageOption("newreport", "reportInfo", "groupFields" );
		//return $this->getTableData(".reportGroupFields");
	}

	function isCrossTabReport()
	{
		return $this->getPageOption("newreport", "reportInfo", "crosstab" );
		//return $this->getTableData(".crossTabReport");
	}

	function getReportGroupFields()
	{
		$ret = array();
		foreach( $this->getPageOptionAsArray("newreport", "reportInfo", "groupFields" ) as $g ) {
			$ret[] = $g["field"];
		}
		return $ret;
	}

	function getReportGroupFieldsData()
	{
		$ret = array();
		foreach( $this->getPageOptionAsArray("newreport", "reportInfo", "groupFields" ) as $idx => $g ) {
			$gdata = array();
			$gdata["strGroupField"] = $g["field"];
			$gdata["groupInterval"] = $g["interval"];
			$gdata["groupOrder"] = $idx + 1;
			$gdata["showGroupSummary"] = $g["summary"];
			$gdata["crossTabAxis"] = $g["axis"];
			$ret[] = $gdata;
		}
		return $ret;
//		return $this->getTableData(".reportGroupFieldsData");
	}

	function reportHasHorizontalSummary()
	{
		return $this->getPageOption("newreport", "reportInfo", "horizSummary" );
	}

	function reportHasVerticalSummary()
	{
		return $this->getPageOption("newreport", "reportInfo", "vertSummary" );
	}

	function reportHasPageSummary()
	{
		return $this->getPageOption("newreport", "reportInfo", "pageSummary" );
	}

	function reportHasGlobalSummary()
	{
		return $this->getPageOption("newreport", "reportInfo", "globalSummary" );
	}

	function getReportLayout()
	{
		//return  $this->getTableData(".reportLayout");
		$rLayout =  $this->getPageOption("newreport", "reportInfo", "layout" );
		if( $rLayout === 'stepped' ) {
			return REPORT_STEPPED;
		}
		else if( $rLayout === 'align' ) {
			return REPORT_ALIGN;
		}
		else if( $rLayout === 'outline' ) {
			return REPORT_OUTLINE;
		}
		else if( $rLayout === 'block' ) {
			return REPORT_BLOCK;
		} else {
			return REPORT_TABULAR;
		}
	}

	function isGroupSummaryCountShown()
	{
		foreach( $this->getPageOptionAsArray("newreport", "reportInfo", "groupFields" ) as $g ) {
			if( $g["summary"] ) {
				return true;
			}
		}
		return false;
	}

	function reportDetailsShown()
	{
		return $this->getPageOption("newreport", "reportInfo", "showData" );
	}

	function reportTotalFieldsExist()
	{
		foreach( $this->getPageOptionAsArray("newreport", "reportInfo", "fields" ) as $f ) {
			if( $f["sum"] || $f["min"] || $f["max"] || $f["avg"] ) {
				return true;
			}
		}
		return false;
	}

	/**
	 * boolean
	 * True if the field has 'max' total in report
	 */
	function reportFieldInfo( $field ) {
		foreach( $this->getPageOptionAsArray("newreport", "reportInfo", "fields" ) as $f ) {
			if( $f["field"] === $field ) {
				return $f;
			}
		}
		return null;
	}

	function noRecordsOnFirstPage()
	{
		return $this->getTableData(".noRecordsFirstPage");
	}

	function isViewPagePDF()
	{
		return $this->getTableData(".isViewPagePDF");
	}

	function isLandscapeViewPDFOrientation()
	{
		return $this->getTableData(".isLandscapeViewPDFOrientation");
	}

	function isViewPagePDFFitToPage()
	{
		return $this->getTableData(".isViewPagePDFFitToPage");
	}

	function getViewPagePDFScale()
	{
		return $this->getTableData(".nViewPagePDFScale");
	}

	function isLandscapePrinterPagePDFOrientation()
	{
		return $this->getTableData(".isLandscapePrinterPagePDFOrientation");
	}

	function isPrinterPagePDFFitToPage()
	{
		return $this->getTableData(".isPrinterPagePDFFitToPage");
	}

	function getPrinterPagePDFScale()
	{
		return $this->getTableData(".nPrinterPagePDFScale");
	}

	function isPrinterPageFitToPage()
	{
		return $this->getTableData(".isPrinterPageFitToPage");
	}

	function getPrinterPageScale()
	{
		return $this->getTableData(".nPrinterPageScale");
	}

	function getPrinterSplitRecords()
	{
		return $this->getTableData(".nPrinterSplitRecords");
	}

	function getPrinterPDFSplitRecords()
	{
		return $this->getTableData(".nPrinterPDFSplitRecords");
	}

	function isPrinterPagePDF()
	{
		return $this->getPageOption("pdf", "pdfView");
	}

	function hasCaptcha() {
		return $this->getPageOption( "captcha", "captcha" );
	}

	function hasBreadcrumb() {
		return $this->getPageOption( "misc", "breadcrumb" );
	}

	function isSearchRequiredForFiltering()
	{
		return $this->getTableData(".searchIsRequiredForFilters");
	}
	function warnLeavingPages()
	{
		return $this->getTableData(".warnLeavingPages");
	}

	function hideEmptyViewFields()
	{
		return $this->getTableData(".hideEmptyFieldsOnView");
	}

	function getInitialPageSize()
	{
		if( isReport( $this->getEntityType() ) ) {
			if( $this->isReportWithGroups() ) {
				return $this->getTableData(".pageSizeGroups");
			} else {
				return $this->getTableData(".pageSizeRecords");
			}

		}
		return $this->getTableData(".pageSize");
	}

	function getRecordsPerRowList()
	{
		return $this->getPageOption( "page", "recsPerRow" );
	}

	function getRecordsPerRowPrint()
	{
		return $this->getPageOption( "page", "recsPerRow" );
	}

	function getRecordsLimit()
	{
		return $this->getTableData(".recsLimit");
	}

	function useMoveNext()
	{
		return $this->getPageOption( "misc", "nextPrev" );
	}

	function hasInlineAdd()
	{
		return $this->getpageOption("list", "inlineAdd");
	}

	function getListGridLayout()
	{
		return $this->getPageOption("page", "gridType");
	}

	function getPrintGridLayout()
	{
		return $this->getPageOption("page", "gridType");
	}

	/*
	function getReportPrintLayout()
	{
		return $this->getTableData(".printReportLayout");
	}
	*/

	function getPrinterPageOrientation()
	{
		return $this->getTableData(".printerPageOrientation");
	}


	function getReportPrintGroupsPerPage()
	{
		if( $this->isReportWithGroups() )
			return $this->getTableData(".reportPrintGroupsPerPage");
		else
			return $this->getTableData(".reportPrintRecordsPerPage");

	}

	function getReportPrintPDFGroupsPerPage()
	{
		return $this->getTableData(".reportPrintPDFGroupsPerPage");
	}

	function ajaxBasedListPage()
	{
		return $this->getTableData(".listAjax");
	}

	function isMultistepped()
	{
		return $this->getPageOption("page", "multiStep");
	}

	function hasVerticalBar()
	{
		return $this->getPageOption("page", "verticalBar");
	}


	/**
	 * Returns array of tabs, which use on list/report/chart page
	 * @return array
	 */
	function getGridTabs()
	{
		return $this->getTableData(".arrGridTabs");
	}


	function highlightSearchResults()
	{
		return $this->getTableData(".highlightSearchResults");
	}


	function getFieldsList()
	{
		if(is_null($this->_tableData))
			return array();
		$t = array_keys($this->_tableData);
		$arr = array();
		foreach($t as $f)
			if(substr($f,0,1)!=".")
				$arr[] = $f;
		return $arr;
	}

	function getFieldCount() {
		return count( $this->getFieldsList() );
	}


	function getBinaryFieldsIndices()
	{
		$fields = $this->getFieldsList();
		$out = array();
		foreach($fields as $idx => $f)
		{
			if(IsBinaryType($this->getFieldType($f)))
				$out[] = $idx + 1;
		}
		return $out;
	}

	function getNBFieldsList()
	{
		$t = $this->getFieldsList();
		$arr = array();
		foreach($t as $f)
			if(!IsBinaryType($this->getFieldType($f)))
				$arr[] = $f;
		return $arr;
	}

	/**
	 * Get field by good field name
	 * @param string	$field The good field name
	 * @return string
	 */
	function getFieldByGoodFieldName($field)
	{
		foreach($this->_tableData as $key => $value)
		{
			if( is_array( $value ) && count($value) > 1)
			{
				if($value["GoodName"] == $field)
					return $key;
			}
		}
		return "";
	}

	/**
	 * getUploadFolder
	 * Return inputed value or calculated path for upload folder
	 * @param {string} field name
	 * @param {array} file info (name, type, size)
	 */
	function getUploadFolder($field, $fileData = array())
	{
		if($this->isUploadCodeExpression($field))
			$path = GetUploadFolderExpression($field, $fileData, $this->_table );
		else
			$path = $this->getFieldData($field, "UploadFolder");
				if(strlen($path) && substr($path,strlen($path)-1) != "/")
			$path.="/";
		return $path;
	}

	function isMakeDirectoryNeeded($field)
	{
		return $this->isUploadCodeExpression($field) || !$this->isAbsolute($field);
	}

	function getFinalUploadFolder($field, $fileData = array())
	{
		if($this->isAbsolute($field))
			$path = $this->getUploadFolder($field, $fileData);
		else
			$path = getabspath($this->getUploadFolder($field, $fileData));
				if(strlen($path) && substr($path,strlen($path)-1) != "/")
			$path.="/";
		return $path;
	}

	function isUploadCodeExpression($field)
	{
		return $this->getFieldData($field, "UploadCodeExpression");
	}

	function &getQueryObject()
	{
		$queryObj = $this->getSQLQuery();
		return $queryObj;
	}

	function getListOfFieldsByExprType($needaggregate)
	{
		$query = &$this->getSQLQuery();
		if( !$query ) {
			return array();
		}
		$fields = $this->getFieldsList();
		$out = array();
		foreach($fields as $idx=>$f)
		{
			$aggr = $query->IsAggrFuncField($idx);
			if($needaggregate && $aggr || !$needaggregate && !$aggr)
				$out[] = $f;
		}
		return $out;
	}

	function isAggregateField($field)
	{
		$query = &$this->getSQLQuery();
		$idx = $this->getFieldIndex($field) - 1;
		return $query->IsAggrFuncField($idx);
	}

	/**
	 * Check if searching is case insensitive for the table
	 * @return Boolean
	 */
	function getNCSearch()
	{
		return $this->getTableData(".NCSearch");
	}

	function getChartType()
	{
		return $this->getTableData(".chartType");
	}

	function getChartRefreshTime()
	{
		return $this->getTableData(".ChartRefreshTime");
	}

	function getChartXml()
	{
		return $this->getTableData(".chartXml");
	}

	function auditEnabled()
	{
		return $this->getTableData(".audit");
	}

	function isSearchSavingEnabled()
	{
		return $this->getPageOption( "listSearch", "searchSaving" );
	}

	function isAllowShowHideFields()
	{
		if ( $this->getScrollGridBody() )
			return false;

		return $this->getPageOption( "list", "showHideFields" );
		//return $this->getTableData(".allowShowHideFields");
	}

	function isAllowFieldsReordering()
	{
		if ( $this->getScrollGridBody() || $this->getRecordsPerRowList() > 1)
			return false;

		return $this->getPageOption( "list", "reorderFields" );
	}

	function lockingEnabled()
	{
		return $this->getTableData(".locking");
	}

	function hasEncryptedFields()
	{
		return $this->getTableData(".hasEncryptedFields");
	}

	function showSearchPanel()
	{
		//return $this->getTableData(".showSearchPanel");
		return $this->getPageOption( "listSearch", "searchPanel" );
	}

	function isFlexibleSearch()
	{
		// return $this->getTableData(".flexibleSearch");
		return !$this->getPageOption( "listSearch", "fixedSearchPanel" );
	}

	function getSearchRequiredFields()
	{
		return $this->getPageOptionAsArray("fields", "searchRequiredFields");
	}

	function showSimpleSearchOptions()
	{
		return $this->getPageOption("listSearch", "simpleSearchOptions");
	}

	function getFieldsToHideIfEmpty()
	{
		return $this->getPageOption("fields", "hideEmptyFields");
	}

	function getFilterFields()
	{
		return  $this->getPageOptionAsArray("fields", "filterFields");
	}

	function getFilterFieldFormat($field)
	{
		return $this->getFieldData($field, "filterFormat");
	}

	function getFilterFieldTotal($field)
	{
		return $this->getFieldData($field, "filterTotals");
	}

	function showWithNoRecords($field)
	{
		return $this->getFieldData($field, "showWithNoRecords");
	}

	function getFilterSortValueType($field)
	{
		return $this->getFieldData($field, "sortValueType");
	}

	function isFilterSortOrderDescending($field)
	{
		return $this->getFieldData($field, "descendingOrder");
	}

	function getNumberOfVisibleFilterItems($field)
	{
		return $this->getFieldData($field, "numberOfVisibleItems");
	}

	function getFilterByInterval($field)
	{
		return $this->getFieldData($field, "filterBy");
	}

	function getParentFilterName($field)
	{
		return $this->getFieldData($field, "parentFilterField");
	}

	function getFilterIntervals($field)
	{
		return $this->getFieldData($field, "filterIntervals");
	}

	function showCollapsed($field)
	{
		return $this->getFieldData($field, "showCollapsed");
	}

	function getFilterIntervalDatabyIndex($field, $idx)
	{
		$intervalData = array();

		$filterIntervalsData = $this->getFilterIntervals($field);
		foreach($filterIntervalsData as $interval)
		{
			if($interval["index"] == $idx)
			{
				$intervalData = $interval;
				break;
			}
		}

		return $intervalData;
	}

	function getFilterTotalsField($field)
	{
		return $this->getFieldData($field, "filterTotalFields");
	}

	function getFilterFiledMultiSelect($field)
	{
		return $this->getFieldData($field, "filterMultiSelect");
	}

	function getBooleanFilterMessageData( $field, $checked ) {
		if( $checked ) {
			return array (
					"text" => $this->getFieldData($field, "filterCheckedMessageText"),
					"type" => $this->getFieldData($field, "filterCheckedMessageType")
				);
		}
		return array (
				"text" => $this->getFieldData($field, "filterUncheckedMessageText"),
				"type" => $this->getFieldData($field, "filterUncheckedMessageType")
			);
	}


	function getFilterStepType($field)
	{
		return $this->getFieldData($field, "filterSliderStepType");
	}

	function getFilterStepValue($field)
	{
		return $this->getFieldData($field, "filterSliderStepValue");
	}

	function getFilterKnobsType($field)
	{
		return $this->getFieldData($field, "filterKnobsType");
	}

	function isFilterApplyBtnSet($field)
	{
		return $this->getFieldData($field, "filterApplyBtn");
	}

	function getStrField($field)
	{
		return $this->getFieldData($field, "strField");
	}

	function getSourceSingle( $field )
	{
		return $this->getFieldData($field, "sourceSingle");
	}

	function getFieldSource( $field, $listRequest )
	{
		return $listRequest
			? $this->getFieldData( $field, "strField" )
			: $this->getFieldData( $field, "sourceSingle" );
	}

	function getScrollGridBody()
	{
		return $this->getTableData(".scrollGridBody");
	}

	/**
	 * Is 'UpdateLatLng' ticked for the table
	 */
	function isUpdateLatLng()
	{
		return $this->getTableData(".geocodingEnabled");
	}

	/**
	 * get geocoding data for the table
	 */
	function getGeocodingData()
	{
		return $this->getTableData(".geocodingData");
	}

	function allowDuplicateValues($field)
	{
		return !$this->getFieldData($field, "denyDuplicates");
	}

	function getDashFieldData($field, $key)
	{
		$dashSearchFields = $this->getDashboardSearchFields();
		$dfield = $dashSearchFields[ $field ];
		if( $dfield )
			$table = $dfield[0]["table"];
		if( !$dfield || !$table)
			return $this->getDefaultValueByKey( $key );

		if( !$this->_dashboardElemPSet[ $table ] )
			$this->_dashboardElemPSet[ $table ] = new ProjectSettings( $table, $this->_editPage );

		return $this->_dashboardElemPSet[ $table ]->getFieldData( $dfield[0]["field"], $key );
	}

	function getDashTableData($field, $key)
	{
		$dashSearchFields = $this->getDashboardSearchFields();
		$tableSettings = new ProjectSettings($dashSearchFields[$field][0]["table"], $this->_editPage);
		return $tableSettings->getTableData( $key );
	}


	/**
	 * It returns an empty array if the 'Select all' (search options) is ticked
	 */
	function getSearchOptionsList($field)
	{
		return $this->getFieldData($field, "searchOptionsList");
	}


	function getDefaultSearchOption($field)
	{
		$defaultOpt = $this->getFieldData($field, "defaultSearchOption");

		if( !$defaultOpt )
		{
			$searchOptionsList = $this->getSearchOptionsList($field);
			if( count($searchOptionsList) )
				$defaultOpt = $searchOptionsList[0];
		}
		return $defaultOpt;
	}

	/**
	 * Get status show list of thumbnails
	 * @param string $field field name
	 * @return boolean
	 */
	function showListOfThumbnails($field)
	{
		return $this->getFieldData($field, "ShowListOfThumbnails");
	}

	static function isMenuTreelike( $menuName )
	{
		global $menuTreelikeFlags;
		return $menuTreelikeFlags[$menuName];
	}

	function setPageMode($pageMode)
	{
		$this->_pageMode = $pageMode;
	}

	function editPageHasDenyDuplicatesFields()
	{
		foreach($this->getEditFields() as $fieldName)
		{
			if( !$this->allowDuplicateValues($fieldName) )
			{
				return true;
			}
		}
		return false;
	}

	/**
	 * Get a field's RTE type for RTE fields
	 * and the empty string for others
	 * @param {String} $field 	A field's name
	 * @return {String}
	 */
	function getRTEType($field)
	{
		if($this->isUseRTEBasic($field))
		{
			return "RTE";
		}

		if( $this->isUseRTECKNew($field) )
		{
			return "RTECK_NEW";
		}

		if($this->isUseRTEFCK($field))
		{
			return "RTECK";
		}
		if($this->isUseRTEInnova($field))
		{
			return "RTEINNOVA";
		}
		return "";
	}

	/**
	 * Get the list of the fields that must be hidden on the List page on a particular device
	 * @param {Number} Device code : 1-4
	 * @return {Array} array in the form of: $arr[$field]=true, where the $field must be hidden.
	 */
	function getHiddenFields($device)
	{
		$list = $this->getTableData( ".hideMobileList" );
		if( isset( $list[$device] ) )
			return $list[$device];
		return array();
	}

	/**
	 * Get the list of the fields that must be hidden on the List page on a particular device
	 * @param {Number} Device code : 1-4
	 * @return {Array} array in the form of: $arr[$goodfieldName]=true, where the $field must be hidden.
	 */
	function getHiddenGoodNameFields($device)
	{
		$hGoodFields = array();
		$hFields = $this->getHiddenFields($device);
		foreach ( $hFields as $field => $isShow ) {
			$hGoodFields[GoodFieldName($field)] = $isShow;
		}

		return $hGoodFields;
	}

	/**
	 * Checks if the 'columns By Device' is enabled
	 * @return {Boolean}
	 */
	function columnsByDeviceEnabled()
	{
		$list = $this->getTableData( ".hideMobileList" );
		foreach( $list as $d => $v )
		{
			if( $v )
				return true;
		}
		return false;
	}


	/**
	 * Build CSS media clause for given device code.
	 * Thanks to mobile device vendors, there are plenty of weird heuristics here, take it easy.
	 */
	static function getDeviceMediaClause($device)
	{
		if( $device == DESKTOP )
		{
			// width >= 1281

			//	Desktop. We don't care about prehistoric VGA displays
			return "@media (min-device-width: 1281px)";
		}
		else if( $device == TABLET_10_IN )	//	10" tablets
		{
			// width >= 768 and height == 1024 ( iPad )
			// or width between 1025 and 1280 and height is less than 1023
			// or the same with width and height interchanged

			// All iPads including mini go here, because there is no way to tell full-sized iPad from mini.
			return "@media (device-width: 768px) and (device-height: 1024px)".

			// The rest of contemporary 10" devices supposedly go here
				" , (min-device-width: 1025px) and (max-device-width: 1280px) and (max-device-height: 1023px) , (min-device-height: 1025px) and (max-device-height: 1280px) and (max-device-width: 1023px)";
		}
		else if( $device == TABLET_7_IN )
		{
			// width between 401 and 1024 and height between 401 and 800
			// or the same with width and height interchanged

			return "@media (min-device-height: 401px) and (max-device-height: 800px) and (min-device-width: 401px) and (max-device-width: 1024px) , (min-device-height: 401px) and (min-device-width: 401px) and (max-device-height: 1024px) and (max-device-width: 800px)";
		}

		else if( $device == SMARTPHONE_LANDSCAPE )
		{
			// landscape mode and width or height no more than 400
			return "@media (orientation: landscape) and (max-device-height: 400px), (orientation: landscape) and (max-device-width: 400px)";
		}

		else if( $device == SMARTPHONE_PORTRAIT )
		{
			// potrait mode and width or height no more than 400
			return "@media (orientation: portrait) and (max-device-height: 400px), (orientation: portrait) and (max-device-width: 400px)";
		}
	}

	/**
	 * @return Mixed
	 */
	public static function getForLogin()
	{
		return !!Security::dbProvider()
			? new ProjectSettings("contractor_master", PAGE_LIST)
			: null;
	}

	/**
	 * Returns the list of the dashboard search fields.
	 * Each field is an array of "table", "field" pairs.
	 */
	function getDashboardSearchFields()
	{
		return $this->getPageOptionAsArray( 'dashSearch', 'searchFields');
	}
	/**
	 * Returns the list of the dashboard elements
	 * Each element is represented by the array of "name", "table" and "type"
	 */
/*
	 function getDashboardElements()
	{
		return $this->getTableData(".dashElements");
	}
	*/

	/**
	 * @param String dashElementName
	 * @return Array
	 */
	function getDashboardElementData( $dashElementName )
	{
		$dElements = $this->getDashboardElements();
		foreach( $dElements as $dElemData )
		{
			if( $dElemData["elementName"] == $dashElementName )
				return $dElemData;
		}
		return array();
	}

	/**
	 * @return Number
	 */
	function getAfterAddAction()
	{
		return $this->getTableData(".afterAddAction");
	}

	/**
	 * @return String
	 */
	function getAADetailTable()
	{
		return $this->getTableData(".afterAddActionDetTable");
	}

	/**
	 * @return Boolean
	 */
	function checkClosePopupAfterAdd()
	{
		return $this->getTableData(".closePopupAfterAdd");
	}

	/**
	 * @return Number
	 */
	function getAfterEditAction()
	{
		return $this->getTableData(".afterEditAction");
	}

	/**
	 * @return String
	 */
	function getAEDetailTable()
	{
		return $this->getTableData(".afterEditActionDetTable");
	}

	/**
	 * @return Boolean
	 */
	function checkClosePopupAfterEdit()
	{
		return $this->getTableData(".closePopupAfterEdit");
	}

	function getMapIcon($field, $data)
	{
		if( !$this->isMapIconCustom($field) ) {
			$mapData = $this->getMapData($field);
			if( $mapData["mapIcon"] != "" )
				return "images/menuicons/" . $mapData["mapIcon"];
			return "";
		}
		else
		{
			return getCustomMapIcon($field, "", $data);
		}
	}

	/**
	 * @param String dashElementName
	 * @param Array data
	 * @return String
	 */
	function getDashMapIcon( $dashElementName, $data )
	{
		$dashElementData = $this->getDashboardElementData( $dashElementName );

		if( $dashElementData["isMarkerIconCustom"] ) {
			$eventObj = getEventObject( $this->table() );
			$funcName = "event_" . $dashElementData["iconF"];
			return getDashMapCustomIcon( $eventObj, $funcName, $data );
		}
		if( $dashElementData["iconF"] )
			return "images/menuicons/" . $dashElementData["iconF"];

		return "";
	}

	/**
	 * @param String dashElementName
	 * @param Array data
	 * @return String
	 */
	function getDashMapLocationIcon( $dashElementName )
	{
		$dashElementData = $this->getDashboardElementData( $dashElementName );
		if( $dashElementData["isLocationMarkerIconCustom"] ) {
			$eventObj = getEventObject( $this->table() );
			$funcName = "event_" . $dashElementData["currentLocationIcon"];
			return getDashMapCustomIcon( $eventObj, $funcName, array() );
		}

		if( $dashElementData["currentLocationIcon"] )
			return "images/menuicons/" . $dashElementData["currentLocationIcon"];

		return "";
	}

	function isMapIconCustom($field)
	{
		$mapData = $this->getMapData($field);
		return $mapData["isMapIconCustom"];
	}

	function getDetailsBadgeColor( $dTable ) {
		return $this->getPageOption( "details", $dTable, "badgeColor" );
	}

	/**
	 * returns array of array( "id" => menuId, "horizontal" => boolean )
	 */
	function getPageMenus() {
		return $this->getPageOptionAsArray( "page", "menus" );
	}

	function getDefaultBadgeColor() {
		return $this->getTableData(".badgeColor");
	}

	function & helperFormItems()
	{
		return $this->getPageOption("layoutHelper", "formItems");
	}
	function & helperItemsByType()
	{
		return $this->getPageOption("layoutHelper", "itemsByType");
	}

	function & allFieldItems()
	{
		return $this->getPageOption("fields", "fieldItems");
	}

	function & helperItemVisibility()
	{
		return $this->getPageOption("layoutHelper", "itemVisibility");
	}

	function & helperCellMaps()
	{
		return $this->getPageOption("layoutHelper", "cellMaps");
	}

	function detailsShowCount($dTable)
	{
		return $this->getPageOption("details", $dTable, "showCount" );
	}

	function detailsHideEmpty($dTable)
	{
		return $this->getPageOption("details", $dTable, "hideEmptyChild" );
	}

	function detailsHideEmptyPreview($dTable)
	{
		return $this->getPageOption("details", $dTable, "hideEmptyPreview" );
	}

	function detailsPreview($dTable)
	{
		return $this->getPageOption("details", $dTable, "displayPreview" );
	}

	function detailsProceedLink($dTable)
	{
		return $this->getPageOption("details", $dTable, "showProceedLink" );
	}

	function detailsPrint($dTable)
	{
		return $this->getPageOption("details", $dTable, "printDetails" );
	}

	function detailsLinks()
	{
		return $this->getPageOption("allDetails", "linkType" );
	}
	function detailsPageId( $dTable )
	{
		return $this->getPageOption("details", $dTable, "previewPageId" );
	}

	function masterPreview( $mTable )
	{
		return $this->getPageOption("master", $mTable, "preview" );
	}

	/**
	 * @return boolean if success otherwise false
	 */
	function hasMap()
	{
		return !!$this->getPageOption("events", "maps" );
	}
	function maps()
	{
		return $this->getPageOption("events", "maps" );
	}

	function mapsData()
	{
		return $this->getPageOption("events", "mapsData" );
	}

	function buttons()
	{
		return $this->getPageOption("events", "buttons" );
	}

	function getPageType( $page = "" )
	{
		if( !$page )
			$page = $this->_page;
		return $this->_auxTableData[ ".pages" ][ $page ];
	}

	/**
	 * returns page type without applying page permissions
	 */
	function getOriginalPageType( $page = "" )
	{
		if( !$page )
			$page = $this->_page;
		return $this->_auxTableData[ ".originalPages" ][ $page ];
	}

	/**
	 * @return Array( pageId => pageType )
	 */
	function & getOriginalPages()
	{
		return $this->_auxTableData[ ".originalPages" ];
	}

	function welcomeItems()
	{
		return $this->getPageOption("welcome", "welcomeItems");
	}

	function welcomePageSkip()
	{
		return $this->getPageOption("welcome", "welcomePageSkip");
	}

	function getMultipleImgMode( $field )
	{
		return $this->getFieldData( $field, "multipleImgMode" );
	}

	function getMaxImages( $field )
	{
		return $this->getFieldData( $field, "maxImages" );
	}
	function isGalleryEnabled( $field )
	{
		return $this->getFieldData( $field, "showGallery" );
	}
	function getGalleryMode( $field )
	{
		return $this->getFieldData( $field, "galleryMode" );
	}
	function getCaptionMode( $field )
	{
		return $this->getFieldData( $field, "captionMode" );
	}
	function getCaptionField( $field )
	{
		return $this->getFieldData( $field, "captionField" );
	}

	/**
	 * @return boolean
	 */
	function getImageBorder( $field )
	{
		return $this->getFieldData( $field, "imageBorder" );
	}

	function getImageFullWidth( $field )
	{
		return $this->getFieldData( $field, "imageFullWidth" );
	}

	/**
	 * Page exists
	 * @return Boolean
	 */
	function pageTypeAvailable( $pageType ) {
		$pagesByType =& $this->_auxTableData[".pagesByType"];
		return !!$pagesByType[ $pageType ];
	}

	function updatePages() {

		if( $this->_auxTableData[".pagesUpdated"] ) {
			return;
		}

		//	don't filter pages available to all users
		if( $this->_pageType == PAGE_LOGIN
			|| $this->_pageType == PAGE_REGISTER
			|| $this->_pageType == PAGE_REMIND
			|| $this->_pageType == PAGE_REMIND_SUCCESS
		) {
			return;
		}


		$this->_auxTableData[".pagesUpdated"] = true;

		$restrictedPages = Security::getRestrictedPages( $this->_auxTable, $this );
		if( !$restrictedPages ) {
			return;
		}
		$pages =& $this->_auxTableData[".pages"];
		$pagesByType =& $this->_auxTableData[".pagesByType"];
		$newPages = array();
		$defaultPages =& $this->_auxTableData[".defaultPages"];
		foreach( $pages as $p => $type ) {
			if( !$restrictedPages[$p] ) {
				$newPages[ $p ] = $type;
			}
			else {
				$idx = array_search( $p, $pagesByType[$type] );
				unset( $pagesByType[$type][$idx] );
				if( $defaultPages[ $type ] == $p ) {
					$defaultPages[ $type ] = "";
					//	pick the first available page
					foreach( $pagesByType[$type] as $d ) {
						$defaultPages[ $type ] = $d;
						break;
					}
				}
			}
		}
		$this->_auxTableData[".pages"] = &$newPages;
	}

	/**
	 * Revert pages list to original.
	 * This is called from Security::setRestrictedPages/setAllowedPages
	 */
	function resetPages() {
		unset( $this->_auxTableData[".pagesUpdated"] );
		$this->_auxTableData[".defaultPages"] = $this->_auxTableData[".originalDefaultPages"];
		$this->_auxTableData[".pages"] = $this->_auxTableData[".originalPages"];
	}

	/**
	 * returns array of page ids ignoring user permissions
	 */
	function getOriginalPagesByType( $pageType) {
		return $this->_auxTableData[".originalPagesByType"][ $pageType ];
	}

	function &getDataSourceOps()
	{
		return $this->_tableData[".operations"];
	}

	/**
	 * @return Boolean
	 */
	function groupChart() {
		return $this->getTableData( ".groupChart" );
	}

	/**
	 * @return Integer
	 */
	function chartLabelInterval() {
		return $this->getTableData( ".chartLabelInterval" );
	}

	/**
	 * @return Array
	 */
	function chartSeries() {
		return $this->getTableData( ".chartSeries" );
	}

	/**
	 * @return String
	 */
	function chartLabelField() {
		return $this->getTableData( ".chartLabelField" );
	}

	function getViewPageType() {
		return $this->_viewPage;
	}

	function spreadsheetGrid() {
		return $this->getPageOption( "list", "spreadsheetMode");
	}

	/**
	 * Tell whether the edit format involves file uploading
	 * @return boolean
	 */
	public static function uploadEditType( $editFormat ) {
		return $editFormat == EDIT_FORMAT_DATABASE_FILE || $editFormat == EDIT_FORMAT_DATABASE_IMAGE || $editFormat == EDIT_FORMAT_FILE;
	}

	public function addNewRecordAutomatically() {
		return $this->getPageOption( "list", "addNewRecordAutomatically" );
	}

	public function reorderRows() {
		return $this->getPageOption( "list", "reorderRows" ) && $this->reorderRowsField() != '';
	}

	public function reorderRowsField() {
		return $this->getPageOption( "list", "reorderRowsField");
	}

	public function inlineAddBottom() {
		return !!( $this->getPageOption( "list", "addToBottom") || $this->spreadsheetGrid() && $this->addNewRecordAutomatically() );
	}

	function listColumnsOrderOnPrint() {
		return $this->getPageOption( "misc", "listColumnsOrderOnPrint" );
	}

	function fileStorageProvider( $field ) {
		return $this->getFieldData($field, "fileStorageProvider");
	}

	function googleDriveFolder( $field ) {
		return $this->getFieldData($field, "googleDriveFolder");
	}

	function hideAdGroupsUntilSearch() {
		return $this->getPageOption("adGroups", "hideUntilSearch");
	}

	function hasNotifications()
	{
		return $this->getPageOption("page", "hasNotifications");
	}

	function amazonSecretKey( $field ) {
		return GetGlobalData( "S3SecretKey" );
	}

	function amazonAccessKey( $field ) {
		return GetGlobalData( "S3AccessKey" );
	}

	function amazonPath( $field ) {
		return $this->getFieldData( $field, "S3Path" );
	}

	function amazonBucket( $field ) {
		return GetGlobalData( "S3Bucket" );
	}

	function amazonRegion( $field ) {
		return GetGlobalData( "S3Region" );
	}


	function wasabiSecretKey( $field ) {
		return GetGlobalData( "WasabiSecretKey" );
	}

	function wasabiAccessKey( $field ) {
		return GetGlobalData( "WasabiAccessKey" );
	}

	function wasabiPath( $field ) {
		return $this->getFieldData( $field, "wasabiPath" );
	}

	function wasabiBucket( $field ) {
		return GetGlobalData( "WasabiBucket" );
	}

	function wasabiRegion( $field ) {
		return GetGlobalData( "WasabiRegion" );
	}

	function oneDrivePath( $field ) {
		return $this->getFieldData( $field, "oneDrivePath" );
	}

	function oneDriveDrive( $field ) {
		return GetGlobalData( "OneDriveDrive" );
	}

	function dropboxPath( $field ) {
		return $this->getFieldData( $field, "dropBoxPath" );
	}

	/**
	 * check if change password page has 'Old password' field
	 */
	function hasOldPassField() {
		return $this->getPageOption("changepwd", "oldPassFieldOnPage");
	}

	/**
	 * @return Array of dashboard elements
	 * See DasboardItem in TS code
	 */
	function getDashboardElements() {
		return $this->getPageOption("dashboard", "elements");
	}

	function getMobileSub() {
		return $this->getPageOption("page", "mobileSub");
	}

	/**
	 * returns number of charts on the page
	 */
	function getChartCount() {
		return $this->getPageOption("chart", "chartCount");
	}

	function hideNumberOfRecords()
	{
		return $this->getPageOption("list", "hideNumberOfRecords");
	}


}


function fillProjectEntites()
{
	global $projectEntities, $projectEntitiesReverse, $tablesByGoodName, $tablesByUpperCase, $tablesByUpperGoodname;
	if( count( $projectEntities ) )
		return;
	$projectEntities[ "contractor_master" ] = array( "url" => "contractor_master", "type" => 0 );
	$projectEntitiesReverse[ "contractor_master" ] = "contractor_master";
	$projectEntities[ "admin_rights" ] = array( "url" => "admin_rights", "type" => 1 );
	$projectEntitiesReverse[ "admin_rights" ] = "admin_rights";
	$projectEntities[ "admin_members" ] = array( "url" => "admin_members", "type" => 1 );
	$projectEntitiesReverse[ "admin_members" ] = "admin_members";
	$projectEntities[ "admin_users" ] = array( "url" => "admin_users", "type" => 1 );
	$projectEntitiesReverse[ "admin_users" ] = "admin_users";
	$projectEntities[ "tipo_docidentidad" ] = array( "url" => "tipo_docidentidad", "type" => 0 );
	$projectEntitiesReverse[ "tipo_docidentidad" ] = "tipo_docidentidad";
	$projectEntities[ "tipo_banco" ] = array( "url" => "tipo_banco", "type" => 0 );
	$projectEntitiesReverse[ "tipo_banco" ] = "tipo_banco";
	$projectEntities[ "tipo_cta_banco" ] = array( "url" => "tipo_cta_banco", "type" => 0 );
	$projectEntitiesReverse[ "tipo_cta_banco" ] = "tipo_cta_banco";
	$projectEntities[ "tipo_regimen" ] = array( "url" => "tipo_regimen", "type" => 0 );
	$projectEntitiesReverse[ "tipo_regimen" ] = "tipo_regimen";
	$projectEntities[ "tparam_fondosalud" ] = array( "url" => "tparam_fondosalud", "type" => 0 );
	$projectEntitiesReverse[ "tparam_fondosalud" ] = "tparam_fondosalud";
	$projectEntities[ "tparam_fondopension" ] = array( "url" => "tparam_fondopension", "type" => 0 );
	$projectEntitiesReverse[ "tparam_fondopension" ] = "tparam_fondopension";
	$projectEntities[ "tparam_cajacomp" ] = array( "url" => "tparam_cajacomp", "type" => 0 );
	$projectEntitiesReverse[ "tparam_cajacomp" ] = "tparam_cajacomp";
	$projectEntities[ "tparam_tipo_ct_arl" ] = array( "url" => "tparam_tipo_ct_arl", "type" => 0 );
	$projectEntitiesReverse[ "tparam_tipo_ct_arl" ] = "tparam_tipo_ct_arl";
	$projectEntities[ "tparam_genero" ] = array( "url" => "tparam_genero", "type" => 0 );
	$projectEntitiesReverse[ "tparam_genero" ] = "tparam_genero";
	$projectEntities[ "tparam_discapacidad" ] = array( "url" => "tparam_discapacidad", "type" => 0 );
	$projectEntitiesReverse[ "tparam_discapacidad" ] = "tparam_discapacidad";
	$projectEntities[ "tparam_sn" ] = array( "url" => "tparam_sn", "type" => 0 );
	$projectEntitiesReverse[ "tparam_sn" ] = "tparam_sn";
	$projectEntities[ "q_divipola" ] = array( "url" => "q_divipola", "type" => 0 );
	$projectEntitiesReverse[ "q_divipola" ] = "q_divipola";
	$projectEntities[ "dependencia" ] = array( "url" => "dependencia", "type" => 0 );
	$projectEntitiesReverse[ "dependencia" ] = "dependencia";
	$projectEntities[ "dependencias_001" ] = array( "url" => "dependencias_001", "type" => 0 );
	$projectEntitiesReverse[ "dependencias_001" ] = "dependencias_001";
	$projectEntities[ "contrato" ] = array( "url" => "contrato", "type" => 0 );
	$projectEntitiesReverse[ "contrato" ] = "contrato";
	$projectEntities[ "interventor_periodos" ] = array( "url" => "interventor_periodos", "type" => 0 );
	$projectEntitiesReverse[ "interventor_periodos" ] = "interventor_periodos";
	$projectEntities[ "contractor_master_signature" ] = array( "url" => "contractor_master_signature", "type" => 1 );
	$projectEntitiesReverse[ "contractor_master_signature" ] = "contractor_master_signature";
	$projectEntities[ "informe_intersup_estado" ] = array( "url" => "informe_intersup_estado", "type" => 0 );
	$projectEntitiesReverse[ "informe_intersup_estado" ] = "informe_intersup_estado";
	$projectEntities[ "contractor_master_Chart_genero" ] = array( "url" => "contractor_master_chart_genero", "type" => 3 );
	$projectEntitiesReverse[ "contractor_master_chart_genero" ] = "contractor_master_Chart_genero";
	$projectEntities[ "contractor_master_view" ] = array( "url" => "contractor_master_view", "type" => 1 );
	$projectEntitiesReverse[ "contractor_master_view" ] = "contractor_master_view";
	$projectEntities[ "contractor_master_chart_eps" ] = array( "url" => "contractor_master_chart_eps", "type" => 3 );
	$projectEntitiesReverse[ "contractor_master_chart_eps" ] = "contractor_master_chart_eps";
	$projectEntities[ "contractor_master_chart_fondopension" ] = array( "url" => "contractor_master_chart_fondopension", "type" => 3 );
	$projectEntitiesReverse[ "contractor_master_chart_fondopension" ] = "contractor_master_chart_fondopension";
	$projectEntities[ "Dashboard" ] = array( "url" => "dashboard", "type" => 4 );
	$projectEntitiesReverse[ "dashboard" ] = "Dashboard";
	$projectEntities[ "informe_intersup_contratista" ] = array( "url" => "informe_intersup_contratista", "type" => 1 );
	$projectEntitiesReverse[ "informe_intersup_contratista" ] = "informe_intersup_contratista";
	$projectEntities[ "informe_intersup_oe_contratista" ] = array( "url" => "informe_intersup_oe_contratista", "type" => 1 );
	$projectEntitiesReverse[ "informe_intersup_oe_contratista" ] = "informe_intersup_oe_contratista";
	$projectEntities[ "tparam_sn_oe" ] = array( "url" => "tparam_sn_oe", "type" => 0 );
	$projectEntitiesReverse[ "tparam_sn_oe" ] = "tparam_sn_oe";
	$projectEntities[ "informe_intersup_anexos_contratista" ] = array( "url" => "informe_intersup_anexos_contratista", "type" => 1 );
	$projectEntitiesReverse[ "informe_intersup_anexos_contratista" ] = "informe_intersup_anexos_contratista";
	$projectEntities[ "informe_intersup_anexos_tipo" ] = array( "url" => "informe_intersup_anexos_tipo", "type" => 0 );
	$projectEntitiesReverse[ "informe_intersup_anexos_tipo" ] = "informe_intersup_anexos_tipo";
	$projectEntities[ "global_users" ] = array( "url" => "global_users", "type" => 0 );
	$projectEntitiesReverse[ "global_users" ] = "global_users";
	$projectEntities[ "hoja_ruta_2020_trpn" ] = array( "url" => "hoja_ruta_2020_trpn", "type" => 1 );
	$projectEntitiesReverse[ "hoja_ruta_2020_trpn" ] = "hoja_ruta_2020_trpn";
	$projectEntities[ "q_bandejaentrada_supervisores" ] = array( "url" => "q_bandejaentrada_supervisores", "type" => 0 );
	$projectEntitiesReverse[ "q_bandejaentrada_supervisores" ] = "q_bandejaentrada_supervisores";
	$projectEntities[ "q_genera_informe" ] = array( "url" => "q_genera_informe", "type" => 0 );
	$projectEntitiesReverse[ "q_genera_informe" ] = "q_genera_informe";
	$projectEntities[ "nomina_cont_meses" ] = array( "url" => "nomina_cont_meses", "type" => 0 );
	$projectEntitiesReverse[ "nomina_cont_meses" ] = "nomina_cont_meses";
	$projectEntities[ "informe_intersup_cxc" ] = array( "url" => "informe_intersup_cxc", "type" => 0 );
	$projectEntitiesReverse[ "informe_intersup_cxc" ] = "informe_intersup_cxc";
	$projectEntities[ "informe_intersup_4" ] = array( "url" => "informe_intersup_4", "type" => 1 );
	$projectEntitiesReverse[ "informe_intersup_4" ] = "informe_intersup_4";
	$projectEntities[ "informe_intersup_plan_pagos" ] = array( "url" => "informe_intersup_plan_pagos", "type" => 0 );
	$projectEntitiesReverse[ "informe_intersup_plan_pagos" ] = "informe_intersup_plan_pagos";
	$projectEntities[ "q_inf_plandepagos" ] = array( "url" => "q_inf_plandepagos", "type" => 0 );
	$projectEntitiesReverse[ "q_inf_plandepagos" ] = "q_inf_plandepagos";
	$projectEntities[ "q_info_cxc" ] = array( "url" => "q_info_cxc", "type" => 0 );
	$projectEntitiesReverse[ "q_info_cxc" ] = "q_info_cxc";
	$projectEntities[ "hoja_ruta_2020_tracking" ] = array( "url" => "hoja_ruta_2020_tracking", "type" => 0 );
	$projectEntitiesReverse[ "hoja_ruta_2020_tracking" ] = "hoja_ruta_2020_tracking";
	$projectEntities[ "hoja_ruta_event_type" ] = array( "url" => "hoja_ruta_event_type", "type" => 0 );
	$projectEntitiesReverse[ "hoja_ruta_event_type" ] = "hoja_ruta_event_type";
	$projectEntities[ "contractor_master_jur" ] = array( "url" => "contractor_master_jur", "type" => 1 );
	$projectEntitiesReverse[ "contractor_master_jur" ] = "contractor_master_jur";
	$projectEntities[ "hoja_ruta_2020_trpn_jur" ] = array( "url" => "hoja_ruta_2020_trpn_jur", "type" => 1 );
	$projectEntitiesReverse[ "hoja_ruta_2020_trpn_jur" ] = "hoja_ruta_2020_trpn_jur";
	$projectEntities[ "interventor_interno" ] = array( "url" => "interventor_interno", "type" => 0 );
	$projectEntitiesReverse[ "interventor_interno" ] = "interventor_interno";
	$projectEntities[ "contrato_tipo_unidad" ] = array( "url" => "contrato_tipo_unidad", "type" => 0 );
	$projectEntitiesReverse[ "contrato_tipo_unidad" ] = "contrato_tipo_unidad";
	$projectEntities[ "hoja_ruta_tparam_conceptos" ] = array( "url" => "hoja_ruta_tparam_conceptos", "type" => 0 );
	$projectEntitiesReverse[ "hoja_ruta_tparam_conceptos" ] = "hoja_ruta_tparam_conceptos";
	$projectEntities[ "q_consulta_op" ] = array( "url" => "q_consulta_op", "type" => 0 );
	$projectEntitiesReverse[ "q_consulta_op" ] = "q_consulta_op";
	$projectEntities[ "contrato_attached" ] = array( "url" => "contrato_attached", "type" => 0 );
	$projectEntitiesReverse[ "contrato_attached" ] = "contrato_attached";
	$projectEntities[ "contrato_attached_type" ] = array( "url" => "contrato_attached_type", "type" => 0 );
	$projectEntitiesReverse[ "contrato_attached_type" ] = "contrato_attached_type";
	$projectEntities[ "global_documents" ] = array( "url" => "global_documents", "type" => 0 );
	$projectEntitiesReverse[ "global_documents" ] = "global_documents";
	$projectEntities[ "hoja_ruta_2020_files" ] = array( "url" => "hoja_ruta_2020_files", "type" => 0 );
	$projectEntitiesReverse[ "hoja_ruta_2020_files" ] = "hoja_ruta_2020_files";
	$projectEntities[ "informe_intersup_oe" ] = array( "url" => "informe_intersup_oe", "type" => 0 );
	$projectEntitiesReverse[ "informe_intersup_oe" ] = "informe_intersup_oe";
	$projectEntities[ "tparam_ciiu" ] = array( "url" => "tparam_ciiu", "type" => 0 );
	$projectEntitiesReverse[ "tparam_ciiu" ] = "tparam_ciiu";
	$projectEntities[ "tparam_reponsabilidades" ] = array( "url" => "tparam_reponsabilidades", "type" => 0 );
	$projectEntitiesReverse[ "tparam_reponsabilidades" ] = "tparam_reponsabilidades";
	$projectEntities[ "tparam_tipopago" ] = array( "url" => "tparam_tipopago", "type" => 0 );
	$projectEntitiesReverse[ "tparam_tipopago" ] = "tparam_tipopago";
	$projectEntities[ "tparam_naturaleza" ] = array( "url" => "tparam_naturaleza", "type" => 0 );
	$projectEntitiesReverse[ "tparam_naturaleza" ] = "tparam_naturaleza";
	$projectEntities[ "informe_intersup_anexos_contratista_o" ] = array( "url" => "informe_intersup_anexos_contratista_o", "type" => 1 );
	$projectEntitiesReverse[ "informe_intersup_anexos_contratista_o" ] = "informe_intersup_anexos_contratista_o";
	$projectEntities[ "q_001_dashboard" ] = array( "url" => "q_001_dashboard", "type" => 0 );
	$projectEntitiesReverse[ "q_001_dashboard" ] = "q_001_dashboard";
}

function findTable( $table ) {
	global $projectEntities, $projectEntitiesReverse;
	fillProjectEntites();

	if( isset( $projectEntities[ $table ] ) )
		return $table;
	$uTable = strtoupper( $table );

	foreach( $projectEntities as $t => $d ) {
		if( $uTable == strtoupper($t) )
			return $t;
		$gt = GoodFieldName($t);
		if( $table == $gt || $uTable == strtoupper( $gt ) )
			return $t;
	}

	//	check shortTableName
	if( isset( $projectEntitiesReverse[ $table ] ) )
		return $projectEntitiesReverse[ $table ];
	foreach( $projectEntitiesReverse as $t => $v ) {
		if( $uTable == strtoupper($t) )
			return $v;
	}
	return "";
}
//	return table short name
function GetTableURL( $table )
{
	if( $table == "<global>")
		return GLOBAL_PAGES_SHORT;
	global $strTableName, $projectEntities;

	if(!$table) {
		return "";
	}
	fillProjectEntites();

	if( isset( $projectEntities[ $table ] ) )
		return $projectEntities[ $table ][ "url" ];

	return "";
}

function GetEntityType($table = "")
{
	global $strTableName, $projectEntities;
	if(!$table)
		$table=$strTableName;
	fillProjectEntites();

	if( isset( $projectEntities[ $table ] ) )
		return $projectEntities[ $table ][ "type" ];

	return "";
}


//	return strTableName by short table name
function GetTableByShort( $shortTName )
{
	global $projectEntitiesReverse;
	fillProjectEntites();
	if(!$shortTName)
		return false;
	return $projectEntitiesReverse[ $shortTName ];
}

//	A
	$g_defaultOptionValues["Absolute"] = false;
	$g_defaultOptionValues["acceptFileTypes"] = array();
	$g_defaultOptionValues["addFields"] = array();
	$g_defaultOptionValues["addPageEvents"] = false;
	$g_defaultOptionValues["ajaxCodeSnippetAdded"] = false;
	$g_defaultOptionValues["advSearchFields"] = array();
	$g_defaultOptionValues["afterAddAction"] = 1;
	$g_defaultOptionValues["afterAddActionDetTable"] = "";
	$g_defaultOptionValues["afterEditAction"] = 1;
	$g_defaultOptionValues["afterEditActionDetTable"] = "";
	$g_defaultOptionValues["AllowToAdd"] = false;
	$g_defaultOptionValues["allowFieldsReordering"] = false;
	$g_defaultOptionValues["allowShowHideFields"] = false;
	$g_defaultOptionValues["allSearchFields"] = array();
	$g_defaultOptionValues["arrGroupsPerPage"] = array();
	$g_defaultOptionValues["arrGridTabs"] = array();
	$g_defaultOptionValues["arrRecsPerPage"] = array();

	$g_defaultOptionValues["audioTitleField"] = "";
	$g_defaultOptionValues["audit"] = false;
	$g_defaultOptionValues["autoCompleteFields"] = array();
	$g_defaultOptionValues["autoCompleteFieldsAdd"] = array();
	$g_defaultOptionValues["autoCompleteFieldsEdit"] = array();
	$g_defaultOptionValues["autoCompleteFieldsOnEdit"] = false;
	$g_defaultOptionValues["AutoInc"] = false;
	$g_defaultOptionValues["autoUpload"] = false;
	$g_defaultOptionValues["autoUpdatable"] = false;
//	B
	$g_defaultOptionValues["badgeColor"] = "";
	$g_defaultOptionValues["bInlineAdd"] = false;
	$g_defaultOptionValues["bInlineEdit"] = false;
	$g_defaultOptionValues["bUpdateSelected"] = false;
	$g_defaultOptionValues["bIsEncrypted"] = false;
	$g_defaultOptionValues["bListPage"] = false;
	$g_defaultOptionValues["bPrinterPage"] = false;
	$g_defaultOptionValues["buttonsAdded"] = false;
//	C
	$g_defaultOptionValues["CompatibilityMode"] = false;
	$g_defaultOptionValues["categoryFields"] = array();
	$g_defaultOptionValues["ChartRefreshTime"] = 60;
	$g_defaultOptionValues["chartXml"] = "";
	$g_defaultOptionValues["chartType"] = "";
	$g_defaultOptionValues["closePopupAfterAdd"] = false;
	$g_defaultOptionValues["closePopupAfterEdit"] = false;
	$g_defaultOptionValues["controlWidth"] = 160;
	$g_defaultOptionValues["copy"] = false;
	$g_defaultOptionValues["CreateThumbnail"] = false;
	$g_defaultOptionValues["crossTabReport"] = false;
	$g_defaultOptionValues["CustomDisplay"] = false;
//	D
	$g_defaultOptionValues["detailsLinksOnList"] = DL_SINGLE;
	$g_defaultOptionValues["dashElements"] = array();
	$g_defaultOptionValues["dashCells"] = array();
	$g_defaultOptionValues["DateEditType"] = 0;
	$g_defaultOptionValues["DecimalDigits"] = "";
	$g_defaultOptionValues["defaultSearchOption"] = "";
	$g_defaultOptionValues["DefaultValue"] = "";
	$g_defaultOptionValues["delete"] = false;
	$g_defaultOptionValues["DeleteAssociatedFile"] = false;
	$g_defaultOptionValues["denyDuplicates"] = false;
	$g_defaultOptionValues["DependentLookups"] = array();
	$g_defaultOptionValues["descendingOrder"] = false;
	$g_defaultOptionValues["DisplayField"] = "";
//	E
	$g_defaultOptionValues["edit"] = false;
	$g_defaultOptionValues["editFields"] = array();
	$g_defaultOptionValues["EditFormat"] = "";
	$g_defaultOptionValues["EditParams"] = "";
	$g_defaultOptionValues["exportTo"] = false;
	$g_defaultOptionValues["exportFormatting"] = EXPORT_BOTH;
	$g_defaultOptionValues["exportDelimiter"] = ",";
//	F
	$g_defaultOptionValues["fieldIsVideoUrl"] = false;
	$g_defaultOptionValues["fieldIsImageUrl"] = false;
	$g_defaultOptionValues["FieldType"] = "";
	$g_defaultOptionValues["FieldPermissions"] = false;
	$g_defaultOptionValues["Filename"] = "";
	$g_defaultOptionValues["filterBy"] = 0;
	$g_defaultOptionValues["filterFields"] = array();
	$g_defaultOptionValues["filterFormat"] = FF_VALUE_LIST;
	$g_defaultOptionValues["filterIntervals"] = array();
	$g_defaultOptionValues["filterTotals"] = FT_NONE;
	$g_defaultOptionValues["filterMultiSelect"] = FM_NONE;
	$g_defaultOptionValues["filterCheckedMessageText"] = "";
	$g_defaultOptionValues["filterCheckedMessageType"] = "";
	$g_defaultOptionValues["filterUncheckedMessageText"] = "";
	$g_defaultOptionValues["filterUncheckedMessageType"] = "";
	$g_defaultOptionValues["filterSliderStepType"] = 1;
	$g_defaultOptionValues["filterSliderStepValue"] = 1;
	$g_defaultOptionValues["filterKnobsType"] = 0;
	$g_defaultOptionValues["filterApplyBtn"] = false;
	$g_defaultOptionValues["flexibleSearch"] = false;
	$g_defaultOptionValues["FormatTimeAttrs"] = array();
	$g_defaultOptionValues["freeInput"] = false;
	$g_defaultOptionValues["FullName"] = "";
	$g_defaultOptionValues["fieldEvents"] = false;
	$g_defaultOptionValues["fieldViewEvents"] = false;
//	G
	$g_defaultOptionValues["googleLikeFields"] = array();
	$g_defaultOptionValues["GoodName"] = "";
//	H
	$g_defaultOptionValues["hasEncryptedFields"] = false;
	$g_defaultOptionValues["hideEmptyFieldsOnView"] = false;
	$g_defaultOptionValues["HorizontalLookup"] = false;
	$g_defaultOptionValues["hlNewWindow"] = false;
	$g_defaultOptionValues["hlType"] = 0;
	$g_defaultOptionValues["hlLinkWordNameType"] = "";
	$g_defaultOptionValues["hlLinkWordText"] = "";
	$g_defaultOptionValues["hlTitleField"] = "";
	$g_defaultOptionValues["highlightSearchResults"] = false;
	$g_defaultOptionValues["HTML5InuptType"] = "text";
//	I
	$g_defaultOptionValues["Index"] = 0;
	$g_defaultOptionValues["InitialYearFactor"] = 100;
	$g_defaultOptionValues["ImageHeight"] = 0;
	$g_defaultOptionValues["ImageWidth"] = 0;
	//$g_defaultOptionValues["import"] = false;
	$g_defaultOptionValues["inlineAdd"] = false;
	$g_defaultOptionValues["inlineAddFields"] = array();
	$g_defaultOptionValues["inlineEdit"] = false;
	$g_defaultOptionValues["updateSelected"] = false;
	$g_defaultOptionValues["inlineEditFields"] = array();
	$g_defaultOptionValues["isDisplayLoading"] = false;
	$g_defaultOptionValues["tableType"] = "";
	$g_defaultOptionValues["IsRequired"] = false;
	$g_defaultOptionValues["insertNull"] = false;
	$g_defaultOptionValues["isResizeColumns"] = false;
	$g_defaultOptionValues["isSeparate"] = false;
	$g_defaultOptionValues["UpdateLatLng"] = false;
	$g_defaultOptionValues["isUseAjaxSuggest"] = false;
	$g_defaultOptionValues["isUseAudio"] = false;
	$g_defaultOptionValues["isUseFieldsMaps"] = false;
	$g_defaultOptionValues["isUseTimeForSearch"] = false;
	$g_defaultOptionValues["isUseToolTips"] = false;
	$g_defaultOptionValues["isUseVideo"] = false;
	$g_defaultOptionValues["listGridLayout"] = 0;
	$g_defaultOptionValues["isExistTotalFields"] = false;
	$g_defaultOptionValues["isViewPagePDFFitToPage"] = 1;
	$g_defaultOptionValues["isPrinterPagePDFFitToPage"] = 1;
	$g_defaultOptionValues["isLandscapeViewPDFOrientation"] = 0;
	$g_defaultOptionValues["isLandscapePrinterPagePDFOrientation"] = 0;
	$g_defaultOptionValues["isPrinterPagePDF"] = false;
	$g_defaultOptionValues["isViewPagePDF"] = false;
	$g_defaultOptionValues["isSQLExpression"] = false;
	$g_defaultOptionValues["isPrinterPageFitToPage"] = 1;
//	J
//	K
	$g_defaultOptionValues["Keys"] = array();
//	L
	$g_defaultOptionValues["Label"] = "";
	$g_defaultOptionValues["LookupConnId"] = "";
	$g_defaultOptionValues["LastYearFactor"] = 10;
	$g_defaultOptionValues["LCType"] = LCT_DROPDOWN;
	$g_defaultOptionValues["listPageId"] = "";
	$g_defaultOptionValues["addPageId"] = "";
	$g_defaultOptionValues["LinkField"] = "";
	$g_defaultOptionValues["LinkFieldType"] = 0;
	$g_defaultOptionValues["LinkPrefix"] = "";
	$g_defaultOptionValues["list"] = false;
	$g_defaultOptionValues["listAjax"] = false;

	$g_defaultOptionValues["locking"] = false;
	$g_defaultOptionValues["LookupDesc"] = false;
	$g_defaultOptionValues["LookupOrderBy"] = "";
	$g_defaultOptionValues["LookupTable"] = "";
	$g_defaultOptionValues["LookupType"] = 0;
	$g_defaultOptionValues["LookupUnique"] = false;
	$g_defaultOptionValues["LookupValues"] = array();
	$g_defaultOptionValues["LookupWhere"] = "";
	$g_defaultOptionValues["LookupWhereCode"] = false;
//	M
	$g_defaultOptionValues["mainTableOwnerID"] = "";
	$g_defaultOptionValues["mapData"] = array();
	$g_defaultOptionValues["masterListFields"] = array();
	$g_defaultOptionValues["maxFileSize"] = null;
	$g_defaultOptionValues["maxImageHeight"] = null;
	$g_defaultOptionValues["maxImageWidth"] = null;
	$g_defaultOptionValues["maxNumberOfFiles"] = 1;
	$g_defaultOptionValues["maxTotalFilesSize"] = null;
	$g_defaultOptionValues["moveNext"] = "";
	$g_defaultOptionValues["Multiselect"] = false;
//	N
	$g_defaultOptionValues["NCSearch"] = false;
	$g_defaultOptionValues["NeedEncode"] = false;
	$g_defaultOptionValues["NewSize"] = 0;
	$g_defaultOptionValues["noRecordsFirstPage"] = false;
	$g_defaultOptionValues["nSecOptions"] = ADVSECURITY_NONE;
	$g_defaultOptionValues["NumberOfChars"] = 0;
	$g_defaultOptionValues["numberOfVisibleItems"] = 10;
	$g_defaultOptionValues["nViewPagePDFScale"] = 100;
	$g_defaultOptionValues["nPrinterPagePDFScale"] = 100;
	$g_defaultOptionValues["nPrinterPageScale"] = 100;
	$g_defaultOptionValues["nPrinterPDFSplitRecords"] = 0;
	$g_defaultOptionValues["nPrinterSplitRecords"] = 0;


//	O
	$g_defaultOptionValues["OriginalTable"] = "";
	$g_defaultOptionValues["orderindexes"] = array();
	$g_defaultOptionValues["OwnerID"] = 0;
	$g_defaultOptionValues["ownerTable"] = "";
	$g_defaultOptionValues["OraSequenceName"] = "";
//	P
	$g_defaultOptionValues["pageSize"] = 0;
	$g_defaultOptionValues["panelSearchFields"] = array();
	$g_defaultOptionValues["parentFilterField"] = "";
	$g_defaultOptionValues["printFriendly"] = false;
	$g_defaultOptionValues["printFields"] = array();
	$g_defaultOptionValues["printGridLayout"] = 0;
	$g_defaultOptionValues["printReportLayout"] = 0;
	$g_defaultOptionValues["printerPageOrientation"] = 0;
//	Q
//	R
	$g_defaultOptionValues["recsLimit"] = 0;
	$g_defaultOptionValues["recsPerRowList"] = 1;
	$g_defaultOptionValues["recsPerRowPrint"] = 1;

	$g_defaultOptionValues["ResizeImage"] = false;
	$g_defaultOptionValues["RewindEnabled"] = false;
	$g_defaultOptionValues["requiredSearchFields"] = array();
	$g_defaultOptionValues["reportPrintGroupsPerPage"] = 3;
	$g_defaultOptionValues["reportPrintPDFGroupsPerPage"] = 0;

//	S
	$g_defaultOptionValues["searchFields"] = false;
	$g_defaultOptionValues["searchPanelOptions"] = array();
	$g_defaultOptionValues["SelectSize"] = 1;
	$g_defaultOptionValues["selectExportDelimiter"] = false;
	$g_defaultOptionValues["selectExportFields"] = false;
	$g_defaultOptionValues["searchIsRequiredForFilters"] = false;
	$g_defaultOptionValues["searchOptionsList"] = array();
	$g_defaultOptionValues["ShortName"] = "";
	$g_defaultOptionValues["shortTableName"] = "";
	$g_defaultOptionValues["showAddInPopup"] = false;
	$g_defaultOptionValues["ShowCustomExpr"] = false;
	$g_defaultOptionValues["showEditInPopup"] = false;
	$g_defaultOptionValues["ShowFileSize"] = false;
	$g_defaultOptionValues["DisplayPDF"] = false;
	$g_defaultOptionValues["ShowIcon"] = false;
	$g_defaultOptionValues["showSearchPanel"] = false;
	$g_defaultOptionValues["showSimpleSearchOptions"] = false;
	$g_defaultOptionValues["ShowThumbnail"] = false;
	$g_defaultOptionValues["ShowTime"] = false;
	$g_defaultOptionValues["showViewInPopup"] = false;
	$g_defaultOptionValues["showCollapsed"] = false;
	$g_defaultOptionValues["showWithNoRecords"] = false;
	$g_defaultOptionValues["SimpleAdd"] = false;
	$g_defaultOptionValues["ShowListOfThumbnails"] = false;
	$g_defaultOptionValues["sortValueType"] = SORT_BY_DISP_VALUE;
	$g_defaultOptionValues["sqlFrom"] = "";
	$g_defaultOptionValues["sqlHead"] = "";
	$g_defaultOptionValues["sqlTail"] = "";
	$g_defaultOptionValues["sqlWhereExpr"] = "";
	$g_defaultOptionValues["sqlquery"] = null;
	$g_defaultOptionValues["strField"] = "";
	$g_defaultOptionValues["strFilename"] = "";
	$g_defaultOptionValues["strName"] = "";
	$g_defaultOptionValues["strOrderBy"] = "";
	$g_defaultOptionValues["StrThumbnail"] = "";
	$g_defaultOptionValues["strSortControlSettingsJSON"] = "";
	$g_defaultOptionValues["strClickActionJSON"] = "";
	$g_defaultOptionValues["ThumbnailSize"] = 0;
	$g_defaultOptionValues["scrollGridBody"] = false;
	$g_defaultOptionValues["fileStorageProvider"] = 0;
	$g_defaultOptionValues["googleDriveFolder"] = "";

//	T
	$g_defaultOptionValues["totalsFields"] = array();
	$g_defaultOptionValues["ThumbHeight"] = 72;
	$g_defaultOptionValues["ThumbWidth"] = 72;
	$g_defaultOptionValues["truncateText"] = false;
//	U
	$g_defaultOptionValues["UploadFolder"] = "";
	$g_defaultOptionValues["UploadCodeExpression"] = false;
	$g_defaultOptionValues["UseCategory"] = false;
	$g_defaultOptionValues["UseRTE"] = false;
	$g_defaultOptionValues["UseTimestamp"] = false;
//	V
	$g_defaultOptionValues["validateAs"] = array();
	$g_defaultOptionValues["videoHeight"] = 200;
	$g_defaultOptionValues["videoWidth"] = 300;
	$g_defaultOptionValues["videoTitleField"] = "";
	$g_defaultOptionValues["view"] = false;
	$g_defaultOptionValues["ViewFormat"] = "";
//	W
	$g_defaultOptionValues["warnLeavingPages"] = false;
	$g_defaultOptionValues["weekdays"] = "";
	$g_defaultOptionValues["weekdayMessage"] = array();
//	X
//	Y
//	Z
$g_defaultOptionValues["groupChart"] = false;
$g_defaultOptionValues["chartLabelInterval"] = 0;
$g_defaultOptionValues["chartSeries"] = array();



//	A
	$g_settingsType["Absolute"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["acceptFileTypes"] = SETTING_TYPE_EDIT;
	$g_settingsType["acceptFileTypesHtml"] = SETTING_TYPE_EDIT;
	$g_settingsType["AllowToAdd"] = SETTING_TYPE_EDIT;
	$g_settingsType["autoCompleteFields"] = SETTING_TYPE_EDIT;
	$g_settingsType["autoCompleteFieldsOnEdit"] = SETTING_TYPE_EDIT;
	$g_settingsType["AutoInc"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["audioTitleField"] = SETTING_TYPE_VIEW;
	$g_settingsType["autoUpload"] = SETTING_TYPE_EDIT;
	$g_settingsType["autoUpdatable"] = SETTING_TYPE_EDIT;
//	B
	$g_settingsType["bInlineAdd"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["bInlineEdit"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["bUpdateSelected"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["bIsEncrypted"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["bListPage"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["bPrinterPage"] = SETTING_TYPE_GLOBAL;
//	C
	$g_settingsType["CompatibilityMode"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["categoryFields"] = SETTING_TYPE_EDIT;
	$g_settingsType["controlWidth"] = SETTING_TYPE_EDIT;
	$g_settingsType["CreateThumbnail"] = SETTING_TYPE_EDIT;
	$g_settingsType["CustomDisplay"] = SETTING_TYPE_EDIT;
//	D
	$g_settingsType["DateEditType"] = SETTING_TYPE_EDIT;
	$g_settingsType["DecimalDigits"] = SETTING_TYPE_VIEW;
	$g_settingsType["DeleteAssociatedFile"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["denyDuplicates"] = SETTING_TYPE_EDIT;
	$g_settingsType["DependentLookups"] = SETTING_TYPE_EDIT;
	$g_settingsType["DisplayField"] = SETTING_TYPE_EDIT;
//	E
	$g_settingsType["EditFormat"] = SETTING_TYPE_EDIT;
	$g_settingsType["EditParams"] = SETTING_TYPE_EDIT;
//	F
	$g_settingsType["fieldIsVideoUrl"] = SETTING_TYPE_VIEW;
	$g_settingsType["fieldIsImageUrl"] = SETTING_TYPE_VIEW;
	$g_settingsType["FieldType"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["FieldPermissions"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["Filename"] = SETTING_TYPE_VIEW;
	$g_settingsType["FormatTimeAttrs"] = SETTING_TYPE_EDIT;
	$g_settingsType["freeInput"] = SETTING_TYPE_EDIT;
	$g_settingsType["FullName"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["fieldEvents"] = SETTING_TYPE_EDIT;
	$g_settingsType["fieldViewEvents"] = SETTING_TYPE_VIEW;
//	G
	$g_settingsType["GoodName"] = SETTING_TYPE_GLOBAL;
//	H
	$g_settingsType["HorizontalLookup"] = SETTING_TYPE_EDIT;
	$g_settingsType["hlNewWindow"] = SETTING_TYPE_VIEW;
	$g_settingsType["hlType"] = SETTING_TYPE_VIEW;
	$g_settingsType["hlLinkWordNameType"] = SETTING_TYPE_VIEW;
	$g_settingsType["hlLinkWordText"] = SETTING_TYPE_VIEW;
	$g_settingsType["hlTitleField"] = SETTING_TYPE_VIEW;
	$g_settingsType["HTML5InuptType"] = SETTING_TYPE_EDIT;
//	I
	$g_settingsType["Index"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["InitialYearFactor"] = SETTING_TYPE_EDIT;
	$g_settingsType["ImageHeight"] = SETTING_TYPE_VIEW;
	$g_settingsType["ImageWidth"] = SETTING_TYPE_VIEW;
	$g_settingsType["insertNull"] = SETTING_TYPE_EDIT;
	$g_settingsType["IsRequired"] = SETTING_TYPE_EDIT;
	$g_settingsType["isSeparate"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["UpdateLatLng"] = SETTING_TYPE_EDIT;
//	J
//	K
//	L
	$g_settingsType["Label"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["LastYearFactor"] = SETTING_TYPE_EDIT;
	$g_settingsType["LCType"] = SETTING_TYPE_EDIT;
	$g_settingsType["listPageId"] = SETTING_TYPE_EDIT;
	$g_settingsType["addPageId"] = SETTING_TYPE_EDIT;
	$g_settingsType["LinkField"] = SETTING_TYPE_EDIT;
	$g_settingsType["LinkFieldType"] = SETTING_TYPE_EDIT;
	$g_settingsType["LinkPrefix"] = SETTING_TYPE_VIEW;
	$g_settingsType["LookupConnId"] = SETTING_TYPE_EDIT;
	$g_settingsType["LookupDesc"] = SETTING_TYPE_EDIT;
	$g_settingsType["LookupOrderBy"] = SETTING_TYPE_EDIT;
	$g_settingsType["LookupTable"] = SETTING_TYPE_EDIT;
	$g_settingsType["LookupType"] = SETTING_TYPE_EDIT;
	$g_settingsType["LookupUnique"] = SETTING_TYPE_EDIT;
	$g_settingsType["LookupValues"] = SETTING_TYPE_EDIT;
	$g_settingsType["LookupWhere"] = SETTING_TYPE_EDIT;
	$g_settingsType["LookupWhereCode"] = SETTING_TYPE_EDIT;
//	M
	$g_settingsType["mapData"] = SETTING_TYPE_VIEW;
	$g_settingsType["maxFileSize"] = SETTING_TYPE_EDIT;
	$g_settingsType["maxImageHeight"] = SETTING_TYPE_EDIT;
	$g_settingsType["maxImageWidth"] = SETTING_TYPE_EDIT;
	$g_settingsType["maxNumberOfFiles"] = SETTING_TYPE_EDIT;
	$g_settingsType["maxTotalFilesSize"] = SETTING_TYPE_EDIT;
	$g_settingsType["Multiselect"] = SETTING_TYPE_EDIT;
//	N
	$g_settingsType["nCols"] = SETTING_TYPE_EDIT;
	$g_settingsType["NeedEncode"] = SETTING_TYPE_VIEW;
	$g_settingsType["NewSize"] = SETTING_TYPE_EDIT;
	$g_settingsType["nRows"] = SETTING_TYPE_EDIT;
	$g_settingsType["nSecOptions"] = ADVSECURITY_NONE;
	$g_settingsType["NumberOfChars"] = SETTING_TYPE_VIEW;
//	O
	$g_settingsType["ownerTable"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["OraSequenceName"] = SETTING_TYPE_GLOBAL;
//	P
//	Q
//	R
	$g_settingsType["ResizeImage"] = SETTING_TYPE_EDIT;
	$g_settingsType["RewindEnabled"] = SETTING_TYPE_VIEW;
//	S
	$g_settingsType["SelectSize"] = SETTING_TYPE_EDIT;
	$g_settingsType["ShowCustomExpr"] = SETTING_TYPE_VIEW;
	$g_settingsType["ShowFileSize"] = SETTING_TYPE_VIEW;
	$g_settingsType["DisplayPDF"] = SETTING_TYPE_VIEW;
	$g_settingsType["ShowIcon"] = SETTING_TYPE_VIEW;
	$g_settingsType["ShowThumbnail"] = SETTING_TYPE_VIEW;
	$g_settingsType["ShowTime"] = SETTING_TYPE_EDIT;
	$g_settingsType["SimpleAdd"] = SETTING_TYPE_EDIT;
	$g_settingsType["ShowListOfThumbnails"] = SETTING_TYPE_VIEW;
	$g_settingsType["strField"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["strFilename"] = SETTING_TYPE_VIEW;
	$g_settingsType["filterTotalFields"] = '';
	$g_settingsType["strEditMask"] = SETTING_TYPE_EDIT;
	$g_settingsType["strName"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["StrThumbnail"] = SETTING_TYPE_EDIT;
	$g_settingsType["fileStorageProvider"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["googleDriveFolder"] = SETTING_TYPE_GLOBAL;
//	T
	$g_settingsType["ThumbnailSize"] = SETTING_TYPE_EDIT;
	$g_settingsType["ThumbHeight"] = SETTING_TYPE_VIEW;
	$g_settingsType["ThumbWidth"] = SETTING_TYPE_VIEW;
	$g_settingsType["truncateText"] = SETTING_TYPE_VIEW;
	$g_settingsType["timeFormatData"] = SETTING_TYPE_VIEW;
//	U
	$g_settingsType["UploadFolder"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["UploadCodeExpression"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["UseCategory"] = SETTING_TYPE_EDIT;
	$g_settingsType["UseRTE"] = SETTING_TYPE_EDIT;
	$g_settingsType["UseTimestamp"] = SETTING_TYPE_EDIT;
//	V
	$g_settingsType["validateAs"] = SETTING_TYPE_EDIT;
	$g_settingsType["videoHeight"] = SETTING_TYPE_VIEW;
	$g_settingsType["videoWidth"] = SETTING_TYPE_VIEW;
	$g_settingsType["videoTitleField"] = SETTING_TYPE_VIEW;
	$g_settingsType["ViewFormat"] = SETTING_TYPE_VIEW;

	$g_settingsType["multipleImgMode"] = SETTING_TYPE_VIEW;
	$g_settingsType["maxImages"] = SETTING_TYPE_VIEW;
	$g_settingsType["showGallery"] = SETTING_TYPE_VIEW;
	$g_settingsType["galleryMode"] = SETTING_TYPE_VIEW;
	$g_settingsType["captionMode"] = SETTING_TYPE_VIEW;
	$g_settingsType["captionField"] = SETTING_TYPE_VIEW;
	$g_settingsType["imageBorder"] = SETTING_TYPE_VIEW;
	$g_settingsType["imageFullWidth"] = SETTING_TYPE_VIEW;

	$g_settingsType["weekdays"] = SETTING_TYPE_EDIT;
	$g_settingsType["weekdayMessage"] = SETTING_TYPE_EDIT;

?>