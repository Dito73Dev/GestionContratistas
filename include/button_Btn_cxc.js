Runner.buttonEvents["Btn_cxc"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Btn_cxc';
	
	if ( !pageObj.buttonEventBefore['Btn_cxc'] ) {
		pageObj.buttonEventBefore['Btn_cxc'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Btn_cxc'] ) {
		pageObj.buttonEventAfter['Btn_cxc'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var message = result["p_id"];
//window.location.href ='http://raam.mincit.gov.co/gestion/mpdf60/mod/ra.php?ra_id='+result["ra_id"];

var win = Runner.displayPopup( {
  url: 'https://servicios.mincit.gov.co/ctprocess/mpdf60/mod/_gen_solpago.php?cxc_id='+result["p_id"],
  width: 960,
  height: 600,
  header: 'SOLICITUD PARA PAGO'
});


		}
	}
	
	$('a[id="Btn_cxc"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Btn_cxc" + "_" + Runner.genId();
		
		// create object
		var button_Btn_cxc = new Runner.form.Button({
			id: this.id ,
			btnName: "Btn_cxc"
		});
		
		// init
		button_Btn_cxc.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

