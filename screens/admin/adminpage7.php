<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="Reviewia-Logo.png" type="image/x-icon">
        <title>Delete Ratings</title>
    </head>
    <body>
        <div class="min-w-screen min-h-screen bg-red-200">
            <div class="px-4 py-12 mx-auto  sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-16">
                <div
                    class="flex flex-col ml-10 items-center max-w-screen-lg bg-gray-200 overflow-hidden bg-white border rounded-lg shadow-xl lg:flex-row sm:mx-auto ">
                    
                    <div class="flex flex-col ml-20 justify-center p-8 bg-gray-200 lg:p-16 lg:pl-20 lg:w-1/2">
                        
                        <div class="flex  lg:pl-20 items-center justify-center">
                            
                    
                
                        </div>
                        <form action=adminpage7.php method="post">
                        
                        <br/>
                        <?php
          mysqli_connect("localhost","root","") or die(mysql_error());
          $con=mysqli_connect("localhost","root","");
          mysqli_select_db($con,'regist') or die(mysql_error());

            $query1="SELECT description FROM rates";
            $result1 = $con->query($query1);
              if ($result1->num_rows > 0) {
              $place="place";
              echo "<label class='text-xl '>Delete a rating:<br></label>";
                    echo "<br/>
                  <select class='inline-block'name='".$place."'>";
  // output data of each row
              while($row = $result1->fetch_assoc()) {
                $x=$row["description"];
                echo $row["description"];
              echo "<option class='inline-block' value='".$row["description"]."'>".$x."</option>";
              }
            echo"</optgroup>
            </select>";
          }
          
          
          
            
          
        else{
          echo "<h1>SOMETHING GONE WRONG</h1>";
        }
          ?>

          <div class=" items-center ml-10 mt-6">
            <input
              type="submit"
              name="submit"
              value="Delete"
              class="w-40 py-2 text-sm text-center ml-40  justify-center items-center text-white bg-indigo-600 rounded-md hover:bg-indigo-500"
            >
            
          </div>
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
  
  
  
  $rating=$_POST['place'];
  $query3="DELETE FROM rates WHERE description='$rating'";
  if(mysqli_query($con,$query3))
  {
    echo "<h3>Deleted Successfully!</h3>";
  }
  
}
?>