<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="Reviewia-Logo.png" type="image/x-icon">
    <title>User details</title>
  </head>
  <body>
    <div class="min-w-screen min-h-screen bg-red-200">
      <div class="block">
                <div class="md:px-32 py-8 w-full"> 
                    <p class="text-center text-2xl text-gray-800">User Details</p>
                    <br/>
                    <div class="shadow overflow-hidden rounded-lg border-b border-gray-200 hover:shadow-lg">
                      <?php
mysqli_connect("localhost","root","") or die(mysql_error());
  $con=mysqli_connect("localhost","root","");
  mysqli_select_db($con,'regist') or die(mysql_error());
  $query="SELECT * FROM user";
  $result = $con->query($query);
  if ($result->num_rows > 0) {
  echo " <table class='min-w-full bg-white'>
                        <thead class='bg-red-500 text-white'>
                          <tr>
                            <th class='w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm'>ID</th>
                            <th class='w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm'>Name</th>
                            <th class='w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm'>Location</th>
                            <th class='w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm'>Email-Id</th>
                            <th class='w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm'>Password</th>
                          </tr>
                        </thead>
                        <tbody class='text-gray-700'>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td class='w-1/5 text-left py-3 px-4'>".$row["user_id"]."</td><td class='w-1/5 text-left py-3 px-4'>".$row["fname"]." ".$row["lname"]."</td><td class='w-1/5 text-left py-3 px-4'>".$row["location"]."</td><td class='w-1/5 text-left py-3 px-4'>".$row["email_id"]."</td><td class='w-1/5 text-left py-3 px-4'>".$row["password"]."</td></tr>";
  }
  echo "</tbody>
        </table>";
} 

else {
  echo "0 results";
}
$conn = null;
?>
                    </div>
                  </div>
                </div>
        </div>
    </body>
</html>