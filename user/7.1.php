<?php
include('conn.php');
require('tcpdf/tcpdf.php');
//include('fetch.php');



$pdf = new TCPDF();
$pdf->AddPage();

// Set some properties (optional)
$pdf->SetFont('helvetica', '', 12);
$pdf->SetAutoPageBreak(true, 10);
function addDataToPDF($pdf, $conn, $table, $fileColumn, $linkColumn,$fileColumn2,$fileColumn3){
// Function to add data to the PDF with document links
    $pdf->AddPage();
    
    // Query the database
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    
    // Generate the table and document links
    $html = '<table border="1">';
    $html .= '<tr>';
    $html .= '<th>7.1.1 Measures initiated by the Institution for the promotion of gender equity and Institutional
    initiatives to celebrate / organize national and international commemorative days, events and
    festivals during the last five years</th>';
    $html .= '<th>Upload Additional information</th>'; 
    $html .= '<th>Provide link for additional information</th>';
    $html .= '<th>7.1.2 The Institution has facilities and initiatives for
    1.Alternate sources of energy and energy conservation measures
    2.Management of the various types of degradable and nondegradable waste
    3.Water conservation
    4.Green campus initiatives
    5.Disabled-friendly, barrier free environment</th>';
    $html .= '<th>Upload supporting document</th>'; 
    $html .= '<th>7.1.3 Quality audits on environment and energy regularly undertaken by the Institution. The
    institutional environment and energy initiatives are confirmed through the following
    1.Green audit / Environment audit
    2.Energy audit
    3.Clean and green campus initiatives
    4.Beyond the campus environmental promotion activities</th>'; 
    $html .= '<th>Upload supporting document</th>';
    $html .= '<th>7.1.4 Describe the Institutional efforts/initiatives in providing an inclusive environment i.e., tolerance
    and harmony towards cultural, regional, linguistic, communal socioeconomic and Sensitization of
    students and employees to the constitutional obligations: values, rights, duties and responsibilities of
    citizens </th>';
    $html .= '<th>Upload Additional information</th>';
    $html .= '<th>Provide link for additional information</th>';
    $html .= '</tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $html .= '<tr>';
        foreach ($row as $column => $value) {
            
            if ($column == $fileColumn || $column == $linkColumn || $column == $fileColumn2 || $column == $fileColumn3) {
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




addDataToPDF($pdf, $conn, 'inst_values', 'addi', 'supp_doc','qasupp_doc','additional');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');

// Close the database connection
mysqli_close($conn);
?>
