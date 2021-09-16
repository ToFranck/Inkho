<?php
        session_start();                                                                        //commencement de la session
        $bdd = new PDO('mysql:host=localhost;dbname=projetp;charset=utf8;', 'root','');         //co a la bdd .

           
        if(isset($_SESSION['ut_id'])){                                                          //check si la var get id existe bien 
            //je prepapre ma requette et je fais une jointure pour recuperé via les FK les infos importantes (grace aux id les name liées)

            $recupUser = $bdd->prepare('SELECT * FROM utilisateur, image WHERE ut_id = ? AND utilisateur.ut_id = image.ut_id ');
            $recupUser -> execute(array($_SESSION['ut_id']));
            $user = $recupUser->fetch();                                                        // pas de while var contien q'une entrée et ici il n'y a qu'une entrée
                                                            
                                            

            if(isset($_FILES['tatoo']) AND !empty($_FILES['tatoo'])){// verif le file et si il est diffrerent de vide 

            $tailleMax = 2097152;                                       // limite de 2 MégaOctet
            $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');     //predef des formats et securiser l'upload


            //autre verification de la taille du fichier (size et un array pré-defini pour aider a la verif ), si cette taille est inferieur ou egale a la taille max ok
            if($_FILES['tatoo']['size'] <= $tailleMax) {

            //ajout de verifications 
            // strtolower mettre la chaine en minuscule ,substr = ignorer le premier caract de la chaine ,strrchr = renvoie l'extention apres le point

            $extensionUpload = strtolower(substr(strrchr($_FILES['tatoo']['name'],'.'),1));

            if(in_array($extensionUpload, $extensionsValides)){  //vérif si extensionUpload integre bien une valeur d'extentionValide

            $chemin = "i/img_profil/tatoo/".$_SESSION['ut_id'].".".$extensionUpload;          //crée un chemin ou sera upload la photo

            //test grace a une function auto pour deplacer le fichier uploader, 
            //tmp_name = chemin temporre du fichier ( le prendre d'ou il se trouve pour le mettre a sa destination voulue)
            $result = move_uploaded_file($_FILES['tatoo']['tmp_name'],$chemin);

            //test de verification 
            if($result){

            $insertImgp = $bdd->prepare('INSERT INTO image (tatoo, ut_id) values (?, ?)');
            $insertImgp->execute(array($_FILES['tatoo'],$_SESSION['ut_id']));

            

            header('Location: profil.php?ut_id='.$_SESSION['ut_id']);


            } 
            else{
            $msg ="Erreur survenue a l'importation du fichier";
            }

            }else{
            $msg ="Votre photo de profil doit etre au format jpg, jpeg, gif ou png";
            }
            } else {
            $msg = "Votre photo ne doit pas dépasser 2Mo";
            }


        }




       
        
        
        


            
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
            
         
            <form action="" method="post" enctype="multipart/form-data"  class="sign-up-form width-50% items-center" >
            
                <div class="text-component text-center margin-bottom-sm">
                    <h1 class="text-lg text-center line-height-md "><strong>Publication</strong></h1>
                </div>

                <?php if(isset($msg)){ echo $msg;}?>
                    

                <div class="margin-bottom-sm">
                    <div class="grid gap-xs">

                        <div>
                            <label class="form-label margin-bottom-xxxs" for="tatoo">Image </label>
                            <input class="form-control width-100%" type="file" name="tatoo" id="tatoo">
                        </div>
                    </div>
                </div>

            
        
        
                <div class="margin-bottom-sm text-center">
                    <input type="submit" value="Mise a jour du profil" name="envoyer" class="btn btn--primary btn--md">
                </div> 

            </form>

  <script src="assets/js/scripts.js"></script>  
  






  </body>
<?php
} else{
    header('Location:connexion.php');
    }
?>
</html>


