
<?php
      include'conn.php';
      //include'log.php';
      include'session.php';
      
?>
<html>
  <head>
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      
      font-size: 15px;
      }
      form {
      border: 5px solid #f1f1f1;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      button {
      background-color: #007BFF;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      width: 100%;
      }
      h1 {
      text-align:center;
      font-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: left;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
    </style>
   

   </script> 
  </head>
  <body>
    <form method="post" enctype="multipart/form-data" >

      <h1>Admin Login</h1>
      <div class="formcontainer">
      
      <div class="container">
        <label for="uname"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Username" id="uname" name="uname" onkeyup="showHint(this.value)" required>
        <p>Suggestions: <span id="txtHint"></span></p>
        <script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?uname="+str, true);
  xhttp.send();
}
</script>
        <label for="psw"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" id="psw" name="psw" required>
      </div>
      <button type="submit">Login</button>
      </div>
    </form>
  </body>
</html>



