
<?php

$host_name  = "localhost";
$database   = "train";
$user_name  = "root";
$password   = "";

session_start();
$loginUserID=$_SESSION["Id"];


$connect = mysqli_connect($host_name, $user_name, $password, $database);

$query = "SELECT c.Name as First, cs.Name as Second , R.NumOfTickets , R.TotalPrice, t.* FROM 
trip t inner join reservation R on R.TripID =t.TripID 
left join city c on c.CityID =t.Destination 
left join city cs on cs.CityID = t.Departure  
where R.UserID = '$loginUserID' ";

$result = $connect->query($query);
$trips = array();

foreach ($result as $row) {

  $trip = array(
    "id"      => $row['TripID'],
    "date"    => $row['Date'],
    "dest"    => $row['First'],
    "depart"  => $row['Second'],
    "time"  =>   $row['Time'],
    "tickets"  =>   $row['NumOfTickets'],
    "price"  =>   $row['TotalPrice']
  );
  $trips[] = $trip;
}
 mysqli_close($connect);
echo json_encode($trips);


?>