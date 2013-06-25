<style>
form
{
	text-align: center;
}

p
{
	text-align: center;
}
</style>
<?php if(!empty($_SESSION['rights'])){ ?>
	<?php if($_SESSION['rights'] >= 1){ ?>
		<?php if(empty($_POST['title']) AND empty($_POST['news'])){ ?>
			<form action="administration.php?page=add_news.php" method="post">
				<input type="text" name="title" /><br />
				<textarea name="news" rows="30" cols="100"></textarea><br />
				<input type="submit" value="ajouter" />
			</form>
		<?php }elseif(empty($_POST['title']) OR empty($_POST['news'])){ ?>
			<p>Veuillez rempir l'integralitée du formulaire !</p>
			<form action="administration.php?page=add_news.php" method="post">
				<input type="text" name="title" value="<?php if(!empty($_POST['title'])){ echo $_POST['title']; } ?>" /><br />
				<textarea name="news" rows="30" cols="100"><?php if(!empty($_POST['news'])){ echo $_POST['news']; } ?></textarea><br />
				<input type="submit" value="ajouter" />
			</form>
		<?php }elseif(!empty($_POST['title']) AND !empty($_POST['news'])){
			$title = addslashes($_POST['title']);
			$news = addslashes($_POST['news']);
			$req = "INSERT INTO news VALUES ('', '".$_SESSION['username']."', '".$title."', '".$news."')";
			if(mysql_query($req)){ ?>
				<p id="dynamique"></p>
				<script type="text/javascript">
					if(confirm('Enregistrer une autre news ?')) {
						document.getElementById("dynamique").innerHTML = '<meta http-equiv="refresh" content="0;url=administration.php?page=add_news.php" />';
					}else{
						document.getElementById("dynamique").innerHTML = '<meta http-equiv="refresh" content="0;url=index.php" />';
					}
				</script>
			<?php }else{ echo 'erreur'; }}
		?>
	<?php }else{
		echo 'VOUS N\'AVEZ PAS ACCES A CETTE PAGE ! ';
	} ?>
<?php }else{ echo 'VOUS N\'AVEZ PAS ACCES A CETTE PAGE ! ';
}