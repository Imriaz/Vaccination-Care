<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>

   <!-------------Bar Start-------------->
  <header class="site-headers">
    <nav>
      
      <div class="Menu">
      <a class="navbar-brand" href="index.html"><h1><p style="color:white">Vaccination Care</p></h1></a>
        <ul>
        
          <li class="active"><a href="index.html"><i class="fa fa-home"></i>Home</a></i></li>
          <li><a href="#"><i class="fa fa-picture-o"></i>Gallary</a>
            <div class="sub-menu-1">
              <ul>

                <li><a href="photos.html">Photos</a></li>
                <li><a href="videos.html">Videos</a></li>
                


              </ul>
              
            </div>



          </li>
          <li><a href="vaccinelistread.php"><i class="fa fa-home"></i>Campaign</a></li>
          <li><a href="about.html"><i class="fa fa-user"></i>About</a></li>
          <li><a href="feedback.php"><i class="fa fa-phone"></i>Contact</a></li>
          <li><a href="#"><i class="fa fa-id-badge"></i>My Account</a>

                        <div class="sub-menu-1">
              <ul>

                <li><a href="login.php">Login</a></li>
                <li><a href="registration.php">SignUp</a></li>


              </ul>
              
            </div>

          </li>
          
        </ul>
      </div>
    </nav>

  <title>Campaign</title>
  <center><h1>Campaign</h1></center><br>
</header>
</body>
 <style>
  body{
    width: 100%;
  height: 100vh;
  background:  linear-gradient(57deg, #aed0d0, #81858e);
  }
  table {
    border-collapse: collapse;
    width: 90%;
    color: black;
    font-family: monospace;
    font-size: 25px;
    text-alignL: left;
  }

  th {
    background-color: #588c7e;
    color: white;
  }

  tr:nth-child(odd) {background-color: #f2f2f2}
</style>
</head>
<body>

<table>
   <tr>
      <td><b>Name</b></td>
      <td><b>Start Year</b></td>
      <td><b>End Year</b></td>
      <td><b>Price</b></td>
      <td><b>Place</b></td>
      <td><b>Dose</b></td>

    </tr>
    <?php

    $conn = mysqli_connect("localhost", "root", "", "vaccinationc");
    if($conn-> connect_error){
        die("Connection failed :". $conn-> connect_error);
    }

    $sql = "SELECT V_name, V_i_time, V_e_time, V_price, V_place, V_dose from vaccinelist ";
    $result = $conn-> query($sql);

    if($result-> num_rows > 0){
        while ($row = $result-> fetch_assoc()){
            echo "<tr><td>" . $row["V_name"] . "</td><td>" . $row["V_i_time"] . "</td><td>" . $row["V_e_time"] . 
            "</td><td>" . $row["V_price"] . "</td><td>" . $row["V_place"] . "</td><td>" . $row["V_dose"] . "</td></tr>";
        }
        echo "</table>";
    }
    else {
        echo " 0 result";
    }

     $conn-> close();
    ?>


</table>
</body>
</html>