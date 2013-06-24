<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="shortcut icon" type="image/png" href="../images/favicon.png" />
		<meta http-equiv="Content-Type" content="text/html; charset=unicode" />
		<title>Update - kilamaury</title>
		<?php mysql_connect('localhost','root','');
		mysql_select_db('killamaury'); ?>
		<?php function list_update(){ 
			$req="SELECT * FROM news ORDER BY id DESC";
			$sql=mysql_query($req);
			while($data=mysql_fetch_assoc($sql)){
				echo "<a href='update.php?type=news&id=";
				echo $data['id'];
				echo "' >";
				echo $data['titre'];
				echo " de ";
				echo $data['auteur'];
				echo "</a><br />";
			}
		 } ?>
		 <?php function formulaire_news(){ ?>
		 		<?php $req="SELECT * FROM news WHERE id=".$_GET['id'];
		 		$sql=mysql_query($req);
		 		while($data=mysql_fetch_assoc($sql)){ ?>
		 			<form action="Update.php?type=news&id=<?php echo $_GET['id']; ?>" method="post">
		 				<input type="text" name="auteur" value="<?php if(!empty($_POST['auteur'])){ echo $_POST['auteur']; }else{ echo $data['auteur']; } ?>" /><br />
		 				<input type="text" name="titre" value="<?php if(!empty($_POST['titre'])){ echo $_POST['titre']; }else{ echo $data['titre']; } ?>" /><br />
		 				<textarea name="contenu" cols='100' rows='30'><?php if(!empty($_POST['contenu'])){ echo $_POST['contenu']; }else{ echo $data['contenu']; } ?></textarea><br />
		 				<input type="submit" value="Modifier" method="post" action="Update.php?type=news&id=<?php echo $_GET['id']; ?>" />
		 			</form>
		 		<?php } ?>
		 		
		<?php } ?>
	</head>
	<body>
		<?php if(empty($_GET['type'])){ ?>
			<a href="update.php?type=news">Modifier des news.</a><br />
			<a href="update.php?type=video">Modifier les Videos</a><br />
			<a href="update.php?type=game">Modifier des jeux</a><br />
		<?php }elseif($_GET['type']=='news'){
			if(empty($_GET['id'])){
				list_update();
			}else{
				if(empty($_POST['auteur'])){
					echo "Veuillez entrer un auteur";
					formulaire_news();
				}else{
					if(empty($_POST['titre'])){
						echo "Veuillez entrer un titre !";
						formulaire_news();
					}else{
						if(empty($_POST['contenu'])){
							echo "Veuillez entrer un contenu !";
							formulaire_news();
						}else{
							$auteur=$_POST['auteur'];
							$titre=$_POST['titre'];
							$contenu=$_POST['contenu'];
							$id=$_GET['id'];
							$req="UPDATE news SET  auteur='".$auteur."', titre='".$titre."', contenu='".$contenu."' WHERE id='".$id."' ;";
							$sql=mysql_query($req);
							if(mysql_query($req)){
								echo "La modification a bien ete effectuée <a href='index.php'>Retour a la page d'acceuil</a> ";
							}else{
								echo "Une erreur s'est produite veuillez reesayer ulterieurement.";
								formulaire_news();
							}
						}
					}
				}
			}
		 } ?>
		<?php mysql_close()?>
	</body>
</head>