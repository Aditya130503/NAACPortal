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
        <h1>1.4 Feedback System</h1> <h2>1.4.1  Institution obtains feedback on the academic performance and ambience of the institution from various stakeholders, such as Students, Teachers, Employers, Alumni etc. and action taken report on the feedback is made available on institutional website (Yes or No)</h2>
        <input type="text" id="y" name="y" required>

        <label for="add3">Upload Supporting document </label><br>
        <input type="file" id="add3" name="add3">

        
        
        <button name="submit2">Submit</button>
    </div>
</body>
</html>

