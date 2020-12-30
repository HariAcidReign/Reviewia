<?php  
mysqli_connect("localhost","root","") or die(mysql_error());
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,'regist') or die(mysql_error());  
 $number = count($_POST["name"]);  
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["name"][$i] != ''))  
           {  
           		$query="SELECT * FROM session";
           		$result=mysqli_query($con,$query);
           		$row=mysqli_fetch_row($result);
                $sql = "INSERT INTO package_places VALUES('".$row[0]."','".mysqli_real_escape_string($con, $_POST["name"][$i])."') ";  
                mysqli_query($con, $sql);  
           }  
      }
      echo "done!"; 
      $query1="DELETE FROM session";
      mysqli_query($con,$query1);
        
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?> 