<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css">
		<link rel="icon" href="Reviewia-Logo.png" type="image/x-icon">
		<title>Home</title>
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
						
						<a href="#_" class="mr-5 font-medium hover:text-gray-900">About</a>
						<a href="#_" class="font-medium hover:text-gray-900">Contact</a>
						<a href="siteRating.php" class="bg-pink-500 ml-5 text-white active:bg-teal-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:bg-teal-700 outline-none focus:outline-none transition-all duration-150 ease"> Rate our site!</a>
					</nav>
					<a
						class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0"
					>
					</a>
					<div
						class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0 h-full items-center"
					>
						<a href="login1.php"class="mr-5 font-medium hover:text-gray-900">Login</a>
						<a
							href="home1.php"
							class="bg-teal-500 text-white active:bg-teal-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:bg-teal-700 outline-none focus:outline-none transition-all duration-150 ease"
						>
							Sign Up
						</a>
					</div>
				</div>
			</header>
			<br />
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
					<div class="relative flex mt-4">
						<a
							href="#_"
							class="flex items-center justify-center self-start px-5 py-3 border border-transparent text-base leading-tight font-medium rounded-lg shadow text-white bg-purple-400 hover:bg-green-300 focus:outline-none transition duration-150 ease-in-out md:py-4 md:text-lg md:px-8 mt-5"
							>Combo Packages</a
						>
						<a
							href="#_"
							class="flex items-center justify-center self-start px-5 py-3 border-transparent text-base leading-tight font-medium rounded-lg shadow bg-gray-200 hover:bg-white focus:outline-none focus:border-gray-100 focus:shadow-outline-gray transition duration-150 ease-in-out md:py-4 md:text-lg md:px-8 mt-5 ml-5"
							>Places</a
						>
					</div>
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
				>
					National
				</button>

				<button
					class="text-pink-500 bg-transparent border border-solid border-pink-500 hover:bg-pink-500 hover:text-white active:bg-pink-600 font-bold uppercase px-8 py-3 rounded-full outline-none focus:outline-none mr-1 mb-1"
					type="button"
					style="transition: all 0.15s ease"
				>
					International
				</button>
			</div>

			<!-- Card components. 3 in each row. Should be updating as per addition/deletion of places -->
			<!-- This is first row card elements -->
			<div class="my-8">
				<div class="max-w-xl px-4 mx-auto sm:px-6 lg:max-w-screen-xl lg:px-8">
					<div class="lg:grid lg:grid-cols-3 lg:gap-8">
						<div
							class="p-16 transition-all duration-150 bg-red-200 rounded-lg shadow-xl ease hover:shadow-2xl"
						>
							<div
								class="relative inline-flex items-center justify-center w-auto h-auto overflow-hidden text-white rounded"
							>
								<img
									class="card-img-top"
									src="https://bit.ly/35raqC6"
									alt="Taj Mahal"
								/>
							</div>
							<div class="mt-3 mb-6 text-center">
								<h5 class="pb-2 text-xl font-extrabold leading-6 text-red-600">
									Taj Mahal
								</h5>
								<p class="mt-1 text-base font-semibold leading-6 text-gray-700">
									Average rating : 4.5
								</p>
								<p class="mt-1 text-base font-semibold leading-6 text-gray-800">
									Cost of Entry : Rs.350
								</p>
								<br />
								<button 
									class="text-red-500 bg-transparent border border-solid border-gray-900 hover:bg-blue-500 hover:text-white active:bg-red-600 font-bold uppercase px-8 py-3 rounded-full outline-none focus:outline-none mr-1 mb-1"
									type="button"
									style="transition: all 0.15s ease"
								><a href="show.html">
									More Information
								</a></button>
							</div>
						</div>
						<div
							class="p-16 transition-all duration-150 bg-red-200 rounded-lg shadow-xl ease hover:shadow-2xl"
						>
							<div
								class="relative inline-flex items-center justify-center w-auto h-auto overflow-hidden text-white rounded"
							>
								<img
									class="card-img-top"
									src="https://bit.ly/35raqC6"
									alt="Taj Mahal"
								/>
							</div>
							<div class="mt-3 mb-6 text-center">
								<h5 class="pb-2 text-xl font-extrabold leading-6 text-red-600">
									Taj Mahal
								</h5>
								<p class="mt-1 text-base font-semibold leading-6 text-gray-700">
									Average rating : 4.5
								</p>
								<p class="mt-1 text-base font-semibold leading-6 text-gray-800">
									Cost of Entry : Rs.350
								</p>
								<br />
								<button
									class="text-red-500 bg-transparent border border-solid border-gray-900 hover:bg-blue-500 hover:text-white active:bg-red-600 font-bold uppercase px-8 py-3 rounded-full outline-none focus:outline-none mr-1 mb-1"
									type="button"
									style="transition: all 0.15s ease"
								>
									More Information
								</button>
							</div>
						</div>
						<div
							class="p-16 transition-all duration-150 bg-red-200 rounded-lg shadow-xl ease hover:shadow-2xl"
						>
							<div
								class="relative inline-flex items-center justify-center w-auto h-auto overflow-hidden text-white rounded"
							>
								<img
									class="card-img-top"
									src="https://bit.ly/35raqC6"
									alt="Taj Mahal"
								/>
							</div>
							<div class="mt-3 mb-6 text-center">
								<h5 class="pb-2 text-xl font-extrabold leading-6 text-red-600">
									Taj Mahal
								</h5>
								<p class="mt-1 text-base font-semibold leading-6 text-gray-700">
									Average rating : 4.5
								</p>
								<p class="mt-1 text-base font-semibold leading-6 text-gray-800">
									Cost of Entry : Rs.350
								</p>
								<br />
								<button
									class="text-red-500 bg-transparent border border-solid border-gray-900 hover:bg-blue-500 hover:text-white active:bg-red-600 font-bold uppercase px-8 py-3 rounded-full outline-none focus:outline-none mr-1 mb-1"
									type="button"
									style="transition: all 0.15s ease"
								>
									More Information
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- First row card elements end here -->

			<!-- This is second row card elements -->
			<div class="my-8">
				<div class="max-w-xl px-4 mx-auto sm:px-6 lg:max-w-screen-xl lg:px-8">
					<div class="lg:grid lg:grid-cols-3 lg:gap-8">
						<div
							class="p-16 transition-all duration-150 bg-red-200 rounded-lg shadow-xl ease hover:shadow-2xl"
						>
							<div
								class="relative inline-flex items-center justify-center w-auto h-auto overflow-hidden text-white rounded"
							>
								<img
									class="card-img-top"
									src="https://bit.ly/35raqC6"
									alt="Taj Mahal"
								/>
							</div>
							<div class="mt-3 mb-6 text-center">
								<h5 class="pb-2 text-xl font-extrabold leading-6 text-red-600">
									Taj Mahal
								</h5>
								<p class="mt-1 text-base font-semibold leading-6 text-gray-700">
									Average rating : 4.5
								</p>
								<p class="mt-1 text-base font-semibold leading-6 text-gray-800">
									Cost of Entry : Rs.350
								</p>
								<br />
								<button
									class="text-red-500 bg-transparent border border-solid border-gray-900 hover:bg-blue-500 hover:text-white active:bg-red-600 font-bold uppercase px-8 py-3 rounded-full outline-none focus:outline-none mr-1 mb-1"
									type="button"
									style="transition: all 0.15s ease"
								>
									More Information
								</button>
							</div>
						</div>
						<div
							class="p-16 transition-all duration-150 bg-red-200 rounded-lg shadow-xl ease hover:shadow-2xl"
						>
							<div
								class="relative inline-flex items-center justify-center w-auto h-auto overflow-hidden text-white rounded"
							>
								<img
									class="card-img-top"
									src="https://bit.ly/35raqC6"
									alt="Taj Mahal"
								/>
							</div>
							<div class="mt-3 mb-6 text-center">
								<h5 class="pb-2 text-xl font-extrabold leading-6 text-red-600">
									Taj Mahal
								</h5>
								<p class="mt-1 text-base font-semibold leading-6 text-gray-700">
									Average rating : 4.5
								</p>
								<p class="mt-1 text-base font-semibold leading-6 text-gray-800">
									Cost of Entry : Rs.350
								</p>
								<br />
								<button
									class="text-red-500 bg-transparent border border-solid border-gray-900 hover:bg-blue-500 hover:text-white active:bg-red-600 font-bold uppercase px-8 py-3 rounded-full outline-none focus:outline-none mr-1 mb-1"
									type="button"
									style="transition: all 0.15s ease"
								>
									More Information
								</button>
							</div>
						</div>
						<div
							class="p-16 transition-all duration-150 bg-red-200 rounded-lg shadow-xl ease hover:shadow-2xl"
						>
							<div
								class="relative inline-flex items-center justify-center w-auto h-auto overflow-hidden text-white rounded"
							>
								<img
									class="card-img-top"
									src="https://bit.ly/35raqC6"
									alt="Taj Mahal"
								/>
							</div>
							<div class="mt-3 mb-6 text-center">
								<h5 class="pb-2 text-xl font-extrabold leading-6 text-red-600">
									Taj Mahal
								</h5>
								<p class="mt-1 text-base font-semibold leading-6 text-gray-700">
									Average rating : 4.5
								</p>
								<p class="mt-1 text-base font-semibold leading-6 text-gray-800">
									Cost of Entry : Rs.350
								</p>
								<br />
								<button
									class="text-red-500 bg-transparent border border-solid border-gray-900 hover:bg-blue-500 hover:text-white active:bg-red-600 font-bold uppercase px-8 py-3 rounded-full outline-none focus:outline-none mr-1 mb-1"
									type="button"
									style="transition: all 0.15s ease"
								>
									More Information
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Second Row card elements end here -->

			<!-- Body ends here     -->
		</div>
	</body>
</html>




<?php
						   mysqli_connect("localhost","root","") or die(mysql_error());
						   $con=mysqli_connect("localhost","root","");
					       mysqli_select_db($con,'regist') or die(mysql_error());
					       $query1="DELETE FROM session";
					       mysqli_query($con,$query1);
					       ?>