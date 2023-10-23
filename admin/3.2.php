<!DOCTYPE html>
<?php
    include('style.css');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Evaluation Form</title>
</head>
<body>

    <div class="form-container">
        <h1>3.2 Innovation Ecosystem</h1>
        
        <form action="ins.php" method="post" enctype="multipart/form-data">
        
        <label for="ie">3.2.1 Institution has created an ecosystem for innovations and has initiatives for creation and
transfer of knowledge</label>
        <textarea id="ie" name="ie" rows="4" required></textarea>

        
        <label for="add14">Upload Additional information </label><br>
        <input type="file" id="add14" name="add14">
        <label for="link6">Provide Link for Additional information </label><br>
        <input type="text" id="link6" name="link6">

        <label for="now">3.2.2 Number of workshops/seminars/conferences including on Research Methodology, Intellectual
Property Rights (IPR) and entrepreneurship conducted during the last five years</label>

<input type="text" id="now" name="now" required></input>

        <h2>3.2.2.1 Total number of workshops/seminars/conferences including programs conducted on
Research Methodology, Intellectual Property Rights (IPR) and entrepreneurship year wise during
last five years</h2>
                <table>
                    <tr>
                        <td class="year">2021-22</td>
                        <td class="year">2020-21</td>
                        <td class="year">2019-20</td>
                        <td class="year">2018-19</td>
                        <td class="year">2017-18</td>
                    </tr>
                    <tr>
                        <td class="input"><input type="number" name="now21_22"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="now20_21"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="now19_20"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="now18_19"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="now17_18"placeholder="Enter a number"></td>
                    </tr>
                </table>
                <br>
                <label for="add15"link3>Upload supporting document </label><br>
            <input type="file" id="add15" name="add15">
    
            <label for="instdata2">Institutional data in the prescribed format </label><br>
            <input type="file" id="instdata8" name="instdata8">



        <button type="submit" name="submit10">Next</button>
    </form>
    </div>
</body>
</html>
