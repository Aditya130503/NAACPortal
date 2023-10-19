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
        <h1>Research,Innovations and Extension</h1>
        <h2>3.1 Resource Mobilization for Research</h2>
        
        <form action="3.2.html" method="post" enctype="multipart">
        <!-- Section 1.1 - Introduction -->
        <label for="gr">3.1.1 Grants received from Government and non-governmental agencies for research projects /
endowments in the institution during the last five years (INR in Lakhs)</label>
        <input type="text" id="gr" name="gr"  required></input>

                <h2>3.1.1.1 Total Grants from Government and non-governmental agencies for research projects ,
endowments, Chairs in the institution during the last five years (INR in Lakhs)
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
        <button type="submit">Next</button>
    </form>
    </div>
</body>
</html>
