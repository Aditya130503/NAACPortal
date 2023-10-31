<?php
include('conn.php');
require('tcpdf/tcpdf.php');
include('fetch.php');


addDataToPDF($pdf, $conn, 'feedback', 'supp_doc', 'supp_doc');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');


// Close the database connection
mysqli_close($conn);
?>
