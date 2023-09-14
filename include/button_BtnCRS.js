Runner.buttonEvents["BtnCRS"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'BtnCRS';
	
	if ( !pageObj.buttonEventBefore['BtnCRS'] ) {
		pageObj.buttonEventBefore['BtnCRS'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['BtnCRS'] ) {
		pageObj.buttonEventAfter['BtnCRS'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var message = result["p_id"];
//window.location.href ='http://raam.mincit.gov.co/gestion/mpdf60/mod/ra.php?ra_id='+result["ra_id"];

var win = Runner.displayPopup( {
  url: 'https://servicios.mincit.gov.co/ctprocess/mpdf60/mod/_gen_infocrs.php?inf_id='+result["p_id"],
  width: 960,
  height: 600,
  header: 'CERTIFICADO DE RECIBO A SATISFACCIÓN'
});
		}
	}
	
	$('a[id="BtnCRS"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "BtnCRS" + "_" + Runner.genId();
		
		// create object
		var button_BtnCRS = new Runner.form.Button({
			id: this.id ,
			btnName: "BtnCRS"
		});
		
		// init
		button_BtnCRS.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

