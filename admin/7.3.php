<?php
    include('style.css');
?>
 <html lang="en">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Information Form</title>
</head>
<body>
    <div class="form-container">
        <form action="ins.php" method="post" enctype="multipart/form-data">
        <h1>7.3 Institutional Distinctiveness</h1>

        <!-- Section 2.1 - BASIC INFORMATION -->
        <h2>7.3.1 Portray the performance of the Institution in one area distinctive to its priority and thrust
         within 1000 words</h2>
        <textarea id="perf" name="perf" required></textarea>

        <label for="add51">Any other relevant information </label><br>
        <input type="file" id="add51" name="add51">
        <label for="add52"link3>Appropriate web in the Institutional website</label><br>
        <input type="file" id="add52" name="add52">

        <button name="submit29">Submit</button>
    </form>
    </div>
</body>
</html>