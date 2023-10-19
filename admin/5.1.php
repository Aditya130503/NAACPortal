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
        <h1>5.1 Student Support</h1>
        <h2>5.1.1 Percentage of students benefited by scholarships and freeships provided by the Government
            and Non-Government agencies during last five years</h2>
            <input type="text" id="vac" name="vac" required>

            <h2>5.1.1.1 Number of students benefited by scholarships and freeships provided by the Government and
                Non-Government agencies year wise during last five years</h2>
                <table>
                    <tr>
                        <td class="year">2021-22</td>
                        <td class="year">2020-21</td>
                        <td class="year">2019-20</td>
                        <td class="year">2018-19</td>
                        <td class="year">2017-18</td>
                    </tr>
                    <tr>
                        <td class="input"><input type="number" placeholder="Enter a number"></td>
                        <td class="input"><input type="number" placeholder="Enter a number"></td>
                        <td class="input"><input type="number" placeholder="Enter a number"></td>
                        <td class="input"><input type="number" placeholder="Enter a number"></td>
                        <td class="input"><input type="number" placeholder="Enter a number"></td>
                    </tr>
                </table>
                <br>

                
            <label for="add3"link3>Upload supporting document </label><br>
            <input type="file" id="add3" name="add3">
    
            <label for="instdata2">Institutional data in the prescribed format </label><br>
            <input type="file" id="instdata2" name="instdata2">

            <h2>5.1.2 Capacity building and skills enhancement initiatives taken by the institution include the following
                1.Soft skills
                2.Language and communication skills
                3.Life skills (Yoga, physical fitness, health and hygiene)
                4.ICT/computing skills</h2>

                <input type="text" id="vac" name="vac" required>

                <label for="add3"link3>Upload supporting document </label><br>
            <input type="file" id="add3" name="add3">
    
            <label for="instdata2">Institutional data in the prescribed format </label><br>
            <input type="file" id="instdata2" name="instdata2">


            <h2>5.1.3 Percentage of students benefitted by guidance for competitive examinations and career
                counseling offered by the Institution during the last five years</h2>
                <input type="text" id="vac" name="vac" required>
    
                <h2>5.1.3.1 Number of students benefitted by guidance for competitive examinations and career
                    counselling offered by the institution year wise during last five years</h2>
                    <table>
                        <tr>
                            <td class="year">2021-22</td>
                            <td class="year">2020-21</td>
                            <td class="year">2019-20</td>
                            <td class="year">2018-19</td>
                            <td class="year">2017-18</td>
                        </tr>
                        <tr>
                            <td class="input"><input type="number" placeholder="Enter a number"></td>
                            <td class="input"><input type="number" placeholder="Enter a number"></td>
                            <td class="input"><input type="number" placeholder="Enter a number"></td>
                            <td class="input"><input type="number" placeholder="Enter a number"></td>
                            <td class="input"><input type="number" placeholder="Enter a number"></td>
                        </tr>
                    </table>
                    <br>
    
                    
                <label for="add3"link3>Upload supporting document </label><br>
                <input type="file" id="add3" name="add3">
        
                <label for="instdata2">Institutional data in the prescribed format </label><br>
                <input type="file" id="instdata2" name="instdata2">

                
            <h2>5.1.4 The Institution has a transparent mechanism for timely redressal of student grievances
                including sexual harassment and ragging cases
                1.Implementation of guidelines of statutory/regulatory bodies
                2.Organisation wide awareness and undertakings on policies with zero tolerance
                3.Mechanisms for submission of online/offline students’ grievances
                4.Timely redressal of the grievances through appropriate committees</h2>

                <input type="text" id="vac" name="vac" required>

                <label for="add3"link3>Upload supporting document </label><br>
            <input type="file" id="add3" name="add3">
            <button formaction="currenrich.html">Submit</button>
    </div>
 </body>
</html>


            
