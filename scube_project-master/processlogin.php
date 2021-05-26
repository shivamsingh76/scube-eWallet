<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'scube2');

if(isset($_POST['username'])){
if(isset($_POST['password'])){
$username=$_POST['username'];
$password=$_POST['password'];

$s="select * from passcode where username='$username' && password='$password';";


$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
	$_SESSION['user_name']=$username;
	echo "<script>alert('Login Successful')</script>";
	header('location:dash.php');
       
}else{
	echo "<script>alert('Incorrect Username or Password')</script>";
    	header('location:index.html');
}
}
}
?>