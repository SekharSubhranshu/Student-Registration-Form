<html>
  <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

        <style>
        .center {
  margin: auto;
  width: 60%;
  border: 3px black;
  padding: 20px;}
  </style>
</head>
<hr><hr>


<?php
session_start();
include 'conn.php';
$cat="select * from category_master";
$sql_student="select * from student";
$rescat=mysqli_query($conn,$cat);
$result=mysqli_query($conn,$sql_student);
$fetched_data1=mysqli_fetch_row($rescat)

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
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
        <main>
<table  id="myTable" class="center" >
  <thead>
    <th>first_name</th>
    <th>last_name</th>
    <th>fathers_name</th>
    <th>mothers_name</th>
    <th>date_of_birth</th>
    <th>action</th>
    <th>action</th>
  </thead>
  <tbody>
<?php

while($fetched_data=mysqli_fetch_row($result)) {
    echo '<tr>';
    echo '<td>'.$fetched_data[2].'</td>';
    echo '<td>'.$fetched_data[3].'</td>';
    echo '<td>'.$fetched_data[6].'</td>';
    echo '<td>'.$fetched_data[7].'</td>';
    echo '<td>'.$fetched_data[5].'</td>';
    echo '<td><a href=newform.php?id='.$fetched_data[0].'>Edit</a><td>
    <a href=delete.php?id='.$fetched_data[0].'>Delete</a></td>';
    
    echo '</tr>';
}


?>
</tbody>
</table>
</main>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );

</script>

</body>
</html>