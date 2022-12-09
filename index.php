<?php
   
?>

<html>

<head>
  <title>Index</title>
  <link rel="stylesheet" href="assets/style.css">
  <script src="script/login.js"></script>
</head>

<body>
  <table class="container-table">
    <tr class="top-menu-bar">
      <td class="w-20">
        <img class="logo" src="assets/common/logo.png" alt="Logo" />
      </td>
      <td colspan="4" align="right">
        
      </td>
    </tr>
    <tr>
      <td class="w-20"></td>
      <td class="w-15"></td>
      <td class="w-30">
        <form id="login_form" method="post" action="controller/login_controller.php">
          <fieldset>
            <legend>LOGIN</legend>
            <table>
              <tr>
                <td>Email </td>
                <td>:</td>
                <td><input type="email" id="email" name="email" value="" onblur="validateEmail()" required></td>
              </tr>
              <tr>
                <td>Password </td>
                <td>:</td>
                <td><input type="password" id="password" name="password" value="" onblur="validatePassword()" required></td>
              </tr>
            </table>
            <hr>
            <input type="submit" id="submit" name="submit" value="Login">
          </fieldset>
        </form>
      </td>
      <td class="w-15"></td>
      <td class="w-20"></td>
    </tr>
    <tr align="center">
      <td colspan="2"></td>
      <td>
        <footer style="margin: 10px">Copyright &copy; 2022</footer>
      </td>
      <td colspan="2"></td>
    </tr>
  </table>
</body>

</html>