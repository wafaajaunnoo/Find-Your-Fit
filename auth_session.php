<!--this is the session file to start a session and check if a user is already logged in-->
<?php
//starting the session + redirecting user to welcome page if he is already logged in
session_start();

if (isset($_SESSION["username"]) && $_SESSION["username"] === true) {
  header("location: welcome.php");
  exit;
}
?>
