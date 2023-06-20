<?php
	session_start(); //позволяет открывать и использовать сессии
	/*
	$_SESSION['goods'] = [
		[
			"name"=>"Cola",
			"cost"=>100,
			"quantity"=>2,
			"total"=>200
		],
		[
			"name"=>"Asu",
			"cost"=>90,
			"quantity"=>10,
			"total"=>900
		]
	];
	die(var_dump($_SESSION));
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>basket</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<style type="text/css">
		.button-margin{
			margin-top: 20px;
			margin-left: 50px;
		}
	</style>
</head>
<body>
		<?php
			include 'data.php';

			echo "<table border='1'><tr>";

			foreach ($products as $key => $value) {
				echo "<th>$key</th>";
			}

			echo "</tr>";

			for ($i=0; $i < count(end($products)); $i++) { 
				echo "<tr>";
				foreach ($products as $val) {
					echo "<td><div class='container'>
					<form target='data.php' method='post'>
						$val[$i]
 			 			<button type='submit' class='btn btn-info btn-lg' value='$val[$i]' name='good' />В корзину</button>
 			 		</form>
					</div></td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		?>
	<button type='button' class='btn btn-info btn-lg button-margin' data-toggle='modal' data-target='#myModal'>Открыть корзину</button>
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Корзинка</h4>
        </div>
        <div class="modal-body">
          <p>
          	<?php
          		$good = 'None';
          		for ($i=0; $i < 9; $i++) {
          			if (isset($_POST['good']) == true) {
									$good = $_POST['good'];
									$_SESSION['goods'][$i] = $good;
									echo $_SESSION['goods'][$i];
								};
							};
							if (isset($_POST['good']) == false) {
								echo $good;
							};
          	?>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
