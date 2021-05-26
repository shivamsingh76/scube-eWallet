<?php
$mysqli=new mysqli('localhost','root','','scube2') or die("Unable to Connect"); 

echo "connected";

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


$reges="insert into transactions(txn_id,amount,sent_to,received_from) values('$txn_id','$amount','$sent_to','$received_from');";
$data=mysqli_query($mysqli,$reges);
if($data){
echo"<script>alert('Done')</script>";
echo"<script>window.open('dash.php','_self')</script>";
}
else
{
printf("Error message: %s\n", $data->error);
}
?>