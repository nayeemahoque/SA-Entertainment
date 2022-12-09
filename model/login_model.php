<?php 
    require_once(__DIR__.'/db_conn.php');

    function authenticateUser($user) {
        $connection = getConnection();
        $sqlQuery = "SELECT * FROM user WHERE Email = '{$user['email']}' AND Password = '{$user['password']}';";

        $status = mysqli_query($connection, $sqlQuery);
        return $status;
    }
?>