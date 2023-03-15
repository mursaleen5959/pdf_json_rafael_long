<?php
class PDF extends FPDF {
    function Header() {
        if($this->PageNo() == 1)
        {
            $this->AddFont('Montserrat-Bold', '', 'Montserrat-Medium.php');
            $this->AddFont('Montserrat-extra-light', '', 'Montserrat-ExtraLight.php');
            $this->AddFont('Montserrat', '', 'Montserrat-Light.php');
        }
        else
        {
            $this->AddFont('Montserrat-Bold', '', 'Montserrat-Medium.php');
            $this->AddFont('Montserrat-extra-light', '', 'Montserrat-ExtraLight.php');
            $this->AddFont('Montserrat', '', 'Montserrat-Light.php');
            $this->SetMargins(0, 0, 0);
            $this->Image('src/header.jpg',0,0,210,0);
        }
    }
    function Footer()
    {
        $this->SetFillColor(146,24,33);
        $this->SetTextColor(255,255,255);
        $this->SetFont('Arial', 'B', 10);
        if($this->PageNo() != 1)
        {
            $this->SetY(-10);
            $this->SetX(-10);
            $this->Cell(5,5,$this->PageNo(),0,0,'C',true);
        }
    }
}
?>