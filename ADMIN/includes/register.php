		<?php mysql_connect('127.0.0.1', 'root', '');
		mysql_select_db('killamaury'); ?>

<form action="register.php" method="post">
	<input type="text" name="username" />
	<input type="password" name="password" />
	<input type="submit" value="Register" />
</form>
<?php if(!empty($_POST['username']) AND !empty($_POST['password'])){
	$username = addslashes($_POST['username']);
	$password = md5($_POST['password']);
	$req = "INSERT INTO admin VALUES ('', '".$username."', '".$password."', 0)";
	$sql = mysql_query($req) OR die(mysql_error());
	if($sql){
		echo 'Utilisateur inscrit !';
	}else{
		echo 'Utilisateur non inscrit !';
	}
} ?>