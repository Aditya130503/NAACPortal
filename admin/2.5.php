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
        <h1>Evaluation Process and Reforms</h1>
        
        <form action="ins.php" method="post" enctype="multipart/form-data">
        
        <label for="epr">2.5.1 Mechanism of internal/ external assessment is transparent and the grievance redressal system
is time- bound and efficient</label>
        <textarea id="epr" name="epr" rows="4" required></textarea>

        
        <label for="add9">Upload Additional information </label><br>
        <input type="file" id="add9" name="add9">
        <label for="link4">Provide Link for Additional information </label>
        <input type="text" id="link4" name="link4">


        <button name="submit6">Next</button>
    </form>
    </div>
</body>
</html>
