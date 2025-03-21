<?php
session_start();
include 'conn.php';

$var=$_REQUEST['uname'];
$pass=$_REQUEST['pass'];
$myquery="select * from admin_lgn where user_name='$var' and password='$pass' and status='active';";

$result=mysqli_query($conn,$myquery);
$rows=mysqli_num_rows($result);
$result_row=mysqli_fetch_array($result);
if ($rows==1){
    $_SESSION['name']=$result_row['user_name'];
    $_SESSION['logged_id']=true;
    header('Location: linked1.php');
}else{
    session_unset();
    header('Location: admin.php');
}
?>