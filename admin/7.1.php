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
        <h1>7.1 Institutional Values and Social Responsibilities</h1>

        <h2>7.1.1 Measures initiated by the Institution for the promotion of gender equity and Institutional
         initiatives to celebrate / organize national and international commemorative days, events and
         festivals during the last five years</h2>
        <input type="text" id="ge" name="ge" required>

        <label for="add45">Upload Additional information </label><br>
        <input type="file" id="add45" name="add45">

        <label for="link14">Provide link for additional information </label><br>
        <input type="text" id="link14" name="link14">

        <h3>7.1.2 The Institution has facilities and initiatives for
            1.Alternate sources of energy and energy conservation measures
            2.Management of the various types of degradable and nondegradable waste
            3.Water conservation
            4.Green campus initiatives
            5.Disabled-friendly, barrier free environment
        </h3>
        <input type="text" id="faci" name="faci" required>
        <label for="add46">Upload supporting document </label><br>
        <input type="file" id="add46" name="add46">

        <h3>7.1.3 Quality audits on environment and energy regularly undertaken by the Institution. The
            institutional environment and energy initiatives are confirmed through the following
            1.Green audit / Environment audit
            2.Energy audit
            3.Clean and green campus initiatives
            4.Beyond the campus environmental promotion activities
        </h3>
        <input type="text" id="qae" name="qae" required>
        <label for="add47">Upload supporting document </label><br>
        <input type="file" id="add47" name="add47">


        <h3>7.1.4 Describe the Institutional efforts/initiatives in providing an inclusive environment i.e., tolerance
            and harmony towards cultural, regional, linguistic, communal socioeconomic and Sensitization of
            students and employees to the constitutional obligations: values, rights, duties and responsibilities of
            citizens (Within 500 words)
        </h3>

        <textarea id="vrd" name="vrd" required   maxlength="500"></textarea>

        <label for="add48">Upload Additional information </label><br>
        <input type="file" id="add48" name="add48">

        <label for="link15">Provide link for additional information </label><br>
        <input type="text" id="link15" name="link15">


        <button name="submit27">Submit</button>
    </form>
    </div>
</body>
</html>