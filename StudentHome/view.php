<?php

	$name=$_GET['gname'];

	  $conn=mysqli_connect("localhost","root","","eventcalender");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

    $sql = "SELECT * FROM event_details where group_name=$name order by date";
  $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>VIEW</title>
  <link rel="stylesheet" type="text/css" href="css/delete_event.css">
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
        <li class="active"> <a href="http://localhost/EC/student_home.php"> HOME </a> </li>
      <li> <a href="http://localhost/EC/s_about.php"> ABOUT </a> </li>
      <li> <a href="http://localhost/EC/s_contact.php"> CONTACT </a> </li>
        </ul>
  </div>
  
  <div class="r1">
    <h2>VIEWING <?php echo $name;?> EVENTS</h2>

        <?php 
      if(!mysqli_num_rows($result)){
        ?> <h1 align="center"><font color="red"><marquee>Sorry, no Upcoming Events</marquee></font></h1>
        <?php
      }
      else{ ?>



  <table border="2">
    <tr>
      <th>Event Id</th>
      <th>Event Name</th>
      <th>Date</th>
      <th>Group Name</th>
      <th>Know More</th>
      <th>Register</th>
    </tr>
        <?php




      while($row=mysqli_fetch_array($result))
      {
    ?>
        <tr>
          <td><?php echo $row['event_id']; ?></td>
          <td><?php echo $row['event_name']; ?></td>
          <td><?php echo $row['date']; ?></td>
          <td><?php echo $row['group_name']; ?></td>
          <td><a href="<?php echo $row['know_more']; ?>" target="_blank"><?php echo $row['know_more']; ?></a></td>
          <td><a href="<?php echo $row['register']; ?>" target="_blank"><?php echo $row['register']; ?></a></td>
        
        </tr>
    <?php  
      }}
     ?> 
  </table>
  </div>

  <footer>
      Developers:&emsp; <a href="https://www.linkedin.com/in/aditi-chavan-96a055179/">Aditi Chavan</a> &emsp; | &emsp; <a href="https://www.linkedin.com/in/rutuja-bhandigani-758796195/">Rutuja Bhandigani</a> &emsp;
  </footer>

</body>
</html>