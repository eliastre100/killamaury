<!DOCTYPE HTML>
<HTML>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
		<title>ID minecraft - Killamaury</title>
		<?php mysql_connect('localhost', 'root', '');
		mysql_select_db('Killamaury'); ?>
	</head>
	<body>
		<a href="id_minecraft.php?id=0">Air</a><br />
		<a href="id_minecraft.php?id=1">Roche (Stone)</a><br />
		<a href="id_minecraft.php?id=2">Herbe (Grass)</a><br />
		<a href="id_minecraft.php?id=3">Terre (Dirt)</a><br />
		<a href="id_minecraft.php?id=4">Pierre (Cobblestone)</a><br />
		<a href="id_minecraft.php?id=5">Planche (Wooden plank)</a><br />
		<a href="id_minecraft.php?id=6">Pousse d'arbre</a><br />
		<a href="id_minecraft.php?id=7">Bedrock</a><br />
		<a href="id_minecraft.php?id=8">Eau (water)</a><br />
		<a href="id_minecraft.php?id=9">Eau stationaire</a><br/>
		<a href="id_minecraft.php?id=10">Lave (lava)</a><br />
		<a href="id_minecraft.php?id=11">Lave stationnaire</a><br />
		<a href="id_minecraft.php?id=12">Sable (sand)</a><br />
		<a href="id_minecraft.php?id=13">Gravier (gravel)</a><br />
		<a href="id_minecraft.php?id=14">Minerai d'or (gold ore)</a><br />
		<a href="id_minecraft.php?id=15">Minerai de fer (iron ore)</a><br />
		<a href="id_minecraft.php?id=16">Minerai de charbon (Coal ore)</a><br />
		<a href="id_minecraft.php?id=17">Bois (Wood)</a><br />
		<a href="id_minecraft.php?id=18">Feuillage (leaves)</a><br />
		<a href="id_minecraft.php?id=19">Eponge (sponge)</a><br />
		<a href="id_minecraft.php?id=20">Verre (glass)</a><br />
		<a href="id_minecraft.php?id=21">Minerai de Lapis-lazuli (lapis lazuli ore)</a><br />
		<a href="id_minecraft.php?id=22">Bloc de Lapis-lazuli (lapis lazuli block)</a><br />
		<a href="id_minecraft.php?id=23">Distributeur (dispenser)</a><br />
		<a href="id_minecraft.php?id=24">Grès (sandstone)</a><br />
		<a href="id_minecraft.php?id=25">Bloc musical (note Block)</a><br />
		<a href="id_minecraft.php?id=26">Lit (bed)</a><br />
		<a href="id_minecraft.php?id=27">Rails de propulsion (powered rails)</a><br />
		<a href="id_minecraft.php?id=28">Rails de détection (detector rail)</a><br />
		<a href="id_minecraft.php?id=29">Piston collant (sticky piston)</a><br />
		<a href="id_minecraft.php?id=30">Toile d'araignée (cobweb)</a><br />
		<a href="id_minecraft.php?id=31">Herbes hautes</a><br />
		<a href="id_minecraft.php?id=32">Arbuste mort</a><br />
		<a href="id_minecraft.php?id=33">Piston</a><br />
		<a href="id_minecraft.php?id=34">Tige de piston</a><br />
		<a href="id_minecraft.php?id=35">Laine (wool)</a><br />
		<a href="id_minecraft.php?id=36">Bloc déplacé par un piston</a><br />
		<a href="id_minecraft.php?id=37">Pissenlit</a><br />
		<a href="id_minecraft.php?id=38">Rose</a><br />
		<a href="id_minecraft.php?id=39">Champignon brun (brown mushroom)</a><br />

<br /><br /><br /><!-- a enlever -->
		<div class="Block/item minecraft">
			<?php $slq="SELECT * FROM id_minecraft WHERE id=".$_GET['id'];
			$req=mysql_query($slq);
			while ($data=mysql_fetch_assoc($req)) {
				echo $data['name'];?> id: <?php echo $_GET['id'];?><br /><?php 
				echo $data['description'];?><br /><img src="images/id_minecraft/img_<?php echo $_GET['id']; ?>.png" />
				<img src="images/id_minecraft/craft_<?php echo $_GET['id']; ?>.png"<?php 
			}?>
		</div>
	<?php mysql_close(); ?>
	</body>
</HTML>