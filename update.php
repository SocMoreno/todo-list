<!DOCTYPE html>
<?php include 'db.php';

$id = $_GET['id'];
$sql = "select * from tasks where id = '$id'";
$rows = $db ->query($sql);
$row = $rows->fetch_assoc();

if (isset($_POST['send'])) 
{	

$task = $_POST['task'];
$sql = "update tasks set name = '$task' where id = '$id'";
$db->query($sql);
header('location: index.php');
}

?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<title>Crud App</title>
	</head>
	<body>
		<div class="container">
			<div class="row"></div>
			<center><h1>UPDATE Todo List</h1></center>
			<div class="col-md-10 col-md-offset-1">
				<table class="table">
					
					
					<hr><br>
					
					
					
					<form method="post" >
						<div class="form-group">
							<label>Task Name</label>
							<input type="text" value="<?php echo $row['name'] ?>"required name="task" class="form-control">
						</div>
						<input type="submit" name="send" value="Add task" class="btn btn-success">
					</form>
				</div>
			</div>
		</body>
	</html>