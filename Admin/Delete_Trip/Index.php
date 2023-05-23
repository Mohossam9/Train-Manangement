<!DOCTYPE html>
<html lang="en">

<?php include("../../Includes/AdminHead.php"); ?>
<body>
<div>
  
    <?php include("../../Includes/AdminMenu.php"); ?>
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
        <div >
            <div >
                <h1 style="text-align:center" >Delete Trip</h1>
               
            </div>
        </div>
    </div>
    
    <div class="testbox">
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
           
</div>
   
    
    

    <!-- JavaScript Libraries -->
    <?php include("../../Includes/AdminScript.php"); ?>
    <!-- Template Javascript -->
    <script>
      $(document).ready(function() {
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
               st += "<td style='text-align:center; width:10%;'><button type='button' class='btn btn-primary bg-dark'id='delbtn'>Delete</button></td></tr>";
             });
            $("#Alldata tbody").html(st);
           }
            
          });

          $(document).on('click','#delbtn',function(){
           var ID= $(this).parent().siblings().eq(0).html();

                swal({
                title: "Are you sure You Want To delete This trip?",
                icon: "warning",
                buttons: [
                  'No, cancel it!',
                  'Yes, I am sure!'
                ],
                dangerMode: true,
                }).then(function(isConfirm) {
    
                  if (isConfirm) { 
                    $.ajax({
                      url:'../../Data/Delete_Trip.php',
                      type:'post',
                      data: {id : ID},
                      success : function(){
                        swal("success", "Your Remove Is Done", "success").then(function() {
                           window.location = "../Delete_Trip";
                          }); 
                      }
                    });
                    
                  } 
                  else 
                    swal("Cancelled", "Your Remove Is Cancelled", "error"); 
                });
          });

        });


    </script>
</body>

</html>