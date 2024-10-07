<?php

require_once('../vendor/autoload.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->AddPage();

$imagePath = __DIR__ . '/../example.png';

/*
var_dump($imagePath);
var_dump(file_exists($imagePath));
*/

$html = '<h1>Test</h1><p><img src="' . $imagePath . '" style="width: 5cm" /></p>';
$pdf->writeHtml($html);
//var_dump($html);
$pdf->output('example.pdf', 'I');
