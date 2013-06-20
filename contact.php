<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
		<title>Contact - Killamaury</title>
		<link rel="stylesheet" type="text/css" href="style/style_site.css">
	</head>
	<body>
		<div class="conteneur">
			<div class="baniere"><img src="images/baniere.png"></div>
			<div class="pub"><img src="images/pub.png" /></div>
			<div class="contenu"><h1>Me contacter</h1>
				<?php if (!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['message'])) { 
					$message='Un message de '.$_POST['pseudo'].' (email : '.$_POST[email].' ) \n'.$_POST['message'];
					echo $message;
					mail('TON_EMAIL', "Un message d'un internaute", message);?>
					Le message a bien ete envoyer a Killamaury merci de ton message.
				<?php }else{ ?>
					<form method="post">
						<div class="champs_contact_1">Pseudo : <input type="text" name="pseudo" />
						E-mail : <input type="email" name="email" /></div><br />
						Message : <div class="champs_contact_1"><textarea name="message" rows="13"cols="80"></textarea>
						<input type="submit" method="post" action="contact.php" value="Envoyer"></div>
					</form>
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
		</div>
	</body>
</html>