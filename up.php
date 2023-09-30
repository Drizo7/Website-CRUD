<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

<script>
	  function redirectToURL() {
    	  window.location.assign("mb_list.php")
    	}   

</script>
<link rel="stylesheet" type="text/css" href="Css/up.css">
	<style type="text/css">
		
	</style>
</head>
<body>
	<div class="menu"><?php include("JavaScript/Menu.php");?></div>		
	<div class="regform"><h1>Update Page</h1></div>
		<div class="main">


<?php 

 $conn= mysqli_connect('localhost', 'root', '', 'mibawa');
 $nm= $_GET['a'];
 $query="SELECT * from member_reg where D_id= '$nm'";

$result = mysqli_query($conn,$query);

//header("location:dvlist");
 ?>
<form action="" method="post">
 <table border=1>

<?php while($row =mysqli_fetch_array($result))
	{
		?>

			<tr>
				<td><input type="hidden" name=ID value="<?php echo $row['D_id']; ?>"></td>
			<tr>
				<td><input class="" type="text" name=fn value="<?php echo $row['firstname']; ?>"></td>
			</tr>
			<tr>
				<td><input class="" type="text" name=ln value="<?php echo $row['lastname']; ?>"></td>
			</tr>
			<tr>
				<td><input class="" type="text" name=zn value="<?php echo $row['Zone']; ?>"></td>
			</tr>
			<tr>	
				<td><input class="" type="text" name=em value="<?php echo $row['card_number']; ?>"></td>
			</tr>
			<tr>	
				<td><input class="" type="text" name=am value="<?php echo $row['Amount']; ?>"></td>
			</tr>
			<tr>	
				<td><input class="" type="text" name=rn value="<?php echo $row['Receipt_number']; ?>"></td>
			</tr>
			<tr>
				<td><input class="" type="text" name=dt value="<?php echo $row['Date']; ?>"></td>
			</tr>
				<td><input class="" type="submit" name="s" value="change now"></td>
			</tr>
<?php	}?>
</table>
<?php 
if(isset($_POST['s'])){
	$f = $_POST['fn'];
	$l = $_POST['ln'];
	$z = $_POST['zn'];
	$e = $_POST['em'];
	$a = $_POST['am'];
	$r = $_POST['rn'];
	$d = $_POST['dt'];

$name=$_POST['ID'];

/*mysqli_query("UPDATE member_reg set firstname='$f', lastname='$l', gender='$g', Dob='$d',email='$e', phone='$p' where id=''");
header("location:dv_list.php");*/
$nm= $_GET['a'];

 $conn= mysqli_connect('localhost', 'root', '', 'mibawa');
 $query="UPDATE member_reg set firstname='$f', lastname='$l', Zone='$z',card_number='$e',Amount='$a',Receipt_number='$r', Date='$d' where D_id='$nm'";
 		header("location:mb_list.php");

$result = mysqli_query($conn,$query);
echo "<script> alert('the record has been updated successfully')</script>";
}
?>
</form>

	</div>

</body>
</html>