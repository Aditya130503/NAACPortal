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
    $html .= '<th>Heading 1</th>'; // Replace with your actual heading
    $html .= '<th>Heading 2</th>'; // Replace with your actual heading
    $html .= '<th>Heading 3</th>'; // Replace with your actual heading
    $html .= '<th>Heading 4</th>';
    $html .= '<th>Heading 5</th>'; // Replace with your actual heading
    $html .= '<th>Heading 6</th>'; // Replace with your actual heading
    $html .= '<th>Heading 7</th>'; // Replace with your actual heading
    $html .= '<th>Heading 8</th>';
    $html .= '<th>Heading 9</th>'; // Replace with your actual heading
    $html .= '<th>Heading 10</th>'; // Replace with your actual heading
    $html .= '<th>Heading 11</th>'; // Replace with your actual heading
    $html .= '<th>Heading 12</th>'; // Replace with your actual heading
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




addDataToPDF($pdf, $conn, 'acad_flex', 'supp_doc', 'inst_data','no_supp_doc','no_inst_data');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');

// Close the database connection
mysqli_close($conn);
?>
