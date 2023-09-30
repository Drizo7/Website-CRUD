<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="print.css" media="print">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="header">
		<div class="inner_header">
			<div class="logo_container">
				<h3>MIBAWA COTTAGE PLEDGE BOOK</h3>
			</div>
			<ul class="navigation">
			</ul>
		</div>
	</div>
	<div class="main">
		<div class="name">
<?php 
	   $conn= mysqli_connect('localhost', 'root', '', 'mibawa');


    $query = "SELECT * FROM member_reg dr";
    $query2 = "SELECT * FROM card_reg";
   	$result = mysqli_query($conn,$query);
   	$result2= mysqli_query($conn,$query2);
?>
		<table border=1>

			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Gender</th>
				<th>House Number</th>
				<th>Card Number</th>
				<th>Phone</th>
			</tr>
	<?php while($row =mysqli_fetch_array($result))//calling the result function
	{
		?>

			<tr>
				<td><?php echo $row['firstname']; ?></td>
				<td><?php echo $row['lastname']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td><?php echo $row['house_number']; ?></td>
				<td><?php echo $row['card_number']; ?></td>
				<td><?php echo $row['phone']; ?></td>
			</tr>
<?php	}?>

	</table>
	<div>
		<button onclick="window
		.print()" id="print-btn">Print
		</button>
	</div>

		</div>
	</div>
</body>
</html>
