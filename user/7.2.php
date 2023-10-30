<?php
include('conn.php');
require('tcpdf/tcpdf.php');
include('fetch.php');


addDataToPDF($pdf, $conn, 'best_prac', 'supp_doc', 'inst_data');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');
$html = '<table border="1">';
$html .= '<tr>';
$html .= '<th>7.2.1 Describe two best practices successfully implemented by the Institution as per NAAC format
provided in the Manual</th>';
$html .= '<th>Best practices as hosted on the Institutional website</th>'; 
$html .= '<th>Any other relevant information</th>';
$html .= '</tr>';
// Close the database connection
mysqli_close($conn);
?>
