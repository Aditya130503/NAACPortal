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
        <h1>5.1 Student Support</h1>
        <h2>5.1.1 Percentage of students benefited by scholarships and freeships provided by the Government
            and Non-Government agencies during last five years</h2>
            <input type="text" id="sbsf" name="sbsf" required>

            <h2>5.1.1.1 Number of students benefited by scholarships and freeships provided by the Government and
                Non-Government agencies year wise during last five years</h2>
                <table>
                    <tr>
                        <td class="year">2021-22</td>
                        <td class="year">2020-21</td>
                        <td class="year">2019-20</td>
                        <td class="year">2018-19</td>
                        <td class="year">2017-18</td>
                    </tr>
                    <tr>
                        <td class="input"><input type="number" name="sbsf1"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="sbsf2"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="sbsf3"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="sbsf4"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="sbsf5"placeholder="Enter a number"></td>
                    </tr>
                </table>
                <br>

                
            <label for="add27">Upload supporting document </label><br>
            <input type="file" id="add27" name="add27">
    
            <label for="instdata14">Institutional data in the prescribed format </label><br>
            <input type="file" id="instdata14" name="instdata14">

            <h2>5.1.2 Capacity building and skills enhancement initiatives taken by the institution include the following
                1.Soft skills
                2.Language and communication skills
                3.Life skills (Yoga, physical fitness, health and hygiene)
                4.ICT/computing skills</h2>

                <input type="text" id="cbse" name="cbse" required>

                <label for="add28">Upload supporting document </label><br>
            <input type="file" id="add28" name="add28">
    
            <label for="instdata15">Institutional data in the prescribed format </label><br>
            <input type="file" id="instdata15" name="instdata15">


            <h2>5.1.3 Percentage of students benefitted by guidance for competitive examinations and career
                counseling offered by the Institution during the last five years</h2>
                <input type="text" id="sbgc" name="sbgc" required>
    
                <h2>5.1.3.1 Number of students benefitted by guidance for competitive examinations and career
                    counselling offered by the institution year wise during last five years</h2>
                    <table>
                        <tr>
                            <td class="year">2021-22</td>
                            <td class="year">2020-21</td>
                            <td class="year">2019-20</td>
                            <td class="year">2018-19</td>
                            <td class="year">2017-18</td>
                        </tr>
                        <tr>
                            <td class="input"><input type="number" name="sbgc1"placeholder="Enter a number"></td>
                            <td class="input"><input type="number" name="sbgc2"placeholder="Enter a number"></td>
                            <td class="input"><input type="number"name="sbgc3" placeholder="Enter a number"></td>
                            <td class="input"><input type="number"name="sbgc4" placeholder="Enter a number"></td>
                            <td class="input"><input type="number"name="sbgc5" placeholder="Enter a number"></td>
                        </tr>
                    </table>
                    <br>
    
                    
                <label for="add29"link3>Upload supporting document </label><br>
                <input type="file" id="add29" name="add29">
        
                <label for="instdata16">Institutional data in the prescribed format </label><br>
                <input type="file" id="instdata16" name="instdata16">

                
            <h2>5.1.4 The Institution has a transparent mechanism for timely redressal of student grievances
                including sexual harassment and ragging cases
                1.Implementation of guidelines of statutory/regulatory bodies
                2.Organisation wide awareness and undertakings on policies with zero tolerance
                3.Mechanisms for submission of online/offline students’ grievances
                4.Timely redressal of the grievances through appropriate committees</h2>

                <input type="text" id="tm" name="tm" required>

                <label for="add30">Upload supporting document </label><br>
            <input type="file" id="add30" name="add30">
            <button name="submit18">Submit</button>
        </form>
    </div>
 </body>
</html>


            
