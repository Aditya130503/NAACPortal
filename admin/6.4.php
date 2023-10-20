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
        <h1>6.4 Financial Management and Resource Mobilization</h1>

        <h2>6.4.1 Institution has strategies for mobilization and optimal utilization of resources and funds from
            various sources (government/ nongovernment organizations) and it conducts financial audits
            regularly (internal and external)</h2>
        <textarea id="fmrm" name="fmrm" rows="4" required></textarea>

        <label for="add42">Upload Additional information </label><br>
        <input type="file" id="add42" name="add42">

        <label for="link12">Provide link for additional information </label><br>
        <input type="text" id="link12" name="link12">

        <button name="submit25">Submit</button>
    </form>
    </div>
</body>
</html>