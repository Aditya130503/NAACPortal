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
    $query = "SELECT * FROM $table WHERE (SELECT MAX(id) FROM $table)=id";
    $result = mysqli_query($conn, $query);
    $html = '<table border="1">';
    $html .= '<tr>';
    $html .= '<th>Sr No.</th>';
    $html .= '<th>1.3.1 Institution integrates crosscutting issues relevant to Professional Ethics, Gender, Human
    Values, Environment and Sustainability into the Curriculum</th>'; 
    $html .= '<th>Additional</th>';
    $html .= '<th>Link</th>';
    $html .= '<th>1.3.2 Percentage of students undertaking project work/field work/ internships (Data for the latest completed academic year)</th>'; // Replace with your actual heading
    $html .= '<th>1.3.2.1 Number of students undertaking project work/field work / internships</th>'; // Replace with your actual heading
    $html .= '<th>Supp_doc</th>';
    $html .= '<th>Institutional data</th>';
    $html .= '</tr>';
    // Generate the table and document links
  
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


addDataToPDF($pdf, $conn, 'Ethics', 'additionalInfo', 'No_stud','supp_doc');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');

// Close the database connection
mysqli_close($conn);
?>
