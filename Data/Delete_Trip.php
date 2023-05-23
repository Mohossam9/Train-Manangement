
<?php
   // database connection code

   $id =  $_POST['id'];
        
   $con = mysqli_connect('localhost', 'root', '','train');

   $sql = "Delete from trip where TripID = '".$id."'";

   // insert in database 
   $rs = mysqli_query($con, $sql);

   mysqli_close($con);
     
   ?>
