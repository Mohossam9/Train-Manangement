
<?php

$host_name  = "localhost";
$database   = "train";
$user_name  = "root";
$password   = "";

$connect = mysqli_connect($host_name, $user_name, $password, $database);
$query = 'SELECT c.Name as First, cs.Name as Second , t.* FROM trip t inner join city c on c.CityID =t.Destination left join city cs on cs.CityID = t.Departure ';
$result = $connect->query($query);
$trips = array();

foreach ($result as $row) {

  $trip = array(
    "id"      => $row['TripID'],
    "date"    => $row['Date'],
    "dest"    => $row['First'],
    "depart"  => $row['Second'],
    "time"  =>   $row['Time']

  );
  $trips[] = $trip;
}
 mysqli_close($connect);
echo json_encode($trips);


?>