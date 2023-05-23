<!DOCTYPE html>
<html lang="en">

<?php include("Includes/Head.php"); ?>
<body>
<?php include("Includes/Menu.php"); ?>
<div>
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Train Classes</h1>
               
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <table id="AllData">
        <thead>
            <tr>
              <th>Class</th>
              <th>Price</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
      </table>
</div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <?php include("Includes/Script.php"); ?>

    <!-- Template Javascript -->
    <script >
        $(document).ready(function(){

            $.ajax({
            url:'Data/classes.php',
            type:'post',
            success: function(response) {
            var data = JSON.parse(response);
            var st = "";
            $.each(data, function(index){
               st += "<tr><td>"+data[index].name+"</td>";
               st += "<td>"+data[index].Price+"</td></tr>";
             });
            $("#AllData tbody").html(st);
           }
            
          });

        });
    </script>
</body>

</html>