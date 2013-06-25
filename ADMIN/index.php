<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Espace admin - Killamaury</title>
		<link rel="shortcut icon" type="image/png" href="../images/favicon.png" />
		<meta http-equiv="Content-Type" content="text/html; charset=unicode" />
		<?php mysql_connect('127.0.0.1', 'root', '');
		mysql_select_db('killamaury'); ?>
	</head>
	<body>
		<?php if(empty($_SESSION['username'])){
			include('includes/login.php');
		}else{
			if($_SESSION['rights']< 1){
				echo 'Votre demande n\'a pas encore été acceptée !<br />';
			}elseif($_SESSION['rights']>= 1){
				echo "<a href='administration.php?page=add_news.php'>Ajouter des news.</a><br />";
				if($_SESSION['rights'] >= 2){
					if($_SESSION['rights'] >= 4){
						echo "<a href='administration.php?page=update_news.php'>Modifier une news</a><br />";					
					}
				}
			}
			echo '<a href="includes/login.php">Se deconecter</a>';
		}?>
		<?php mysql_close(); ?>
	</body>
</html>