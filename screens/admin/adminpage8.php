<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Reviewia-Logo.png" type="image/x-icon">
        <title>Delete a package</title>
  </head>
  <body>
    <div class="flex items-center justify-center h-screen bg-red-200 sm:px-6">
      
      <div class="w-full max-w-sm p-4 bg-gray-200 rounded-md shadow-md sm:p-6">
        <div class="flex items-center justify-center">
          <span class="text-xl  font-medium text-gray-900">Delete a Package</span>
        </div>
        <form action=adminpage8.php class="mt-4" method="post">

          <br>
          <?php
          mysqli_connect("localhost","root","") or die(mysql_error());
          $con=mysqli_connect("localhost","root","");
          mysqli_select_db($con,'regist') or die(mysql_error());

            $query1="SELECT * FROM package_details";
            $result1 = $con->query($query1);

              if ($result1->num_rows > 0) {
              $place="place";
              echo "<label>Choose a package to delete:<br></label><br>
                  <select name='".$place."'>";
  // output data of each row
              while($row = $result1->fetch_assoc()) {
                $x=$row["name"];
                echo $row["name"];
              echo "<option value='".$row["name"]."'>".$x."</option>";
              }
            echo"</optgroup>
            </select>";
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
  
  $name=$_POST['place'];
  $query5="DELETE FROM package_details WHERE name='$name'";
  mysqli_query($con,$query5);
  $query6="DELETE FROM package_places WHERE name='$name'";
  mysqli_query($con,$query6);
  
  
  
}
else{
    echo'here problem with setting';
  }
?>



