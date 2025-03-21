<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    </head>
<body>
  <?php
include 'header.php';
?>
<section class="pb-4">
  <div class="bg-white border rounded-5">
    
  <section class="pb-4">
  <div class="bg-white border rounded-5">
    
    <section class="w-100 px-4 py-5 gradient-custom" style="border-radius: .5rem .5rem 0 0;">
      <style>
        .gradient-custom {
          /* fallback for old browsers */
          background: #6a11cb;

          /* Chrome 10-25, Safari 5.1-6 */
          background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

          /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
      </style>
      <form enctype="multipart/form-data" 
            class="well form-horizontal studentRegistration bv-form" 
            action="admin_lgn.php" 
            method="post">
      <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-6">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                <div class="form-outline form-white mb-4">
                  <input type="text" id="typeEmailX" class="form-control form-control-lg" name="uname" placeholder="USERNANE"/>
                  <label class="form-label" for="typeEmailX">usename</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" class="form-control form-control-lg" name="pass" placeholder="PASSWORD"/>
                  <label class="form-label" for="typePasswordX">Password</label>
                </div>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                

              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
    </section>
    
    
    
  </div>
</section>
      </body>
      </html>