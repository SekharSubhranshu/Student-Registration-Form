<?php
include 'conn.php';
  $add=$_REQUEST['fname'];
  $ins="insert into facilities_master
  (facilities_name) values('$add');";
  $insert=mysqli_query($conn,$ins);
  echo '<script>alert("Successfully Added"); window.location.href="facility.php";</script>';
?>