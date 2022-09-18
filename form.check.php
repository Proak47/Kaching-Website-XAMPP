<?php
    $conn = mysqli_connect('localhost', 'root', '', 'mydb');
    
    $user = $_POST['user'];
    $email = $_POST['email'];
    $text = $_POST['text1'];


    $query = "INSERT INTO form3(id, userID, email, text1) VALUES ('','$user', '$email', '$text')";
    
    if( empty($user) || empty($email) || empty($text)){
        header("Location: ../signin-web.php?error=emptyfield");
        exit();
    }
    
    if(mysqli_query($conn, $query)){
        echo "Success!";
        header("Location: ../form.php?Success");
        exit();
    }
    else{
        die("Error:".mysql_error());
        exit();
    }