<?php

include('db.php');

global $usernameErr, $passwordErr;
$loginErr = "";
$msg = "";

if (isset($_POST["submit"])) {
 
    $username_in     = $_POST["username"];
    $password_in     = $_POST["password"];

    $_username = mysqli_real_escape_string($connection, $username_in);
    $_password = mysqli_real_escape_string($connection, $password_in);

    $username_check_query = mysqli_query($connection, "SELECT * FROM registration WHERE username = '{$username_in}' ");
    $rowCount = mysqli_num_rows($username_check_query);

    if(!$username_check_query){
        die("SQL query failed: " . mysqli_error($connection));
     }

    if (!empty($username_in) && !empty($password_in)) {
        if ($rowCount <= 0) {
            $loginErr = 'User does not exist!. Please register first.';
        } else {
            $row = mysqli_fetch_array($username_check_query);
            $username_db     = $row['username'];
            $password_db      = $row['password'];
            $dob_mod_db     = $row['dob'];
            $address_db      = $row['address'];
            $dob_db = date("d-m-Y", strtotime($dob_mod_db));

            $password = password_verify($password_in, $password_db);

            if (($username_db == $username_in) && ($password) ) {
                $_SESSION['username'] = $username_db;
                $_SESSION['dob'] = $dob_db;
                $_SESSION['address'] = $address_db;
                $loginErr = 'Login Successfull';
                header("Location: index.php");
            } else {
                $loginErr = 'Either Username or Password is incorrect.';
            }

        }
    } else {
        if (empty($username_in)) {
            $usernameErr = 'Username can not be blank.';
        }
        if (empty($password_in)) {
            $passwordErr = 'Password can not be blank.';
        }
    }

}

?>