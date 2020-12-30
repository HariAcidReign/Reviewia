<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="Reviewia-Logo.png" type="image/x-icon">
        <title>Admin Portal</title>
    </head>
	<body>
		<div class="min-w-screen min-h-screen bg-teal-100">
			<!-- Complete Navbar -->
			<header
				class="text-gray-700 body-font bg-white shadow-sm w-full border-t border-gray-100"
			>
				<div
					class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center"
				>
					
					<a
						class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0"
					>
					</a>
					<div
						class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0 h-full items-center"
					>
						<a
							href="addpackage.php"
							class="bg-purple-500 text-white active:bg-teal-600 font-bold uppercase text-xs ml-10 px-4 py-2 rounded shadow hover:bg-blue-700 outline-none focus:outline-none transition-all duration-150 ease"
						>
							Add Packages
						</a>
						<a
							href="addhotel.php"
							class="bg-yellow-500 text-white active:bg-teal-600 font-bold uppercase text-xs ml-10 px-4 py-2 rounded shadow hover:bg-yellow-700 outline-none focus:outline-none transition-all duration-150 ease"
						>
							Add Hotels
						</a>
						<a
							href="addattraction.php"
							class="bg-blue-500 text-white active:bg-teal-600 font-bold uppercase text-xs ml-10 px-4 py-2 rounded shadow hover:bg-blue-700 outline-none focus:outline-none transition-all duration-150 ease"
						>
							Add Attractions
						</a>

						
						
					</div>
					<div
				class="flex flex-col items-center justify-end p-10 mx-auto lg:flex-row lg:max-w-6xl lg:p-0"
			>
			<a
							href="main.php"
							class="bg-red-500 text-white active:bg-teal-600 font-bold uppercase text-xs ml-40 px-4 py-2 rounded shadow hover:bg-red-700 outline-none focus:outline-none transition-all duration-150 ease"
						>
							Log Out
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
						class="relative z-20 text-5xl font-extrabold leading-none text-pink-500 xl:text-6xl sm:text-center lg:text-left"
					>
					Welcome to <br class="md:hidden lg:block" />
						<span class="text-gray-800">Reviewia portal,admin!</span>
					</h1>
					<p
						class="relative z-20 block mt-6 text-base text-gray-600 xl:text-xl sm:text-center lg:text-left"
					>
						To strive for excellent customer satisfaction<br>To work and not labour
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
			<br>
			<br>
			<br>
			<div
				class="flex flex-col items-center justify-center p-10 mx-auto lg:flex-row lg:max-w-6xl lg:p-0"
			>
				<a href="adminpage1.php">
					<input
					class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-400 hover:text-white active:bg-pink-600 font-bold uppercase px-8 py-3 ml-10 rounded-full outline-none focus:outline-none mr-1 mb-1"
					type="submit"
					name="submit"
					value="View Users"
					style="transition: all 0.15s ease"
				>
				</a>	
				
			
				<a href="adminpage2.php">
					<input
					class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-400 hover:text-white active:bg-pink-600 font-bold uppercase px-8 py-3 ml-10 rounded-full outline-none focus:outline-none mr-1 mb-1"
					type="submit"
					name="submit"
					value="View Places"
					style="transition: all 0.15s ease"
				>
				</a>	
				
			
				
				<button
					class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-400 hover:text-white active:bg-pink-600 font-bold uppercase px-2 py-3 ml-10 rounded-full outline-none focus:outline-none mr-1 mb-1"
					type="button"
					style="transition: all 0.15s ease"
				><a href ="adminpage3.php">
					View User Ratings
				</a></button>

				<button
					class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-400 hover:text-white active:bg-pink-600 font-bold uppercase px-2 py-3 ml-10 rounded-full outline-none focus:outline-none mr-1 mb-1"
					type="button"
					style="transition: all 0.15s ease"
				><a href ="adminpage9.php">
					View Guest Site Ratings
				</a></button>

				<a href="adminpage4.php">
					<input
					class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-400 hover:text-white active:bg-pink-600 font-bold uppercase px-8 py-3 ml-10 rounded-full outline-none focus:outline-none mr-1 mb-1"
					type="submit"
					name="submit"
					value="View Packages"
					style="transition: all 0.15s ease"
				>
				</a>
			</div>

			<br>
			<br>
			<br>
			<div
				class="flex flex-col items-center justify-center p-10 mx-auto lg:flex-row lg:max-w-6xl lg:p-0"
			>
				<a href="adminpage5.php">
					<input
					class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-400 hover:text-white active:bg-pink-600 font-bold uppercase px-8 py-3 ml-10 rounded-full outline-none focus:outline-none mr-1 mb-1"
					type="submit"
					name="submit"
					value="Delete Users"
					style="transition: all 0.15s ease"
				>
				</a>	
				
			
				<a href="adminpage6.php">
					<input
					class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-400 hover:text-white active:bg-pink-600 font-bold uppercase px-8 py-3 ml-10 rounded-full outline-none focus:outline-none mr-1 mb-1"
					type="submit"
					name="submit"
					value="Delete Places"
					style="transition: all 0.15s ease"
				>
				</a>	
				
			
				
				<button
					class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-400 hover:text-white active:bg-pink-600 font-bold uppercase px-8 py-3 ml-10 rounded-full outline-none focus:outline-none mr-1 mb-1"
					type="button"
					style="transition: all 0.15s ease"
				><a href ="adminpage7.php">
					Delete Guest Ratings
				</a></button>

				<a href="adminpage8.php">
					<input
					class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-400 hover:text-white active:bg-pink-600 font-bold uppercase px-8 py-3 ml-10 rounded-full outline-none focus:outline-none mr-1 mb-1"
					type="submit"
					name="submit"
					value="Delete Packages"
					style="transition: all 0.15s ease"
				>
				</a>
			</div>

			<!-- Card components. 3 in each row. Should be updating as per addition/deletion of places -->
			<!-- This is first row card elements -->
			
			<!-- Body ends here     -->
		</div>
	</body>
</html>