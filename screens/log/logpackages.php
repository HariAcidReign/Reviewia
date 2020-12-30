<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="Reviewia-Logo.png" type="image/x-icon">
		<title><?php 
						session_start();
						echo "".$_SESSION['username']."'s Home Page";
						$uname=$_SESSION['username'];
						?></title>
	</head>
	<body>
		<div class="min-w-screen min-h-screen bg-gray-200">
			<!-- Complete Navbar -->
			<header
				class="text-gray-700 body-font bg-white shadow-sm w-full border-t border-gray-100"
			>
				<div
					class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center"
				>
					<nav
						class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto"
					>
						
						<a href="about.html" class="mr-5 font-medium hover:text-gray-900">About</a>
						<a href="contact.html" class="font-medium hover:text-gray-900">Contact</a>
					</nav>
					<a
						class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0"
					>
					</a>
					<div
						class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0 h-full items-center"
					><a href="#"class="mr-5 font-medium hover:text-gray-900">
						<?php 
						echo "Hello,".$_SESSION['username']."!";
						?>
					</a>

						<button
							type="submit"
							name="submit1"
							class="bg-teal-500 text-white active:bg-teal-600 font-bold uppercase text-xs ml-5 px-4 py-2 rounded shadow hover:bg-teal-700 outline-none focus:outline-none transition-all duration-150 ease "
						><a href ="rates.php">Rate Now!</a></button>
						
						<button
							type="submit"
							name="submit1"
							class="bg-red-500 text-white active:bg-red-300 font-bold uppercase text-xs ml-5 px-4 py-2 rounded shadow hover:bg-red-700 outline-none focus:outline-none transition-all duration-150 ease "
						><a href ="main.php">Log Out</a></button>
					
				</div>
				</div>
			</header>
			<br >
			<!-- This is Reviewia and bottom text  -->
			<div
				class="flex flex-col items-center justify-center p-10 mx-auto lg:flex-row lg:max-w-6xl lg:p-0"
			>
				<div
					class="container relative z-20 flex flex-col w-full px-5 pb-1 pr-12 mb-16 text-2xl text-gray-700 lg:w-1/2 sm:px-0 md:px-10 sm:items-center lg:items-start lg:mb-0"
				>
					<h1
						class="relative z-20 text-5xl font-extrabold leading-none text-purple-500 xl:text-6xl sm:text-center lg:text-left"
					>
						This is <br class="md:hidden lg:block" />
						<span class="text-gray-800">Reviewia</span>
					</h1>
					<p
						class="relative z-20 block mt-6 text-base text-gray-600 xl:text-xl sm:text-center lg:text-left"
					>
						At Reviewia, our sole purpose is to help you find your next getaway.
						Choose between hundreds of places and package combos, either
						nationwide or international, make a decision comparing costs and
						checking out reviews, pack up your bags and GO !
					</p>
					
				</div>
				<!-- Rightside Image -->
				<div
					class="relative w-full px-5 rounded-lg cursor-pointer md:w-2/3 lg:w-1/2 group xl:px-0"
				>
					<div
						class="relative overflow-hidden rounded-md shadow-2xl cursor-pointer group"
					>
						<div
							class="absolute flex items-center justify-center w-full h-full"
						></div>
						<img
							src="bookingimage.png"
							class="z-10 object-cover w-full h-full"
						/>
					</div>
				</div>
			</div>
			<br />
			<!-- Center Buttons -->
			<div
				class="flex flex-col items-center justify-center p-10 mx-auto lg:flex-row lg:max-w-6xl lg:p-0"
			>
				<button
					class="text-pink-500 bg-transparent border border-solid border-pink-500 hover:bg-pink-500 hover:text-white active:bg-pink-600 font-bold uppercase px-8 py-3 rounded-full outline-none focus:outline-none mr-1 mb-1"
					type="button"
					style="transition: all 0.15s ease"
				><a href="loggedin.php">
					Go Back Home
				</a>
				</button>

				
				
			</div>


			<!-- Card components. 3 in each row. Should be updating as per addition/deletion of places -->
			<!-- This is first row card elements -->
			<?php
mysqli_connect("localhost","root","") or die(mysql_error());
  $con=mysqli_connect("localhost","root","");
  mysqli_select_db($con,'regist') or die(mysql_error());
  $query1="SELECT * FROM package_details ORDER BY name";
  $result1 = $con->query($query1);
  $c=0;
  if ($result1->num_rows > 0) {
  echo'<br><h3
						class="relative z-20 text-5xl font-extrabold leading-none text-purple-500 xl:text-6xl sm:text-center lg:text-center"
					>
						
						<span class="text-green-700">Packages</span>
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
								<em>Cost: Rs.'.$row["cost"].'</em><br>
								
								<br />
								<button 
									class="text-red-500 bg-transparent border border-solid border-gray-900 hover:bg-blue-500 hover:text-white active:bg-red-600 font-bold uppercase px-8 py-3 rounded-full outline-none focus:outline-none mr-1 mb-1"
									type="button"
									style="transition: all 0.15s ease"
								><a href="show1.php?name='.$row['name'].'">
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

$conn = null;
?>
</div>
</body>
</html>

