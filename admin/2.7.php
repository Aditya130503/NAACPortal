<!DOCTYPE html>
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
        <h1>2.7 Student Satisfaction Survey</h1>
        
        <form action="3.1.html" method="post" enctype="multipart">
        <!-- Section 1.1 - Introduction -->
        <label for="oss">2.7.1 Online student satisfaction survey regarding teaching learning process</label>
        <input type="text" id="oss" name="oss"  required></input>

        <!-- Section 1.2 - SWOC -->
        <label for="add">Upload  database of all students on roll </label><br>
        <input type="file" id="add" name="add">



        <button type="submit">Next</button>
    </form>
    </div>
</body>
</html>
