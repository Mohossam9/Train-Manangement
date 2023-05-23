
<?php

            $host_name  = "localhost";
            $database   = "train";
            $user_name  = "root";
            $password   = "";
            $connect = mysqli_connect($host_name, $user_name, $password, $database);
            $select = "SELECT * from city";
            $result = $connect->query($select);
            $names = array();

            foreach($result as $row) {
                $city = array(
                    "id"      => $row['CityID'],
                    "name"    => $row['Name']
                  );
                  $names[] = $city;
            }

           mysqli_close($connect);
           echo json_encode($names);


?>