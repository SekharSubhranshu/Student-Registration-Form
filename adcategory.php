<?php
include 'conn.php';
  $add=$_REQUEST['cname'];
  $ins="insert into category_master
  (category_name) values('$add');";
  $insert=mysqli_query($conn,$ins);
  
  echo '<script>alert("Successfully Added"); window.location.href="category.php";</script>';
  ?>