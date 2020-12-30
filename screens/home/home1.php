<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="Reviewia-Logo.png" type="image/x-icon">
		<title>Register</title>
		
	</head>
	<body style ="background-image: url('Cool_Sky.jpg'); ">
		<div class="flex p-1 py-12  place-content-center shadow-lg" >
			<div class="max-w-lg overflow-hidden border bg-white border-gray-200 rounded-lg">
				
				<div class="flex items-center justify-center bg-white">

					<span class="text-xl py-5 font-medium bg-white text-gray-900">Register</span>
				</div>
				<form action=home1.php class="w-full max-w-lg bg-white" method="post">
					<div class="p-10 pb-6">
						<div class="flex flex-wrap mb-6 -mx-3">
							<div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
								<label
									class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
									for="grid-first-name"
								>
									First Name
								</label>
								<input
									class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white"
									id="grid-first-name"
									name="fname"
									type="text"
									placeholder="Hariharan"
								/>
							</div>
							<div class="w-full px-3 md:w-1/2">
								<label
									class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
									for="grid-last-name"
								>
									Last Name
								</label>
								<input
									class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
									id="grid-last-name"
									name="lname"
									type="text"
									placeholder="Iyer"
								/>
							</div>
						</div>
						<div class="flex flex-wrap mb-6 -mx-3">
							<div class="w-full px-3 mb-6">
								<label
									class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
									for="grid-email"
								>
									Email
								</label>
								<input
									class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
									id="grid-email"
									name="email"
									type="email"
									placeholder="haran465@gmail.com"
								/>
							</div>
							<div class="w-full px-3 mb-6">
								<label
									class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
									for="grid-username"
								>
									Username
								</label>
								<input
									class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
									id="grid-username"
									type="username"
									name="uname"
									placeholder="acidreign"
								/>
							</div>

							<div class="w-full px-3 mb-6">
								<label
									class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase"
									for="grid-password"
								>
									Password
								</label>
								<input
									class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
									id="grid-password"
									name="psw"
									type="password"
									placeholder="***********"
								/>
							</div>
						</div>

						<label class="block mt-4 mb-6">
							<span class="font-bold text-gray-700">Location</span>
							<textarea
								name="location"
								class="block w-full px-4 py-3 mt-1 mb-3 text-gray-700 bg-gray-200 border border-gray-200 rounded form-textarea focus:outline-none"
								rows="3"
							></textarea>
						</label>
					</div>
					<div
						class="flex items-center justify-between p-5 text-center bg-gray-200"
					>
						<div class="relative flex flex-col items-start mr-1 text-sm">
							<span class="mr-1 text-gray-500">Already have an account?</span>
							<a href="login1.php" class="block font-medium text-indigo-600 underline"
								>Login Here</a
							>
						</div>
						<input
							type="submit"
							class="inline-flex items-center px-6 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700"
							name="signup"
							value="Sign Up"
							
						>
					</div>
				</form>
			</div>
		
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

	$query="INSERT INTO user(user_id,fname,lname,location,email_id,password) VALUES('$username','$fname','$lname','$location','$email_id','$password')";
	if(mysqli_query($con,$query))
	{
		echo "<h3>Registered Successfully!</h3>";
	}
	else{
		echo "<h3>ERROR</h3>";
	}
	
}
?>