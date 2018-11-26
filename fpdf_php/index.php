<?php
/*
AddPage(orientacion[PORTRAIR, LANDSCAPE], tamaño[A3, A4,A5, LETTER, LEGAL]),
SetFront(tipo[COURRIER, HELVATICA, ARIAL, TIMES, SYMBOL, ZAPDINGBATS], estilo[normal, B, I, U], tamaño),
Cel(ancho, alto, texto, bordes, ?, alineación, rellenar, link),
OUTPUT(dstino[I, D, F ,S], nombre_archivo, utf8)
*/
require 'fpdf/fpdf.php';

$fpdf = new FPDF();
$fpdf->AddPage();
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(30,5, 'Hola como estan');
$fpdf->AddPage();
$fpdf->Write(5,'Hola nuevamente');
$fpdf->OutPut();
