<?php
session_start();
$id = $_GET['id'];
echo '<script>alert("hhji")</script>';
if (!in_array($id, $_SESSION['cart'])) {
	$_SESSION['cart'][] = $id;
}
echo json_encode($_SESSION['cart']);
?>
