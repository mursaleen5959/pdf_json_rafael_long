<?php
$pdf->AddPage();
$pdf->SetFont('Montserrat-Bold', '', 18);
text($pdf,16,39.5,10, 10, 'Your', 0);
$pdf->SetFont('Montserrat-Bold', '', 14);
text($pdf,16,62,10, 10, 'Exterior', 0);
text($pdf,16,171,10, 10, 'Interior', 0);
$pdf->SetFont('Montserrat-extra-light', '', 18);
text($pdf,32.5,39.5,10, 10, 'quotation', 0);
$pdf->SetFont('Montserrat-Bold', '', 9);
text($pdf,84,38,10, 10, 'Date:', 0);
text($pdf,84,43,10, 10, 'Quote ref:', 0);
$pdf->SetFont('Montserrat-extra-light', '', 14);
text($pdf,37,62,10, 10, 'view', 0);
text($pdf,35.8,171,10, 10, 'view', 0);
$pdf->SetFont('Montserrat-extra-light', '', 11);
text($pdf,16,67,10, 10, 'Indicative image', 0);
text($pdf,16,176,10, 10, 'Indicative image', 0);
$pdf->SetFont('Montserrat', '', 9);
text($pdf,93.5,38,10, 10, '10.07.23', 0);
text($pdf,101,43,10, 10, '239268GH', 0);
$pdf->SetDrawColor(178, 92, 99);
$pdf->Line(17, 54, 193.5, 54);
$pdf->Line(17, 54, 193.5, 54);
$pdf->Image($data['images'][0]['exterior_view_image'],89,66,100,90);
$pdf->Image($data['images'][0]['interior_view_image'],89,175,100,90);