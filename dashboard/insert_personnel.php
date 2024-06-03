<?php
  //connection au serveur
  $cnx = @mysqli_connect( "localhost", "root", "", "workshop" ) ;
  
  //récupération des valeurs des champs:
  //nom:
  $nom     = $_POST["nom"] ;
  //prenom:
  $prenom = $_POST["prenom"] ;
  //telephone:
  $telephone = $_POST["telephone"] ;
  //email:
  $email = $_POST["email"] ;
  //login:
  $login = $_POST["login"] ;
  //password:
  $password        = $_POST["password"] ;
  
  //création de la requête SQL:
  $sql = "INSERT  INTO personnels (nom, prenom,telephone,email, login, password)
            VALUES ( '$nom', '$prenom', '$telephone', '$email', '$login', '$password') " ; 
  //exécution de la requête SQL:
  $requete = mysqli_query($cnx,$sql) or die( mysqli_error($cnx) ) ;
 
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo "<script>alert('insertion à réussi')</script>";
    echo "<script>window.open('list_personnel.php','_self')</script>";
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>
