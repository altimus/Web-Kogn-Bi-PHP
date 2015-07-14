<?php

function getCategories(){
  $categories = array();
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=kognbiphp;charset=utf8', 'root', '2211aid');
        }
      catch (Exception $e){
              die('Erreur : ' . $e->getMessage());
      }
      $sql = 'SELECT *   FROM categorie';
      // on envoie la requête
      $reponse = $bdd->query($sql);

      while( $resultat = $reponse->fetch(PDO::FETCH_ASSOC) ){
          array_push($categories, $resultat);
      }

      $reponse->closeCursor(); // Termine le traitement de la requête

  return $categories;
}

function getCategorieName($id){
        try{
              $bdd = new PDO('mysql:host=localhost;dbname=kognbiphp;charset=utf8', 'root', '2211aid');
          }
        catch (Exception $e){
                die('Erreur : ' . $e->getMessage());
        }
      $sql = 'SELECT *   FROM categorie WHERE id='.$id;
      // on envoie la requête
      $reponse = $bdd->query($sql);

      $categorie = $reponse->fetch();
      $reponse->closeCursor(); // Termine le traitement de la requête


  return $categorie["nom"];
}

function getSousCategorieName($id){
  
        try{
              $bdd = new PDO('mysql:host=localhost;dbname=kognbiphp;charset=utf8', 'root', '2211aid');
          }
        catch (Exception $e){
                die('Erreur : ' . $e->getMessage());
        }
      $sql = 'SELECT *   FROM souscategorie WHERE id='.$id;
      // on envoie la requête
      $reponse = $bdd->query($sql);

      $categorie = $reponse->fetch();
      $reponse->closeCursor(); // Termine le traitement de la requête


  return $categorie["nom"];
}



function getSousCategories($idCategorie){
  $sousCategories  = array();
      try{
          $bdd = new PDO('mysql:host=localhost;dbname=kognbiphp;charset=utf8', 'root', '2211aid');
          }
        catch (Exception $e){
                die('Erreur : ' . $e->getMessage());
        }
      $sql = 'SELECT nom, id   FROM souscategorie WHERE categorie_id = '.$idCategorie;
      // on envoie la requête
      $reponse = $bdd->query($sql);
      while( $resultat = $reponse->fetch(PDO::FETCH_ASSOC) ){
          array_push($sousCategories, $resultat);
      }
      $reponse->closeCursor();

  return $sousCategories;
}

function getAnnonces($idSousCategorie){
  $annonces  = array();
      try{
          $bdd = new PDO('mysql:host=localhost;dbname=kognbiphp;charset=utf8', 'root', '2211aid');
          }
        catch (Exception $e){
                die('Erreur : ' . $e->getMessage());
        }
      $sql = 'SELECT *   FROM annonce WHERE souscategorie_id = '.$idSousCategorie;
      // on envoie la requête
      $reponse = $bdd->query($sql);
      while( $resultat = $reponse->fetch(PDO::FETCH_ASSOC) ){
          array_push($annonces, $resultat);
      }
      $reponse->closeCursor();

  return $annonces;
}
function getAnnoncesByTitle($idSousCategorie){
  $annonces  = array();
      try{
          $bdd = new PDO('mysql:host=localhost;dbname=kognbiphp;charset=utf8', 'root', '2211aid');
          }
        catch (Exception $e){
                die('Erreur : ' . $e->getMessage());
        }
      $sql = 'SELECT *   FROM annonce WHERE titre LIKE '.$idSousCategorie;
      // on envoie la requête
      $reponse = $bdd->query($sql);
      while( $resultat = $reponse->fetch(PDO::FETCH_ASSOC) ){
          array_push($annonces, $resultat);
      }
      $reponse->closeCursor();

  return $annonces;
}

?>
