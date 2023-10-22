<?php
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();

include('include/conn.php');

$query1 = "SELECT * FROM table1"; // Update with the actual table name
$result1 = mysqli_query($conn, $query1);

$query2 = "SELECT * FROM table2"; // Update with the actual table name
$result2 = mysqli_query($conn, $query2);

// Create a table for data from the first table
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Table 1 Data', 0, 1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'Column 1', 1);
$pdf->Cell(30, 10, 'Column 2', 1);
$pdf->Ln(); // Move to the next line

// Iterate through the results of the first query and add data to the table
while ($row = mysqli_fetch_assoc($result1)) {
    $pdf->Cell(30, 10, $row['column1'], 1);
    $pdf->Cell(30, 10, $row['column2'], 1);
    $pdf->Ln();
}

// Add a page break for data from the second table
$pdf->AddPage();

// Create a table for data from the second table
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Table 2 Data', 0, 1);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(30, 10, 'Column A', 1);
$pdf->Cell(30, 10, 'Column B', 1);
$pdf->Ln(); // Move to the next line

// Iterate through the results of the second query and add data to the table
while ($row = mysqli_fetch_assoc($result2)) {
    $pdf->Cell(30, 10, $row['columnA'], 1);
    $pdf->Cell(30, 10, $row['columnB'], 1);
    $pdf->Ln();
}

// Output the PDF
$pdf->Output();

// Close the database connection
mysqli_close($conn);
?>

<html>
<head>
<title>USER</title>
</head>
<body>
<h1>NAAC REPORT</h1>
</body>
</head>