<?php 
//Fonction qui affiche les 100 dernieres news.
function liste(){
	$req="SELECT * FROM news ORDER BY id DESC LIMIT 100 ";
	$sql = mysql_query($req);
	while($data = mysql_fetch_assoc($sql) OR die(mysql_error())){?>
		<a href="administration.php?page=remove_news.php&id=<?php echo $data['id']; ?>"><?php echo $data['titre']; ?></a><br />
	<?php }
} ?>

<?php 
//Fonction qui va suprimer de la bdd la news en fonction de son id.
function remove(){
	$req="DELETE FROM news WHERE id='".$_GET['id']."'";
	if(mysql_query($req) OR die(mysql_error())){ ?>
		<p id="dynamique"></p>
		<script type="text/javascript">
			if(confirm('News suprimée. Voulez vous modifier d\'autre(s) news ?')) {
				document.getElementById("dynamique").innerHTML = '<meta http-equiv="refresh" content="0;url=administration.php?page=remove_news.php" />';
			}else{
				document.getElementById("dynamique").innerHTML = '<meta http-equiv="refresh" content="0;url=index.php" />';
			}
		</script>
	<?php }else{ ?>
		Une erreur s'est produite veuillez recommencer ulterieurement !<meta http-equiv="refresh" content="2;url=index.php" />
	<?php }
}
?>


<?php if(!empty($_SESSION['rights'])){
	if($_SESSION['rights'] >= 3){
		if(empty($_GET['id'])){
			liste();
		}elseif(isset($_GET['id'])){
			remove();
		}else{ ?>
			Une erreur s'est produite ou vous avez passer une etape ! Veuillez recommencer !<meta http-equiv="refresh" content="2;url=index.php" />
		<?php }
	}else{ ?>
		Vous n'avez pas les droits pour acceder a cette page !<meta http-equiv="refresh" content="2;url=index.php" />
	<?php }
}else{ ?>
	Veuillez vous connecter <meta http-equiv="refresh" content="2;url=index.php" />
<?php } ?>