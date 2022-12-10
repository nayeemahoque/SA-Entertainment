<?php

?>

<html>

<head>
  <title>Paid Subscriber Registration</title>
  <link rel="stylesheet" href="../../assets/style.css">
</head>

<body>
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
        <form id="registration_form" onsubmit="return validateRegistarion()">
          <fieldset>
            <legend>PAID SUBSCRIBER REGISTRATION</legend>
            <table>
              <tr>
                <td>Name </td>
                <td>:</td>
                <td><input type="text" id="name" name="name" value="" onblur="validateName()" required></td>
              </tr>
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
              <tr>
                <td>Confirm Password </td>
                <td>:</td>
                <td><input type="password" id="confirmPassword" name="confirmPassword" onblur="validateConfirmPassword()" required></td>
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
                  <input type="date" id="dob" name="dob" onblur= "validDob()" required>
                </fieldset>
              </tr>
            </table>
            <hr>
            <input type="submit" id="submit" name="submit" value="Register">
            <input type="button" id="reset" name="reset" value="Reset" onclick="resetRegistration()">
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
  <script>
    function validateRegistarion(){
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;
      var confirmPassword = document.getElementById('confirmPassword').value;
      var gender = '';
      var dob = document.getElementById('dob').value;

      if(document.getElementById('male').checked === true) {
        gender = document.getElementById('male').value;
      } else if(document.getElementById('female').checked === true) {
        gender = document.getElementById('female').value;
      } else if(document.getElementById('other').checked === true) {
        gender = document.getElementById('other').value;
      }

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
      if(password.length < 4) {
        alert('Password must not be less than four (4) characters')
      }
      if(gender === ''){
        alert('Gender is required');
        return;
      }
      if(dob === '' || dob === undefined) {
        alert('DOB is required');
        return;
      }

      let xhttp = new XMLHttpRequest();
      xhttp.open('POST', '../../controller/paid_subscriber/registration_controller.php', true);
      xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhttp.send('name='+name+'&email='+email+'&password='+password+'&confirmPassword='+confirmPassword+'&gender='+gender+'&dob='+dob);
      xhttp.onload = function() {
        if (xhttp.status == 200) {
          alert(xhttp.responseText);
        } else {
          alert(`Error ${xhttp.status}: ${xhttp.statusText}`);
        }
      };
    }

    function resetRegistration(){
      document.getElementById('name').value = '';
      document.getElementById('email').value = '';
      document.getElementById('password').value = '';
      document.getElementById('confirmPassword').value = '';
      document.getElementById('male').checked = false ;
      document.getElementById('female').checked = false;
      document.getElementById('other').checked = false;
      document.getElementById('dob').value = '';
    }
  </script>
</body>

</html>