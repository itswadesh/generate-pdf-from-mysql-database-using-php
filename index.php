<?php
include('database.php');
$database = new Database();
$result = $database->runQuery("SELECT name,author FROM books");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='crud' 
AND `TABLE_NAME`='books'
and `COLUMN_NAME` in ('name','author')");

require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(95,12,$column_heading,1);
}
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(95,12,$column,1);
}
$pdf->Output();
?>