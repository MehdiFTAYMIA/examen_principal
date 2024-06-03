<?php
  //connection au serveur:
  $cnx = @mysqli_connect( "localhost", "root", "","workshop" ) ;
 
 
 
  //récupération de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement supprimer:
  $id  = $_GET["idPersonne"] ;
 
  //requête SQL:
  $sql = "DELETE 
            FROM personnels
	    WHERE id_pers = ".$id ;
 // echo $sql ;	    
  //exécution de la requête:
  $requete = mysqli_query( $cnx,$sql  ) ;
 
  //affichage des résultats, pour savoir si la suppression a marchée:
  if($requete)
  {
    echo "<script>alert('La suppression à été correctement effectuée')</script>";
	  echo "<script>window.open('list_personnel.php','_self')</script>";
  }
  else
  {
    echo("La suppression à échouée") ;
  }
?>
