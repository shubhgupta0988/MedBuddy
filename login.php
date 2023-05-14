<?php include('./controllers/loginverify.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="logincss.css">
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
            <a class="nav-link" style="color: royalblue;font-weight: 600;" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: royalblue;font-weight: 600;" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: royalblue;font-weight: 600;" href="#">More</a>
          </li>
        </ul>
      </nav>

    <div class="card bg-transparent border-0 justify-content-center mx-auto"  id="div1">
        <div class="card-header bg-transparent justify-content-center" style="color: white;"><h1><center>Patient Login :</center></h1></div>
        <br><br>
        <form id="login-form" action="" method="post">
            <div class="form-group has-info label-static is-empty">
                    <label for="username" class="control-label">PATIENT USERNAME</label>
                    <input id="username" name="username" class="form-control" type="text" placeholder="Username" value="<?php echo $username_in; ?>" />
                    <?php echo $usernameErr; ?>
            </div>
            <div class="form-group has-info label-static is-empty">
                    <label for="password" class="control-label"> PATIENT PASSWORD</label>
                    <input id="password" name="password" class="form-control" type="password" placeholder="input password" />
                    <?php echo $passwordErr; ?>
            </div>
        
            <center><button type="submit" name="submit" class="btn btn-raised btn-outline-light waves-effect">Login</button>
            Not a User ? <a href="register.php"><button type="button" class="btn btn-raised btn-outline-light waves-effect">Register here</button></a>
            </center>
        
            <br>
            <br>
            <?php echo $loginErr; ?>
            <br>
            <br>
            <?php echo $msg; ?>

    </div>


</body>
</html>