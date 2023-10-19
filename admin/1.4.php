<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Information Form</title>
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 800px;
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
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin: 0 auto;
            display: block;
        }
    </style>
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

