<?php
    // include_once(APP_ROOT."/core/person_service.php");  
    include '../../model/general_subscriber/registration_model.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    if($name == null || $name == "") {
        echo "Name is required";
    } else if($email == null || $email == "") {
        echo "Email is required";
    } else if($password == null || $password == "") {
        echo "Password is required";
    } else if($confirmPassword == null || $confirmPassword == "") {
        echo "Confirm Password is required";
    }  else if($password != $confirmPassword) {
        echo "Password and Confirm Password do not match";
    } else if($gender == null || $gender == "") {
        echo "Gender is required";
    } else if($dob == null || $dob == "") {
        echo "DOB is required";
    } else if(strlen($password) < 4){
        echo "Password must not be less than four (4) characters";
    } 
    else {

        $user = ['name'=>$name, 'email'=>$email, 'password'=>$password, 'confirmPassword'=>$confirmPassword, 'gender'=>$gender, 'dob'=>$dob];
        $status = insertUser($user);

        if($status)
        {
             echo "Success";
        }
        else 
        {
             echo "Failed to save user in database";
        }

        // $connection = mysqli_connect('localhost', 'root', '', 'sa_entertainment_db');

        // $sqlQuery = "INSERT INTO user(Email, Name, Password, Gender, Biography, DOB, Picture, Type) 
        // VALUES ('{$email}','{$name}','{$password}','{$gender}','','{$dob}','','general_subscriber')";
        
        // $status = mysqli_query($connection, $sqlQuery);
        
        // if($status)
        // {
        //     echo "Success";
        // }
        // else 
        // {
        //     echo "Failed to save user in database";
        // }
    }
?>