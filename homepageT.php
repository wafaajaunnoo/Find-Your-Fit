<!DOCTYPE html>
<html>
<head>
  <title>FIND YOUR FIT </title>
  <meta charset = utf-8 name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <header>
  <div class="menu-table">
    <div class="hamburger-menu">
      <?php include'menuT.php'; ?>
      <p class="headertitle">FIND YOUR FIT
      <a class="loginheader" href="signup.php">Register</a> &nbsp
      <a class="registerheader" href="login.php">Login</a>
      </p>
    </div><!--closing hamburger-menu-->
  </div><!--closing menu-table-->
  </header>

<br>
<hr class="separation">
<!--adding announcement on homepage-->
<center>
<p id="announcement">Get unlimited access to our workout videos! <a class="announcementlink" href="getready.php">Find out more</a></p>
</center>
<hr class="separation">

<div class="table-home">
<div class="table-home-body">
<!--adding the slideshow to the left and the image of the woman to the right-->
<div class="table-home-row">
<!--slideshow-->

<div id="slideshow-container" >
<div id="slideshow">
  <div class="mySlides"><img id="welcome" src="Images/img1.jpg" alt="welcome message" /></div>
  <div class="mySlides"><img id="aboutus" src="Images/img2.jpg" alt="about us" /></div>
  <div class="mySlides"><img id="whyjoin" src="Images/img3.jpg" alt="why join" /></div>
</div>
<!--adding dots-->
<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>
</div>

<div class="table-home-cell"><img src="images/woman-plank.png" alt="woman working out" width="653px"></div>
</div>
</div>
</div>

<?php include 'footerT.php';?>

<script>
/*slideshow on homepage*/
var slideIndex = 0;
showSlides();

function showSlides() {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
for (i = 0; i < slides.length; i++) {
  slides[i].style.display = "none";
}
slideIndex++;
if (slideIndex > slides.length) {slideIndex = 1}
for (i = 0; i < dots.length; i++) {
  dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>

</body>
</html>
