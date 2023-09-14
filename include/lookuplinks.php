<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["tipo_docidentidad"] ) ) {
			$lookupTableLinks["tipo_docidentidad"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_docidentidad"]["contractor_master.contractor_type"] )) {
			$lookupTableLinks["tipo_docidentidad"]["contractor_master.contractor_type"] = array();
		}
		$lookupTableLinks["tipo_docidentidad"]["contractor_master.contractor_type"]["edit"] = array("table" => "contractor_master", "field" => "contractor_type", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["contractor_master.contractor_city"] )) {
			$lookupTableLinks["q_divipola"]["contractor_master.contractor_city"] = array();
		}
		$lookupTableLinks["q_divipola"]["contractor_master.contractor_city"]["edit"] = array("table" => "contractor_master", "field" => "contractor_city", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["contractor_master.contractor_sup_jerarquico"] )) {
			$lookupTableLinks["dependencias_001"]["contractor_master.contractor_sup_jerarquico"] = array();
		}
		$lookupTableLinks["dependencias_001"]["contractor_master.contractor_sup_jerarquico"]["edit"] = array("table" => "contractor_master", "field" => "contractor_sup_jerarquico", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["contractor_master.contractor_dependencia"] )) {
			$lookupTableLinks["dependencia"]["contractor_master.contractor_dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["contractor_master.contractor_dependencia"]["edit"] = array("table" => "contractor_master", "field" => "contractor_dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_banco"] ) ) {
			$lookupTableLinks["tipo_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_banco"]["contractor_master.bank_name"] )) {
			$lookupTableLinks["tipo_banco"]["contractor_master.bank_name"] = array();
		}
		$lookupTableLinks["tipo_banco"]["contractor_master.bank_name"]["edit"] = array("table" => "contractor_master", "field" => "bank_name", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_cta_banco"] ) ) {
			$lookupTableLinks["tipo_cta_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_cta_banco"]["contractor_master.bank_cta_type"] )) {
			$lookupTableLinks["tipo_cta_banco"]["contractor_master.bank_cta_type"] = array();
		}
		$lookupTableLinks["tipo_cta_banco"]["contractor_master.bank_cta_type"]["edit"] = array("table" => "contractor_master", "field" => "bank_cta_type", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_regimen"] ) ) {
			$lookupTableLinks["tipo_regimen"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_regimen"]["contractor_master.iva_regimen"] )) {
			$lookupTableLinks["tipo_regimen"]["contractor_master.iva_regimen"] = array();
		}
		$lookupTableLinks["tipo_regimen"]["contractor_master.iva_regimen"]["edit"] = array("table" => "contractor_master", "field" => "iva_regimen", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["contractor_master.factura"] )) {
			$lookupTableLinks["tparam_sn"]["contractor_master.factura"] = array();
		}
		$lookupTableLinks["tparam_sn"]["contractor_master.factura"]["edit"] = array("table" => "contractor_master", "field" => "factura", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_ciiu"] ) ) {
			$lookupTableLinks["tparam_ciiu"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_ciiu"]["contractor_master.actividad_economica"] )) {
			$lookupTableLinks["tparam_ciiu"]["contractor_master.actividad_economica"] = array();
		}
		$lookupTableLinks["tparam_ciiu"]["contractor_master.actividad_economica"]["edit"] = array("table" => "contractor_master", "field" => "actividad_economica", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_reponsabilidades"] ) ) {
			$lookupTableLinks["tparam_reponsabilidades"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_reponsabilidades"]["contractor_master.responsabilidades"] )) {
			$lookupTableLinks["tparam_reponsabilidades"]["contractor_master.responsabilidades"] = array();
		}
		$lookupTableLinks["tparam_reponsabilidades"]["contractor_master.responsabilidades"]["edit"] = array("table" => "contractor_master", "field" => "responsabilidades", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fondosalud"] ) ) {
			$lookupTableLinks["tparam_fondosalud"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fondosalud"]["contractor_master.contractor_eps"] )) {
			$lookupTableLinks["tparam_fondosalud"]["contractor_master.contractor_eps"] = array();
		}
		$lookupTableLinks["tparam_fondosalud"]["contractor_master.contractor_eps"]["edit"] = array("table" => "contractor_master", "field" => "contractor_eps", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fondopension"] ) ) {
			$lookupTableLinks["tparam_fondopension"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fondopension"]["contractor_master.contractor_fondopensiones"] )) {
			$lookupTableLinks["tparam_fondopension"]["contractor_master.contractor_fondopensiones"] = array();
		}
		$lookupTableLinks["tparam_fondopension"]["contractor_master.contractor_fondopensiones"]["edit"] = array("table" => "contractor_master", "field" => "contractor_fondopensiones", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_cajacomp"] ) ) {
			$lookupTableLinks["tparam_cajacomp"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_cajacomp"]["contractor_master.contractor_cajacompensacion"] )) {
			$lookupTableLinks["tparam_cajacomp"]["contractor_master.contractor_cajacompensacion"] = array();
		}
		$lookupTableLinks["tparam_cajacomp"]["contractor_master.contractor_cajacompensacion"]["edit"] = array("table" => "contractor_master", "field" => "contractor_cajacompensacion", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_arl"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_arl"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_arl"]["contractor_master.contractor_arl"] )) {
			$lookupTableLinks["tparam_tipo_ct_arl"]["contractor_master.contractor_arl"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_arl"]["contractor_master.contractor_arl"]["edit"] = array("table" => "contractor_master", "field" => "contractor_arl", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_genero"] ) ) {
			$lookupTableLinks["tparam_genero"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_genero"]["contractor_master.dem_genero"] )) {
			$lookupTableLinks["tparam_genero"]["contractor_master.dem_genero"] = array();
		}
		$lookupTableLinks["tparam_genero"]["contractor_master.dem_genero"]["edit"] = array("table" => "contractor_master", "field" => "dem_genero", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["contractor_master.ct_fecha_nacimiento_mun"] )) {
			$lookupTableLinks["q_divipola"]["contractor_master.ct_fecha_nacimiento_mun"] = array();
		}
		$lookupTableLinks["q_divipola"]["contractor_master.ct_fecha_nacimiento_mun"]["edit"] = array("table" => "contractor_master", "field" => "ct_fecha_nacimiento_mun", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_discapacidad"] ) ) {
			$lookupTableLinks["tparam_discapacidad"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_discapacidad"]["contractor_master.dem_discapacidad"] )) {
			$lookupTableLinks["tparam_discapacidad"]["contractor_master.dem_discapacidad"] = array();
		}
		$lookupTableLinks["tparam_discapacidad"]["contractor_master.dem_discapacidad"]["edit"] = array("table" => "contractor_master", "field" => "dem_discapacidad", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["contractor_master.terms_acepta"] )) {
			$lookupTableLinks["tparam_sn"]["contractor_master.terms_acepta"] = array();
		}
		$lookupTableLinks["tparam_sn"]["contractor_master.terms_acepta"]["edit"] = array("table" => "contractor_master", "field" => "terms_acepta", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_naturaleza"] ) ) {
			$lookupTableLinks["tparam_naturaleza"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_naturaleza"]["contractor_master.contractor_naturaleza"] )) {
			$lookupTableLinks["tparam_naturaleza"]["contractor_master.contractor_naturaleza"] = array();
		}
		$lookupTableLinks["tparam_naturaleza"]["contractor_master.contractor_naturaleza"]["edit"] = array("table" => "contractor_master", "field" => "contractor_naturaleza", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["contrato.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["contrato.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["contrato.cont_estado"]["edit"] = array("table" => "contrato", "field" => "cont_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_tipo"] ) ) {
			$lookupTableLinks["contrato_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_tipo"]["contrato.cont_tipo"] )) {
			$lookupTableLinks["contrato_tipo"]["contrato.cont_tipo"] = array();
		}
		$lookupTableLinks["contrato_tipo"]["contrato.cont_tipo"]["edit"] = array("table" => "contrato", "field" => "cont_tipo", "page" => "edit");
		if( !isset( $lookupTableLinks["interventor_periodos"] ) ) {
			$lookupTableLinks["interventor_periodos"] = array();
		}
		if( !isset( $lookupTableLinks["interventor_periodos"]["contrato.cont_periodicidad"] )) {
			$lookupTableLinks["interventor_periodos"]["contrato.cont_periodicidad"] = array();
		}
		$lookupTableLinks["interventor_periodos"]["contrato.cont_periodicidad"]["edit"] = array("table" => "contrato", "field" => "cont_periodicidad", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_forma_pago"] ) ) {
			$lookupTableLinks["contrato_forma_pago"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_forma_pago"]["contrato.cont_formapago"] )) {
			$lookupTableLinks["contrato_forma_pago"]["contrato.cont_formapago"] = array();
		}
		$lookupTableLinks["contrato_forma_pago"]["contrato.cont_formapago"]["edit"] = array("table" => "contrato", "field" => "cont_formapago", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_002"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"]["contrato.cont_causalc"] )) {
			$lookupTableLinks["tparam_tipo_ct_002"]["contrato.cont_causalc"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_002"]["contrato.cont_causalc"]["edit"] = array("table" => "contrato", "field" => "cont_causalc", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_genero"] ) ) {
			$lookupTableLinks["tparam_genero"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_genero"]["contractor_master_chart_genero.dem_genero"] )) {
			$lookupTableLinks["tparam_genero"]["contractor_master_chart_genero.dem_genero"] = array();
		}
		$lookupTableLinks["tparam_genero"]["contractor_master_chart_genero.dem_genero"]["search"] = array("table" => "contractor_master_Chart_genero", "field" => "dem_genero", "page" => "search");
		if( !isset( $lookupTableLinks["tipo_docidentidad"] ) ) {
			$lookupTableLinks["tipo_docidentidad"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_docidentidad"]["contractor_master_view.contractor_type"] )) {
			$lookupTableLinks["tipo_docidentidad"]["contractor_master_view.contractor_type"] = array();
		}
		$lookupTableLinks["tipo_docidentidad"]["contractor_master_view.contractor_type"]["edit"] = array("table" => "contractor_master_view", "field" => "contractor_type", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["contractor_master_view.contractor_city"] )) {
			$lookupTableLinks["q_divipola"]["contractor_master_view.contractor_city"] = array();
		}
		$lookupTableLinks["q_divipola"]["contractor_master_view.contractor_city"]["edit"] = array("table" => "contractor_master_view", "field" => "contractor_city", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["contractor_master_view.contractor_sup_jerarquico"] )) {
			$lookupTableLinks["dependencias_001"]["contractor_master_view.contractor_sup_jerarquico"] = array();
		}
		$lookupTableLinks["dependencias_001"]["contractor_master_view.contractor_sup_jerarquico"]["edit"] = array("table" => "contractor_master_view", "field" => "contractor_sup_jerarquico", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["contractor_master_view.contractor_dependencia"] )) {
			$lookupTableLinks["dependencia"]["contractor_master_view.contractor_dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["contractor_master_view.contractor_dependencia"]["edit"] = array("table" => "contractor_master_view", "field" => "contractor_dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_banco"] ) ) {
			$lookupTableLinks["tipo_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_banco"]["contractor_master_view.bank_name"] )) {
			$lookupTableLinks["tipo_banco"]["contractor_master_view.bank_name"] = array();
		}
		$lookupTableLinks["tipo_banco"]["contractor_master_view.bank_name"]["edit"] = array("table" => "contractor_master_view", "field" => "bank_name", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_cta_banco"] ) ) {
			$lookupTableLinks["tipo_cta_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_cta_banco"]["contractor_master_view.bank_cta_type"] )) {
			$lookupTableLinks["tipo_cta_banco"]["contractor_master_view.bank_cta_type"] = array();
		}
		$lookupTableLinks["tipo_cta_banco"]["contractor_master_view.bank_cta_type"]["edit"] = array("table" => "contractor_master_view", "field" => "bank_cta_type", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_regimen"] ) ) {
			$lookupTableLinks["tipo_regimen"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_regimen"]["contractor_master_view.iva_regimen"] )) {
			$lookupTableLinks["tipo_regimen"]["contractor_master_view.iva_regimen"] = array();
		}
		$lookupTableLinks["tipo_regimen"]["contractor_master_view.iva_regimen"]["edit"] = array("table" => "contractor_master_view", "field" => "iva_regimen", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fondosalud"] ) ) {
			$lookupTableLinks["tparam_fondosalud"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fondosalud"]["contractor_master_view.contractor_eps"] )) {
			$lookupTableLinks["tparam_fondosalud"]["contractor_master_view.contractor_eps"] = array();
		}
		$lookupTableLinks["tparam_fondosalud"]["contractor_master_view.contractor_eps"]["edit"] = array("table" => "contractor_master_view", "field" => "contractor_eps", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fondopension"] ) ) {
			$lookupTableLinks["tparam_fondopension"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fondopension"]["contractor_master_view.contractor_fondopensiones"] )) {
			$lookupTableLinks["tparam_fondopension"]["contractor_master_view.contractor_fondopensiones"] = array();
		}
		$lookupTableLinks["tparam_fondopension"]["contractor_master_view.contractor_fondopensiones"]["edit"] = array("table" => "contractor_master_view", "field" => "contractor_fondopensiones", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_cajacomp"] ) ) {
			$lookupTableLinks["tparam_cajacomp"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_cajacomp"]["contractor_master_view.contractor_cajacompensacion"] )) {
			$lookupTableLinks["tparam_cajacomp"]["contractor_master_view.contractor_cajacompensacion"] = array();
		}
		$lookupTableLinks["tparam_cajacomp"]["contractor_master_view.contractor_cajacompensacion"]["edit"] = array("table" => "contractor_master_view", "field" => "contractor_cajacompensacion", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_arl"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_arl"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_arl"]["contractor_master_view.contractor_arl"] )) {
			$lookupTableLinks["tparam_tipo_ct_arl"]["contractor_master_view.contractor_arl"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_arl"]["contractor_master_view.contractor_arl"]["edit"] = array("table" => "contractor_master_view", "field" => "contractor_arl", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_genero"] ) ) {
			$lookupTableLinks["tparam_genero"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_genero"]["contractor_master_view.dem_genero"] )) {
			$lookupTableLinks["tparam_genero"]["contractor_master_view.dem_genero"] = array();
		}
		$lookupTableLinks["tparam_genero"]["contractor_master_view.dem_genero"]["edit"] = array("table" => "contractor_master_view", "field" => "dem_genero", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_discapacidad"] ) ) {
			$lookupTableLinks["tparam_discapacidad"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_discapacidad"]["contractor_master_view.dem_discapacidad"] )) {
			$lookupTableLinks["tparam_discapacidad"]["contractor_master_view.dem_discapacidad"] = array();
		}
		$lookupTableLinks["tparam_discapacidad"]["contractor_master_view.dem_discapacidad"]["edit"] = array("table" => "contractor_master_view", "field" => "dem_discapacidad", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["contractor_master_view.terms_acepta"] )) {
			$lookupTableLinks["tparam_sn"]["contractor_master_view.terms_acepta"] = array();
		}
		$lookupTableLinks["tparam_sn"]["contractor_master_view.terms_acepta"]["edit"] = array("table" => "contractor_master_view", "field" => "terms_acepta", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fondosalud"] ) ) {
			$lookupTableLinks["tparam_fondosalud"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fondosalud"]["contractor_master_chart_eps.contractor_eps"] )) {
			$lookupTableLinks["tparam_fondosalud"]["contractor_master_chart_eps.contractor_eps"] = array();
		}
		$lookupTableLinks["tparam_fondosalud"]["contractor_master_chart_eps.contractor_eps"]["search"] = array("table" => "contractor_master_chart_eps", "field" => "contractor_eps", "page" => "search");
		if( !isset( $lookupTableLinks["tparam_fondopension"] ) ) {
			$lookupTableLinks["tparam_fondopension"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fondopension"]["contractor_master_chart_fondopension.contractor_fondopensiones"] )) {
			$lookupTableLinks["tparam_fondopension"]["contractor_master_chart_fondopension.contractor_fondopensiones"] = array();
		}
		$lookupTableLinks["tparam_fondopension"]["contractor_master_chart_fondopension.contractor_fondopensiones"]["search"] = array("table" => "contractor_master_chart_fondopension", "field" => "contractor_fondopensiones", "page" => "search");
		if( !isset( $lookupTableLinks["informe_intersup_estado"] ) ) {
			$lookupTableLinks["informe_intersup_estado"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_estado"]["informe_intersup_contratista.inf_estado"] )) {
			$lookupTableLinks["informe_intersup_estado"]["informe_intersup_contratista.inf_estado"] = array();
		}
		$lookupTableLinks["informe_intersup_estado"]["informe_intersup_contratista.inf_estado"]["edit"] = array("table" => "informe_intersup_contratista", "field" => "inf_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["informe_intersup_contratista.inf_intersup"] )) {
			$lookupTableLinks["global_users"]["informe_intersup_contratista.inf_intersup"] = array();
		}
		$lookupTableLinks["global_users"]["informe_intersup_contratista.inf_intersup"]["edit"] = array("table" => "informe_intersup_contratista", "field" => "inf_intersup", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn_oe"] ) ) {
			$lookupTableLinks["tparam_sn_oe"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe_contratista.sup_aprueba"] )) {
			$lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe_contratista.sup_aprueba"] = array();
		}
		$lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe_contratista.sup_aprueba"]["edit"] = array("table" => "informe_intersup_oe_contratista", "field" => "sup_aprueba", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_anexos_tipo"] ) ) {
			$lookupTableLinks["informe_intersup_anexos_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_anexos_tipo"]["informe_intersup_anexos_contratista.anexo_titulo"] )) {
			$lookupTableLinks["informe_intersup_anexos_tipo"]["informe_intersup_anexos_contratista.anexo_titulo"] = array();
		}
		$lookupTableLinks["informe_intersup_anexos_tipo"]["informe_intersup_anexos_contratista.anexo_titulo"]["edit"] = array("table" => "informe_intersup_anexos_contratista", "field" => "anexo_titulo", "page" => "edit");
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores"] ) ) {
			$lookupTableLinks["q_bandejaentrada_supervisores"] = array();
		}
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores"]["hoja_ruta_2020_trpn.hr_nit_contra_ta"] )) {
			$lookupTableLinks["q_bandejaentrada_supervisores"]["hoja_ruta_2020_trpn.hr_nit_contra_ta"] = array();
		}
		$lookupTableLinks["q_bandejaentrada_supervisores"]["hoja_ruta_2020_trpn.hr_nit_contra_ta"]["edit"] = array("table" => "hoja_ruta_2020_trpn", "field" => "hr_nit_contra_ta", "page" => "edit");
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores"] ) ) {
			$lookupTableLinks["q_bandejaentrada_supervisores"] = array();
		}
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores"]["hoja_ruta_2020_trpn.id_cont_fk"] )) {
			$lookupTableLinks["q_bandejaentrada_supervisores"]["hoja_ruta_2020_trpn.id_cont_fk"] = array();
		}
		$lookupTableLinks["q_bandejaentrada_supervisores"]["hoja_ruta_2020_trpn.id_cont_fk"]["edit"] = array("table" => "hoja_ruta_2020_trpn", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_genera_informe"] ) ) {
			$lookupTableLinks["q_genera_informe"] = array();
		}
		if( !isset( $lookupTableLinks["q_genera_informe"]["hoja_ruta_2020_trpn.id_informe_fk"] )) {
			$lookupTableLinks["q_genera_informe"]["hoja_ruta_2020_trpn.id_informe_fk"] = array();
		}
		$lookupTableLinks["q_genera_informe"]["hoja_ruta_2020_trpn.id_informe_fk"]["edit"] = array("table" => "hoja_ruta_2020_trpn", "field" => "id_informe_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["hoja_ruta_tparam_conceptos"] ) ) {
			$lookupTableLinks["hoja_ruta_tparam_conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_tparam_conceptos"]["hoja_ruta_2020_trpn.hr_concepto_id"] )) {
			$lookupTableLinks["hoja_ruta_tparam_conceptos"]["hoja_ruta_2020_trpn.hr_concepto_id"] = array();
		}
		$lookupTableLinks["hoja_ruta_tparam_conceptos"]["hoja_ruta_2020_trpn.hr_concepto_id"]["edit"] = array("table" => "hoja_ruta_2020_trpn", "field" => "hr_concepto_id", "page" => "edit");
		if( !isset( $lookupTableLinks["nomina_cont_meses"] ) ) {
			$lookupTableLinks["nomina_cont_meses"] = array();
		}
		if( !isset( $lookupTableLinks["nomina_cont_meses"]["hoja_ruta_2020_trpn.hr_asunto"] )) {
			$lookupTableLinks["nomina_cont_meses"]["hoja_ruta_2020_trpn.hr_asunto"] = array();
		}
		$lookupTableLinks["nomina_cont_meses"]["hoja_ruta_2020_trpn.hr_asunto"]["add"] = array("table" => "hoja_ruta_2020_trpn", "field" => "hr_asunto", "page" => "add");
		if( !isset( $lookupTableLinks["nomina_cont_meses"] ) ) {
			$lookupTableLinks["nomina_cont_meses"] = array();
		}
		if( !isset( $lookupTableLinks["nomina_cont_meses"]["hoja_ruta_2020_trpn.hr_asunto"] )) {
			$lookupTableLinks["nomina_cont_meses"]["hoja_ruta_2020_trpn.hr_asunto"] = array();
		}
		$lookupTableLinks["nomina_cont_meses"]["hoja_ruta_2020_trpn.hr_asunto"]["search"] = array("table" => "hoja_ruta_2020_trpn", "field" => "hr_asunto", "page" => "search");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["hoja_ruta_2020_trpn.sys_user"] )) {
			$lookupTableLinks["global_users"]["hoja_ruta_2020_trpn.sys_user"] = array();
		}
		$lookupTableLinks["global_users"]["hoja_ruta_2020_trpn.sys_user"]["edit"] = array("table" => "hoja_ruta_2020_trpn", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"] ) ) {
			$lookupTableLinks["hoja_ruta_event_type"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn.evento_type_id_fk"] )) {
			$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn.evento_type_id_fk"] = array();
		}
		$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn.evento_type_id_fk"]["edit"] = array("table" => "hoja_ruta_2020_trpn", "field" => "evento_type_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"] ) ) {
			$lookupTableLinks["hoja_ruta_event_type"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn.etapa"] )) {
			$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn.etapa"] = array();
		}
		$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn.etapa"]["edit"] = array("table" => "hoja_ruta_2020_trpn", "field" => "etapa", "page" => "edit");
		if( !isset( $lookupTableLinks["q_info_cxc"] ) ) {
			$lookupTableLinks["q_info_cxc"] = array();
		}
		if( !isset( $lookupTableLinks["q_info_cxc"]["hoja_ruta_2020_trpn.cxc_id_fk"] )) {
			$lookupTableLinks["q_info_cxc"]["hoja_ruta_2020_trpn.cxc_id_fk"] = array();
		}
		$lookupTableLinks["q_info_cxc"]["hoja_ruta_2020_trpn.cxc_id_fk"]["edit"] = array("table" => "hoja_ruta_2020_trpn", "field" => "cxc_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["interventor_interno"] ) ) {
			$lookupTableLinks["interventor_interno"] = array();
		}
		if( !isset( $lookupTableLinks["interventor_interno"]["hoja_ruta_2020_trpn.supervisor_email"] )) {
			$lookupTableLinks["interventor_interno"]["hoja_ruta_2020_trpn.supervisor_email"] = array();
		}
		$lookupTableLinks["interventor_interno"]["hoja_ruta_2020_trpn.supervisor_email"]["edit"] = array("table" => "hoja_ruta_2020_trpn", "field" => "supervisor_email", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_4"] ) ) {
			$lookupTableLinks["informe_intersup_4"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_4"]["informe_intersup_cxc.inf_id_fk"] )) {
			$lookupTableLinks["informe_intersup_4"]["informe_intersup_cxc.inf_id_fk"] = array();
		}
		$lookupTableLinks["informe_intersup_4"]["informe_intersup_cxc.inf_id_fk"]["edit"] = array("table" => "informe_intersup_cxc", "field" => "inf_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores"] ) ) {
			$lookupTableLinks["q_bandejaentrada_supervisores"] = array();
		}
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores"]["informe_intersup_cxc.id_cont"] )) {
			$lookupTableLinks["q_bandejaentrada_supervisores"]["informe_intersup_cxc.id_cont"] = array();
		}
		$lookupTableLinks["q_bandejaentrada_supervisores"]["informe_intersup_cxc.id_cont"]["edit"] = array("table" => "informe_intersup_cxc", "field" => "id_cont", "page" => "edit");
		if( !isset( $lookupTableLinks["q_inf_plandepagos"] ) ) {
			$lookupTableLinks["q_inf_plandepagos"] = array();
		}
		if( !isset( $lookupTableLinks["q_inf_plandepagos"]["informe_intersup_cxc.id_consecutivo"] )) {
			$lookupTableLinks["q_inf_plandepagos"]["informe_intersup_cxc.id_consecutivo"] = array();
		}
		$lookupTableLinks["q_inf_plandepagos"]["informe_intersup_cxc.id_consecutivo"]["edit"] = array("table" => "informe_intersup_cxc", "field" => "id_consecutivo", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["informe_intersup_cxc.cxc_numdoc"] )) {
			$lookupTableLinks["contractor_master"]["informe_intersup_cxc.cxc_numdoc"] = array();
		}
		$lookupTableLinks["contractor_master"]["informe_intersup_cxc.cxc_numdoc"]["edit"] = array("table" => "informe_intersup_cxc", "field" => "cxc_numdoc", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_banco"] ) ) {
			$lookupTableLinks["tipo_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_banco"]["informe_intersup_cxc.cont_banco"] )) {
			$lookupTableLinks["tipo_banco"]["informe_intersup_cxc.cont_banco"] = array();
		}
		$lookupTableLinks["tipo_banco"]["informe_intersup_cxc.cont_banco"]["edit"] = array("table" => "informe_intersup_cxc", "field" => "cont_banco", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_cta_banco"] ) ) {
			$lookupTableLinks["tipo_cta_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_cta_banco"]["informe_intersup_cxc.cont_cuentatipo"] )) {
			$lookupTableLinks["tipo_cta_banco"]["informe_intersup_cxc.cont_cuentatipo"] = array();
		}
		$lookupTableLinks["tipo_cta_banco"]["informe_intersup_cxc.cont_cuentatipo"]["edit"] = array("table" => "informe_intersup_cxc", "field" => "cont_cuentatipo", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["informe_intersup_cxc.cont_factura"] )) {
			$lookupTableLinks["tparam_sn"]["informe_intersup_cxc.cont_factura"] = array();
		}
		$lookupTableLinks["tparam_sn"]["informe_intersup_cxc.cont_factura"]["edit"] = array("table" => "informe_intersup_cxc", "field" => "cont_factura", "page" => "edit");
		if( !isset( $lookupTableLinks["nomina_cont_meses"] ) ) {
			$lookupTableLinks["nomina_cont_meses"] = array();
		}
		if( !isset( $lookupTableLinks["nomina_cont_meses"]["informe_intersup_cxc.inf_mes"] )) {
			$lookupTableLinks["nomina_cont_meses"]["informe_intersup_cxc.inf_mes"] = array();
		}
		$lookupTableLinks["nomina_cont_meses"]["informe_intersup_cxc.inf_mes"]["edit"] = array("table" => "informe_intersup_cxc", "field" => "inf_mes", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipopago"] ) ) {
			$lookupTableLinks["tparam_tipopago"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipopago"]["informe_intersup_cxc.inf_tipopago"] )) {
			$lookupTableLinks["tparam_tipopago"]["informe_intersup_cxc.inf_tipopago"] = array();
		}
		$lookupTableLinks["tparam_tipopago"]["informe_intersup_cxc.inf_tipopago"]["edit"] = array("table" => "informe_intersup_cxc", "field" => "inf_tipopago", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_estado"] ) ) {
			$lookupTableLinks["informe_intersup_estado"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_estado"]["informe_intersup_4.inf_estado"] )) {
			$lookupTableLinks["informe_intersup_estado"]["informe_intersup_4.inf_estado"] = array();
		}
		$lookupTableLinks["informe_intersup_estado"]["informe_intersup_4.inf_estado"]["edit"] = array("table" => "informe_intersup_4", "field" => "inf_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["informe_intersup_4.inf_intersup"] )) {
			$lookupTableLinks["global_users"]["informe_intersup_4.inf_intersup"] = array();
		}
		$lookupTableLinks["global_users"]["informe_intersup_4.inf_intersup"]["edit"] = array("table" => "informe_intersup_4", "field" => "inf_intersup", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["informe_intersup_plan_pagos.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["informe_intersup_plan_pagos.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["informe_intersup_plan_pagos.id_cont_fk"]["edit"] = array("table" => "informe_intersup_plan_pagos", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"]["edit"] = array("table" => "informe_intersup_plan_pagos", "field" => "inf_st", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["hoja_ruta_2020_tracking.sys_user"] )) {
			$lookupTableLinks["global_users"]["hoja_ruta_2020_tracking.sys_user"] = array();
		}
		$lookupTableLinks["global_users"]["hoja_ruta_2020_tracking.sys_user"]["edit"] = array("table" => "hoja_ruta_2020_tracking", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"] ) ) {
			$lookupTableLinks["hoja_ruta_event_type"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_tracking.evento_type_id_fk"] )) {
			$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_tracking.evento_type_id_fk"] = array();
		}
		$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_tracking.evento_type_id_fk"]["edit"] = array("table" => "hoja_ruta_2020_tracking", "field" => "evento_type_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_docidentidad"] ) ) {
			$lookupTableLinks["tipo_docidentidad"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_docidentidad"]["contractor_master_jur.contractor_type"] )) {
			$lookupTableLinks["tipo_docidentidad"]["contractor_master_jur.contractor_type"] = array();
		}
		$lookupTableLinks["tipo_docidentidad"]["contractor_master_jur.contractor_type"]["edit"] = array("table" => "contractor_master_jur", "field" => "contractor_type", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["contractor_master_jur.contractor_city"] )) {
			$lookupTableLinks["q_divipola"]["contractor_master_jur.contractor_city"] = array();
		}
		$lookupTableLinks["q_divipola"]["contractor_master_jur.contractor_city"]["edit"] = array("table" => "contractor_master_jur", "field" => "contractor_city", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["contractor_master_jur.contractor_sup_jerarquico"] )) {
			$lookupTableLinks["dependencias_001"]["contractor_master_jur.contractor_sup_jerarquico"] = array();
		}
		$lookupTableLinks["dependencias_001"]["contractor_master_jur.contractor_sup_jerarquico"]["edit"] = array("table" => "contractor_master_jur", "field" => "contractor_sup_jerarquico", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["contractor_master_jur.contractor_dependencia"] )) {
			$lookupTableLinks["dependencia"]["contractor_master_jur.contractor_dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["contractor_master_jur.contractor_dependencia"]["edit"] = array("table" => "contractor_master_jur", "field" => "contractor_dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_banco"] ) ) {
			$lookupTableLinks["tipo_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_banco"]["contractor_master_jur.bank_name"] )) {
			$lookupTableLinks["tipo_banco"]["contractor_master_jur.bank_name"] = array();
		}
		$lookupTableLinks["tipo_banco"]["contractor_master_jur.bank_name"]["edit"] = array("table" => "contractor_master_jur", "field" => "bank_name", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_cta_banco"] ) ) {
			$lookupTableLinks["tipo_cta_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_cta_banco"]["contractor_master_jur.bank_cta_type"] )) {
			$lookupTableLinks["tipo_cta_banco"]["contractor_master_jur.bank_cta_type"] = array();
		}
		$lookupTableLinks["tipo_cta_banco"]["contractor_master_jur.bank_cta_type"]["edit"] = array("table" => "contractor_master_jur", "field" => "bank_cta_type", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_regimen"] ) ) {
			$lookupTableLinks["tipo_regimen"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_regimen"]["contractor_master_jur.iva_regimen"] )) {
			$lookupTableLinks["tipo_regimen"]["contractor_master_jur.iva_regimen"] = array();
		}
		$lookupTableLinks["tipo_regimen"]["contractor_master_jur.iva_regimen"]["edit"] = array("table" => "contractor_master_jur", "field" => "iva_regimen", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["contractor_master_jur.factura"] )) {
			$lookupTableLinks["tparam_sn"]["contractor_master_jur.factura"] = array();
		}
		$lookupTableLinks["tparam_sn"]["contractor_master_jur.factura"]["edit"] = array("table" => "contractor_master_jur", "field" => "factura", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_ciiu"] ) ) {
			$lookupTableLinks["tparam_ciiu"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_ciiu"]["contractor_master_jur.actividad_economica"] )) {
			$lookupTableLinks["tparam_ciiu"]["contractor_master_jur.actividad_economica"] = array();
		}
		$lookupTableLinks["tparam_ciiu"]["contractor_master_jur.actividad_economica"]["edit"] = array("table" => "contractor_master_jur", "field" => "actividad_economica", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_reponsabilidades"] ) ) {
			$lookupTableLinks["tparam_reponsabilidades"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_reponsabilidades"]["contractor_master_jur.responsabilidades"] )) {
			$lookupTableLinks["tparam_reponsabilidades"]["contractor_master_jur.responsabilidades"] = array();
		}
		$lookupTableLinks["tparam_reponsabilidades"]["contractor_master_jur.responsabilidades"]["edit"] = array("table" => "contractor_master_jur", "field" => "responsabilidades", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fondosalud"] ) ) {
			$lookupTableLinks["tparam_fondosalud"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fondosalud"]["contractor_master_jur.contractor_eps"] )) {
			$lookupTableLinks["tparam_fondosalud"]["contractor_master_jur.contractor_eps"] = array();
		}
		$lookupTableLinks["tparam_fondosalud"]["contractor_master_jur.contractor_eps"]["edit"] = array("table" => "contractor_master_jur", "field" => "contractor_eps", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fondopension"] ) ) {
			$lookupTableLinks["tparam_fondopension"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fondopension"]["contractor_master_jur.contractor_fondopensiones"] )) {
			$lookupTableLinks["tparam_fondopension"]["contractor_master_jur.contractor_fondopensiones"] = array();
		}
		$lookupTableLinks["tparam_fondopension"]["contractor_master_jur.contractor_fondopensiones"]["edit"] = array("table" => "contractor_master_jur", "field" => "contractor_fondopensiones", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_cajacomp"] ) ) {
			$lookupTableLinks["tparam_cajacomp"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_cajacomp"]["contractor_master_jur.contractor_cajacompensacion"] )) {
			$lookupTableLinks["tparam_cajacomp"]["contractor_master_jur.contractor_cajacompensacion"] = array();
		}
		$lookupTableLinks["tparam_cajacomp"]["contractor_master_jur.contractor_cajacompensacion"]["edit"] = array("table" => "contractor_master_jur", "field" => "contractor_cajacompensacion", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_arl"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_arl"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_arl"]["contractor_master_jur.contractor_arl"] )) {
			$lookupTableLinks["tparam_tipo_ct_arl"]["contractor_master_jur.contractor_arl"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_arl"]["contractor_master_jur.contractor_arl"]["edit"] = array("table" => "contractor_master_jur", "field" => "contractor_arl", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_genero"] ) ) {
			$lookupTableLinks["tparam_genero"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_genero"]["contractor_master_jur.dem_genero"] )) {
			$lookupTableLinks["tparam_genero"]["contractor_master_jur.dem_genero"] = array();
		}
		$lookupTableLinks["tparam_genero"]["contractor_master_jur.dem_genero"]["edit"] = array("table" => "contractor_master_jur", "field" => "dem_genero", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["contractor_master_jur.ct_fecha_nacimiento_mun"] )) {
			$lookupTableLinks["q_divipola"]["contractor_master_jur.ct_fecha_nacimiento_mun"] = array();
		}
		$lookupTableLinks["q_divipola"]["contractor_master_jur.ct_fecha_nacimiento_mun"]["edit"] = array("table" => "contractor_master_jur", "field" => "ct_fecha_nacimiento_mun", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_discapacidad"] ) ) {
			$lookupTableLinks["tparam_discapacidad"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_discapacidad"]["contractor_master_jur.dem_discapacidad"] )) {
			$lookupTableLinks["tparam_discapacidad"]["contractor_master_jur.dem_discapacidad"] = array();
		}
		$lookupTableLinks["tparam_discapacidad"]["contractor_master_jur.dem_discapacidad"]["edit"] = array("table" => "contractor_master_jur", "field" => "dem_discapacidad", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["contractor_master_jur.terms_acepta"] )) {
			$lookupTableLinks["tparam_sn"]["contractor_master_jur.terms_acepta"] = array();
		}
		$lookupTableLinks["tparam_sn"]["contractor_master_jur.terms_acepta"]["edit"] = array("table" => "contractor_master_jur", "field" => "terms_acepta", "page" => "edit");
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores"] ) ) {
			$lookupTableLinks["q_bandejaentrada_supervisores"] = array();
		}
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores"]["hoja_ruta_2020_trpn_jur.hr_nit_contra_ta"] )) {
			$lookupTableLinks["q_bandejaentrada_supervisores"]["hoja_ruta_2020_trpn_jur.hr_nit_contra_ta"] = array();
		}
		$lookupTableLinks["q_bandejaentrada_supervisores"]["hoja_ruta_2020_trpn_jur.hr_nit_contra_ta"]["edit"] = array("table" => "hoja_ruta_2020_trpn_jur", "field" => "hr_nit_contra_ta", "page" => "edit");
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores"] ) ) {
			$lookupTableLinks["q_bandejaentrada_supervisores"] = array();
		}
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores"]["hoja_ruta_2020_trpn_jur.id_cont_fk"] )) {
			$lookupTableLinks["q_bandejaentrada_supervisores"]["hoja_ruta_2020_trpn_jur.id_cont_fk"] = array();
		}
		$lookupTableLinks["q_bandejaentrada_supervisores"]["hoja_ruta_2020_trpn_jur.id_cont_fk"]["edit"] = array("table" => "hoja_ruta_2020_trpn_jur", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_genera_informe"] ) ) {
			$lookupTableLinks["q_genera_informe"] = array();
		}
		if( !isset( $lookupTableLinks["q_genera_informe"]["hoja_ruta_2020_trpn_jur.id_informe_fk"] )) {
			$lookupTableLinks["q_genera_informe"]["hoja_ruta_2020_trpn_jur.id_informe_fk"] = array();
		}
		$lookupTableLinks["q_genera_informe"]["hoja_ruta_2020_trpn_jur.id_informe_fk"]["edit"] = array("table" => "hoja_ruta_2020_trpn_jur", "field" => "id_informe_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["hoja_ruta_tparam_conceptos"] ) ) {
			$lookupTableLinks["hoja_ruta_tparam_conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_tparam_conceptos"]["hoja_ruta_2020_trpn_jur.hr_concepto_id"] )) {
			$lookupTableLinks["hoja_ruta_tparam_conceptos"]["hoja_ruta_2020_trpn_jur.hr_concepto_id"] = array();
		}
		$lookupTableLinks["hoja_ruta_tparam_conceptos"]["hoja_ruta_2020_trpn_jur.hr_concepto_id"]["edit"] = array("table" => "hoja_ruta_2020_trpn_jur", "field" => "hr_concepto_id", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["hoja_ruta_2020_trpn_jur.sys_user"] )) {
			$lookupTableLinks["global_users"]["hoja_ruta_2020_trpn_jur.sys_user"] = array();
		}
		$lookupTableLinks["global_users"]["hoja_ruta_2020_trpn_jur.sys_user"]["edit"] = array("table" => "hoja_ruta_2020_trpn_jur", "field" => "sys_user", "page" => "edit");
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"] ) ) {
			$lookupTableLinks["hoja_ruta_event_type"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn_jur.evento_type_id_fk"] )) {
			$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn_jur.evento_type_id_fk"] = array();
		}
		$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn_jur.evento_type_id_fk"]["edit"] = array("table" => "hoja_ruta_2020_trpn_jur", "field" => "evento_type_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"] ) ) {
			$lookupTableLinks["hoja_ruta_event_type"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn_jur.evento_type_id_fk"] )) {
			$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn_jur.evento_type_id_fk"] = array();
		}
		$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn_jur.evento_type_id_fk"]["add"] = array("table" => "hoja_ruta_2020_trpn_jur", "field" => "evento_type_id_fk", "page" => "add");
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"] ) ) {
			$lookupTableLinks["hoja_ruta_event_type"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn_jur.evento_type_id_fk"] )) {
			$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn_jur.evento_type_id_fk"] = array();
		}
		$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn_jur.evento_type_id_fk"]["search"] = array("table" => "hoja_ruta_2020_trpn_jur", "field" => "evento_type_id_fk", "page" => "search");
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"] ) ) {
			$lookupTableLinks["hoja_ruta_event_type"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn_jur.etapa"] )) {
			$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn_jur.etapa"] = array();
		}
		$lookupTableLinks["hoja_ruta_event_type"]["hoja_ruta_2020_trpn_jur.etapa"]["edit"] = array("table" => "hoja_ruta_2020_trpn_jur", "field" => "etapa", "page" => "edit");
		if( !isset( $lookupTableLinks["q_info_cxc"] ) ) {
			$lookupTableLinks["q_info_cxc"] = array();
		}
		if( !isset( $lookupTableLinks["q_info_cxc"]["hoja_ruta_2020_trpn_jur.cxc_id_fk"] )) {
			$lookupTableLinks["q_info_cxc"]["hoja_ruta_2020_trpn_jur.cxc_id_fk"] = array();
		}
		$lookupTableLinks["q_info_cxc"]["hoja_ruta_2020_trpn_jur.cxc_id_fk"]["edit"] = array("table" => "hoja_ruta_2020_trpn_jur", "field" => "cxc_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["interventor_interno"] ) ) {
			$lookupTableLinks["interventor_interno"] = array();
		}
		if( !isset( $lookupTableLinks["interventor_interno"]["hoja_ruta_2020_trpn_jur.supervisor_email"] )) {
			$lookupTableLinks["interventor_interno"]["hoja_ruta_2020_trpn_jur.supervisor_email"] = array();
		}
		$lookupTableLinks["interventor_interno"]["hoja_ruta_2020_trpn_jur.supervisor_email"]["edit"] = array("table" => "hoja_ruta_2020_trpn_jur", "field" => "supervisor_email", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_tipo_unidad"] ) ) {
			$lookupTableLinks["contrato_tipo_unidad"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_tipo_unidad"]["hoja_ruta_2020_trpn_jur.uej"] )) {
			$lookupTableLinks["contrato_tipo_unidad"]["hoja_ruta_2020_trpn_jur.uej"] = array();
		}
		$lookupTableLinks["contrato_tipo_unidad"]["hoja_ruta_2020_trpn_jur.uej"]["edit"] = array("table" => "hoja_ruta_2020_trpn_jur", "field" => "uej", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["interventor_interno.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["interventor_interno.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["interventor_interno.id_cont_fk"]["edit"] = array("table" => "interventor_interno", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_habilita"] ) ) {
			$lookupTableLinks["tparam_habilita"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_habilita"]["interventor_interno.sup_status"] )) {
			$lookupTableLinks["tparam_habilita"]["interventor_interno.sup_status"] = array();
		}
		$lookupTableLinks["tparam_habilita"]["interventor_interno.sup_status"]["edit"] = array("table" => "interventor_interno", "field" => "sup_status", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_attached_type"] ) ) {
			$lookupTableLinks["contrato_attached_type"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_attached_type"]["contrato_attached.att_type"] )) {
			$lookupTableLinks["contrato_attached_type"]["contrato_attached.att_type"] = array();
		}
		$lookupTableLinks["contrato_attached_type"]["contrato_attached.att_type"]["edit"] = array("table" => "contrato_attached", "field" => "att_type", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["contrato_attached.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["contrato_attached.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["contrato_attached.id_cont_fk"]["edit"] = array("table" => "contrato_attached", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["hoja_ruta_2020"] ) ) {
			$lookupTableLinks["hoja_ruta_2020"] = array();
		}
		if( !isset( $lookupTableLinks["hoja_ruta_2020"]["hoja_ruta_2020_files.hr_id_fk"] )) {
			$lookupTableLinks["hoja_ruta_2020"]["hoja_ruta_2020_files.hr_id_fk"] = array();
		}
		$lookupTableLinks["hoja_ruta_2020"]["hoja_ruta_2020_files.hr_id_fk"]["edit"] = array("table" => "hoja_ruta_2020_files", "field" => "hr_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup"] ) ) {
			$lookupTableLinks["informe_intersup"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup"]["informe_intersup_oe.inf_id_fk"] )) {
			$lookupTableLinks["informe_intersup"]["informe_intersup_oe.inf_id_fk"] = array();
		}
		$lookupTableLinks["informe_intersup"]["informe_intersup_oe.inf_id_fk"]["edit"] = array("table" => "informe_intersup_oe", "field" => "inf_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_oe"] ) ) {
			$lookupTableLinks["contrato_oe"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_oe"]["informe_intersup_oe.oe_id_fk"] )) {
			$lookupTableLinks["contrato_oe"]["informe_intersup_oe.oe_id_fk"] = array();
		}
		$lookupTableLinks["contrato_oe"]["informe_intersup_oe.oe_id_fk"]["edit"] = array("table" => "informe_intersup_oe", "field" => "oe_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn_oe"] ) ) {
			$lookupTableLinks["tparam_sn_oe"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe.sup_aprueba"] )) {
			$lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe.sup_aprueba"] = array();
		}
		$lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe.sup_aprueba"]["edit"] = array("table" => "informe_intersup_oe", "field" => "sup_aprueba", "page" => "edit");
		if( !isset( $lookupTableLinks["q_001_dashboard"] ) ) {
			$lookupTableLinks["q_001_dashboard"] = array();
		}
		if( !isset( $lookupTableLinks["q_001_dashboard"]["informe_intersup_anexos_contratista_o.id_cont_fk"] )) {
			$lookupTableLinks["q_001_dashboard"]["informe_intersup_anexos_contratista_o.id_cont_fk"] = array();
		}
		$lookupTableLinks["q_001_dashboard"]["informe_intersup_anexos_contratista_o.id_cont_fk"]["edit"] = array("table" => "informe_intersup_anexos_contratista_o", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_anexos_tipo"] ) ) {
			$lookupTableLinks["informe_intersup_anexos_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_anexos_tipo"]["informe_intersup_anexos_contratista_o.anexo_titulo"] )) {
			$lookupTableLinks["informe_intersup_anexos_tipo"]["informe_intersup_anexos_contratista_o.anexo_titulo"] = array();
		}
		$lookupTableLinks["informe_intersup_anexos_tipo"]["informe_intersup_anexos_contratista_o.anexo_titulo"]["edit"] = array("table" => "informe_intersup_anexos_contratista_o", "field" => "anexo_titulo", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_naturaleza"] ) ) {
			$lookupTableLinks["tparam_naturaleza"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_naturaleza"]["informe_intersup_anexos_contratista_o.anexo_grupo"] )) {
			$lookupTableLinks["tparam_naturaleza"]["informe_intersup_anexos_contratista_o.anexo_grupo"] = array();
		}
		$lookupTableLinks["tparam_naturaleza"]["informe_intersup_anexos_contratista_o.anexo_grupo"]["edit"] = array("table" => "informe_intersup_anexos_contratista_o", "field" => "anexo_grupo", "page" => "edit");
}

?>