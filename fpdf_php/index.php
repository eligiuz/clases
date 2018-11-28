<?php

require 'fpdf/fpdf.php';
$fpdf = new FPDF();
$fpdf->AddPage('PORTRAIT', 'letter');

class pdf extends FPDF{

    public function header(){
<<<<<<< Updated upstream
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
