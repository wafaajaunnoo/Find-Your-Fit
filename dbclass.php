<?php
//database credentials
class dbCredentials {
  var $host = "localhost";
  var $user = "root";
  var $pass = "";
  var $db = "findyourfit";

  //declaring variable for tables in database
  var $tableMembers = "registration";
  var $tableAdmins = "admins";
  var $tableContact = "contact";
  var $trainerchosen = "trainerchosen";
  var $tabletimetable  = "timetable";

  //connecting to database
  public function connect() {
    $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    return $con;
  }

  //creating function for signup page (no validations yet)
  public function register ($fname, $lname, $username, $email, $contact_num, $password, $age, $address, $weight,
                            $height, $health, $profilePic) {
        $conn = $this->connect();

        //save in database
        mysqli_query($conn, "insert into ".$this->tableMembers."
                            (fname, lname, username, emailid, contact_num, password, age, address, weight, height, health_reports, profilePic)
                             values ('$fname', '$lname', '$username', '$email', '$contact_num', '$password', '$age', '$address', '$weight',
                                      '$height', '$health', '$profilePic')")
        or die (mysqli_error($conn));
        echo "<br><br><center><div style = ' width:300px; border: 1px solid; padding: 15px 10px 15px 50px; background-repeat: no-repeat; background-position: 10px center;
        color: #4F8A10; background-color: #DFF2BF; background-image: url('https://i.imgur.com/Q9BGTuy.png');'>
        Registration successful! Please login to continue. </div></center>";
  }

  //creating function for contact page
    public function sendMessage ($fname, $lname, $email, $message, $contactImage) {
          $conn = $this->connect();
          mysqli_query($conn, "insert into ".$this->tableContact."
                              (fname, lname, emailid, message, contactImage)
                               values ('$fname', '$lname', '$email', '$message', '$contactImage')")
          or die (mysqli_error($conn));
          echo "<br><br><center><div style = ' width:300px; border: 1px solid; padding: 15px 10px 15px 50px;
                background-repeat: no-repeat; background-position: 10px center; color: #4F8A10;
                background-color: #DFF2BF; background-image: url('https://i.imgur.com/Q9BGTuy.png');'>
              Thank you for contacting the Find Your Fit team.  We will get back to you shortly.</div></center>";
    }

    public function chooseTrainer ($username, $trainerName){
      $conn = $this->connect();
      mysqli_query($conn, "INSERT INTO ".$this->trainerchosen."
                          (member, trainer)
                           values ('$username', '$trainerName')")
      or die (mysqli_error($conn));
    }

    public function timetable ($username, $time, $monday, $tuesday, $wednesday, $thursday, $friday, $saturday, $sunday){
      //echo "checkpoint2-no error";
      "INSERT INTO ".$this->tabletimetable."
                          (member, work_time, monday, tuesday, wednesday, thursday, friday, saturday, sunday)
                           values ('$username', '$time', '$monday', '$tuesday', '$wednesday', '$thursday', '$friday', '$saturday', '$sunday')"
      or die (mysqli_error($conn));
      echo "<br><br><center><div style = ' width:300px; border: 1px solid; padding: 15px 10px 15px 50px;
            background-repeat: no-repeat; background-position: 10px center; color: #4F8A10;
            background-color: #DFF2BF; background-image: url('https://i.imgur.com/Q9BGTuy.png');'>
            Little progress is still progress!  Congrats on making some progress! We will be e-mailing you your updated timetable soon.</div></center>";
    }

}
?>
