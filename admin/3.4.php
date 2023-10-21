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
        <h1>3.4 Extension Activities</h1>
        
        <form action="ins.php" method="post" enctype="multipart/form-data">
        <!-- Section 1.1 - Introduction -->
        <label for="ea">3.4.1 Extension activities are carried out in the neighborhood community, sensitizing students to
social issues, for their holistic development, and impact thereof during the last five years</label>
        <textarea id="ea" name="ea" rows="4"required></textarea> 

   <label>3.3.1.1 Number of research papers in the Journals notified on UGC CARE year wise during the last
five years</label>
<input type="text" name="nrp">



        <!-- Section 1.2 - SWOC -->
        <label for="add18">Upload Additional information </label><br>
        <input type="file" id="add18" name="add18">
        <label for="add">Provide Link for Additional information </label><br>
        <input type="text" name="link8">

        <label for="nep">3.4.3 Number of extension and outreach programs conducted by the institution through
NSS/NCC/Red cross/YRC etc., (including the programmes such as Swachh Bharat, AIDS awareness,
Gender issues etc. and/or those organised in collaboration with industry, community and NGOs)
during the last five years</label>

<input type="text" id="nep" name="nep" required></input>

        <h2>3.4.3.1 Number of extension and outreach Programs conducted in collaboration with industry,
community, and Non- Government Organizations through NSS/ NCC/ Red Cross/ YRC etc., year
wise during the last five yearss
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
                        <td class="input"><input type="number" name="nep1"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="nep2"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="nep3"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="nep4"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="nep5"placeholder="Enter a number"></td>
                    </tr>
                </table>
                <br>
                <label for="add19"link3>Upload supporting document </label><br>
            <input type="file" id="add19" name="add19">
    
            <label for="instdata10">Institutional data in the prescribed format </label><br>
            <input type="file" id="instdata10" name="instdata10">



        <button name="submit12">Next</button>
    </form>
    </div>
</body>
</html>
