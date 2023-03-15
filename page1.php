<?php

$pdf->SetMargins(0, 0, 0);
$pdf->SetAutoPageBreak(true, 0);
$pdf->AddPage();
$pdf->SetFont('Montserrat-Bold', '', 14);
$pdf->Image('src/img.jpg',0,0,210,0);
$pdf->SetDrawColor(194, 126, 131);
$pdf->Line(17, 175, 193, 175);
$pdf->Line(17, 175, 193, 175);
$pdf->Line(17, 175, 193, 175);
text($pdf,16,177,10, 10, 'Quote', 0);
text($pdf,16,196,10, 10, 'Your', 0);
$pdf->SetFont('Montserrat-Bold', '', 9);
text($pdf,84,177,10, 10, 'Quote reference', 0);
text($pdf,84,182,10, 10, 'Date', 0);
text($pdf,84,196,10, 10, 'Name', 0);
text($pdf,84,202,10, 10, 'Address', 0);
$pdf->SetFont('Montserrat-extra-light', '', 14);
text($pdf,33,177,10, 10, 'reference', 0);
text($pdf,29,196,10, 10, 'details', 0);
$pdf->SetFont('Montserrat', '', 9);
text($pdf,113,177,10, 10, $data['quotation_header'][0]['quote_reference'], 0);
text($pdf,113,196,10, 10, $data['your_details'][0]['Name'], 0);
text($pdf,113,182,10, 10, $data['quotation_header'][0]['date'], 0);
$pdf->SetDrawColor(163, 62, 69);
$pdf->Line(17, 195, 193, 195);
$pdf->Line(17, 195, 193, 195);
$pdf->SetXY(113,205);
$address=$data['your_details'][0]['Address'];
$pdf->SetFont('Montserrat', '', 9);
$pdf->MultiCell(40, 4,mb_convert_encoding($address, "ISO-8859-1", "UTF-8"),0);
$tel_location   =   $pdf->GetY();
$pdf->SetFont('Montserrat-Bold', '', 9);
text($pdf,84,$tel_location,10, 10, 'Telephone', 0);
text($pdf,84,$tel_location+6,10, 10, 'Email', 0);
$pdf->SetFont('Montserrat', '', 9);
text($pdf,113,$tel_location,10, 10, $data['your_details'][0]['Telephone'], 0);
text($pdf,113,$tel_location+6,10, 10, $data['your_details'][0]['Email'], 0);
$current_location   =   $pdf->GetY()+15;
$pdf->SetDrawColor(194, 126, 131);
$pdf->Line(17, $current_location, 193, $current_location);
$pdf->Line(17, $current_location, 193, $current_location);
$pdf->Line(17, $current_location, 193, $current_location);
$pos=$pdf->GetY()+17;
$pdf->SetFont('Montserrat-Bold', '', 14);
text($pdf,16,$pos,10, 10, 'Our', 0);
$pdf->SetFont('Montserrat-extra-light', '', 14);
text($pdf,27,$pos,10, 10, 'details', 0);
$pdf->SetFont('Montserrat-Bold', '', 9);
text($pdf,84,$pos,10, 10, 'Dealer', 0);
text($pdf,84,$pos+6,10, 10, 'Salesperson', 0);
text($pdf,84,$pos+12,10, 10, 'Address', 0);
$pdf->SetFont('Montserrat', '', 9);
text($pdf,113,$pos,10, 10, $data['our_details'][0]['Dealer'], 0);
text($pdf,113,$pos+6,10, 10, $data['our_details'][0]['Salesperson'], 0);
$pdf->SetXY(113,$pos+15);
$address=$data['our_details'][0]['Address'];
$pdf->MultiCell(40, 4,mb_convert_encoding($address, "ISO-8859-1", "UTF-8"),0);
$pdf->SetFont('Montserrat-Bold', '', 9);
$pos=$pdf->GetY();
text($pdf,84,$pos,10, 10, 'Telephone', 0);
text($pdf,84,$pos+6,10, 10, 'Email', 0);
$pdf->SetFont('Montserrat', '', 9);
text($pdf,113,$pos,10, 10, $data['our_details'][0]['Telephone'], 0);
text($pdf,113,$pos+6,10, 10, $data['our_details'][0]['Email'], 0);
?>