<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Reviewia-Logo.png" type="image/x-icon">
        <title>Delete a place</title>
  </head>
  <body>
    <div class="flex items-center justify-center h-screen bg-red-200 sm:px-6">
      
      <div class="w-full max-w-sm p-4 bg-gray-200 rounded-md shadow-md sm:p-6">
        <div class="flex items-center justify-center">
          <span class="text-xl  font-medium text-gray-900">Delete a place</span>
        </div>
        <form action=adminpage6.php class="mt-4" method="post">

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
                href="adminpage.php"
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
if(isset($_POST['submit']))
{
  
  $place=$_POST['place'];
  $query3="DELETE FROM hotel_details WHERE name='$place'";
  $query4="DELETE FROM hotel_category WHERE name='$place'";
  $query5="DELETE FROM rates WHERE place='$place'";
  $query6="DELETE FROM package_places WHERE places='$place'";
  $query7="DELETE FROM attraction_details WHERE name='$place'";
  $query8="DELETE FROM attraction_category WHERE name='$place'";
  if((mysqli_query($con,$query3))&(mysqli_query($con,$query4))&(mysqli_query($con,$query5))&(mysqli_query($con,$query6)))
  {
    echo "<h3>Registered Successfully!</h3>";
  }
  else{
    if(mysqli_query($con,$query3)&mysqli_query($con,$query4)){
      echo "<h3>Registered Successfully!</h3>";
    }
  }
  
}
?>



