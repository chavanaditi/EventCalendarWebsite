<?php

  if(isset($_POST['username'])){
  	$c_name=$_POST['username'];
  	$c_pass=$_POST['password'];

    $c_name=stripcslashes($c_name);
    $c_pass=stripcslashes($c_pass);

    $conn=mysqli_connect("localhost","root","","eventcalender");

    $result=mysqli_query($conn,"SELECT * from cr where cr_username='$c_name' AND cr_password='$c_pass' ") or die("Failed to connect to database".mysqli_error());

  	$row=mysqli_fetch_array($result);

  	if($row['cr_username']==$c_name && $row['cr_password']==$c_pass){?>
  		<script type="text/javascript">
        location.assign("http://localhost/EC/cr_home.php");  
      </script>
  	<?php }
  	else{
  		?>
      <script type="text/javascript">
        alert("Invalid Login");
     </script>
      
  		<?php
  	}
  }
?> 

<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="css/login.css">

  <script>
      function validate()
      {
        if(document.login.username.value=="")
        {
          alert("Please enter your Username");
          document.login.username.focus();
          return false;
        }
        if(document.login.password.value=="")
        {
          alert("Please enter your Password");
          document.login.password.focus();
          return false;
        }
      }
  </script>
</head>
<body>
  <div class="logo">
    <a href="http://localhost/EC/main.php"><img src="images/logo.png"/></a>
  </div>
  <div class="title">
    <h1>EVENT CALENDAR</h1>
  </div>
    
  </div>
  
 
    <form class="box" name="login" onsubmit="return(validate())" method="POST" >
      <h1>LOGIN</h1>
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <input type="submit" name="" value="Login">
    </form>
  </div>

  

  </div>

  <footer>
      Developers:&emsp; <a href="https://www.linkedin.com/in/aditi-chavan-96a055179/">Aditi Chavan</a> &emsp; | &emsp; <a href="https://www.linkedin.com/in/rutuja-bhandigani-758796195/">Rutuja Bhandigani</a> &emsp;
  </footer>

</body>
</html>
