<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=unicode" />
		<title>Connexion - Killamaury</title>
		<?php mysql_connect('localhost','root','');
		mysql_select_db('killamaury'); ?>
	</head>
	<body>
		<?php if(empty($_SESSION['pseudo']) AND empty($_POST['pseudo'])){ ?>
			<form method="post" action="login.php">
				Pseudo : <input type='text' name='pseudo' /><br />
				Mot de passe : <input type="password" name="password" /><br />
				<input type="submit" value="Se connecter" method="post" action="login.php" />
			</form>
		<?php }elseif (empty($_SESSION['pseudo']) AND !empty($_POST['pseudo'])) {
			$sql="SELECT * FROM admin WHERE password='".$_POST['password']."' AND pseudo='".$_POST['pseudo']."'";
			$req=mysql_query($sql);
			if($req=mysql_query($sql)){
				while ($data=mysql_fetch_assoc($req)) {
					if ($data['grade']>=1) {
						$_SESSION['pseudo']=$_POST['pseudo']; ?>
						Connexion effectuée!<br />
						<a href="index.php">Commencer a gere le site.</a>
			<?php }}}else{ ?>
				Ce compte n'existe pas ou n'est pas administarteur. <a href="login.php">Essayer de se reconecter.</a>
			<?php } ?>
				
		<?php }elseif(!empty($_SESSION['pseudo'])){ ?>
			Vous avez bien ete deconnecter. <a href="http://killamaury.fr">Retour au site</a>
			<?php session_destroy();
		} ?>

		<?php mysql_close(); ?>
	</body>
</html>