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
    $html = '<table border="1">';
    $html .= '<tr>';
    $html .= '<th>Sr. No</th>';
    $html .= '<th>Extension activities in the neighborhood community, sensitizing students to
    social issues, for their holistic development, and impact thereof during the last five years</th>';
    $html .= '<th>No. of research papers in the Journals notified on UGC CARE year wise during the last
    five years</th>'; 
    $html .= '<th>Additional</th>';
    $html .= '<th>Link</th>';
    $html .= '<th>No. of extension and outreach programs conducted by the institution through
    NSS/NCC/Red cross/YRC etc.</th>'; 
    $html .= '<th>No. of extension and outreach Programs conducted through NSS/ NCC/ Red Cross/ YRC etc.21-22</th>'; 
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


addDataToPDF($pdf, $conn, 'extension','addi', 'supp_doc', 'inst_data');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');

// Close the database connection
mysqli_close($conn);
?>
