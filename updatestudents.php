<?php

include 'conn.php';
echo '<pre>'; print_r($_REQUEST);
$student_id=$_REQUEST['student_id'];
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$fathers_name=$_REQUEST['fathers_name'];
$mothers_name=$_REQUEST['mothers_name'];
$gender=$_REQUEST['gender'];
$category=$_REQUEST['category'];
$religion=$_REQUEST['religion'];
$dob=$_REQUEST['dob'];
$phone_no=$_REQUEST['phone_no'];
$email=$_REQUEST['Email'];
$presentaddress=$_REQUEST['presentaddress'];
$permanentaddress=$_REQUEST['permanentaddress'];
$facilities=$_REQUEST['facility'];
//photo
$photo_ar=$_FILES['photograph'];
$photonm=$photo_ar['name'];
$time=time();
$filename=$time.$photonm;
move_uploaded_file($photo_ar['tmp_name'],"upload_image/$filename");

echo $sql_qr= "update student 
set picture='$filename',first_name='$firstname',last_name='$lastname',gender='$gender',date_of_birth='$dob',fathers_name='$fathers_name',mothers_name='$mothers_name',category_id='$category',religion='$religion',email='$email',phone_no='$phone_no',present_add='$presentaddress',permanent_add='$presentaddress'
where student_id=$student_id";

$result=mysqli_query($conn,$sql_qr);

$del="delete from facility_user
where student_id='$student_id';";

$delete=mysqli_query($conn,$del);

//$student_id=mysqli_insert_id($conn);
foreach($facilities as $f_id){
    $sql_in="insert into facility_user(availed_facilities_id,facilities_id,student_id)
    values (NULL,'$f_id','$student_id');";
    
    $result_f=mysqli_query($conn,$sql_in);
}
echo '<script>alert("Successfully Updated"); window.location.href="newform.php";</script>';

?>