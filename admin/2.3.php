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
        <h2>Teaching-Learning Process</h2>
        <form action="ins.php" method="post" enctype="multipart/form-data">
        
        <label for="tl">2.3.1 Student centric methods, such as experiential learning, participative learning and problem
solving methodologies are used for enhancing learning experiences using ICT tools</label>
        <textarea id="tl" name="tl" rows="4" required></textarea>

        
        <label for="add6">Upload Additional information </label><br>
        <input type="file" id="add6" name="add6">
        <label for="link3">Provide Link for Additional information </label>
        <input type="text" id="link3" name="link3">


        <button type="submit4">Next</button>
    </form>
    </div>
</body>
</html>
