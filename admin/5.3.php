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
        <h1>5.3 Student Participation and Activities</h1>
        <h2> 5.3.1 Number of awards/medals for outstanding performance in sports/ cultural activities at
            University / state/ national / international level (award for a team event should be counted as one)
            during the last five years</h2>
              <input type="text" id="vac" name="vac" required>
 
         <h3> 5.3.1.1 Number of awards/medals for outstanding performance in sports/cultural activities atnational/international level (award for a team event should be counted as one) year wise during the last
             five years</h3>
 
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
    <br> <br>

    <label for="add3"link3>Upload supporting document </label><br>
          <input type="file" id="add3" name="add3">

           <label for="instdata2">Institutional data in the prescribed format </label><br>
           <input type="file" id="instdata2" name="instdata2">

           <h2> 5.3.2 Average number of sports and cultural programs in which students of the Institution
            participated during last five years (organised by the institution/other institutions)</h2>
              <input type="text" id="vac" name="vac" required>
 
         <h3> 5.3.2.1 Number of sports and cultural programs in which students of the Institution participated
            year wise during last five years</h3>
 
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
    <br> <br>

    <label for="add3"link3>Upload supporting document </label><br>
          <input type="file" id="add3" name="add3">

           <label for="instdata2">Institutional data in the prescribed format </label><br>
           <input type="file" id="instdata2" name="instdata2">

           <button formaction="currenrich.html">Submit</button>
        </div>
        </body>
        </html>