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
        <h1>3.3 Research Publications and Awards</h1>
        
        <form action="ins.php" method="post" enctype="multipart/form-data">
        
        <label for="rp">3.3.1 Number of research papers published per teacher in the Journals on UGC care list during the last
five years</label>
        <input type="text" id="rp" name="rp" required></input>

   <label >3.3.1.1 Number of research papers in the Journals notified on UGC CARE year wise during the last
five years</label>

<table>
                    <tr>
                        <td class="year">2021-22</td>
                        <td class="year">2020-21</td>
                        <td class="year">2019-20</td>
                        <td class="year">2018-19</td>
                        <td class="year">2017-18</td>
                    </tr>
                    <tr>
                        <td class="input"><input type="number" name="rp21_22"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="rp20_21"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="rp19_20"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="rp18_19"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="rp17_18"placeholder="Enter a number"></td>
                        
                    </tr>
                </table>
                <br>

        <!-- Section 1.2 - SWOC -->
        <label for="add16">Upload Additional information </label><br>
        <input type="file" id="add16" name="add16">
        <label for="add">Provide Link for Additional information </label><br>
        <input type="text" id="link7" name="link7">

        <label for="nbc">3.3.2 Number of books and chapters in edited volumes/books published and papers published in
national/ international conference proceedings per teacher during last five years</label>

<input type="text" id="nbc" name="nbc" required></input>

        <h2>3.3.2.1 Total number of books and chapters in edited volumes/books published and papers in
national/ international conference proceedings year wise during last five years
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
                        <td class="input"><input type="number" name="nbc1"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="nbc2"placeholder="Enter a number"></td>
                        <td class="input"><input type="number"name="nbc3" placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="nbc4"placeholder="Enter a number"></td>
                        <td class="input"><input type="number" name="nbc5"placeholder="Enter a number"></td>
                    </tr>
                </table>
                <br>
                <label for="add17"link3>Upload supporting document </label><br>
            <input type="file" id="add17" name="add17">
    
            <label for="instdata9">Institutional data in the prescribed format </label><br>
            <input type="file" id="instdata9" name="instdata9">



        <button type="submit" name="submit11">Next</button>
    </form>
    </div>
</body>
</html>
