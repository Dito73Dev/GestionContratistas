<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_hoja_ruta_2020_trpn  extends eventsBase
{
	function __construct()
	{
	// fill list of events


		$this->events["BeforeMoveNextList"]=true;

		$this->events["AfterEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, $recordId, $pageObject)
{

		// estado de la solicitud

if ($data['evento_type_id_fk'] != 20){
$pageObject->hideItem("grid_edit", $recordId);  
}



// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		$data = array();
$data["hr_id_fk"] = $values['hr_id'];
$data["hr_asunto"] = $values['hr_asunto'];
$data["sys_user"] = $values['sys_user'];
$data["hr_valor"] = $values['hr_valor'];
$data["hr_fechaingreso"] = $values['hr_fechaingreso'];
$data["not_user"] = $values['not_user'];
$data["not_date"] = $values['not_date'];
$data["not_mail"] = $values['not_mail'];
$data["not_msg"] = $values['not_msg'];
$data["evento_type_id_fk"] = $values['evento_type_id_fk'];
$data["user_from"] = $values['user_from'];
$data["last_act_user"] = $values['last_act_user'];
$data["tercero_email"] = $values['tercero_email'];
DB::Insert("dbct.hoja_ruta_2020_tracking", $data );

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
