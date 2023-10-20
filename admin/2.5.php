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