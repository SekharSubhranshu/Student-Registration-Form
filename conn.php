<?php
define('SQL_HOST','localhosts');
define('SQL_USER','rootuser');
define('SQL_DB','yourdb');
define('SQL_PASS','');
define('SQL_PORT','3306');

$conn = mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB,SQL_PORT);
if ($conn-> connect_error){
    echo 'Sorry Could not connect to the DataBase';
    die;
}else {
    echo 'Hurray!! Succesfully connected to the DataBase';
}
?>