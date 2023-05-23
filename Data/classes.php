
<?php

$host_name  = "localhost";
$database   = "train";
$user_name  = "root";
$password   = "";

$connect = mysqli_connect($host_name, $user_name, $password, $database);
$query = 'SELECT * FROM class';
$result = $connect->query($query);
$classes = array();

foreach ($result as $row) {
  $trip = array(
    "id"      => $row['ClassID'],
    "name"    => $row['Name'],
    "Price"    => $row['Price'],
  );
  $classes[] = $trip;
}
 mysqli_close($connect);
echo json_encode($classes);


?>