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
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        td.year {
            font-weight: bold;
        }

        td.input {
            border-collapse: collapse; 
        }

        input[type="number"] {
            width: 100%;
            border: none;
            text-align: center;
        }

        /* Add space below the table */
        table + p {
            margin-top: 20px;
        }
    </style>
</head>
 <body>
    <div class="form-container">
        <form action="ins.php" method="post" enctype="multipart/form-data">
        <h1>6.3 Faculty Empowerment Strategies</h1>

        <h2>6.3.1 The institution has effective welfare measures and Performance Appraisal System for teaching
            and non-teaching staff</h2>
        <textarea id="wm" name="wm" required></textarea>

        <label for="add39">Upload Additional information </label><br>
        <input type="file" id="add39" name="add39">
        <h2>6.3.2 Percentage of teachers provided with financial support to attend conferences/workshops and
            towards membership fee of professional bodies during the last five years</h2>
        <input type="text" id="tfs" name="tfs" required>

        <h3>6.3.2.1 Number of teachers provided with financial support to attend conferences/workshops and
            towards membership fee of professional bodies year wise during the last five years</h3>

            <table>
                <tr>
                    <td class="year">2021-22</td>
                    <td class="year">2020-21</td>
                    <td class="year">2019-20</td>
                    <td class="year">2018-19</td>
                    <td class="year">2017-18</td>
                </tr>
                <tr>
                    <td class="input"><input type="number"name="tfs1" placeholder="Enter a number"></td>
                    <td class="input"><input type="number" name="tfs2"placeholder="Enter a number"></td>
                    <td class="input"><input type="number"name="tfs3" placeholder="Enter a number"></td>
                    <td class="input"><input type="number" name="tfs4"placeholder="Enter a number"></td>
                    <td class="input"><input type="number" name="tfs5"placeholder="Enter a number"></td>
                </tr>
            </table>
            <br>

            <label for="add40"link3>Upload supporting document </label><br>
            <input type="file" id="add40" name="add40">
    
            <label for="instdata23">Institutional data in the prescribed format </label><br>
            <input type="file" id="instdata2" name="instdata23">

            <h2>6.3.3 Percentage of teaching and non-teaching staff participating in Faculty development
                Programmes (FDP), professional development /administrative training programs during the last five
                years</h2>
            <input type="text" id="pd" name="pd" required>
            
            
             <h3>6.3.3.1 Total number of teaching and non-teaching staff participating in Faculty development
             Programmes (FDP), professional development /administrative training programs during the last five
             years</h3>

             <table>
                <tr>
                    <td class="year">2021-22</td>
                    <td class="year">2020-21</td>
                    <td class="year">2019-20</td>
                    <td class="year">2018-19</td>
                    <td class="year">2017-18</td>
                </tr>
                <tr>
                    <td class="input"><input type="number" name="pd1"placeholder="Enter a number"></td>
                    <td class="input"><input type="number" name="pd2"placeholder="Enter a number"></td>
                    <td class="input"><input type="number" name="pd3"placeholder="Enter a number"></td>
                    <td class="input"><input type="number" name="pd4"placeholder="Enter a number"></td>
                    <td class="input"><input type="number" name="pd5"placeholder="Enter a number"></td>
                </tr>
            </table>
            <br> <br>

            <h3>6.3.3.2 Number of non-teaching staff year wise during the last five years</h3>
            <table>
                <tr>
                    <td class="year">2021-22</td>
                    <td class="year">2020-21</td>
                    <td class="year">2019-20</td>
                    <td class="year">2018-19</td>
                    <td class="year">2017-18</td>
                </tr>
                <tr>
                    <td class="input"><input type="number" name="nts1"placeholder="Enter a number"></td>
                    <td class="input"><input type="number" name="nts2"placeholder="Enter a number"></td>
                    <td class="input"><input type="number" name="nts3"placeholder="Enter a number"></td>
                    <td class="input"><input type="number" name="nts4"placeholder="Enter a number"></td>
                    <td class="input"><input type="number" name="nts5"placeholder="Enter a number"></td>
                </tr>
            </table>
            <br> <br>

            
            <label for="add41"link3>Upload supporting document </label><br>
            <input type="file" id="add41" name="add41">
    
            <label for="instdata24">Institutional data in the prescribed format </label><br>
            <input type="file" id="instdata24" name="instdata24">
             <br> <br>
        <button name="submit24">Submit</button>
    </div>
 </body>
</html>