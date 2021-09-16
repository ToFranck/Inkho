<?php  
      session_start();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link id="codyframe" rel="stylesheet" href="assets/css/style.css">
  <link href="assets/css/custom.css" rel="stylesheet">
  <!-- Uncomment the script below if you need to support browsers where CSS Variables have not been implemented (e.g., IE11) -->
  <!-- <script>
    if(!('CSS' in window) || !CSS.supports('color', 'var(--color-var)')) {var cfStyle = document.getElementById('codyframe');if(cfStyle) {var href = cfStyle.getAttribute('href');href = href.replace('style.css', 'style-fallback.css');cfStyle.setAttribute('href', href);}}
  </script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    
  <title>Acceuil | Inkho</title>




</head>
<body>
      
      <?php
        include 'header.php';
      ?>

            <h1 class="titre">Les Styles</h1>

                  <!-- Presentation des styles  -->
          <div id="cont">
                <div class="banner container max-width-adaptive-lg radius-md overflow-hidden margin-top-xl">
                  <a href="les_styles.php" class="text-decoration-none" aria-label="Shop Now">
                    <div class="grid flex-row-reverse@md" >
                      <div class="col-6@md overflow-hidden" aria-hidden="true">
                        <div class="banner__figure width-100%" style="background-image: url(https://prmeng.rosselcdn.net/sites/default/files/dpistyles_v2/ena_16_9_extra_big/2019/09/04/node_34374/32610089/public/2019/09/04/B9720792688Z.1_20190904183121_000%2BGBDECOF1B.1-0.jpg?itok=Hmeto5UX1567750711);"></div>
                      </div>
                
                      <div class="col-6@md">
                        <div class="text-component v-space-md height-100% flex flex-column padding-md padding-lg@md">
                          <h2>Tous les styles</h2>
                          <p class="margin-top-sm margin-top-lg@md"><span class="banner__link"><i>Clique ici pour retrouver plus de style</i></span></p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>


                <div class="banner container max-width-adaptive-lg radius-md overflow-hidden margin-top-xl fade2" >
                  <a href="list_t.php" class="text-decoration-none" aria-label="Shop Now">
                    <div class="grid flex-row-reverse@md">
                      <div class="col-6@md overflow-hidden" aria-hidden="true">
                        <div class="banner__figure width-100%" style="background-image: url(https://www.creerentreprise.fr/wp-content/uploads/2017/08/ouvrir-salon-tatouage-547x340.jpg);"></div>
                      </div>
                
                      <div class="col-6@md">
                        <div class="text-component v-space-md height-100% flex flex-column padding-md padding-lg@md ">
                          <h2>Les tatoueurs</h2>
                          <p class="margin-top-sm margin-top-lg@md">
                            <span class="banner__link">Clique ici pour retrouver plus de tatoeurs</span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>
                
            </div>

            <h1  class="titre margin-top-xl" id="news">News</h1>

            <!-- <p class="txt-exp"> Retrouve ici toutes sortes de new lié au site comme des updates, des nouveautés et bien d'autres</p> -->


            <!-- Les News recup dans la BDD ou api-->

            <!-- <div id="panel-news"> -->
            <section class="feature-v7 margin-top-lg" >
                <div class="container max-width-adaptive-lg">
                  <div class="grid gap-md">
                    
                    <div class="col-6@md" >
                      <div class="feature-v7__item flex gap-sm">
                        <!-- <figure>
                          <img src="https://cdn.pixabay.com/photo/2017/10/14/09/56/journal-2850091_960_720.jpg" alt="Image description" class="imgnews">
                        </figure> -->
                  
                        <div class="text-component" >

                          <!-- Trigger le modal -->
                          <button id="myBtn"class="btn btn--primary btn--md width-100%">News 1</button>

                          <!-- le modal -->
                          <div id="myModal" class="modal ">

                            <!-- interieur du modal -->
                            <div class="modal-content">
                              <span class="close">&times;</span>
                              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus natus ipsam quaerat quidem illum, at nesciunt! Laborum odit aliquam a velit vero rem, quod molestias illum, sequi accusantium error beatae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae cum, quo dolores voluptatibus, delectus minus temporibus tempora provident repellendus sed molestias, commodi suscipit. Ipsum, deserunt neque magni quasi et ratione</p>
                            </div>

                          </div>
                        </div>
                          
                        </div>
                      </div>
                    </div>
                
                 
              </div>
            </section>
       </div>
  
<script src="assets/js/scripts.js"></script>
<script src="assets/js/index.js"></script>

</body>
</html>