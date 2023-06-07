<?php
//starting the session
session_start();

//redirect user to login page if he is not logged in
if (!isset($_SESSION["username"])) {
  header("location: login.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> WELCOME</title>
  <link rel="stylesheet" type="text/css" href="styles.css" media="screen">
</head>

<body>
  <!--navigation menu-->
  <header>
  <div class="menu-table">
    <div class="hamburger-menu">
    <?php include'menu.php' ?>
      <p class="headertitle">FIND YOUR FIT </p>
    </div><!--closing hamburger-menu-->
  </div><!--closing menu-table-->
  </header>

  <div id="welcomeBG">
        <div id="centered">Welcome to the FIND YOUR FIT family, <?php echo $_SESSION["username"]; ?>!
         <br>Please proceed by <a href="choosetrainer.php" class="welcomeLinks">choosing your trainer </a> &nbsp
         or <a href="getready.php" class="welcomeLinks"> watching workout videos </a>. <br>
         If you are facing any issues, we will be glad to assist you.  Contact us via the <br>
        <a href="contactus.php" class="welcomeLinks">Contact Page</a>.
        </div>
  </div>
<center><img src="images/workout.gif" id="welcomeGif"></center>
<?php include 'footer.php'?>

</body>
</html>
