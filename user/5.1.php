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
    $html .= '<th>Sr.No</th>';
    $html .= '<th>% students benefited by scholarships and freeships provided by the Government and Non-Government agencies during last five years</th>';
    $html .= '<th>Number of students benefited by scholarships and freeships provided by the Government and Non-Government agencies 21-22</th>';
     $html .= '<th>20-21</th>';
    $html .= '<th>19-20</th>';
    $html .= '<th>18-19</th>';
    $html .= '<th>17-18</th>';
    $html .= '<th>Document</th>';
    $html .= '<th>Institutional data</th>';
    $html .= '<th>1.Soft skills
    2.Language and communication skills 3.Life skills (Yoga, physical fitness, health and hygiene) 4.ICT/computing skills</th>'; 
    $html .= '<th>Document</th>'; 
    $html .= '<th>Institutional data</th>';
    $html .= '<th>% students benefitted by guidance for competitive examinations and career counseling offered by the Institution during the last five years</th>';
    $html .= '<th>No. of students benefitted by guidance for competitive examinations and career counselling offered by the institution year wise during last five years</th>';
    $html .= '<th>Document </th>';
    $html .= '<th>Institutional data</th>';
    $html .= '<th>1.Guidelines of statutory/regulatory bodies 2. Awareness and undertakings on policies with zero tolerance 3.Mechanisms for submission of online/offline students’ grievances
    4.Timely redressal of the grievances</th>';
    $html .= '<th>Document</th>';
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
