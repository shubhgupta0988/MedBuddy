<?php

include('db.php');

global $usernameErr, $dobErr, $passwordErr, $addressErr, $successMsg;

$_username = $_password = $_dob = $_addresss = "";

$successMsg = "";

if (isset($_POST["submit"])) {
    $username     = $_POST["username"];
    $password     = $_POST["password"];
    $dob          = $_POST["dob"];
    $address      = $_POST["address"];

    $username_check_query = mysqli_query($connection, "SELECT * FROM registration WHERE username = '{$username}' ");
    $rowCount = mysqli_num_rows($username_check_query);

    if (!empty($username) && !empty($password) && !empty($dob) && !empty($address)) {
        if ($rowCount > 0) {
            $usernameErr = 'User already exist!';
        } else {

            $_username = mysqli_real_escape_string($connection, $username);
            $_password = mysqli_real_escape_string($connection, $password);
            $_dob = mysqli_real_escape_string($connection, $dob);
            $_address = mysqli_real_escape_string($connection, $address);


            if(!preg_match("/^[0-9]{10}+$/", $_username)) {
                $usernameErr = 'Only 10-digit mobile numbers allowed.';
            }

            /*
            if (!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,20}$/", $_password)) {
                $passwordErr = 'Password should be between 6 to 20 charcters long, contains atleast one special chacter, lowercase, uppercase and a digit.';
            }
            */

            if (!preg_match("/^[a-zA-Z0-9@#]*$/", $_password)) {
                $passwordErr = 'Only letters, numbers & @ allowed.';
            }

            if (!preg_match("/^[a-zA-Z ]*$/", $_addresss)) {
                $addressErr = 'Only letters and white space allowed.';
            }
           
            if (($usernameErr == '') && ($passwordErr == '') && ($dobErr == '') && ($addressErr == '') )
            {

                $password_hash = password_hash($password, PASSWORD_BCRYPT);
                $dob_mod = '2021-07-21';
                $dob_mod = date("Y-m-d", strtotime($dob));

                $sql = "INSERT INTO registration (username, password, dob, address) VALUES ('{$username}', '{$password_hash}', '{$dob_mod}', '{$address}')";

                    // Create mysql query
                    $sqlQuery = mysqli_query($connection, $sql);
                   
                    if(!$sqlQuery){
                       die("MySQL query failed!".$sql.mysqli_error($connection));
                    }

                    $successMsg = "User ".$username." Registered successfully";
                    
            }
        }
    } else {
        if (empty($username)) {
            $usernameErr = 'Username can not be blank.';
        }
        if (empty($password)) {
            $passwordErr = 'Password can not be blank.';
        }
        if (empty($dob)) {
            $dobErr = 'Data-of-Birth can not be blank.';
        }
        if (empty($address)) {
            $addressErr = 'Address can not be blank.';
        }
    }
}
