<?php
include('conn.php');
require('tcpdf/tcpdf.php');
//include('fetch.php');


$pdf = new TCPDF();
$pdf->AddPage();

// Set some properties (optional)
$pdf->SetFont('helvetica', '', 12);
$pdf->SetAutoPageBreak(true, 10);
function addDataToPDF($pdf, $conn, $table, $fileColumn, $linkColumn,$fileColumn2,$fileColumn3,$fileColumn4){
// Function to add data to the PDF with document links
    $pdf->AddPage();
    
    // Query the database
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    
    // Generate the table and document links
    $html = '<table border="1">';
    $html .= '<tr>';
    $html .= '<th>6.3.1 The institution has effective welfare measures and Performance Appraisal System for teaching
    and non-teaching staff</th>';
    $html .= '<th>Upload Additional information </th>'; 
    $html .= '<th>6.3.2 Percentage of teachers provided with financial support to attend conferences/workshops and
    towards membership fee of professional bodies during the last five years</th>';
    $html .= '<th>6.3.2.1 Number of teachers provided with financial support to attend conferences/workshops and
    towards membership fee of professional bodies year wise during the last five years</th>';
    $html .= '<th>Upload supporting document</th>'; 
    $html .= '<th>Institutional data in the prescribed format </th>'; 
    $html .= '<th>6.3.3 Percentage of teaching and non-teaching staff participating in Faculty development
    Programmes (FDP), professional development /administrative training programs during the last five
    years</th>';
    $html .= '<th>6.3.3.1 Total number of teaching and non-teaching staff participating in Faculty development
    Programmes (FDP), professional development /administrative training programs during the last five
    years</th>';
    $html .= '<th>6.3.3.2 Number of non-teaching staff year wise during the last five years</th>';
    $html .= '<th>Upload supporting document</th>';
    $html .= '<th>Institutional data in the prescribed format</th>'; 
    $html .= '</tr>';
    
    while ($row = mysqli_fetch_assoc($result)) {
        $html .= '<tr>';
        foreach ($row as $column => $value) {
            
            if ($column == $fileColumn || $column == $linkColumn || $column == $fileColumn2 || $column == $fileColumn3|| $column == $fileColumn4) {
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





addDataToPDF($pdf, $conn, 'facu_empow', 'addi', 'additional','inst_data','additional_info','insti_data');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');

// Close the database connection
mysqli_close($conn);
?>
