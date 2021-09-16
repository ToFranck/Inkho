 <?php 
        session_start();

         $bdd = new PDO('mysql:host=localhost;dbname=projetp;charset=utf8;', 'root','');

         if(isset($_SESSION['ut_id'])){ // faire en sorte de recuperer toutes les personnes concernées sauf soit meme 
            $afficherMembres = $bdd ->prepare('SELECT * FROM utilisateur, categorie WHERE ut_id <> ? AND role_id= 1  AND utilisateur.cat_id = categorie.cat_id' );
            $afficherMembres ->execute(array($_SESSION['ut_id']));
         }else{
           $afficherMembres = $bdd ->prepare('SELECT * FROM utilisateur, categorie WHERE role_id= 1 AND  utilisateur.cat_id = categorie.cat_id' );
           $afficherMembres ->execute();
         }
        
    ?>
           
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link id="codyframe" rel="stylesheet" href="assets/css/style.css">
  <link href="assets/css/list_t.css" rel="stylesheet">
  
  <!-- Uncomment the script below if you need to support browsers where CSS Variables have not been implemented (e.g., IE11) -->
  <!-- <script>
    if(!('CSS' in window) || !CSS.supports('color', 'var(--color-var)')) {var cfStyle = document.getElementById('codyframe');if(cfStyle) {var href = cfStyle.getAttribute('href');href = href.replace('style.css', 'style-fallback.css');cfStyle.setAttribute('href', href);}}
  </script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    
  <title>Liste Tatoueurs | Inkho</title>

</head>
<body >
      <?php
        include 'header.php';
      ?>
        <section class="team padding-y-xl">
        <div class="container max-width-adaptive-lg">
          <div class="margin-bottom-lg">
            <h1 class="text-center">Les Tatoueurs.</h1>
          </div>

          <div class="grid gap-sm">
            <?php
              foreach($afficherMembres as $am)                              //cherche et affiche en boucle tout les tatoeurs 
              {
                ?>
                    <div class="card-v2 card-v2--blur-fx radius-md col-3@md" >
                    <figure class="card fade1">
                      <img src="i/img_profil/<?php echo $am['img_p'];?>">
                      <figcaption class="card-v2__caption padding-sm text-center">
                        <div class="text-md text-base@md"><p><?php echo $am['identifiant']; ?></p></div>
                        <div class="margin-top-xxxs text-sm opacity-70%"><p><?php echo $am['cat_name']; ?> </p></div>
                        <div class="margin-top-xxxs text-sm opacity-70%"><p><?php echo $am['city']; ?> </p></div>
                        <div class="margin-top-xxxs text-sm opacity-70%"><p> <a href="voir_profil.php?id=<?=$am['ut_id']?>">Voir</p></a></div>
                      </figcaption>
                    </figure>
                  </div>
                <?php 
                  
              }
                ?>
          </div>
        </div>
      </section>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/list_t.js"></script>
</body>
</html>