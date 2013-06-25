<?php Session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Espace admin - Killamaury</title>
		<link rel="shortcut icon" type="image/png" href="../images/favicon.png" />
		<meta http-equiv="Content-Type" content="text/html; charset=unicode" />
		<?php mysql_connect('127.0.0.1', 'root', '');
		mysql_select_db('killamaury'); ?>
	</head>
	<body>
		<?php include('includes/'.$_GET['page']); ?>
		<?php mysql_close(); ?>
	</body>
</html>