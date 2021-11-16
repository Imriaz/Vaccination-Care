<!DOCTYPE html>
<html>
<head>
<title><?php echo  $_SESSION['vaccinationc']; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/profile-style.css">

    <link rel="stylesheet" type="text/css" href="profile.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&display=swap" rel="stylesheet">
    <Style>


</Style>
</head>
<body>






<?php
$user="root";
$password="";
$db="vaccinationc";
$conn= mysqli_connect("localhost", $user ,$password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT V_name, V_i_time, V_e_time, V_price, V_place, V_age FROM vaccinelist";
$result = $conn->query($sql);




if ($result->num_rows > 0) {
 
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " V_name: " . $row["V_name"]." " ." V_i_time: " . $row["V_i_time"]. " " . "V_e_time: " . $row["V_e_time"]." ".  "V_price: " . $row["V_price"]." "
    . "V_place: " . $row["V_place"]." " . "V_age: " . $row["V_age"]."<br> "   ;
  }
  
} else {
  echo "0 results";
}
$conn->close();
?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>