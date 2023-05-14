<?php include('controllers/db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="indexcss.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 

</head>
<body>


    <nav class="navbar navbar-expand-sm bg-transparent navbar-dark"  id="navbar-nav">
        <!-- Brand/logo -->
        <a class="navbar-brand" id="navbar-brand" href="#">MedBuddy<h6>An initiative by Apex Hospital</h6></a>
        
        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <li class="nav-item">
              <a class="nav-link" style="color: royalblue;font-weight: 600;" href="abani.html">Facilities</a>
            </li>
            <li>
            <a class="nav-link" style="color: royalblue;font-weight: 600;" href="Home _ Medbuddy.html">About US</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" style="color: royalblue;font-weight: 600;" data-toggle="dropdown">
              More
            </a>
            <div class="dropdown-menu" id="more_dropdown">
              <a class="dropdown-item" href="login.php">Patient Login</a>
              <a class="dropdown-item" href="register.php">Patient Register</a>
              
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: royalblue;font-weight: 600;" href="#">Contact Us</a>
          </li>
        </ul>
      </nav>

      

      <div class="container" id="div1">
            <h1>WELCOME! <?php echo $_SESSION['username']; ?> </h1>
            <p>The biggest and most trusted hospital in Agra welcomes you and wishes you good health!</p>
      </div>
      <div class="card" id="card1">
          <h3>The Apex world of care.</h3>
          <br>
          <p>Our team of over 7000 doctors are continously pushing themselves to ensure you get the best possible healthcare,always.</p>
          <button class="btn btn-info">BOOK AN APPOINTMENT</button>
      </div>
     
      <br><br><br>
      <div>
        <ul class="nav bg-info py-2 justify-content-center">
            <li class="nav-item">
            <a class="nav-link" id="nav1" href="#"><img src="book-appointment.svg"><br>BOOK APPOINTMENT</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="nav1" href="#"><img src="consult-online.svg"><br>CONSULT ONLINE</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="nav1" href="#"><img src="book-health-check.svg"><br>BOOK HEALTH CHECKUP</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="nav1" href="#"><img src="health-record.svg"><br>HEALTH RECORD</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="nav1" href="#"><img src="wellness.svg"><br>HEALTH AND FITNESS</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="nav1" href="#"><img src="book-lab-test.svg"><br>BOOK LAB TEST</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="nav1" href="#"><img src="warn.png" height=50px><br>CORONA UPDATES</a>
            </li>
        </ul>
    </div>

    
</body>
</html>