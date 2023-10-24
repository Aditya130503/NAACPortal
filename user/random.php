<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

// Include the TCPDF library
require('tcpdf/tcpdf.php');

// Initialize the PDF object
$pdf = new TCPDF();
$pdf->AddPage();

// Set some properties (optional)
$pdf->SetFont('helvetica', '', 12);
$pdf->SetAutoPageBreak(true, 10);

// Connect to your database using your 'conn.php' script
include('conn.php');

// Assuming you have multiple tables, you can perform queries for each table
$query1 = "SELECT * FROM acad_flex"; // Update with the actual table name
$result1 = mysqli_query($conn, $query1);

$query2 = "SELECT * FROM alumnimng"; // Update with the actual table name
$result2 = mysqli_query($conn, $query2);

// Create a function to add data from a result set to a table
function addTableData($pdf, $result) {
    $pdf->AddPage();

    $html = '<table border="1">';
    while ($row = mysqli_fetch_assoc($result)) {
        $html .= '<tr>';
        foreach ($row as $column => $value) {
            if ($column == 'inst_data') {
                // Check if the current column is the one you want to format as a link
                $html .= '<td><a href="' . $value . '" target="_blank">' . $value . '</a></td>';
            } else {
                $html .= '<td>' . $value . '</td>';
            }
        }
        $html .= '</tr>';
    }
    $html .= '</table>';

    $pdf->writeHTML($html, true, false, true, false, '');
}

// Add data from the first table to the PDF
addTableData($pdf, $result1);

// Add data from the second table to the PDF
addTableData($pdf, $result2);
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');

// Close the database connection
mysqli_close($conn);
?>


