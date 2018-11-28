<?php

require 'fpdf/fpdf.php';
$fpdf = new FPDF();
$fpdf->AddPage('PORTRAIT', 'letter');

class pdf extends FPDF{

    public function header(){
        $this->SetFont('courrier', 'B', 12);
        $this->Write(5, 'Centro Educativa Colonia La Paz');
    }

    public function footer(){
        $this->SetFont('Courrier', 'B', 12);
        $this->Write(5, 'San Miguel, El Salvador');
    }    

}

$fpdf = new pdf();
$fpdf->AddPage('portrait', 'letter');
$fpdf->SetFont('Arial', 'B', 14);
$fpdf->Cell(0,5, 'Listado de estudiantes matriculados');


$fpdf->OutPut();
