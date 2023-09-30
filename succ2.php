<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}

		body{
			background-image: url("Images/img7.jpg");
			background-size:90%;
			font-family: sans-serif;
			margin-top: 40px;
		}

		.regform{
			width: 800px
			background-color:rgb(0,0,0,6);
			margin: auto;
			color: #ffffff;
			padding: 10px 0px 10px;
			text-align: center;
			border-radius: 15px 15px 0px 0px;
		}

		.main{
			background-color: rgba(0,0,0,0.5);
			width: 800px;
			margin: auto;

		}

		form{
			padding: 10px;
		}

		.menu{
			float: left;
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
			background-color: #3BAF9F;
			display: block;
			margin: 20px 0px 0px 20px;
			text-align: center;
			border-radius: 12px;
			border:2px solid #366473;
			padding: 14px 110px;
			outline: none;
			color: white;
			cursor: pointer;
			transition: 0.25px;
		}

		button:hover{
			background-color: #5390F5;
		}
	</style>
</head>
<body>
	<div class="menu"><?php include("JavaScript/Menu.php");?></div>
	<div class="regform"><h1>Registration succesful!</h1></div>
</body>
</html>
