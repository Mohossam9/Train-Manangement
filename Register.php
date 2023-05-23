<!DOCTYPE html>
<html>
<head>
  <style>
    .divider:after,
    .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
    }
    .h-custom {
    height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
    .h-custom {
    height: 100%;
    }
    }
    .img-fluid {border-radius: 10px; opacity: 0.8;}
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="img/EastTrain.jpg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="Data/RegisterData.php" method="post">
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Register</p>
          </div>

          <!-- UserName input -->
          <div class="form-outline mb-4">
            <input type="text" name ='name' id="name" class="form-control form-control-lg"
              placeholder="Enter UserName" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name='pass' id="pass" class="form-control form-control-lg"
              placeholder="Enter password" />
          </div>

          <!-- Age input -->
          <div class="form-outline mb-4">
            <input type="number" name ='age' id="age" class="form-control form-control-lg"
              placeholder="Enter Your Age" min="18"  />
          </div>

          <!-- SSN input -->
          <div class="form-outline mb-4">
            <input type="number" name ='ssn' id="ssn" class="form-control form-control-lg"
              placeholder="Enter Your SSN" min="18" />
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" id='Registerbtn' class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>

 <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


   <!-- Template Javascript -->
<script>
   $(document).ready(function(){
    debugger;
    $("#Registerbtn").on('click',function(e){
       if($("#name").val() == "")
        {
           e.preventDefault();
           swal({
                position: "top-end",
                icon: "error",
                title: "Please Enter Your Username",
               })
           return;
        }
        if($("#pass").val()==0)
        {
           e.preventDefault();
           swal({
                position: "top-end",
                icon: "error",
                title: "Please Enter Your Password",
               })
           return;
        }

        if($("#age").val()==0)
        {
           e.preventDefault();
           swal({
                position: "top-end",
                icon: "error",
                title: "Please Enter Valid Age",
               })
           return;
        }

        if($("#ssn").val()==0)
        {
           e.preventDefault();
           swal({
                position: "top-end",
                icon: "error",
                title: "Please Enter Valid SSN",
               })
           return;
        }

    });
   });
</script>

</body>
</html>