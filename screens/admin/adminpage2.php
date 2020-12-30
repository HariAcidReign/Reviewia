<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="Reviewia-Logo.png" type="image/x-icon">
    <title>Places details</title>
  </head>
  <body>
    <div class="min-w-screen min-h-screen bg-red-200">
      <div class="block">
                <div class="md:px-32 py-8 w-full"> 
                    <p class="text-center text-2xl text-gray-800">Hotel Details</p>
                    <br/>
                    <div class="shadow overflow-hidden rounded-lg border-b border-gray-200 hover:shadow-lg">
                      <?php
mysqli_connect("localhost","root","") or die(mysql_error());
  $con=mysqli_connect("localhost","root","");
  mysqli_select_db($con,'regist') or die(mysql_error());
  $query1="SELECT * FROM hotel_details NATURAL JOIN hotel_category";
  $result1 = $con->query($query1);
  if ($result1->num_rows > 0) {
  echo "<table class='min-w-full bg-white'>
                        <thead class='bg-red-500 text-white'>
                          <tr>
                            <th class='w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm'>Place-ID</th>
                            <th class='w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm'>Name</th>
                            <th class='w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm'>Location</th>
                            <th class='w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm'>Category</th>
                            <th class='w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm'>Cost</th>
                          </tr>
                        </thead>
                        <tbody class='text-gray-700'>";
  // output data of each row
  while($row = $result1->fetch_assoc()) {
    echo "<tr><td class='w-1/5 text-left py-3 px-4'>".$row["place_id"]."</td><td class='w-1/5 text-left py-3 px-4'>".$row["name"]."</td><td class='w-1/5 text-left py-3 px-4'>".$row["location"]."</td><td class='w-1/5 text-left py-3 px-4'>".$row["category"]."</td><td class='w-1/5 text-left py-3 px-4'>".$row["cost"]."</td></tr>";
  }
  echo "</tbody></table>";
} 
else {
  echo "0 results";
}
$conn = null;
?>
                    </div>
                  </div>
                  
                  
                  <div class="md:px-32 py-8 w-full"> 
                    <p class="text-center text-2xl text-gray-800">Attraction Details</p>
                    <br/>
                    <div class="shadow overflow-hidden rounded-lg border-b border-gray-200 hover:shadow-lg">
                      <?php
 $query2="SELECT * FROM attraction_details NATURAL JOIN attraction_category";
  $result2 = $con->query($query2);
  if ($result2->num_rows > 0) {
   echo "<table class='min-w-full bg-white'>
                        <thead class='bg-red-500 text-white'>
                          <tr>
                            <th class='w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm'>Place-ID</th>
                            <th class='w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm'>Name</th>
                            <th class='w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm'>Location</th>
                            <th class='w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm'>Category</th>
                            <th class='w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm'>Open-Time</th>
                            <th class='w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm'>Closing Time</th>
                          </tr>
                        </thead>
                        <tbody class='text-gray-700'>";
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    echo "<tr><td class='w-1/5 text-left py-3 px-4'>".$row["place_id"]."</td><td class='w-1/5 text-left py-3 px-4'>".$row["name"]."</td><td class='w-1/5 text-left py-3 px-4'>".$row["location"]."</td><td class='w-1/5 text-left py-3 px-4'>".$row["category"]."</td><td class='w-1/5 text-left py-3 px-4'>".$row["open_time"]."</td><td class='w-1/5 text-left py-3 px-4'>".$row["close_time"]."</td></tr>";
  }
  echo "</table>";
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