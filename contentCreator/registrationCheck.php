<?php 

    if(isset($_POST['submit']))
    {
        if($_POST['submit'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_POST['submit'] == 'null'){
            echo "null username/password";
        }

        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];

        if($name == "" || $email == "" || $username == "" || $password == "" || $confirmPassword == "" || $gender == "" || $dob == "") {
            echo "All the fields are required!";
        } else if(strlen($username) < 2){
            echo "Username must contain at least two (2) characters!";
        } else if(strlen($password) < 4){
            echo "Password must not be less than four (4) characters!";
        } else {
            $userInfoStr = $name."|".$username."|".$password."|".$email."|".$gender."|".$dob."|contentCreator";
            $file = fopen('../user.txt', 'w');
            file_put_contents("filelist.txt", "");
            fwrite($file, $userInfoStr);
            fclose($file);
            header('location: ../index.html');
        }
    }
?>