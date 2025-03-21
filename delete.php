<?php
      include 'conn.php';
      $student_id=$_REQUEST['id'];
      $dele="delete from student where student_id='$student_id';";
      $del="delete from facility_user where student_id='$student_id';";
      $deleted=mysqli_query($conn,$dele);
      $result=mysqli_query($conn,$del);
      header("location: showdata.php");
?>