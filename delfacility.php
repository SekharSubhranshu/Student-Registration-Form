<?php
      include 'conn.php';
      $facility_id=$_REQUEST['id'];
      $dele="delete from facilities_master where facilities_id='$facility_id';";
      $deleted=mysqli_query($conn,$dele);
      echo '<script>alert("Successfully Deleted"); window.location.href="facility.php";</script>';
?>