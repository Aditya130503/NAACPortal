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
    
    // Generate the table and document links
    $html = '<table border="0.5">';
    $html .= '<tr>';
    $html .= '<th>Sr. No.</th>';
    $html .= '<th>POs and COs for all Programmes offered by the institution are stated and displayed on website and attainment of POs and COs are evaluated</th>';
    $html .= '<th>Additional</th>'; 
    $html .= '<th>Link</th>';
    $html .= '<th>Pass percentage of Students 2017-2022</th>';
    $html .= '<th>No. of final year students passing university examination 21-22</th>'; 
    $html .= '<th>20-21</th>';
    $html .= '<th>19-20</th>';
    $html .= '<th>18-19</th>';
    $html .= '<th>17-18</th>';
    $html .= '<th>No. of final year students appearing for the university examination 21-22</th>'; 
     $html .= '<th>20-21</th>';
    $html .= '<th>19-20</th>';
    $html .= '<th>18-19</th>';
    $html .= '<th>17-18</th>';
    $html .= '<th>Document</th>';
    $html .= '<th>Link</th>';
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
