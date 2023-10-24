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
        <h1>5.2 Student Progression</h1>
        <h2> 5.2.1 Percentage of placement of outgoing students and students progressing to higher education
            during the last five years</h2>
        <input type="text" id="place_hig" name="place_hig" required>
        
        <h3>5.2.1.1 Number of outgoing students placed and / or progressed to higher education year wise during
            the last five years</h3>

            <table>
               <tr>
                   <td class="year">2021-22</td>
                   <td class="year">2020-21</td>
                   <td class="year">2019-20</td>
                   <td class="year">2018-19</td>
                   <td class="year">2017-18</td>
               </tr>
               <tr>
                   <td class="input"><input type="number" name="place_hig1"placeholder="Enter a number"></td>
                   <td class="input"><input type="number" name="place_hig2"placeholder="Enter a number"></td>
                   <td class="input"><input type="number" name="place_hig3"placeholder="Enter a number"></td>
                   <td class="input"><input type="number" name="place_hig4"placeholder="Enter a number"></td>
                   <td class="input"><input type="number" name="place_hig5"placeholder="Enter a number"></td>
               </tr>
           </table>
           <br> <br>

           <h3>5.2.1.2 Number of outgoing students year wise during the last five years</h3>
           <table>
               <tr>
                   <td class="year">2021-22</td>
                   <td class="year">2020-21</td>
                   <td class="year">2019-20</td>
                   <td class="year">2018-19</td>
                   <td class="year">2017-18</td>
               </tr>
               <tr>
                   <td class="input"><input type="number" name="out"placeholder="Enter a number"></td>
                   <td class="input"><input type="number" name="out1"placeholder="Enter a number"></td>
                   <td class="input"><input type="number" name="out2"placeholder="Enter a number"></td>
                   <td class="input"><input type="number" name="out3"placeholder="Enter a number"></td>
                   <td class="input"><input type="number" name="out4"placeholder="Enter a number"></td>
               </tr>
           </table>
           <br> <br>

           
           <label for="add31">Upload supporting document </label><br>
           <input type="file" id="add31" name="add31">
   
           <label for="instdata17">Institutional data in the prescribed format </label><br>
           <input type="file" id="instdata17" name="instdata17">
           
         <h2> 5.2.2 Percentage of students qualifying in state/national/ international level examinations during the
           last five years (eg: JAM/CLAT/GATE/ GMAT/ CAT/ GRE/ TOEFL/ Civil Services/State
           government examinations)</h2>
             <input type="text" id="exam" name="exam" required>

        <h3>5.2.2.1 Number of students qualifying in state/ national/ international level examinations (eg:
            JAM/CLAT/NET/ SLET/ GATE/ GMAT/CAT/GRE/ TOEFL/ Civil Services/ Judicial Services/Public
            Prosecution services/All India Bar Exams/State government examinations) year wise during last five
            years</h3>

    <table>
       <tr>
           <td class="year">2021-22</td>
           <td class="year">2020-21</td>
           <td class="year">2019-20</td>
           <td class="year">2018-19</td>
           <td class="year">2017-18</td>
       </tr>
       <tr>
           <td class="input"><input type="number" name="exam1"placeholder="Enter a number"></td>
           <td class="input"><input type="number" name="exam2"placeholder="Enter a number"></td>
           <td class="input"><input type="number" name="exam3"placeholder="Enter a number"></td>
           <td class="input"><input type="number" name="exam4"placeholder="Enter a number"></td>
           <td class="input"><input type="number" name="exam5"placeholder="Enter a number"></td>
       </tr>
   </table>
   <br> <br>

   <h3>5.2.2.2 Number of students appearing in state/ national/ international level examinations (eg:
    JAM/CLAT/NET/ SLET/ GATE/ GMAT/CAT,GRE/ TOFEL/ Civil Services/ State government
    examinations) year wise during last five years</h3>
   <table>
       <tr>
           <td class="year">2021-22</td>
           <td class="year">2020-21</td>
           <td class="year">2019-20</td>
           <td class="year">2018-19</td>
           <td class="year">2017-18</td>
       </tr>
       <tr>
           <td class="input"><input type="number" name="exa"placeholder="Enter a number"></td>
           <td class="input"><input type="number" name="exa1"placeholder="Enter a number"></td>
           <td class="input"><input type="number" name="exa2"placeholder="Enter a number"></td>
           <td class="input"><input type="number" name="exa3"placeholder="Enter a number"></td>
           <td class="input"><input type="number" name="exa4"placeholder="Enter a number"></td>
       </tr>
   </table>
   <br> <br>

   
         <label for="add32">Upload supporting document </label><br>
          <input type="file" id="add32" name="add32">

           <label for="instdata18">Institutional data in the prescribed format </label><br>
           <input type="file" id="instdata18" name="instdata18">

         <button name="submit19">Submit</button>
     </form>
</div>
</body>
</html>
