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
        <h1>6.5 Internal Quality Assurance System</h1>

        <!-- Section 2.1 - BASIC INFORMATION -->
        <h2>6.5.1 Internal Quality Assurance Cell (IQAC) has contributed significantly for institutionalizing the
            quality assurance strategies and processes. It reviews teaching learning process, structures &
            methodologies of operations and learning outcomes at periodic intervals and records the incremental
            improvement in various activities</h2>
        <input type="text" id="vac" name="vac" required>

        <label for="add2">Upload Additional information </label><br>
        <input type="file" id="add2" name="add2">

        <label for="link2">Provide link for additional information </label><br>
        <input type="text" id="link2" name="link2">

        <!-- Section 2.1.1 - Name and Address of the College -->
        <h3>6.5.2 Quality assurance initiatives of the institution include:
            1.Regular meeting of Internal Quality Assurance Cell (IQAC); Feedback collected, analysed
            and used for improvements
            2.Collaborative quality initiatives with other institution(s)/ membership of international
            networks
            3.Participation in NIRF
            4.any other quality audit/accreditation recognized by state, national or international agencies
            such as NAAC, NBA, ISO Certification etc</h3>
        <input type="text" id="intern" name="intern" required>

        <label for="add3"link3>Upload supporting document </label><br>
        <input type="file" id="add3" name="add3">

        <label for="instdata2">Institutional data in the prescribed format </label><br>
        <input type="file" id="instdata2" name="instdata2">


        <button formaction="currenrich.html">Submit</button>
    </div>
</body>
</html>