<!DOCTYPE html>
<?php
    include('style.css');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Evaluation Form</title>
</head>
<body>

    <div class="form-container">
        
        <h1> Library as a Learning Resource</h1>

        
        <form action="ins.php" method="post" enctype="multipart/form-data">
        
        <label for="lia">4.2.1 Library is automated using Integrated Library Management System (ILMS), subscription to e-resources, amount spent on purchase of books, journals and per day usage of library

</label>
        <textarea id="lia" name="lia" rows="4"required></textarea> 

   <label for="add23">Upload supporting document </label><br>
            <input type="file" id="add23" name="add23">
    
            <label for="instdata2">Institutional data in the prescribed format </label><br>
            <input type="file" id="instdata12" name="instdata12">

        <button type="submit" name="submit15">Next</button>
    </form>
    </div>
</body>
</html>
