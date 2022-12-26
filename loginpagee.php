
<!DOCTYPE html>
<html>
<head>
<title>E-inventory System</title>
<link rel="stylesheet" type="text/css" href="index.css">
</head>
<style>
   h2{
    position:fixed;
    top:79px;
    left:407px;
    color:blue;
   }
   form{
    position:fixed;
    top:160px;
    left:375px;
   }

   input{
    border:1.5px solid gray;
    height:30px;
    border-radius:15px;
   }
   input:hover{
    border:1.5px solid darkblue;
    height:30px;
    border-radius:15px;
   }
</style>
<body bgcolor="silver">
<center>
    <br><br><br><br>
    <h2><u><b>WELCOME</u></b></h2>


<form method="POST" action="<?php include('log.php'); ?>">
  <input type="text" id="fname" name="fname" required/><br>
  <label for="fname"><center>User Name</center></label>
  <input style="margin-top:10px;" type="password" id="lname" name="lname" required><br>
  <label for="lname"><center>Password</center></label><br>
  <input style="background-color:darkblue; color:white;width:100px; height:34px;" name="submit" type="submit" value="Log in">

<i style="color:white; text-shadow:1px 2px 4px red;">
<center><br><?php
  echo "Invalid Data";
?></center></i>
</form> 


<div id="main">
    <img src="img/loginpage" height="340px" width="569px"/>
</div>
</center>







</body>
</html>





















<?php
$server="localhost";
$username="root";
$password='';
$database='onlineform';
$conn=mysqli_connect($server, $username, $password, $database);
?>
