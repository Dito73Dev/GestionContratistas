<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

//	CSRF protection
if( !isPostRequest() )
	return;

if(!isLogged())
{ 
	return;
}
if( !Security::isAdmin() )
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "contractor_master";
$nonAdminTablesArr[] = "tipo_docidentidad";
$nonAdminTablesArr[] = "tipo_banco";
$nonAdminTablesArr[] = "tipo_cta_banco";
$nonAdminTablesArr[] = "tipo_regimen";
$nonAdminTablesArr[] = "tparam_fondosalud";
$nonAdminTablesArr[] = "tparam_fondopension";
$nonAdminTablesArr[] = "tparam_cajacomp";
$nonAdminTablesArr[] = "tparam_tipo_ct_arl";
$nonAdminTablesArr[] = "tparam_genero";
$nonAdminTablesArr[] = "tparam_discapacidad";
$nonAdminTablesArr[] = "tparam_sn";
$nonAdminTablesArr[] = "q_divipola";
$nonAdminTablesArr[] = "dependencia";
$nonAdminTablesArr[] = "dependencias_001";
$nonAdminTablesArr[] = "contrato";
$nonAdminTablesArr[] = "interventor_periodos";
$nonAdminTablesArr[] = "contractor_master_signature";
$nonAdminTablesArr[] = "informe_intersup_estado";
$nonAdminTablesArr[] = "contractor_master_Chart_genero";
$nonAdminTablesArr[] = "contractor_master_view";
$nonAdminTablesArr[] = "contractor_master_chart_eps";
$nonAdminTablesArr[] = "contractor_master_chart_fondopension";
$nonAdminTablesArr[] = "Dashboard";
$nonAdminTablesArr[] = "informe_intersup_contratista";
$nonAdminTablesArr[] = "informe_intersup_oe_contratista";
$nonAdminTablesArr[] = "tparam_sn_oe";
$nonAdminTablesArr[] = "informe_intersup_anexos_contratista";
$nonAdminTablesArr[] = "informe_intersup_anexos_tipo";
$nonAdminTablesArr[] = "global_users";
$nonAdminTablesArr[] = "hoja_ruta_2020_trpn";
$nonAdminTablesArr[] = "q_bandejaentrada_supervisores";
$nonAdminTablesArr[] = "q_genera_informe";
$nonAdminTablesArr[] = "nomina_cont_meses";
$nonAdminTablesArr[] = "informe_intersup_cxc";
$nonAdminTablesArr[] = "informe_intersup_4";
$nonAdminTablesArr[] = "informe_intersup_plan_pagos";
$nonAdminTablesArr[] = "q_inf_plandepagos";
$nonAdminTablesArr[] = "q_info_cxc";
$nonAdminTablesArr[] = "hoja_ruta_2020_tracking";
$nonAdminTablesArr[] = "hoja_ruta_event_type";
$nonAdminTablesArr[] = "contractor_master_jur";
$nonAdminTablesArr[] = "hoja_ruta_2020_trpn_jur";
$nonAdminTablesArr[] = "interventor_interno";
$nonAdminTablesArr[] = "contrato_tipo_unidad";
$nonAdminTablesArr[] = "hoja_ruta_tparam_conceptos";
$nonAdminTablesArr[] = "q_consulta_op";
$nonAdminTablesArr[] = "contrato_attached";
$nonAdminTablesArr[] = "contrato_attached_type";
$nonAdminTablesArr[] = "global_documents";
$nonAdminTablesArr[] = "hoja_ruta_2020_files";
$nonAdminTablesArr[] = "informe_intersup_oe";
$nonAdminTablesArr[] = "tparam_ciiu";
$nonAdminTablesArr[] = "tparam_reponsabilidades";
$nonAdminTablesArr[] = "tparam_tipopago";
$nonAdminTablesArr[] = "tparam_naturaleza";
$nonAdminTablesArr[] = "informe_intersup_anexos_contratista_o";
$nonAdminTablesArr[] = "q_001_dashboard";

$ug_connection = $cman->getForUserGroups();

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));

$wGroupTableName = $ug_connection->addTableWrappers( "gestioncontratistas_ver_103_uggroups" );
	
switch(postvalue("a"))
{
	case "add":
		$sql = "insert into ". $wGroupTableName ." (". $ug_connection->addFieldWrappers( "Label" ) .")"
			." values (". $ug_connection->prepareString( postvalue("name") ). ")";		
		$ug_connection->exec( $sql );

		$sql = "select max(". $ug_connection->addFieldWrappers( "GroupID") .") from ". $wGroupTableName;
		$data = $ug_connection->query( $sql )->fetchNumeric();
		
		echo printJSON( array('success' => true, 'id' => $data[0]) );
		break;
		
	case "del":
		$sql = "delete from ". $wGroupTableName ." where ". $ug_connection->addFieldWrappers("GroupID") ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		$sql = "delete from ". $ug_connection->addTableWrappers( "gestioncontratistas_ver_103_ugrights" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );

		// delete records from ugmembers table	
		$dataSource = Security::getUgMembersDatasource();
		$dc = new DsCommand();
		$dc->filter = DataCondition::FieldEquals( "GroupID", postvalue_number("id") ); 
		$dataSource->deleteSingle( $dc, false );
		
		echo printJSON( array('success' => true) );
		break;
		
	case "rename":
		$sql = "update ". $wGroupTableName  
			." set ". $ug_connection->addFieldWrappers( "Label" ) ."=". $ug_connection->prepareString( postvalue("name") )
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
	
	// @deprecated 
	// see ug_rights
	case 'saveRights':
		$error = '';
		if( postvalue('state') )
		{	
			$allRights = array();
			$sql = "select ". $ug_connection->addFieldWrappers( "GroupID" ) 
				.", ". $ug_connection->addFieldWrappers( "TableName" ) 
				.", ". $ug_connection->addFieldWrappers( "AccessMask" ) ." from ". $wGroupTableName;
			
			$qResult = $ug_connection->query( $sql );
			// don't use fetchAssoc! because of ORACLE and PostgreSQL
			while( $rightsRow = $qResult->fetchNumeric() )
			{
				$allRights[] = $rightsRow;
			}
			
			$wRightsTableName = $ug_connection->addTableWrappers( "gestioncontratistas_ver_103_ugrights" );
			
			$delGroupId = 0;
			$state = my_json_decode( postvalue('state') );
			// delete all extra permissions from db
			foreach($allRights as $i => $rightValue)
			{
				$groupIDInt = (int) $rightValue[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if( !array_key_exists($groupIDInt, $state) )
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt;
					$ug_connection->exec( $sql );
				}
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt 
						." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=".$ug_connection->prepareString( html_special_decode($data[1]) );				
					$ug_connection->exec( $sql );
				}
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if( !array_key_exists($table, $realTables) )
						continue;
					
					$ins = true;
					foreach($allRights as $i => $rightValue)
					{	
						if($rightValue[0] == $groupId && $rightValue[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
							{
								$sql ="update". $wRightsTableName 
									." set ". $ug_connection->addFieldWrappers( "AccessMask" ) ."=". $ug_connection->prepareString( $mask )
									." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupId 
									." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=". $ug_connection->prepareString( html_special_decode($realTables[$table]) );
								$ug_connection->exec( $sql );
							}
						}
					}
					if($ins)
					{
						$sql = "insert into ". $wRightsTableName
							." (". $ug_connection->addFieldWrappers( "TableName" ) 
							.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
							.", ". $ug_connection->addFieldWrappers( "AccessMask" ) .") " 
							."values (". $ug_connection->prepareString(html_special_decode($realTables[$table])) .", ". $groupId .", ". $ug_connection->prepareString($mask)  .")";
						$ug_connection->exec( $sql );
					}
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo printJSON($result);
}