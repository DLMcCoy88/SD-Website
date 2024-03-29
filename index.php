<!--server.php includes all connections to the database-->
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
  <h1 id="title"> Fire Detection System Hub </h1> 
  <div class="header">
  <div class = "login-page">
  <div class = "form">
<!--Input for user to enter registration information--> 
  <form method="post" action="index.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <input type="password" placeholder="Password" name="password_1">
    </div>
    <div class="input-group">
      <input type="password" placeholder="Confirm Password" name="password_2">
    </div>
    <div class="input-group">
      <input type = "submit" value = "Register" name = "reg_user" /> 
    </div>
<!--If user has already registered "login.php" takes them to a log in page-->
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
    </div>
  </form>
</body>
</html>