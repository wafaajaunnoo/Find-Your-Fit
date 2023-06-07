<?php
include "dbclass.php";
require_once "auth_session.php";
//redirect user to login page if he is not logged in
if (!isset($_SESSION["username"])) {
  header("location: login.php");
  exit;
};
$username = $_SESSION['username'];
$trainerName="";
//creating an array that stores the username of all trainers
$trainers = array("kimMae", "clark", "melissa", "janeFin", "kayla", "emilie", "christine", "anne");
if(isset($_POST['save'])){
$trainerName = $_POST['trainerName'];
//check if the value of the textbox 'trainerName' exists in the array '$trainers'
if (in_array("$trainerName", $trainers)) {
  echo "<br><br><center><div style = ' width:300px; border: 1px solid; padding: 15px 10px 15px 50px;
        background-repeat: no-repeat; background-position: 10px center; color: #4F8A10;
        background-color: #DFF2BF; background-image: url('https://i.imgur.com/Q9BGTuy.png');'>
        Trainer chosen!</div></center>";
}
else {
    echo "<br><br><center><div style = ' width:300px; border: 1px solid; padding: 15px 10px 15px 50px;
          background-repeat: no-repeat; background-position: 10px center; color: #BD2303;
          background-color: #FF9C87; '>
          The trainer name you entered does not exist. </div></center>";
}
$obj = new dbCredentials();
$obj-> chooseTrainer ($username, $trainerName);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Choosing a Trainer</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

  <header>

  <div class="menu-table">
    <div class="hamburger-menu">
          <?php include'menu.php' ?>
      <p class="headertitle">FIND YOUR FIT
      <a class="loginheader" href="signup.php">Register</a> &nbsp
      <a class="registerheader" href="login.php">Login</a>
      </p>
    </div><!--closing hamburger-menu-->
  </div><!--closing menu-table-->
  </header>

<form name="chooseTrainer" action="trainerName.php" method="post" class="trainerNameform">
<center>  <p class="">Insert the username of the trainer you are chosing, basing on <br> the info provided in the table below.</p>

<table id="trainerInfo" border="3px">
  <tr>
    <th>Trainer's name</th>
    <th>Trainer's username</th>
  </tr>

  <tr>
    <td><center>Kim Mae</center></td>
    <td>kimMae</td>
  </tr>

  <tr>
    <td>Catherine Clark</td>
    <td>Trainer's username</td>
  </tr>

  <tr>
    <td>Melissa</td>
    <td>melissa</td>
  </tr>

  <tr>
    <td>Jane Fin</td>
    <td>janeFin</td>
  </tr>

  <tr>
    <td>Kayla</td>
    <td>kayla</td>
  </tr>

  <tr>
    <td>Emilie</td>
    <td>emilie</td>
  </tr>

  <tr>
    <td>Christine</td>
    <td>christine</td>
  </tr>

  <tr>
    <td>Anne</td>
    <td>anne</td>
  </tr>
</table>
<br>
<label for="trainerName"> Insert the trainer's username:</label>
<input type="text" name="trainerName">
<br><br>
<input type="submit" name="save" value="CHOOSE TRAINER">
</center>
</form>
<br>
<?php include 'footer.php'?>

</body>
</html>
