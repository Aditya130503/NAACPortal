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
        <h1>2.7 Student Satisfaction Survey</h1>
        
        <form action="ins.php" method="post" enctype="multipart/form-data">
        
        <label for="oss">2.7.1 Online student satisfaction survey regarding teaching learning process</label>
        <input type="text" id="oss" name="oss"  required></input>

        <label for="add12">Upload  database of all students on roll </label><br>
        <input type="file" id="add12" name="add12">



        <button name="submit8">Next</button>
    </form>
    </div>
</body>
</html>
