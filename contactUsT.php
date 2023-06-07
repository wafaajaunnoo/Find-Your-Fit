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
  <?php include'menuT.php'; ?>
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

<?php include 'footerT.php';?>

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
