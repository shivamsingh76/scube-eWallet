<?php
if(isset($_POST["id"])){
if(isset($_POST["email"])){
if(isset($_POST["password"])){
if(isset($_POST["first_name"])){
if(isset($_POST["last_name"])){
if(isset($_POST["username"])){
if(isset($_POST["phone"])){
if(isset($_POST["bank_acc"])){

	$id=$_POST['id'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$username=$_POST['username'];
	$bank_acc=$_POST['bank_acc'];
	$phone=$_POST['phone'];
}
}
}	
}
}
}
}
}	

$conn=new mysqli('localhost','root','','scube2');
if($conn->connect_error){
	die('Connection Failed :'.$conn->connect_error);
}
else{
 $stmt=$conn->prepare("insert into users(id,email,first_name,last_name,bank_acc,phone) values(?,?,?,?,?,?)");
 $stmt->bind_param("issssi",$id,$email,$first_name,$last_name,$bank_acc,$phone);
 $stmt->execute();
 $stmt->close();
	
 $stmt1=$conn->prepare("insert into passcode(password,id,username) values(?,?,?)");
 $stmt1->bind_param("sis",$password,$id,$username);
 $stmt1->execute();
 echo "<script>alert('registered')</script>";
 echo "<script>window.open('login_simple.html','_self')</script>";
 $stmt1->close();
 $conn->close();

}
?>

