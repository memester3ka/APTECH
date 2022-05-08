<?php
$fullnameGet = $emailGet = $pwdGet = '';
if(!empty($_GET)) {
	$fullnameGet = $_GET['fullname'];
	$emailGet = $_GET['email'];
	$pwdGet = $_GET['pwd'];
	echo $fullnameGet.'-'.$emailGet.'-'.$pwdGet;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
	<table class="table table-bordered">
		<tr>
			<th style="width: 200px;">Full Name</th>
			<td><?php echo $fullnameGet ?></td>
		</tr>
		<tr>
			<th style="width: 200px;">Email</th>
			<td><?php echo $emailGet?></td>
		</tr>
		<tr>
			<th style="width: 200px;">Password</th>
			<td><?php echo $pwdGet?></td>
		</tr>
	</table>
</div>
</body>
</html>