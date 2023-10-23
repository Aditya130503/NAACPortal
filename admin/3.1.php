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
        <form action="ins.php" method="post" enctype="multipart/form-data">
        <h1>Research,Innovations and Extension</h1>
        <h2>3.1 Resource Mobilization for Research</h2>
        
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
                        <td class="input"><input type="number"name="gr1" placeholder="Enter a number"></td>
                        <td class="input"><input type="number"name="gr2" placeholder="Enter a number"></td>
                        <td class="input"><input type="number"name="gr3" placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="gr4"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="gr5"placeholder="Enter a number"></td>
                    </tr>
                </table>
                <br>
                <label for="add13">Upload supporting document </label><br>
            <input type="file" id="add13" name="add13">
    
            <label for="instdata7">Institutional data in the prescribed format </label><br>
            <input type="file" id="instdata7" name="instdata7">
        <button  name="submit9">Next</button>
    </form>
    </div>
</body>
</html>
