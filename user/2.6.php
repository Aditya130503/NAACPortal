<?php
include('conn.php');
require('tcpdf/tcpdf.php');
//include('fetch.php');

$pdf = new TCPDF();
$pdf->AddPage();

// Set some properties (optional)
$pdf->SetFont('helvetica', '', 12);
$pdf->SetAutoPageBreak(true, 10);
function addDataToPDF($pdf, $conn, $table, $fileColumn, $linkColumn,$fileColumn2){
// Function to add data to the PDF with document links
    $pdf->AddPage();
    
    // Query the database
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    
    // Generate the table and document links
    $html = '<table border="1">';
    $html .= '<tr>';
    $html .= '<th>2.6.1 Programme Outcomes (POs) and Course Outcomes (COs) for all Programmes offered by the
    institution are stated and displayed on website and attainment of POs and COs are evaluated</th>';
    $html .= '<th>Upload Additional information</th>'; 
    $html .= '<th>Provide Link for Additional information</th>';
    $html .= '<th>2.6.2 Pass percentage of Students during last five year</th>';
    $html .= '<th>2.6.2.1 Number of final year students who passed the university examination year wise during the
    last five years</th>'; 
    $html .= '<th>2.6.2.2 Number of final year students who appeared for the university examination year-wise during
    the last five years</th>'; 
    $html .= '<th>Upload supporting document</th>';
    $html .= '<th>Provide Link for Additional information</th>';
    $html .= '</tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $html .= '<tr>';
        foreach ($row as $column => $value) {
            
            if ($column == $fileColumn || $column == $linkColumn || $column == $fileColumn2 ) {
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


addDataToPDF($pdf, $conn, 'stud_perf_lear_out', 'addi', 'supp_doc','inst_data');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');

// Close the database connection
mysqli_close($conn);
?>
