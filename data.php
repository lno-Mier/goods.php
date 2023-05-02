<?php
$products = array(
	"Drink" => array('Cola','coffee','Asu'),
	"Candy" => array('Choclate', 'marshmellow', 'chupa-chups'),
	"fast-food" => array('burger', 'Duty-frie', 'pizza'),
	"extra-product" => array('human', 'animal', 'Otaku')
);
	session_start();
	$goods = array('good' => $val[$i]);
	$result = array_intersect($products, $goods);
	$_SESSION['goods'] = $result;
	header('Location: http://basket/goods.php')
?>
