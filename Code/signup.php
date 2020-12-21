<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/signup.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
       integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
       integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
       
  
  </head>
  <body>
  <div class="container" style="height: 700px;">
    <div class="logo">
      <img src="images/logo.jpg" style="height: 110px;" alt="">
    </div>
    <div class="input">
      <form class="form-signin" action="#" name="validForm" onsubmit="return validate()" method="POST" >
        <div class="row">
         
            <label for="inputFName" class="sr-only">First name</label>
            <input type="text" id="inputFName" name="fname" class="form-control" placeholder="First name..">
            <span class="error"><p id="fname_error"></p></span>

            <label for="inputLName" class="sr-only">Last name</label>
            <input type="text" id="inputLName" name="lname" class="form-control" placeholder="Last name.."  >
            <span class="error"><p id="lname_error"></p></span>
        </div>
        

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email address.." >
        <span class="error"><p id="email_error"></p></span>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password..">
        <span class="error"><p id="password_error"></p></span>

        <label for="inputCPassword" class="sr-only">Confirm password</label>
        <input type="password" id="inputCPassword" name="repassword" class="form-control" placeholder="Confirm password..">
        <span class="error"><p id="repassword_error"></p></span>

        <button class="btn btn-lg btn-dark btn-block" type="submit" name="submit">Sign up</button>

        <label>
           <p style="color:whitesmoke;">Already have an account?<a href="login.html" style="color: aqua;"> Login ..</a></p> 
          </label>
      </form>
    </div>
  </div>
    
  
  </body>
</html>
