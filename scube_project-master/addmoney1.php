<?php
$mysqli=new mysqli('localhost','root','','scube2') or die("Unable to Connect"); 



$username='';
$add_id='';
$amount='';
$bank_acc='';
if(isset($_POST['username'])){
if(isset($_POST['add_id'])){
$username=$_POST['username'];
$add_id=$_POST['add_id'];
$amount=$_POST['amount'];
$bank_acc=$_POST['bank_acc'];
}
}


$reg="insert into add_money(add_id,username,amount,bank_acc) values('$add_id','$username','$amount','$bank_acc');";
$result=mysqli_query($mysqli,$reg);
if($result){
echo"<script>alert('Done')</script>";
echo"<script>window.open('dash.php','_self')</script>";
}
else
{
echo"<script>alert('Fail')</script>";
echo"<script>window.open('testrun1.php','_self')</script>";
}

?>




