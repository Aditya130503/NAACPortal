<?php
    include('style.css');
?>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Information Form</title>
</head>

<body>
    <div class="form-container">
        <form action="ins.php" method="post" enctype="multipart/form-data">
        <h1>2.4 Teacher Profile and Quality</h1>
        <h2>2.4.1 Percentage of full-time teachers against sanctioned posts during the last five years</h2>
            <input type="text" id="pt" name="pt" required>

            <h2>2.4.1.1 Number of Sanctioned posts / required positions for teaching staff/ full time teachers year
wise during the last five years:

                <table>
                    <tr>
                        <td class="year">2021-22</td>
                        <td class="year">2020-21</td>
                        <td class="year">2019-20</td>
                        <td class="year">2018-19</td>
                        <td class="year">2017-18</td>
                    </tr>
                    <tr>
                        <td class="input"><input type="number" name="sp"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="sp1"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="sp2"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="sp3"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="sp4"placeholder="Enter a number"></td>
                    </tr>
                </table>
                <br>
                <label for="add7"link3>Upload supporting document </label><br>
            <input type="file" id="add7" name="add7">
            <h2>2.4.2 Percentage of full time teachers with NET/SET/SLET/ Ph. D. / D.M. / M.Ch. / D.N.B
Superspeciality / D.Sc. / D.Litt. during the last five years (consider only highest degree for count)</h2>
            <input type="text" id="s" name="s" required>
<h2>2.4.2.1 Number of full time teachers with NET/SET/SLET/Ph. D. / D.M. / M.Ch. / D.N.B
Superspeciality / D.Sc. / D.Litt. year wise during the last five yearsanctioned seats year wise during last five years
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
                        <td class="input"><input type="number" name="nsp"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="nsp1"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="nsp2"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="nsp3"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="nsp4"placeholder="Enter a number"></td>
                    </tr>
                </table>
            <label for="add3"link3>Upload supporting document </label><br>
            <input type="file" id="add8" name="add8">
    
            <label for="instdata2">Institutional data in the prescribed format </label><br>
            <input type="file" id="instdata5" name="instdata5">

            
    
               
            <button name="submit5">Submit</button>
        </form>
    </div>
 </body>
</html>


            
