<?php
    session_start();
	
	if(isset($_SESSION['feedback_check']))
	{
		echo $_SESSION['feedback_check'];
		unset($_SESSION['feedback_check']);
    }
    /*if($_POST['user_Password']!==$_POST['confirmpassword']) {
        echo "Your passwords did not match";
        } else {
        // success page here
        }*/
?>

<Style>

Body {  
    
    font-family: Calibri, Helvetica, sans-serif;  
   
	background-image: url(image/p1.jpg);
	background-repeat: no-repeat; 
    background-size: cover; 
    
  }
 
.container button{
	background-color: #97afca;

}

</Style>



<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="bg-info">

	<div class="container">
		<div class="reg-form">
			<div class="card w-50 mt-5 mx-auto shadow">
				<div class="card-header">
					<center><h3>Feedback</h3></center>
				</div>
				<div class="card-body">
				<form action="feedbackinsert.php" method="post">
            <div class="container">
                <h1></h1>
                

                <input class="form-control mt-1" type="text"  name="name" placeholder="name">
				<input class="form-control mt-1"  type="email" name="email" placeholder="email">
				<input class="form-control mt-1"  type="text" name="Feedback" placeholder="Feedback">

                

				
                
               <center> <button type="submit">Feedback</button></center>
				</div>
				
				<div class="card-footer">
                <div class="container">
                <div class="child-reg-text mx-auto text center">

                <p>To Go Home<a href="index.html"><b>Here</b></a></p>

                </div>
                </div>
                </div>
                

        

			</div>
		</div>
	</div>

	





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</body>
</html>