<?php
    require_once'PHP/fonctions.php';

    $categories = getCategories();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kogn Bi, vos annonces à portée de main</title>

    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>

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
      include_once 'inclusions/search_bar.php';
  ?>

    <!--main sub page heading-->
    <section id="page-head">
        <div class="container">
            <div class="row col-md-12">
                <div class="page-heading">
                    <h1>PUBLIER UNE ANNONCE</h1>
                    <h4>Facile et Simple</h4>
                </div>
            </div>
        </div>
    </section><!--end main page heading-->
    <!--Detail -->
    <section id="detail" ng-app="myApp">
        <div class="container">
            <div class="row" ng-controller="CreerController">
                <div class="col-md-8">
                    <div class="ads-detail">
                        <div class="account-overview">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="form">
                                        <form method="post">

                                          <div class="col-sm-6 padding-control">
                                              <span class="form-control-feedback"></span>
                                              Categorie<select name="categorie" onchange="fetch_select(this.value);">
                                                    <option value="1"></option>
                                                <?php
                                                    foreach ($categories as $value) {
                                                       echo '<option value="'.$value["id"].'">'.$value["nom"].'</option>';
                                                    }
                                                ?>
                                              </select>
                                          </div>
                                          <div id="sous_catego">

                                          </div>

                                        <div class="col-sm-6 input-pad">
                                            <span class="fa fa-user form-control-feedback"></span>
                                            <input class="form-control" type="text" ng-model="nom" name="nom" placeholder="John Doe">
                                        </div>

                                          <div class="col-sm-6 input-pad">
                                              <span class="fa fa-bullhorn form-control-feedback"></span>
                                              <input class="form-control" type="text" ng-model="titre" name="titre" placeholder="Titre">

                                          </div>
                                            <div class="col-sm-6 input-pad">
                                                <span class="fa fa-money form-control-feedback"></span>
                                                <input class="form-control" type="text" ng-model="prix" name="prix" placeholder="Prix">

                                            </div>
                                            <div class="col-sm-6 padding-control">
                                                <span class="fa fa-phone form-control-feedback"></span>
                                                <input class="form-control" type="text" ng-model="telephone" name="telephone" placeholder="Téléphone">
                                            </div>

                                            <div class="clearfix"></div>
                                            <div class="col-sm-6 padding-control">
                                                <span class="fa fa-map-marker form-control-feedback"></span>
                                                Region<select ng-model="region" name="region" ng-change="regionChange(region)"  ng-options="region for region in regions" >
                                                </select>
                                            </div>
                                            <div ng-hide="verifLocalite">
                                              <div class="col-sm-6 padding-control">
                                                  <span class="fa fa-map-marker form-control-feedback"></span>
                                                  Lieux<select ng-model="lieu" name="lieu" ng-options="lieu for lieu in lieux" >
                                                  </select>
                                              </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="col-sm-12 padding-control">
                                                <textarea class="form-control"></textarea>
                                            </div>


                                            <div class="clearfix"></div>


                                            <div class="col-sm-6 input-pad">
                                                <span class="fa fa-image form-control-feedback"></span>
                                                <label class="cabinet">
                                                    <input type="file" class="file" name="photo1">
                                                </label>
                                            </div>

                                            <div class="col-sm-6 input-pad">
                                                <span class="fa fa-image form-control-feedback"></span>
                                                <label class="cabinet">
                                                    <input type="file" class="file" name="photo2">
                                                </label>
                                            </div>
                                            <div class="col-sm-6 input-pad">
                                                <span class="fa fa-image form-control-feedback"></span>
                                                <label class="cabinet">
                                                    <input type="file" class="file" name="photo3">
                                                </label>
                                            </div>
                                            <div class="col-sm-6 input-pad">
                                                <span class="fa fa-image form-control-feedback"></span>
                                                <label class="cabinet">
                                                    <input type="file" class="file" name="photo4">
                                                </label>
                                            </div>

                                            <div class="col-sm-12">
                                                <span class="ad-type">Type d'annonce:</span>
                                                <input type="radio" name="type" value="Offre" checked="checked">
                                                <label>Offre</label>
                                                <input type="radio" name="type" value="Demande">
                                                <label>Demande</label>
                                            </div>

                                            <input type="submit" value="Publier l'annonce" name="submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">

                        <!--advertisement-->
                        <div class="side-widget">
                            <h4 class="inner-heading">Publicité</h4>
                            <div class="side-widget-adv">
                                <a href="#"><img src="http://placehold.it/350x250" alt="google ads"></a>
                            </div>
                        </div><!--end advertisement widget-->

                    </div>
                </div>
            </div>
        </div>
    </section><!--end details-->
    <?php
        include_once 'inclusions/pied.php';
    ?>

    <!--End Footer-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/default.js"></script>
    <script src="layerslider/js/greensock.js"></script>
    <script src="layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
    <script src="layerslider/js/layerslider.transitions.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/creer.js"></script>
    <script type="text/javascript">
            $(document).ready(function () {
                $('input[type=file]').change(function () {
                var val = $(this).val().toLowerCase();
                var regex = new RegExp("(.*?)\.(jpeg|png|jpg)$");
                if(!(regex.test(val))) {
                $(this).val('');
                alert('Veuillez choisir une image');
            } });
});
    </script>
    <script type="text/javascript">

  function fetch_select(val){
         $.ajax({
           type: 'post',
           url: 'Ajax/sous_categorie.php',
           data: {
             get_option:val
           },
           success: function (response) {
             document.getElementById("sous_catego").innerHTML=response;
           }
         });
       }
    </script>

</body>
</html>
