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
        <h1>6.1  Institutional Vision and Leadership</h1>

        <!-- Section 2.1 - BASIC INFORMATION -->
        <h2>6.1.1 The governance and leadership is in accordance with vision and mission of the institution and it
            is visible in various institutional practices such as decentralization and participation in the
            institutional governance</h2>
        <textarea id="vm" name="vm"rows="4" required></textarea>

        <label for="add36">Upload Additional information </label><br>
        <input type="file" id="add36" name="add36">

        <label for="link10">Provide link for additional information </label><br>
        <input type="text" id="link10" name="link10">

        <button name="submit22">Submit</button>
    </form>
    </div>
</body>
</html>