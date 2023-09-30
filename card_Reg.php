<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		
	</style>
	<link rel="stylesheet" type="text/css" href="Css/Cardreg.css">
</head>
<body>
	<div class="menu"><?php Include("JavaScript/Menu.php");?></div>
	<div class="regform"><h1>Add new Card</h1></div>
	<div class="main">
		<?php 
	   $conn= mysqli_connect('localhost', 'root', '', 'mibawa');


    $query = "SELECT * FROM member_reg";
   	$result = mysqli_query($conn,$query);
?>
		<form action="Card.php" method="post">
			<div id="name">
				
				<h2 class="name">	Card number</h2>
				<input class="email" type="text" name="card_No" >

				<select name="Ids" >
					<option></option>
					<?php
					//loop all active members

					while ($sql_fetch_active_groups_data=mysqli_fetch_assoc($result)){
						echo'
						<option value="'.$sql_fetch_active_groups_data['D_id'].'">'.$sql_fetch_active_groups_data['firstname']. '-'. $sql_fetch_active_groups_data['lastname'].'<option>';
					}

					?>
				</select>

				<button type="submit">Register</button>
				</div>
		</form>
	</div>
</body>
</html>
