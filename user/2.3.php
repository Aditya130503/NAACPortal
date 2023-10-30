<?php
include('conn.php');
require('tcpdf/tcpdf.php');
include('fetch.php');


addDataToPDF($pdf, $conn, 'teach_learn_proce', 'additional', 'additional');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');
$html = '<table border="1">';
    $html .= '<tr>';
    $html .= '<th>2.3.1 Student centric methods, such as experiential learning, participative learning and problem
    solving methodologies are used for enhancing learning experiences using ICT tools</th>';
    $html .= '<th>Upload Additional information</th>'; 
    $html .= '<th>Provide Link for Additional information</th>';
    $html .= '</tr>';
// Close the database connection
mysqli_close($conn);
?>
