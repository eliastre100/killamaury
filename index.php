<!DOCTYPE html> 
<html>
	<body>
		<meta http-equiv="Content-Type" content="text/html; charset=unicode" />
		<title>news - Killamaury</title>
		<link rel="stylesheet" type="text/css" href="style/style_site.css">
		<?php mysql_connect('localhost','root','');
		mysql_select_db('killamaury'); ?>
	</body>
	<head>
		
			
		<div class='conteneur'>
				<div class="baniere"><img src="images/baniere.png" widht=150 /></div>
				<div class="pub">
					<img src="images/pub.png" width=150px />
				</div>
				<div class="contenu"><h1>NEWS</h1>
			<?php $sql="SELECT * FROM news ORDER BY id DESC LIMIT 10";
			$req = mysql_query($sql);
			while($data=mysql_fetch_assoc($req)){
				?><div class="news"><div class="titre_news"> <?php echo $data['auteur']; ?>
				 a ecrit <?php echo $data['titre']; ?>
				  :</div><br />
				<?php echo $data['contenu']; ?></div><br /><br /><?php 
			} ?></div>
			<div class="nav"><div class="nav_menu">Menu</div><ul>
						<li><a href='videos.php'>Videos</a></li>
						<li><a href='index.php'>News</a></li>
						<li><a href='jeux.php'>Liste des jeux</a></li>
						<li><a href="contact.php">Me contacter</a></li>
						<li><a href='map.php'>Plan du site</a></li>
						<li><a href='http://www.youtube.com/user/KillamauryV2'>Chaine Youtube</a></li>
					<li><a href='https://twitter.com/killamaury'><img src='images/twitter.png' width=45 height=45 /></a><a href='http://www.facebook.com/Killamaury'><img src='images/facebook.png' width=47 height=47 /></a></li></ul></div>
			</div>					
			<div class='footer'><a href="all_news.php">Voir toutes les news</a> - Copyright Killamaury <!--- Code de eliastre100 --></div>
			<?php mysql_close(); ?>
	</head>
</html>