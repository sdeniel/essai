<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Accueil &mdash; Afpa-Bay</title>
		<link rel="stylesheet" type="text/css" href="../CSS/main.css">
	</head>


	<body>
			<header>
					<h1>The Afpa Bay</h1>
			</header>

<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
CREATION DE 2 FORMULAIRES : L'UN pour SE CONNECTER, L'AUTRE POUR S'ENREGISTRER
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    	<section id="inscription">
	        <!-- FORMULAIRE CONNECTION -->
	        <form class="formConnection" action="connection.php" method="POST"> <!--action="accueil.php"-->
	            <h2>Se connecter</h2>
	            <div class="imgcontainer">
	                <img src="../IMG/avatar.png" alt="Avatar" class="avatar">
	            </div>
	            <div class="container">
	                <p><input type="text" name="pseudoCo" placeholder="Pseudo ..." required></p>
	                <p><input type="password" name="passwordCo" placeholder="Password" required></p>
	                <p><input type="submit" value="Connection"></p>
	            </div>
	        </form>

					<?php include_once('register.php'); ?>
	        <!-- FORMULAIRE INSCRIPTION -->
	        <form class="formConnection" action="register.php" method="POST">
	            <h2>S'enregistrer</h2>
	            <div class="imgcontainer">
	                <img src="../IMG/avatar.png" alt="Avatar" class="avatar">
	            </div>
	            <div class="container">
		              <p><input type="text" name="loginIns" placeholder="Login ..." required/></p>
		              <p><input type="text" name="pseudoIns" placeholder="Pseudo ..." required/></p>
		              <p><input type="text" name="passwordIns" placeholder="Mot de passe ..." required/></p>
		              <p><input type="text" name="emailIns" placeholder="Email ..." required/></p>
		              <p>CAPTCHA : Veuillez taper le mot :"<?php echo captcha(); ?>"</p><input type="text" name="captcha" />
		              <p><input type="submit" value="Connection"/></p>
	            </div>
	        </form>
     </section>




	</body>
</html>
