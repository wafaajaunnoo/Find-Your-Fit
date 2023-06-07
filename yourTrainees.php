<!DOCTYPE >
<?php
require 'auth_session.php';
require 'dbclass.php';
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
$username = $_SESSION['username'];
?>
<html>
<head>
  <title> Your Trainees </title>
  <meta charset = utf-8>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
  <div class="menu-table">
    <div class="hamburger-menu">
      <?php include'menuT.php';?>
  <div id="tableTrainee"><!--displayed as a table-->
    <div id="headerTrainee">
      <p class="headertitle"> FIND YOUR FIT
        <a id="loginTrainee" href="signup.php">Register</a> &nbsp
        <a id="registerTrainee" href="login.php">Login</a>
      </p>
    </div><!--closing hamburger-menu-->
  </div><!--closing menu-table-->
</header>

<br>
<hr class="separation">
<h2>Your Trainees</h2>

<center>
<table  id="myTable" border="1pxa">
  <thead>
  <tr class="myTableTR">
    <th class="myTableTH">Trainee</th>
    <th class="myTableTH">Action</th>
  </tr>
  </thead>
<?php
$conn = mysqli_connect("localhost", "root", "", "findyourfit");
if($conn-> connect_error){
  die("connection failed:" .$conn-> connect_error);
}

$username = $_SESSION['username'];
$results = mysqli_query($db, "SELECT member from trainerchosen WHERE trainer = '$username'");
while ($row = mysqli_fetch_array($results)) { ?>
  <tr class="myTableTR">
    <td class="myTableTD"><?php echo $row['member']; ?></td>
    <td class="myTableTD">
      <a href="https://www.google.com/intl/en-GB/gmail/about/#<?php echo $row['member']; ?>" id="btnReport" >E-mail your trainee</a>
    </td>
  </tr>
<?php } ?>


</table>
</center>
<br>
<br>
<?php include 'footerT.php'; ?>

<script>
function addRow(myTable) {

var table = document.getElementById(myTable);

var rowCount = table.rows.length;
var row = table.insertRow(rowCount);

var colCount = table.rows[0].cells.length;

for(var i=0; i<colCount; i++) {

    var newcell	= row.insertCell(i);

    newcell.inner = table.rows[0].cells[i].inner;
    //alert(newcell.childNodes);
    switch(newcell.childNodes[0].type) {
        case "text":
                newcell.childNodes[0].value = "";
                break;
        case "checkbox":
                newcell.childNodes[0].checked = false;
                break;
        case "select-one":
                newcell.childNodes[0].selectedIndex = 0;
                break;
    }
}
}
</script>
</body>
</>
