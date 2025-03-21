<head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <style>
            .new {text-align: center;}
            </style>
</head>
<hr><hr>


<?php
session_start();
include 'conn.php';

$sql_student="select * from category_master";

$result=mysqli_query($conn,$sql_student);


?>
<body>
<header>
            <nav class= "navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand"href="#">FORM</a>
                    <button
                    class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerExternalContent" aria-controls="navbarTogglerExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                            <a class="nav-link" href="showdata.php">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">enquire</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="admin_lgn.php">Log Out</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Admin Action
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="showdata.php">Edit Batabase</a>
                              <a class="dropdown-item" href="newform.php">Register</a>
                          </li>
                        </ul>
                        <form class="form-inline mt-2 mt-md-0">
                          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                      </div>
            </nav>
        </header>
        <form enctype="multipart/form-data" 
            class="well form-horizontal studentRegistration bv-form" 
            action="adcategory.php" 
            method="post">
            <div class="new">
        <label for="fname">Add category Here:</label>
  <input type="text" id="cname" name="cname">
  <button class="btn btn-primary btn-sm" type="submit" >ADD</button><br><br>
</div>
</form>
<div>
<table  id="myTable">
  <thead>
    <th>category_Id</th>
    <th>category_name</th>
    <th>Action</th>
  </thead>
  <tbody>
<?php

while($fetched_data=mysqli_fetch_row($result)) {
    echo '<tr>';
    echo '<td>'.$fetched_data[0].'</td>';
    echo '<td>'.$fetched_data[1].'</td>';
    echo '<td><a href=delcategory.php?id='.$fetched_data[0].'>Delete</a></td>';
    echo '</tr>';
}


?>
</tbody>
</table>
</div>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );

</script>
</body>