<?php
include('conn.php');
require('tcpdf/tcpdf.php');
include('fetch.php');


addDataToPDF($pdf, $conn, 'eval_proce', 'additional', 'additional');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');
$html .= '<tr>';
$html .= '<th>2.5.1 Mechanism of internal/ external assessment is transparent and the grievance redressal system
is time- bound and efficient</th>';
$html .= '<th>Upload Additional information</th>'; 
$html .= '<th>Provide Link for Additional information </th>';
$html .= '</tr>';
// Close the database connection
mysqli_close($conn);
?>
