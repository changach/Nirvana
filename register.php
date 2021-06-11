<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- add bootstrap css -->
    <?php include('header.html')?>
    <title>Register</title>
</head>
<body id="register-page">
    <div class="container-fluid pt-3 my-3 border">
       <!-- <div class="row login-form">-->
            <div class="col-md-4 offset-md-4">
                <h3 class="title text-center">NIRVANA</h3>
                <div class="card py-3 ">
            
                    <!--Form -->
                    <form action="/Home.php">
     <div class="form-group col-md-10 ml-2">
    <label for="firstname">First Name:</label>
    <input type="name" class="form-control" placeholder="Enter firstname" id="firstname">
  </div>
  <div class="form-group col-md-10 ml-2">
    <label for="lastname">Last Name:</label>
    <input type="name" class="form-control" placeholder="Enter lastname" id="lastname">
  </div>
  <div class="form-group col-md-10 ml-2">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email">
  </div>
  <div class="form-group col-md-10 ml-2">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>
  <div class="form-group col-md-10 ml-2">
    <label for="pwd">Confirm Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="cpwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> I Agree To all the terms and conditions.
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                          <!--end of registration form--> 


             </div>
            </div>
        </div>
    </div>
  
<!-- add bootstrap js 
<?php include('footer.html')?>
<script>
    
    var registerbtn = document.getElementById("registerbtn")

    registerbtn.addEventListener('click', function(event){
        
        if(validateRegistrationForm() === false){
            event.preventDefault()
        }
    });

</script>-->
</body>
</html>

