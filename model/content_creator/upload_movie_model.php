<?php
require_once(__DIR__ . '/../db_conn.php');

function insertMovie($movie)
{
    $connection = getConnection();
    $sqlQuery = "INSERT INTO movie(Title, Author, Genre, UploadedBy, UploadedAt, File, IsOpenForGenSub) VALUES
                ('{$movie['title']}','{$movie['author']}','{$movie['genre']}','{$movie['uploadedBy']}','{$movie['uploadedAt']}','{$movie['file']}','{$movie['isOpenForGenSub']}')";

    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}
?>
