<?php 
    require_once "../db.php";

    function insertUser($user) {
        $connection = getConnection();
        $sqlQuery = "INSERT INTO user(Email, Name, Password, Gender, Biography, DOB, Picture, Type) 
        VALUES ('{$user['email']}','{$user['name']}','{$user['password']}','{$user['gender']}','','{$user['dob']}','','general_subscriber')";

        $status = mysqli_query($connection, $sqlQuery);
        return $status;
    }
?>