<?php
mysqli_connect("localhost","root","") or die(mysql_error());
  $con=mysqli_connect("localhost","root","");
  mysqli_select_db($con,'regist') or die(mysql_error());
  $name=$_GET["name"];
  $query1="SELECT * FROM package_details WHERE name='$name'";
  $query2="SELECT * FROM package_places WHERE name='$name'";
  $result1 = $con->query($query1);
  $result2 = $con->query($query2);
  
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
										Package Details 
									</h3>
									<br />
									<p class="text-lg text-gray-700">
										<strong>Package Name :</strong>'.$row["name"].'
									</p>
									<br />
									<p class="text-lg text-gray-700">
										<strong>Number of Days :</strong> '.$row["no_of_days"].'
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
								<br />
								
							</div>
						</div>
						<div class="w-2/3 ml-4 block">
							<div
								class="rounded-mb p-10 transition-all duration-150 bg-red-200  rounded-lg shadow-xl ease hover:shadow-2xl"
							>';
							echo'<h4
						class="relative z-20 text-5xl font-bold leading-none text-purple-500 xl:text-6xl sm:text-center lg:text-center"
					>
						
						<span class="text-green-700">Places</span>
					</h4><br/><br/>';
							while($row2=$result2->fetch_assoc()){
								echo'<div class="mt-3 mb-6 text-center">
								<a href="show.php?name='.$row2["places"].'"<h5 class="pb-2 text-xl  font-extrabold leading-6 text-red-600 hover:text-gray-700">'.$row2["places"].'</h5></a>
							</div>';
							}	
							echo '</div>
						</div>
					</div>
				</div>
			</div>
			<br />';
			

}
}

?>
</div>
		</div>
	</body>
</html>