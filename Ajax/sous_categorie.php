<?php
require_once '../PHP/fonctions.php';
if(isset($_POST['get_option'])){

  $categorie = $_POST['get_option'];

    $sous_categories = getSousCategories($categorie);


  echo '<div class="col-sm-6 padding-control">
            <span class="form-control-feedback"></span>
                Sous Categorie
                </div>
                  <select name="sous_categorie">';
  foreach ($sous_categories as $value) {
      echo '<option value="'.$value["id"].'">'.$value['nom'].'</option>';
  }
  echo "</select>";

  exit;
}

 ?>
