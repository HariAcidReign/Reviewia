<html>
<title>Login</title>
	<link rel="stylesheet" href="login.css">
<head>
<img src="reviewiaLogo.png">
<body>
<form action=login.php method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <input type="submit" value="submit" name="submit">
    <p>Dont have an account? <a href="home.php">Click here to register</a></p>   
  </div>
</form>
</body>
</html>




<?php
mysqli_connect("localhost","root","") or die(mysql_error());
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'regist') or die(mysql_error());

if(isset($_POST['submit']))
{
	
	$username=$_POST['uname'];
	$password=$_POST['psw'];
	$query1="INSERT  INTO login(username) VALUES('$username')";
	mysqli_query($con,$query1);
	$query2="UPDATE login SET password='$password' WHERE username='$username' AND password=(SELECT password FROM user WHERE username='$username' AND password='$password')";
	$query3="SELECT password FROM user WHERE username='$username' AND password='$password'";
	if($r=mysqli_query($con,$query3))
	{
		if(mysqli_num_rows($r)>0){
			echo "<h3>Logged in Successfully!</h3>";

		}
		if(mysqli_num_rows($r)==0){
		echo "<h3>Invalid Username or Password!</h3>";
	}
	
		
	}
	
}
?>