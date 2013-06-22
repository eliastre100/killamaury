<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=unicode" />
		<title>Espace admin - Killamaury</title>
	</head>
	<body>
		<?php if (empty($_SESSION['pseudo'])) { ?>
			<form method="post" action="login.php">
				Pseudo : <input type='text' name='pseudo' /><br />
				Mot de passe : <input type="password" name="password" /><br />
				<input type="submit" value="Se connecter" method="post" action="login.php" />
			</form>
		<?php }elseif(!empty($_SESSION['pseudo'])){ ?>
			<a href="add.php">Ajouter des elements.</a><br />
			<a href="update.php">Modifier des elements.</a><br />
			<a href="remove.php">Suprimer des elements</a><br /><br />
			<a href="login.php">Se deconnecter</a>
		<?php } ?>
	</body>
</html>