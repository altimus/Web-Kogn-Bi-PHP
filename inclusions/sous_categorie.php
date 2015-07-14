<section id="detail">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!--Related Ads-->
                <div id="relatedAds">
                    <h4 class="inner-heading">Les annonces de la sous categorie: <?php echo $souscategorie; ?> </h4>
                    <div class="row">
                        <div class="col-md-12 content content1">
                            <div class="row">

                              <?php
                                  if (empty($annonces)) {
                                    echo "<p>Il n'y a pas encore d'annonces pour cette catégorie </p>";
                                  }
                                  else {
                                    foreach ($annonces as $value) {
                                      echo '<div class="col-md-4 col-sm-4 adp">
                                          <div class="ads">
                                              <a href="#"><img src="http://placehold.it/255x218" alt="ads"></a>
                                              <div class="ads-title"><p><a href="#">'.$value["titre"].'</a></p></div>
                                              <a href="#" class="ads-hover">
                                                  <span>'.$value["titre"].'</span>
                                              </a>
                                          </div>
                                      </div>';
                                    }
                                  }

                               ?>
                            </div>
                        </div>
                </div><!--end related ads-->
                </div>
            </div>
            <div class="col-md-4">
                <div class="sidebar">  <!--advertisement-->
                    <div class="side-widget">
                        <h4 class="inner-heading">Publicité</h4>
                        <div class="side-widget-adv">
                            <a href="#"><img src="http://placehold.it/300x250" alt="google ads"></a>
                        </div>
                    </div><!--end advertisement widget-->

                </div>
            </div>
        </div>
    </div>
</section><!--end details-->
