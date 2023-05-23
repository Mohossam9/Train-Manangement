<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Trip</title>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
 
<body>

<?php
   // database connection code

     $date =  $_POST['date'];
     $time = $_POST['time'];
     $Departure =  $_POST['departure'];
     $Destination = $_POST['destination'];

        
   $con = mysqli_connect('localhost', 'root', '','train');

   // database insert SQL code
   $sql = "INSERT INTO `trip` (`Date`, `Time`, `Departure`, `Destination`) VALUES ('$date','$time', '$Departure', '$Destination')";

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
            title: " Trip Is Added Successfully",
            showConfirmButton: false,
          }).then(function() {
            window.location = "../Admin/Add_Trip";
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
            title: " Trip Is Failed To Be Added",
            showConfirmButton: false,
          }).then(function() {
            window.location = "../Admin/Add_Trip";
        });
        
        </script>
        ';
   }
 

   ?>
</body>
</html>