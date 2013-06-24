<?php session_start(); ?>
<!DOCTYPE HTML>
	<head>
		<link rel="shortcut icon" type="image/png" href="../images/favicon.png" />
		<meta http-equiv="Content-Type" content="text/html; charset=unicode" />
		<title>Ajouter des elements - Killmaury</title>
		<?php mysql_connect('localhost','root','');
		mysql_select_db('killamaury'); ?>
		<?php function questionaire(){ ?>
			<form action="add.php?type=news" method="post">
				Auteur : <input type="text" name="auteur" value="<?php if(!empty($_POST['auteur'])){ echo $_POST['auteur']; } ?>" /><br />
				Titre : <input type="text" name="titre" value="<?php if(!empty($_POST['titre'])){ echo $_POST['titre']; } ?>" /><br />
				<textarea name="contenu" cols='100' rows='30'><?php if(!empty($_POST['contenu'])){ echo $_POST['contenu']; } ?></textarea><br />
				<input type="submit" value="Ajouter la news" method="post" action="add.php?type=news" />
			</form>
		<?php } ?>
	</head>
	<body>
		<?php if(!empty($_SESSION['pseudo'])){ ?>
			<?php if(empty($_GET['type'])){ ?>
				<a href="add.php?type=news">Ajouter une news</a><br />
				<a href="add.php?type=video">Ajouter une video</a><br />
				<a href="add.php?type=game">Ajouter un jeu</a><br />
			<?php }elseif($_GET['type']=='news'){ 
				if(!empty($_POST['auteur'])){
					if(!empty($_POST['titre'])){
						if(!empty($_POST['contenu'])){
							$auteur=$_POST['auteur'];
							$titre=$_POST['titre'];
							$contenu=$_POST['contenu'];
							$req="INSERT INTO news (id , auteur , titre , contenu ) VALUES ( NULL , '$auteur',  '$titre',  '$contenu' );";
							if (mysql_query($req)) {
								echo "La news a bien ete ajoutée. <a href='index.php'>Retour a la page d'acceuil</a>";
							}else{
								echo "une erreur est survenu !";
								questionaire();
							}
						}else{
							echo "Veillez entrer un contenu !";
							questionaire();
						}
					}else{
						echo 'Veiellez entrer un titre a la news !';
						questionaire();
					}
				}else{ 
					echo "Veillez entrer un auteur !";
					questionaire();
				}}else{ ?>
				<form action="add.php?type=news" method="post">
					Auteur : <input type="text" name="auteur" /><br />
					Titre : <input type="text" name="titre" /><br />
					<textarea name="contenu" cols='100' rows='30'></textarea><br />
					<input type="submit" value="Ajouter la news" method="post" action="add.php?type=news" />
				</form>
			<?php }
		}else{
			echo "Veuillez vous connecter avant d'acceder a cette page ! <a href='login.php'>Se connecter</a>";
		}
		mysql_close(); ?>
	</body>
</html>