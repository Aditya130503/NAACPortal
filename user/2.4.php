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
    $html .= '<th>2.4.1 Percentage of full-time teachers against sanctioned posts during the last five years</th>';
    $html .= '<th>2.4.1.1 Number of Sanctioned posts / required positions for teaching staff/ full time teachers year
    wise during the last five years:</th>'; 
    $html .= '<th>Upload supporting document</th>';
    $html .= '<th>>2.4.2 Percentage of full time teachers with NET/SET/SLET/ Ph. D. / D.M. / M.Ch. / D.N.B
    Superspeciality / D.Sc. / D.Litt. during the last five years (consider only highest degree for count)</th>';
    $html .= '<th>2.4.2.1 Number of full time teachers with NET/SET/SLET/Ph. D. / D.M. / M.Ch. / D.N.B
    Superspeciality / D.Sc. / D.Litt. year wise during the last five yearsanctioned seats year wise during last five years
    </th>'; 
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

addDataToPDF($pdf, $conn, 'tpq', 'supp_doc', 'nfts_supp','inst_data');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');

// Close the database connection
mysqli_close($conn);
?>
