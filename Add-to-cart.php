<!DOCTYPE html>
<html>
	<form action="goods.php">
		<?php
		session_start();
		$_SESSION['good'] = $val[$i];
		header('Location: http://basket/goods.php')
		?>
	</form>
</html>
