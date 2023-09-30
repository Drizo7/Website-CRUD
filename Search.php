<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Member list</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;}

		.header{
		width: 100%;
		height: 20%;
		display: block;
		}

		.inner_header{
	width:90%;
	height:100%;
	display: block;
	margin: 0 auto;
}

.logo_container{
	height:100%;
	display: table;
	margin:auto;
}

.logo_container h3 {
	color: white;
	height: 100%;
	display: table-cell;
	vertical-align: middle;
	font-family: 'Montserrat';
	font-size: 32px;
	font-weight: 200;
}

.logo_container h3 span{
	font-weight: 800;
}

.navigation{
	float: right;
	height: 100%;
}

.navigation a{
	float: left;
	height: 100%;
	display: table;
	padding: 0px 20px;
}

.navigation a li{
	height: 100%;
	display: table-cell;
	vertical-align: middle;
	color: white;
	font-family: 'Montserrat';
	font-size: 16px;
	
}

.navigation a:last-child{
	padding-right:0;
}


		.inner_header{
		width:90%;
		height:100%;
		display: block;
		margin: 0 auto;
		}



		body{
		background-image: url("Images/img7.jpg");
			background-size: 100%;
			font-family: sans-serif;
			margin-top: 40px;
		}

		.regform{
			width: 800px
			background-color:rgb(0,0,0,6);
			float: left;
			color: #ffffff;
			padding: 10px 0px 10px;
			text-align: center;
			border-radius: 15px 15px 0px 0px;
		}

		.main{
			
			width: 100%;
			margin: auto;

		}

		form{
			padding: 10px;
		}

		#name{
			width: 100%;
			height: 100px;
			color: white;
			margin-left: 25px;
		}

		.name{
			margin-left: 25px;
			margin-top: 30px;
			width: 125px;
			color: white;
			font-size: 18px;
			font-weight: 700;
		}

		.firstname{
			position: relative;
			left: 180px;
			top: -26px;
			line-height: 40px;
			border-radius: 6px;
			padding: 0 22px;
			font-size: 16px;
		}

		.lastname{
			position: relative;
			left: 405px;
			top: -70px;
			line-height: 40px;
			border-radius: 6px;
			padding: 0 22px;
			font-size: 16px;
			color: #555;
		}

		.firstlabel{
			position: relative;
			color: #E5E5E5;
			text-transform: capitalize;
			font-size: 16px;
			left: 180px;
			top: -42px;
		}

		.lastlabel{
			position: relative;
			color: #E5E5E5;
			text-transform: capitalize;
			font-size: 16px;
			left: 180px;
			top: -42px;
		}

		.employee{
			position: relative;
			left: 200px;
			top: -37px;
			line-height: 40px;
			width: 480px;
			border-radius: 6px;
			padding: 0 22px;
			font-size: 16px;
			color: #555;
		}

		.email{
			position: relative;
			left: 200px;
			top: -37px;
			line-height: 40px;
			width: 480px;
			border-radius: 6px;
			padding: 0 22px;
			font-size: 16px;
			color: #555;
		}

		.number{
			position: relative;
			left: 200px;
			top: -37px;
			line-height: 40px;
			width: 480px;
			border-radius: 6px;
			padding: 0 22px;
			font-size: 16px;
			color: #555;
		}

		.option{
			position: relative;
			left: 200px;
			top: -37px;
			line-height: 40px;
			width: 532px;
			height: 40px;
			border-radius: 6px;
			padding: 0 22px;
			font-size: 16px;
			color: #555;
			outline: none;
			overflow: hidden;
		}

		.option option{
			font-size: 20px;
		}

		#gender{
			margin-left: 25px;
			color: white;
			font-size: 18px;
		}

		.radio{
			display: inline-block;
			padding-right: 70px;
			font-size: 20px;
			margin-left: 25px;
			margin-top: 15px;
			color: white;
		}

		.radio input{
			width: 20px;
			height: 20px;
			border-radius: 50%;
			cursor: pointer;
			outline: none;
		}
		button{
			background-color: black;
			
			margin: 20px 0px 0px 20px;
			text-align: center;
			border-radius: 12px;
			
			padding: 14px 110px;
			outline: none;
			color: white;
			cursor: pointer;
			transition: 0.25px;
		}

		button:hover{
			background-color: dark blue;
		}

				
		.membertable{
			float:left;
			margin-left:70px;
			margin-top: 50px;
		}

		table{
			background-color: rgba(0,0,0,0.5);
			border-collapse: collapse;
			width: auto;
			font-size: 19px;
			font-family: sans-serif;
			text-align: left;
			position: relative;
		}
		th{
			text-align: left;
		}
		table, th, td{
			border: 1px solid ;
			border-collapse: collapse;
		}
		th, td{
			padding: 10px;
		}
.menu{
	float:left;
}
	</style>

</head>
<body>
		<div class="menu">
					<?php include("JavaScript/Menu.php");?>
				</div>
			
	<div class="header">
		<div class="inner_header">
			<div class="logo_container">
					<h3>MIBAWA COTTAGE PLEDGE BOOK</h3>
				</div>
			</div>
		</div>
					<div class="regform"></div>
						<div class="main">
							<div class="name">
<?php 
	 /**  $conn= mysqli_connect('localhost', 'root', '', 'mibawa');

    $query = "SELECT * FROM member_reg";
    $result = mysqli_query($conn,$query);
  **/
?>
<?php

$conn= mysqli_connect('localhost', 'root', '', 'mibawa');

if(isset($_POST['submit-search'])) {
	 
	$search = mysqli_real_escape_string($conn,$_POST['search']);

	$sql = "SELECT * FROM member_reg WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%' OR Zone LIKE '%$search%' OR card_number LIKE '%$search%'";

	$result = mysqli_query($conn, $sql);

	$queryResult = mysqli_num_rows($result);

?>
	<div class="membertable">
		<table border=1>

			<tr>
				<th>id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Zone</th>
				<th>Card Number</th>
				<th>Amount</th>
				<th>Receipt Number</th>
				<th>Date</th>
				<th>View</th>
				<th>Delete</th>
				<th>Update</th>
			</tr>
<?php 	if ($queryResult > 0){
	while ($row = mysqli_fetch_assoc($result)){
?>
			<tr>
				<td><?php echo $row['D_id']; ?></td>
				<td><?php echo $row['firstname']; ?></td>
				<td><?php echo $row['lastname']; ?></td>
				<td><?php echo $row['Zone']; ?></td>
				<td><?php echo $row['card_number']; ?></td>
				<td><?php echo $row['Amount']; ?></td>
				<td><?php echo $row['Receipt_number']; ?></td>
				<td><?php echo $row['Date']; ?></td>
				<td><a href="up2.php?a=<?php echo $row['D_id']; ?>">View</a></td>
				<td><a href="del.php?a=<?php echo $row['D_id']; ?>">Remove</a></td>
				<td><a href="up.php?a=<?php echo $row['D_id']; ?>">Change</a></td><!-- displaying array values from the array $row in the table -->
			</tr>
		</div>
<?php }
	} else{
	echo "There are no mathcing records in the database!";
}

}
?> 