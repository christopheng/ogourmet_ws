<?php
session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		
	</head>

	<body>
		<p> 
			Email : <?php echo $_SESSION['id']; ?> <br/>
		</p>
	</body>
	
</html>