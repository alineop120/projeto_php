<<<<<<< HEAD
<?php
	session_start();
	$_SESSION = array();
	session_unset();
	session_destroy();
	echo "<script>
				location.href = ('index.php');
			</script>";
=======
<?php
	session_start();
	$_SESSION = array();
	session_unset();
	session_destroy();
	echo "<script>
				location.href = ('index.php');
			</script>";
>>>>>>> 68e120d9fdaff8d7cbf1c55a229d164fe0bc4d6f
?>