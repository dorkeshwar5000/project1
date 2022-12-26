
<?php
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
if($fname=="ananymous" && $lname=="hacker@443")
     {
          // echo "Successfully Login";
          header("location:dashboard.php");
          
     }
          else
     {
          // echo "Invalid Data";
          header("location:loginpagee.php");

     }
}
?>