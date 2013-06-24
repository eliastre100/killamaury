<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
		<meta http-equiv="Content-Type" content="text/html; charset=unicode" />
		<title>Jeux des series - Killamaury</title>
		<link rel="stylesheet" type="text/css" href="style/style_site.css">
		<?php mysql_connect('localhost','root','');
		mysql_select_db('killamaury'); ?>
	</head>
	<body>
		<div class='conteneur'>
			<div class="baniere"><img src="images/baniere.png" widht=150 /></div>
			<div class="pub"><img src="images/pub.png"></div>
			<div class="contenu"><h1>Jeux</h1><br />
				<?php $req="SELECT * FROM jeux ORDER BY id DESC";
				$sql=mysql_query($req);
				while($data=mysql_fetch_assoc($sql)){ ?>
					<div class="game_title"><div class="game"><?php echo $data['nom'];?>
							de <?php echo $data['editeur'];?></div>
						<?php echo $data['description'];?><br />
						Ce jeu est present dans la serie <?php echo $data['serie'];?><br />
						Ce jeu coute <?php echo $data['prix'];?> et est editer par <?php echo $data['editeur']; ?> a l'addresse <?php echo "lien"?></div><br />
				<?php } ?>
			</div>
			<div class="nav"><div class="nav_menu">Menu</div><ul>
					<li><a href='videos.php'>Videos</a></li>
					<li><a href='index.php'>News</a></li>
					<li><a href='jeux.php'>Liste des jeux</a></li>
					<li><a href="contact.php">Me contacter</a></li>
					<li><a href='map.php'>Plan du site</a></li>
					<li><a href='http://www.youtube.com/user/KillamauryV2'>Chaine Youtube</a></li>
					<li><a href='https://twitter.com/killamaury'><img src='images/twitter.png' width=45 height=45 /></a><a href='http://www.facebook.com/Killamaury'><img src='images/facebook.png' width=47 height=47 /></a></li>
				</ul>
			</div>
			<div class="footer"><a href="all_games.php">Voir tous les jeux</a> - Copyright Killamaury<!-- Code par eliastre100 --></div>
		</div>
		<?php mysql_close(); ?>
	</body>
</html>