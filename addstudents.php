<?php

include 'conn.php';
echo '<pre>'; print_r($_REQUEST);
$firstname=mysqli_real_escape_string($conn,$_REQUEST['firstname']);
$lastname=mysqli_real_escape_string($conn,$_REQUEST['lastname']);
$fathers_name=mysqli_real_escape_string($conn,$_REQUEST['fathers_name']);
$mothers_name=mysqli_real_escape_string($conn,$_REQUEST['mothers_name']);
$gender=$_REQUEST['gender'];
$category=$_REQUEST['category'];
$religion=mysqli_real_escape_string($conn,$_REQUEST['religion']);
$dob=$_REQUEST['dob'];
$phone_no=$_REQUEST['phone_no'];
$email=$_REQUEST['Email'];
$presentaddress=mysqli_real_escape_string($conn,$_REQUEST['presentaddress']);
$permanentaddress=mysqli_real_escape_string($conn,$_REQUEST['permanentaddress']);
$facilities=$_REQUEST['facility'];

$photo_ar=$_FILES['photograph'];
$photonm=$photo_ar['name'];
$time=time();
$filename=$time.$photonm;
move_uploaded_file($photo_ar['tmp_name'],"upload_image/$filename");

$sql_query= "insert into student (student_id,picture,first_name,last_name,gender,date_of_birth,fathers_name,mothers_name,category_id,religion,email,phone_no,present_add,permanent_add)
values (NULL,'$filename','$firstname','$lastname','$gender','$dob','$fathers_name','$mothers_name','$category','$religion','$email','$phone_no','$presentaddress','$permanentaddress');";

$result=mysqli_query($conn,$sql_query);
$student_id=mysqli_insert_id($conn);
foreach($facilities as $f_id){
    $sql_in="insert into facility_user(availed_facilities_id,facilities_id,student_id)
    values (NULL,'$f_id','$student_id');";
    $result_f=mysqli_query($conn,$sql_in);
}

echo '<script>alert("Successfully Added"); window.location.href="newform.php";</script>';

?>