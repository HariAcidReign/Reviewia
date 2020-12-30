<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="Reviewia-Logo.png" type="image/x-icon">
        <title>Rate a place</title>
	</head>
	<body>
		<div class="flex items-center justify-center h-screen bg-red-200 sm:px-6">
			
			<div class="w-full max-w-sm p-4 bg-gray-200 rounded-md shadow-md sm:p-6">
				<div class="flex items-center justify-center">
					<span class="text-xl  font-medium text-gray-900">Describe and Rate A Place!</span>
				</div>
				<form action=rates.php class="mt-4" method="post">

					<br>
					<?php
					mysqli_connect("localhost","root","") or die(mysql_error());
					$con=mysqli_connect("localhost","root","");
					mysqli_select_db($con,'regist') or die(mysql_error());

						$query1="SELECT name FROM hotel_details";
						$result1 = $con->query($query1);
  						if ($result1->num_rows > 0) {
  						$place="place";
  						echo "<label>Choose a Place:</label>
  								<select name='".$place."'>";
  // output data of each row
  						while($row = $result1->fetch_assoc()) {
  							$x=$row["name"];
  							echo $row["name"];
    					echo "<option value='".$row["name"]."'>".$x."</option>";
  						}
  					
					}
					$query2="SELECT name FROM attraction_details";
					$result2 = $con->query($query2);
					if ($result2->num_rows > 0) {
						while($row = $result2->fetch_assoc()) {
  							$x=$row["name"];
    					echo "<option value='".$row["name"]."'>".$x."</option>";
  						}
  					echo"</optgroup>
  					</select>";
  				}
				else{
					echo "<h1>SOMETHING GONE WRONG</h1>";
				}
					?>
					<br>
					<label for="rating" class="block">
						<span class="text-sm text-gray-900">Rating</span>
						<div class="rating_scale ">
  						<label>
    					<input type="radio" class="ml-3 mr-1" name="rad"/value=1><span>1</span>
  						</label>
 						<label>
    					<input type="radio" class="ml-3 mr-1" name="rad"/value=2><span>2</span>
  						</label>
  						<label>
    					<input type="radio" class="ml-3 mr-1" name="rad"/value=3><span>3</span>
  						</label>
  						<label>
    					<input type="radio" class="ml-3 mr-1" name="rad"/value=4><span>4</span>
  						</label>
  						<label>
    					<input type="radio" class="ml-3 mr-1" name="rad"/value=5><span>5</span>
  						</label>
  					</div>
  				</label>
					<label for="cost" class="block">
						<span class="text-sm text-gray-900">Description</span>
						<textarea
							
							id="desc"
							name="desc"
							class="block w-full px-3 py-2 mt-1 text-gray-700 border rounded-md form-input focus:border-indigo-600"
							required
						></textarea>
					</label>

					<div class="mt-6">
						<input
							type="submit"
							name="submit"
							class="w-full px-4 py-2 text-sm text-center text-white bg-indigo-600 rounded-md hover:bg-indigo-500"
						>
						
					</div>
					<br/>
					<div class="align-center">
							<a
								class="block text-sm text-indigo-900  fontme hover:underline"
								href="loggedin.php"
								>Go back home</a
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
	$query2="SELECT * FROM session";
	$result2 = $con->query($query2);
	$row1=$result2->fetch_assoc();
	$user=$row1["user_id"];
	$place=$_POST['place'];
	$rating=$_POST['rad'];
	$desc=$_POST['desc'];
	$query3="INSERT INTO rates(place,rating,description,contributor) VALUES('$place','$rating','$desc','$user')";
	if(mysqli_query($con,$query3))
	{
		echo "<h3>Registered Successfully!</h3>";
	}
	
}
?>



