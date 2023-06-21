<?php 
include "dbconnect.php";
session_start();


   if(isset($_POST['submit'])){
	$name=$_POST['f_name'];
	$username=$_POST['f_username'];
	$password=$_POST['f_password'];
	$phone=$_POST['f_phone'];
	$email=$_POST['f_email'];
    $gender=$_POST['gender'];
   
    $sql = "SELECT * FROM user WHERE u_email = '$email' OR user_name = '$username'";
    $result=$conn->query($sql);

	$arr=$result->fetch_assoc();

    if($arr!=NULL){
		$sql = "SELECT * FROM user WHERE u_email = '$email' ";
       $result=$conn->query($sql);

	   $arr=$result->fetch_assoc();
	   if($arr!=NULL){
		   echo "Email already exists";
	   }else{
		echo "An unique username is required !";
	   }
	}else{


    $sql = "INSERT INTO user (user_id, u_name,user_name, password, u_phone,u_email, gender) 
		         VALUES (NULL, '$name', '$username', '$password','$phone' ,'$email' ,'$gender' )";

		
		if($conn->query($sql))
		{
			header('location:login.php');
			echo "data inserted successfully";
			
		}
		else
		{
			echo "insertion failed";
		}
		
		
		$conn->close(); 
   }	
   }
?>


<!DOCTYPE html>
<html lang="en">
<body >	
	<center  >
		<h1>REGISTER</h1>
		<form method="POST" action="register.php">

			<label>Name</label>
			<input  type="text" placeholder="Enter name" name="f_name"> <br> <br>
			<label>User Name</label>
			<input  type="text" placeholder="Enter user name" name="f_username"> <br> <br>
			<label>*Password</label>
			<input type="text" placeholder="Enter password" name="f_password"> <br> <br>
			<label>phone</label>
			<input type="text"  placeholder="Enter Mobile no" name="f_phone" > <br> <br>
			<label>Email</label>
			<input type="text"  placeholder="Enter email" name="f_email" > <br> <br>
			<label> gender </name> 
		 <input type="radio" name = "gender" value= "male ">
	       <label> male </name> 
		 <input type="radio" name = "gender" value= "female ">
		 <label> female </name> <br/>
			<input style="background-color:#e056fd; border-radius:15px;" type="submit" value="Register" name="submit">
		</form>
	</center>	
	
</body>
</html>
