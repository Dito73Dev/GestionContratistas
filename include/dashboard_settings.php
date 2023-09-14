<?php
require_once(getabspath("classes/cipherer.php"));



$tdatadashboard = array();
$tdatadashboard[".ShortName"] = "dashboard";

$tdatadashboard[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" );
$tdatadashboard[".originalPagesByType"] = $tdatadashboard[".pagesByType"];
$tdatadashboard[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$tdatadashboard[".originalPages"] = $tdatadashboard[".pages"];
$tdatadashboard[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdatadashboard[".originalDefaultPages"] = $tdatadashboard[".defaultPages"];


//	field labels
$fieldLabelsdashboard = array();
$pageTitlesdashboard = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdashboard["Spanish"] = array();
	$fieldLabelsdashboard["Spanish"]["contractor_master_chart_eps_contractor_eps"] = "EPS";
	$fieldLabelsdashboard["Spanish"]["contractor_master_chart_eps_qtygen"] = "Q";
	$fieldLabelsdashboard["Spanish"]["contractor_master_chart_fondopension_contractor_fondopensiones"] = "FONDO DE PENSIÓN";
	$fieldLabelsdashboard["Spanish"]["contractor_master_chart_fondopension_qtygen"] = "Q";
	$fieldLabelsdashboard["Spanish"]["contractor_master_Chart_genero_dem_genero"] = "Genero";
	$fieldLabelsdashboard["Spanish"]["contractor_master_Chart_genero_qtygen"] = "Cantidad";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_id"] = "Contractor Id";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_type"] = "Tipo de documento";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_doc_id"] = "Número de documento";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_doc_dv"] = "Contractor Doc Dv";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_pwd"] = "Contractor Pwd";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_image"] = "Foto de perfil";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_name"] = "Nombres";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_lname"] = "Apellidos";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_nombresfull"] = "Contractor Nombresfull";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_enlace_sigep"] = "Enlace Sigep";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_email"] = "Correo electrónico personal";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_email_mincit"] = "Correo electrónico institucional";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_address"] = "Dirección postal ";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_phone"] = "Teléfono fijo";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_mobile"] = "Número celular";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_city"] = "Ciudad de residencia";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_sup_jerarquico"] = "Dirección | Despacho";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_dependencia"] = "Dependencia";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_bank_name"] = "Nombre del banco";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_bank_cta_type"] = "Clase de cuenta";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_bank_cta_number"] = "Número de cuenta";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_iva_regimen"] = "¿Responsable de IVA?";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_sys_update"] = "::";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_sys_user"] = "::";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_sys_date"] = "::";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_sys_level"] = "::";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_sys_status"] = "::";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_sys_last_upd"] = "::";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_groupid"] = "::";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_active"] = "::";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_dependientes"] = "Número de dependientes";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_medicinapre_file"] = "Anexo de medicina prepagada";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_picmonetaria_file"] = "Contractor Picmonetaria File";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_decljur"] = "Anexo declaración juramentada";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_eps"] = "Eps";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_fondopensiones"] = "Fondo pensiones";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_cajacompensacion"] = "Caja compensacion";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_contractor_arl"] = "Arl";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_ubica_dep"] = "Ubica Dep";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_ubica_extension"] = "Extensión";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_dem_genero"] = "Genero";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_dem_ocupacion"] = "Ocupación";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_dem_profesion"] = "Profesión";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_ct_fecha_nacimiento"] = "Fecha de nacimiento";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_ct_nacionalidad"] = "Nacionalidad";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_dem_edad"] = "Dem Edad";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_dem_educacion"] = "Dem Educacion";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_dem_discapacidad"] = "¿ Presenta algúna discapacidad ? ";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_emergencia"] = "En caso de emergencia contactar a:";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_terms_msj"] = "Términos y condiciones";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_terms_acepta"] = "Acepto los términos y condiciones";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_signature"] = "Signature";
	$fieldLabelsdashboard["Spanish"]["contractor_master_view_pin"] = "Pin";
}

/*
//	search fields
$tdatadashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_chart_eps", "field"=>"contractor_eps" );
$tdatadashboard[".searchFields"]["contractor_master_chart_eps_contractor_eps"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_chart_eps", "field"=>"qtygen" );
$tdatadashboard[".searchFields"]["contractor_master_chart_eps_qtygen"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_chart_fondopension", "field"=>"contractor_fondopensiones" );
$tdatadashboard[".searchFields"]["contractor_master_chart_fondopension_contractor_fondopensiones"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_chart_fondopension", "field"=>"qtygen" );
$tdatadashboard[".searchFields"]["contractor_master_chart_fondopension_qtygen"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_Chart_genero", "field"=>"dem_genero" );
$tdatadashboard[".searchFields"]["contractor_master_Chart_genero_dem_genero"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_Chart_genero", "field"=>"qtygen" );
$tdatadashboard[".searchFields"]["contractor_master_Chart_genero_qtygen"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_id" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_type" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_type"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_doc_id" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_doc_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_doc_dv" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_doc_dv"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_pwd" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_pwd"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_image" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_image"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_name" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_lname" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_lname"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_nombresfull" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_nombresfull"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"enlace_sigep" );
$tdatadashboard[".searchFields"]["contractor_master_view_enlace_sigep"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_email" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_email"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_email_mincit" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_email_mincit"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_address" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_address"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_phone" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_phone"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_mobile" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_mobile"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_city" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_city"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_sup_jerarquico" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_sup_jerarquico"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_dependencia" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_dependencia"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"bank_name" );
$tdatadashboard[".searchFields"]["contractor_master_view_bank_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"bank_cta_type" );
$tdatadashboard[".searchFields"]["contractor_master_view_bank_cta_type"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"bank_cta_number" );
$tdatadashboard[".searchFields"]["contractor_master_view_bank_cta_number"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"iva_regimen" );
$tdatadashboard[".searchFields"]["contractor_master_view_iva_regimen"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"sys_update" );
$tdatadashboard[".searchFields"]["contractor_master_view_sys_update"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"sys_user" );
$tdatadashboard[".searchFields"]["contractor_master_view_sys_user"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"sys_date" );
$tdatadashboard[".searchFields"]["contractor_master_view_sys_date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"sys_level" );
$tdatadashboard[".searchFields"]["contractor_master_view_sys_level"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"sys_status" );
$tdatadashboard[".searchFields"]["contractor_master_view_sys_status"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"sys_last_upd" );
$tdatadashboard[".searchFields"]["contractor_master_view_sys_last_upd"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"groupid" );
$tdatadashboard[".searchFields"]["contractor_master_view_groupid"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"active" );
$tdatadashboard[".searchFields"]["contractor_master_view_active"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_dependientes" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_dependientes"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_medicinapre_file" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_medicinapre_file"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_picmonetaria_file" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_picmonetaria_file"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_decljur" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_decljur"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_eps" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_eps"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_fondopensiones" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_fondopensiones"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_cajacompensacion" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_cajacompensacion"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"contractor_arl" );
$tdatadashboard[".searchFields"]["contractor_master_view_contractor_arl"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"ubica_dep" );
$tdatadashboard[".searchFields"]["contractor_master_view_ubica_dep"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"ubica_extension" );
$tdatadashboard[".searchFields"]["contractor_master_view_ubica_extension"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"dem_genero" );
$tdatadashboard[".searchFields"]["contractor_master_view_dem_genero"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"dem_ocupacion" );
$tdatadashboard[".searchFields"]["contractor_master_view_dem_ocupacion"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"dem_profesion" );
$tdatadashboard[".searchFields"]["contractor_master_view_dem_profesion"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"ct_fecha_nacimiento" );
$tdatadashboard[".searchFields"]["contractor_master_view_ct_fecha_nacimiento"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"ct_nacionalidad" );
$tdatadashboard[".searchFields"]["contractor_master_view_ct_nacionalidad"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"dem_edad" );
$tdatadashboard[".searchFields"]["contractor_master_view_dem_edad"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"dem_educacion" );
$tdatadashboard[".searchFields"]["contractor_master_view_dem_educacion"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"dem_discapacidad" );
$tdatadashboard[".searchFields"]["contractor_master_view_dem_discapacidad"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"emergencia" );
$tdatadashboard[".searchFields"]["contractor_master_view_emergencia"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"terms_msj" );
$tdatadashboard[".searchFields"]["contractor_master_view_terms_msj"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"terms_acepta" );
$tdatadashboard[".searchFields"]["contractor_master_view_terms_acepta"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"signature" );
$tdatadashboard[".searchFields"]["contractor_master_view_signature"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"contractor_master_view", "field"=>"pin" );
$tdatadashboard[".searchFields"]["contractor_master_view_pin"] = $dashField;

// all search fields
$tdatadashboard[".allSearchFields"] = array();
$tdatadashboard[".allSearchFields"][] = "contractor_master_chart_eps_contractor_eps";
$tdatadashboard[".allSearchFields"][] = "contractor_master_chart_eps_qtygen";
$tdatadashboard[".allSearchFields"][] = "contractor_master_chart_fondopension_contractor_fondopensiones";
$tdatadashboard[".allSearchFields"][] = "contractor_master_chart_fondopension_qtygen";
$tdatadashboard[".allSearchFields"][] = "contractor_master_Chart_genero_dem_genero";
$tdatadashboard[".allSearchFields"][] = "contractor_master_Chart_genero_qtygen";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_id";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_type";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_doc_id";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_doc_dv";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_pwd";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_image";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_name";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_lname";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_nombresfull";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_enlace_sigep";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_email";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_email_mincit";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_address";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_phone";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_mobile";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_city";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_sup_jerarquico";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_dependencia";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_bank_name";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_bank_cta_type";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_bank_cta_number";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_iva_regimen";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_sys_update";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_sys_user";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_sys_date";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_sys_level";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_sys_status";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_sys_last_upd";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_groupid";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_active";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_dependientes";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_medicinapre_file";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_picmonetaria_file";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_decljur";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_eps";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_fondopensiones";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_cajacompensacion";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_contractor_arl";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_ubica_dep";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_ubica_extension";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_dem_genero";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_dem_ocupacion";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_dem_profesion";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_ct_fecha_nacimiento";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_ct_nacionalidad";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_dem_edad";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_dem_educacion";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_dem_discapacidad";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_emergencia";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_terms_msj";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_terms_acepta";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_signature";
$tdatadashboard[".allSearchFields"][] = "contractor_master_view_pin";

// good like search fields
$tdatadashboard[".googleLikeFields"] = array();
$tdatadashboard[".googleLikeFields"][] = "contractor_master_chart_eps_contractor_eps";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_chart_eps_qtygen";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_chart_fondopension_contractor_fondopensiones";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_chart_fondopension_qtygen";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_Chart_genero_dem_genero";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_Chart_genero_qtygen";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_id";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_type";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_doc_id";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_doc_dv";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_pwd";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_image";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_name";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_lname";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_nombresfull";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_enlace_sigep";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_email";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_email_mincit";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_address";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_phone";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_mobile";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_city";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_sup_jerarquico";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_dependencia";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_bank_name";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_bank_cta_type";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_bank_cta_number";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_iva_regimen";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_sys_update";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_sys_user";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_sys_date";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_sys_level";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_sys_status";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_sys_last_upd";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_groupid";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_active";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_dependientes";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_medicinapre_file";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_picmonetaria_file";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_decljur";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_eps";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_fondopensiones";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_cajacompensacion";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_contractor_arl";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_ubica_dep";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_ubica_extension";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_dem_genero";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_dem_ocupacion";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_dem_profesion";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_ct_fecha_nacimiento";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_ct_nacionalidad";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_dem_edad";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_dem_educacion";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_dem_discapacidad";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_emergencia";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_terms_msj";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_terms_acepta";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_signature";
$tdatadashboard[".googleLikeFields"][] = "contractor_master_view_pin";
*/

/*
$tdatadashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "contractor_master_chart_eps_chart", "table" => "contractor_master_chart_eps",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "contractor_master_chart_fondopension_chart", "table" => "contractor_master_chart_fondopension",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "contractor_master_chart_genero_chart", "table" => "contractor_master_Chart_genero",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "contractor_master_view_list", "table" => "contractor_master_view",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatadashboard[".dashElements"][] = $dbelement;
*/
$tdatadashboard[".shortTableName"] = "dashboard";
$tdatadashboard[".entityType"] = 4;




$tdatadashboard[".hasEvents"] = false;


$tdatadashboard[".tableType"] = "dashboard";


				
$tdatadashboard[".addPageEvents"] = false;

$tdatadashboard[".isUseAjaxSuggest"] = true;

$tables_data["Dashboard"]=&$tdatadashboard;
$field_labels["Dashboard"] = &$fieldLabelsdashboard;
$page_titles["Dashboard"] = &$pageTitlesdashboard;

?>