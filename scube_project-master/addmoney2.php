<?php 


$conn=new mysqli('localhost','root','','scube2') or die(mysqli_error());


$username='';
$bank_acc='';
if(isset($_POST['username'])){
if(isset($_POST['bank_acc'])){
$username=$_POST['username'];
$bank_acc=$_POST['bank_acc'];
}
}

$query="select * from add_money where username='$username' and bank_acc='$bank_acc';";


$result=mysqli_query($conn,$query);

if((mysqli_num_rows($result)==1)){

echo "<script>alert('Verified!Enter the Details')</script>";
	echo "<script>window.open('testrun2.php','_self')</script>";

}else{
		echo "<script>alert('Fail')</script>";
		echo "<script>window.open('dashemp.php','_self')</script>";
}
?>