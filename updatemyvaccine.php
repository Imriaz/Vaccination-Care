<?php
    session_start();
	
	if(isset($_SESSION['reg_check']))
	{
		echo $_SESSION['reg_check'];
		unset($_SESSION['reg_check']);
    }
    /*if($_POST['user_Password']!==$_POST['confirmpassword']) {
        echo "Your passwords did not match";
        } else {
        // success page here
        }*/
?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update My Vaccine</title>
<style>   
Body {  
    
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: #a19ae8;
  
}  
button {   
       background-color: #052c52;   
       width: 100%;  
        color: #e0deec;
        border-radius: 10px;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 400px ; 
        border-top-width: 80px; 
        border-radius: 10px;
       
    }   
 input[type=text], input[type=password], input[type=email] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px #dfeadf;   
        box-sizing: border-box;
        border-radius: 3px;
       
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }  
   
        
     
 .container {   
        padding: 500px;
        padding-top: 50px;
        background-image: url(image/bg.jpg);
	    background-repeat: no-repeat;
        background-size: cover;   
        
         
    }
 .container h1 {

        text-align: center;

   }  

  
  
</style> 
</head>
<body>
       
<header class="site-headers">
		<nav>
			
			<div class="Menu">
            <a class="navbar-brand" href="index.html"><h1><p style="color:white">Vaccination Care</p></h1></a>
				<ul>
					<li class="active"><a href="index.html"><i class="fa fa-home"></i>Home</a></i></li>
					<li><a href="#"><i class="fa fa-Gallary"></i>Gallary</a>
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
					<li><a href="index.html"><i class="fa fa-id-badge"></i>Logout</a>

                       

					</li>
					
				</ul>
			</div>
		</nav>


	</header>



    <div>
        <form action="updatemyvaccineinsert.php" method="POST">
            <div class="container">
                <h1>Update My Vaccine</h1>
                <p></p>
                <br>
                <label for="V_name"><b>Vaccine Name </b></label>
                <input type="text" name="V_name" placeholder="Enter your vaccine Name">
                

            
  <br>
  <br>
                <label for="Guardian_Phone"><b> Phone </b></label>
		        <input type="tel" id="phn" name="Guardian_Phone" value="+880"><br><br>
                <label for="V_strt_time"><b>Vaccine start Date </b></label>
               <input type="date" name="V_strt_time"><br><br>

                <label for="V_Dose"><b>Vaccine Dose</b></label>
                <select name="V_Dose" id="vaccine">
                 
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
                 <option value="6">6</option>
                
              </select>
              <br>
              <br>
                <label for="V_price"><b> Price </b></label>
                <input type="text" name="V_price" placeholder="Enter your Price"><br><br>
                <label for="V_place"><b> Place </b></label>
                <input type="text" name="V_place" placeholder="Enter your Place">


            

            

				
                
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</body>
</html>