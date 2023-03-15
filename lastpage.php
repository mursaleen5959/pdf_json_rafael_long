<?php
$pdf->AddPage();
$pdf->SetFont('Montserrat-Bold', '', 18);
text($pdf,16,39.5,22, 10, 'Please', 0);
$x = $pdf->GetX();
$pdf->SetFont('Montserrat-extra-light', '', 18);
text($pdf,$x,39.5,10, 10, 'note', 0);

$pdf->SetDrawColor(178, 92, 99);
$pdf->Line(17, 54, 193.5, 54);


$x = 100;
$y = 117;
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Montserrat-Bold', '', 12);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 20, $CellHeight = 6, $text = 'Features', $border = 0, $alignment = 'L');
$x = $pdf->GetX();
$pdf->SetFont('Montserrat', '', 12);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 20, $CellHeight = 6, $text = '& benefits', $border = 0, $alignment = 'L');


$terms = array(
    'All handings are viewed from the outside and all dimensions are actual frame sizes. Please allow adequate building in tolerances for installation.',
    'Unless otherwise stated, the doorset will be supplied with a low level threshold designed to sit on top of finished floor level ie. tile, wood or carpet.',
    'All door designs apply to external face only and internal face of door is finished only in the specified colour on the above quotation schedule.',
    'Colour deviations can occur from printed or online colour charts or alternative manufacturersfinishes and you are recommended to study a suitable colour chart or request a sample before placing any orders.',
    'Timber colours are reproduced from printed finishes and we accept no responsibility for grain repetition or shade variations that may occur on door /multiple panel designs',
    'All colours are a matt finish (30% gloss level) unless otherwise stated.',
    'Factory finished does not mean fully protected and all goods should be adequately protected from site construction materials.',
    'All glass, including painted glazed faces, is viewed in accordance with GGF standards and all inspections must be viewed in a horizontal sightline at a min distance of 1m from the panel.',
    'Unless otherwise stated, all final dimensions, colours and opening handings are per the order confirmation and should be checked carefully prior to release to production.',
    'All images contained in this quotation are indicative only and exact designs will be issued with order confirmation and deemed as final for manufacture.',
    'Ceramic and glass faces are decorative surfaces and susceptible to fracture under pressure. DO NOT lift these doors by the handles as fracture cracks are outside of warranty cover.',
    'Doors in dark colours or in excess of standard heights should be installed under a covered porch to avoid any movement in direct sunlight. Any such movement is within manufacturerstolerances and not classed as product failure.',
    'All RK entrance doors are branded and supplied complete with badge. Please advise your salesperson in writing if you wish this to be removed.',
    'Powder coated surfaces may contain small imperfections. These are considered within industry standards and all inspections must be carried out horizontally at a min distance of 2.5m from the panel.',
    'Delivery dates are given as a guide only are subject to change without notice.',
    'Elite Metal & special powder coat colours are hand created finishes and no guarantee is provided in respect of colour match or finish against samples, display doors, images or any other elements viewed by the purchaser or provided by RKDS.',
    'Doors will be stored at our warehouse for 14 days and thereafter a storage charge of £50 + VAT per week will be payable prior to delivery. No exceptions.',
    'Payment terms : 50% deposit with order and balance due when goods arrive to UK warehouse. Unpaid goods cannot be delivered to site and installation costs due in full prior to fitment of door.',
    'All quotations are valid for 30 days from date of issue',
    'All lead times are from date of signed confirmation for production, and not placement of order or deposit payment'
);

$y = 60;
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Montserrat', '', 8);
$column_switch = 0;
for($i=0;$i<count($terms);$i++)
{
    if($column_switch==0)
    {
        $x = 15;
    }
    else{
        $x = 110;
    }

    insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 5, $CellHeight = 4, $text = ($i+1).".", $border = 0, $alignment = 'L');
    $x += 7;
    $pdf->SetY($y);
    $pdf->SetX($x);
    $pdf->MultiCell(80,4,$terms[$i],0,'L');
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $y+=2;
    if($y>=210 && $column_switch==0)
    {
        $column_switch = 1;
        $y = 60;
    }
}


$pdf->SetFillColor(230,231,233);
$pdf->Rect(0,225,215,80,'F');
$pdf->SetFont('Montserrat', '', 9.5);
$pdf->SetTextColor(146,24,33);
$pdf->SetFillColor(255,255,255);
$pdf->Rect(16,256,55,25,'F');
insert_cell($pdf, $X = 18, $Y = 258, $CellWidth = 18, $CellHeight = 6, $text = 'Date', $border = 0, $alignment = 'L');
$pdf->Rect(78,256,55,25,'F');
insert_cell($pdf, $X = 80, $Y = 258, $CellWidth = 18, $CellHeight = 6, $text = 'Signed', $border = 0, $alignment = 'L');
$pdf->Rect(140,256,55,25,'F');
insert_cell($pdf, $X = 142, $Y = 258, $CellWidth = 18, $CellHeight = 6, $text = 'Print name', $border = 0, $alignment = 'L');


$x = 18;
$y = 233;
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Montserrat-Bold', '', 14);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 18, $CellHeight = 6, $text = 'Order', $border = 0, $alignment = 'L');
$x = $pdf->GetX();
$pdf->SetFont('Montserrat', '', 14);
insert_cell($pdf, $X = $x, $Y = $y, $CellWidth = 20, $CellHeight = 6, $text = 'your RK Door', $border = 0, $alignment = 'L');

$pdf->SetFont('Montserrat', '', 9);
$desc = 'I confirm that I have checked the above quotation and that all the details are correct. I have read and understood the terms and conditions and instruct RK Door Systems Ltd, or their appointed dealer,to produce the goods in accordance with the details above.';
$pdf->SetY($y);
$pdf->SetX($x+43);
$pdf->MultiCell(120,4,$desc,0,'L');