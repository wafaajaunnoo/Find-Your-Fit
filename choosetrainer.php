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
  <h2>Choose a trainer</h2>


<!--displaying the body in a table structure using div-->

<div id="containerTrainer"><!--container for the first table structure-->
<div id="trainerR1"><!--first row with 4 columns-->

  <div id="trainer1"><!--displayed as a cell-->
    <img src="images/trainer1.jpg" alt="image of first trainer" id="imaget1">
    <button id="knowmore1" onclick="knowMore1()">Know more</button><br><br>
    <div id="more1"></div><!--closing div more-->
    <a href="trainerName.php" class="btnTrainer1">Choose Trainer</a>
  </div><!--closing div trainer1-->

  <div id="trainer2"><!--displayed as a cell-->
    <img src="images/trainer2.jpg" alt="image of second trainer" id="imaget2">
    <button id="knowmore2" onclick="knowMore2()">Know more</button><br><br>
    <div id="more2"></div><!--closing div more-->
    <a href="trainerName.php" class="btnTrainer1">Choose Trainer</a>
  </div><!--closing div trainer2-->

  <div id="trainer3"><!--displayed as a cell-->
    <img src="images/trainer3.png" alt="image of third trainer" id="imaget3">
    <button id="knowmore3" onclick="knowMore3()">Know more</button><br><br>
    <div id="more3"></div><!--closing div more-->
    <a href="trainerName.php" class="btnTrainer1">Choose Trainer</a>
  </div><!--closing div trainer3-->

  <div id="trainer4"><!--displayed as a cell-->
    <img src="images/trainer4.jpg" alt="image of fourth trainer" id="imaget4">
    <button id="knowmore4" onclick="knowMore4()">Know more</button><br><br>
    <div id="more4"></div>
    <a href="trainerName.php" class="btnTrainer1">Choose Trainer</a><!--closing div more-->
  </div><!--closing div trainer4-->

</div><!--closing of trainerR1-->
</div><!--closing of containerTrainer-->

  <table id="container2Trainer">
    <tr>
      <td>
      <img src="images/kayla.jpg" alt="Picture of trainer Kayla" id="imgKayla">
      </td>
      <td>
      <p class="trainerInfo">Name: Kayla <br> Specialization: Abs, core <br> Friendly, will also help you with a diet for free </p>
      <br><br>
      <button id="knowmore5" onclick="knowMore5()">Know more</button> &nbsp&nbsp&nbsp
      <a href="trainerName.php" class="btnTrainer2">Choose Trainer</a><br><br>
      <div id="more5"></div><!--closing div more-->
      </td>

      <td class="trainerC2">
      <img src="images/emilie.jfif" alt="Picture of trainer Emilie" id="imgEmilie">
      </td>
      <td>
      <p class="trainerInfo">Name: Emilie <br> Specialization: Balance, breathing<br> You only need a yoga mat and a pair of yoga pants </p>
      <br><br>
      <button id="knowmore6" onclick="knowMore6()">Know more</button>&nbsp&nbsp&nbsp
      <a href="trainerName.php" class="btnTrainer2">Choose Trainer</a><br><br>
      <div id="more6"></div><!--closing div more-->
      </td>
    </tr>
    <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
    <tr>
      <td>
      <img src="images/christine.jpg" alt="Picture of trainer Christine" id="imgChristine">
      </td>
      <td>
      <p class="trainerInfo">Name: Christine <br> Specialization: Abs, glutes, muscles <br> Loves working with dumbells</p>
      <br><br>
      <button id="knowmore7" onclick="knowMore7()">Know more</button>&nbsp&nbsp&nbsp
      <a href="trainerName.php" class="btnTrainer2">Choose Trainer</a><br><br>
      <div id="more7"></div><!--closing div more-->
      </td>

      <td class="trainerC2">
      <img src="images/anne.jfif" alt="Picture of trainer Anne" id="imgAnne">
      </td>
      <td>
      <p class="trainerInfo">Name: Anne <br> Specialization: Balance, ballet <br> She enjoys silence </p>
      <br><br>
      <button id="knowmore8" onclick="knowMore8()">Know more</button>&nbsp&nbsp&nbsp
      <a href="trainerName.php" class="btnTrainer2">Choose Trainer</a><br><br>
      <div id="more8"></div><!--closing div more-->
      </td>
    </tr>
  </table>

<br><br><br><br>
<?php include 'footer.php'?>

<script src="script.js"> </script>
</body>
</html>
