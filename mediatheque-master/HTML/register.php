<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
FICHIER.PHP QUI PERMET DE S'ENREGISTRER DANS LA BASE DE DONNEES
VERIFICATION QUE CE N'EST PAS UN BOT AVEC UN CAPTCHA
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
<?php

      //Sécurisation des données saisies pour l'inscription'
      $loginIns = filter_input(INPUT_POST, 'loginIns', FILTER_SANITIZE_STRING);
      $pseudoIns = filter_input(INPUT_POST, 'pseudoIns', FILTER_SANITIZE_STRING);
      $passwordIns = filter_input(INPUT_POST, 'passwordIns', FILTER_SANITIZE_STRING);
      $emailIns = filter_input(INPUT_POST, 'emailIns', FILTER_VALIDATE_EMAIL);
      $captcha = filter_input(INPUT_POST, 'captcha', FILTER_SANITIZE_STRING);

      //FONCTION CAPTCHA TEMPORAIREMENT ICI (A DEPLACER ULTERIEUREMENT ...)
 		  //Création fonction captcha
 		 function captcha() {
   		 	$listeMot = array('trampoline','ballon','escargot','antilope','telephone');
   		 	$mot = $listeMot[array_rand($listeMot)];
   			$_SESSION['captcha'] = $mot;
   		 	return $mot;
 		 }

      if($_POST &&($_captcha == $_SESSION['captcha']))
      {
          // Test Email valide ou non
          if (!$emailIns) {
              echo "Email non valide";
              //header('Location: login.php');
          }
          else {
            echo "Email valide";
            $bdd = new PDO('mysql:host=localhost;dbname=afpa-Bay;charset=utf8','root','');
            $req = $bdd -> prepare ('INSERT INTO login(identifiant, password, id, pseudo, email)
            VALUES(:identifiant, :password, :id, :pseudo, :email )');
            $req->execute(array(
                'identifiant' => $loginIns,
                'password' => $passwordIns,
                'id' => $_GET['id'],
                'pseudo' => $pseudoIns,
                'email' => $emailIns
            ));
            //header('Location: accueil.php');
          }
      }



  ?>
