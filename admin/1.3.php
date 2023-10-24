<!DOCTYPE html>
<?php
    include('style.css');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Information Form</title>
</head>
<body>
    <div class="form-container">
        <form action="ins.php" method="post" enctype="multipart/form-data">
        <h1>1.3  Curriculum Enrichment</h1>

        
        <h2>1.3.1 Institution integrates crosscutting issues relevant to Professional Ethics, Gender, Human
Values, Environment and Sustainability into the Curriculum</h2>
        <input type="text" id="pec" name="pec" required>

        <label for="add2">Upload Additional information </label><br>
        <input type="file" id="add2" name="add2">

        <label for="link2">Provide link for additional information </label><br>
        <input type="text" id="link2" name="link2">

        <!-- Section 2.1.1 - Name and Address of the College -->
        <h3>1.3.2 Percentage of students undertaking project work/field work/ internships (Data for the latest completed academic year)</h3>
        <input type="text" id="intern" name="intern" required>

          <label>1.3.2.1 Number of students undertaking project work/field work / internships</label>
          <input type="text" id="intern1" name="intern1" required>
        

        <label for="add3"link3>Upload supporting document </label><br>
        <input type="file" id="add3" name="add3">

        <label for="instdata2">Institutional data in the prescribed format </label><br>
        <input type="file" id="instdata2" name="instdata2">

        
        <button name="submit1">Submit</button>
        </form>
    </div>

</body>
</html>

