<?php
include('conn.php');
require('tcpdf/tcpdf.php');
include('fetch.php');


addDataToPDF($pdf, $conn, 'stud_sati_sur', 'db', 'db');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');
$html = '<table border="1">';
    $html .= '<tr>';
    $html .= '<th>2.7.1 Online student satisfaction survey regarding teaching learning process</th>';
    $html .= '<th>Upload  database of all students on roll </th>'; 
    $html .= '</tr>';
// Close the database connection
mysqli_close($conn);
?>
