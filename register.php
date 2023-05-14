<?php include('./controllers/registerdb.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registercss.css">
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
            <a class="nav-link" style="color: whitesmoke;font-weight: 600;" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: whitesmoke;font-weight: 600;" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: whitesmoke;font-weight: 600;" href="#">More</a>
          </li>
        </ul>
      </nav>

    <div class="card bg-transparent border-0 justify-content-center mx-auto"  id="div1">
        <div class="card-header bg-transparent justify-content-center" style="color: white;"><h1><center>Patient Registration :</center></h1></div>
        <br><br>
        <form id="login-form" action="" method="post">
            <div class="form-group has-info label-static is-empty">
                    <label for="username" class="control-label">PATIENT USERNAME (ENTER PHONE NUMBER)</label>
                    <input id="username" name="username" class="form-control" type="number" placeholder="Phonenumber" value="<?php echo $username; ?>" />
                    <?php echo $usernameErr; ?>
            </div>
            <div class="form-group has-info label-static is-empty">
                    <label for="password" class="control-label"> CREATE A PASSWORD</label>
                    <input id="password" name="password" class="form-control" type="password" placeholder="input password" value="<?php echo $password; ?>" />
                    <?php echo $passwordErr; ?>
            </div>
            <div class="form-group has-info label-static is-empty">
                <label for="dob" class="control-label"> DATE-OF-BIRTH</label>
                <input id="dob" name="dob" class="form-control" type="date" placeholder="input DOB" value="<?php echo $dob; ?>" />
                <?php echo $dobErr; ?>
            </div>
            <div class="form-group has-info label-static is-empty">
                <label for="address" class="control-label"> PATIENT ADDRESS</label>
                <input id="address" name="address" class="form-control" type="address" placeholder="input address" value="<?php echo $address; ?>" />
                <?php echo $addressErr; ?>
            </div>
            
        
            <center><button type="submit" name="submit" class="btn btn-raised btn-outline-light waves-effect">Register</button></center>
            <br>
            <br>
            <?php echo $successMsg; ?>
        
    </div>

</body>
</html>