<?php
	include "dbconnect.php";
	
	$id=$_GET['d_id'];
	
	$nam=$_POST['f_name'];
	$des=$_POST['f_des'];
	$pur=$_POST['f_pur'];
	$quan=$_POST['f_quan'];
	
	$sql="UPDATE product SET name='$nam', description='$des' ,
	purchaseprice='$pur' ,quantity='$quan' where id='$id'";
	
	if($conn->query($sql)){
		
		header('location:index.php');

		//echo "updated succesfully";
		}
	else 
	echo "update failed";

	$conn->close();
?>