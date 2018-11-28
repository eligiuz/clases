<?php
//$fpdf->PageNo();
//$fpdf->AliasNbPages();
//"número de página 1 de {nb}"
//$ftpdf->Image(ruta, posicionX, posicionY, alto, ancho, tipo, link);
require 'fpdf/fpdf.php';
$fpdf = new FPDF();
$fpdf->AddPage('PORTRAIT', 'letter');

class pdf extends FPDF{

    public function header(){
        $this->SetFont('Arial', 'B', 10);
        $this->SetTextColor(25,174,194);
        $this->Cell(0, 5, 'Centro Educativa Colonia La Paz', 0, 0, 'C');
        $this->Image('imagenes/logo_ut.png', 190, 5, 20, '','png');
    }

    public function footer(){
        $this->SetFont('Arial', 'B', 10);
        $this->SetY(-15);
        $this->Write(5, 'San Miguel, El Salvador');
        //ser coloca donde comiuenza la páginación y la paginación
        $this->SetX(-25);
        $this->AliasNbPages();
        $this->Write(5, $this->PageNo().'/{nb}');
    }    

}

$fpdf = new pdf('P', 'mm', 'letter', true);
$fpdf->AddPage('portrait', 'letter');
$fpdf->SetFont('Arial', 'B', 14);
$fpdf->SetY(30);
$fpdf->SetTextColor(16,87,97); //Cambia el color de la letra
$fpdf->Cell(0,5, 'Listado de estudiantes matriculados', 0, 0, 'C');
$fpdf->SetTextColor(0,0,0);

$fpdf->Ln();
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(20, 5, 'Grado: ');
$fpdf->Ln();
$fpdf->Cell(20,5, 'Sección: ');
$fpdf->Ln();
$fpdf->Cell(20,5, 'Turno: ');
$fpdf->Ln(); 
$fpdf->Cell(20,5, 'Docente: ');
$fpdf->Ln(20);

//SeFillColor() cambiar color de relleno
//SetDrawColor() cambiar color de la tabla

$fpdf->setFontSize(10);
$fpdf->setFont('Arial', 'B');
$fpdf->SetFillColor(11,63,71);
$fpdf->SetTextColor(255,255,255);
$fpdf->SetDrawColor(88,88,88);
$fpdf->Cell(20, 5, 'N', 1, 0, 'C', 1);
$fpdf->Cell(30, 5, 'NIE', 1, 0, 'C', 1);
$fpdf->Cell(50, 5, 'Apellidos', 1, 0, 'C', 1);
$fpdf->Cell(50, 5, 'Nombre', 1, 0, 'C', 1);
$fpdf->Cell(10, 5, 'Sexo', 1, 0, 'C', 1);
$fpdf->Cell(35, 5, 'F. de nacimiento', 1, 0, 'C', 1);

$fpdf->OutPut();
