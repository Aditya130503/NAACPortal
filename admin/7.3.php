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
        <h1>7.3 Institutional Distinctiveness</h1>

        <!-- Section 2.1 - BASIC INFORMATION -->
        <h2>7.3.1 Portray the performance of the Institution in one area distinctive to its priority and thrust
         within 1000 words</h2>
        <textarea id="perf" name="perf" required></textarea>

        <label for="add51">Any other relevant information </label><br>
        <input type="file" id="add51" name="add51">
        <label for="add52"link3>Appropriate web in the Institutional website</label><br>
        <input type="file" id="add52" name="add52">

        <button name="submit29">Submit</button>
    </form>
    </div>
</body>
</html>