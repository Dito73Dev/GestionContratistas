<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "dbct_at_localhost" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "dbct_at_localhost";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		$db = &Security::dbProvider();		
		if( $db ) {
			return $db["table"]["connId"];
		}
		return "";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->byId( "dbct_at_localhost" );
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->byId( "dbct_at_localhost" );
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "dbct_at_localhost";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "dbct_at_localhost";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "dbct_at_localhost";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["contractor_master"] = "dbct_at_localhost";
		$connectionsIds["admin_rights"] = "dbct_at_localhost";
		$connectionsIds["admin_members"] = "dbct_at_localhost";
		$connectionsIds["admin_users"] = "dbct_at_localhost";
		$connectionsIds["tipo_docidentidad"] = "dbct_at_localhost";
		$connectionsIds["tipo_banco"] = "dbct_at_localhost";
		$connectionsIds["tipo_cta_banco"] = "dbct_at_localhost";
		$connectionsIds["tipo_regimen"] = "dbct_at_localhost";
		$connectionsIds["tparam_fondosalud"] = "dbct_at_localhost";
		$connectionsIds["tparam_fondopension"] = "dbct_at_localhost";
		$connectionsIds["tparam_cajacomp"] = "dbct_at_localhost";
		$connectionsIds["tparam_tipo_ct_arl"] = "dbct_at_localhost";
		$connectionsIds["tparam_genero"] = "dbct_at_localhost";
		$connectionsIds["tparam_discapacidad"] = "dbct_at_localhost";
		$connectionsIds["tparam_sn"] = "dbct_at_localhost";
		$connectionsIds["q_divipola"] = "dbusers_at_127_0_0_1";
		$connectionsIds["dependencia"] = "edl_at_127_0_0_1";
		$connectionsIds["dependencias_001"] = "edl_at_127_0_0_1";
		$connectionsIds["contrato"] = "dbct_at_localhost";
		$connectionsIds["interventor_periodos"] = "dbct_at_localhost";
		$connectionsIds["contractor_master_signature"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_estado"] = "dbct_at_localhost";
		$connectionsIds["contractor_master_Chart_genero"] = "dbct_at_localhost";
		$connectionsIds["contractor_master_view"] = "dbct_at_localhost";
		$connectionsIds["contractor_master_chart_eps"] = "dbct_at_localhost";
		$connectionsIds["contractor_master_chart_fondopension"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_contratista"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_oe_contratista"] = "dbct_at_localhost";
		$connectionsIds["tparam_sn_oe"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_anexos_contratista"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_anexos_tipo"] = "dbct_at_localhost";
		$connectionsIds["global_users"] = "dbusers_at_127_0_0_1";
		$connectionsIds["hoja_ruta_2020_trpn"] = "contratacion_at_172_18_0_115";
		$connectionsIds["q_bandejaentrada_supervisores"] = "dbct_at_localhost";
		$connectionsIds["q_genera_informe"] = "dbct_at_localhost";
		$connectionsIds["nomina_cont_meses"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_cxc"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_4"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_plan_pagos"] = "dbct_at_localhost";
		$connectionsIds["q_inf_plandepagos"] = "dbct_at_localhost";
		$connectionsIds["q_info_cxc"] = "dbct_at_localhost";
		$connectionsIds["hoja_ruta_2020_tracking"] = "dbct_at_localhost";
		$connectionsIds["hoja_ruta_event_type"] = "contratacion_at_172_18_0_115";
		$connectionsIds["contractor_master_jur"] = "dbct_at_localhost";
		$connectionsIds["hoja_ruta_2020_trpn_jur"] = "contratacion_at_172_18_0_115";
		$connectionsIds["interventor_interno"] = "dbct_at_localhost";
		$connectionsIds["contrato_tipo_unidad"] = "dbct_at_localhost";
		$connectionsIds["hoja_ruta_tparam_conceptos"] = "contratacion_at_172_18_0_115";
		$connectionsIds["q_consulta_op"] = "dbct_at_localhost";
		$connectionsIds["contrato_attached"] = "dbct_at_localhost";
		$connectionsIds["contrato_attached_type"] = "dbct_at_localhost";
		$connectionsIds["global_documents"] = "dbct_at_localhost";
		$connectionsIds["hoja_ruta_2020_files"] = "contratacion_at_172_18_0_115";
		$connectionsIds["informe_intersup_oe"] = "dbct_at_localhost";
		$connectionsIds["tparam_ciiu"] = "dbct_at_localhost";
		$connectionsIds["tparam_reponsabilidades"] = "dbct_at_localhost";
		$connectionsIds["tparam_tipopago"] = "dbct_at_localhost";
		$connectionsIds["tparam_naturaleza"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_anexos_contratista_o"] = "dbct_at_localhost";
		$connectionsIds["q_001_dashboard"] = "dbct_at_localhost";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>