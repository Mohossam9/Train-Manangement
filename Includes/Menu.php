

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
       
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 me-n3">
                <a href="Home.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <?php
                 session_start();
                 if($_SESSION['ISADMIN']==1){ ?> 
                     <a href="Admin" class="nav-item nav-link">Admin</a>
                <?php } ?>    
              
                <a href="Train Reservation.php " class="nav-item nav-link">Ticket Reservation</a>
                <div class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Details</a>
                    <div class="dropdown-menu m-0">
                        <a href="MyReservations.php" class="dropdown-item">My Reservations</a>
                        <a href="class.php" class="dropdown-item">The Classes</a>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <a href="../Train" class="nav-item nav-link">Log Out</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
