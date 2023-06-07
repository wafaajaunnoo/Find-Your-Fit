<?php
//starting the session
session_start();

//destroying session when logout button is clicked then redirect user to the login page
if (session_destroy()) {
  header("Location: login.php");
  exit;
}
?>
