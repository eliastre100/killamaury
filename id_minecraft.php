<!DOCTYPE HTML>
<HTML>
	<head>
		<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
		<title>ID minecraft - Killamaury</title>
		<link rel="stylesheet" type="text/css" href="style/style_id.css">
		<?php mysql_connect('localhost', 'root', '');
		mysql_select_db('Killamaury'); ?>
	</head>
	<body>
		<?php $sql="SELECT * FROM id_minecraft_name";
		$req=mysql_query($sql);
		while ($data=mysql_fetch_assoc($req)){?>
			<a href="id_minecraft.php?id=<?php echo $data['id']; ?>"><?php echo $data['name']; ?></a><br />
		<?php } ?>

<br /><br /><br /><!-- a enlever -->
		<div class="Block/item minecraft">
			<?php $slq="SELECT * FROM id_minecraft WHERE id=".$_GET['id'];
			$req=mysql_query($slq);
			while ($data=mysql_fetch_assoc($req)) {
				echo $data['name'];?> id: <?php echo $_GET['id'];?><br /><?php 
				echo $data['description'];?><br /><img src="images/id_minecraft/img_<?php echo $_GET['id']; ?>.png" />
				<img src="images/id_minecraft/craft_<?php echo $_GET['id']; ?>.png">
			<?php } ?>
		</div>
	<?php mysql_close(); ?>
	</body>
</HTML>