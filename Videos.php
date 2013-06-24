<!DOCTYPE HTML>
<html>
	<head>
		<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
		<meta http-equiv="Content-Type" content="text/html; charset=unicode" />
		<link rel="stylesheet" type="text/css" href="style/style_site.css">
		<title>Videos - killamaury</title>
		<?php mysql_connect('localhost','root','');
		mysql_select_db('killamaury'); ?>
	</head>
	<body>
		<div class="conteneur">
			<div class="baniere"><img src="images/baniere.png" widht=150 /></div>
			<div class="pub"><img src="images/pub.png"></div>
			<div class="contenu"><h1>Videos</h1>
				<?php $sql="SELECT * FROM video ORDER BY id DESC LIMIT 10";
				$req=mysql_query($sql);
				while($data=mysql_fetch_assoc($req)){ ?>
					<div class="video">
						<div class="video_top">
							<?php echo $data['Titre'];?>
							, Une video de :
							<?php echo $data['Auteur']; ?>
						</div><br />
						<?php echo $data['description']; ?>
						<br/><br/>
						<?php echo $data['lien']; ?>
					</div>
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
			<div class="footer"><a href="all_videos.php">Voir toutes les videos</a> - Copyright Killamaury</div>
		</div>
	<?php mysql_close(); ?>
	</body>
</html>