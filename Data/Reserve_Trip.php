<!DOCTYPE html>
<html>
 
<head>
    <title>Reserve Trip</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
 
<body>


<?php
    session_start();
    $loginUserID=$_SESSION["Id"];

   $id =  $_POST['TripID'];
   $tickets =  $_POST['tickets'];
   $class =  $_POST['classes'];
   $con = mysqli_connect('localhost', 'root', '','train');


   $sql = "INSERT INTO `reservation` (TotalPrice,TripID,UserID,ClassID,NumOfTickets) VALUES (" 
    . "(SELECT Sum(Price) FROM `class` "
    . "WHERE  ClassID ='$class' "
    . ") * $tickets, $id,$loginUserID,$class,$tickets)";

   $rs = mysqli_query($con, $sql);
   if($rs)
   {
     mysqli_close($con);
   	 echo '
        <script type="text/javascript">

          swal({
            position: "top-end",
            icon: "success",
            title: " Trip Is Booked Successfully",
            showConfirmButton: false,
          }).then(function() {
            window.location = "../Train Reservation.php";
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
            title: " Trip Is Failed To Be Booked",
            showConfirmButton: false,
          }).then(function() {
            window.location = "../Train Reservation.php";
        });
        
        </script>
        ';
   }
 

   ?>
</body>
</html>