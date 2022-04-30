<?php
include 'mysql_connect.php';

//looping data dari form yang dikirim oleh ajax
foreach ($_POST['id'] as $id) {
	//eksekusi query delete data ke table product
	$result = mysqli_query($conn, "delete from product where product_id = '$id'");
}

//kembalikan pesan ke dalam jquery
echo json_encode([
	'success' => true,
	'message' => 'Berhasil terdelete.',
]);