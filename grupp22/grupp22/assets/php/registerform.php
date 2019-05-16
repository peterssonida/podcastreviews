<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>      
    </header>

    <div class="register">
      <h3>Register</h3>
      <form name="regForm" action="register.php" onsubmit="return validateRegForm()" method="POST">
        <label for="username">Username</label>
        <input type="text" name="uname" placeholder="Username..">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Your email..">
        <label for="password">Password</label>
        <input type="password" name="pwd" placeholder="Password..">
        <label for="password">Confirm password</label>
        <input type="password" name="pwdRepeat" placeholder="Confirm password">
        <input type="submit" value="Register">
      </form>
    </div>
  </body>
</html>
