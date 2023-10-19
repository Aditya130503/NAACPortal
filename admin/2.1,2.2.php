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
        <h1>2 Teaching-learning and Evaluation</h1>
        <h2>2.1 Student Enrollment and Profile</h2>
            

            <h2>2.1.1 Enrolment percentage
</h2>
<input type="text" id="ep" name="ep" required>
<h2>2.1.1.1 Number of students admitted year wise during last five years
</h2>
                <table>
                    <tr>
                        <td class="year">2021-22</td>
                        <td class="year">2020-21</td>
                        <td class="year">2019-20</td>
                        <td class="year">2018-19</td>
                        <td class="year">2017-18</td>
                    </tr>
                    <tr>
                        <td class="input"><input type="number" name="21_22" placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="20_21"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="19_20"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="18_19"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="17_18"placeholder="Enter a number"></td>
                    </tr>
                </table>
                <br>
<h2>2.1.1.2 Number of sanctioned seats year wise during last five years
</h2>
                <table>
                    <tr>
                        <td class="year">2021-22</td>
                        <td class="year">2020-21</td>
                        <td class="year">2019-20</td>
                        <td class="year">2018-19</td>
                        <td class="year">2017-18</td>
                    </tr>
                    <tr>
                        <td class="input"><input type="number" name="2021_22" placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="2020_21"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="2019_20"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="2018_19"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="2017_18"placeholder="Enter a number"></td>
                    </tr>
                </table>
            <label for="add4">Upload supporting document </label><br>
            <input type="file" id="add4" name="add4">
    
            <label for="instdata3">Institutional data in the prescribed format </label><br>
            <input type="file" id="instdata3" name="instdata3">

            <h2>2.1.2 Percentage of seats filled against seats reserved for various categories (SC, ST, OBC,
Divyangjan, etc. as per applicable reservation policy during the last five years (Exclusive of
supernumerary seats)</h2>

                <input type="text" id="sf" name="sf" required>

<h2>2.1.2.1 Number of actual students admitted from the reserved categories year - wise during the last five
years </h2>
<table>
                    <tr>
                        <td class="year">2021-22</td>
                        <td class="year">2020-21</td>
                        <td class="year">2019-20</td>
                        <td class="year">2018-19</td>
                        <td class="year">2017-18</td>
                    </tr>
                    <tr>
                        <td class="input"><input type="number" name="2021-22"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="2020-21"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="2019-20"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="2018-19"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="2017-18"placeholder="Enter a number"></td>
                    </tr>
                </table>
                <h2>2.1.2.2 Number of seats earmarked for reserved category as per GOI/ State Govt rule year wise
during the last five years</h2>
<table>
                    <tr>
                        <td class="year">2021-22</td>
                        <td class="year">2020-21</td>
                        <td class="year">2019-20</td>
                        <td class="year">2018-19</td>
                        <td class="year">2017-18</td>
                    </tr>
                    <tr>
                        <td class="input"><input type="number" name="nos"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="nos1"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="nos2"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="no3"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="nos4"placeholder="Enter a number"></td>
                    </tr>
                </table>

                <label for="add5"link3>Upload supporting document </label><br>
            <input type="file" id="add5" name="add5">
    
            <label for="instdata4">Institutional data in the prescribed format </label><br>
            <input type="file" id="instdata4" name="instdata4">


            <h1>Student Teacher Ratio</h1>
                <h2>2.2.1 Student – Full time Teacher Ratio
(Data for the latest completed academic year</h2>
                <input type="text" id="str" name="str" required>
    
               
            <button name="submit3.php">Submit</button>
        </form>
    </div>
 </body>
</html>


            
