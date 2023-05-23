<!DOCTYPE html>
<html>
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<body>

<?php
   // database connection code

   $con = mysqli_connect('localhost', 'root', '','train');

session_start();


if (isset($_POST['name']) && isset($_POST['pass'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['name']);

    $pass = validate($_POST['pass']);

    $sql = "SELECT * FROM user WHERE Name='$uname' AND Password='$pass'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Name'] === $uname && $row['Password'] === $pass) {

                $_SESSION['Name'] = $row['Name'];
                $_SESSION['Id'] = $row['UserID'];
                $_SESSION['ISADMIN'] = $row['ISADMIN'];
                
                header("Location:../Home.php");
                exit();
              }
          
        }
      }
     
      echo '
                <script type="text/javascript">

                  swal({
                    position: "top-end",
                    icon: "error",
                    title: "Invalid UserName OR Password Please Try Again!",
                  }).then(function() {
                    window.location = "../Index.php";
                });
                
                </script>
                ';
    
   ?>

</body>
</html>
