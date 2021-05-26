<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'scube2');

if(isset($_POST['emp_id'])){
if(isset($_POST['emp_name'])){
$emp_id=$_POST['emp_id'];
$emp_name=$_POST['emp_name'];

$s="select * from employees where emp_id='$emp_id' && emp_name='$emp_name';";


$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
	$_SESSION['emp_id']=$emp_id;
	echo "<script>alert('Login Successful')</script>";
	header('location:dashemp.php');
       
}else{
	echo "<script>alert('Incorrect Username or Password')</script>";
    	header('location:emp_login.html');
}
}
}
?>