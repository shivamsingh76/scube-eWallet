<?php 

include_once('transfer1.php');

$conn=new mysqli('localhost','root','') or die(mysqli_error());

mysqli_select_db($conn,'scube2') or die(mysqli_error());

$txn_id='';
$amount='';
$sent_to='';
$received_from='';
if(isset($_POST['txn_id'])){
if(isset($_POST['amount'])){
$txn_id=$_POST['txn_id'];
$amount=$_POST['amount'];
$sent_to=$_POST['sent_to'];
$received_from=$_POST['received_from'];
}
}


$sql="select * from transactions where and sent_to='$sent_to';";

$result=mysqli_query($conn,$sql);

if((mysqli_num_rows($result)==1)){

echo"<script>alert('transaction successful')</script>";
echo "<script>window.open('dash.php','_self')</script>";


}

else{

	echo "<script>alert('Fail')</script>";
		echo "<script>window.open('dash.php','_self')</script>";
}
?>

