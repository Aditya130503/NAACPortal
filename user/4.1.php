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
     $html .= '<th>Sr.no</th>';
    $html .= '<th>Availability of adequate infrastructure and physical facilities viz., classrooms, laboratories, ICT facilities,cultural activities, gymnasium, yoga centre etc.</th>'; 
    $html .= '<th>Additional</th>';
    $html .= '<th>% of expenditure, excluding salary for infrastructure augmentation(INR in Lakhs)</th>';
    $html .= '<th>Expenditure for infrastructure augmentation, excluding salary for infrastructure augmentation(INR in Lakhs)for last 5 years</th>';
     $html .= '<th>Expenditure for infrastructure augmentation, excluding salary for infrastructure augmentation(INR in Lakhs)21-22</th>';
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

addDataToPDF($pdf, $conn, 'infra_learn', 'addi', 'supp_doc','inst_data');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');

// Close the database connection
mysqli_close($conn);
?>
