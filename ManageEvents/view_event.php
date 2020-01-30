<!DOCTYPE html>
<html>
<head>
  <title>VIEW</title>
  <link rel="stylesheet" type="text/css" href="css/view_event.css">
</head>
<body>
      <div class="logo">
    <a href="http://localhost/EC/main.php"><img src="images/logo.png"/></a>
  </div>
  <div class="title">
    <h1>EVENT CALENDAR</h1>
  </div>
  <div class="nav">
    <ul>
          <li> <a href="http://localhost/EC/cr_home.php"> HOME </a> </li>
          <li> <a href="http://localhost/EC/c_about.php"> ABOUT </a> </li>
          <li> <a href="http://localhost/EC/c_contact.php"> CONTACT </a> </li>
          <li> <a href="http://localhost/EC/login.php"> SIGNOUT </a> </li>
        </ul>
  </div>
  
  <div class="r1">
    <h2>VIEW EVENTS</h2>
  <table border="2"><tr><th>Event Id</th><th>Event Name</th><th>Date</th><th>Group Name</th><th>Know More</th><th>Register</th></tr>
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventcalender";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM event_details";
$result = $conn->query($sql);

    
      while($row=mysqli_fetch_array($result))
      {
    ?>
        <tr>
          <td><?php echo $row['event_id']; ?></td>
          <td><?php echo $row['event_name']; ?></td>
          <td><?php echo $row['date']; ?></td>
          <td><?php echo $row['group_name']; ?></td>
          <td><a href="<?php echo $row['know_more']; ?>"><?php echo $row['know_more']; ?></a></td>
          <td><a href="<?php echo $row['register']; ?>"><?php echo $row['register']; ?></a></td>
        </tr>
    <?php  
      }
     ?> 
  </table><?php

$conn->close();
?>


    </table>
  </div>

  <footer>
      Developers:&emsp; <a href="https://www.linkedin.com/in/aditi-chavan-96a055179/">Aditi Chavan</a> &emsp; | &emsp; <a href="https://www.linkedin.com/in/rutuja-bhandigani-758796195/">Rutuja Bhandigani</a> &emsp;
  </footer>

</body>
</html>