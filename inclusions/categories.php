<!--Category-->
<section id="categories">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-heading text-center">
                    <h2>CATEGORIES</h2>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
              <div class="category">
                  <div class="category-icon">
                      <i class="fa fa-shopping-cart fa-2x"></i>
                  </div>
                  <h4><a href="sous_categories.php?num=2">A Vendre</a></h4>
                  <?php
                      foreach ($tab2 as $sous) {
                          echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                        # code...
                      }
                   ?>

              </div>
          </div>

            <div class="col-md-3 col-sm-6">
                <div class="category">
                    <div class="category-icon">
                        <i class="fa fa-automobile fa-2x"></i>
                    </div>
                    <h4><a href="sous_categories.php?num=13">Auto</a></h4>
                    <?php
                        foreach ($tab13 as $sous) {
                            echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                          # code...
                        }
                     ?>

                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="category">
                    <div class="category-icon">
                        <i class="fa fa-music fa-2x"></i>
                    </div>
                    <h4><a href="sous_categories.php?num=17">Divertissement</a></h4
                     <?php
                          foreach ($tab17 as $sous) {
                              echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                            # code...
                          }
                       ?>

                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="category">
                    <div class="category-icon">
                        <i class="fa fa-book fa-2x"></i>
                    </div>
                    <h4><a href="sous_categories.php?num=14">Education</a></h4>
                    <?php
                         foreach ($tab14 as $sous) {
                             echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                           # code...
                         }
                      ?>

                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="category">
                    <div class="category-icon">
                        <i class="fa fa-bullhorn fa-2x"></i>
                    </div>
                    <h4><a href="sous_categories.php?num=6">Evénement</a></h4>
                    <?php
                         foreach ($tab6 as $sous) {
                             echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                           # code...
                         }
                      ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="category">
                    <div class="category-icon">
                        <i class="fa fa-bed fa-2x"></i>
                    </div>
                    <h4><a href="sous_categories.php?num=9">Hôtel</a></h4>
                    <?php
                         foreach ($tab9 as $sous) {
                             echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                           # code...
                         }
                      ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="category">
                    <div class="category-icon">
                        <i class="fa fa-home fa-2x"></i>
                    </div>
                    <h4><a href="sous_categories.php?num=1">Immobilier</a></h4>
                    <?php
                         foreach ($tab1 as $sous) {
                             echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                           # code...
                         }
                      ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="category">
                    <div class="category-icon">
                        <i class="fa fa-cart-plus fa-2x"></i>
                    </div>
                    <h4><a href="sous_categories.php?num=12">Marché</a></h4>
                    <?php
                         foreach ($tab12 as $sous) {
                             echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                           # code...
                         }
                      ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="category">
                    <div class="category-icon">
                        <i class="fa fa-star fa-2x"></i>
                    </div>
                    <h4><a href="sous_categories.php?num=7">Religion</a></h4>
                    <?php
                         foreach ($tab7 as $sous) {
                             echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                           # code...
                         }
                      ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="category">
                    <div class="category-icon">
                        <i class="fa fa-cutlery fa-2x"></i>
                    </div>
                    <h4><a href="sous_categories.php?num=8">Restaurant</a></h4>
                    <?php
                         foreach ($tab8 as $sous) {
                             echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                           # code...
                         }
                      ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="category">
                    <div class="category-icon">
                        <i class="fa fa-heart fa-2x"></i>
                    </div>
                    <h4><a href="sous_categories.php?num=5">Romance</a></h4>
                    <?php
                         foreach ($tab5 as $sous) {
                             echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                           # code...
                         }
                      ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="category">
                    <div class="category-icon">
                        <i class="fa fa-heart fa-2x"></i>
                    </div>
                    <h4><a href="sous_categories.php?num=10">Santé</a></h4>
                    <?php
                         foreach ($tab10 as $sous) {
                             echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                           # code...
                         }
                      ?>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="category">
                    <div class="category-icon">
                        <i class="fa fa-gears fa-2x"></i>
                    </div>
                    <h4><a href="sous_categories.php?num=4">Service</a></h4>
                    <?php
                         foreach ($tab4 as $sous) {
                             echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                           # code...
                         }
                      ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="category">
                    <div class="category-icon">
                        <i class="fa fa-cart-arrow-down fa-2x"></i>
                    </div>
                    <h4><a href="sous_categories.php?num=15">Shopping</a></h4>
                    <?php
                         foreach ($tab15 as $sous) {
                             echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                           # code...
                         }
                      ?>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="category">
                    <div class="category-icon">
                        <i class="fa fa-futbol-o fa-2x"></i>
                    </div>
                    <h4><a href="sous_categories.php?num=16">Sport</a></h4>
                    <?php
                         foreach ($tab16 as $sous) {
                             echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                           # code...
                         }
                      ?>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="category">
                    <div class="category-icon">
                        <i class="fa fa-bus fa-2x"></i>
                    </div>
                    <h4><a href="sous_categories.php?num=11">Transport</a></h4>
                    <?php
                         foreach ($tab11 as $sous) {
                             echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                           # code...
                         }
                      ?>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="category">
                    <div class="category-icon">
                        <i class="fa fa-wrench fa-2x"></i>
                    </div>
                    <h4><a href="sous_categories.php?num=3">Travail</a></h4>
                    <?php
                         foreach ($tab3 as $sous) {
                             echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                           # code...
                         }
                      ?>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="category">
                    <div class="category-icon">
                        <i class="fa fa-heartbeat fa-2x"></i>
                    </div>
                    <h4><a href="sous_categories.php?num=18">Urgence</a></h4>
                    <?php
                         foreach ($tab18 as $sous) {
                             echo '<p><a href="sous_categorie.php?num='.$sous["id"].'">'.$sous["nom"].'</a></p>';
                           # code...
                         }
                      ?>
                </div>
            </div>
        </div>
    </div>
</section><!--End Category-->
