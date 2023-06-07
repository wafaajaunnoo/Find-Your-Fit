<?php
include "dbclass.php";
require_once "auth_session.php";
//redirect user to login page if he is not logged in
if (!isset($_SESSION["username"])) {
  header("location: login.php");
  exit;
};
$username = $_SESSION['username'];
if(isset($_POST['progress'])){
    $time = $_POST['time'];
    $monday = $_POST['monday'];
    $tuesday = $_POST['tuesday'];
    $wednesday = $_POST['wednesday'];
    $thursday = $_POST['thursday'];
    $friday = $_POST['friday'];
    $saturday = $_POST['saturday'];
    $sunday = $_POST['sunday'];
    //echo "checkpoint1-no error";
$obj = new dbCredentials();
$obj-> timetable ($username, $time, $monday, $tuesday, $wednesday, $thursday, $friday, $saturday, $sunday);
}
?>
<!Doctype html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">


</head>
<body>
<header>
      <?php include'menu.php'; ?>
      <p class="headertitle"> FIND YOUR FIT
      <a class="loginheader" href="signup1.php">Register</a> &nbsp
      <a class="registerheader" href="login.php">Login</a>
      </p>
      <h2>Timetable</h2>
      <p id="workoutIntro">Fill in your timetable with the workouts you completed below: </p>
</header>

<div class="timetableDiv">
  <table id="tableTT" border="4px">
    <form method="post" action="timetable.php">
       <tr>
          <td>
            <center>  <label class="labelTT">Time</label> </center> <br>
		        <center>  <input type="text" name="time" class="inputTT"></center>
          </td>
          <td>
            <center>  <label class="labelTT">Monday</label>  </center> <br>
			      <center>  <input type="text" name="monday"class="inputTT">  </center>
          </td>
          <td>
            <center>  <label class="labelTT">Tuesday</label>  </center> <br>
			      <center> <input type="text" name="tuesday" class="inputTT">  </center>
          </td>
          <td>
             <center>  <label class="labelTT">Wednesday</label> </center> <br>
			       <center>  <input type="text" name="wednesday" class="inputTT">  </center>
          </td>
          <td>
            <center>  <label class="labelTT">Thursday</label>  </center> <br>
			      <center>  <input type="text" name="thursday" class="inputTT"> </center>
          </td>
          <td>
             <center>  <label class="labelTT">Friday</label> </center> <br>
			       <center>  <input type="text" name="friday" class="inputTT">  </center>
          </td>
          <td>
            <center> <label class="labelTT">Saturday</label> </center> <br>
			       <center> <input type="text" name="saturday" class="inputTT"></center>
          </td>
          <td>
             <center> <label class="labelTT">Sunday</label> </center><br>
			       <center> <input type="text" name="sunday" class="inputTT"> </center>
          </td>
        </tr>
        <input type="submit" name="progress" value="UPDATE PROGRESS" id="timetableSave">
       </form>
  </table>
</div>
        <br><br><br><br>
<?php include('footer.php') ?>

</body>
</html>
