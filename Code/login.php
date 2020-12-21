<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="assets/css/login.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
       integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
       integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
    <title>Login</title>
</head>
<body class="text-center">

    <!-- action -->

    <div class="container">
    <div class="part1">
        <form class="form-signin"  name="form" action="Home/home.php" onsubmit="return validateForm()" method="POST">

            <img class="mb-4" src="assets/images/logo.jpg" width="15%">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" autofocus="">
            <span class="error"><p id="email_error"></p></span>

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" >
            <span class="error"><p id="pass_error"></p></span>

            <button class="btn btn-lg btn-dark btn-block" type="submit">Sign in</button>

            <label>
                <a href="#">Forgot password?</a>
                <p style="color: #ffffff;">Don't have an account?<a href="signup.html"> Create here..</a></p>
              </label>
          </form>
    </div>
    <div class="part2">
        <img src="images/45417.jpg" height="700px" alt="">
    </div>
    </div>
    

</body>
</html>