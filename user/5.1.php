<?php
include('conn.php');
require('tcpdf/tcpdf.php');
//include('fetch.php');


$pdf = new TCPDF();
$pdf->AddPage();

// Set some properties (optional)
$pdf->SetFont('helvetica', '', 12);
$pdf->SetAutoPageBreak(true, 10);
function addDataToPDF($pdf, $conn, $table, $fileColumn, $linkColumn,$fileColumn2,$fileColumn3,$fileColumn4,$fileColumn5,$fileColumn6){
// Function to add data to the PDF with document links
    $pdf->AddPage();
    
    // Query the database
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    
    // Generate the table and document links
    $html = '<table border="1">';
    $html .= '<tr>';
    $html .= '<th>5.1.1 Percentage of students benefited by scholarships and freeships provided by the Government
    and Non-Government agencies during last five years</th>';
    $html .= '<th>5.1.1.1 Number of students benefited by scholarships and freeships provided by the Government and
    Non-Government agencies year wise during last five years</th>'; 
    $html .= '<th>Upload supporting document</th>';
    $html .= '<th>Institutional data in the prescribed format </th>';
    $html .= '<th>5.1.2 Capacity building and skills enhancement initiatives taken by the institution include the following
    1.Soft skills
    2.Language and communication skills
    3.Life skills (Yoga, physical fitness, health and hygiene)
    4.ICT/computing skills</th>'; 
    $html .= '<th>Upload supporting document</th>'; 
    $html .= '<th>Institutional data in the prescribed format</th>';
    $html .= '<th>5.1.3 Percentage of students benefitted by guidance for competitive examinations and career
    counseling offered by the Institution during the last five years</th>';
    $html .= '<th>5.1.3.1 Number of students benefitted by guidance for competitive examinations and career
    counselling offered by the institution year wise during last five years</th>';
    $html .= '<th>Upload supporting document </th>';
    $html .= '<th>Institutional data in the prescribed format </th>';
    $html .= '<th>5.1.4 The Institution has a transparent mechanism for timely redressal of student grievances
    including sexual harassment and ragging cases
    1.Implementation of guidelines of statutory/regulatory bodies
    2.Organisation wide awareness and undertakings on policies with zero tolerance
    3.Mechanisms for submission of online/offline students’ grievances
    4.Timely redressal of the grievances through appropriate committees</th>';
    $html .= '<th>Upload supporting document</th>';
    $html .= '</tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $html .= '<tr>';
        foreach ($row as $column => $value) {
            
            if ($column == $fileColumn || $column == $linkColumn || $column == $fileColumn2 || $column == $fileColumn3|| $column == $fileColumn4|| $column == $fileColumn5|| $column == $fileColumn6) {
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



addDataToPDF($pdf, $conn, 'stud_supp', 'supp_doc', 'inst_data','cbse_supp_doc','cbse_inst_data','sbgc_supp_doc','sbgc_inst_data','tm_supp_doc');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');

// Close the database connection
mysqli_close($conn);
?>
