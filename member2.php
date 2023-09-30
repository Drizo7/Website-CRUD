<?php  

session_start();
    $db = mysqli_connect('localhost', 'root', '', 'mibawa');

    if ($db) {
    	echo "connected";
    }else{
    	echo "nt connected";
    }//verifying connection status

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['genDer']) && isset($_POST['D_o_b']) && isset($_POST['e_mail']) &&isset($_POST['phoneN'])){//check if variables are declared

	$First_name = $_POST['fname'];
	$last_name = $_POST['lname'];
	$Gender = $_POST['genDer'];
	$Birthday = $_POST['D_o_b'];
	$Email = $_POST['e_mail'];
	$Contact = $_POST['phoneN'];
	$password=$_POST['pas_word'];//assign php varibles to html


	$s= "SELECT * from driver_reg where firstname = '$First_name'";

	$result = mysqli_query($db,$s);
	
	$num=mysqli_num_rows($result);

	
	if($num ==1){//checks if records already exists
		
		echo"user already exists";
	}
	
	else{
		$reg = "INSERT into driver_reg(id,firstname,lastname,gender,Dob,email,phone,password) values(NULL,'$First_name','$last_name','$Gender','$Birthday','$Email','$Contact','$password')";//enters data into table
		

		
	}//enters data into the database 


}
	
?>