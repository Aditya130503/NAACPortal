<?php
    include('style.css');
?>
 <html lang="en">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Information Form</title>
</head>
 <body>
    <div class="form-container">
        <form action="ins.php" method="post" enctype="multipart/form-data">
        <h1>5.3 Student Participation and Activities</h1>
        <h2> 5.3.1 Number of awards/medals for outstanding performance in sports/ cultural activities at
            University / state/ national / international level (award for a team event should be counted as one)
            during the last five years</h2>
              <input type="text" id="spa" name="spa" required>
 
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
            <td class="input"><input type="number" name="spa1"placeholder="Enter a number"></td>
            <td class="input"><input type="number" name="spa2"placeholder="Enter a number"></td>
            <td class="input"><input type="number" name="spa3"placeholder="Enter a number"></td>
            <td class="input"><input type="number" name="spa4"placeholder="Enter a number"></td>
            <td class="input"><input type="number" name="spa5"placeholder="Enter a number"></td>
        </tr>
    </table>
    <br> <br>

    <label for="add33">Upload supporting document </label><br>
          <input type="file" id="add33" name="add33">

           <label for="instdata19">Institutional data in the prescribed format </label><br>
           <input type="file" id="instdata19" name="instdata19">

           <h2> 5.3.2 Average number of sports and cultural programs in which students of the Institution
            participated during last five years (organised by the institution/other institutions)</h2>
              <input type="text" id="soscp" name="soscp" required>
 
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
            <td class="input"><input type="number" name="soscp1"placeholder="Enter a number"></td>
            <td class="input"><input type="number" name="soscp2"placeholder="Enter a number"></td>
            <td class="input"><input type="number" name="soscp3"placeholder="Enter a number"></td>
            <td class="input"><input type="number" name="soscp4"placeholder="Enter a number"></td>
            <td class="input"><input type="number" name="soscp5"placeholder="Enter a number"></td>
        </tr>
    </table>
    <br> <br>

    <label for="add34">Upload supporting document </label><br>
          <input type="file" id="add34" name="add34">

           <label for="instdata20">Institutional data in the prescribed format </label><br>
           <input type="file" id="instdata20" name="instdata20">

           <button name="submit20">Submit</button>
       </form>
        </div>
        </body>
        </html>