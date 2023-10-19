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
        <h1>7.2 Best Practices</h1>

        <!-- Section 2.1 - BASIC INFORMATION -->
        <h2>7.2.1 Describe two best practices successfully implemented by the Institution as per NAAC format
         provided in the Manual</h2>
        <input type="text" id="vac" name="vac" required>

        <label for="add2">Best practices as hosted on the Institutional website </label><br>
        <input type="file" id="add2" name="add2">

        <label for="add3"link3>Any other relevant information </label><br>
        <input type="file" id="add3" name="add3">

        <button formaction="currenrich.html">Submit</button>
    </div>
</body>
</html>