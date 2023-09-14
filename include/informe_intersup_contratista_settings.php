<?php
$tdatainforme_intersup_contratista = array();
$tdatainforme_intersup_contratista[".searchableFields"] = array();
$tdatainforme_intersup_contratista[".ShortName"] = "informe_intersup_contratista";
$tdatainforme_intersup_contratista[".OwnerID"] = "inf_doccontratista";
$tdatainforme_intersup_contratista[".OriginalTable"] = "informe_intersup";


$tdatainforme_intersup_contratista[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainforme_intersup_contratista[".originalPagesByType"] = $tdatainforme_intersup_contratista[".pagesByType"];
$tdatainforme_intersup_contratista[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainforme_intersup_contratista[".originalPages"] = $tdatainforme_intersup_contratista[".pages"];
$tdatainforme_intersup_contratista[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainforme_intersup_contratista[".originalDefaultPages"] = $tdatainforme_intersup_contratista[".defaultPages"];

//	field labels
$fieldLabelsinforme_intersup_contratista = array();
$fieldToolTipsinforme_intersup_contratista = array();
$pageTitlesinforme_intersup_contratista = array();
$placeHoldersinforme_intersup_contratista = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinforme_intersup_contratista["Spanish"] = array();
	$fieldToolTipsinforme_intersup_contratista["Spanish"] = array();
	$placeHoldersinforme_intersup_contratista["Spanish"] = array();
	$pageTitlesinforme_intersup_contratista["Spanish"] = array();
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_id"] = "Inf Id";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_id"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_id"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["id_cont_fk"] = "Id Cont Fk";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["id_cont_fk"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["id_cont_fk"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_consecutivo"] = "Consecutivo";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_consecutivo"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_consecutivo"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_hash"] = "Codigo de informe";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_hash"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_hash"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_estado"] = "Estado";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_estado"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_estado"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_fechapresenta"] = "Inf Fechapresenta";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_fechapresenta"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_fechapresenta"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_periodicidad"] = "Inf Periodicidad";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_periodicidad"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_periodicidad"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_fecharep_i"] = "Fecha inicial";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_fecharep_i"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_fecharep_i"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_fecharep_f"] = "Fecha final";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_fecharep_f"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_fecharep_f"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_numerocontrato"] = "Número de contrato";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_numerocontrato"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_numerocontrato"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_anio"] = "Vigencia";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_anio"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_anio"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_prenum"] = "Inf Prenum";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_prenum"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_prenum"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_doccontratista"] = "NIT | Documento";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_doccontratista"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_doccontratista"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_nombrecontratista"] = "Nombres | Razón social";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_nombrecontratista"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_nombrecontratista"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_valorcontrato"] = "Inf Valorcontrato";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_valorcontrato"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_valorcontrato"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_adicionreduc"] = "Inf Adicionreduc";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_adicionreduc"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_adicionreduc"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_cdp"] = "Inf Cdp";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_cdp"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_cdp"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_rp"] = "Inf Rp";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_rp"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_rp"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_rubrocode"] = "Inf Rubrocode";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_rubrocode"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_rubrocode"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_rubroname"] = "Inf Rubroname";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_rubroname"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_rubroname"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_objeto"] = "Inf Objeto";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_objeto"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_objeto"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_fechasuscripcion"] = "Inf Fechasuscripcion";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_fechasuscripcion"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_fechasuscripcion"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_fechacont_i"] = "Inf Fechacont I";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_fechacont_i"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_fechacont_i"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_fechacont_f"] = "Inf Fechacont F";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_fechacont_f"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_fechacont_f"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_plazo"] = "Inf Plazo";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_plazo"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_plazo"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_vigencia"] = "Inf Vigencia";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_vigencia"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_vigencia"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_modificacionesplazo"] = "Inf Modificacionesplazo";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_modificacionesplazo"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_modificacionesplazo"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_intersup"] = "Inf Intersup";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_intersup"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_intersup"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_nombre"] = "Supervisor";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_nombre"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_nombre"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_cargo"] = "Inf Cargo";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_cargo"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_cargo"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_dependencia"] = "Inf Dependencia";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_dependencia"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_dependencia"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_avgejecucion"] = "Inf Avgejecucion";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_avgejecucion"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_avgejecucion"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_actividades"] = "Inf Actividades";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_actividades"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_actividades"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_declarainconf"] = "Inf Declarainconf";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_declarainconf"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_declarainconf"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_declarainconf_obs"] = "Inf Declarainconf Obs";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_declarainconf_obs"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_declarainconf_obs"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_incumplimiento"] = "Inf Incumplimiento";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_incumplimiento"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_incumplimiento"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_incumplimiento_obs"] = "Inf Incumplimiento Obs";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_incumplimiento_obs"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_incumplimiento_obs"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_otrosaspectostecnicos"] = "Inf Otrosaspectostecnicos";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_otrosaspectostecnicos"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_otrosaspectostecnicos"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_recomyobserva"] = "Inf Recomyobserva";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_recomyobserva"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_recomyobserva"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["sign_date"] = "Sign Date";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["sign_date"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["sign_date"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["sign_hash"] = "Sign Hash";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["sign_hash"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["sign_hash"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["sign_file"] = "Sign File";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["sign_file"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["sign_file"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["sign_mailnot"] = "Sign Mailnot";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["sign_mailnot"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["sign_mailnot"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["file_verifica"] = "File Verifica";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["file_verifica"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["file_verifica"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["sign_verificacert"] = "Sign Verificacert";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["sign_verificacert"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["sign_verificacert"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["cert_date"] = "Cert Date";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["cert_date"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["cert_date"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["cert_file"] = "Cert File";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["cert_file"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["cert_file"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["cert_mail"] = "Cert Mail";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["cert_mail"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["cert_mail"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["cert_compare"] = "Cert Compare";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["cert_compare"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["cert_compare"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_ultimopago"] = "Inf Ultimopago";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_ultimopago"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_ultimopago"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["sys_date"] = "Sys Date";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["sys_date"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["sys_date"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_mail_a"] = "Inf Mail A";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_mail_a"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_mail_a"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_mail_b"] = "Inf Mail B";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_mail_b"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_mail_b"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["url_secop"] = "Url Secop";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["url_secop"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["url_secop"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["num_poliza"] = "Num Poliza";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["num_poliza"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["num_poliza"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["mun_ejec"] = "Mun Ejec";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["mun_ejec"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["mun_ejec"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["cont_cesion"] = "Cont Cesion";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["cont_cesion"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["cont_cesion"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["cont_modifica"] = "Cont Modifica";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["cont_modifica"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["cont_modifica"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["qty_inf"] = "Programadas";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["qty_inf"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["qty_inf"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["qty_inf_compare"] = "Gestionadas";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["qty_inf_compare"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["qty_inf_compare"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["qty_inf_verifica"] = "Qty Inf Verifica";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["qty_inf_verifica"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["qty_inf_verifica"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_usopresupuestal"] = "Uso presupuestal";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_usopresupuestal"] = "Información para contabilidad";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_usopresupuestal"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["cert_process"] = "Cert Process";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["cert_process"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["cert_process"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["cert_modalidad"] = "Cert Modalidad";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["cert_modalidad"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["cert_modalidad"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["cert_mes"] = "Cert Mes";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["cert_mes"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["cert_mes"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["sign_verificacert_ip"] = "Sign Verificacert Ip";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["sign_verificacert_ip"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["sign_verificacert_ip"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["sign_verificacert_user"] = "Sign Verificacert User";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["sign_verificacert_user"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["sign_verificacert_user"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["sign_verificacert_date"] = "Sign Verificacert Date";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["sign_verificacert_date"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["sign_verificacert_date"] = "";
	$fieldLabelsinforme_intersup_contratista["Spanish"]["inf_supervisoremail"] = "Correo supervisor";
	$fieldToolTipsinforme_intersup_contratista["Spanish"]["inf_supervisoremail"] = "";
	$placeHoldersinforme_intersup_contratista["Spanish"]["inf_supervisoremail"] = "";
	$pageTitlesinforme_intersup_contratista["Spanish"]["edit"] = "Cambiar estado a informe";
	$pageTitlesinforme_intersup_contratista["Spanish"]["masterlist"] = "Informe de supervisión {%inf_id}";
	if (count($fieldToolTipsinforme_intersup_contratista["Spanish"]))
		$tdatainforme_intersup_contratista[".isUseToolTips"] = true;
}


	$tdatainforme_intersup_contratista[".NCSearch"] = true;



$tdatainforme_intersup_contratista[".shortTableName"] = "informe_intersup_contratista";
$tdatainforme_intersup_contratista[".nSecOptions"] = 1;

$tdatainforme_intersup_contratista[".mainTableOwnerID"] = "inf_doccontratista";
$tdatainforme_intersup_contratista[".entityType"] = 1;
$tdatainforme_intersup_contratista[".connId"] = "dbct_at_localhost";


$tdatainforme_intersup_contratista[".strOriginalTableName"] = "informe_intersup";

	



$tdatainforme_intersup_contratista[".showAddInPopup"] = false;

$tdatainforme_intersup_contratista[".showEditInPopup"] = false;

$tdatainforme_intersup_contratista[".showViewInPopup"] = false;

$tdatainforme_intersup_contratista[".listAjax"] = false;
//	temporary
//$tdatainforme_intersup_contratista[".listAjax"] = false;

	$tdatainforme_intersup_contratista[".audit"] = true;

	$tdatainforme_intersup_contratista[".locking"] = true;


$pages = $tdatainforme_intersup_contratista[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainforme_intersup_contratista[".edit"] = true;
	$tdatainforme_intersup_contratista[".afterEditAction"] = 1;
	$tdatainforme_intersup_contratista[".closePopupAfterEdit"] = 1;
	$tdatainforme_intersup_contratista[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainforme_intersup_contratista[".add"] = true;
$tdatainforme_intersup_contratista[".afterAddAction"] = 1;
$tdatainforme_intersup_contratista[".closePopupAfterAdd"] = 1;
$tdatainforme_intersup_contratista[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainforme_intersup_contratista[".list"] = true;
}



$tdatainforme_intersup_contratista[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainforme_intersup_contratista[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainforme_intersup_contratista[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainforme_intersup_contratista[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainforme_intersup_contratista[".printFriendly"] = true;
}



$tdatainforme_intersup_contratista[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainforme_intersup_contratista[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainforme_intersup_contratista[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainforme_intersup_contratista[".isUseAjaxSuggest"] = true;



												

$tdatainforme_intersup_contratista[".ajaxCodeSnippetAdded"] = false;

$tdatainforme_intersup_contratista[".buttonsAdded"] = false;

$tdatainforme_intersup_contratista[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainforme_intersup_contratista[".isUseTimeForSearch"] = false;


$tdatainforme_intersup_contratista[".badgeColor"] = "4682B4";


$tdatainforme_intersup_contratista[".allSearchFields"] = array();
$tdatainforme_intersup_contratista[".filterFields"] = array();
$tdatainforme_intersup_contratista[".requiredSearchFields"] = array();

$tdatainforme_intersup_contratista[".googleLikeFields"] = array();
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_id";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "id_cont_fk";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_consecutivo";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_hash";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_estado";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_fechapresenta";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_periodicidad";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_fecharep_i";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_fecharep_f";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_numerocontrato";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_anio";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_prenum";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_doccontratista";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_nombrecontratista";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_valorcontrato";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_adicionreduc";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_cdp";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_rp";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_rubrocode";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_rubroname";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_usopresupuestal";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_objeto";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_fechasuscripcion";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_fechacont_i";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_fechacont_f";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_plazo";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_vigencia";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_modificacionesplazo";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_intersup";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_nombre";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_cargo";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_dependencia";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_avgejecucion";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_actividades";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_declarainconf";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_declarainconf_obs";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_incumplimiento";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_incumplimiento_obs";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_otrosaspectostecnicos";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_recomyobserva";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "file_verifica";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_ultimopago";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "sys_date";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_mail_a";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_mail_b";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "url_secop";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "num_poliza";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "mun_ejec";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "cont_cesion";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "cont_modifica";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "qty_inf";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "qty_inf_compare";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "qty_inf_verifica";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "cert_process";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "cert_modalidad";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "cert_mes";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "cert_mail";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "cert_file";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "cert_date";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "cert_compare";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "sign_hash";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "sign_date";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "sign_mailnot";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "sign_verificacert";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "sign_file";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "sign_verificacert_ip";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "sign_verificacert_user";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "sign_verificacert_date";
$tdatainforme_intersup_contratista[".googleLikeFields"][] = "inf_supervisoremail";



$tdatainforme_intersup_contratista[".tableType"] = "list";

$tdatainforme_intersup_contratista[".printerPageOrientation"] = 0;
$tdatainforme_intersup_contratista[".nPrinterPageScale"] = 100;

$tdatainforme_intersup_contratista[".nPrinterSplitRecords"] = 40;

$tdatainforme_intersup_contratista[".geocodingEnabled"] = false;




$tdatainforme_intersup_contratista[".isDisplayLoading"] = true;






$tdatainforme_intersup_contratista[".pageSize"] = 20;

$tdatainforme_intersup_contratista[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatainforme_intersup_contratista[".strOrderBy"] = $tstrOrderBy;

$tdatainforme_intersup_contratista[".orderindexes"] = array();


$tdatainforme_intersup_contratista[".sqlHead"] = "SELECT inf_id,  id_cont_fk,  inf_consecutivo,  inf_hash,  inf_estado,  inf_fechapresenta,  inf_periodicidad,  inf_fecharep_i,  inf_fecharep_f,  inf_numerocontrato,  inf_anio,  inf_prenum,  inf_doccontratista,  inf_nombrecontratista,  inf_valorcontrato,  inf_adicionreduc,  inf_cdp,  inf_rp,  inf_rubrocode,  inf_rubroname,  inf_usopresupuestal,  inf_objeto,  inf_fechasuscripcion,  inf_fechacont_i,  inf_fechacont_f,  inf_plazo,  inf_vigencia,  inf_modificacionesplazo,  inf_intersup,  inf_nombre,  inf_cargo,  inf_dependencia,  inf_avgejecucion,  inf_actividades,  inf_declarainconf,  inf_declarainconf_obs,  inf_incumplimiento,  inf_incumplimiento_obs,  inf_otrosaspectostecnicos,  inf_recomyobserva,  file_verifica,  inf_ultimopago,  sys_date,  inf_mail_a,  inf_mail_b,  url_secop,  num_poliza,  mun_ejec,  cont_cesion,  cont_modifica,  qty_inf,  qty_inf_compare,  qty_inf_verifica,  cert_process,  cert_modalidad,  cert_mes,  cert_mail,  cert_file,  cert_date,  cert_compare,  sign_hash,  sign_date,  sign_mailnot,  sign_verificacert,  sign_file,  sign_verificacert_ip,  sign_verificacert_user,  sign_verificacert_date,  inf_supervisoremail";
$tdatainforme_intersup_contratista[".sqlFrom"] = "FROM informe_intersup";
$tdatainforme_intersup_contratista[".sqlWhereExpr"] = "(inf_estado = 1)";
$tdatainforme_intersup_contratista[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainforme_intersup_contratista[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainforme_intersup_contratista[".arrGroupsPerPage"] = $arrGPP;

$tdatainforme_intersup_contratista[".highlightSearchResults"] = true;

$tableKeysinforme_intersup_contratista = array();
$tableKeysinforme_intersup_contratista[] = "inf_id";
$tdatainforme_intersup_contratista[".Keys"] = $tableKeysinforme_intersup_contratista;


$tdatainforme_intersup_contratista[".hideMobileList"] = array();




//	inf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "inf_id";
	$fdata["GoodName"] = "inf_id";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "inf_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_id";

	
	
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


	$tdatainforme_intersup_contratista["inf_id"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","id_cont_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cont_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont_fk";

	
	
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


	$tdatainforme_intersup_contratista["id_cont_fk"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "id_cont_fk";
//	inf_consecutivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "inf_consecutivo";
	$fdata["GoodName"] = "inf_consecutivo";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_consecutivo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "inf_consecutivo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_consecutivo";

	
	
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


	$tdatainforme_intersup_contratista["inf_consecutivo"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_consecutivo";
//	inf_hash
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "inf_hash";
	$fdata["GoodName"] = "inf_hash";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_hash");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_hash";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_hash";

	
	
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


	$tdatainforme_intersup_contratista["inf_hash"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_hash";
//	inf_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inf_estado";
	$fdata["GoodName"] = "inf_estado";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_estado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "inf_estado";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_estado";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "informe_intersup_estado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "estadoi_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "estadoname";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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
		
		$edata["autoUpdatable"] = true;

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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "inf_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup_contratista["inf_estado"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_estado";
//	inf_fechapresenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "inf_fechapresenta";
	$fdata["GoodName"] = "inf_fechapresenta";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_fechapresenta");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fechapresenta";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fechapresenta";

	
	
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


	$tdatainforme_intersup_contratista["inf_fechapresenta"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_fechapresenta";
//	inf_periodicidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "inf_periodicidad";
	$fdata["GoodName"] = "inf_periodicidad";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_periodicidad");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "inf_periodicidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_periodicidad";

	
	
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


	$tdatainforme_intersup_contratista["inf_periodicidad"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_periodicidad";
//	inf_fecharep_i
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "inf_fecharep_i";
	$fdata["GoodName"] = "inf_fecharep_i";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_fecharep_i");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fecharep_i";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fecharep_i";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatainforme_intersup_contratista["inf_fecharep_i"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_fecharep_i";
//	inf_fecharep_f
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "inf_fecharep_f";
	$fdata["GoodName"] = "inf_fecharep_f";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_fecharep_f");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fecharep_f";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fecharep_f";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatainforme_intersup_contratista["inf_fecharep_f"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_fecharep_f";
//	inf_numerocontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "inf_numerocontrato";
	$fdata["GoodName"] = "inf_numerocontrato";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_numerocontrato");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_numerocontrato";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_numerocontrato";

	
	
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


	$tdatainforme_intersup_contratista["inf_numerocontrato"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_numerocontrato";
//	inf_anio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "inf_anio";
	$fdata["GoodName"] = "inf_anio";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_anio");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "inf_anio";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_anio";

	
	
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


	$tdatainforme_intersup_contratista["inf_anio"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_anio";
//	inf_prenum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "inf_prenum";
	$fdata["GoodName"] = "inf_prenum";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_prenum");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_prenum";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_prenum";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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


	$tdatainforme_intersup_contratista["inf_prenum"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_prenum";
//	inf_doccontratista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "inf_doccontratista";
	$fdata["GoodName"] = "inf_doccontratista";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_doccontratista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_doccontratista";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_doccontratista";

	
	
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


	$tdatainforme_intersup_contratista["inf_doccontratista"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_doccontratista";
//	inf_nombrecontratista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "inf_nombrecontratista";
	$fdata["GoodName"] = "inf_nombrecontratista";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_nombrecontratista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_nombrecontratista";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_nombrecontratista";

	
	
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


	$tdatainforme_intersup_contratista["inf_nombrecontratista"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_nombrecontratista";
//	inf_valorcontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "inf_valorcontrato";
	$fdata["GoodName"] = "inf_valorcontrato";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_valorcontrato");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "inf_valorcontrato";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_valorcontrato";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatainforme_intersup_contratista["inf_valorcontrato"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_valorcontrato";
//	inf_adicionreduc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "inf_adicionreduc";
	$fdata["GoodName"] = "inf_adicionreduc";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_adicionreduc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_adicionreduc";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_adicionreduc";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatainforme_intersup_contratista["inf_adicionreduc"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_adicionreduc";
//	inf_cdp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "inf_cdp";
	$fdata["GoodName"] = "inf_cdp";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_cdp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_cdp";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_cdp";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdatainforme_intersup_contratista["inf_cdp"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_cdp";
//	inf_rp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "inf_rp";
	$fdata["GoodName"] = "inf_rp";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_rp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_rp";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_rp";

	
	
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


	$tdatainforme_intersup_contratista["inf_rp"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_rp";
//	inf_rubrocode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "inf_rubrocode";
	$fdata["GoodName"] = "inf_rubrocode";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_rubrocode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_rubrocode";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_rubrocode";

	
	
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


	$tdatainforme_intersup_contratista["inf_rubrocode"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_rubrocode";
//	inf_rubroname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "inf_rubroname";
	$fdata["GoodName"] = "inf_rubroname";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_rubroname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_rubroname";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_rubroname";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatainforme_intersup_contratista["inf_rubroname"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_rubroname";
//	inf_usopresupuestal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "inf_usopresupuestal";
	$fdata["GoodName"] = "inf_usopresupuestal";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_usopresupuestal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_usopresupuestal";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_usopresupuestal";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatainforme_intersup_contratista["inf_usopresupuestal"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_usopresupuestal";
//	inf_objeto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "inf_objeto";
	$fdata["GoodName"] = "inf_objeto";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_objeto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_objeto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_objeto";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatainforme_intersup_contratista["inf_objeto"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_objeto";
//	inf_fechasuscripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "inf_fechasuscripcion";
	$fdata["GoodName"] = "inf_fechasuscripcion";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_fechasuscripcion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fechasuscripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fechasuscripcion";

	
	
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


	$tdatainforme_intersup_contratista["inf_fechasuscripcion"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_fechasuscripcion";
//	inf_fechacont_i
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "inf_fechacont_i";
	$fdata["GoodName"] = "inf_fechacont_i";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_fechacont_i");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fechacont_i";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fechacont_i";

	
	
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


	$tdatainforme_intersup_contratista["inf_fechacont_i"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_fechacont_i";
//	inf_fechacont_f
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "inf_fechacont_f";
	$fdata["GoodName"] = "inf_fechacont_f";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_fechacont_f");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fechacont_f";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fechacont_f";

	
	
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


	$tdatainforme_intersup_contratista["inf_fechacont_f"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_fechacont_f";
//	inf_plazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "inf_plazo";
	$fdata["GoodName"] = "inf_plazo";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_plazo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_plazo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_plazo";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatainforme_intersup_contratista["inf_plazo"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_plazo";
//	inf_vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "inf_vigencia";
	$fdata["GoodName"] = "inf_vigencia";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_vigencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_vigencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_vigencia";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatainforme_intersup_contratista["inf_vigencia"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_vigencia";
//	inf_modificacionesplazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "inf_modificacionesplazo";
	$fdata["GoodName"] = "inf_modificacionesplazo";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_modificacionesplazo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_modificacionesplazo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_modificacionesplazo";

	
	
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


	$tdatainforme_intersup_contratista["inf_modificacionesplazo"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_modificacionesplazo";
//	inf_intersup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "inf_intersup";
	$fdata["GoodName"] = "inf_intersup";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_intersup");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_intersup";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_intersup";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "global_users";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"inf_supervisoremail", 'lookupF'=>"usr_email");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "usr_personalid";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdatainforme_intersup_contratista["inf_intersup"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_intersup";
//	inf_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "inf_nombre";
	$fdata["GoodName"] = "inf_nombre";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_nombre";

	
	
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


	$tdatainforme_intersup_contratista["inf_nombre"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_nombre";
//	inf_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "inf_cargo";
	$fdata["GoodName"] = "inf_cargo";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_cargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_cargo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_cargo";

	
	
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
			$edata["EditParams"].= " maxlength=120";

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


	$tdatainforme_intersup_contratista["inf_cargo"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_cargo";
//	inf_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "inf_dependencia";
	$fdata["GoodName"] = "inf_dependencia";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_dependencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_dependencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_dependencia";

	
	
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
			$edata["EditParams"].= " maxlength=120";

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


	$tdatainforme_intersup_contratista["inf_dependencia"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_dependencia";
//	inf_avgejecucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "inf_avgejecucion";
	$fdata["GoodName"] = "inf_avgejecucion";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_avgejecucion");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "inf_avgejecucion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_avgejecucion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatainforme_intersup_contratista["inf_avgejecucion"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_avgejecucion";
//	inf_actividades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "inf_actividades";
	$fdata["GoodName"] = "inf_actividades";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_actividades");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "inf_actividades";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_actividades";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatainforme_intersup_contratista["inf_actividades"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_actividades";
//	inf_declarainconf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "inf_declarainconf";
	$fdata["GoodName"] = "inf_declarainconf";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_declarainconf");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_declarainconf";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_declarainconf";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatainforme_intersup_contratista["inf_declarainconf"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_declarainconf";
//	inf_declarainconf_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "inf_declarainconf_obs";
	$fdata["GoodName"] = "inf_declarainconf_obs";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_declarainconf_obs");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_declarainconf_obs";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_declarainconf_obs";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatainforme_intersup_contratista["inf_declarainconf_obs"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_declarainconf_obs";
//	inf_incumplimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "inf_incumplimiento";
	$fdata["GoodName"] = "inf_incumplimiento";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_incumplimiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_incumplimiento";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_incumplimiento";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatainforme_intersup_contratista["inf_incumplimiento"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_incumplimiento";
//	inf_incumplimiento_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "inf_incumplimiento_obs";
	$fdata["GoodName"] = "inf_incumplimiento_obs";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_incumplimiento_obs");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_incumplimiento_obs";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_incumplimiento_obs";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatainforme_intersup_contratista["inf_incumplimiento_obs"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_incumplimiento_obs";
//	inf_otrosaspectostecnicos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "inf_otrosaspectostecnicos";
	$fdata["GoodName"] = "inf_otrosaspectostecnicos";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_otrosaspectostecnicos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_otrosaspectostecnicos";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_otrosaspectostecnicos";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatainforme_intersup_contratista["inf_otrosaspectostecnicos"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_otrosaspectostecnicos";
//	inf_recomyobserva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "inf_recomyobserva";
	$fdata["GoodName"] = "inf_recomyobserva";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_recomyobserva");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_recomyobserva";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_recomyobserva";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatainforme_intersup_contratista["inf_recomyobserva"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_recomyobserva";
//	file_verifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "file_verifica";
	$fdata["GoodName"] = "file_verifica";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","file_verifica");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "file_verifica";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "file_verifica";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatainforme_intersup_contratista["file_verifica"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "file_verifica";
//	inf_ultimopago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "inf_ultimopago";
	$fdata["GoodName"] = "inf_ultimopago";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_ultimopago");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "inf_ultimopago";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_ultimopago";

	
	
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


	$tdatainforme_intersup_contratista["inf_ultimopago"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_ultimopago";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","sys_date");
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


	$tdatainforme_intersup_contratista["sys_date"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "sys_date";
//	inf_mail_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "inf_mail_a";
	$fdata["GoodName"] = "inf_mail_a";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_mail_a");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_mail_a";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_mail_a";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatainforme_intersup_contratista["inf_mail_a"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_mail_a";
//	inf_mail_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "inf_mail_b";
	$fdata["GoodName"] = "inf_mail_b";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_mail_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_mail_b";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_mail_b";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatainforme_intersup_contratista["inf_mail_b"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_mail_b";
//	url_secop
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "url_secop";
	$fdata["GoodName"] = "url_secop";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","url_secop");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "url_secop";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "url_secop";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatainforme_intersup_contratista["url_secop"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "url_secop";
//	num_poliza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "num_poliza";
	$fdata["GoodName"] = "num_poliza";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","num_poliza");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "num_poliza";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "num_poliza";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatainforme_intersup_contratista["num_poliza"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "num_poliza";
//	mun_ejec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "mun_ejec";
	$fdata["GoodName"] = "mun_ejec";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","mun_ejec");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mun_ejec";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mun_ejec";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatainforme_intersup_contratista["mun_ejec"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "mun_ejec";
//	cont_cesion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "cont_cesion";
	$fdata["GoodName"] = "cont_cesion";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","cont_cesion");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cont_cesion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_cesion";

	
	
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


	$tdatainforme_intersup_contratista["cont_cesion"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "cont_cesion";
//	cont_modifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "cont_modifica";
	$fdata["GoodName"] = "cont_modifica";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","cont_modifica");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cont_modifica";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_modifica";

	
	
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


	$tdatainforme_intersup_contratista["cont_modifica"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "cont_modifica";
//	qty_inf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "qty_inf";
	$fdata["GoodName"] = "qty_inf";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","qty_inf");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "qty_inf";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qty_inf";

	
	
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


	$tdatainforme_intersup_contratista["qty_inf"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "qty_inf";
//	qty_inf_compare
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "qty_inf_compare";
	$fdata["GoodName"] = "qty_inf_compare";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","qty_inf_compare");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "qty_inf_compare";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qty_inf_compare";

	
	
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


	$tdatainforme_intersup_contratista["qty_inf_compare"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "qty_inf_compare";
//	qty_inf_verifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "qty_inf_verifica";
	$fdata["GoodName"] = "qty_inf_verifica";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","qty_inf_verifica");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "qty_inf_verifica";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qty_inf_verifica";

	
	
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


	$tdatainforme_intersup_contratista["qty_inf_verifica"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "qty_inf_verifica";
//	cert_process
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "cert_process";
	$fdata["GoodName"] = "cert_process";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","cert_process");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cert_process";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_process";

	
	
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


	$tdatainforme_intersup_contratista["cert_process"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "cert_process";
//	cert_modalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "cert_modalidad";
	$fdata["GoodName"] = "cert_modalidad";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","cert_modalidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cert_modalidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_modalidad";

	
	
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
			$edata["EditParams"].= " maxlength=120";

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


	$tdatainforme_intersup_contratista["cert_modalidad"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "cert_modalidad";
//	cert_mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "cert_mes";
	$fdata["GoodName"] = "cert_mes";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","cert_mes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cert_mes";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_mes";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdatainforme_intersup_contratista["cert_mes"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "cert_mes";
//	cert_mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "cert_mail";
	$fdata["GoodName"] = "cert_mail";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","cert_mail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cert_mail";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_mail";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatainforme_intersup_contratista["cert_mail"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "cert_mail";
//	cert_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "cert_file";
	$fdata["GoodName"] = "cert_file";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","cert_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cert_file";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_file";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatainforme_intersup_contratista["cert_file"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "cert_file";
//	cert_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "cert_date";
	$fdata["GoodName"] = "cert_date";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","cert_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cert_date";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_date";

	
	
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


	$tdatainforme_intersup_contratista["cert_date"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "cert_date";
//	cert_compare
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "cert_compare";
	$fdata["GoodName"] = "cert_compare";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","cert_compare");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cert_compare";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_compare";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatainforme_intersup_contratista["cert_compare"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "cert_compare";
//	sign_hash
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "sign_hash";
	$fdata["GoodName"] = "sign_hash";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","sign_hash");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_hash";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_hash";

	
	
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


	$tdatainforme_intersup_contratista["sign_hash"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "sign_hash";
//	sign_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "sign_date";
	$fdata["GoodName"] = "sign_date";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","sign_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sign_date";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_date";

	
	
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


	$tdatainforme_intersup_contratista["sign_date"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "sign_date";
//	sign_mailnot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "sign_mailnot";
	$fdata["GoodName"] = "sign_mailnot";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","sign_mailnot");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_mailnot";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_mailnot";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatainforme_intersup_contratista["sign_mailnot"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "sign_mailnot";
//	sign_verificacert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "sign_verificacert";
	$fdata["GoodName"] = "sign_verificacert";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","sign_verificacert");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_verificacert";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_verificacert";

	
	
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


	$tdatainforme_intersup_contratista["sign_verificacert"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "sign_verificacert";
//	sign_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "sign_file";
	$fdata["GoodName"] = "sign_file";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","sign_file");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sign_file";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_file";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatainforme_intersup_contratista["sign_file"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "sign_file";
//	sign_verificacert_ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "sign_verificacert_ip";
	$fdata["GoodName"] = "sign_verificacert_ip";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","sign_verificacert_ip");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_verificacert_ip";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_verificacert_ip";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatainforme_intersup_contratista["sign_verificacert_ip"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "sign_verificacert_ip";
//	sign_verificacert_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "sign_verificacert_user";
	$fdata["GoodName"] = "sign_verificacert_user";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","sign_verificacert_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_verificacert_user";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_verificacert_user";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatainforme_intersup_contratista["sign_verificacert_user"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "sign_verificacert_user";
//	sign_verificacert_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "sign_verificacert_date";
	$fdata["GoodName"] = "sign_verificacert_date";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","sign_verificacert_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sign_verificacert_date";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_verificacert_date";

	
	
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


	$tdatainforme_intersup_contratista["sign_verificacert_date"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "sign_verificacert_date";
//	inf_supervisoremail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "inf_supervisoremail";
	$fdata["GoodName"] = "inf_supervisoremail";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup_contratista","inf_supervisoremail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_supervisoremail";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_supervisoremail";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatainforme_intersup_contratista["inf_supervisoremail"] = $fdata;
		$tdatainforme_intersup_contratista[".searchableFields"][] = "inf_supervisoremail";


$tables_data["informe_intersup_contratista"]=&$tdatainforme_intersup_contratista;
$field_labels["informe_intersup_contratista"] = &$fieldLabelsinforme_intersup_contratista;
$fieldToolTips["informe_intersup_contratista"] = &$fieldToolTipsinforme_intersup_contratista;
$placeHolders["informe_intersup_contratista"] = &$placeHoldersinforme_intersup_contratista;
$page_titles["informe_intersup_contratista"] = &$pageTitlesinforme_intersup_contratista;


changeTextControlsToDate( "informe_intersup_contratista" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["informe_intersup_contratista"] = array();
//	informe_intersup_oe_contratista
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="informe_intersup_oe_contratista";
		$detailsParam["dOriginalTable"] = "informe_intersup_oe";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "informe_intersup_oe_contratista";
	$detailsParam["dCaptionTable"] = GetTableCaption("informe_intersup_oe_contratista");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["informe_intersup_contratista"][$dIndex] = $detailsParam;

	
		$detailsTablesData["informe_intersup_contratista"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["informe_intersup_contratista"][$dIndex]["masterKeys"][]="inf_id";

	$detailsTablesData["informe_intersup_contratista"][$dIndex]["masterKeys"][]="id_cont_fk";

				$detailsTablesData["informe_intersup_contratista"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["informe_intersup_contratista"][$dIndex]["detailKeys"][]="inf_id_fk";

		
	$detailsTablesData["informe_intersup_contratista"][$dIndex]["detailKeys"][]="id_cont_fk";
//	informe_intersup_anexos_contratista
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="informe_intersup_anexos_contratista";
		$detailsParam["dOriginalTable"] = "informe_intersup_anexos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "informe_intersup_anexos_contratista";
	$detailsParam["dCaptionTable"] = GetTableCaption("informe_intersup_anexos_contratista");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["informe_intersup_contratista"][$dIndex] = $detailsParam;

	
		$detailsTablesData["informe_intersup_contratista"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["informe_intersup_contratista"][$dIndex]["masterKeys"][]="inf_id";

	$detailsTablesData["informe_intersup_contratista"][$dIndex]["masterKeys"][]="id_cont_fk";

				$detailsTablesData["informe_intersup_contratista"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["informe_intersup_contratista"][$dIndex]["detailKeys"][]="inf_id_fk";

		
	$detailsTablesData["informe_intersup_contratista"][$dIndex]["detailKeys"][]="id_cont_fk";
//	informe_intersup_anexos_contratista_o
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="informe_intersup_anexos_contratista_o";
		$detailsParam["dOriginalTable"] = "informe_intersup_anexos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "informe_intersup_anexos_contratista_o";
	$detailsParam["dCaptionTable"] = GetTableCaption("informe_intersup_anexos_contratista_o");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["informe_intersup_contratista"][$dIndex] = $detailsParam;

	
		$detailsTablesData["informe_intersup_contratista"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["informe_intersup_contratista"][$dIndex]["masterKeys"][]="inf_id";

	$detailsTablesData["informe_intersup_contratista"][$dIndex]["masterKeys"][]="id_cont_fk";

				$detailsTablesData["informe_intersup_contratista"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["informe_intersup_contratista"][$dIndex]["detailKeys"][]="inf_id_fk";

		
	$detailsTablesData["informe_intersup_contratista"][$dIndex]["detailKeys"][]="id_cont_fk";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["informe_intersup_contratista"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_informe_intersup_contratista()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inf_id,  id_cont_fk,  inf_consecutivo,  inf_hash,  inf_estado,  inf_fechapresenta,  inf_periodicidad,  inf_fecharep_i,  inf_fecharep_f,  inf_numerocontrato,  inf_anio,  inf_prenum,  inf_doccontratista,  inf_nombrecontratista,  inf_valorcontrato,  inf_adicionreduc,  inf_cdp,  inf_rp,  inf_rubrocode,  inf_rubroname,  inf_usopresupuestal,  inf_objeto,  inf_fechasuscripcion,  inf_fechacont_i,  inf_fechacont_f,  inf_plazo,  inf_vigencia,  inf_modificacionesplazo,  inf_intersup,  inf_nombre,  inf_cargo,  inf_dependencia,  inf_avgejecucion,  inf_actividades,  inf_declarainconf,  inf_declarainconf_obs,  inf_incumplimiento,  inf_incumplimiento_obs,  inf_otrosaspectostecnicos,  inf_recomyobserva,  file_verifica,  inf_ultimopago,  sys_date,  inf_mail_a,  inf_mail_b,  url_secop,  num_poliza,  mun_ejec,  cont_cesion,  cont_modifica,  qty_inf,  qty_inf_compare,  qty_inf_verifica,  cert_process,  cert_modalidad,  cert_mes,  cert_mail,  cert_file,  cert_date,  cert_compare,  sign_hash,  sign_date,  sign_mailnot,  sign_verificacert,  sign_file,  sign_verificacert_ip,  sign_verificacert_user,  sign_verificacert_date,  inf_supervisoremail";
$proto0["m_strFrom"] = "FROM informe_intersup";
$proto0["m_strWhere"] = "(inf_estado = 1)";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "inf_estado = 1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "inf_estado",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 1";
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
	"m_strName" => "inf_id",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto6["m_sql"] = "inf_id";
$proto6["m_srcTableName"] = "informe_intersup_contratista";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "informe_intersup_contratista";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_consecutivo",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto10["m_sql"] = "inf_consecutivo";
$proto10["m_srcTableName"] = "informe_intersup_contratista";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_hash",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto12["m_sql"] = "inf_hash";
$proto12["m_srcTableName"] = "informe_intersup_contratista";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_estado",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto14["m_sql"] = "inf_estado";
$proto14["m_srcTableName"] = "informe_intersup_contratista";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fechapresenta",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto16["m_sql"] = "inf_fechapresenta";
$proto16["m_srcTableName"] = "informe_intersup_contratista";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_periodicidad",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto18["m_sql"] = "inf_periodicidad";
$proto18["m_srcTableName"] = "informe_intersup_contratista";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fecharep_i",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto20["m_sql"] = "inf_fecharep_i";
$proto20["m_srcTableName"] = "informe_intersup_contratista";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fecharep_f",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto22["m_sql"] = "inf_fecharep_f";
$proto22["m_srcTableName"] = "informe_intersup_contratista";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_numerocontrato",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto24["m_sql"] = "inf_numerocontrato";
$proto24["m_srcTableName"] = "informe_intersup_contratista";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_anio",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto26["m_sql"] = "inf_anio";
$proto26["m_srcTableName"] = "informe_intersup_contratista";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_prenum",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto28["m_sql"] = "inf_prenum";
$proto28["m_srcTableName"] = "informe_intersup_contratista";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_doccontratista",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto30["m_sql"] = "inf_doccontratista";
$proto30["m_srcTableName"] = "informe_intersup_contratista";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_nombrecontratista",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto32["m_sql"] = "inf_nombrecontratista";
$proto32["m_srcTableName"] = "informe_intersup_contratista";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_valorcontrato",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto34["m_sql"] = "inf_valorcontrato";
$proto34["m_srcTableName"] = "informe_intersup_contratista";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_adicionreduc",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto36["m_sql"] = "inf_adicionreduc";
$proto36["m_srcTableName"] = "informe_intersup_contratista";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_cdp",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto38["m_sql"] = "inf_cdp";
$proto38["m_srcTableName"] = "informe_intersup_contratista";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_rp",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto40["m_sql"] = "inf_rp";
$proto40["m_srcTableName"] = "informe_intersup_contratista";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_rubrocode",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto42["m_sql"] = "inf_rubrocode";
$proto42["m_srcTableName"] = "informe_intersup_contratista";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_rubroname",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto44["m_sql"] = "inf_rubroname";
$proto44["m_srcTableName"] = "informe_intersup_contratista";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_usopresupuestal",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto46["m_sql"] = "inf_usopresupuestal";
$proto46["m_srcTableName"] = "informe_intersup_contratista";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_objeto",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto48["m_sql"] = "inf_objeto";
$proto48["m_srcTableName"] = "informe_intersup_contratista";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fechasuscripcion",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto50["m_sql"] = "inf_fechasuscripcion";
$proto50["m_srcTableName"] = "informe_intersup_contratista";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fechacont_i",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto52["m_sql"] = "inf_fechacont_i";
$proto52["m_srcTableName"] = "informe_intersup_contratista";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fechacont_f",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto54["m_sql"] = "inf_fechacont_f";
$proto54["m_srcTableName"] = "informe_intersup_contratista";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_plazo",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto56["m_sql"] = "inf_plazo";
$proto56["m_srcTableName"] = "informe_intersup_contratista";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_vigencia",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto58["m_sql"] = "inf_vigencia";
$proto58["m_srcTableName"] = "informe_intersup_contratista";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_modificacionesplazo",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto60["m_sql"] = "inf_modificacionesplazo";
$proto60["m_srcTableName"] = "informe_intersup_contratista";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_intersup",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto62["m_sql"] = "inf_intersup";
$proto62["m_srcTableName"] = "informe_intersup_contratista";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_nombre",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto64["m_sql"] = "inf_nombre";
$proto64["m_srcTableName"] = "informe_intersup_contratista";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_cargo",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto66["m_sql"] = "inf_cargo";
$proto66["m_srcTableName"] = "informe_intersup_contratista";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_dependencia",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto68["m_sql"] = "inf_dependencia";
$proto68["m_srcTableName"] = "informe_intersup_contratista";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_avgejecucion",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto70["m_sql"] = "inf_avgejecucion";
$proto70["m_srcTableName"] = "informe_intersup_contratista";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_actividades",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto72["m_sql"] = "inf_actividades";
$proto72["m_srcTableName"] = "informe_intersup_contratista";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_declarainconf",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto74["m_sql"] = "inf_declarainconf";
$proto74["m_srcTableName"] = "informe_intersup_contratista";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_declarainconf_obs",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto76["m_sql"] = "inf_declarainconf_obs";
$proto76["m_srcTableName"] = "informe_intersup_contratista";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_incumplimiento",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto78["m_sql"] = "inf_incumplimiento";
$proto78["m_srcTableName"] = "informe_intersup_contratista";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_incumplimiento_obs",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto80["m_sql"] = "inf_incumplimiento_obs";
$proto80["m_srcTableName"] = "informe_intersup_contratista";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_otrosaspectostecnicos",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto82["m_sql"] = "inf_otrosaspectostecnicos";
$proto82["m_srcTableName"] = "informe_intersup_contratista";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_recomyobserva",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto84["m_sql"] = "inf_recomyobserva";
$proto84["m_srcTableName"] = "informe_intersup_contratista";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "file_verifica",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto86["m_sql"] = "file_verifica";
$proto86["m_srcTableName"] = "informe_intersup_contratista";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_ultimopago",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto88["m_sql"] = "inf_ultimopago";
$proto88["m_srcTableName"] = "informe_intersup_contratista";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto90["m_sql"] = "sys_date";
$proto90["m_srcTableName"] = "informe_intersup_contratista";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_mail_a",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto92["m_sql"] = "inf_mail_a";
$proto92["m_srcTableName"] = "informe_intersup_contratista";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_mail_b",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto94["m_sql"] = "inf_mail_b";
$proto94["m_srcTableName"] = "informe_intersup_contratista";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "url_secop",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto96["m_sql"] = "url_secop";
$proto96["m_srcTableName"] = "informe_intersup_contratista";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "num_poliza",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto98["m_sql"] = "num_poliza";
$proto98["m_srcTableName"] = "informe_intersup_contratista";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_ejec",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto100["m_sql"] = "mun_ejec";
$proto100["m_srcTableName"] = "informe_intersup_contratista";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_cesion",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto102["m_sql"] = "cont_cesion";
$proto102["m_srcTableName"] = "informe_intersup_contratista";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_modifica",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto104["m_sql"] = "cont_modifica";
$proto104["m_srcTableName"] = "informe_intersup_contratista";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "qty_inf",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto106["m_sql"] = "qty_inf";
$proto106["m_srcTableName"] = "informe_intersup_contratista";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "qty_inf_compare",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto108["m_sql"] = "qty_inf_compare";
$proto108["m_srcTableName"] = "informe_intersup_contratista";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "qty_inf_verifica",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto110["m_sql"] = "qty_inf_verifica";
$proto110["m_srcTableName"] = "informe_intersup_contratista";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_process",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto112["m_sql"] = "cert_process";
$proto112["m_srcTableName"] = "informe_intersup_contratista";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_modalidad",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto114["m_sql"] = "cert_modalidad";
$proto114["m_srcTableName"] = "informe_intersup_contratista";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_mes",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto116["m_sql"] = "cert_mes";
$proto116["m_srcTableName"] = "informe_intersup_contratista";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_mail",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto118["m_sql"] = "cert_mail";
$proto118["m_srcTableName"] = "informe_intersup_contratista";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_file",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto120["m_sql"] = "cert_file";
$proto120["m_srcTableName"] = "informe_intersup_contratista";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_date",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto122["m_sql"] = "cert_date";
$proto122["m_srcTableName"] = "informe_intersup_contratista";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_compare",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto124["m_sql"] = "cert_compare";
$proto124["m_srcTableName"] = "informe_intersup_contratista";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_hash",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto126["m_sql"] = "sign_hash";
$proto126["m_srcTableName"] = "informe_intersup_contratista";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_date",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto128["m_sql"] = "sign_date";
$proto128["m_srcTableName"] = "informe_intersup_contratista";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_mailnot",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto130["m_sql"] = "sign_mailnot";
$proto130["m_srcTableName"] = "informe_intersup_contratista";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_verificacert",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto132["m_sql"] = "sign_verificacert";
$proto132["m_srcTableName"] = "informe_intersup_contratista";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_file",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto134["m_sql"] = "sign_file";
$proto134["m_srcTableName"] = "informe_intersup_contratista";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_verificacert_ip",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto136["m_sql"] = "sign_verificacert_ip";
$proto136["m_srcTableName"] = "informe_intersup_contratista";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_verificacert_user",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto138["m_sql"] = "sign_verificacert_user";
$proto138["m_srcTableName"] = "informe_intersup_contratista";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_verificacert_date",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto140["m_sql"] = "sign_verificacert_date";
$proto140["m_srcTableName"] = "informe_intersup_contratista";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_supervisoremail",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup_contratista"
));

$proto142["m_sql"] = "inf_supervisoremail";
$proto142["m_srcTableName"] = "informe_intersup_contratista";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto144=array();
$proto144["m_link"] = "SQLL_MAIN";
			$proto145=array();
$proto145["m_strName"] = "informe_intersup";
$proto145["m_srcTableName"] = "informe_intersup_contratista";
$proto145["m_columns"] = array();
$proto145["m_columns"][] = "cert_compare";
$proto145["m_columns"][] = "cert_date";
$proto145["m_columns"][] = "cert_file";
$proto145["m_columns"][] = "cert_mail";
$proto145["m_columns"][] = "cert_mes";
$proto145["m_columns"][] = "cert_modalidad";
$proto145["m_columns"][] = "cert_msj";
$proto145["m_columns"][] = "cert_process";
$proto145["m_columns"][] = "cont_cesion";
$proto145["m_columns"][] = "cont_modifica";
$proto145["m_columns"][] = "file_verifica";
$proto145["m_columns"][] = "id_cont_fk";
$proto145["m_columns"][] = "inf_actividades";
$proto145["m_columns"][] = "inf_adicionreduc";
$proto145["m_columns"][] = "inf_anio";
$proto145["m_columns"][] = "inf_avgejecucion";
$proto145["m_columns"][] = "inf_cargo";
$proto145["m_columns"][] = "inf_cdp";
$proto145["m_columns"][] = "inf_consecutivo";
$proto145["m_columns"][] = "inf_declarainconf";
$proto145["m_columns"][] = "inf_declarainconf_obs";
$proto145["m_columns"][] = "inf_dependencia";
$proto145["m_columns"][] = "inf_doccontratista";
$proto145["m_columns"][] = "inf_estado";
$proto145["m_columns"][] = "inf_fechacont_f";
$proto145["m_columns"][] = "inf_fechacont_i";
$proto145["m_columns"][] = "inf_fechapresenta";
$proto145["m_columns"][] = "inf_fecharep_f";
$proto145["m_columns"][] = "inf_fecharep_i";
$proto145["m_columns"][] = "inf_fechasuscripcion";
$proto145["m_columns"][] = "inf_hash";
$proto145["m_columns"][] = "inf_id";
$proto145["m_columns"][] = "inf_incumplimiento";
$proto145["m_columns"][] = "inf_incumplimiento_obs";
$proto145["m_columns"][] = "inf_intersup";
$proto145["m_columns"][] = "inf_mail_a";
$proto145["m_columns"][] = "inf_mail_b";
$proto145["m_columns"][] = "inf_modificacionesplazo";
$proto145["m_columns"][] = "inf_msj";
$proto145["m_columns"][] = "inf_nombre";
$proto145["m_columns"][] = "inf_nombrecontratista";
$proto145["m_columns"][] = "inf_numerocontrato";
$proto145["m_columns"][] = "inf_objeto";
$proto145["m_columns"][] = "inf_otrosaspectostecnicos";
$proto145["m_columns"][] = "inf_periodicidad";
$proto145["m_columns"][] = "inf_plazo";
$proto145["m_columns"][] = "inf_prenum";
$proto145["m_columns"][] = "inf_recomyobserva";
$proto145["m_columns"][] = "inf_rp";
$proto145["m_columns"][] = "inf_rubrocode";
$proto145["m_columns"][] = "inf_rubroname";
$proto145["m_columns"][] = "inf_supervisoremail";
$proto145["m_columns"][] = "inf_ultimopago";
$proto145["m_columns"][] = "inf_usopresupuestal";
$proto145["m_columns"][] = "inf_valorcontrato";
$proto145["m_columns"][] = "inf_vigencia";
$proto145["m_columns"][] = "mun_ejec";
$proto145["m_columns"][] = "num_poliza";
$proto145["m_columns"][] = "qty_inf";
$proto145["m_columns"][] = "qty_inf_compare";
$proto145["m_columns"][] = "qty_inf_procesa";
$proto145["m_columns"][] = "qty_inf_verifica";
$proto145["m_columns"][] = "sign_date";
$proto145["m_columns"][] = "sign_file";
$proto145["m_columns"][] = "sign_hash";
$proto145["m_columns"][] = "sign_mailnot";
$proto145["m_columns"][] = "sign_verificacert";
$proto145["m_columns"][] = "sign_verificacert_date";
$proto145["m_columns"][] = "sign_verificacert_ip";
$proto145["m_columns"][] = "sign_verificacert_user";
$proto145["m_columns"][] = "sys_date";
$proto145["m_columns"][] = "url_secop";
$obj = new SQLTable($proto145);

$proto144["m_table"] = $obj;
$proto144["m_sql"] = "informe_intersup";
$proto144["m_alias"] = "";
$proto144["m_srcTableName"] = "informe_intersup_contratista";
$proto146=array();
$proto146["m_sql"] = "";
$proto146["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto146["m_column"]=$obj;
$proto146["m_contained"] = array();
$proto146["m_strCase"] = "";
$proto146["m_havingmode"] = false;
$proto146["m_inBrackets"] = false;
$proto146["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto146);

$proto144["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto144);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="informe_intersup_contratista";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_informe_intersup_contratista = createSqlQuery_informe_intersup_contratista();


	
								;

																																																																					

$tdatainforme_intersup_contratista[".sqlquery"] = $queryData_informe_intersup_contratista;



include_once(getabspath("include/informe_intersup_contratista_events.php"));
$tdatainforme_intersup_contratista[".hasEvents"] = true;

?>