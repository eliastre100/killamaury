<!DOCTYPE HTML>
<HTML>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
		<title>ID minecraft - Killamaury</title>
		<?php mysql_connect('db472476053.db.1and1.com', 'dbo472476053', 'eliastre');
		mysql_select_db('db472476053'); ?>
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