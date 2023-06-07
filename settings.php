<?php
//database dbCredentials<!--this is the database configuration file-->
//defining database server, username, password and name
define ('DBSERVER', 'localhost');  //server
define ('DBUSERNAME', 'root');  //username
define ('DBPASSWORD', '');  //password
define ('DBNAME', 'findyourfit');  //name

// declaring variable db and connecting to the database
$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

//checking the conection + display error message if there is a connection error
if($db === false) {
  die("Connection error: something went wrong." . mysqli_connect_error());
}
require_once "auth_session.php";
//redirect user to login page if he is not logged in
if (!isset($_SESSION["username"])) {
  header("location: trainerLogin.php");
  exit;
}
else {
  $user = $_SESSION['username'];
  $query = mysqli_query($db, "SELECT username FROM admins WHERE username='$user'")
          or die(mysqli_error());
          $row = mysqli_fetch_array($query);
}
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Settings</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <header>
  <div class="menu-table">
    <div class="hamburger-menu">
      <?php include'menuT.php' ?>
      <p class="headertitle">FIND YOUR FIT</p>
    </div><!--closing hamburger-menu-->
  </div><!--closing menu-table-->
  </header>

  <h2 id="h2Settings">Settings</h2>
  <p id="settingsintro">Change your username or your password.</p>

<!--settings page displayed as a table with 2 columns-->
<form id="settingsform" name="settingsform" method="post" action="settings.php">
<div id="settingsContainer"> <!--row that contains the 2 columns-->
<!--Content of first form-->
  <p class="formsheading">  UPDATE USERNAME </p>
    <div id=settingslabelf1>
    <label for="settingsUsername" class="labelsettings">Username</label> <br><br>
    </div> <!--closing div for settingslabelf1-->

    <!--div for USERNAME-->
    <div id="settingsinputf1">
    <input type="text" name="username" class="settingsInput" value="<?php echo  $_SESSION['username'];?>" required>
    <input type="submit" value="Save Changes" class="btnsSettingsf1" name="update"><!--will update the user's records in the database-->
    </div> <!--closing div for textfields of first form-->

<p class="formsheading">  CHANGE PASSWORD </p>
<label for="newPW" class="labelsettings">Enter your new password</label>
<input type="password" name="newPW" class="settingsInput" >

<label for="confirmPW" class="labelsettings">Please confirm your password</label>
<input type="password" name="confirmPW" class="settingsInput" >
<input type="submit" value="Change Password" class="btnsSettingsf1" name="changePW">
<br>
<input type="reset" value="Reset" class="btnsSettingsf2" name="reset">
<input type="submit" value="Delete my Account" class="btnsSettingsf2" name="delete">

</div>
</form>
<br><br><br>
<!-- footer with some more information upon click -->
<?php include 'footerT.php'; ?>

</body>
</html>

<?php
if(isset($_POST['update'])) {
  $username = $_POST['username'];
  $update = "UPDATE members SET username = '$username' WHERE username = '$user'";
  echo "<br><br><center><div style = ' width:300px; border: 1px solid; padding: 15px 10px 15px 50px;
        background-repeat: no-repeat; background-position: 10px center; color: #4F8A10;
        background-color: #DFF2BF; background-image: url('https://i.imgur.com/Q9BGTuy.png');'>
        Your username has been updated.</div></center>";
  $result = mysqli_query($db, $update) or die(mysqli_error($db));
  exit();
}
if(isset($_POST['changePW'])) {
  $username = $_POST['username'];
  $confirm_password = $_POST['confirmPW'];
  $password = $_POST['newPW'];
  $confirm_password = password_hash($confirm_password, PASSWORD_DEFAULT);
  $password = password_hash($password, PASSWORD_DEFAULT);
  $query = "UPDATE members SET password = '$password' WHERE username = '$username'";
  echo "<br><br><center><div style = ' width:300px; border: 1px solid; padding: 15px 10px 15px 50px;
        background-repeat: no-repeat; background-position: 10px center; color: #4F8A10;
        background-color: #DFF2BF; background-image: url('https://i.imgur.com/Q9BGTuy.png');'>
        Your password has been changed.</div></center>";
  $result = mysqli_query($db, $query) or die(mysqli_error($db));
  exit();
}

if(isset($_POST['delete'])) {
  $username = $_POST['username'];
  $query = "DELETE FROM members WHERE username = '$user'"; //delete statement to delete database
  echo "<br><br><center><div style = ' width:300px; border: 1px solid; padding: 15px 10px 15px 50px;
        background-repeat: no-repeat; background-position: 10px center; color: #4F8A10;
        background-color: #DFF2BF; background-image: url('https://i.imgur.com/Q9BGTuy.png');'>
        Your account has been deleted.</div></center>";
  $result = mysqli_query($db, $query) or die(mysqli_error($db));
  exit();
}
?>
