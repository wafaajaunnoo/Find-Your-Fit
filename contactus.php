<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <header>
  <div class="menu-table">
    <div class="hamburger-menu">
      <div class="menu-column">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
      <span></span>
    </label>
    <ul class="menu__box">
      <li><a class="menu__item" href="homepage.php">ABOUT US</a></li>
      <li><a class="menu__item" href="signup1.php">REGISTER AS A MEMBER</a></li>
      <li><a class="menu__item" href="login.php">LOGIN</a></li>
      <li><a class="menu__item" href="choosetrainer.php">CHOOSE A TRAINER</a></li>
      <li><a class="menu__item" href="getReady.php">GET READY TO WORKOUT</a></li>
      <li><a class="menu__item" href="timetable.php">TIMETABLE</a></li>
      <li><a class="menu__item" href="contactUs.php">CONTACT US</a></li>
      <li><a class="menu__item" href="settings.php">SETTINGS</a></li>
      <li><a class="menu__item">LOGOUT</a></li><!--logs user out and returns to homepage-->
    </ul>
  </div><!--closing of div menu-column-->
      <p class="headertitle">FIND YOUR FIT
      <a class="loginheader" href="signup.html">Register</a> &nbsp
      <a class="registerheader" href="login.html">Login</a>
      </p>
    </div><!--closing hamburger-menu-->
  </div><!--closing menu-table-->
  </header>

<h2>Contact Us</h2>
<p id="contactusintro">Leave us a message, we are here to assist you.</p>


<!--displaying the form and the map in a table using divs-->
<div id="containercontact">
  <div class="contactrow">
    <div id="contactcell1">

<form method="post" action="" id="contactform" name="contactform" enctype="multipart/form-data">

<div class="contactrow">
    <p id="contactFheading">Send us a Message</p>
  <div class="input-group">
    <label for="contactfname" class="contactlabels" name="contactfname">Name</label>
    <input type="text" name="fname" placeholder ="First Name" id="contactfname" required>
    <input type="text" name="lname" placeholder ="Last Name" id="contactlname" required>
  </div>
</div>

<div class="contactrow">
  <div class="input-group">
    <label for="contactemail" name="email" class="contactlabels">Email</label><br>
    <input type="email" name="emailid" placeholder="example@gmail.com" id="contactemail" required>
  </div>
</div>

<div class="contactrow">
  <div class="input-group">
    <label for="message" class="contactlabels">Message</label>
    <textarea id="message" name="message" required></textarea>
    </div>
    <div class="contactcellbtn">
      <br><br><br><br><br><br>
      <div class="upload-btn-wrapper2">
        <button class="btnUpload2" name="contactImage">Upload an image</button>
        <input type="file" name="contactImage" class="form-control" />
      </div>
    <button id="btnSendmsg" name="btnSend" >Send Message</button>
  </div>

</div>
</div>
</form>

<div id="contactcell2">
<div class="contactrow"></div>
<div class="contactrow"></div>
<div class="contactrow"></div>
<div class="contactrow"></div>
<br><br><br>
<iframe src="https://www.google.com/maps/d/embed?mid=1-3BdjSUpDbX2aFBIfedj5Jy5uyRXkMYW" width="540" height="380"></iframe>
<center><p>FIND YOUR FIT, Mauritius</p></center>
</div>

</div>
</div>

<footer>
    <div class="divFooter">
    <div class="divFooterBody">
    <div class="divFooterRow">
        <div class="divFooterCell"><a href="homepage.html" class="footertop">About Us</a></div>
        <div class="divFooterCell"><a href="homepage.html" class="footertop">Why Join</a></div>
        <div class="divFooterCell"><p class="footertop">Connect</p></div>
    </div>
    <div class="divFooterRow">
        <div class="divFooterCell"><a href="contactus.html" class="footertop">Contact Us</a> <br /> Make a complaint</div>
        <div class="divFooterCell">What to Expect<br /> Our Stories</div>
        <div class="divFooterCell"><img class="fbicon" src="IMAGES/facebook.png" alt="facebook-icon" width="20" height="20"> &nbsp <a href="https://www.facebook.com" class="footerlinks">Facebook</a></div>
    </div>
    <div class="divFooterRow">
        <div class="divFooterCell">&nbsp;</div>
        <div class="divFooterCell">&nbsp;</div>
        <div class="divFooterCell"><img class="igicon" src="IMAGES/instagram.png" alt="instagram-icon" width="20" height="20"> &nbsp <a href="https://www.instagram.com" class="footerlinks">Instagram</a></div>
    </div>
    <div class="divFooterRow">
        <div class="divFooterCell">&nbsp;</div>
        <div class="divFooterCell">&nbsp;</div>
        <div class="divFooterCell"><img class="yticon" src="IMAGES/youtube.png" alt="youtube-icon" width="20" height="23"> &nbsp <a href="https://www.youtube.com" class="footerlinks">YouTube</a></div>
    </div>
    </div>
    </div>
</footer>

<script src="script.js"> </script>
<!--script for the upload button-->
<script type="text/javascript">
/*javascript for the image upload button*/
const realFileBtn = document.getElementsById('real-file');
const customButton = document.getElementsById('btnUpload');

customButton.addEventListener("click", function() {
  realFileBtn.click();
});
</script>

</body>
</html>

<?php
if (isset($_POST['btnSend'])) {
  include "dbclass.php";
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['emailid'];
  $message = $_POST['message'];
  $contactImage = $_POST['contactImage'];

  $obj = new dbCredentials();
  $obj-> sendMessage ($fname, $lname, $email, $message, $contactImage);
}
?>
