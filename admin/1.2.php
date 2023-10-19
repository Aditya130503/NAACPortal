<!DOCTYPE html>
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
        <h1>1.2 Academic Flexibility</h1>

        <!-- Section 2.1 - BASIC INFORMATION -->
        <h2>1.2.1 Number of Add on /Certificate/Value added programs offered during the last five years</h2>
        <input type="text" id="vac" name="vac" required>

        <label for="supp">Upload supporting document </label><br>
        <input type="file" id="supp" name="supp">

        <label for="instdata">Institutional data in the prescribed format </label><br>
        <input type="file" id="instdata" name="instdata">

        <!-- Section 2.1.1 - Name and Address of the College -->
        <h3>1.2.2 Percentage of students enrolled in Certificate/ Add-on/Value added programs as against the total number of students during the last five years</h3>
        <input type="text" id="vac" name="pvac" required>

          <label>1.2.2.1 Number of students enrolled in subject related Certificate/ Add-on/Value added programs year wise during last five year</label>
        <label>2022-23</label><input type="text" name="22-23">
        <label>2021-22</label><input type="text" name="21-22">
        <label>2020-21</label><input type="text" name="20-21">
        <label>2019-20</label><input type="text" name="19-20">
        <label>2018-19</label><input type="text" name="18-19">

        <label for="supp1">Upload supporting document </label><br>
        <input type="file" id="supp1" name="supp1">

        <label for="instdata1">Institutional data in the prescribed format </label><br>
        <input type="file" id="instdata1" name="instdata1">
        
        <button type="submit" name="sub">Submit</button>
    </form>
    </div>
</body>
</html>

