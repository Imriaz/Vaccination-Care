<?php

        session_start();

        $user="root";
        $password="";
        $db="vaccinationc";
        $conn= mysqli_connect("localhost", $user ,$password, $db);
        mysqli_select_db($conn,$db);
        $name=$_POST['name'];
        $email=$_POST['email'];
        $feedback=$_POST['Feedback'];
       

        $fb= "insert into feedback(name, email, Feedback ) values('$name', '$email', '$feedback' )";
        $r = mysqli_query($conn, $fb);

        if($r > 0)
        {
            $_SESSION['feedback_check'] = 'Feedback Successful';
		
            header('Location: feedback.php');
        }
        else{
            die('Error in Feedback!!');
        }

?>  








