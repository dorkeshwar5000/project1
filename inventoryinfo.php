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
    border:1px solid blue;
  }
  #inf{
    position: fixed;
    top:160px;
    left:715px;
  }
  p{
    font-weight: bold; 
  }
</style>
<body>
  <!-- The Modal -->
  <div class="modal" id="myinventory" style="background-color:gray; opacity:0.3;" class="w3-container w3-center w3-animate-zoom">
    <div class="modal-dialog">
      <div class="modal-content" style="margin-top:150px; margin-left:150px; background-color:transparent;">
      
       
      <center>
      <img src="img/account info.jpg" height="260px" width="220"/>
      </center>
      <div id="inf">
        <h3><font color="white">Inventory Info</font></h3><br>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stock Group</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stock Items</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Units of Measure</p><br>
       <center><a href="dashboard.php" style="text-decoration:none;"> <h4>Quit</h4> </a></center>
       </div>

      
        
      </div>
    </div>
  </div>
</body>
</html>




