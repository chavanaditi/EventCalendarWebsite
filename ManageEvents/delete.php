<?php

	$conn=mysqli_connect("localhost","root","","eventcalender");

	if(isset($_GET['del']))
	{
		$id=$_GET['del'];
		mysqli_query($conn,"Delete from event_details where event_id=$id");
		$_SESSION['msg']="RECORD DELETE";
		header('Location:http://localhost/EC/view_event.php');
	
	}
?>