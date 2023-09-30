<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" type="text/css" href="Css/mblist.css">
	<style type="text/css">
	</style>
</head>
<body>
	<div class="menu"><?php include("JavaScript/Menu.php");?></div>

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


    $query = "SELECT * FROM card_reg";
   	$result = mysqli_query($conn,$query);
?>
<div class="form">
	<form action="CardSearch.php" method="POST">
	<input type="text" name="search" placeholder="">
	<input type="submit" name="submit-Search" value="search ">
 	</form>
</div>

	<div class="membertable">
		<table border=1>

			<tr>
				<th>Card number</th>
				<th>Jan</th>
				<th>Feb</th>
				<th>Apr</th>
				<th>May</th>
				<th>Jun</th>
				<th>Jul</th>
				<th>Aug</th>
				<th>Sep</th>
				<th>Oct</th>
				<th>Nov</th>
				<th>Dec</th>
			</tr>
	<?php while($row =mysqli_fetch_array($result))
	{
		?>

			<tr>
				<td><?php echo $row['card_number']; ?></td>
				<td><?php echo $row['Jan']; ?></td>
				<td><?php echo $row['Feb']; ?></td>
				<td><?php echo $row['Apr']; ?></td>
				<td><?php echo $row['May']; ?></td>
				<td><?php echo $row['Jun']; ?></td>
				<td><?php echo $row['Jul']; ?></td>
				<td><?php echo $row['Aug']; ?></td>
				<td><?php echo $row['Sep']; ?></td>
				<td><?php echo $row['Oct']; ?></td>
				<td><?php echo $row['Nov']; ?></td>
				<td><?php echo $row['Dece']; ?></td>
			</tr>
		</div>
<?php	}?>
</table>
		</div>
	</div>
</body>
</html>
