<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Member list</title>
	<link rel="stylesheet" type="text/css" href="Css/mblist.css">
	<style type="text/css">
		
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
	   $conn= mysqli_connect('localhost', 'root', '', 'mibawa');


    $query = "SELECT * FROM member_reg";
    $query2 = "SELECT * FROM card_reg";
   	$result = mysqli_query($conn,$query);
   	$result2= mysqli_query($conn,$query2);
?>
<div class="form">
	<form action="Search.php" method="POST">
	<input type="text" name="search" placeholder="">
	<input type="submit" name="submit-search" value="search ">
 	</form>
</div>

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
	<?php while($row =mysqli_fetch_array($result))//calling the result function
	{
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

<?php	}?>

	</table>
	<div>
		<button>
			<a style="color:white" href="user_data_print.php">Print</a>
		</button>
	</div>

		</div>
	</div>
</body>
</html>
