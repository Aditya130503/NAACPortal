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
    $html .= '<th>3.4.1 Extension activities are carried out in the neighborhood community, sensitizing students to
    social issues, for their holistic development, and impact thereof during the last five years</th>';
    $html .= '<th>3.3.1.1 Number of research papers in the Journals notified on UGC CARE year wise during the last
    five years</th>'; 
    $html .= '<th>Upload Additional information</th>';
    $html .= '<th>Provide Link for Additional information</th>';
    $html .= '<th>3.4.3 Number of extension and outreach programs conducted by the institution through
    NSS/NCC/Red cross/YRC etc., (including the programmes such as Swachh Bharat, AIDS awareness,
    Gender issues etc. and/or those organised in collaboration with industry, community and NGOs)
    during the last five years</th>'; 
    $html .= '<th>3.4.3.1 Number of extension and outreach Programs conducted in collaboration with industry,
    community, and Non- Government Organizations through NSS/ NCC/ Red Cross/ YRC etc., year
    wise during the last five yearss</th>'; 
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


addDataToPDF($pdf, $conn, 'extension','addi', 'supp_doc', 'inst_data');
ob_end_clean();
// Output the PDF
$pdf->Output('generated_pdf.pdf', 'I');

// Close the database connection
mysqli_close($conn);
?>
