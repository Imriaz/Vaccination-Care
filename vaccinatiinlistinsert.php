<?php

        session_start();

        $user="root";
        $password="";
        $db="vaccinationc";
        $conn= mysqli_connect("localhost", $user ,$password, $db);
        mysqli_select_db($conn,$db);
        $Name=$_POST['V_name'];
        $Vi_time=$_POST['V_i_time'];
        $Ve_time=$_POST['V_e_time'];
        $Vprice=$_POST['V_price'];
        $cPlace=$_POST['V_place'];
        $Vdose=$_POST['V_dose'];
        
        

        $registration= "insert into vaccinelist(V_name, V_i_time, V_e_time, V_price, V_place, V_dose) values('$Name', '$Vi_time', '$Ve_time', '$Vprice', '$cPlace', '$Vdose' )";
        $r = mysqli_query($conn,$registration);

        if($r > 0)
        {
            $_SESSION['reg_check'] = 'Vaccination Add Successful';
		
            header('Location: vaccinationlist.php');
        }
        else{
            die('Error in Vaccination Add!!');
        }

?>  