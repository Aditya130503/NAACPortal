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
    $html .= '<th>3.3.1 Number of research papers published per teacher in the Journals on UGC care list during the last
    five years</th>';
    $html .= '<th>3.3.1.1 Number of research papers in the Journals notified on UGC CARE year wise during the last
    five years</th>'; 
    $html .= '<th>Upload Additional information</th>';
    $html .= '<th>Provide Link for Additional information</th>';
    $html .= '<th>3.3.2 Number of books and chapters in edited volumes/books published and papers published in
    national/ international conference proceedings per teacher during last five years</th>'; 
    $html .= '<th>3.3.2.1 Total number of books and chapters in edited volumes/books published and papers in
    national/ international conference proceedings year wise during last five years</th>'; 
    $html .= '<th>Upload supporting document </th>';
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

addDataToPDF($pdf, $conn, 'res_publi', 'additional', 'addi','inst_data');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');

// Close the database connection
mysqli_close($conn);
?>
