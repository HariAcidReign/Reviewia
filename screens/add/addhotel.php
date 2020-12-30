<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="Reviewia-Logo.png" type="image/x-icon">
        <title>Add a Hotel</title>
	</head>
	<body>
		<div class="flex items-center justify-center h-screen bg-red-200 sm:px-6">
			
			<div class="w-full max-w-sm p-4 bg-gray-200 rounded-md shadow-md sm:p-6">
				<div class="flex items-center justify-center">
					<span class="text-xl  font-medium text-gray-900">Add hotel</span>
				</div>
				<form action=addhotel.php class="mt-4" method="post">
					<label for="place-id" class="block">
						<span class="text-sm text-gray-900">Hotel-ID</span>
						<input
							id="place-id"
							name="place-id"
							class="block  px-3 py-2 mt-1 text-gray-700 border rounded-md form-input focus:border-indigo-600"
							required
						/>
					</label>
					<label for="name" class="block">
						<span class="text-sm text-gray-900">Hotel Name</span>
						<input
							
							id="name"
							name="name"
							class="block w-full px-3 py-2 mt-1 text-gray-700 border rounded-md form-input focus:border-indigo-600"
							required
						/>
					</label>
					<label for="location" class="block">
						<span class="text-sm text-gray-900">Location</span>
						<input
							
							id="location"
							name="location"
							class="block w-full px-3 py-2 mt-1 text-gray-700 border rounded-md form-input focus:border-indigo-600"
							required
						/>
					</label>
					<label for="category" class="block">
						<span class="text-sm text-gray-900">Category</span><br>
						<input type="radio" id="national" name="category" value="National">
  						<label for="national">National</label><br>
  						<input type="radio" id="international" name="category" value="International">
  						<label for="international">International</label><br>
					</label>
						
					<label for="cost" class="block">
						<span class="text-sm text-gray-900">Cost</span>
						<input
							
							id="cost"
							name="cost"
							class="block w-full px-3 py-2 mt-1 text-gray-700 border rounded-md form-input focus:border-indigo-600"
							required
						/>
					</label>

					<div class="mt-6">
						<input
							type="submit"
							name="submit"
							class="w-full px-4 py-2 text-sm text-center text-white bg-indigo-600 rounded-md hover:bg-indigo-500"
						>
						
					</div>
					<br>
					<div>
							<a
								class="block text-sm text-indigo-700 fontme hover:underline"
								href="adminpage.php"
								>Go back</a
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
if(isset($_POST['submit']))
{
	
	$place_id=$_POST['place-id'];
	$name=$_POST['name'];
	$location=$_POST['location'];
	$category=$_POST['category'];
	$cost=$_POST['cost'];

	$query1="INSERT  INTO hotel_details VALUES('$place_id','$name','$location','$cost')";
	mysqli_query($con,$query1);
	$query2="INSERT  INTO hotel_category VALUES('$place_id','$location','$category')";
	mysqli_query($con,$query2);
	if($r=mysqli_query($con,$query1))
	{
		if($s=mysqli_query($con,$query2)){
			echo "<h3>Added Hotel Successfully!</h3>";
			

		}
		if(mysqli_num_rows($r)==0){
		echo "<h3>Something happened...!</h3>";
	}
	
		
	}
	
}
?>