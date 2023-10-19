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
        <h1>3.5 Collaboration</h1>
        
        <form action="4.1.html" method="post" enctype="multipart">
        <!-- Section 1.1 - Introduction -->
        <label for="colab">3.5.1 Number of MoUs, collaborations/linkages for Faculty exchange, Student exchange, Internship,
Field trip, On-the- job training, research and other academic activities during the last five years:
</label>
        <input type="text" id="colab" name="colab" required></input> 

   
        <label for="add">Upload Additional information </label><br>
        <input type="file" id="add" name="add">
        <label for="add">Provide Link for Additional information </label><br>
        <input type="file" id="add" name="add">

        


        <button type="submit">Next</button>
    </form>
    </div>
</body>
</html>
