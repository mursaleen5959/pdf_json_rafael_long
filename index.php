<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function text($pdf,$x,$y,$height,$width,$text,$border){
    $pdf->SetXY($x,$y);
    $pdf->Cell($height, $width, mb_convert_encoding($text, "ISO-8859-1", "UTF-8"),$border);
}

// Custom function to insert the PDF cells

function insert_cell($pdf, $X = 0, $Y = 0, $CellWidth = 0, $CellHeight = 0, $text="", $border = 0, $alignment = 'L',$fill = false)
{
    $pdf->SetY($Y);
    $pdf->SetX($X);
    $pdf->Cell($CellWidth, $CellHeight, $text, $border, 0, $alignment,$fill);
}

require_once('fpdf/fpdf.php');
require_once('extension.php');

$pdf = new PDF('P', 'mm', 'A4');

$data = file_get_contents('data.json');

// echo "<pre>";
$data = json_decode($data,true);
// print_r($data['quotation_header'][0]['quote_reference']);
// echo "</pre>";

require_once('page1.php');
require_once('page2.php');
require_once('page3.php');
require_once('page4.php');
require_once('page5.php');
require_once('lastpage.php');

$pdf->Output();
?>