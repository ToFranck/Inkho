<?php 
        session_start();

        
      
        $bdd = new PDO('mysql:host=localhost;dbname=projetp;charset=utf8;', 'root','');

        $uti_id = (int) trim($_GET['id']); //recuperation de l'id de l'utilisateur ,supprimer les espaces avant et apres (get passe les parametres de quelque chose dans l'url)
        

        if(empty($uti_id)){ // si la page de l'utilisateur et vide alors je vais le rediriger vers la page des membres
            header('location:list_t.php');
            exit;  
        }

        $req = $bdd->prepare("SELECT * FROM utilisateur, categorie, role WHERE ut_id = ? AND utilisateur.cat_id = categorie.cat_id AND utilisateur .role_id = role .role_id"); //  where id " ce qu'on va lui donner
        
        $req ->execute(array($uti_id));
        $voirUti =  $req->fetch();

        if(!isset($voirUti['ut_id'])){ //si on trouve rien dans voirUti alors il n'existe pas ou pb donc redirection
            header('location:list_t.php');
            exit;  
        }
        
    ?>
        
         
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link id="codyframe" rel="stylesheet" href="assets/css/style.css">
  <link href="assets/css/profil.css" rel="stylesheet">
  <link id="codyframe" rel="stylesheet" href="assets/css/style.css">
  <!-- Uncomment the script below if you need to support browsers where CSS Variables have not been implemented (e.g., IE11) -->
  <!-- <script>
    if(!('CSS' in window) || !CSS.supports('color', 'var(--color-var)')) {var cfStyle = document.getElementById('codyframe');if(cfStyle) {var href = cfStyle.getAttribute('href');href = href.replace('style.css', 'style-fallback.css');cfStyle.setAttribute('href', href);}}
  </script> -->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    
  <title>Profil de <?= $voirUti['identifiant'] ?> | Inkho</title>
</head>
<body>

      <?php
        include 'header.php';
      ?>
        <section class="testimonial position-relative z-index-1 padding-y-xxl">
          <div class="container max-width-adaptive-sm">
            <figure class="flex justify-center margin-bottom-md reveal-fx reveal-fx--scale">
              <?php if(!empty($voirUti['img_p'])){//si diffenrent de vide alors
              ?>
                <img class="block width-xxxxl height-xxxxl radius-50% border border-bg border-2 shadow-sm" src="i/img_profil/<?php echo $voirUti['img_p'];?>" alt="votre photo de profil">
              <?php
              }
              ?>
            </figure>
            <div class="testimonial__block-wrapper">
              <h1 class="text-lg text-center line-height-md "><strong> <?php  echo $voirUti['identifiant']; ?> </strong></h1>
            </div>
            <div class="text-center">
              <p class="margin-top-xxxxs"><?php  echo $voirUti['role_name']; ?> </p>
              <p class="margin-top-xxxxs"><?php  echo $voirUti['cat_name']; ?> </p>
              <p class="margin-top-xxxxs"><?php  echo $voirUti['city']; ?> </p>
              <p class="text-uppercase letter-spacing-md margin-top-md"><strong><?php echo $voirUti['bio']; ?></strong></p>
    
            </div>
          </div>
        </section>   

  <!-- <div class="row">
    <div class="column">
      <img src="https://d1fmx1rbmqrxrr.cloudfront.net/cnet/optim/i/edit/2019/04/eso1644bsmall__w770.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
    </div>
    <div class="column">
      <img src="https://d1fmx1rbmqrxrr.cloudfront.net/cnet/optim/i/edit/2019/04/eso1644bsmall__w770.jpg" alt="Snow" style="width:100%" onclick="myFunction(this);">
    </div>
    <div class="column">
      <img src="https://d1fmx1rbmqrxrr.cloudfront.net/cnet/optim/i/edit/2019/04/eso1644bsmall__w770.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
    </div>
    <div class="column">
      <img src="https://d1fmx1rbmqrxrr.cloudfront.net/cnet/optim/i/edit/2019/04/eso1644bsmall__w770.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
    </div>
  
  </div>

  <div class="container_gal">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <img id="expandedImg">
    
  </div> -->

        


            <!-- <div class="card-v2 card-v2--blur-fx radius-md col-3@md">
              <figure>
                <img src="https://img.bfmtv.com/c/630/420/871/7b9f41477da5f240b24bd67216dd7.jpg" alt="Image description">
                <figcaption class="card-v2__caption padding-sm text-center">
                  <div class="text-md text-base@md">James Powell    
                    
                  </div>
                  <div class="margin-top-xxxs text-sm opacity-70%">Designer</div>
                </figcaption>
              </figure>
            </div> -->

            <!-- <div class="card-v2 card-v2--blur-fx radius-md col-3@md">
              <figure>
                <img src="https://img.bfmtv.com/c/630/420/871/7b9f41477da5f240b24bd67216dd7.jpg" alt="Image description">
                <figcaption class="card-v2__caption padding-sm text-center">
                  <div class="text-md text-base@md">Emily Ewing</div>
                  <div class="margin-top-xxxs text-sm opacity-70%">Developer</div>
                </figcaption>
              </figure>
            </div> -->


          </div>
        </div>
      </section>




      <script src="assets/js/profil.js"></script>  

<script src="assets/js/scripts.js"></script>



</body>
</html>