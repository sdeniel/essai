<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
FICHIER.PHP QUI PERMET DE VERIFIER L'AUTHENTIFICATION ET ENVOI VERS L'ACCUEIL
SI LOGIN ET MDP CORRESPONDANT A CEUX DE LA BASE DE DONNEES
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

<?php
//Sécurisation des données saisies pour la connection
$login = htmlspecialchars($_POST['pseudoCo']);
$password = htmlspecialchars($_POST['passwordCo']);


//On récupère nos données de la BDD, de la table des login
$bdd = new PDO('mysql:host=localhost; dbname=Afpa-Bay; charset=utf8', 'root', '');
$reponse = $bdd->query('SELECT * FROM login WHERE identifiant = "'.$login.'"');
$donnees = $reponse->fetch(PDO::FETCH_ASSOC);

// On vérifie les ID et mot de passe de l'utilisateur
if (isset($donnees['identifiant'])&&($donnees['identifiant'] == $login)&&($donnees['password'] == $password)){
  header('Location: accueil.php');
  exit();
}
else {
    header('Location: login.php');
}

?>
