<!DOCTYPE html>
<html lang="en">

<?php include("Includes/Head.php"); ?>
<body>
<?php include("Includes/Menu.php"); ?>

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">Train Schedule</h1>
               
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    

<table id="Alldata">
  <thead>
    <th>From</th>
    <th>To</th>
    <th>Departure Time </th>
    <th>Date</th>
    <th>Num Of Tickets</th>
    <th>Total Price</th>
  </thead>
  <tbody></tbody>
</table>
</div>

    

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
      <?php include("Includes/Script.php"); ?>

    <!-- Template Javascript -->
    <script>
      $.ajax({
            url:'Data/MyReservations.php',
            type:'post',
            success: function(response) {
            var data = JSON.parse(response);

            var st = "";
            $.each(data, function(index){
               st += "<tr><td>"+data[index].depart+"</td>";
               st += "<td>"+data[index].dest+"</td>";
               st += "<td>"+data[index].time+"</td>";
               st += "<td>"+data[index].date+"</td>";
               st += "<td>"+data[index].tickets+"</td>";
               st += "<td>"+data[index].price+"</td>";
               st += "</tr>";
             });
            $("#Alldata tbody").html(st);
           }
            
          });
    </script>
</body>

</html>