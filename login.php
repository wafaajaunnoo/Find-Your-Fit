<!DOCTYPE html>
<html>
<head>
  <title>LOGIN </title>
  <meta charset = utf-8>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">
</head>

<body class="loginBody">
  <header>
  <div class="menu-table">
    <div class="hamburger-menu">
      <?php include'menu.php' ?>
      <p class="headertitle">FIND YOUR FIT </p>
    </div><!--closing hamburger-menu-->
  </div><!--closing menu-table-->
  </header>
<!--add image of members icon-->
<center>
  <img src="images/members-icon.png" alt="icon" width="100px" height="50px">
</center>

<div id="loginform">
  <form method="post" action="" name="frmUser">
    <div class="formheading">
      <p class="formsheading">MEMBER LOGIN </p>
    </div><br>

    <input type="text" placeholder="Username" class="fieldlogin" name="username"><br><br>
    <input type="password" placeholder="Password" class="fieldlogin" name="password"><br><br>
    <input type="submit" id="btnlogin" name="login" value="Login">
<br><br>
    <a href="trainerLogin.php">Login as trainer</a>
</form>
</div>
<?php
    session_start();
    include('config.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM members WHERE username=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
          echo "<br><br><center><div style = ' width:300px; border: 1px solid; padding: 15px 10px 15px 50px;
                background-repeat: no-repeat; background-position: 10px center; color: #BD2303;
                background-color: #FF9C87; '>Please enter both your username and password.</div></center>";
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['username'] = $result['username'];
                header("Location: welcome.php");
            } else {
              echo "<br><br><center><div style = ' width:300px; border: 1px solid; padding: 15px 10px 15px 50px;
                    background-repeat: no-repeat; background-position: 10px center; color: #BD2303;
                    background-color: #FF9C87; '>You entered the wrong username or password. Please try again.</div></center>";
            }
        }
    }
?>
<center><p class="belowform">Don't have an account? &nbsp &nbsp &nbsp &nbsp<a href="signup.php" id="registerhere">REGISTER HERE</a></p></center>

</body>

</html>
