<?php
include('conn.php');
require('tcpdf/tcpdf.php');
include('fetch.php');


addDataToPDF($pdf, $conn, 'collab', 'addi', 'addi');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');
$html = '<table border="1">';
$html .= '<tr>';
$html .= '<th>>3.5.1 Number of MoUs, collaborations/linkages for Faculty exchange, Student exchange, Internship,
Field trip, On-the- job training, research and other academic activities during the last five years:</th>';
$html .= '<th>Upload Additional information</th>'; 
$html .= '<th>Provide Link for Additional information</th>';
$html .= '</tr>';
// Close the database connection
mysqli_close($conn);
?>
