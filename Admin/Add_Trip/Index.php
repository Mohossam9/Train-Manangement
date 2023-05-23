<!DOCTYPE html>
<html lang="en">

<?php include("../../Includes/AdminHead.php"); ?>

<body>
<?php include("../../Includes/AdminMenu.php"); ?>

<div>
    


   
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #ffff;
     
      }
    
     
      input, textarea, select {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #a82877;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #a82877;
      color: #a82877;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 0;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type="time"]::-webkit-inner-spin-button {
      margin: 2px 22px 0 0;
      }
      input[type=radio], input.other {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 15px;
      height: 15px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      #radio_5:checked ~ input.other {
      display: block;
      }
      input[type=radio]:checked + label.radio:before {
      border: 2px solid #a82877;
      background: #a82877;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 7px;
      left: 5px;
      width: 7px;
      height: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #a82877;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #bf1e81;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>

    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div lass="col-12 text-center">
                <h1 >Add New Trip</h1>
        </div>
    </div>
    
    <div class="testbox">
    <button type='button' class='bg-dark float-end' data-bs-toggle='modal' data-bs-target='#exampleModal' id='Edit'>+</button>
     <table class="table table-striped" id="Alldata">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Trip Date</th>
          <th scope="col">Trip Departure</th>
          <th scope="col">Trip Destination</th>
          <th scope="col">Trip Time</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Trip</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form  id="AddTrip" action="../../Data/Add_Trip.php" method="post"> 
            <input type=hidden name="TripID" id="TripID">    
            <div class="item">
              <p>Date of Trip</p>
              <input type="date" name="date" id="date"/>
              <i class="fas fa-calendar-alt"></i>
            </div>
          
            <div class="item">
              <p>Select Place Of Departure</p>
              <select name="departure" id="dept">
                <option selected disabled></option>
              </select>

            </div>


          <div class="item">
              <p>select destination</p>
              <select name="destination" id="dest">
                <option selected disabled></option>
              </select>

            </div>

            

          <div class="item ">
              <p>select departure time</p>
              <select name="time">
               <?php 

                for($i=1; $i<=12; $i++)
                {
                    echo "<option value=".$i."AM".">".$i." AM</option>";
                }
                
                for($i=1; $i<=12; $i++)
                {
                    echo "<option value=".$i."PM".">".$i." PM</option>";
                }

                ?> 
              </select>

            </div>
                <div class="modal-footer">
                <button type="submit" class="btn-primary bg-dark float-end" id="saveButton">Add</button>
                <button type="button" class="btn-primary bg-dark float-end" data-bs-dismiss="modal">Close</button>
              </div>
          </form>
      </div>
  
    </div>
  </div>
</div>
    
    

    <!-- JavaScript Libraries -->
    <?php include("../../Includes/AdminScript.php"); ?>

    <!-- Template Javascript -->
    <script>


        $(document).ready(function() {

          $("#myModalNorm").modal();
          $.ajax({
            url:'../../Data/Trips.php',
            type:'post',
            success: function(response) {
            var data = JSON.parse(response);
            var st = "";
            $.each(data, function(index){
               st += "<tr><th id='ID'>"+data[index].id+"</th>";
               st += "<td>"+data[index].date+"</td>";
               st += "<td>"+data[index].depart+"</td>";
               st += "<td>"+data[index].dest+"</td>";
               st += "<td>"+data[index].time+"</td>";
               st += "</tr>";
             });
            $("#Alldata tbody").html(st);
           }
            
          });

          $.ajax({
            url:'../../Data/Cities.php',
            type:'post',
            success: function(data) {
                var data=$.parseJSON(data);
                $.each(data, function(i, value) {
                    $('#dept , #dest')
                          .append($("<option value="+value.id+">"+ value.name +"</option>"))
                });
            }
          });
          
          $(document).on('change','#date',function(){

            let today = new Date().toISOString().split('T')[0];
            if($(this).val()<today)
            {
                swal({
                position: "top-end",
                icon: "error",
                title: " Cannot Add Old Date",
                showConfirmButton: false,
               })
                $(this).val(today);
            }
            
         });

      $(document).on("click","#saveButton",function(e){
        if($("#date").val() == "")
        {
           e.preventDefault();
           swal({
                position: "top-end",
                icon: "error",
                title: "Please Select Date",
               })
           return;
        }
        if($("#dept option:selected").index()==0)
        {
           e.preventDefault();
           swal({
                position: "top-end",
                icon: "error",
                title: "Please Select Departure",
               })
           return;
        }
        if($("#dest option:selected").index()==0)
        {
           e.preventDefault();
           swal({
                position: "top-end",
                icon: "error",
                title: "Please Select Destination",
               })
           return;
        }

        if($("#time option:selected").index()==0)
        {
           e.preventDefault();
           swal({
                position: "top-end",
                icon: "error",
                title: "Please Select Time",
               })
           return;
        }

      });
});

    </script>
</body>

</html>