<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal</title>
<link href="../css/main.css" rel="stylesheet" type="text/css">
</head>
<body class="back">
	<h1>Welcome Company Name to your admin page</h1>
	<?php echo "<h2>Hi-{$_SESSION['user_name']}</h2>"; ?>
	<a href="admin_createuser.php">CREATE USER</a><br>
	<a href="admin_edituser.php">EDIT USER</a><br>
	<a href="admin_deleteuser.php">DELETE</a><br>
	<a href="phpscripts/caller.php?caller_id=logout">SIGN OUT</a>
</body>
</html>