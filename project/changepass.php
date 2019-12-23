<?php
session_start();
require('db.php');
$newpass= $confirmpass= "";
$val="";
if(isset($_POST['submit'])){
	$newpass= $confirmpass= "";
	$pass= $_SESSION['pass'];

			if($newpass== $confirmpass)
			{
				$id= $_SESSION['id'];
				$con= getConnection();
		$sql= "update login set password = '{$newpass}' where id='{$id}' ";
		if($result1= mysqli_query($con,$sql))
		{ $val= "updated";
	$_SESSION['pass']= $newpass;
				
			
			}	
		else {$val= "password doesnt match";}
		
		}
	
}
?>

