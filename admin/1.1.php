<?php
    include('style.css');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Evaluation Form</title>
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            margin: 0 auto; 
            display: block;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Quality Indicator Framework</h1>
        <label style="font-size: large;">Criterion 1 - Curricular Aspects</label>        

        <form action="ins.php" method="post" enctype="multipart/form-data">
        
        <label for="cur">1.1 Curricular Planning and Implementation</label>
        <textarea id="cur" name="cur" rows="4" required></textarea>

        
        <label for="pdf_file">Upload Additional information </label><br>
        <input type="file" id="addi" name="pdf_file">
        <label for="link">Provide Link for Additional information </label>
        <input type="text" id="link" name="link">


        <button type="submit" name="submit">Next</button>
    </form>
    </div>
</body>
</html>
