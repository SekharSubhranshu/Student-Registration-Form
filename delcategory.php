<?php
      include 'conn.php';
      $category_id=$_REQUEST['id'];
      $dele="delete from category_master where category_id='$category_id';";
      $deleted=mysqli_query($conn,$dele);
      
      echo '<script>alert("Successfully Deleted"); window.location.href="category.php";</script>';

?>