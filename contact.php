<?php
  if(isset($_POST['submit'])){
      $message = $_POST['message'];
      $nom = $_POST['name'];
      $email = $_POST['email'];
      $sujet = $_POST['subject'];

      $to      = 'dembadiax@gmail.com';
      $headers = 'From: '.$email.'' . "\r\n" . "\r\n" .'X-Mailer: PHP/' . phpversion();

@mail($to, $sujet, $message, $headers);

$text = "MESSAGE ENVOYE AVEC SUCCES";
  }


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
  ?>

    <!--main sub page heading-->
    <section id="page-head">
        <div class="container">
            <div class="row col-md-12">
                <div class="page-heading">
                    <h1>Nous Contacter</h1>
                </div>
            </div>
        </div>
    </section><!--end main page heading-->

    <!--Detail -->
    <section id="detail">
        <div class="container">
            <div class="row">
              <?php
                  if (isset($text)) {
                    echo'
                    <div class="note-box alert-success">
                        <i class="fa fa-check-square-o"><p>'.$text.'</p></i>

                    </div>';
                  }
               ?>
                <div class="col-md-4 col-sm-12 logo-big">

                </div>
                <div id="form" class="col-md-8 col-sm-12">
                    <form method="post">
                        <div class="col-md-12 input-pad">
                            <span class="fa fa-text-height form-control-feedback"></span>
                            <input class="form-control" type="text" name="name" placeholder="Votre nom">

                        </div>
                        <div class="col-md-12 input-pad">
                            <span class="fa fa-envelope-o form-control-feedback"></span>
                            <input class="form-control" type="email" name="email" placeholder="Votre Email">
                        </div>
                        <div class="col-md-12 input-pad">
                            <span class="fa fa-book form-control-feedback"></span>
                            <input class="form-control" type="text" name="subject" placeholder="Sujet">

                        </div>
                        <div class="col-md-12 input-pad">
                            <textarea class="form-control" name="message"></textarea>
                        </div>

                        <div class="clearfix"></div>
                        <!--map-->

                        <input class="input-pad" type="submit" value="Envoyer" name="submit">
                    </form>
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

</body>
</html>
