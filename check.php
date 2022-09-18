<?php
    $conn = mysqli_connect('localhost', 'root', '', 'mydb');
    if ($conn){
        echo "Conn";
    }else{
        echo "Fail";
    }
    $user = $_POST['user'];
    $email = $_POST['mail'];
    $password = $_POST['password'];
    $password2 = $_POST['pwd'];


    $query ="INSERT INTO form2(id, userID, pass, email) VALUES ('','$user', '$password', '$email')";
    if($password !== $password2){
        header("Location: ../signin-web.php?error=Passwordnotmatching");
        exit();
    }else if( empty($user) || empty($email) || empty($password) || empty($password2)){
        header("Location: ../signin-web.php?error=emptyfield");
        exit();
    }
    
    if(mysqli_query($conn, $query)){
        echo "Success!";
        header("Location: ../signin-web.php?Success");
    }
    else{
        die("Error:".mysql_error());
        
    }

    
?>