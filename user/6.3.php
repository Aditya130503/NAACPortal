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
    $query = "SELECT * FROM $table WHERE (SELECT MAX(id) FROM $table)=id";
    $result = mysqli_query($conn, $query);
    
    // Generate the table and document links
    $html = '<table border="1">';
    $html .= '<tr>';
    $html .= '<th>Sr.No</th>';
    $html .= '<th>The institution has effective welfare measures and Performance Appraisal System for teaching and non-teaching staff</th>';
    $html .= '<th>Additional </th>';
    $html .= '<th>% teachers provided with financial support to attend conferences/workshops and
    towards membership fee of professional bodies during the last 5 years</th>';
    $html .= '<th>No.of teachers provided with financial support to attend conferences/workshops and
    towards membership fee of professional bodies21-22</th>';
    $html .= '<th>20-21</th>';
    $html .= '<th>19-20</th>';
    $html .= '<th>18-19</th>';
    $html .= '<th>17-18</th>';
    $html .= '<th>Document</th>'; 
    $html .= '<th>Institutional data</th>'; 
    $html .= '<th>%teaching and non-teaching staff participating in FDP, professional development /administrative training programs during the last 5
    years</th>';
    $html .= '<th>Total no. of teaching and non-teaching staff participating in FDP, professional development /administrative training programs 21-22</th>';
     $html .= '<th>20-21</th>';
    $html .= '<th>19-20</th>';
    $html .= '<th>18-19</th>';
    $html .= '<th>17-18</th>';
    $html .= '<th>No. of non-teaching staff year wise 21-22</th>';
     $html .= '<th>20-21</th>';
    $html .= '<th>19-20</th>';
    $html .= '<th>18-19</th>';
    $html .= '<th>17-18</th>';
    $html .= '<th>Document</th>';
    $html .= '<th>Institutional data</th>'; 
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
