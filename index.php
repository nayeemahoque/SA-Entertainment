<?php 
    if(isset($_GET['err'])){
        if($_GET['err'] == 'invalid_request'){
            echo "invalid request error..";
        }

        if($_GET['err'] == 'null'){
            echo "null username/password";
        }
    }
?>

<html>

<head>
    <title>HTML Site</title>
</head>

<body>
    <table border="1" align="center" width="650px" style="border-collapse: collapse; margin-top: 20px">

        <tr height="100px" style="background-color: rgb(125, 67, 125);">
            <td width="20%" align="left">
                <img height="72" width="175" src="assets/common/logo.png" alt="Logo">
                <h2 align="center">
                    The job is to entertain!!
                </h2>
            </td>
        </tr>
        <tr>
            <td style="padding: 80px">
                <form method="post" action="controller/login_controller.php">
                    <fieldset>
                        <legend>LOGIN</legend>
                        <table>
                            <tr>
                                <td>User Name </td>
                                <td>:</td>
                                <td><input type="text" name="username" value="" required></td>
                            </tr>
                            <tr>
                                <td>Password </td>
                                <td>:</td>
                                <td><input type="password" name="password" value="" required></td>
                        </table>
                        <hr>
                        <table>
                            <tr>
                                <!-- <input type="checkbox">Remember Me -->
                            </tr>
                            <tr><br><br></tr>
                            <tr>
                                <td>
                                <td>
                                    <input type="submit" name="btn" value="Login">
                                </td>
            </td>
            <td>
                <!-- <a href="changePass.html">Forgot Password?</a> -->
            </td>
        </tr>
    </table>
    </fieldset>
    <div width="100%" align="center">
        <a href="admin/Registration-admin.html" align="center">
            Register As Admin
        </a>
        <br />
        <a href="paidSubscriber/Registration-paidUser.html" align="center">
            Register As Paid Subscriber
        </a>
        <br>
        <a href="view/general_subscriber/registration.php" align="center">
            Register As General Subscriber
        </a>
        <br />
        <a href="contentCreator/Registration.html" align="center">
            Register As Content Creator
        </a>
    </div>
    </form>
    </td>
    </tr>
    <tr align="center">
        <td colspan="2">
            <footer style="margin: 10px">Copyright &copy; 2022</footer>
        </td>
    </tr>
    </table>
</body>

</html>