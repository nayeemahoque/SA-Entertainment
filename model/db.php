<?php 
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "sa_entertainment_db";

    function getConnection() {
        global $host;
        global $dbuser;
        global $dbpass;
        global $dbname;

        $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);

        return  $con;
    }
?>