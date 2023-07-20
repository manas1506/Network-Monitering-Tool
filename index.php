<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>LOGIN</h2>
	<div class="login">
     <form action="action_page.php" method="post">
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" id="uname"  placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" id="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
     </form>
     </div>
</body>
</html>
