<?php 
    $name = $_POST['name'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    // $confirmPassword = $_POST['confirmPassword'];
    // $gender = $_POST['gender'];
    // $dob = $_POST['dob'];

    if($name == null || $name == "") {
        echo "Name is required";
    } 
    // else if($email == "") {
    //     echo "Email is required";
    // } else if($password == "") {
    //     echo "Password is required";
    // } else if($confirmPassword == "") {
    //     echo "Confirm Password is required";
    // } else if($gender == "") {
    //     echo "Gender is required";
    // } else if($dob == "") {
    //     echo "DOB is required";
    // } else if(strlen($password) < 4){
    //     echo "Password must not be less than four (4) characters";
    // } 
    else {
        echo "success";
        // $userInfoStr = $name."|".$username."|".$password."|".$email."|".$gender."|".$dob."|generalSubscriber";
        // $file = fopen('../user.txt', 'w');
        // file_put_contents("filelist.txt", "");
        // fwrite($file, $userInfoStr);
        // fclose($file);
        // header('location: ../index.html');
    }
?>