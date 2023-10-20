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
        <h1>4.3 IT Infrastructure</h1>
        
        <form action="ins.php" method="post" enctype="multipart/form-data">
        
        <label for="updates">4.3.1 Institution frequently updates its IT facilities and provides sufficient bandwidth for internet
connection

</label>
        <textarea id="updates" name="updates" rows="4"required></textarea> 

   
        <label for="add24">Upload Additional information </label><br>
        <input type="file" id="add24" name="add24">

    <label for="cr">4.3.2 Student – Computer ratio (Data for the latest completed academic year)</label>
    <input type="text" id="cr" name="cr" required> 

    <label for="ca">4.3.2.1 Number of computers available for students usage during the latest completed academic
year:</label>
<input type="text" id="ca" name="ca" required> 
    
        <label for="add25">Upload supporting document </label><br>
            <input type="file" id="add25" name="add25">


        <button type="submit" name="submit16">Next</button>
    </form>
    </div>
</body>
</html>
