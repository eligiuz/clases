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
<<<<<<< HEAD
<<<<<<< Updated upstream
        $this->SetFont('courrier', 'B', 12);
        $this->Write(5, 'Centro Educativa Colonia La Paz');
=======
        $this->SetFont('Arial', 'B', 10);
        $this->SetTextColor(25,174,194);
        $this->Cell(0, 5, 'Centro Educativa Colonia La Paz', 0, 0, 'C');
        $this->Image('imagenes/logo_ut.png', 190, 5, 20, '','png');
>>>>>>> master
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
$fpdf->SetDrawColor(61,174,233);
$fpdf->SetLineWidth(2);
$fpdf->Line(60, $fpdf->GetY() + 5, 158, $fpdf->GetY() + 5);
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
$fpdf->SetFillColor(255,255,255);
$fpdf->SetTextColor(40,40,40);
$fpdf->SetDrawColor(88,88,88);
$fpdf->Cell(20, 10, 'N', 0, 0, 'C', 1);
$fpdf->Cell(30, 10, 'NIE', 0, 0, 'C', 1);
$fpdf->Cell(50, 10, 'Apellidos', 0, 0, 'C', 1);
$fpdf->Cell(50, 10, 'Nombre', 0, 0, 'C', 1);
$fpdf->Cell(10, 10, 'Sexo', 0, 0, 'C', 1);
$fpdf->Cell(35, 10, 'F. de nacimiento', 0, 0, 'C', 1);
$fpdf->SetDrawColor(61,174,233);
$fpdf->SetLineWidth(1);
$fpdf->Line(15, 80, 205, 80);
#fpdf->SetTextColor(0,0,0);

$estudiante = $model->BoletaCaptura(26);

=======

        $this->SetFont('Courier', 'B', 12);
        $this->Write(5, 'Centro Educativo Colonia La Paz');
        $this->Image

    }

    public function footer(){

        $this->SetFont('Courier', 'B', 12);
        $this->SetY(-15); // Para que coloque el pie de página 1.5 cm antes del final.
        $this->Write(5, 'San Miguel, El Salvador');

    }
}

$fpdf = new pdf;
$fpdf->AddPage('portrait', 'letter');
$fpdf->SetFont('Arial', 'B', 14);
$fpdf->SetY(20); // Para poner el titulo abajo del encabezado
$fpdf->Cell(0,5,'Listado de estudiantes matriculados', 0, 0, 'c');
$fpdf->AddPage();
>>>>>>> Stashed changes
$fpdf->OutPut();
