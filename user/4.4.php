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
    $html = '<table border="1">';
    $html .= '<tr>';
    $html .= '<th>4.4.1 Percentage of expenditure incurred on maintenance of infrastructure (physical and academic
    support facilities) excluding salary component during the last five years (INR in Lakhs)</th>';
    $html .= '<th>4.4.1.1 Expenditure incurred on maintenance of infrastructure (physical facilities and academic
    support facilities) excluding salary component year wise during the last five years (INR in lakhs)</th>'; 
    $html .= '<th>Upload supporting document</th>';
    $html .= '<th>Institutional data in the prescribed format</th>';
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

addDataToPDF($pdf, $conn, 'maintain_it', 'supp_doc', 'inst_data');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');

// Close the database connection
mysqli_close($conn);
?>
