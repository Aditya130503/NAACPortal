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
        <h1>Criterion 4 Infrastructure and Learning Resources</h1>
        <h2>Physical Facilities</h2>

        
        <form action="ins.php" method="post" enctype="multipart/form-data">
        
        <label for="ilr">4.1.1 Availability of adequate infrastructure and physical facilities viz., classrooms, laboratories, ICT
facilities, cultural activities, gymnasium, yoga centre etc. in the institution
</label>
        <textarea id="ilr" name="ilr" rows="4"required></textarea> 

   
        <label for="add21">Upload Additional information </label><br>
        <input type="file" id="add21" name="add21">

    <label for="poe">4.1.2 Percentage of expenditure, excluding salary for infrastructure augmentation during last five
years (INR in Lakhs)</label>
    <input type="text" id="poe" name="poe" required> 
    <label for="eia">4.1.2.1 Expenditure for infrastructure augmentation, excluding salary during the last five years (INR
in lakhs) </label>
    <input type="text" id="eia" name="eia" required>   
        <table>
                    <tr>
                        <td class="year">2021-22</td>
                        <td class="year">2020-21</td>
                        <td class="year">2019-20</td>
                        <td class="year">2018-19</td>
                        <td class="year">2017-18</td>
                    </tr>
                    <tr>
                        <td class="input"><input type="number" name="eia1"placeholder="Enter a number"></td>
                        <td class="input"><input type="number"name="eia2" placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="eia3"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="eia4"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="eia5"placeholder="Enter a number"></td>
                    </tr>
                </table>
                <br>

        <label for="add22">Upload supporting document </label><br>
            <input type="file" id="add22" name="add22">
    
            <label for="instdata2">Institutional data in the prescribed format </label><br>
            <input type="file" id="instdata11" name="instdata11">


        <button type="submit" name="submit14">Next</button>
    </form>
    </div>
</body>
</html>
