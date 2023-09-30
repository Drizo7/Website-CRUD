<?php  

session_start();
    $db = mysqli_connect('localhost', 'root', '', 'mibawa');//connecting to the server


// mssql_select_db($db,'car_logbook')

    if ($db) {
    	echo "connected";
    }else{
    	echo "nt connected";
    }//verifying connection status


if (isset($_POST['card_No']) && isset($_POST['Ids'])){

	$Card= $_POST['card_No'];
	$id = $_POST['Ids'];
//assigning form values to php variables database table
	$s= "SELECT * from card_reg where card_number = '$Card' ";
	
	$result = mysqli_query($db,$s);//
	
	$num=mysqli_num_rows($result);//

	
	if($num >=1){
		
		echo"card already exists";
	}
	//verifying if data already exists

	else{
		$reg = "INSERT INTO card_reg (C_id,card_number,Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dece) VALUES ($id,'$Card','','','','','','','','','','','','')";
		$mysql_query = mysqli_query($db,$reg);
		if ($mysql_query) {
			header('location:succ2.php');// shows erros
		}else{
			echo "Not successful";
			echo mysqli_error($db);
		}
		
	}//enters data into the database 


}
	
?>