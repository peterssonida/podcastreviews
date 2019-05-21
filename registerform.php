<!DOCTYPE html>
<html lang="EN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PodcastFORUM</title>
    <link rel="stylesheet" href="style.css">
    <script src="assets\js\javan.js"></script>
    </head>
  <body>
    <div class="register">
      <center><img src="https://i.ibb.co/XDZtMjx/podcastforum.png" width="50%"></center>
      <h3>Register</h3>
      <form name="regForm" action="register.php" onsubmit="return validateRegForm()" method="POST">
        <input type="text" name="fstName" placeholder="First name"><br>
        <input type="text" name="lstName" placeholder="Last name"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="password" name="pwdRepeat" placeholder="Confirm password"><br>
        <input type="submit" value="Register">
      </form>
    </div>
  </body>
</html>
