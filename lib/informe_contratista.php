<?php


if (isset($_GET['cont_id'])) {
  $cont_id = $_GET['cont_id'];
}
if (isset($_GET['inf_id'])) {
  $inf_id = $_GET['inf_id'];
}
   	$link = mysqli_connect("172.18.0.249","agutierrezd","agutierrezd2030*","dbct","3307");
    $link -> set_charset("utf8");
   	//$linkA = mysqli_connect("127.0.0.1","root","1qaz2wsx","dbct");
	$no = 1;
	//rs 1
	$query_RsBloqueA = "SELECT * FROM q_genera_informe WHERE inf_id = $inf_id";
	$RsBloqueA = mysqli_query($link,$query_RsBloqueA);
	$totalRows_RsBloqueA = mysqli_num_rows($RsBloqueA);
	$row_RsBloqueA = mysqli_fetch_assoc($RsBloqueA);
	//rs 2
	$query_RsBloqueB = "SELECT * FROM informe_intersup_plan_pagos WHERE id_cont_fk = $cont_id AND inf_st = 2";
	$RsBloqueB = mysqli_query($link,$query_RsBloqueB);
	$totalRows_RsBloqueB = mysqli_num_rows($RsBloqueB);
	//rs 3
	$query_RsBloqueC = "SELECT * FROM q_genera_informe_oe WHERE inf_id_fk = $inf_id ";
	$RsBloqueC = mysqli_query($link,$query_RsBloqueC);
	$totalRows_RsBloqueC = mysqli_num_rows($RsBloqueC);
  //rs 4
  $query_RsBloqueD = "SELECT * FROM q_s_ctrl_pagado_001 WHERE id_cont = $cont_id ";
  $RsBloqueD = mysqli_query($link,$query_RsBloqueD);
  $totalRows_RsBloqueD = mysqli_num_rows($RsBloqueD);
  $row_RsBloqueD = mysqli_fetch_assoc($RsBloqueD);

  setlocale(LC_MONETARY, 'en_US');

	$html = '
<html>
<body>
mpdf-->

<table class="items" width="100%" border="1" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
                                        <tr class="success">
                                          <td colspan="4"><strong>INFORME N&Uacute;MERO :'.$row_RsBloqueA['inf_consecutivo'].'&nbsp;&nbsp;FECHA EN QUE SE RINDE : '.$row_RsBloqueA['inf_fechapresenta'].'</strong></td>
  </tr>
                                        <tr bgcolor="#F7F7F7">
                                            <td>PERIODICIDAD</td>
                                          <td>AVANCE</td>
                                          <td colspan="2">PERIODO GESTIONADO</td>
  </tr>
                                        <tr>
                                            <td>'.$row_RsBloqueA['periodo_name'].'</td>
                                            <td>'.$row_RsBloqueA['inf_avgejecucion'].'%</td>
                                            <td>'.$row_RsBloqueA['inf_fecharep_i'].'</td>
                                        	<td>'.$row_RsBloqueA['inf_fecharep_f'].'</td>
										</tr>
                                        <tr class="success">
                                            <td colspan="4"><strong>1. ASPECTOS GENERALES, ADMINISTRATIVOS, LEGALES Y FINANCIEROS</strong></td>
                                        </tr>
                                        <tr bgcolor="#F7F7F7">
                                          <td bgcolor="#F7F7F7">No. CONTRATO O CONVENIO</td>
                                          <td>VALOR DEL CONTRATO</td>
                                          <td>NOMBRE DEL CONTRATISTA</td>
                                          <td>DOCUMENTO</td>
                                        </tr>
                                        <tr>
                                          <td>'.$row_RsBloqueA['inf_numerocontrato'].'</td>
                                          <td>$'.number_format($row_RsBloqueA['inf_valorcontrato'],2,',','.').'</td>
                                          <td>'.$row_RsBloqueA['inf_nombrecontratista'].'</td>
                                          <td>'.$row_RsBloqueA['inf_doccontratista'].'</td>
                                        </tr>
                                        <tr bgcolor="#F7F7F7">
                                          <td bgcolor="#F7F7F7"></td>
                                          <td>PAGO MENSUAL</td>
                                          <td>VALOR PAGADO</td>
                                          <td>SALDO</td>
                                        </tr>
                                        <tr>
                                          <td></td>
                                          <td>$'.number_format($row_RsBloqueD['PAGO_MES'],2,',','.').'</td>
                                          <td>$'.number_format($row_RsBloqueD['VALOR_PAGADO'],2,',','.').'</td>
                                          <td>$'.number_format($row_RsBloqueD['SALDO'],2,',','.').'</td>
                                        </tr>
                                        <tr>
                                          <td bgcolor="#F7F7F7">FECHA DE SUSCRIPCI&Oacute;N | FIRMA</td>
                                          <td bgcolor="#F7F7F7">FECHA DE INICIO</td>
                                          <td bgcolor="#F7F7F7">FECHA DE TERMINACI&Oacute;N</td>
                                          <td bgcolor="#F7F7F7">PLAZO | VIGENCIA</td>
                                        </tr>
                                        <tr>
                                          <td>'.$row_RsBloqueA['inf_fechasuscripcion'].'</td>
                                          <td>'.$row_RsBloqueA['inf_fechacont_i'].'</td>
                                          <td>'.$row_RsBloqueA['inf_fechacont_f'].'</td>
                                          <td>'.$row_RsBloqueA['inf_plazo'].' días | '.$row_RsBloqueA['inf_vigencia'].'</td>
                                        </tr>
                                        <tr>
                                          <td bgcolor="#F7F7F7">COMPROMISO | RP</td>
                                          <td bgcolor="#F7F7F7">CDP</td>
                                          <td colspan="2" bgcolor="#F7F7F7">RUBRO</td>
                                        </tr>
                                        <tr>
                                          <td>'.$row_RsBloqueA['inf_rp'].'</td>
                                          <td>'.$row_RsBloqueA['inf_cdp'].'</td>
                                          <td colspan="2">'.$row_RsBloqueA['inf_rubrocode'].'</td>
                                        </tr>
                                        <tr>
										  <td bgcolor="#F7F7F7">OBJETO</td>
                                          <td colspan="3">'.$row_RsBloqueA['inf_objeto'].'</td>
                                        </tr>
                                        <tr>
                                          <td colspan="4" class="success"><strong>2. SUPERVISI&Oacute;N DEL CONTRATO</strong></td>
                                        </tr>
                                        <tr bgcolor="#F7F7F7">
                                          <td>SUPERVISOR</td>
                                          <td>CARGO</td>
                                          <td colspan="2">DEPENDENCIA</td>
                                        </tr>
                                        <tr>
                                          <td>'.$row_RsBloqueA['inf_nombre'].'</td>
                                          <td>'.$row_RsBloqueA['inf_cargo'].'</td>
                                          <td colspan="2">'.$row_RsBloqueA['inf_dependencia'].'</td>
                                        </tr>
                                </table>
<br />
								<h3>DESARROLLO DE LAS OBLIGACIONES ESPEC&Iacute;FICAS</h3>
								<hr>
<table class="items" width="100%" border="1" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
          <thead>
            <tr>
                <th>ORDINAL</th>
                <th>OBLIGACI&Oacute;N</th>
                <th>ACTIVIDAD REALIZADA</th>
                <th>¿PRESENTA EVIDENCIA?</th>
              </tr>
          </thead>
          <tbody>
            ';
  while ($row_RsBloqueC = mysqli_fetch_assoc($RsBloqueC)) {
$html .= '
              <tr>
                <th>'.$row_RsBloqueC['oe_ordinal'].'</th>
                <td>'.$row_RsBloqueC['oe'].'</td>
                <td>'.$row_RsBloqueC['actividad'].'</td>
                <td align="center">'.$row_RsBloqueC['ev'].'</td>
              </tr>
               ';
 } 
$html .= '
          </tbody>
        </table>
<div style="text-align: center; font-style: italic;">N&uacute;mero de obligaciones procesadas: '.$totalRows_RsBloqueC.'</div>
<br />
<br />
<p><strong>Gestionado por:</strong></p>
<p>Nombre:'.$row_RsBloqueA['inf_nombrecontratista'].'<br />
Documento:'.$row_RsBloqueA['inf_doccontratista'].'<br />
Dependencia:'.$row_RsBloqueA['inf_dependencia'].'<br />
Correo notificación: '.$row_RsBloqueA['inf_mail_b'].','.$row_RsBloqueA['inf_mail_b'].'<br />
Número interno:'.$inf_id.'
</p>
<br />
Notas:<br><br/>Para efectos de admisibilidad y fuerza probatoria seg&uacute;n lo dispuesto en la ley 527 de 1999, el interesado puede probar la validez del mismo a trav&eacute;s del siguiente sitio WEB: http://gestion.mincit.gov.co/Athena/GestionContratos. La coincidencia entre la informaci&oacute;n desplegada en pantalla y la contenida en informe impreso, confirma la autenticidad del informe emitido.<br />
El documento se ha validado a trav&eacute;s de la aceptación del contenido por '.$row_RsBloqueA['inf_nombrecontratista'].'.
<br/>
</div>
<br />

</body>
</html>';
require_once __DIR__ . '/vendor/autoload.php';
use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;
$qrCode = new QrCode($row_RsBloqueA['inf_hash'].' '.$row_RsBloqueA['inf_nombre'].' '.$row_RsBloqueA['inf_intersup'].' '.$row_RsBloqueA['inf_nombrecontratista'].' '.$row_RsBloqueA['inf_doccontratista'].' '.$row_RsBloqueA['inf_fecharep_i'].' '.$row_RsBloqueA['inf_fecharep_f']);
$output = new Output\Png();
$data = $output->output($qrCode, 83, [255, 255, 255], [0, 0, 0]);
file_put_contents($row_RsBloqueA['inf_hash'].'.png', $data);
$output = new Output\Html();
	$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8','format' => 'Letter', 'margin_top' => '36', 'margin-bottom' => '20' ]);
  $mpdf->SetHTMLHeader('
<div style="height: 500px; text-align: right; font-weight: bold;">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" align="center" style="color:#0000BB;"><div align="center"><span style="font-weight: bold; font-size: 14pt;"></span>INFORME DE ACTIVIDADES | C&Oacute;DIGO:<strong>'.$row_RsBloqueA['inf_hash'].'</strong>
    </div>
    </strong></td>
  </tr>
</table>
<div style="position:fixed; right: 50mm; top: 10mm; text-align: right; padding: 0.5mm; padding-top: 2mm;"><img src="'.$row_RsBloqueA['inf_hash'].".png".'" /></div>
</div>');
  $mpdf->SetHTMLFooter('<table width="100%"><tr><td width="33%">{DATE j-m-Y}</td><td width="33%" align="center">{PAGENO}/{nbpg}</td><td width="33%" style="text-align: right;">Informe de actividades</td>
    </tr>
</table>');
$mpdf->SetTitle("INFORME DE ACTIVIDADES DEL CONTRATISTA");
$mpdf->SetAuthor("MinCIT");
$mpdf->SetWatermarkText("Informe de actividades:".$row_RsBloqueA['inf_hash']);
$mpdf->SetProtection(array());
$mpdf->showWatermarkText = true;
$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML( $html );
$mpdf->Output($row_RsBloqueA['inf_hash'].'.pdf', 'I' );
$mpdf->Output();
exit;

?>