<?php
    if(isset($_POST['btn']))
    {
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "" || $password == "") {
            header('location: login.php?err=null');
        } else {
            $file = fopen('user.txt', "r");
            while(!feof($file)){
                $data = fgets($file);
                $user = explode("|", $data);
                if($user[1] == $username && $user[2] == $password){
                    session_start();
                    $userData = ['name'=> $user[0], 'username'=> $user[1], 'password'=>$user[2], 'email'=>$user[3], 'gender'=>$user[4], 'dob'=>$user[5], 'userType' => $user[6]];
                    $_SESSION['user'] = $userData;
                    setcookie('status', 'true', time()+3600, '/');
                    if($user[6] == 'admin'){
                        header('location: admin/home-admin.html');
                    }
                    if($user[6] == 'paidSubscriber'){
                        header('location: paidSubscriber/homePaidUser.html');
                    }
                    if($user[6] == 'generalSubscriber'){
                        header('location: generalSubscriber/home.html');
                    }
                    if($user[6] == 'contentCreator'){
                        header('location: contentCreator/home.html');
                    }
                }
            }
            echo "invalid user";
        }
    }
?>