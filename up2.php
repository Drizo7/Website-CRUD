
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="Css/up2.css">
	<style type="text/css">
		
	</style>
</head>
<body>
	<div class="menu"><?php include("JavaScript/Menu.php");?> </div>
	<div class="regform"><h1>Update Page</h1></div>

	<div class="main">


<?php 

 $conn= mysqli_connect('localhost', 'root', '', 'mibawa');
 $nm= $_GET['a'];
 $query="SELECT * from member_reg where D_id= '$nm'";
 $query2="SELECT * from card_reg where C_id= $nm";

$result = mysqli_query($conn,$query2);

//header("location:dvlist");
 ?>
<form action="" method="post">
 <table border=1 class="table">

<?php while($row =mysqli_fetch_array($result))
	{
		?>
			<tr>

				
				<td style="text-align: center; color: white;">Card <?php echo $row['card_number']; ?></td>
			</tr>

			<tr>
				<td>
				<label class="label">January</label>
				<input class="ipt" type="text" name=Jan value="<?php echo $row['Jan']; ?>"></input>
				</td>
			</tr>

			<tr>
				<td>
				<label class="label">February</label>
				<input class="ipt" type="text" name=Fb value="<?php echo $row['Feb']; ?>"></td>
			</tr>

			<tr>
				<td>
				<label class="label">March</label>
				<input class="ipt" type="text" name=Mr value="<?php echo $row['Mar']; ?>"></td>
			</tr>
			<tr>
				<td>
				<label class="label">April</label>
				<input class="ipt" type="text" name=Ap value="<?php echo $row['Apr']; ?>"></td>
			</tr>

			<tr>
				<td>
				<label class="label">May</label>	
				<input class="ipt" type="text" name=My value="<?php echo $row['May']; ?>"></td>
			</tr>

			<tr>
				<td>
				<label class="label">June</label>
				<input class="ipt" type="text" name=Jn value="<?php echo $row['Jun']; ?>"></td>
			</tr>


			<tr>
				<td>
				<label class="label">July</label>
				<input class="ipt" type="text" name=Jl value="<?php echo $row['Jul']; ?>"></input></td>
			</tr>

			<tr>
				<td>
				<label class="label">August</label>
				<input class="ipt" type="text" name=Ag value="<?php echo $row['Aug']; ?>"></input></td>
			</tr>

			<tr>
				<td>
				<label class="label">September</label>
				<input class="ipt" type="text" name=Sp value="<?php echo $row['Sep']; ?>"></input></td>
			</tr>

			<tr>
				<td>
				<label class="label">October</label>
				<input class="ipt" type="text" name=Oc value="<?php echo $row['Oct']; ?>"></input></td>
			</tr>

			<tr>
				<td>
				<label class="label">November</label>
				<input class="ipt" type="text" name=Nv value="<?php echo $row['Nov']; ?>"></input></td>
			</tr>

			<tr>
				<td>
				<label class="label">December</label>
				<input class="ipt" type="text" name=Dc value="<?php echo $row['Dece']; ?>"></input></td>
			</tr>

				<td><input class="" type="submit" name="s" value="change now"></td>
			</tr>
<?php	}?>
</table>
<button onclick="window
		.print()" id="print-btn">Print
		</button>
<?php 
if(isset($_POST['s'])){
	$jAn = $_POST['Jan'];
	$fb = $_POST['Fb'];
	$mr = $_POST['Mr'];
	$ap = $_POST['Ap'];
	$my = $_POST['My'];
	$jn = $_POST['Jn'];
	$jl = $_POST['Jl'];
	$ag = $_POST['Ag'];
	$sp = $_POST['Sp'];
	$oc = $_POST['Oc'];
	$nv = $_POST['Nv'];
	$dc = $_POST['Dc'];



/*mysqli_query("UPDATE driver_reg set firstname='$f', lastname='$l', gender='$g', Dob='$d',email='$e', phone='$p' where id=''");
header("location:dv_list.php");*/
$nm= $_GET['a'];

 $conn= mysqli_connect('localhost', 'root', '', 'mibawa');
 $query="UPDATE card_reg set Jan='$jAn', Feb='$fb', Mar='$mr', Apr='$ap', May='$my', Jun='$jn', Jul='$jl', Aug='$ag', Sep='$sp', Oct='$oc', Nov='$nv', Dece='$dc' where C_id='$nm'";

$result = mysqli_query($conn,$query);
echo "<script> alert('the record has been updated successfully')</script>";
if (mysqli_query($result)) {
			header('location:succ2.php');// shows erros
		}else{
			echo "Not successful";
			
		}
}

?>
</form>

	</div>
</body>
</html>