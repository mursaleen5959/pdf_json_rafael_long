<?php
$pdf->AddPage();
$pdf->SetFont('Montserrat-Bold', '', 18);
text($pdf,16,39.5,10, 10, 'Your', 0);
$pdf->SetFont('Montserrat-extra-light', '', 18);
text($pdf,32.5,39.5,10, 10, 'quotation', 0);

$pdf->SetFont('Montserrat-Bold', '', 9);
text($pdf,84,38,10, 10, 'Date:', 0);
text($pdf,84,43,10, 10, 'Quote ref:', 0);

$pdf->SetFont('Montserrat', '', 9);
text($pdf,93.5,38,10, 10, '10.07.23', 0);
text($pdf,101,43,10, 10, '239268GH', 0);

$pdf->SetDrawColor(178, 92, 99);
$pdf->Line(17, 54, 193.5, 54);


$x = 16;
$y = 60;
$pdf->SetFont('Montserrat-Bold', '', 14);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 18, $CellHeight = 6, $text = 'Profile', $border = 0, $alignment = 'L');
$x = $pdf->GetX();
$pdf->SetFont('Montserrat', '', 14);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 20, $CellHeight = 6, $text = 'specification', $border = 0, $alignment = 'L');


$x = 84;
$y = 60;
$pdf->SetFont('Montserrat-Bold', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 58, $CellHeight = 6, $text = 'Profile', $border = 0, $alignment = 'L');
$x = $pdf->GetX();
$pdf->SetFont('Montserrat', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 20, $CellHeight = 6, $text = $data['profile_specifications'][0]['Profile'], $border = 0, $alignment = 'L');

$x = 84;
$y += 5;
$pdf->SetFont('Montserrat-Bold', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 58, $CellHeight = 6, $text = 'U-Value', $border = 0, $alignment = 'L');
$x = $pdf->GetX();
$pdf->SetFont('Montserrat', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 20, $CellHeight = 6, $text = $data['profile_specifications'][0]['U-Value'], $border = 0, $alignment = 'L');

$x = 84;
$y += 5;
$pdf->SetFont('Montserrat-Bold', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 58, $CellHeight = 6, $text = 'Glazing', $border = 0, $alignment = 'L');
$x = $pdf->GetX();
$pdf->SetFont('Montserrat', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 20, $CellHeight = 6, $text = $data['profile_specifications'][0]['Glazing'], $border = 0, $alignment = 'L');

$x = 84;
$y += 5;
$pdf->SetFont('Montserrat-Bold', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 58, $CellHeight = 6, $text = 'Panel Thickness', $border = 0, $alignment = 'L');
$x = $pdf->GetX();
$pdf->SetFont('Montserrat', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 20, $CellHeight = 6, $text = $data['profile_specifications'][0]['Panel Thickness'], $border = 0, $alignment = 'L');

$x = 84;
$y += 5;
$pdf->SetFont('Montserrat-Bold', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 58, $CellHeight = 6, $text = 'Water tightness', $border = 0, $alignment = 'L');
$x = $pdf->GetX();
$pdf->SetFont('Montserrat', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 20, $CellHeight = 6, $text = $data['profile_specifications'][0]['Water tightness'], $border = 0, $alignment = 'L');

$x = 84;
$y += 5;
$pdf->SetFont('Montserrat-Bold', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 58, $CellHeight = 6, $text = 'Wind load resistance', $border = 0, $alignment = 'L');
$x = $pdf->GetX();
$pdf->SetFont('Montserrat', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 20, $CellHeight = 6, $text = $data['profile_specifications'][0]['Wind load resistance'], $border = 0, $alignment = 'L');

$x = 84;
$y += 5;
$pdf->SetFont('Montserrat-Bold', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 58, $CellHeight = 6, $text = 'Air permeability', $border = 0, $alignment = 'L');
$x = $pdf->GetX();
$pdf->SetFont('Montserrat', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 20, $CellHeight = 6, $text = $data['profile_specifications'][0]['Air permeability'], $border = 0, $alignment = 'L');

$x = 84;
$y += 5;
$pdf->SetFont('Montserrat-Bold', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 58, $CellHeight = 6, $text = 'Thermal transmittance', $border = 0, $alignment = 'L');
$x = $pdf->GetX();
$pdf->SetFont('Montserrat', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 20, $CellHeight = 6, $text = $data['profile_specifications'][0]['Thermal transmittance'], $border = 0, $alignment = 'L');

$x = 84;
$y += 5;
$pdf->SetFont('Montserrat-Bold', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 58, $CellHeight = 6, $text = 'Sound insulation', $border = 0, $alignment = 'L');
$x = $pdf->GetX();
$pdf->SetFont('Montserrat', '', 9);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 20, $CellHeight = 6, $text = $data['profile_specifications'][0]['Sound insulation'], $border = 0, $alignment = 'L');


$pdf->Image($data['profile_specifications'][0]['prof_spec_images'][0]['image1'],1,110,0,80);
$pdf->Image($data['profile_specifications'][0]['prof_spec_images'][0]['image2'],1,200,0,90);

// Rectangles
$pdf->SetFillColor(146,24,33);
$pdf->Rect(84,115,110,10,'F');
$pdf->SetFillColor(209,210,212);
$pdf->Rect(84,125,110,160,'F');


$x = 100;
$y = 117;
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Montserrat-Bold', '', 12);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 20, $CellHeight = 6, $text = 'Features', $border = 0, $alignment = 'L');
$x = $pdf->GetX();
$pdf->SetFont('Montserrat', '', 12);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 20, $CellHeight = 6, $text = '& benefits', $border = 0, $alignment = 'L');


$descriptions = array(
    'German 65mm deep insulated frame with mechanical & glued corners for high performance construction and life expectancy',
    'Marine grade powder coat finish as standard suitable for all locations',
    '65mm laminated triple glazing as standard for maximum security',
    'Extensive choice of external and internal colours giving maximum design choice',
    'Low level threshold as standard for disability access compliance',
    'Triple gasket sealing system for high weather performance',
    'Hidden fixing system with cover trims to frame & door sash for minimal maintenance and clean look appearance',
    '316 Grade Stainless steel handles & fittings suitable for all locations',
    'Sidelights and fanlights in single frame construction offering minimal frame design',
    'Optional custom design or glass etching for individual design',
    'Available with motorised locking for use with finger scan locking systems and home smart properties',
    'Secure By Design and PAS 24 Certified for full new build compliance',
    'Optional 25mm high projecting cills for ease of installation '
);

$y = 131;
for($i=0;$i<count($descriptions);$i++)
{
    $x = 89;
    $pdf->SetTextColor(166,45,35);
    $pdf->SetFont('ZapfDingbats','', 14);
    // $pdf->SetFont('Montserrat-Bold', '', 12);
    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 5, $CellHeight = 3, $text = 3, $border = 0, $alignment = 'L');
    $x = $pdf->GetX();
    $pdf->SetY($y);
    $pdf->SetX($x);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFont('Montserrat', '', 9);
    $pdf->MultiCell(95,4,$descriptions[$i],0,'L');
    $y = $pdf->GetY();
    $y+=2;
}