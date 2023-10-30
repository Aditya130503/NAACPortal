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
    $html .= '<th> 5.3.1 Number of awards/medals for outstanding performance in sports/ cultural activities at
    University / state/ national / international level (award for a team event should be counted as one)
    during the last five years</th>';
    $html .= '<th> 5.3.1.1 Number of awards/medals for outstanding performance in sports/cultural activities atnational/international level (award for a team event should be counted as one) year wise during the last
    five years</th>'; 
    $html .= '<th>Upload supporting document</th>';
    $html .= '<th>Institutional data in the prescribed format </th>';
    $html .= '<th>5.3.2 Average number of sports and cultural programs in which students of the Institution
    participated during last five years (organised by the institution/other institutions)</th>'; 
    $html .= '<th>5.3.2.1 Number of sports and cultural programs in which students of the Institution participated
    year wise during last five years</th>'; 
    $html .= '<th>Upload supporting document</th>';
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



addDataToPDF($pdf, $conn, 'stud_part', 'supp_doc', 'inst_data','s_supp_doc','s_inst_data');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');

// Close the database connection
mysqli_close($conn);
?>
