<?php
  //connection au serveur
  $cnx = @mysqli_connect( "localhost", "root", "","workshop" ) ;
 
  
 
  //récupération des valeurs des champs:
  //nom:
  $nom     = $_POST["nom"] ;
  //prenom:
  $prenom = $_POST["prenom"] ;
   //telephone:
   $telephone = $_POST["telephone"] ;
   //email:
   $email        = $_POST["email"] ;
  //login:
  $login = $_POST["login"] ;
  //password:
  $password        = $_POST["password"] ;
 
 
  //récupération de l'identifiant de la personne:
  $id         = $_POST["id"] ;
 
  //création de la requête SQL:
  $sql = "UPDATE personnels
            SET nom         = '$nom', 
	          prenom     = '$prenom',
		  telephone    = '$telephone',
		  email    = '$email',
		  login    = '$login',
		  password           = '$password '
		  
           WHERE id_pers = '$id' " ;
 
  //exécution de la requête SQL:
  $requete = mysqli_query($cnx , $sql) or die( mysqli_error($cnx) ) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
     echo "<script>window.open('list_personnel.php','_self')</script>";
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>
