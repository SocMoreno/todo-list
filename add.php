<?php 
include 'db.php';

if (isset($_POST['send'])) {


$name = $_POST['task'];

$sql = "insert into tasks (name) values('$name')";

$val = $db->query($sql);
if ($val==TRUE) {
	header('location: index.php');
}
}







 ?>