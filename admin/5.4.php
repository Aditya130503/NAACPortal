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
        <h1>5.4 Alumni Engagement</h1>
        <h2>5.4.1 There is a registered Alumni Association that contributes significantly to the development of
the institution through financial and/or other support services</h2>
        <textarea id="aa" name="aa" rows="4" required></textarea>
        
            
        <label for="add35">Upload supporting document </label><br>
        <input type="file" id="add35" name="add35">

        
        <label for="instdata21">Institutional data in the prescribed format </label><br>
        <input type="file" id="instdata21" name="instdata21">
        <button name="submit21">Submit</button>
    </form>
    </div>
 </body>
</html>