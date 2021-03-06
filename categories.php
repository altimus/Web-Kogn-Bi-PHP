<?php
require_once 'PHP/fonctions.php';

$tab1 = getSousCategories(1);
$tab2 = getSousCategories(2);
$tab3 = getSousCategories(3);
$tab4 = getSousCategories(4);
$tab5 = getSousCategories(5);
$tab6 = getSousCategories(6);
$tab7 = getSousCategories(7);
$tab8 = getSousCategories(8);
$tab9 = getSousCategories(9);
$tab10 = getSousCategories(10);
$tab11 = getSousCategories(11);
$tab12 = getSousCategories(12);
$tab13 = getSousCategories(13);
$tab14 = getSousCategories(14);
$tab15 = getSousCategories(15);
$tab16 = getSousCategories(16);
$tab17 = getSousCategories(17);
$tab18 = getSousCategories(18);

?>
<!DOCTYPE html>
<html>
<head lang="en">
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
                <h1>Catégories</h1>
                <h4>Il y a 18 catégories</h4>
            </div>
        </div>
    </div>
</section><!--end main page heading-->

<?php
    include_once 'inclusions/search_bar.php';
    include_once 'inclusions/ad_sous_recherche.php';
    include_once 'inclusions/categories.php';
    include_once 'inclusions/pied.php';
?>
