<?php
        session_start();                                                                        //commencement de la session

        $bdd = new PDO('mysql:host=localhost;dbname=projetp;charset=utf8;', 'root','');         //co a la bdd
        $uti_id = (int) $_SESSION['ut_id']; //recuperation de l'id de l'utilisateur ,supprimer les espaces avant et apres (get passe les parametres de quelque chose dans l'url)
        
        $req = $bdd->prepare("SELECT * FROM utilisateur, categorie, role WHERE ut_id = ? AND utilisateur.cat_id = categorie.cat_id AND utilisateur .role_id = role .role_id"); 
        //  where id " ce qu'on va lui donner
        

        $req ->execute(array($uti_id));
        $voirUti = $req->fetch();

        $req = $bdd->prepare("SELECT * FROM image WHERE ut_id = ?");
        $req -> execute(array($uti_id));

        $voirImg = $req->fetchAll();

        // require_once("objprofil.php");
        // $infoprofil = new Infoprofil();
        // $Infoprofils = $infoprofil->presentation();
      
                  
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <link id="codyframe" rel="stylesheet" href="assets/css/style.css">
    <link href="assets/css/profil.css" rel="stylesheet">
    <link href="assets/css/1_testimonial.css" rel="stylesheet">
    
    
    <!-- Uncomment the script below if you need to support browsers where CSS Variables have not been implemented (e.g., IE11) -->
    <!-- <script>
      if(!('CSS' in window) || !CSS.supports('color', 'var(--color-var)')) {var cfStyle = document.getElementById('codyframe');if(cfStyle) {var href = cfStyle.getAttribute('href');href = href.replace('style.css', 'style-fallback.css');cfStyle.setAttribute('href', href);}}
    </script> -->


      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

      <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
      
    <title>Profil | Inkho</title>
    

  </head>
  <body>

        <?php
          include 'header.php';
        ?>

         <?php 

            if(isset($_SESSION['ut_id']) AND $voirUti['ut_id'] == $_SESSION['ut_id'])        // Liée a son id,  l'utilisateur seulement aura accs a la modification de son profil et deco 
            {
            ?>
                <p class="text-center"><a href="edit_profil.php">Editer mon profil</a></p>
                <p class="text-center"><a href="deco.php">Se Déconnecter</a></p>
                <p class="text-center"><a href="delete.php">Supprimer mon profil</a></p>
            <?php
            }
            ?> 

            <?php
              if(isset($_SESSION['ut_id']) AND $voirUti['role_id'] == 1 AND $voirUti['ut_id'] == $_SESSION['ut_id']){
            ?>
                <p class="text-center"><a href="ajout_photo.php">Ajouter une photo dans votre album</a></p>
            <?php
              }
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
              <h1 class="text-lg text-center line-height-md "><strong> <?php  echo $voirUti['identifiant'];?> </strong></h1>

            </div>
            
            <div class="text-center">
              <p class="margin-top-xxxxs"><?php  echo $voirUti['role_name']; ?> </p>
              <p class="margin-top-xxxxs"><?php  echo $voirUti['cat_name']; ?> </p>
              <p class="margin-top-xxxxs"><?php  echo $voirUti['city']; ?> </p>
              <p class="text-uppercase letter-spacing-md margin-top-md"><strong><?php echo $voirUti['bio']; ?></strong></p>
    
            </div>
          </div>
        </section>   
      
        <div class="row">
          <div class="column">
            
            <?php foreach($voirImg as $va){
            ?>
            <img src="i/img_profil/tatoo/<?php echo $va->tatoo;?>" style="width:100%" onclick="myFunction(this);">
            <?php 
              };
            ?>
          </div>
        </div>
        
  <div class="container_gal">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <img id="expandedImg">
    
  </div>

  <script src="assets/js/scripts.js"></script>  
  <script src="assets/js/profil.js"></script>  

  </body>
</html>





