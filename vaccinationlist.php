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
    <title>Vaccine Update</title>
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
        padding: 400px;
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
				
					<li><a href="index.html"><i class="fa fa-id-badge"></i>Logout</a>

                        

					</li>
					
				</ul>
			</div>
		</nav>


	</header>



    <div>
        <form action="vaccinatiinlistinsert.php" method="POST">
            <div class="container">
                <h1>Vaccination List</h1>
                <p></p>
                <br>
                <label for="V_name"><b>Vaccine Name </b></label>
                <input type="text" name="V_name" placeholder="Enter vaccine Name">
               
  <br>
  <br>

                <label for="V_i_time"><b>Vaccine start Age </b></label>
                <input type="text" name="V_i_time" placeholder="Enter vaccine Start Year" required><br>

                <label for="V_e_time"><b>Vaccine End Age</b></label>
                <input type="text" name="V_e_time" placeholder="Enter vaccine End Year" required><br>

                <label for="V_price"><b>Vaccine Price </b></label>
                <input type="text" name="V_price" placeholder="Enter vaccine Price" required><br><br>

                

                <label for="V_place"><b>Place :</b></label><br>
                <textarea name="V_place" cols="45" rows="3" placeholder="Enter vaccine Place" ></textarea><br><br>

               <label for="V_dose"><b>Vaccine Dose </b></label>
                <input type="text" name="V_dose" placeholder="Enter vaccine Dose" required><br><br>



               

            

            

            

				
                
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>