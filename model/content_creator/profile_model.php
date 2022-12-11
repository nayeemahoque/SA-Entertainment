<?php
require_once(__DIR__ . '/../db_conn.php');

function readUser($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM user WHERE Email = '{$email}';";

    $result = mysqli_query($connection, $sqlQuery);
    $data = mysqli_fetch_assoc($result);
    mysqli_close($connection);

    return $data;
}
?>
<!-- . -->