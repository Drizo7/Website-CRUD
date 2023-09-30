<?php  

session_start();
    $db = mysqli_connect('localhost', 'root', '', 'mibawa');
/*
    if ($db) {
    	echo "connected";
    }else{
    	echo "nt connected";
    }//verifying connection status*/

if (isset($_POST['fname']) && isset($_POST['lname'])  &&isset($_POST['zone']) && isset($_POST['card_No']) && isset($_POST['date'])){//check if variables are declared

	$First_name = $_POST['fname'];
	$last_name = $_POST['lname'];
	$Zone = $_POST['zone'];
	$CardNO=$_POST['card_No'];
	$Date=$_POST['date'];
	
	//assign php variables to html


	$s= "SELECT * from member_reg where firstname = '$First_name'";
	
	$result = mysqli_query($db,$s);
	
	$num=mysqli_num_rows($result);

	
	if($num ==1){//checks if records already exists
		
		echo"user already exists";
	}
	
	else{
		$reg = "INSERT into member_reg(D_id,firstname,lastname,Zone,card_number,Date) values(NULL,'$First_name','$last_name','$Zone','$CardNO','$Date')";//enters data into table
		//header('location:succ.php');//takes user to another page (succ)
		
		if (mysqli_query($db,$reg)) {
			header('location:succ2.php');// shows erros
		}else{
			echo "Not successful";
			echo mysqli_error($db);
		}

}
	}
?>