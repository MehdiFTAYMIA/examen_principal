<?php
  //connection au serveur
  $cnx = @mysqli_connect( "localhost", "root", "","workshop" ) ;
 
  
 
  //récupération des valeurs des champs:
 
  $resultat        = $_POST["resultat"] ;
 
 
  //récupération de l'identifiant de la demande:
  $id         = $_POST["id"] ;
 
  //création de la requête SQL:
  $sql = "UPDATE demande
            SET 
            etat = 'traite',
		  resultat          = '$resultat'
		  
           WHERE id_dem = '$id' " ;
 
  //exécution de la requête SQL:
  $requete = mysqli_query($cnx , $sql) or die( mysqli_error($cnx) ) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
     echo "<script>window.open('pages/tables/demandes_traite.php','_self')</script>";
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>
