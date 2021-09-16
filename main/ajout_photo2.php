<?php 
    session_start(); 
    require('db.php');
    require('upload_tatoo.php');




?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <link id="codyframe" rel="stylesheet" href="assets/css/style.css">
    <link href="assets/css/edit_profil.css" rel="stylesheet">
    <link href="assets/css/1_testimonial.css" rel="stylesheet">
    
    
    <!-- Uncomment the script below if you need to support browsers where CSS Variables have not been implemented (e.g., IE11) -->
    <!-- <script>
      if(!('CSS' in window) || !CSS.supports('color', 'var(--color-var)')) {var cfStyle = document.getElementById('codyframe');if(cfStyle) {var href = cfStyle.getAttribute('href');href = href.replace('style.css', 'style-fallback.css');cfStyle.setAttribute('href', href);}}
    </script> -->


      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

      <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
      
    <title>Edit Profil | Inkho</title>

  
    

  </head>
  <body>
            
         
            <form action="" method="post" enctype="multipart/form-data"  class="sign-up-form width-30% items-center" >
            
                <div class="text-component text-center margin-bottom-sm">
                    <h1 class="text-lg text-center line-height-md "><strong>Publication</strong></h1>
                </div>

                <?php if(isset($msg)){ echo $msg;}?>
                    

                <div class="margin-bottom-sm">
                    <div class="grid gap-xs">
                        
                        <label class="form-label margin-bottom-xxxs" for="tatoo_name">Nom</label><br>
                        <input class="form-control width-100%" type="text" name="tatoo_name" id="tatoo_name" autocomplete="off">
                    
                        <div>
                            <label class="form-label margin-bottom-xxxs" for="tatoo">Image de profil</label>
                            <input class="form-control width-100%" type="file" name="tatoo" id="tatoo">
                        </div>
                    </div>
                </div>
        
        
                <div class="margin-bottom-sm text-center">
                    <input type="submit" value="Mise a jour du profil" name="add" class="btn btn--primary btn--md">
                </div> 

            </form>