<?php
require './vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$id = $_POST['id'];
$documento = $_POST['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

ob_start();
require_once 'view.php';
$html = ob_get_clean();

$width_mm = 279;
$height_mm = 215;
$html2pdf = new Html2Pdf('L',array($width_mm,$height_mm),'es',true,'UTF-8',array(0,0,0,0));
$html2pdf->addFont('ptsansnarrow', '', 'ptsansnarrow');
$html2pdf->addFont('ptsansnarrowbold', '', 'ptsansnarrowbold');
//$html2pdf->setDefaultFont("ptsansnarrow");
$html2pdf->writeHTML($html);
$html2pdf->Output('C:\xampp\htdocs\certificados_traing\certificados\certificado_'.$documento.'.pdf', 'F');
?>