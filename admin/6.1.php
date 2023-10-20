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
        <h1>6.1  Institutional Vision and Leadership</h1>

        <!-- Section 2.1 - BASIC INFORMATION -->
        <h2>6.1.1 The governance and leadership is in accordance with vision and mission of the institution and it
            is visible in various institutional practices such as decentralization and participation in the
            institutional governance</h2>
        <textarea id="vm" name="vm"rows="4" required></textarea>

        <label for="add36">Upload Additional information </label><br>
        <input type="file" id="add36" name="add36">

        <label for="link10">Provide link for additional information </label><br>
        <input type="text" id="link10" name="link10">

        <button name="submit22">Submit</button>
    </form>
    </div>
</body>
</html>