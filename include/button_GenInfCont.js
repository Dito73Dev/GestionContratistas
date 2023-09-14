Runner.buttonEvents["GenInfCont"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'GenInfCont';
	
	if ( !pageObj.buttonEventBefore['GenInfCont'] ) {
		pageObj.buttonEventBefore['GenInfCont'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
Swal.fire({
	position: 'top',
	icon: 'success',
	title: 'Informe de actividades',
	html: 
'<b>Generando el informe de actividades...</b>,</br> ' +
'Recuerde descargar el documento y subirlo a SECOP II, junto con la Planilla y demás documentos requeridos para tramitar su pago.',
	background: '#F7F7F7',
	timerProgressBar: true,
	showConfirmButton: false,
	timer: 10000
})
		}
	}
	
	if ( !pageObj.buttonEventAfter['GenInfCont'] ) {
		pageObj.buttonEventAfter['GenInfCont'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var message = result["p_id"];
//window.location.href ='http://raam.mincit.gov.co/gestion/mpdf60/mod/ra.php?ra_id='+result["ra_id"];

var win = Runner.displayPopup( {
  url: 'lib/informe_contratista.php?inf_id='+result["p_id"],
  width: 960,
  height: 600,
  header: 'INFORME DE ACTIVIDADES'
});

		}
	}
	
	$('a[id="GenInfCont"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "GenInfCont" + "_" + Runner.genId();
		
		// create object
		var button_GenInfCont = new Runner.form.Button({
			id: this.id ,
			btnName: "GenInfCont"
		});
		
		// init
		button_GenInfCont.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

