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
    $query = "SELECT * FROM $table WHERE (SELECT MAX(id) FROM $table)=id";
    $result = mysqli_query($conn, $query);
    
    // Generate the table and document links
    $html = '<table border="1">';
    $html .= '<tr>';
    $html .= '<th>No. of students admitted year wise</th>'; // Replace with your actual heading
    $html .= '<th>No of sanctioned seats year wise
               </th>'; // Replace with your actual heading
    $html .= '<th>Document</th>'; // Replace with your actual heading
    $html .= '<th>Institutional data </th>';
    $html .= '<th>Percentage of seats filled against seats reserved for various categories</th>'; // Replace with your actual heading
    $html .= '<th>No. of actual students admitted from the reserved categories year - wise during the last five
    years</th>'; // Replace with your actual heading
    $html .= '<th>No. of seats earmarked for reserved category as per GOI/ State Govt rule year wise
    </th>'; // Replace with your actual heading
    $html .= '<th>supporting document </th>';
    $html .= '<th>Institutional data</th>'; // Replace with your actual heading
    $html .= '<th>Student–Full time Teacher Ratio</th>'; 
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
