<?php
    require_once(__DIR__.'/../model/login_model.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == null || $email == "") {
        echo "Email is required";
    } else if($password == null || $password == "") {
        echo "Password is required";
    } else  {
        $user = ['email'=>$email, 'password'=>$password];
        $userData = authenticateUser($user);

        if($userData != null)
        {
            session_start();
            setcookie('email', $userData['Email'], time()+3600, '/');

            if($userData['Type'] == 'general_subscriber') {
                header("Location: ../view/general_subscriber/home.php");
            }
            else if($userData['Type'] == 'content_creator'){
                header("Location: ../view/content_creator/home.html");
            }
        }
        else 
        {
             echo "User not found";
        }
    }
?>