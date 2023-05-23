<!DOCTYPE html>
<html>
 
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
 
<body>

<?php
   // database connection code

     $name =  $_POST['name'];
     $pass = $_POST['pass'];
     $age =  $_POST['age'];
     $ssn = $_POST['ssn'];
        
   $con = mysqli_connect('localhost', 'root', '','train');

   // database insert SQL code
   $sql = "INSERT INTO `user` (`Name`, `Password`, `SSN`, `Age` ,`ISADMIN`) VALUES ('$name', '$pass', '$ssn', '$age' , 0)";

   // insert in database 
   $rs = mysqli_query($con, $sql);
   if($rs)
   {
     mysqli_close($con);
   	 echo '
        <script type="text/javascript">

          swal({
            position: "top-end",
            icon: "success",
            title: " Your Account Is Created Successfully",
            showConfirmButton: false,
          }).then(function() {
            window.location = "../Index.php";
        });
        
        </script>
        ';
   }

   else
   {
   	mysqli_close($con);
     echo '
        <script type="text/javascript">

          swal({
            position: "top-end",
            icon: "error",
            title: " Your Account Is Failed To Be Created",
            showConfirmButton: false,
          }).then(function() {
            window.location = "../Register.php";
        });
        
        </script>
        ';
   }
 

   ?>
</body>
</html>