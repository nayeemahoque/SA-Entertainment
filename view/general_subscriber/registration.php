<?php

?>

<html>

<head>
  <title>General Subscriber Registration</title>
  <link rel="stylesheet" href="../../assets/style.css">
</head>

<body>
  <script>
    function validateRegistarion(){
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;
      var confirmPassword = document.getElementById('confirmPassword').value;
      // var male = document.getElementById('male').value;
      // var female = document.getElementById('female').value;
      // var other = document.getElementById('other').value;
      var dob = document.getElementById('dob').value;

      var dd = '';

      if(name === '' || name === undefined) {
        alert('Name is required');
        return;
      }
      if(email === '' || email === undefined) {
        alert('Email is required');
        return;
      }
      if(password === '' || password === undefined) {
        alert('Password is required');
        return;
      }
      if(confirmPassword === '' || confirmPassword === undefined) {
        alert('ConfirmPassword is required');
        return;
      }
      if(password != confirmPassword){
        alert('Password and Confirm Password do not match');
      }
      if(dob === '' || dob === undefined) {
        alert('DOB is required');
        return;
      }
      
    }

  </script>
  <table class="container-table">
    <tr class="top-menu-bar">
      <td class="w-20">
        <img class="logo" src="../../assets/common/logo.png" alt="Logo" />
      </td>
      <td colspan="4" align="right">
        <a href="../../index.php">
          <span class="top-menu-item">
            Login
          </span>
        </a>
      </td>
    </tr>
    <tr>
      <td class="w-20"></td>
      <td class="w-15"></td>
      <td class="w-30">
        <form method="post" action="../../controller/general_subscriber/registration_controller.php" onsubmit="return validateRegistarion()" enctype="">
          <fieldset>
            <legend>GENERAL SUBSCRIBER REGISTRATION</legend>
            <table>
              <tr>
                <td>Name </td>
                <td>:</td>
                <td><input type="text" id="name" name="name" value="" required></td>
              </tr>
              <tr>
                <td>Email </td>
                <td>:</td>
                <td><input type="email" id="email" name="email" value="" required></td>
              </tr>
              <tr>
                <td>Password </td>
                <td>:</td>
                <td><input type="password" id="password" name="password" value="" required></td>
              </tr>
              <tr>
                <td>Confirm Password </td>
                <td>:</td>
                <td><input type="password" id="confirmPassword" name="confirmPassword" required></td>
              </tr>
            </table>
            <hr>
            <table>
              <tr>
                <fieldset>
                  <legend>Gender</legend>
                  <input type="radio" id="male" name="gender" value="Male" required /> Male
                  <input type="radio" id="female" name="gender" value="Female" /> Female
                  <input type="radio" id="other" name="gender" value="Other" /> Other
                </fieldset>
              </tr>
              <tr>
                <fieldset>
                  <legend>Date of Birth</legend>
                  <input type="date" id="dob" name="dob" required>
                </fieldset>
              </tr>
            </table>
            <hr>
            <input type="submit" id="submit" name="submit" id="Submit">
            <input type="reset" id="reset">
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