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
    $html .= '<th>2.1.1.1 Number of students admitted year wise during last five years</th>'; // Replace with your actual heading
    $html .= '<th>2.1.1.2 Number of sanctioned seats year wise during last five years
               </th>'; // Replace with your actual heading
    $html .= '<th>Upload supporting document</th>'; // Replace with your actual heading
    $html .= '<th>Institutional data in the prescribed format</th>';
    $html .= '<th>2.1.2 Percentage of seats filled against seats reserved for various categories (SC, ST, OBC,
    Divyangjan, etc. as per applicable reservation policy during the last five years (Exclusive of
    supernumerary seats)</th>'; // Replace with your actual heading
    $html .= '<th>2.1.2.1 Number of actual students admitted from the reserved categories year - wise during the last five
    years</th>'; // Replace with your actual heading
    $html .= '<th>2.1.2.2 Number of seats earmarked for reserved category as per GOI/ State Govt rule year wise
    during the last five years</th>'; // Replace with your actual heading
    $html .= '<th>Upload supporting document </th>';
    $html .= '<th>Institutional data in the prescribed format</th>'; // Replace with your actual heading
    $html .= '<th>2.2.1 Student – Full time Teacher Ratio
    (Data for the latest completed academic year</th>'; 
    $html .= '</tr>';
    // Replace with your actual heading
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


addDataToPDF($pdf, $conn, 'teaching_learning_eval', 'additional', 'ins_data','supp_doc','nos_inst_data');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');
     
// Close the database connection
mysqli_close($conn);
?>
