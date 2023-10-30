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
    $html .= '<th>5.2.1 Percentage of placement of outgoing students and students progressing to higher education
    during the last five years</th>';
    $html .= '<th>5.2.1.1 Number of outgoing students placed and / or progressed to higher education year wise during
    the last five years</th>'; 
    $html .= '<th>5.2.1.2 Number of outgoing students year wise during the last five years</th>';
    $html .= '<th>Upload supporting document </th>';
    $html .= '<th>Institutional data in the prescribed format </th>'; 
    $html .= '<th>5.2.2 Percentage of students qualifying in state/national/ international level examinations during the
    last five years (eg: JAM/CLAT/GATE/ GMAT/ CAT/ GRE/ TOEFL/ Civil Services/State
    government examinations)</th>'; 
    $html .= '<th>5.2.2.1 Number of students qualifying in state/ national/ international level examinations (eg:
        JAM/CLAT/NET/ SLET/ GATE/ GMAT/CAT/GRE/ TOEFL/ Civil Services/ Judicial Services/Public
        Prosecution services/All India Bar Exams/State government examinations) year wise during last five
        years</th>';
    $html .= '<th>5.2.2.2 Number of students appearing in state/ national/ international level examinations (eg:
    JAM/CLAT/NET/ SLET/ GATE/ GMAT/CAT,GRE/ TOFEL/ Civil Services/ State government
    examinations) year wise during last five years</th>';
    $html .= '<th>Upload supporting document </th>';
    $html .= '<th>Institutional data in the prescribed format</th>';
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



addDataToPDF($pdf, $conn, 'stud_progre','out_supp_doc', 'out_inst_data', 'exasupp_doc','exainst_data');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');

// Close the database connection
mysqli_close($conn);
?>
