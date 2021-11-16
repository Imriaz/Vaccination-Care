<?php

        session_start();

        $user="root";
        $password="";
        $db="vaccinationc";
        $conn= mysqli_connect("localhost", $user ,$password, $db);
        mysqli_select_db($conn,$db);
        $Name=$_POST['V_name'];
        $Guardian_Phone=$_POST['Guardian_Phone'];
        $date=$_POST['V_strt_time'];
        $dose=$_POST['V_Dose'];
        $price=$_POST['V_price'];
        $place=$_POST['V_place'];
        
        

        $update= "insert into user_vaccine(V_name, Guardian_Phone, V_strt_time, V_Dose, V_price,V_place) values('$Name', '$Guardian_Phone', '$date', '$dose', '$price', '$place' )";
        $r = mysqli_query($conn,$update);

        if($r > 0)
        {
            $_SESSION['reg_check'] = 'Vaccination Update Successful';
		
            header('Location: profile.php');
        }
        else{
            die('Error in Vaccination update!!');
        }

?>  