<?php
$pdf->AddPage();
$pdf->SetAutoPageBreak(0);
$pdf->SetFont('Montserrat-Bold', '', 18);
text($pdf,16,39.5,22, 10, 'Quote', 0);
$pdf->SetFont('Montserrat-extra-light', '', 18);
text($pdf,37,39.5,10, 10, 'in detail', 0);

$pdf->SetFont('Montserrat-Bold', '', 9);
text($pdf,84,38,10, 10, 'Date:', 0);
text($pdf,84,43,10, 10, 'Quote ref:', 0);

$pdf->SetFont('Montserrat', '', 9);
text($pdf,93.5,38,10, 10, '10.07.23', 0);
text($pdf,101,43,10, 10, '239268GH', 0);

$pdf->SetDrawColor(178, 92, 99);
$pdf->Line(17, 54, 193.5, 54);


$key_value_map = array(
                    "profile" => "Profile",
                    "glass_panel" => "GLASS PANEL IN DOOR",
                    "door_frame_colour_surcharge" => "DOOR FRAME COLOUR SURCHARGE",
                    "door_colour_surcharge" => "DOOR COLOUR SURCHARGE",
                    "lh_sidelight_type" => "LH SIDELIGHT TYPE"
                    );

$y = 58;
$toggler = 0;
for($i=0;$i<count($data['quote_accesories']);$i++)
{
    foreach ($key_value_map as $key => $value) {
        $x  = 17;
        if($toggler==0)
        {
            $pdf->SetFillColor(236,236,237);
            $toggler = 1;
        }
        else{
            $pdf->SetFillColor(255,255,255);
            $toggler = 0;
        }
        $pdf->Rect($x,$y,177,6,'F');
        $x += 3;
        //$x = 20;
        //$y = 58;
        $pdf->SetFont('Montserrat-Bold', '', 8);
        
        insert_cell($pdf, $X = $x-3, $Y = $y, $CellWidth = 63, $CellHeight = 6, $text = $key_value_map[$key], $border = 0, $alignment = 'L');
        $x = $pdf->GetX();
        $pdf->SetFont('Montserrat', '', 8);
        insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 90, $CellHeight = 6, $text = $data['quote_accesories'][$i][$key][0], $border = 0, $alignment = 'L');
        $x = $pdf->GetX();
        insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 20, $CellHeight = 6, $text = utf8_decode($data['quote_accesories'][$i][$key][1]), $border = 0, $alignment = 'R');
        $y += 6;
        if($y >=265)
        {
            $pdf->AddPage();
            $pdf->SetFont('Montserrat-Bold', '', 18);
            text($pdf,16,39.5,22, 10, 'Quote', 0);
            $pdf->SetFont('Montserrat-extra-light', '', 18);
            text($pdf,37,39.5,10, 10, 'continued', 0);

            $pdf->SetFont('Montserrat-Bold', '', 9);
            text($pdf,84,38,10, 10, 'Date:', 0);
            text($pdf,84,43,10, 10, 'Quote ref:', 0);

            $pdf->SetFont('Montserrat', '', 9);
            text($pdf,93.5,38,10, 10, '10.07.23', 0);
            text($pdf,101,43,10, 10, '239268GH', 0);

            $pdf->SetDrawColor(178, 92, 99);
            $pdf->Line(17, 54, 193.5, 54);

            $y = 58;
        }
    }
}

$pdf->SetDrawColor(202, 203, 205);
// Discount
$y+=3;
$x = 80;
$pdf->SetFont('Montserrat-Bold', '', 10);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 89, $CellHeight = 8, $text = 'Discount', $border = "T B", $alignment = 'L');
$pdf->SetFillColor(236,236,237);
$x = $pdf->GetX();
$pdf->SetFont('Montserrat', '', 10);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 25, $CellHeight = 8, $text = $data['quote_accesories_total'][0]['Discount']."  ", $border = "T B", $alignment = 'R',$fill=true);
// Delivery
$y+=8;
$x = 80;
$pdf->SetFont('Montserrat-Bold', '', 10);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 89, $CellHeight = 8, $text = 'Delivery', $border = "T B", $alignment = 'L');
$pdf->SetFillColor(236,236,237);
$x = $pdf->GetX();
$pdf->SetFont('Montserrat', '', 10);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 25, $CellHeight = 8, $text = utf8_decode($data['quote_accesories_total'][0]['Delivery']."  "), $border = "T B", $alignment = 'R',$fill=true);
// Installation
$y+=8;
$x = 80;
$pdf->SetFont('Montserrat-Bold', '', 10);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 89, $CellHeight = 8, $text = 'Installation', $border = "T B", $alignment = 'L');
$pdf->SetFillColor(236,236,237);
$x = $pdf->GetX();
$pdf->SetFont('Montserrat', '', 10);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 25, $CellHeight = 8, $text = utf8_decode($data['quote_accesories_total'][0]['Installation']."  "), $border = "T B", $alignment = 'R',$fill=true);
// VAT
$y+=8;
$x = 80;
$pdf->SetFont('Montserrat-Bold', '', 10);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 89, $CellHeight = 8, $text = 'VAT'."                                                 ".utf8_decode($data['quote_accesories_total'][0]['VAT']), $border = "T B", $alignment = 'L');
$pdf->SetFillColor(236,236,237);
$x = $pdf->GetX();
$pdf->SetFont('Montserrat', '', 10);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 25, $CellHeight = 8, $text = utf8_decode($data['quote_accesories_total'][0]['VAT_value']."  "), $border = "T B", $alignment = 'R',$fill=true);
// TOTAL
$y+=8;
$x = 80;
$pdf->SetFont('Montserrat-Bold', '', 10);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 89, $CellHeight = 8, $text = 'TOTAL', $border = "T B", $alignment = 'L');
$pdf->SetFillColor(105,107,112);
$x = $pdf->GetX();
$pdf->SetFont('Montserrat-Bold', '', 9);
$pdf->SetTextColor(255,255,255);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 25, $CellHeight = 8, $text = utf8_decode($data['quote_accesories_total'][0]['Total']."  "), $border = "T B", $alignment = 'R',$fill=true);







// Foot section

$pdf->SetFillColor(230,231,233);
$pdf->Rect(0,240,215,55,'F');

$pdf->SetFont('Montserrat-Bold', '', 9.5);
$pdf->SetTextColor(155,30,30);
$pdf->SetFillColor(255,255,255);
$pdf->Rect(16,250,55,35,'F');
insert_cell($pdf, $X = 18, $Y = 252, $CellWidth = 18, $CellHeight = 6, $text = 'Door Handling', $border = 0, $alignment = 'L');
$pdf->Rect(78,250,55,35,'F');
insert_cell($pdf, $X = 80, $Y = 252, $CellWidth = 18, $CellHeight = 6, $text = 'Lead time', $border = 0, $alignment = 'L');
$pdf->Rect(140,250,55,35,'F');
insert_cell($pdf, $X = 142, $Y = 252, $CellWidth = 18, $CellHeight = 6, $text = 'Weight', $border = 0, $alignment = 'L');
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Montserrat', '', 9);
$pdf->SetY(258);
$pdf->SetX(80);
$pdf->MultiCell(50,4,'Estimated lead time to customer from confirmed order',0,'L');
$pdf->SetY(258);
$pdf->SetX(142);
$pdf->MultiCell(50,4,'Estimated, including screen/ door, loose frames and glass units',0,'L');

$pdf->Image($data['quote_accesories_footer'][0]['foot_img'],20,258,0,25);
// $pdf->Image('src/footimg.png',20,258,0,25);
$pdf->SetFont('Montserrat-Bold', '', 13);
insert_cell($pdf, $X = 80, $Y = 274, $CellWidth = 18, $CellHeight = 6, $text = $data['quote_accesories_footer'][0]['Lead time'], $border = 0, $alignment = 'L');
insert_cell($pdf, $X = 142, $Y = 274, $CellWidth = 18, $CellHeight = 6, $text = $data['quote_accesories_footer'][0]['Weight'], $border = 0, $alignment = 'L');