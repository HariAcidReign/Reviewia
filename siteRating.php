<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="Reviewia-Logo.png" type="image/x-icon">
        <title>Guest Ratings</title>
    </head>
    <body>
        <div class="min-w-screen min-h-screen bg-red-200">
            <div class="px-4 py-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-16">
                <div
                    class="flex flex-col max-w-screen-lg overflow-hidden bg-white border rounded-lg shadow-xl lg:flex-row sm:mx-auto ">
                    <div class="relative lg:w-1/2">
                        <img src="ratingImage.png" alt="logo" class="object-cover w-full lg:absolute h-80 lg:h-full pl-10" />
                    </div>
                    <div class="flex flex-col justify-center p-8 bg-white lg:p-16 lg:pl-10 lg:w-1/2">
                        <div>
                            <p
                                class="inline-block px-3 py-1 mb-4 text-xs font-medium tracking-wider text-purple-600 uppercase bg-red-200 rounded-full">
                                Loved us? Rate us!
                            </p>
                        </div>
                        <h5 class="mb-3 text-3xl font-extrabold leading-none sm:text-4xl">
                            Your feedback is valuable to us!
                        </h5>
                        <p class="py-5 mb-5 text-gray-800">
                            Give us a rating based on your experience with the site. We take user reviews very seriously, and 
                            it really helps us in improving the site experience.
                        </p>
                        <form action=siteRating.php method="post">
                        <div>
                            <div class="m-4 flex">
                                <input type="text" name="firstName" placeholder="First Name"  class="rounded-lg p-2 border mr-5  text-gray-800 border-red-400 bg-white outline-none"/>
                                <input type="text" name="lastname" placeholder="Last Name"  class="rounded-lg p-2 border mr-5 text-gray-800 border-red-400 bg-white outline-none"/>
                            </div>
                        </div>
                        <br/>
                        <div class="flex items-center">
                            <div>
                                <div class="m-4 flex">
                                    <input type="number" name="rating" min="1" max="10" step="0.5" class="rounded-l-lg p-3 border-t mr-0 border-b border-l text-gray-800 border-red-400 bg-white outline-none">
                                    <input type="submit" 
                                    class="px-8 rounded-r-lg bg-red-300 text-indigo-800 font-bold p-4 uppercase border-red-500 border-t border-b border-r"
                                    name="submit"
                                    value="Rate site">
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
mysqli_connect("localhost","root","") or die(mysqli_error());
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'regist') or die(mysqli_error());

if(isset($_POST['submit']))
{
    $fname=$_POST['firstName'];
    $lname=$_POST['lastname'];
    $rating=$_POST['rating'];

    $query="INSERT INTO guest(fname,lname,site_rating) VALUES('$fname','$lname','$rating')";
    if(mysqli_query($con,$query))
    {
        echo "<h3>Reviewed Successfully!</h3>";
    }
    else{
        echo "<h3>ERROR</h3>";
    }
    
}
?>