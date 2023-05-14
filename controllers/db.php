<?php 

    // Enable us to use Headers
    ob_start();

    // Set sessions
    if(!isset($_SESSION)) {
        session_start();
    }

    $hostname = "127.0.0.1";
    $username = "root";
    $password = "root";
    $dbname = "meddb";
    $db_port = 8889;
    
    $connection = mysqli_connect($hostname, $username, $password, $dbname, $db_port) or die("Database connection not established.");

/*    $sql = "INSERT INTO registration (username, password, dob, address) VALUES ('9867376627', '$2y$10$BohxaMbE7kGPjDamXoAaruuS/hAHF1TrZk2zBB1VoczBS7K/6/oDS', '2021-07-21', 'Mumbai')";
            $sqlQuery = mysqli_query($connection, $sql);
            */

?>