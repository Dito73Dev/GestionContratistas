<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers(Security::loginTable());
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tbldbct_at_localhost__contractor_master;
	var $tbldbct_at_localhost__contrato;
	var $tbldbct_at_localhost__contrato_attached;
	var $tbldbct_at_localhost__contrato_attached_type;
	var $tbldbct_at_localhost__contrato_estados;
	var $tbldbct_at_localhost__contrato_forma_pago;
	var $tbldbct_at_localhost__contrato_oe;
	var $tbldbct_at_localhost__contrato_tipo;
	var $tbldbct_at_localhost__contrato_tipo_unidad;
	var $tbldbct_at_localhost__gestioncontratistas_ver_103_audit;
	var $tbldbct_at_localhost__gestioncontratistas_ver_103_locking;
	var $tbldbct_at_localhost__gestioncontratistas_ver_103_uggroups;
	var $tbldbct_at_localhost__gestioncontratistas_ver_103_ugmembers;
	var $tbldbct_at_localhost__gestioncontratistas_ver_103_ugrights;
	var $tbldbct_at_localhost__global_documents;
	var $tbldbct_at_localhost__hoja_ruta_2020_tracking;
	var $tbldbct_at_localhost__hoja_ruta_event_type;
	var $tbldbct_at_localhost__informe_intersup;
	var $tbldbct_at_localhost__informe_intersup_anexos;
	var $tbldbct_at_localhost__informe_intersup_anexos_tipo;
	var $tbldbct_at_localhost__informe_intersup_cxc;
	var $tbldbct_at_localhost__informe_intersup_estado;
	var $tbldbct_at_localhost__informe_intersup_oe;
	var $tbldbct_at_localhost__informe_intersup_plan_pagos;
	var $tbldbct_at_localhost__informe_intersup_plan_pagos_st;
	var $tbldbct_at_localhost__interventor_interno;
	var $tbldbct_at_localhost__interventor_periodos;
	var $tbldbct_at_localhost__nomina_cont_meses;
	var $tbldbct_at_localhost__q_001_dashboard;
	var $tbldbct_at_localhost__q_bandejaentrada_supervisores;
	var $tbldbct_at_localhost__q_consulta_op;
	var $tbldbct_at_localhost__q_genera_informe;
	var $tbldbct_at_localhost__q_inf_plandepagos;
	var $tbldbct_at_localhost__q_info_cxc;
	var $tbldbct_at_localhost__tipo_banco;
	var $tbldbct_at_localhost__tipo_cta_banco;
	var $tbldbct_at_localhost__tipo_docidentidad;
	var $tbldbct_at_localhost__tipo_regimen;
	var $tbldbct_at_localhost__tparam_cajacomp;
	var $tbldbct_at_localhost__tparam_ciiu;
	var $tbldbct_at_localhost__tparam_discapacidad;
	var $tbldbct_at_localhost__tparam_fondopension;
	var $tbldbct_at_localhost__tparam_fondosalud;
	var $tbldbct_at_localhost__tparam_genero;
	var $tbldbct_at_localhost__tparam_habilita;
	var $tbldbct_at_localhost__tparam_naturaleza;
	var $tbldbct_at_localhost__tparam_reponsabilidades;
	var $tbldbct_at_localhost__tparam_sn;
	var $tbldbct_at_localhost__tparam_sn_oe;
	var $tbldbct_at_localhost__tparam_tipo_ct_002;
	var $tbldbct_at_localhost__tparam_tipo_ct_arl;
	var $tbldbct_at_localhost__tparam_tipopago;
	var $tbldbusers_at_127_0_0_1__global_users;
	var $tbldbusers_at_127_0_0_1__q_divipola;
	var $tbledl_at_127_0_0_1__dependencia;
	var $tbledl_at_127_0_0_1__dependencias_001;
	var $tblcontratacion_at_172_18_0_115__hoja_ruta_2020;
	var $tblcontratacion_at_172_18_0_115__hoja_ruta_2020_files;
	var $tblcontratacion_at_172_18_0_115__hoja_ruta_event_type;
	var $tblcontratacion_at_172_18_0_115__hoja_ruta_tparam_conceptos;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "contractor_master", "varname" => "dbct_at_localhost__contractor_master", "altvarname" => "contractor_master", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato", "varname" => "dbct_at_localhost__contrato", "altvarname" => "contrato", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato_attached", "varname" => "dbct_at_localhost__contrato_attached", "altvarname" => "contrato_attached", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato_attached_type", "varname" => "dbct_at_localhost__contrato_attached_type", "altvarname" => "contrato_attached_type", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato_estados", "varname" => "dbct_at_localhost__contrato_estados", "altvarname" => "contrato_estados", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato_forma_pago", "varname" => "dbct_at_localhost__contrato_forma_pago", "altvarname" => "contrato_forma_pago", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato_oe", "varname" => "dbct_at_localhost__contrato_oe", "altvarname" => "contrato_oe", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato_tipo", "varname" => "dbct_at_localhost__contrato_tipo", "altvarname" => "contrato_tipo", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato_tipo_unidad", "varname" => "dbct_at_localhost__contrato_tipo_unidad", "altvarname" => "contrato_tipo_unidad", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "gestioncontratistas_ver_103_audit", "varname" => "dbct_at_localhost__gestioncontratistas_ver_103_audit", "altvarname" => "gestioncontratistas_ver_103_audit", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "gestioncontratistas_ver_103_locking", "varname" => "dbct_at_localhost__gestioncontratistas_ver_103_locking", "altvarname" => "gestioncontratistas_ver_103_locking", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "gestioncontratistas_ver_103_uggroups", "varname" => "dbct_at_localhost__gestioncontratistas_ver_103_uggroups", "altvarname" => "gestioncontratistas_ver_103_uggroups", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "gestioncontratistas_ver_103_ugmembers", "varname" => "dbct_at_localhost__gestioncontratistas_ver_103_ugmembers", "altvarname" => "gestioncontratistas_ver_103_ugmembers", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "gestioncontratistas_ver_103_ugrights", "varname" => "dbct_at_localhost__gestioncontratistas_ver_103_ugrights", "altvarname" => "gestioncontratistas_ver_103_ugrights", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_documents", "varname" => "dbct_at_localhost__global_documents", "altvarname" => "global_documents", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "hoja_ruta_2020_tracking", "varname" => "dbct_at_localhost__hoja_ruta_2020_tracking", "altvarname" => "hoja_ruta_2020_tracking", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "hoja_ruta_event_type", "varname" => "dbct_at_localhost__hoja_ruta_event_type", "altvarname" => "hoja_ruta_event_type", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "informe_intersup", "varname" => "dbct_at_localhost__informe_intersup", "altvarname" => "informe_intersup", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "informe_intersup_anexos", "varname" => "dbct_at_localhost__informe_intersup_anexos", "altvarname" => "informe_intersup_anexos", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "informe_intersup_anexos_tipo", "varname" => "dbct_at_localhost__informe_intersup_anexos_tipo", "altvarname" => "informe_intersup_anexos_tipo", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "informe_intersup_cxc", "varname" => "dbct_at_localhost__informe_intersup_cxc", "altvarname" => "informe_intersup_cxc", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "informe_intersup_estado", "varname" => "dbct_at_localhost__informe_intersup_estado", "altvarname" => "informe_intersup_estado", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "informe_intersup_oe", "varname" => "dbct_at_localhost__informe_intersup_oe", "altvarname" => "informe_intersup_oe", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "informe_intersup_plan_pagos", "varname" => "dbct_at_localhost__informe_intersup_plan_pagos", "altvarname" => "informe_intersup_plan_pagos", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "informe_intersup_plan_pagos_st", "varname" => "dbct_at_localhost__informe_intersup_plan_pagos_st", "altvarname" => "informe_intersup_plan_pagos_st", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "interventor_interno", "varname" => "dbct_at_localhost__interventor_interno", "altvarname" => "interventor_interno", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "interventor_periodos", "varname" => "dbct_at_localhost__interventor_periodos", "altvarname" => "interventor_periodos", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "nomina_cont_meses", "varname" => "dbct_at_localhost__nomina_cont_meses", "altvarname" => "nomina_cont_meses", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_001_dashboard", "varname" => "dbct_at_localhost__q_001_dashboard", "altvarname" => "q_001_dashboard", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_bandejaentrada_supervisores", "varname" => "dbct_at_localhost__q_bandejaentrada_supervisores", "altvarname" => "q_bandejaentrada_supervisores", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_consulta_op", "varname" => "dbct_at_localhost__q_consulta_op", "altvarname" => "q_consulta_op", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_genera_informe", "varname" => "dbct_at_localhost__q_genera_informe", "altvarname" => "q_genera_informe", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_inf_plandepagos", "varname" => "dbct_at_localhost__q_inf_plandepagos", "altvarname" => "q_inf_plandepagos", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_info_cxc", "varname" => "dbct_at_localhost__q_info_cxc", "altvarname" => "q_info_cxc", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tipo_banco", "varname" => "dbct_at_localhost__tipo_banco", "altvarname" => "tipo_banco", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tipo_cta_banco", "varname" => "dbct_at_localhost__tipo_cta_banco", "altvarname" => "tipo_cta_banco", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tipo_docidentidad", "varname" => "dbct_at_localhost__tipo_docidentidad", "altvarname" => "tipo_docidentidad", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tipo_regimen", "varname" => "dbct_at_localhost__tipo_regimen", "altvarname" => "tipo_regimen", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_cajacomp", "varname" => "dbct_at_localhost__tparam_cajacomp", "altvarname" => "tparam_cajacomp", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_ciiu", "varname" => "dbct_at_localhost__tparam_ciiu", "altvarname" => "tparam_ciiu", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_discapacidad", "varname" => "dbct_at_localhost__tparam_discapacidad", "altvarname" => "tparam_discapacidad", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_fondopension", "varname" => "dbct_at_localhost__tparam_fondopension", "altvarname" => "tparam_fondopension", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_fondosalud", "varname" => "dbct_at_localhost__tparam_fondosalud", "altvarname" => "tparam_fondosalud", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_genero", "varname" => "dbct_at_localhost__tparam_genero", "altvarname" => "tparam_genero", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_habilita", "varname" => "dbct_at_localhost__tparam_habilita", "altvarname" => "tparam_habilita", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_naturaleza", "varname" => "dbct_at_localhost__tparam_naturaleza", "altvarname" => "tparam_naturaleza", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_reponsabilidades", "varname" => "dbct_at_localhost__tparam_reponsabilidades", "altvarname" => "tparam_reponsabilidades", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_sn", "varname" => "dbct_at_localhost__tparam_sn", "altvarname" => "tparam_sn", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_sn_oe", "varname" => "dbct_at_localhost__tparam_sn_oe", "altvarname" => "tparam_sn_oe", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_tipo_ct_002", "varname" => "dbct_at_localhost__tparam_tipo_ct_002", "altvarname" => "tparam_tipo_ct_002", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_tipo_ct_arl", "varname" => "dbct_at_localhost__tparam_tipo_ct_arl", "altvarname" => "tparam_tipo_ct_arl", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_tipopago", "varname" => "dbct_at_localhost__tparam_tipopago", "altvarname" => "tparam_tipopago", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_users", "varname" => "dbusers_at_127_0_0_1__global_users", "altvarname" => "global_users", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		$this->lstTables[] = array("name" => "q_divipola", "varname" => "dbusers_at_127_0_0_1__q_divipola", "altvarname" => "q_divipola", "connId" => "dbusers_at_127_0_0_1", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		$this->lstTables[] = array("name" => "dependencia", "varname" => "edl_at_127_0_0_1__dependencia", "altvarname" => "dependencia", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "dependencias_001", "varname" => "edl_at_127_0_0_1__dependencias_001", "altvarname" => "dependencias_001", "connId" => "edl_at_127_0_0_1", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "hoja_ruta_2020", "varname" => "contratacion_at_172_18_0_115__hoja_ruta_2020", "altvarname" => "hoja_ruta_2020", "connId" => "contratacion_at_172_18_0_115", "schema" => "", "connName" => "dbct1 at 127.0.0.1");
		$this->lstTables[] = array("name" => "hoja_ruta_2020_files", "varname" => "contratacion_at_172_18_0_115__hoja_ruta_2020_files", "altvarname" => "hoja_ruta_2020_files", "connId" => "contratacion_at_172_18_0_115", "schema" => "", "connName" => "dbct1 at 127.0.0.1");
		$this->lstTables[] = array("name" => "hoja_ruta_event_type", "varname" => "contratacion_at_172_18_0_115__hoja_ruta_event_type", "altvarname" => "hoja_ruta_event_type", "connId" => "contratacion_at_172_18_0_115", "schema" => "", "connName" => "dbct1 at 127.0.0.1");
		$this->lstTables[] = array("name" => "hoja_ruta_tparam_conceptos", "varname" => "contratacion_at_172_18_0_115__hoja_ruta_tparam_conceptos", "altvarname" => "hoja_ruta_tparam_conceptos", "connId" => "contratacion_at_172_18_0_115", "schema" => "", "connName" => "dbct1 at 127.0.0.1");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>