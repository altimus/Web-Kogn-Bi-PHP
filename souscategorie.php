<?php
  if (!isset($_GET["num"])) {
    header('Location: /categories.php');
  }
    $num = $_GET["num"];

    switch ($num) {
      case '1':
            $sous_categorie = "A Vendre";
        break;
      case '2':
            $sous_categorie = "Auto";
        break;
      case '3':
            $sous_categorie = "Divertissement";
        break;
      case '4':
        # code...
            $sous_categorie = "Education";
        break;
      case '5':
        # code...
            $sous_categorie = "Evénement";
        break;
      case '6':
        # code...
            $sous_categorie = "Hotels";
        break;
      case '7':
        # code...
            $sous_categorie = "Immobilier";
        break;
      case '8':
            $sous_categorie = "Marché";
        # code...
        break;
      case '9':
            $sous_categorie = "Religion";
        # code...
        break;
      case '10':
            $sous_categorie = "Restaurant";
        # code...
        break;
      case '11':
            $sous_categorie = "Romance";
        # code...
        break;
      case '12':
            $sous_categorie = "Santé";
        # code...
        break;
      case '13':
            $sous_categorie = "Service";
        # code...
        break;
      case '14':
            $sous_categorie = "Sport";
        # code...
        break;
      case '15':
            $sous_categorie = "Transport";
        # code...
        break;
      case '16':
            $sous_categorie = "Travail";
        # code...
        break;
      case '17':
            $sous_categorie = "Urgence";
        # code...
        break;
      default:
            $sous_categorie = "Urgence";
        break;
    }

    $sous_categorie =  htmlspecialchars($sous_categorie);


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
                <h1> <?php echo $sous_categorie; ?>  </h1>
            </div>
        </div>
    </div>
</section><!--end main page heading-->

<?php
    include_once 'inclusions/search_bar.php';
    include_once 'inclusions/ad_sous_recherche.php';
    include_once 'inclusions/sous_categorie.php';
    include_once 'inclusions/pied.php';
?>
