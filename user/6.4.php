<?php
include('conn.php');
require('tcpdf/tcpdf.php');
include('fetch.php');


addDataToPDF($pdf, $conn, 'fina_mng', 'addi', 'addi');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');
$html = '<table border="1">';
$html .= '<tr>';
$html .= '<th>6.4.1 Institution has strategies for mobilization and optimal utilization of resources and funds from
various sources (government/ nongovernment organizations) and it conducts financial audits
regularly (internal and external)</th>';
$html .= '<th>Upload Additional information</th>'; 
$html .= '<th>Provide link for additional information</th>';
$html .= '</tr>';
// Close the database connection
mysqli_close($conn);
?>
