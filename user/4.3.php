<?php
include('conn.php');
require('tcpdf/tcpdf.php');
//include('fetch.php');

$pdf = new TCPDF();
$pdf->AddPage();

// Set some properties (optional)
$pdf->SetFont('helvetica', '', 12);
$pdf->SetAutoPageBreak(true, 10);
function addDataToPDF($pdf, $conn, $table, $fileColumn, $linkColumn){
// Function to add data to the PDF with document links
    $pdf->AddPage();
    
    // Query the database
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    
    // Generate the table and document links
    $html = '<table border="1">';
    $html .= '<tr>';
    $html .= '<th>4.3.1 Institution frequently updates its IT facilities and provides sufficient bandwidth for internet
    connection
    </th>';
    $html .= '<th>Upload Additional information </th>'; 
    $html .= '<th>4.3.2 Student – Computer ratio (Data for the latest completed academic year)</th>';
    $html .= '<th>4.3.2.1 Number of computers available for students usage during the latest completed academic
    year:</th>';
    $html .= '<th>Upload supporting document</th>'; 
    $html .= '</tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $html .= '<tr>';
        foreach ($row as $column => $value) {
            
            if ($column == $fileColumn || $column == $linkColumn  ) {
                $filePath = '../admin/pdf/' . $value; // Assuming the files are stored in the 'pdf' directory
                $html .= '<td><a href="' . $filePath . '" target="_blank">Download/View</a></td>';
                
            } else {
                $html .= '<td>' . $value . '</td>';
            }
        }
        $html .= '</tr>';
    }
    $html .= '</table>';

    $pdf->writeHTML($html, true, false, true, false, '');
}


addDataToPDF($pdf, $conn, 'it_infra', 'addi', 'supp_doc');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');

// Close the database connection
mysqli_close($conn);
?>
