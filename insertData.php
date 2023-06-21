<?php
include "dbconnect.php";

$name=$_POST['f_name'];
$des=$_POST['f_des'];
$pur=$_POST['f_pur'];
$quan=$_POST['f_quan'];

$sql = "INSERT INTO product (id, name,description,purchaseprice,quantity) 
		VALUES (NULL, '$name', '$des', '$pur','$quan')";

		
		if($conn->query($sql))
		{
			header('location:index.php');
			//echo "data inserted successfully";
			
		}
		else
		{
			echo "insertion failed";
		}
		
		
		$conn->close();
?>