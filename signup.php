<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel|Signup</title>
  <link rel="stylesheet" type="text/css" href="CSS/style2.css">
</head>
<body>
<nav class="navbar">
     <a href="home.php" class="logo"><span>T</span>ravel <span>A</span>gency</a>

   </nav>

  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="signup.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user"><strong>Register</strong></button>
  	</div>
  	<p>
  		Already a member? <a href="login.php"><storng>Sign In</storng></a>
  	</p>
  </form>
</body>
</html>