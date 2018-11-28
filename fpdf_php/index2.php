<?php
/*
AddPage(orientacion[PORTRAIR, LANDSCAPE], tamaño[A3, A4,A5, LETTER, LEGAL], rotación),
SetFront(tipo[COURRIER, HELVETICA, ARIAL, TIMES, SYMBOL, ZAPDINGBATS], estilo[normal, B, I, U], tamaño),
Cell(ancho, alto, texto, bordes, ?, alineación, rellenar, link),
Write(alto, texto, link)
OUTPUT(destino[I, D, F ,S], nombre_archivo, utf8)
*/

require 'fpdf/fpdf.php';
$fpdf = new FPDF();
$fpdf->AddPage('PORTRAIT', 'letter');

$fpdf->SetFont('arial', 'B', 14);
$fpdf->Write(5, 'Empleados registrados en el portal');
$fpdf->Ln(10);

$fpdf->SetFont('arial', 'B', 10);
$fpdf->SetFillColor(55,89,78);
$fpdf->Cell(25,5,'DUI', 1, 0, 'C', true );
$fpdf->Cell(50, 5, 'Nombre completo',1 ,0, 'C', false);
$fpdf->Cell(100, 5, utf8_decode('Dirección'),1 ,1, 'C', false);

$fpdf->SetFont('arial', '', 10);
$fpdf->Ln(0);
$fpdf->Cell(25,5,'326589', 1, 0,false );
$fpdf->Cell(50, 5, 'Eligio Cachón Menéndez',1 ,0, false);
$fpdf->Cell(100, 5, utf8_decode('27 de Febrero # 1729'),1 ,1, false);

$file_content = $fpdf->OutPut('S', 'empleados.pdf', false);
header('Content-type:application/pdf');
echo $file_content;
$fpdf->Close();
$fpdf->OutPut();
