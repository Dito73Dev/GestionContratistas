<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'details' => array( 'informe_intersup_oe' => array( 'displayPreview' => 1,
'previewPageId' => 'print' ) ),
'master' => array( 'informe_intersup_estado' => array( 'preview' => true ) ),
'totals' => array( 'inf_id' => array( 'totalsType' => '' ),
'id_cont_fk' => array( 'totalsType' => '' ),
'inf_consecutivo' => array( 'totalsType' => '' ),
'inf_hash' => array( 'totalsType' => '' ),
'inf_estado' => array( 'totalsType' => '' ),
'inf_fechapresenta' => array( 'totalsType' => '' ),
'inf_periodicidad' => array( 'totalsType' => '' ),
'inf_fecharep_i' => array( 'totalsType' => '' ),
'inf_fecharep_f' => array( 'totalsType' => '' ),
'inf_numerocontrato' => array( 'totalsType' => '' ),
'inf_anio' => array( 'totalsType' => '' ),
'inf_prenum' => array( 'totalsType' => '' ),
'inf_doccontratista' => array( 'totalsType' => '' ),
'inf_nombrecontratista' => array( 'totalsType' => '' ),
'inf_valorcontrato' => array( 'totalsType' => '' ),
'inf_adicionreduc' => array( 'totalsType' => '' ),
'inf_cdp' => array( 'totalsType' => '' ),
'inf_rp' => array( 'totalsType' => '' ),
'inf_rubrocode' => array( 'totalsType' => '' ),
'inf_rubroname' => array( 'totalsType' => '' ),
'inf_objeto' => array( 'totalsType' => '' ),
'inf_fechasuscripcion' => array( 'totalsType' => '' ),
'inf_fechacont_i' => array( 'totalsType' => '' ),
'inf_fechacont_f' => array( 'totalsType' => '' ),
'inf_plazo' => array( 'totalsType' => '' ),
'inf_vigencia' => array( 'totalsType' => '' ),
'inf_modificacionesplazo' => array( 'totalsType' => '' ),
'inf_intersup' => array( 'totalsType' => '' ),
'inf_nombre' => array( 'totalsType' => '' ),
'inf_cargo' => array( 'totalsType' => '' ),
'inf_dependencia' => array( 'totalsType' => '' ),
'inf_avgejecucion' => array( 'totalsType' => '' ),
'inf_actividades' => array( 'totalsType' => '' ),
'inf_declarainconf' => array( 'totalsType' => '' ),
'inf_declarainconf_obs' => array( 'totalsType' => '' ),
'inf_incumplimiento' => array( 'totalsType' => '' ),
'inf_incumplimiento_obs' => array( 'totalsType' => '' ),
'inf_otrosaspectostecnicos' => array( 'totalsType' => '' ),
'inf_recomyobserva' => array( 'totalsType' => '' ),
'file_verifica' => array( 'totalsType' => '' ),
'inf_ultimopago' => array( 'totalsType' => '' ),
'sys_date' => array( 'totalsType' => '' ),
'inf_mail_a' => array( 'totalsType' => '' ),
'inf_mail_b' => array( 'totalsType' => '' ),
'url_secop' => array( 'totalsType' => '' ),
'num_poliza' => array( 'totalsType' => '' ),
'mun_ejec' => array( 'totalsType' => '' ),
'cont_cesion' => array( 'totalsType' => '' ),
'cont_modifica' => array( 'totalsType' => '' ),
'qty_inf' => array( 'totalsType' => '' ),
'qty_inf_compare' => array( 'totalsType' => '' ),
'qty_inf_verifica' => array( 'totalsType' => '' ),
'cert_mail' => array( 'totalsType' => '' ),
'cert_file' => array( 'totalsType' => '' ),
'cert_date' => array( 'totalsType' => '' ),
'cert_compare' => array( 'totalsType' => '' ),
'sign_hash' => array( 'totalsType' => '' ),
'sign_date' => array( 'totalsType' => '' ),
'sign_mailnot' => array( 'totalsType' => '' ),
'sign_verificacert' => array( 'totalsType' => '' ),
'sign_file' => array( 'totalsType' => '' ),
'sign_verificacert_ip' => array( 'totalsType' => '' ),
'sign_verificacert_user' => array( 'totalsType' => '' ),
'sign_verificacert_date' => array( 'totalsType' => '' ),
'hashfirmado' => array( 'totalsType' => '' ),
'inf_usopresupuestal' => array( 'totalsType' => '' ),
'inf_supervisoremail' => array( 'totalsType' => '' ),
'cert_process' => array( 'totalsType' => '' ),
'cert_modalidad' => array( 'totalsType' => '' ),
'cert_mes' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'inf_consecutivo',
'inf_hash',
'inf_fecharep_i',
'inf_fecharep_f',
'inf_numerocontrato',
'inf_anio',
'inf_doccontratista',
'inf_nombrecontratista',
'inf_id' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'inf_consecutivo' => array( 'simple_grid_field2',
'simple_grid_field4' ),
'inf_hash' => array( 'simple_grid_field3',
'simple_grid_field5' ),
'inf_fecharep_i' => array( 'simple_grid_field7',
'simple_grid_field11' ),
'inf_fecharep_f' => array( 'simple_grid_field8',
'simple_grid_field14' ),
'inf_numerocontrato' => array( 'simple_grid_field9',
'simple_grid_field15' ),
'inf_anio' => array( 'simple_grid_field10',
'simple_grid_field16' ),
'inf_doccontratista' => array( 'simple_grid_field12',
'simple_grid_field17' ),
'inf_nombrecontratista' => array( 'simple_grid_field13',
'simple_grid_field18' ),
'inf_id' => array( 'grid_field',
'grid_field_label' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'print_header',
'print_subheader',
'master_info',
'print_pdf' ),
'above-grid' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ),
'below-grid' => array(  ),
'grid' => array( 'simple_grid_field4',
'simple_grid_field2',
'simple_grid_field5',
'simple_grid_field3',
'simple_grid_field11',
'simple_grid_field7',
'simple_grid_field14',
'simple_grid_field8',
'simple_grid_field15',
'simple_grid_field9',
'simple_grid_field16',
'simple_grid_field10',
'simple_grid_field17',
'simple_grid_field12',
'simple_grid_field18',
'simple_grid_field13',
'details_preview',
'details_preview1',
'details_preview2',
'text',
'grid_field_label',
'grid_field' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages',
'inline_cancel',
'inlineadd_link' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_header' => 'top',
'print_subheader' => 'top',
'master_info' => 'top',
'print_pdf' => 'top',
'print_pages' => 'above-grid',
'grid_inline_cancel' => 'above-grid',
'inline_add' => 'above-grid',
'simple_grid_field4' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field13' => 'grid',
'details_preview' => 'grid',
'details_preview1' => 'grid',
'details_preview2' => 'grid',
'text' => 'grid',
'grid_field_label' => 'grid',
'grid_field' => 'grid' ),
'itemLocations' => array( 'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'details_preview1' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'details_preview2' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'text' => array( 'location' => 'grid',
'cellId' => 'footcell_field18' ),
'grid_field_label' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'grid_field' => array( 'simple_grid_field2',
'simple_grid_field3',
'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field10',
'simple_grid_field12',
'simple_grid_field13',
'grid_field' ),
'details_preview' => array( 'details_preview',
'details_preview1',
'details_preview2' ),
'grid_field_label' => array( 'simple_grid_field5',
'simple_grid_field4',
'simple_grid_field11',
'simple_grid_field14',
'simple_grid_field15',
'simple_grid_field16',
'simple_grid_field17',
'simple_grid_field18',
'grid_field_label' ),
'master_info' => array( 'master_info' ),
'print_pdf' => array( 'print_pdf' ),
'text' => array( 'text' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'inf_consecutivo_fieldheadercolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'inf_hash_fieldheadercolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'inf_fecharep_i_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'inf_fecharep_f_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'inf_numerocontrato_fieldheadercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'inf_anio_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'inf_doccontratista_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'inf_nombrecontratista_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'inf_id_fieldheadercolumn' ),
'items' => array( 'grid_field_label' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'inf_consecutivo_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'inf_hash_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'inf_fecharep_i_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'inf_fecharep_f_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'inf_numerocontrato_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'inf_anio_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'inf_doccontratista_fieldcolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'inf_nombrecontratista_fieldcolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'inf_id_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1,
2,
3,
4,
5,
6,
7,
8,
9 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'details_preview',
'details_preview1',
'details_preview2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field19' => array( 'cols' => array( 9 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field18' => array( 'cols' => array( 0,
1,
2,
3,
4,
5,
6,
7,
8,
9 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'text' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field10' => array( 'cols' => array( 1 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field11' => array( 'cols' => array( 2 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field12' => array( 'cols' => array( 3 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field13' => array( 'cols' => array( 4 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field14' => array( 'cols' => array( 5 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field15' => array( 'cols' => array( 6 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field16' => array( 'cols' => array( 7 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field17' => array( 'cols' => array( 8 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field21' => array( 'cols' => array( 9 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 10,
'height' => 6 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c4' => array( 'model' => 'c4',
'items' => array( 'master_info' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c1' => array( 'model' => 'c1',
'items' => array( 'print_pdf' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ),
array( 'cell' => 'headcell_field9' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ),
array( 'cell' => 'cell_field9' ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 10 ) ),
'section' => 'body' ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ),
array( 'cell' => 'footcell_field8' ),
array( 'cell' => 'footcell_field19' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field18',
'colspan' => 10 ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field9' ),
array( 'cell' => 'footcell_field10' ),
array( 'cell' => 'footcell_field11' ),
array( 'cell' => 'footcell_field12' ),
array( 'cell' => 'footcell_field13' ),
array( 'cell' => 'footcell_field14' ),
array( 'cell' => 'footcell_field15' ),
array( 'cell' => 'footcell_field16' ),
array( 'cell' => 'footcell_field17' ),
array( 'cell' => 'footcell_field21' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'inf_consecutivo',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'inf_consecutivo',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'inf_hash',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'inf_hash',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'inf_fecharep_i',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'inf_fecharep_i',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'inf_fecharep_f',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'inf_fecharep_f',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'inf_numerocontrato',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'inf_numerocontrato',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'inf_anio',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'inf_anio',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'inf_doccontratista',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'inf_doccontratista',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'inf_nombrecontratista',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'inf_nombrecontratista',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array(  ) ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array(  ) ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview',
'details_preview1',
'details_preview2' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'footcell_field10' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'footcell_field11' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'footcell_field12' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'footcell_field13' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'footcell_field14' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'footcell_field15' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'footcell_field16' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'footcell_field17' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'footcell_field18' => array( 'model' => 'footcell_field',
'items' => array( 'text' ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label' ),
'field' => 'inf_id',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'field' => 'inf_id',
'columnName' => 'field' ),
'footcell_field19' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'footcell_field21' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header',
'title' => array( 'page' => 'print',
'table' => 'informe_intersup_4',
'type' => 7 ) ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'simple_grid_field2' => array( 'field' => 'inf_consecutivo',
'type' => 'grid_field' ),
'simple_grid_field3' => array( 'field' => 'inf_hash',
'type' => 'grid_field' ),
'simple_grid_field7' => array( 'field' => 'inf_fecharep_i',
'type' => 'grid_field' ),
'simple_grid_field8' => array( 'field' => 'inf_fecharep_f',
'type' => 'grid_field' ),
'simple_grid_field9' => array( 'field' => 'inf_numerocontrato',
'type' => 'grid_field' ),
'simple_grid_field10' => array( 'field' => 'inf_anio',
'type' => 'grid_field' ),
'simple_grid_field12' => array( 'field' => 'inf_doccontratista',
'type' => 'grid_field' ),
'simple_grid_field13' => array( 'field' => 'inf_nombrecontratista',
'type' => 'grid_field' ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'informe_intersup_oe_contratista',
'items' => array(  ),
'popup' => false,
'pageId' => 'print' ),
'details_preview1' => array( 'type' => 'details_preview',
'table' => 'informe_intersup_anexos_contratista',
'items' => array(  ),
'popup' => false,
'pageId' => 'print' ),
'simple_grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'inf_hash' ),
'simple_grid_field4' => array( 'type' => 'grid_field_label',
'field' => 'inf_consecutivo' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'informe_intersup_estado' => 'true' ) ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'inf_fecharep_i' ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'inf_fecharep_f' ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'inf_numerocontrato' ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'inf_anio' ),
'details_preview2' => array( 'type' => 'details_preview',
'table' => 'informe_intersup_oe',
'items' => array(  ),
'popup' => false,
'pageId' => 'print' ),
'print_pdf' => array( 'type' => 'print_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'inf_doccontratista' ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'inf_nombrecontratista' ),
'text' => array( 'type' => 'text',
'label' => array( 'text' => '<p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p>____________________________________</p><p>Firma del contratista</p>',
'type' => 0 ),
'editedByRte' => true ),
'grid_field' => array( 'field' => 'inf_id',
'type' => 'grid_field' ),
'grid_field_label' => array( 'type' => 'grid_field_label',
'field' => 'inf_id' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>