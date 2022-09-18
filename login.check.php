<?php
    $conn = mysqli_connect('localhost', 'root', '', 'mydb');
    
    $email = $_POST['mail'];
    $password = $_POST['password'];
    

    if (empty($email) || empty($password)){
        header("Location: ../login-web.php?error=emptyfields");
        exit();
    }else{
        $query = "SELECT * FROM form2 WHERE email=?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $query)){
            header("Location: ../login-web.php?error=sqlinvalid");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['pass']);
                if ($pwdCheck == false) {
                    header("Location: ../login-web.php?error=passinvalid");
                    exit();
                }
                else if($pwdCheck == true) {
                    session_start();
                    $_SESSION['userID'] = $row['userID'];
                    $_SESSION['userFName'] = $row['userFName'];
                    $_SESSION['userLName'] = $row['userLName'];

                    header("Location: ../login-web.php?login=success");
                    exit();
                }
                else {
                    header("Location: ../login-web.php?error=wrongpwd");
                    exit();
                }
            }
            else {
                header("Location: ../login-web.php?error=noemail");
                exit();
            }
        }

    }