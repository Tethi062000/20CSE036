<?php
	include "dbconnect.php";
	$id=$_GET['edit_id'];
	$sql="SELECT * FROM product where id='$id'";
	$result=$conn->query($sql);
	
	$arr=$result->fetch_assoc();
	
	$nam=$arr['name'];
	$des=$arr['description'];
	$pur=$arr['purchaseprize'];
	$quan=$arr['quantity'];
?>


<!DOCTYPE html>
<html lang="en">
<body>	
	<center>
		<h1>Edit Form</h1>
		<form method="POST" action="edit.php?d_id=<?php echo $id ?>">
			<label>Name</label>
			<input type="text" value="<?php echo $nam ?>" name="f_name"> <br> <br>
			<label>Description</label>
			<input  type="text" value="<?php echo $des ?>" name="f_des"> <br> <br>
			<label>Purchase Price</label>
			<input type="text"  value="<?php echo $pur ?>" name="f_pur" > <br> <br>
			<label>Quantity</label>
			<input type="text"  value="<?php echo $quan?>" name="f_quan" > <br> <br>
			<input type="submit" value="update">
		</form>
	</center>	
	
</body>
