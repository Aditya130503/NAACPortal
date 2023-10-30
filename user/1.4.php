<?php
include('conn.php');
require('tcpdf/tcpdf.php');
include('fetch.php');


addDataToPDF($pdf, $conn, 'feedback', 'supp_doc', 'supp_doc');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');
$html = '<table border="1">';
$html .= '<tr>';
$html .= '<th>1.4.1  Institution obtains feedback on the academic performance and ambience of the institution from various stakeholders, such as Students, Teachers, Employers, Alumni etc. and action taken report on the feedback is made available on institutional website (Yes or No</th>'; // Replace with your actual heading
$html .= '<th>Upload Supporting document</th>';
$html .= '</tr>';

// Close the database connection
mysqli_close($conn);
?>
