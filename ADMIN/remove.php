<?php SESSION_start(); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Supprimer - killamaury</title>
		<?php mysql_connect('localhost','root','');
		mysql_select_db('killamaury'); ?>
		<?php function list_news(){
			$req="SELECT * FROM news";
			$sql=mysql_query($req);
			while ($data=mysql_fetch_assoc($sql)){
				echo "<a href='remove.php?type=news&id=".$data['id']."'>".$data['titre']."</a><br />";
			}
		} ?>
	</head>
	<body>
		<?php if(!empty($_SESSION['pseudo'])){
			if(empty($_GET['type'])){ ?>
				<a href="remove.php?type=news">Supprimer une news.</a><br />
				<a href="remove.php?type=video">Supprimer une video.</a><br />
				<a href="remove.php?type=game">Supprimer un jeu.</a><br />
			<?php }elseif($_GET['type']=='news'){
				if(!empty($_GET['id'])){
					$req="DELETE FROM news WHERE id='".$_GET['id']."'";
					if(mysql_query($req)){
						echo "La news a bien ete suprimée ! <a href='index.php'>Revenir au menu</a>";
					}else{
						echo "Une erreur est survenu, veuillez recommencer plus tard. <a href='index.php'>Revenir au menu</a>";		
					}
				}else{
					list_news();
				}
			}
		}else{
			echo "Veuillez vous connecter avant d'acceder a cette page ! <a href='login.php'>Se connecter</a>";
		}
		mysql_close();?>
	</body>
</html>