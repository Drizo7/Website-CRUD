<?php 
$nm= $_GET['a'];

 $conn= mysqli_connect('localhost', 'root', '', 'mibawa');
 $query="DELETE from card_reg where id= '$nm'";

$result = mysqli_query($conn,$query);
echo "<script> alert('the record has been deleted successfully')</script>";
header("refresh:0.1;Car_list.php");

//header("location:dvlist");
 ?>