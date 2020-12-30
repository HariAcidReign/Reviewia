<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="Reviewia-Logo.png" type="image/x-icon">
		<title></title>
	</head>
	<body>
		<div class="min-w-screen min-h-screen bg-gray-200">
		<?php
mysqli_connect("localhost","root","") or die(mysql_error());
  $con=mysqli_connect("localhost","root","");
  $name=$_GET["name"];
  mysqli_select_db($con,'regist') or die(mysql_error());
  $query1="SELECT * FROM hotel_details where name='$name'ORDER BY name";
  $result1 = $con->query($query1);
  $c=0;
  if ($result1->num_rows > 0) {
  echo'<br><h3
						class="relative z-20 text-5xl font-extrabold leading-none text-purple-500 xl:text-6xl sm:text-center lg:text-center"
					>
						
						<span class="text-green-700">Hotels</span>
					</h3>';
  while($row = $result1->fetch_assoc()) {
  	if ($c==0){
  		echo'<div class="my-8">
				<div class="max-w-xl px-4 mx-auto sm:px-6 lg:max-w-screen-xl lg:px-8">
					<div class="lg:grid lg:grid-cols-3 lg:gap-8">';
  	}
  	$c++;
    echo '
						<div
							class="p-16 transition-all duration-150 bg-red-200 rounded-lg shadow-xl ease hover:shadow-2xl"
						>
							<div class="mb-2 pb-2">
									<img src="".$row["name"].".jpg" class="w-30 rounded-lg justify-center" />
								</div>
							<div class="mt-3 mb-6 text-center">
								<h5 class="pb-2 text-xl font-extrabold leading-6 text-red-600">'.$row["name"].'</h5>
								
								<h6 class="pb-2 text-s  leading-6 text-gray-900">'.$row["location"].'</h6>
								<br />
								<button 
									class="text-red-500 bg-transparent border border-solid border-gray-900 hover:bg-blue-500 hover:text-white active:bg-red-600 font-bold uppercase px-8 py-3 rounded-full outline-none focus:outline-none mr-1 mb-1"
									type="button"
									style="transition: all 0.15s ease"
								><a href="show.php?name='.$row['name'].'">
									More Information
								</a></button>

							</div>
							</div>
						';
	if ($c==3){
		echo '</div>
						</div>
						</div>';
	$c=0;
	}
  }
  
}
echo '</div>
						</div>
						</div>'; 
$query2="SELECT * FROM attraction_details where name='$name' ORDER BY name";
  $result2 = $con->query($query2);
  $d=0;
  if ($result2->num_rows > 0) {
  echo'<br><h3
						class="relative z-20 text-5xl font-extrabold leading-none text-purple-500 xl:text-6xl sm:text-center lg:text-center"
					>
						
						<span class="text-blue-800">Attractions</span>
					</h3>';
  
  while($row = $result2->fetch_assoc()) {

  	if ($d==0){
  		echo'<div class="my-8">
				<div class="max-w-xl px-4 mx-auto sm:px-6 lg:max-w-screen-xl lg:px-8">
					<div class="lg:grid lg:grid-cols-3 lg:gap-8">';
  	}
  	$d++;
    echo '
						<div
							class="p-16 transition-all duration-150 bg-red-200 rounded-lg shadow-xl ease hover:shadow-2xl"
						>
							<div class="mb-2 pb-2">
									<img src="".$row["name"].".jpg" class="w-30 rounded-lg justify-center" />
								</div>
							<div class="mt-3 mb-6 text-center">
								<h5 class="pb-2 text-xl font-extrabold leading-6 text-red-600">'.$row["name"].'</h5>
								
								<h6 class="pb-2 text-s  leading-6 text-gray-900">'.$row["location"].'</h6>
								<br />
								<button 
									class="text-red-500 bg-transparent border border-solid border-gray-900 hover:bg-blue-500 hover:text-white active:bg-red-600 font-bold uppercase px-8 py-3 rounded-full outline-none focus:outline-none mr-1 mb-1"
									type="button"
									style="transition: all 0.15s ease"
								><a href="show.php?name='.$row['name'].'">
									More Information
								</a></button>

							</div>
							</div>
						';
	if ($d==3){
		echo '</div>
						</div>
						</div>';
	$d=0;
	}
  }
  
} 
else {
  echo "0 results";
}
$conn = null;
?>
</div>
</body>
</html>