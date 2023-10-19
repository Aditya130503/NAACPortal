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
        <form action="ins.php" method="post" enctype="multipart/form-data">
        <h1>2.6 Student Performance and Learning Outcomes</h1>
        
        <label for="splo">2.6.1 Programme Outcomes (POs) and Course Outcomes (COs) for all Programmes offered by the
institution are stated and displayed on website and attainment of POs and COs are evaluated</label>
        <textarea id="splo" name="splo" rows="4" required></textarea>

        
        <label for="add10">Upload Additional information </label><br>
        <input type="file" id="add10" name="add10">
        <label for="link">Provide Link for Additional information </label>
        <input type="text" id="link5" name="link5">

<label for="ppsd">2.6.2 Pass percentage of Students during last five year</label>
        <input type="text" id="ppsd" name="ppsd"  required></input>

         <h2>2.6.2.1 Number of final year students who passed the university examination year wise during the
last five years

                <table>
                    <tr>
                        <td class="year">2021-22</td>
                        <td class="year">2020-21</td>
                        <td class="year">2019-20</td>
                        <td class="year">2018-19</td>
                        <td class="year">2017-18</td>
                    </tr>
                    <tr>
                        <td class="input"><input type="number" name="pass"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="pass1"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="pass2"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="pass3"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="pass4"placeholder="Enter a number"></td>
                    </tr>
                </table>
                <br>
                <h2>2.6.2.2 Number of final year students who appeared for the university examination year-wise during
the last five years
                <table>
                    <tr>
                        <td class="year">2021-22</td>
                        <td class="year">2020-21</td>
                        <td class="year">2019-20</td>
                        <td class="year">2018-19</td>
                        <td class="year">2017-18</td>
                    </tr>
                    <tr>
                        <td class="input"><input type="number" name="appear"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="appear1"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="appear2"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="appear3"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="appear4"placeholder="Enter a number"></td>
                    </tr>
                </table>
                <br>
                <label for="add11">Upload supporting document </label><br>
            <input type="file" id="add11" name="add11">
    
            <label for="instdata6">Institutional data in the prescribed format </label><br>
            <input type="file" id="instdata6" name="instdata6">
        <button type="submit7">Next</button>
    </form>
    </div>
</body>
</html>
