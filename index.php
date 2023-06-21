<?php
include "dbconnect.php";
	session_start();
	if(isset($_POST['login'])){  //isset is a function which is used to check whether a variable hold a value or not
	
		$username=$_POST['f_username'];
		$password=$_POST['f_password'];
		$sql="SELECT * FROM user WHERE user_name='$username' AND password='$password' ";
		
		$result=$conn->query($sql);
		$r=$result->fetch_assoc();
		//echo $result->num_rows;
		if($r==NUll){
			$sql=" SELECT * FROM user WHERE user_name='$username'";
			$result=$conn->query($sql);
		    $r=$result->fetch_assoc();
			
			if($r==NULL){
				echo" Incorrect Username";
			}else{
				echo" Your password is invalid !!";
			}
		}else{
			$_SESSION['name']=$r['u_name'];
			$_SESSION['username']=$r['user_name'];
			$_SESSION['password']=$r['password'];
			
			header('location:home.php');
			//echo "successfully logged in";
			
		}
		
   }

?>
<!DOCTYPE html>
<html lang="en">
<body>	
	<center>
		<h1>Login Form</h1>
		<form  method="POST" action="index.php">

			<label>User Name</label>
			<input type="text" placeholder="Enter name" name="f_username"required > <br> <br>
			<label>Password</label>
			<input type="text" placeholder="Enter password" name="f_password"required  > <br> <br>
			
			<input type="submit" value="Log in" name="login">
		</form>
		 Do you have any account?<a href="register.php"><button style="background-color:#e056fd; border-radius:15px;">Register</button> </a> 
	</center>	
	
</body>
</html>


<?php
	//include "dbconnect.php";
	
	//$s="SELECT * FROM product";
	//$result=$conn->query($s);
	
	//echo "<h1>adhhd</h1>";
	/*
	while($r = $result->fetch_assoc())
	{
		$name=$r['name'];
		echo $name;
		echo "ajgdsdjk";
	}
	*/
	//echo $r['email'];
	//echo gettype($r);
?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		table, td, th{
			border-collapse:collapse;
			border:2px solid black;
		}
		table{
			width:80%;
			margin: 0 auto;
		}
		td, th{
			padding:15px;
			text-align:center;
		}
		
	</style>
</head>
<body style="background-color:#f1f2f6">	
	
		<center>
			<h1> Product</h1>
			<table>
				<tr style="background-color:#686de0;">
					<th>ID</th>
					<th>Name</th>
					<th>Description</th>
					<th>Purchase Prize</th>
					<th>Quantity</th>
					<th>EDIT</th>
					<th>Delete</th>
				</tr>
				<?php
				//$i=1;
				/* while($r = $result->fetch_assoc())
				{
					$idd=$r['id'];
					$nam=$r['name'];
					$des=$r['description'];
					$pur=$r['purchaseprize'];
					$quan=$r['quantity'];
					echo "<tr>";
						echo "<td>". $idd . "</td>";
						echo "<td>". $nam . "</td>";
						echo "<td>". $des . "</td>";
						echo "<td>". $pur . "</td>";
						echo "<td>". $quan . "</td>";
						echo "<td> <a href='editForm.php?edit_id=$idd'><button style='background-color:#e056fd;border-radius:20px;'>Edit</button></a></td>";
						echo "<td> <a href='delete.php?del_id=$idd'><button style='background-color:red;border-radius:20px;'>Delete</button></a></td>";
					echo "</tr>";
				}*/
				?>
				
				<tr>
					<td colspan="7"><a href="insertform.php" ><button style="background-color:#6ab04c; border-radius:20px;" >Insert Record</button></a></td>
				</tr>
			</table>
		</center>
	
</body>
</html> -->
