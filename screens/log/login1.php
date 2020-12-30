<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="Reviewia-Logo.png" type="image/x-icon">
        <title>Login</title>
	</head>
	<body style ="background-image: url('Cool_Sky.jpg');">
		<div class="flex items-center justify-center h-screen  sm:px-6">
			<img src="Reviewia-Logo.png" class="px-10 rounded-lg" />
			<div class="w-full max-w-sm p-4 bg-red-100 rounded-md shadow-md sm:p-6">
				<div class="flex items-center justify-center">
					<span class="text-xl font-medium text-gray-900">Login</span>
				</div>
				<form action=login1.php class="mt-4" method="post">
					<label for="username" class="block">
						<span class="text-sm text-gray-700">Username</span>
						<input
							type="username"
							id="username"
							name="username"
							autocomplete="current-username"
							class="block w-full px-3 py-2 mt-1 text-gray-700 border rounded-md form-input focus:border-indigo-600"
							required
						/>
					</label>
					<label for="password" class="block mt-3">
						<span class="text-sm text-gray-700">Password</span>
						<input
							type="password"
							id="password"
							name="password"
							autocomplete="current-password"
							class="block w-full px-3 py-2 mt-1 text-gray-700 border rounded-md form-input focus:border-indigo-600"
							required
						/>
					</label>
					<div class="flex items-center justify-between mt-4">
						<div>
							<label class="inline-flex items-center">
								<input
									type="checkbox"
									class="text-indigo-600 border form-checkbox"
								/>
								<span class="mx-2 text-sm text-gray-600">Remember me</span>
							</label>
						</div>
						<div>
							<a
								class="block text-sm text-indigo-700 fontme hover:underline"
								href="home1.php"
								>Not a user? Register</a
							>
						</div>
					</div>
					<div class="mt-6">
						<input
							type="submit"
							name="submit"
							class="w-full px-4 py-2 text-sm text-center text-white bg-indigo-600 rounded-md hover:bg-indigo-500"
						>
						
					</div>
				</form>
			</div>
		</div>
	</body>
</html>




<?php
mysqli_connect("localhost","root","") or die(mysql_error());
  $con=mysqli_connect("localhost","root","");
  mysqli_select_db($con,'regist') or die(mysql_error());
  session_start();
if(isset($_POST['submit']))
{
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query1="INSERT  INTO login(username) VALUES('$username')";
	$query4="INSERT INTO session(user_id) VALUES('$username')";
	mysqli_query($con,$query1);
	$query2="UPDATE login SET password='$password' WHERE username='$username' AND password=(SELECT password FROM user WHERE username='$username' AND password='$password')";
	$query3="SELECT password FROM user WHERE user_id='$username' AND password='$password'";
	if($username=="admin" && $password=="amritavishwa"){
				header("Location: adminpage.php");
			}
	if($r=mysqli_query($con,$query3))
	{
		if(mysqli_num_rows($r)>0){

			mysqli_query($con,$query4);
			echo "<h3>Logged in Successfully!</h3>";
			$_SESSION['username']= $username;
			header("Location: loggedin.php");
			exit;	
		}
		if(mysqli_num_rows($r)==0){
		echo "<h3>Invalid Username or Password!</h3>";
	}
	
		
	}
	
}
else
	{
		echo "<h3>Invalid Username or Password!</h3>";

	}
?>