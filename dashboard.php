<!DOCTYPE html>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    img{
        border:1px solid black;
        box-shadow:1px 2px 4px black;
    }
    #Buttons{
        
        height:700px;
        width:220px;
        position:fixed;
        top:121px;
        left:200px;
    }

    input{
        border:1px solid black;
        height:25px;
        width:160px;
        margin-top:-20px;
        margin-top:-3px;
    }
    input:hover{
        background-color:black;
        border:1px solid white;
        color:white;
        border-radius:5px;
        height:25px;
        width:160px;
    }
    #lasttext{
        color:silver;
        width:400px;
        height:30px;
        position:fixed;
        top:510px;
        left:40%;
    }
    #timer{
        width:200px;
        height:30px;
        position:fixed;
        top:59px;
        left:886px;
    }

</style>

<body bgcolor="silver">


    <center>
        <img src="Photoshp Pic/Dashboard copy.jpg" alt="img" height="565px" width="900px"/>
    </center>
    <div id="Buttons">
    <center><p><i><b>Master</b></i></p>
    <input type="submit" value="Account Info" data-toggle="modal" data-target="#myaccount"><br>
    <input type="submit" value="Inventory Info" data-toggle="modal" data-target="#myinventory">
    <center><p><i><b>Transaction</b></i></p>
    <input type="submit" value="Purchase Entry" data-toggle="modal" data-target="#myModal"><br>
    <input type="submit" value="Sales Entry" data-toggle="modal" data-target="#myModal">
    <center><p><i><b>Reports</b></i></p>
    <input type="submit" value="Stock Summary" data-toggle="modal" data-target="#myModal"><br>
    <input type="submit" value="Reports" data-toggle="modal" data-target="#myothers">
    </center>



    <!-- Second Step Buttons -->

<br><br><Br><br>
    <input type="submit" value="Setting" style="margin-top:7px;" data-toggle="modal" data-target="#myModal"><br>
    <input type="submit" value="Log Out" data-toggle="modal" data-target="#quit">
    </div>



    <!-- Timer Code -->
<div id="timer">
<span id='ct5' style="background-color: #FFFF00"></span>
</div>

    <!-- Last Text -->
<div id="lasttext">
<center><h5><i>www.safaldrug.com</i></h5></center>
</div>





<!--TImer js Code-->
<script>

function display_ct5() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';

var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
x1 = x1 + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
document.getElementById('ct5').innerHTML = x1;
display_c5();
 }
 function display_c5(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct5()',refresh)
}
display_c5()
</script>






<?php include ('accountinfo.php') ?>
<?php include ('inventoryinfo.php') ?>
<?php include ('quit.php') ?>
<?php include ('inventoryinfo.php') ?>
<?php include ('other.php') ?>





</body>
</html>




