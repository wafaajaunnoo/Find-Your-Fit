<!DOCTYPE html>
<html>
<head>
  <title>SIGN UP</title>
  <meta charset = utf-8>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">
</head>

<body class="signup1body">
  <header>
  <div class="menu-table">
    <div class="hamburger-menu">
<?php include('menu.php') ?>

      <p class="headertitle">FIND YOUR FIT</p>
  </div><!--closing hamburger-menu-->
  </div><!--closing menu-table-->
  </header>

<h2> Register to shape your mind and body</h2>

<table id="signuptable">
<tr>
<td>
      <center>
        <img src="images/members-icon.png" alt="icon" width="100px" height="50px">
      </center>

      <div id="signupform">
        <form  method="post" action="" name="signup1">
          <p class="formsheading">  REGISTER FOR FREE </p>
          <!--styling input fields and icons in form-->
          <div>

            <div class="fieldIcons">
              <input type="text" placeholder="First Name" name="fname" id="su-fname">

              <input type="text" placeholder="Last Name" name="lname" id="su-lname">

              <input type="text" placeholder="Username" name="username" id="su-lname">
            </div> <br>

            <div class="fieldIcons">
              <input type="email" placeholder="E-mail" name="emailid" class="sufield">
              &nbsp &nbsp &nbsp&nbsp&nbsp
              <input type="tel" placeholder="Contact Number" name="num" class="sufield"> <br><br>
            </div>

            <div class="fieldIcons">
              <input type="password" placeholder="Password" name="password" class="sufield"> &nbsp
              &nbsp &nbsp &nbsp&nbsp&nbsp
              <input type="password" placeholder="Confirm Password" name="confirmPW" class="sufield" >
            </div> <br>

            <div class="fieldIcons">
              <input type="text" placeholder="Age" name="age" class="sufieldage">
            </div> <br>

            <div class="fieldIcons">
              <input type="text" placeholder="Address" name="address" class="sufield">
            </div> <br>
            <p class="formsheading">TELL US MORE ABOUT YOU</p>

            <div class="fieldIcons">
              <input type="text" name="weight" placeholder="Weight" class="sufield">
            </div><br>

            <div class="fieldIcons">
              <input type="text" name="height" placeholder="Height" class="sufield">
            </div><br>

            <div class="fieldIcons">
              <label for="healthreports" id="labelSignUp">If you have any health concerns,please inform us.</label><br>
              <textarea  id="healthreports" name="healthreports"></textarea><br><br>
            </div><br>

            <div class="fieldIcons">
              <label for="changeImg" id="UploadSignUp">Add a profile picture</label>
              <div class="upload-btn-wrapper">
                <button id="btnUploadS">Upload an Image</button>
                <input type="file" name="myfile"/>
              </div>
            </div>
          </div>


          <td>
            <button type="submit" name="register" id="roundbutton">REGISTER</button>
            <br><br><br><br><br><br><br><br><br>
            <p id="loginLink">Already have an account? Login <a href="login.php" id="loginhere">HERE</a>
          </td>
</form>
</div>
</td>
</tr>
</table> 

<script src="script.js"></script>

</body>
</html>
<?php
// On submitting form below function will execute.
include "dbclass.php";
if(isset($_POST['register'])){

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $username = $_POST['username'];
  $email = $_POST['emailid'];
  $contact_num = $_POST['num'];
  $password = $_POST['password'];
  $confirmPW =$_POST['confirmPW'];
  $password_hash = password_hash($password, PASSWORD_BCRYPT); //creating a password hash
  $age = $_POST['age'];
  $address = $_POST['address'];
  $weight = $_POST['weight'];
  $height = $_POST['height'];
  $health = $_POST['healthreports'];
  $profilePic = $_POST['myfile'];

  if (empty($_POST["fname"])) {
        echo "<br><br><center><div style = ' width:300px; border: 1px solid; padding: 15px 10px 15px 50px; background-repeat: no-repeat; background-position: 10px center;
        color: #4F8A10; background-color: #DFF2BF; background-image: url('https://i.imgur.com/Q9BGTuy.png');'>
        Please enter your first name. </div></center>";
  }
  else  {
    $fname = ($_POST["fname"]);
    // check name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
        echo "<br><br><center><div style = ' width:300px; border: 1px solid; padding: 15px 10px 15px 50px; background-repeat: no-repeat; background-position: 10px center;
        color: #4F8A10; background-color: #DFF2BF; background-image: url('https://i.imgur.com/Q9BGTuy.png');'>
        Only letters and white space allowed in your first name. </div></center>";
      }
  }

  if (empty($_POST["emailid"])) {
    echo "<br><br><center><div style = ' width:300px; border: 1px solid; padding: 15px 10px 15px 50px; background-repeat: no-repeat; background-position: 10px center;
    color: #4F8A10; background-color: #DFF2BF; background-image: url('https://i.imgur.com/Q9BGTuy.png');'>
    Please enter your E-mail.</div></center>";
  }
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<br><br><center><div style = ' width:300px; border: 1px solid; padding: 15px 10px 15px 50px; background-repeat: no-repeat; background-position: 10px center;
    color: #4F8A10; background-color: #DFF2BF; background-image: url('https://i.imgur.com/Q9BGTuy.png');'>
    Please enter a valid E-mail address</div></center>";
  }
  else {
    $email = ($_POST["emailid"]);
  }

  if (empty($_POST["contact_num"])) {
    echo "<br><br><center><div style = ' width:300px; border: 1px solid; padding: 15px 10px 15px 50px; background-repeat: no-repeat; background-position: 10px center;
    color: #4F8A10; background-color: #DFF2BF; background-image: url('https://i.imgur.com/Q9BGTuy.png');'>
    Please enter a contact number.</div></center>";
  }
  else {
    $contact_num = ($_POST["contact_num"]);
  }

  if (empty($_POST["password"])) {
    echo "<br><br><center><div style = ' width:300px; border: 1px solid; padding: 15px 10px 15px 50px; background-repeat: no-repeat; background-position: 10px center;
    color: #4F8A10; background-color: #DFF2BF; background-image: url('https://i.imgur.com/Q9BGTuy.png');'>
    Please enter a password.</div></center>";
  }
  else {
    $password = ($_POST["password"]);
  }

  if (empty($_POST["confirmPW"])) {
    echo "<br><br><center><div style = ' width:300px; border: 1px solid; padding: 15px 10px 15px 50px; background-repeat: no-repeat; background-position: 10px center;
    color: #4F8A10; background-color: #DFF2BF; background-image: url('https://i.imgur.com/Q9BGTuy.png');'>
    Please confirm your password.</div></center>";
  }
  else {
    $confirmPW = ($_POST["confirmPW"]);
  }
  if ($password != $confirmPW) {
    $error .= '<p> Your passwords did not match. Please try again.</p>';
  }

  $obj = new dbCredentials();
  $obj-> register ($fname, $lname, $username, $email, $contact_num, $password, $age, $address, $weight, $height, $health, $profilePic);

}


?>
