<?php 
$nm= $_GET['a'];

 $conn= mysqli_connect('localhost', 'root', '', 'mibawa');
 $query="delete from member_reg where D_id= '$nm'";

$result = mysqli_query($conn,$query);
echo "<script> alert('the record has been deleted successfully')</script>";
header("refresh:0.1;mb_list.php");

//header("location:dvlist");
 ?>
 