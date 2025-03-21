<!DOCTYPE html>
<html lang="en">
  <?php 
  session_start();
  include 'conn.php';
  $student_id='';
  if(isset($_GET['id'])){
    
  $student_id=$_GET['id'];

  $student_fetch_query="select * from student where student_id=$student_id";

  $result_student= mysqli_query($conn,$student_fetch_query);

  $student_array = mysqli_fetch_array($result_student);
    $student_facility_qry='select * from facility_user where student_id='.$student_id;
  $result_student2=mysqli_query($conn,$student_facility_qry);
  
  }
  $sql='select * from category_master';
    $result=mysqli_query($conn,$sql);
    $output=mysqli_query($conn,'select * from facilities_master');
  ?>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="javasc/formjava.js"></script>

        
    </head>
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
                            <a class="nav-link" href="#">login</a>
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
          <div class="container">
            <div class="row">
              <div class="col"><hr><hr>

            <h1>Student Registration</h1><br>
            <h5><?php
            if (isset($_SESSION['name']))
              echo 'You have succesfully Logged in as '.$_SESSION['name']
            ?></h5>
            <form enctype="multipart/form-data" 
            class="well form-horizontal studentRegistration bv-form" 
            action="<?php 
            if(isset($_GET['id'])){
              echo 'updatestudents.php';}
              else{
                echo 'addstudents.php';
              } ?>" 
            method="post" id="contact_form"> 

            <?php
            if(isset($_GET['id'])){
             echo '<input type=hidden id=student_id name=student_id value='.$_GET['id'].'>';
            }
            ?>
            

            
                <div class="mx-5" style="width: 600px;">
                <div class="form-group col-md-6"></div><br>
                <div class="form-group">
                  <label for="photograph">Student's Photograph</label>
                <input type="file" name="photograph" class="form-control-file" id="photo" value="">
                <?php
                      if (is_numeric($student_id)) echo "<img class=img-thumbnail style='max-width: 50px;' src=upload_image/".$student_array['picture'].">";
                      ?>
                </div>
                  <p>Student Name:</p>
                  <div class="form-row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="First name" name="firstname" id="firstname" required value="<?php
                      if (is_numeric($student_id)) echo $student_array['first_name'];
                      ?>"/>
                    </div>
                    <div class="text-danger" id="show_first_name_error"></div>
                    <div class="col">
                    <input type="text" class="form-control" placeholder="Last name" name="lastname" id="lastname" required value="<?php
                      if (is_numeric($student_id)) echo $student_array['last_name'];
                      ?>"/>
                    </div>
                    </div>
                    <div>
                      Father's name:<input type="text" class="form-control" placeholder="Father's name" name="fathers_name" id="fathers_name" value="<?php
                      if (is_numeric($student_id)) echo $student_array['fathers_name'];
                      ?>"/>
                      <div class="text-danger" id="fathers_name_error"></div>
                      Mother's Name:<input type="text" class="form-control" placeholder="Mother's name" name="mothers_name" id="mothers_name" value="<?php
                      if (is_numeric($student_id)) echo $student_array['mothers_name'];
                      ?>"/>
                      <div class="text-danger" id="mothers_name_error"></div>
                
                    </div>
                    <div>
                      <label for="gender"> Gender</label><br>
                      <?php
                      if (is_numeric($student_id)){
                        $checked1='';
                      $checked2='';
                      $checked3='';
                      if($student_array['gender']=='Male'){$checked1='checked';}
                      else{$checked1='';}
                      if($student_array['gender']=='Female'){$checked2='checked';}
                      else{$checked2='';}
                      if($student_array['gender']=='Other'){$checked3='checked';}
                      else{$checked3='';}
                      }
                      
                      ?>



                      <label class="radio-inline">
                        <input type="radio" name="gender"  value="Male" <?php if (is_numeric($student_id)){ echo $checked1;}?> required/>Male
                      </label>
                      <label class="radio-inline"> 
                        <input type="radio" name="gender"  value="Female" <?php if (is_numeric($student_id)){ echo $checked2;}?> required/>Female
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="gender"  value="Other" <?php if (is_numeric($student_id)){ echo $checked3;}?> required/>Any Other
                      </label>
                    </div>
                    <div>
                      <label for="category">Category:</label><br>
                      <?php
                      $preference_check='';
                      $result_student3=mysqli_query($conn,"select * from category_master");
                              while($fetched_data1 = mysqli_fetch_array($result_student3)) { 
                                if(is_numeric($student_id)) {
                                  
                                  if($fetched_data1 ['category_id']==$student_array['category_id']){
                                    $preference_check='checked';
                                  }
                                  else{
                                    $preference_check='';
                                  }
                                  
                                  }
                                
                                ?>
                      
                              <input type="radio" name="category" id="category" <?php echo $preference_check; ?> value="<?php echo $fetched_data1['category_id']?> " required />
                            <?php echo $fetched_data1['category_name']?>
                    
                    <?php
                    }
                     ?>
                     </div><hr>
                    <div class="form-group">
                      <label for="religion">Religion</label>
                      <input type="text" class="form-control" name="religion" <?php 
                       ?> placeholder="Religion" value="<?php
                      if (is_numeric($student_id)) echo $student_array['religion'];
                      ?>"/>
                    </div>
                    <div>
                      <label for="birthday">Date Of Birth</label>
                      <input type="date" name="dob" id="birth" required value="<?php
                      if (is_numeric($student_id)) echo $student_array['date_of_birth'];
                      ?>"/>
                    </div><hr>
                    <div>
                        <label for="phone">Enter your phone number:</label>
                        <input type="text" id="phone" name="phone_no" required value="<?php
                      if (is_numeric($student_id)) echo $student_array['phone_no'];
                      ?>"/>
                        </div><hr>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail">Email</label>
                      <input type="email" name="Email" class="form-control" id="Email" placeholder="Email" value="<?php
                      if (is_numeric($student_id)) echo $student_array['email'];
                      ?>"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Present Address</label>
                    <input type="text" class="form-control" name="presentaddress" id="presentaddress" placeholder="present" required value="<?php
                      if (is_numeric($student_id)) echo $student_array['present_add'];
                      ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Permanent Address</label>
                    <input type="text" class="form-control" name="permanentaddress" id="permanentaddress" placeholder="permanent" required value="<?php
                      if (is_numeric($student_id)) echo $student_array['permanent_add'];
                      ?>"/>
                  </div>
                  <p>Facilities:</p>
                  <?php
                        $preference_checked='';
                          while($fetched_data = mysqli_fetch_array($output)){ 
                            if(is_numeric($student_id)) {
                              mysqli_data_seek($result_student2,0);
                            while($student_array2=mysqli_fetch_array($result_student2)){
                              if($fetched_data['facilities_id']==$student_array2['facilities_id']){
                                $preference_checked='checked';
                                break;
                              }
                              else{
                                $preference_checked='';
                              }
                            }                              
                            }
     
                            
                            ?>
                          <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" <?php echo $preference_checked; ?> name="facility[]" 
                          value="<?php echo $fetched_data['facilities_id']?>">
                            <?php echo $fetched_data['facilities_name']?>
                          </div>
                        <?php
                               }
                               ?>
                  <hr>
                  <div class="form-group row">
                    <div class="col-md-10">
                  <button id="submit_btn" class="btn btn-primary" value="<?php if(is_numeric($student_id)) echo 'Update'; else echo 'Insert';?>" type="submit">SUBMIT</button>
                  </div>
                  </div>
                </div>
              </form>
              </div>
              <div class="col">
              </div>
            </div></div>  
        </main>
      </body>
    </html>