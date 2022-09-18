<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    $handler = mysqli_connect($servername, $username, $password);
    
    if(!$handler){
        die("Connection Failed: " . mysqli_connect_error());
    
    }else{
        echo "Connected Successfully   ";
    }
    
    mysqli_query($handler, 'CREATE DATABASE IF NOT EXISTS mydb');

    if(mysqli_query($handler, 'CREATE DATABASE IF NOT EXISTS mydb')){
        echo "Database Created Successfully";
    }else{
        echo "Failure: " . mysqli_error($handler);
    }

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Connection Failed: " .mysqli_connect_error($conn));
    }
    $the_query = "CREATE TABLE IF NOT EXISTS form2(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            userID VARCHAR(30) NOT NULL,
            pass VARCHAR(50) NOT NULL,
            email VARCHAR(30) NOT NULL)";
    $the_other_query = "CREATE TABLE IF NOT EXISTS form3(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            userID VARCHAR(30) NOT NULL,
            email VARCHAR(30) NOT NULL,
            text1 VARCHAR(50) NOT NULL)";

    mysqli_query($conn, $the_query);
    mysqli_query($conn, $the_other_query);
    sleep(3);
    header('Location: ../home.html');
    exit();
?> 