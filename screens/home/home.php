<html>
<title>Register</title>
	<link rel="stylesheet" href="login.css">
<head>
<img src="reviewiaLogo.png">
<body>
<form action=home.php method="post">
  <div class="container">
    <label for="fname"><b>Firstname</b></label>
    <input type="text" placeholder="Enter Firstname" name="fname" required>
    <label for="lname"><b>Lastname</b></label>
    <input type="text" placeholder="Enter Lastname" name="lname" required>
    <label for="location"><b>Location</b></label>
    <input type="text" placeholder="Location" name="location" required>
    <label for="email"><b>Email-ID</b></label>
    <input type="text" placeholder="Enter Email-ID" name="email" required>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <input type="submit" value="signup" name="signup"> 
  </div>
</form>
</body>
</html>





<?php
mysqli_connect("localhost","root","") or die(mysql_error());
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'regist') or die(mysql_error());

if(isset($_POST['signup']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$location=$_POST['location'];
	$email_id=$_POST['email'];
	$username=$_POST['uname'];
	$password=$_POST['psw'];

	$query="INSERT INTO user(fname,lname,location,email_id,username,password) VALUES('$fname','$lname','$location','$email_id','$username','$password')";
	if(mysqli_query($con,$query))
	{
		echo "<h3>Registered Successfully!</h3>";
	}
	else{
		echo "<h3>ERROR</h3>";
	}
	
}
?>