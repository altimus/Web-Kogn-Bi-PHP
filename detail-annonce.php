<?php
    $annonce["titre"] = "Article de Test";
    $annonce["type"] = "Offre";
    $annonce["prix"] = "100000";
    $annonce["nom"] = "Moussa Dione";
    $annonce["telephone"] = "77 400 00 00";
    $annonce["lieux"] = "Colobane";
    $annonce["details"] = "Ideo urbs venerabilis post superbas efferatarum gentium cervices oppressas latasque leges fundamenta libertatis et retinacula sempiterna velut frugi parens et prudens et dives Caesaribus tamquam liberis suis regenda patrimonii iura permisit.";
    $annonce["region"] = "Dakar";
    $annonce["date"] = "14/07/2015";

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
    <link rel="stylesheet" type="text/css" href="css/star-rating.css">





</head>
<body>
  <?php
      include_once 'inclusions/tete.php';
      //include_once 'inclusions/search_bar.php';
  ?>

    <!--main sub page heading-->
    <section id="page-head">
        <div class="container">
            <div class="row col-md-12">
                <div class="page-heading">
                    <h1><?php echo $annonce["titre"]; ?> </h1>
                    <h4><?php echo $annonce["prix"]; ?></h4>
                </div>
            </div>
        </div>
    </section><!--end main page heading-->

    <!--Detail -->
    <section id="detail">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="ads-detail">
                        <div class="author-detail">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="author-name">
                                        <p><?php echo $annonce["nom"]; ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="author-detail-right">
                                        <div class="author-info">
                                            <i class="fa fa-map-marker"></i>
                                            <p>Address: <?php echo $annonce["region"]." - ".$annonce["lieux"];?></p>
                                        </div>
                                        <div class="author-info">
                                            <i class="fa fa-phone"></i>
                                            <p>Phone: <?php echo $annonce["telephone"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ad-detail">
                            <div class="ad-detail-head">
                                <i class="fa fa-info-circle fa-2x"></i>
                                <h4 class="ad-cat">Vehicles</h4>
                            </div>
                            <div class="ad-detail-info clearfix">
                                <p class="pull-left">Prix:</p>
                                <p class="pull-right light"><?php echo $annonce["prix"]; ?></p>
                            </div>
                            <div class="ad-detail-info clearfix">
                                <p class="pull-left">TYPE:</p>
                                <p class="pull-right light"><?php echo $annonce["type"]; ?></p>
                            </div>
                            <div class="ad-detail-info clearfix">
                                <p class="pull-left">Date publication:</p>
                                <p class="pull-right light"><?php echo $annonce["date"]; ?></p>
                            </div>
                            <div class="ad-detail-info clearfix">
                                <p class="pull-left">Location :</p>
                                <p class="pull-right light"><?php echo $annonce["lieux"]; ?></p>
                            </div>
                            <div class="ad-detail-info clearfix">
                                <p>Description:</p>
                                <p class="light line"><?php echo $annonce["details"]; ?></p>
                            </div>
                        </div><!--end ad-detail-->
                    </div>


                </div>
            </div>
        </div>
    </section><!--end details-->



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/star-rating.js"></script>
    <script src="js/default.js"></script>
    <script src="layerslider/js/greensock.js"></script>
    <script src="layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
    <script src="layerslider/js/layerslider.transitions.js"></script>


</body>
</html>
