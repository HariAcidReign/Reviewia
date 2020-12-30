<?php
mysqli_connect("localhost","root","") or die(mysql_error());
  $con=mysqli_connect("localhost","root","");
  mysqli_select_db($con,'regist') or die(mysql_error());
  $name=$_GET["name"];
  $query1="SELECT * FROM hotel_details WHERE name='$name'";
  $query2="SELECT * FROM attraction_details WHERE name='$name'";
  $query3="SELECT ROUND(AVG(rating),1) as avg FROM rates WHERE place='$name'";
  $query4="SELECT contributor,rating,description FROM rates WHERE place='$name'";
  $result1 = $con->query($query1);
  $result2 = $con->query($query2);
  $result3 = $con->query($query3);
  $result4 = $con->query($query4);
  while($row1=$result3->fetch_assoc()){
  $x=$row1["avg"];
}
  if ($result1->num_rows > 0) 
  {	
  while($row = $result1->fetch_assoc()) 
  {
  	echo 
  	'
  	<!DOCTYPE html>
  	<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="Reviewia-Logo.png" type="image/x-icon">
        <title>'.$name.'</title>
	</head>
	<body>
		<div class="min-w-screen min-h-screen bg-gray-300">
			<div class="block">
				<div class="container px-4 py-4 mx-auto">
					<h3 class="block text-xl text-gray-700 font-semibold mb-3"></h3>
					<div class="flex">
						<div class="w-1/3">
							<div
								class="rounded-md p-6 transition-all duration-150 bg-red-200 rounded-lg shadow-xl ease hover:shadow-2xl"
							>
								<div class="mb-2 pb-2">
									<h3 class="font-semibold text-2xl text-red-500">
										Location Details
									</h3>
									<br />
									<p class="text-lg text-gray-700">
										<strong>Place Name :</strong>'.$row["name"].'
									</p>
									<br />
									<p class="text-lg text-gray-700">
										<strong>Location :</strong> '.$row["location"].'
									</p>
									<br />
									<p class="text-lg text-gray-700">
										<strong>Cost: </strong>Rs.'.$row["cost"].'
									</p>
									<br />
									<br />
									<br />
									<p class="text-lg text-gray-500"><em>Posted by admin</em></p>
								</div>
								<br />
								<br />';
								
  									
  									echo '<h3 class="font-semibold text-2xl text-red-500">
									Average ratings of Customers
								</h3>
								<h3 class="font-bold text-5xl text-yellow-500">'.$x.'</h3>
								<br />
								<p class="text-lg text-gray-500">
									<em>Genuine Ratings Guaranteed</em>
								</p>';
  									
  								
								
							echo'</div>
						</div>
						<div class="w-2/3 ml-4 block">
							<div
								class="rounded-md p-6 transition-all duration-150 bg-red-200 rounded-lg shadow-xl ease hover:shadow-2xl"
							>
								<div class="mb-2 pb-2">
									<img src="'.$name.'.jpg" class="w-auto  rounded-lg " />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br />';
			while($row2=$result4->fetch_assoc()){
				echo'<div class="container mx-auto px-0 sm:px-5">
				<!-- First comment -->
				<div
					class="flex-col border-r-2 border-b-2 border-gray-200 sm:px-4 sm:py-4 md:px-4 py-4 bg-white sm:rounded-lg sm:shadow-sm w-full md:w-2/3 mx-auto"
				>
					<div class="flex flex-row">
						<img
							class="h-12 w-12 border-2 border-gray-300 rounded-full object-cover"
							src="https://www.iconfinder.com/data/icons/light-ui-icon-set-1/130/avatar_2-512.png"
						/>
						<div class="flex-col mt-1">
							<div
								class="flex-1 px-4 font-bold flex items-center leading-tight"
							>
							'.$row2["contributor"].'
							</div>
							<p class="text-sm px-4 text-gray-500">
								<em>Rating Given :'.$row2["rating"].'</em>
							</p>

							<div
								class="flex-1 px-2 ml-2 text-gray-600 text-sm font-medium leading-loose"
							>
							'.$row2["description"].'
							</div>
						</div>
					</div>
					<div class="flex flex-row md-10 md:ml-16 pt-1">
						<div class="flex-col mt-1"></div>
					</div>
				</div>
				<br />';
			}

}
}
else{
	while($row = $result2->fetch_assoc()) 
  {
  	echo 
  	'
  	<!DOCTYPE html>
  	<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="Reviewia-Logo.png" type="image/x-icon">
        <title>'.$name.'</title>
	</head>
	<body>
		<div class="min-w-screen min-h-screen bg-gray-300">
			<div class="block">
				<div class="container px-4 py-4 mx-auto">
					<h3 class="block text-xl text-gray-700 font-semibold mb-3"></h3>
					<div class="flex">
						<div class="w-1/3">
							<div
								class="rounded-md p-6 transition-all duration-150 bg-red-200 rounded-lg shadow-xl ease hover:shadow-2xl"
							>
								<div class="mb-2 pb-2">
									<h3 class="font-semibold text-2xl text-red-500">
										Location Details
									</h3>
									<br />
									<p class="text-lg text-gray-700">
										<strong>Place Name :</strong>'.$row["name"].'
									</p>
									<br />
									<p class="text-lg text-gray-700">
										<strong>Location :</strong> '.$row["location"].'
									</p>
									<br />
									<p class="text-lg text-gray-700">
										<strong>Opening Time:</strong> '.$row["open_time"].'
									</p>
									<br />
									<p class="text-lg text-gray-700">
										<strong>Closing Time:</strong> '.$row["close_time"].'
									</p>
									<br />
									<br />
									<br />
									<p class="text-lg text-gray-500"><em>Posted by admin</em></p>
								</div>
								<br />
								<br />
								<h3 class="font-semibold text-2xl text-red-500">
									Average ratings of Customers
								</h3>
								<h3 class="font-bold text-5xl text-yellow-500">'.$x.'</h3>
								<br />
								<p class="text-lg text-gray-500">
									<em>Genuine Ratings Guaranteed</em>
								</p>
							</div>
						</div>
						<div class="w-2/3 ml-4 block">
							<div
								class="rounded-md p-6 transition-all duration-150 bg-red-200 rounded-lg shadow-xl ease hover:shadow-2xl"
							>
								<div class="mb-2 pb-2">
									<img src="'.$name.'.jpg" class="w-30 rounded-lg " />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<br />';
			while($row2=$result4->fetch_assoc()){
				echo'<div class="container mx-auto px-0 sm:px-5">
				<!-- First comment -->
				<div
					class="flex-col border-r-2 border-b-2 border-gray-200 sm:px-4 sm:py-4 md:px-4 py-4 bg-white sm:rounded-lg sm:shadow-sm w-full md:w-2/3 mx-auto"
				>
					<div class="flex flex-row">
						<img
							class="h-12 w-12 border-2 border-gray-300 rounded-full object-cover"
							src="https://www.iconfinder.com/data/icons/light-ui-icon-set-1/130/avatar_2-512.png"
						/>
						<div class="flex-col mt-1">
							<div
								class="flex-1 px-4 font-bold flex items-center leading-tight"
							>
							'.$row2["contributor"].'
							</div>
							<p class="text-sm px-4 text-gray-500">
								<em>Rating Given :'.$row2["rating"].'</em>
							</p>

							<div
								class="flex-1 px-2 ml-2 text-gray-600 text-sm font-medium leading-loose"
							>
							'.$row2["description"].'
							</div>
						</div>
					</div>
					<div class="flex flex-row md-10 md:ml-16 pt-1">
						<div class="flex-col mt-1"></div>
					</div>
				</div>
				<br />';
			}

}
}
?>
</div>
		</div>
	</body>
</html>