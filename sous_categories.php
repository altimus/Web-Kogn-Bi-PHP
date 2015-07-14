<?php
  if (!isset($_GET["num"])) {
    header('Location: /categories.php');
  }
require_once 'PHP/fonctions.php';

$num = $_GET["num"];
  $categorie = getCategorieName($num);

  if($categorie ==""){
      header('Location: categories.php');
  }

  $souscategories = getSousCategories($num);
  if(empty($souscategories)){
      header('Location: categories.php');
  }


?>
<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kogn Bi, vos annonces à portée de main</title>

    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.png" type="image/png" />

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="layerslider/css/layerslider.css">


</head>
<body>

<?php
    include_once 'inclusions/tete.php';
    //include_once 'inclusions/search_bar.php';
?>
<section id="page-head" class="margin-control">
    <div class="container">
        <div class="row col-md-12">
            <div class="page-heading">
                <h1> <?php echo $categorie; ?>  </h1>
            </div>
        </div>
    </div>
</section><!--end main page heading-->

<?php
    include_once 'inclusions/search_bar.php';
    include_once 'inclusions/ad_sous_recherche.php';
    include_once 'inclusions/sous_categories.php';
    include_once 'inclusions/pied.php';
?>
