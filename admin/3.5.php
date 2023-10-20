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
        
        <form action="ins.php" method="post" enctype="multipart/form-data">
        
        <label for="colab">3.5.1 Number of MoUs, collaborations/linkages for Faculty exchange, Student exchange, Internship,
Field trip, On-the- job training, research and other academic activities during the last five years:
</label>
        <input type="text" id="colab" name="colab" required></input> 

   
        <label for="add20">Upload Additional information </label><br>
        <input type="file" id="add20" name="add20">
        <label for="link9">Provide Link for Additional information </label><br>
        <input type="text" id="link9" name="link9">

        


        <button type="submit" name="submit13">Next</button>
    </form>
    </div>
</body>
</html>
