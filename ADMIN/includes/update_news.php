<?php 
 //Fonction qui liste les 100 dernieres news.
function liste(){
	$req="SELECT * FROM news ORDER BY id DESC LIMIT 100 ";
	$sql = mysql_query($req);
	while($data = mysql_fetch_assoc($sql) OR die(mysql_error())){?>
		<a href="administration.php?page=update_news.php&id=<?php echo $data['id']; ?>"><?php echo $data['titre']; ?></a><br />
	<?php }
} ?>

<?php 
//Fonction qui permet de recuperer les news dans le meme formulaire que pour l'ajout et permet de les modifier avant de passer a l'envoi des données au prochain chargement de la page.
function edit(){ 
	$req = "SELECT * FROM news WHERE id=".$_GET['id'];
	$sql = mysql_query($req);
	$data = mysql_fetch_assoc($sql); ?>
	<form action="administration.php?page=update_news.php&id=<?php echo $_GET['id']; ?>" method="post">
		<input type="text" name="titre" value="<?php if(empty($_POST['titre'])){ echo $data['titre']; }else{ echo $_POST['titre']; } ?>"><br />
		<textarea cols="100" rows="30" name="contenu"><?php if(empty($_POST['contenu'])){ echo $data['contenu']; }else{ echo $_POST['contenu']; }?></textarea><br />
		<input type="submit" value="Modifier" />
	</form>
<?php } ?>

<?php 
//Fonctiton qui met a jour la base MySQL et detecte si tout s'est bien derouler.
function updateSql(){
	extract($_POST);
	extract($_GET);
	$titre = addslashes($titre);
	$contenu = addslashes($contenu);
	$username = addslashes($_SESSION['username']);
	$req = "UPDATE news SET titre='".$titre."', contenu='".$contenu."', auteur='".$username."' WHERE id='".$id."'";
	echo $req;
	if(mysql_query($req) OR die(mysql_error())){ ?>
		<p id="dynamique"></p>
		<script type="text/javascript">
			if(confirm('Mise a jour effecuée. Voulez vous modifier d\'autre(s) news ?')) {
				document.getElementById("dynamique").innerHTML = '<meta http-equiv="refresh" content="0;url=administration.php?page=update_news.php" />';
			}else{
				document.getElementById("dynamique").innerHTML = '<meta http-equiv="refresh" content="0;url=index.php" />';
			}
		</script>
	<?php }else{ ?>
		<p>Une erreur s'est produite !</p>
		<?php liste();
	}
} ?>

<?php if(!empty($_SESSION['username'])){
	if($_SESSION['rights'] >= 3){ 
		if(empty($_GET['id'])){
			liste();
		}elseif(isset($_GET['id']) AND empty($_POST['titre']) OR empty($_POST['contenu'])){
			edit();
		}elseif(isset($_GET['id']) AND isset($_POST['titre']) AND isset($_POST['contenu'])){ 
			updateSql();
		}else{ ?>
			Une erreur est parvenue !<meta http-equiv="refresh" content="2;url=index.php" />
		<?php }
	}else{ ?>
		Vous n'avez pas accès a cette page !<meta http-equiv="refresh" content="2;url=index.php" />
	<?php }
}else{ ?>
	Vous n'avez pas accès a cette page ! Veuillez vous identifier !<meta http-equiv="refresh" content="2;url=index.php" />
<?php } ?>