<?php
include('conn.php');
require('tcpdf/tcpdf.php');
include('fetch.php');


addDataToPDF($pdf, $conn, 'inst_dist', 'supp_doc', 'inst_data');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');
$html = '<table border="1">';
$html .= '<tr>';
$html .= '<th>>7.3.1 Portray the performance of the Institution in one area distinctive to its priority and thrust</th>';
$html .= '<th>Any other relevant information</th>'; 
$html .= '<th>Appropriate web in the Institutional website</th>';
$html .= '</tr>';
// Close the database connection
mysqli_close($conn);
?>
