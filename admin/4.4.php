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
        <h1>4.4 Maintenance of Campus Infrastructure</h1>
        
        <form action="ins.php" method="post" enctype="multipart/form-data">

        <label for="mci">4.4.1 Percentage of expenditure incurred on maintenance of infrastructure (physical and academic
support facilities) excluding salary component during the last five years (INR in Lakhs)

</label>
        <input type="text" id="mci" name="mci" required></textarea> 

   <h2>4.4.1.1 Expenditure incurred on maintenance of infrastructure (physical facilities and academic
support facilities) excluding salary component year wise during the last five years (INR in lakhs)
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
                        <td class="input"><input type="number" name="ei1"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="ei2"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="ei3"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="ei4"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="ei5"placeholder="Enter a number"></td>
                    </tr>
                </table>
                <br>
        
<label for="add26">Upload supporting document </label><br>
            <input type="file" id="add26" name="add26">
    
            <label for="instdata13">Institutional data in the prescribed format </label><br>
            <input type="file" id="instdata13" name="instdata13">

        <button type="submit" name="submit17">Next</button>
    </form>
    </div>
</body>
</html>
