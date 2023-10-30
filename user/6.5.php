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
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    
    // Generate the table and document links
    $html = '<table border="1">';
    $html .= '<tr>';
    $html .= '<th>6.5.1 Internal Quality Assurance Cell (IQAC) has contributed significantly for institutionalizing the
    quality assurance strategies and processes. It reviews teaching learning process, structures &
    methodologies of operations and learning outcomes at periodic intervals and records the incremental
    improvement in various activities</th>';
    $html .= '<th>Upload Additional information</th>'; 
    $html .= '<th>Provide link for additional information</th>';
    $html .= '<th>6.5.2 Quality assurance initiatives of the institution include:
    1.Regular meeting of Internal Quality Assurance Cell (IQAC); Feedback collected, analysed
    and used for improvements
    2.Collaborative quality initiatives with other institution(s)/ membership of international
    networks
    3.Participation in NIRF
    4.any other quality audit/accreditation recognized by state, national or international agencies
    such as NAAC, NBA, ISO Certification etc</th>';
    $html .= '<th>Upload supporting document</th>'; 
    $html .= '<th>Institutional data in the prescribed format</th>'; 
    
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




addDataToPDF($pdf, $conn, 'iqas', 'addi', 'supp_doc','inst_data');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');

// Close the database connection
mysqli_close($conn);
?>
