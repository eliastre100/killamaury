<?php if(session_id()==""){
	session_start();
	echo '<link rel="shortcut icon" type="image/png" href="../images/favicon.png" /><meta http-equiv="Content-Type" content="text/html; charset=unicode" />';
} ?>

<?php if(empty($_SESSION['username'])){
	if(!empty($_POST['username']) AND !empty($_POST['password'])){
		$username = addslashes($_POST['username']);
		$password = md5($_POST['password']);
		$req = "SELECT * FROM admin WHERE pseudo='".$username."' AND password='".$password."'";
		$sql = mysql_query($req);
		if($sql){
			$data = mysql_fetch_assoc($sql);
			if($data['pseudo'] == $username){
				if($data['password'] == $password){
					$_SESSION['username'] = stripslashes($username);
					$_SESSION['rights'] = $data['grade'];
					echo 'Bienvenu '.$username;
					echo '<meta http-equiv="refresh" content="2;url=index.php" />';
				}else{
					echo 'Mot de passe incorrect !<meta http-equiv="refresh" content="2;url=index.php" />';
				}
			}else{
				echo 'Utilisateur inconnut ou mot de passe incorrect !<meta http-equiv="refresh" content="2;url=index.php" />';
			}
		}else{
			echo 'ERREUR MYSQL ! Veuillez contacter Killamaury ou Eliastre100 (contact@eliastre100.fr) avec ce message :<br />';
			mysql_query($req) OR die(mysql_error());
		}
	}else{ ?>
	<form action="index.php" method="post" >
		<input type="text" name="username" autocomplete="off" />
		<input type="password" name="password" />
		<input type="submit" value="Se connecter" />
	</form>
	<?php }
}else{
	session_destroy();
	echo 'Vous avez bien été deconnecter.';
	echo '<meta http-equiv="refresh" content="1;url=../index.php" />';
}