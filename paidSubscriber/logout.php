<?php
    if(isset($_POST['logoutSubmit']))
    {
        session_destroy();

        setcookie('status', '', time()-10, '/');
        header('location: ../index.html');
    }
?>