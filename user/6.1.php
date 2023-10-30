<?php
include('conn.php');
require('tcpdf/tcpdf.php');
include('fetch.php');


addDataToPDF($pdf, $conn, 'vision_mission', 'addi', 'addi');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');
$html = '<table border="1">';
$html .= '<tr>';
$html .= '<th>6.1.1 The governance and leadership is in accordance with vision and mission of the institution and it
is visible in various institutional practices such as decentralization and participation in the
institutional governance</th>';
$html .= '<th>Upload Additional information</th>'; 
$html .= '<th>Provide link for additional information</th>';
$html .= '</tr>';
// Close the database connection
mysqli_close($conn);
?>
