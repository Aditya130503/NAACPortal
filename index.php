<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAAC Portal for FR.CRCE</title>
    <style>
     
        body {
            background-image: url(crce.jpg);
            background-repeat: no-repeat;
            background-position-y: 80px;
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007BFF;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            background-color: #333;
            overflow: hidden;
        }
        nav a {
            float: center;
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .container {
            
            background-repeat: no-repeat;
            padding: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            margin-right: 10px;
            border-radius: 5px;
        }

        h3 {
            margin-bottom: 0;
        }

        .year-navbar {        
           
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

    </style>
    
</head>
<body>
    <header>
        <h1>NAAC Portal for FR.CRCE </h1>
    </header>
    <nav>
        <a href="#">MECH</a>
        <a href="#">COMPS</a>
        <a href="#">AIDS</a>
        <a href="#">ECS</a>
    </nav>
    <div class="container" align="center">
        <h2 style="color:#0099FF;">Welcome to the ECS Department NAAC Portal</h2>
        <p style="color: red;" ><strong>Explore our portal and access the relevant information.</p></strong>
        <a class="button" href="admin/admin.php">Admin Login</a>
        <a class="button" href="user/user.html">Viewer Page</a>
    </div>
    <nav class="year-navbar">
        <h3>Previous Year Ratings</h3>
        <a href="1819.html">2018-19</a>
        <a href="1920.html">2019-20</a>
        <a href="2021.html">2020-21</a>
        <a href="2022.pdf">2021-22</a>
    </nav>
</body>
</html>
