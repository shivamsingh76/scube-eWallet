<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link
      rel="stylesheet prefetch"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
    />
    <link
      rel="stylesheet prefetch"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet prefetch"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
    />
    <style class="cp-pen-styles">
      @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700&subset=latin-ext");
    </style>
    <link
      href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/dash.css" />
    <!------ Include the above in your HEAD tag ---------->
  </head>

</html>







<?php

$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];

$query="select * from  Users;";


if(strpos($search,"Users")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}



$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select * from employees;";

if(strpos($search,"employees")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}

$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select * from User_balance;";

if(strpos($search,"User_balance")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}



$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select * from add_money;";

if(strpos($search,"add_money")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}




$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select * from cust_care;";

if(strpos($search,"cust_care")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}




$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select * from Department;";

if(strpos($search,"Department")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}




$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select * from emp_clr;";

if(strpos($search,"emp_clr")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}




$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select * from emp_salary;";

if(strpos($search,"emp_salary")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}




$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select * from passcode;";

if(strpos($search,"passcode")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}




$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select * from Transactions;";

if(strpos($search,"Transactions")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}




$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select balance from user_balance where id = 2001;";

if(strpos($search,"user_balance")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}




$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select contact,email from Cust_care where sno=1;";

if(strpos($search,"Cust_care")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}




$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select bank_acc from users where first_name = 'adam' and last_name = 'ross';";

if(strpos($search,"users")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}




$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select received_from,sent_to,amount,date_time from tRansactions order by txn_id desc limit 3;";

if(strpos($search,"tRansactions")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}



$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select received_from,sent_to,amount,date_time from transactiOns where received_from = 'adam111';";

if(strpos($search,"transactiOns")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}



$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select dept_id,dept_name,mgr_id,mgr_name from department order by dept_id desc limit 1;";

if(strpos($search,"department")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}



$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select * from tranSactions where (received_from = 'adam111' or sent_to = 'adam111') and date_time like '2019-11-11%';";

if(strpos($search,"tranSactions")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}




$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select * from transaCtions where received_from = 'adam111' or sent_to = 'adam111';";

if(strpos($search,"transaCtions")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}



$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select * from transActions where date_time>='2020-01-01 00:00:00';";

if(strpos($search,"transActions")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}
?>

<?php
$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select user_balancE.username,Users.phone from user_balancE,Users where user_balancE.id=Users.id and balance>100000;";

if(strpos($search,"user_balancE")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}
?>




<?php
$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select u.first_name,u.last_name,ub.balance from uSers u inner join User_balance ub on u.id=ub.id;";

if(strpos($search,"uSers")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}
?>


<?php
$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select e.emp_name,d.mgr_name from Employees e,Department d where e.dept=d.dept_name and e.emp_name not in(select mgr_name from Department);";

if(strpos($search,"Employees")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}
?>



<?php
$mysqli=mysqli_connect("localhost","root","","scube2");
if($mysqli->connect_errno)
die("Connection failed".$mysqli->connect_error);

if(isset($_POST['submit'])){

$search=$_POST['query'];
$query="select p.username from passcodE p where p.username not in (select distinct(received_from) from TRansactions);";

if(strpos($search,"passcodE")!==false){
if($mysqli->multi_query($query))
{
$result=$mysqli->store_result();
echo "Total Record :".$result->num_rows;
echo "<hr width ='100px' align='left'/>";
$finfo=$result->fetch_fields();
echo"<table border='1'>";
echo"<tr>";
foreach($finfo as $f)
{
echo "<th>".$f->name."</th>";
}
echo "</tr>";

while($row=$result->fetch_assoc())
{
echo "<tr>";
foreach($row as $v)
{
echo "<td>".$v."</td>";
}
echo"</tr>";
}
echo "</table>";
}
}
}
?>