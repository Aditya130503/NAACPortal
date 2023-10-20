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
        <h1>6.2 Strategy Development and Deployment</h1>

        <!-- Section 2.1 - BASIC INFORMATION -->
        <h2>6.2.1 The functioning of the institutional bodies is effective and efficient as visible from policies,
            administrative setup, appointment and service rules, procedures, deployment of institutional
            Strategic/ perspective/development plan etc</h2>
        <textarea id="ib" name="ib" rows="4" required></textarea>

        <label for="add37">Upload Additional information </label><br>
        <input type="file" id="add37" name="add37">

        <label for="link11">Provide link for additional information </label><br>
        <input type="text" id="link11" name="link11">

       
        <h3>6.2.2 Implementation of e-governance in areas of operation
            1.Administration
            2.Finance and Accounts
            3.Student Admission and Support
            4.Examination</h3>
        <input type="text" id="ieg" name="ieg" required>

        <label for="add38"link3>Upload supporting document </label><br>
        <input type="file" id="add38" name="add38">

        <label for="instdata2">Institutional data in the prescribed format </label><br>
        <input type="file" id="instdata22" name="instdata22">


        <button name="submit23">Submit</button>
    </form>
    </div>
</body>
</html>