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
  #lod{
    color:black;
    position:fixed;
    top:225px;
    left:713px;
  }
  button{
    border:1px solid silver;
    border-radius:3px;
    font-weight: bold; 
  }
  button:hover{
    border:1px solid black;
    color:blue;
    font-weight: bold; 
  }
</style>
<body>
  <!-- The Modal -->
  <div class="modal" id="quit" style="background-color:gray; opacity:0.3;" class="w3-container w3-center w3-animate-zoom">
    
      <div class="modal-content" style="margin-top:150px; margin-left:130px; background-color:transparent; border:1px solid transparent;">
      
       
      <center>
      <img style="opacity:0.9" src="img/logout.jpg" height="230px" width="220"/>
      <div id="lod">
      <h3><b>Log Out ?</b></h3>  <br><br><br>
    <b>  <a href="loginpage.php"><button>Yes</button></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="dashboard.php"><button>No</button></a>
</b></div>  
      </center>

      
        
    
    </div>
  </div>
</body>
</html>




