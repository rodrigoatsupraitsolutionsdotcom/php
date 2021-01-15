<?php

	session_start();
	if ( $_SESSION['user'] == null ) {
			header( "Location: index.php?bad=3" ); 
			exit; 
	}

	$mysqli = new mysqli('localhost', 'root', '10qpwo', 'login_system');

	if ($mysqli->connect_errno > 0) {
		echo "Sorry, this website is experiencing problems.<br>";
		echo "Error: Failed to make a MySQL connection, here is why: <br>";
		echo "Errno: " . $mysqli->connect_errno . "<br>";
		echo "Error: " . $mysqli->connect_error . "<br>";
		exit;
	}
	
	$sql = "SELECT name FROM users WHERE id=".$_SESSION['user'];
	if (!$result = $mysqli->query($sql)) {
		echo "ERROR UNKNOWN";
		exit;
	}else{
		
		if ($result->num_rows == 1) {
		
			$user = $result->fetch_assoc();
		}else{
			header( "Location: index.php?bad=3" );
			exit;
		}
	}

?>
<html>
<head><title>Welcome</title></head>
<body>
Welcome <?php echo( $user['name'] ); ?><br/><br/>
<a href="logout.php">Logout</a>
</body>
</html>
