<?php
  require_once("config.php");

  $error_msg = '';

  if(isset($_POST['submitBtn'])){
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];

if ($password1 == $password2) {
   // Validate password strength
   $uppercase = preg_match('@[A-Z]@', $password2);
   $lowercase = preg_match('@[a-z]@', $password2);
   $number    = preg_match('@[0-9]@', $password2);
   $specialChars = preg_match('@[^\w]@', $password2);
  if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password2) < 8) {
    $error_msg = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
  } else{
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $error_msg = "Email is already registered";
    } else{
      $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$firstName', '$lastName', '$email', '$password2')";
      if (mysqli_query($conn, $sql)) {
      header("Location: login.php");
      }
    }
  }
} else {
    $error_msg = "Password does not match";
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sign up - Bookmarked</title>
</head>
<body>
    <div class="nav" id="nav">
        <h1><a href="index.php">Bookmarked</a></h1>
    </div>

        <!---------Sign-up page---------->
        <section class="contact">
            <div class="side-img">
                <h1>Keep track <br>of what <br>you read.</h1>
            </div>
        <div class="books2">
            <img src="images/Books.png" />
        </div>
        <form action="signup.php" method="POST">
          <div class="signup-container">
            <h1>Welcome to <b>Bookmarked.</b><br>Tell us about you!</h1>
            <div class="row row-columns">
              <div class="row-left">
                <label for="exampleFormControlInput1" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstName"/>
              </div>
              <div class="row-right">
                <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastName"/>
              </div>
            </div>
            <div class="row">
              <div>
                <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email"/>
              </div>
            </div>
            <div class="row row-columns">
              <div>
                <label for="exampleFormControlInput1" class="form-label">Set your password</label>
                <input type="password" class="form-control" name="password1" id="password1"/>

                
              </div>
              <div>
                <label for="exampleFormControlInput1" class="form-label">Repeat password</label>
                <input type="password" class="form-control" name="password2" id="password2"/>
              </div>

            </div>
            <input type="checkbox" onclick="myFunction1()">Show Password
            <div class="row">
              <p class="error-msg"><?php echo $error_msg; ?></p>
              <button type="submit" class="btn btn-primary" id="btn3" name="submitBtn" type="button">Sign up</button>
            </div>
          </div>
        </form>
        </section>
        <script>
                function myFunction1() {
                var x = document.getElementById("password1");
                var x1 = document.getElementById("password2");
                if (x.type === "password") {
                x.type = "text";
                x1.type = "text";
                } else {
                x.type = "password";
                x1.type = "password";
                  }
                }
          </script>
  </body>
</html>