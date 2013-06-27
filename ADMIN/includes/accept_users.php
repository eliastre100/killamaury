<?php 
//Fonction qui va recuperer les utilisateurs qui n'ont pas été acceptée.
function liste(){
	$req = "SELECT id, pseudo FROM admin WHERE grade='0'";
	if($sql = mysql_query($req)){
		while($data = mysql_fetch_assoc($sql)){
		?><form><?php echo $data['pseudo']; ?>
		<a href="administration.php?page=accept_users.php&users=<?php echo $data['id']; ?>&action=accept" >Accepter</a>
		<a href="administration.php?page=accept_users.php&users=<?php echo $data['id']; ?>&action=deny">Refuser</a><br />
	<?php }
	echo '<br />Fin des demandeurs.<a href="index.php">Retour a l\'acceuil</a>';
	}else{
		echo('ERREUR SQL !<meta http-equiv="refresh" content="2;url=index.php" />');
		die(mysql_error());
	}
}
?>

<?php
//Fonction qui va permetre de demander le grade du nouveau membre.
function define_grade(){
	if(empty($_POST['grade'])){ ?>
		<form method="post" action='administration.php?page=accept_users.php&users=<?php echo $_GET['users']; ?>&action=accept'>
			<input type="text" name="grade" />
			<input type="submit" value="Valider" />
		</form>
	<?php }else{
		$req = "UPDATE admin SET grade='".$_POST['grade']."' WHERE id='".$_GET['users']."'";
		if(mysql_query($req) OR die(mysql_error())){ ?>
			<p id="dynamique"></p>
				<script type="text/javascript">
					if(confirm('Utilisateur accepté. Voulez vous gerer d\'autres utilisateurs ?')) {
						document.getElementById("dynamique").innerHTML = '<meta http-equiv="refresh" content="0;url=administration.php?page=accept_users.php" />';
					}else{
						document.getElementById("dynamique").innerHTML = '<meta http-equiv="refresh" content="0;url=index.php" />';
					}
				</script>
		<?php }else{
			echo 'Une erreur s\'est produite !<meta http-equiv="refresh" content="2;url=index.php" />';
		}
	}
}
?>

<?php if(!empty($_SESSION['rights'])){
	if($_SESSION['rights'] >=4){
		if(empty($_GET['users'])){
			liste();
		}elseif($_GET['action'] == 'deny'){
			$req = "DELETE FROM admin WHERE id='".$_GET['users']."'";
			if(mysql_query($req)){
				echo 'utilisateur refuser.<meta http-equiv="refresh" content="2;url=index.php" />';
			}
		}elseif($_GET['action'] == 'accept'){
			define_grade();
		}else{
			echo 'Une erreur s\'est produite ! <meta http-equiv="refresh" content="2;url=index.php" />';
		}
	}else{ ?>
		Vous n'avez pas les droits pour acceder a cette page !<meta http-equiv="refresh" content="2;url=index.php" />
	<?php }
}else{ ?>
	Veuillez vous connecter !<meta http-equiv="refresh" content="2;url=index.php" />
<?php }

?>