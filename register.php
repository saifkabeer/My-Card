<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="minify\form.css">
</head>
<body>
                        
<form action="https://www.w3schools.com/action_page.php">
  <div class="container">
    <!-- <h1>Register</h1> -->
    <h2> <p>fill in your Phone Number to get a verification code to verify your number.</p> </h2>
    <hr>
    <label for="PhoneNumber"><b>PhoneNumber</b></label>
    <input type="text" placeholder="Enter PhoneNumber" name="PhoneNumber" required> <br>

    <!-- <label for="OTP"><b>OTP</b></label> <br>
    <input type="Number" placeholder="Enter OTP" name="OTP" required>
 -->
    <label for="OTP"><b>OTP</b></label> <br>
    <input type="text" placeholder="Enter your OTP" name="Email" required>


    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>

</html>