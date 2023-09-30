<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Css/memberReg.css">
	<title></title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<div class="menu"><?php include("JavaScript/Menu.php");?></div>
	<div class="regform"><h1>Add new member</h1>
		</div>
	<div class="main">
		<form action="Member.php" method="post">
			<div id="name">
				<h2>Name</h2>
				<input class="firstname" type="text" name="fname"><br>
				<label class="firstlabel">firstname</label>
				<input class="lastname" type="text" name="lname">
				<label class="lastlabel">lastname</label>
			</div>

				<h2 class="name">Zone</h2>
				<input class="email" type="text" name="zone" >


				<h2 class="name">Card number</h2>
				<input class="email" type="text" name="card_No" >

				<h2 class="name">Date</h2>
				<input class="email" type="text" name="date" >

				<center><button type="submit">Register</button></center>

		</form>
	</div>
</body>
</html>
