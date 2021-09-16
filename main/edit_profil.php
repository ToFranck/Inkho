<?php
        session_start();                                                                        //commencement de la session


        $bdd = new PDO('mysql:host=localhost;dbname=projetp;charset=utf8;', 'root','');         //co a la bdd
        
        
        if(isset($_SESSION['ut_id'])){                                                          //check si la var get id existe bien 
                                                            //je prepapre ma requette et je fais une jointure pour recuperé via les FK les infos importantes (grace aux id les name liées)

            $recupUser = $bdd->prepare('SELECT * FROM utilisateur, role, categorie WHERE ut_id = ? AND utilisateur.cat_id = categorie.cat_id AND utilisateur .role_id = role .role_id' );
            $recupUser -> execute(array($_SESSION['ut_id']));
            $user = $recupUser->fetch();                                // pas de while var contient qu'une entrée et ici il n'y a qu'une entrée
                                                                                                
                                                                                                //check si identifiant n'est pas vide ou dif a celle de base
            if(isset($_POST['new_identifiant']) AND !empty($_POST['new_identifiant']) AND $_POST['new_identifiant'] != $user['identifiant']){  

                $new_identifiant = htmlspecialchars($_POST['new_identifiant']);
                $insertIdentifiant = $bdd->prepare("UPDATE utilisateur SET identifiant = ? WHERE ut_id = ?");
                $insertIdentifiant -> execute(array($new_identifiant, $_SESSION['ut_id']));

                header('Location: profil.php?ut_id='.$_SESSION['ut_id']);
            }

            if(isset($_POST['new_mdp']) AND !empty($_POST['new_mdp']) AND isset($_POST['new_mdp2']) AND !empty($_POST['new_mdp2'])){  

                $mdp = sha1($_POST['new_mdp']);
                $mdp2 = sha1($_POST['new_mdp2']);

                if($mdp == $mdp2)                                                       // je check si les deux entrées sont = si oui je lance le changement sinon msg d'erreur
                {
                    $insertmdp = $bdd ->prepare("UPDATE utilisateur SET mdp = ? WHERE ut_id =? ");
                    $insertmdp ->execute(array($mdp, $_SESSION['ut_id']));

                    header('Location: profil.php?ut_id='.$_SESSION['ut_id']);
                }
                else{
                    $msg ="Les Deux mots de passe ne  correspondent pas ! ";
                }
               
            }

            if(isset($_POST['new_bio']) AND !empty($_POST['new_bio']) AND $_POST['new_bio'] != $user['bio']){  

                $new_bio = htmlspecialchars($_POST['new_bio']);
                $insertbio = $bdd->prepare("UPDATE utilisateur SET bio = ? WHERE ut_id = ?");
                $insertbio -> execute(array($new_bio, $_SESSION['ut_id']));

                header('Location: profil.php?ut_id='.$_SESSION['ut_id']);
            }

            if(isset($_POST['new_email']) AND !empty($_POST['new_email']) AND $_POST['new_email'] != $user['email']){  

                $new_email = htmlspecialchars($_POST['new_email']);
                $insertemail = $bdd->prepare("UPDATE utilisateur SET email = ? WHERE ut_id = ?");
                $insertemail -> execute(array($new_email, $_SESSION['ut_id']));

                header('Location: profil.php?ut_id='.$_SESSION['ut_id']);
            }

            if(isset($_POST['new_first_name']) AND !empty($_POST['new_first_name']) AND $_POST['new_first_name'] != $user['first_name']){  

                $new_first_name = htmlspecialchars($_POST['new_first_name']);
                $insertfirst_name = $bdd->prepare("UPDATE utilisateur SET first_name = ? WHERE ut_id = ?");
                $insertfirst_name -> execute(array($new_first_name, $_SESSION['ut_id']));

                header('Location: profil.php?ut_id='.$_SESSION['ut_id']);
            }

            if(isset($_POST['new_last_name']) AND !empty($_POST['new_last_name']) AND $_POST['new_last_name'] != $user['last_name']){  

                $new_last_name = htmlspecialchars($_POST['new_last_name']);
                $insertlast_name = $bdd->prepare("UPDATE utilisateur SET last_name = ? WHERE ut_id = ?");
                $insertlast_name -> execute(array($new_last_name, $_SESSION['ut_id']));

                header('Location: profil.php?ut_id='.$_SESSION['ut_id']);
            }

            if(isset($_POST['new_city']) AND !empty($_POST['new_city']) AND $_POST['new_city'] != $user['city']){  

                $new_city = htmlspecialchars($_POST['new_city']);
                $insertcity = $bdd->prepare("UPDATE utilisateur SET city = ? WHERE ut_id = ?");
                $insertcity -> execute(array($new_city, $_SESSION['ut_id']));

                header('Location: profil.php?ut_id='.$_SESSION['ut_id']);
            }

            if(isset($_POST['new_cat_id']) AND !empty($_POST['new_cat_id']) AND $_POST['new_cat_id'] != $user['cat_id']){  

                $new_cat_id = htmlspecialchars($_POST['new_cat_id']);
                $insertcat_id = $bdd->prepare("UPDATE utilisateur SET cat_id = ? WHERE ut_id = ?");
                $insertcat_id -> execute(array($new_cat_id, $_SESSION['ut_id']));

                header('Location: profil.php?ut_id='.$_SESSION['ut_id']);
            }

            if(isset($_POST['new_role_id']) AND !empty($_POST['new_role_id']) AND $_POST['new_role_id'] != $user['role_id']){  

                $new_role_id = htmlspecialchars($_POST['new_role_id']);
                $insertrole_id = $bdd->prepare("UPDATE utilisateur SET role_id = ? WHERE ut_id = ?");
                $insertrole_id -> execute(array($new_role_id, $_SESSION['ut_id']));

                header('Location: profil.php?ut_id='.$_SESSION['ut_id']);
            }
            
            if(isset($_FILES['img_p']) AND !empty($_FILES['img_p']['name'])){   // verif le file et si il est diffrerent de vide //name donner par le nav

                $tailleMax = 2097152;                                           // limite de 2 MégaOctet
                $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');        //predef des formats et securiser l'upload

                 //autre verification de la taille du fichier (size et un array pré-defini pour aider a la verif ), si cette taille est inferieur ou egale a la taille max ok
                if($_FILES['img_p']['size'] <= $tailleMax) {

                    // ajout de verifications 
                    // strtolower mettre la chaine en minuscule ,substr = ignorer le premier caract de la chaine ,strrchr = renvoie l'extention apres le point

                    $extensionUpload = strtolower(substr(strrchr($_FILES['img_p']['name'], '.'),1));
                    
                    if(in_array($extensionUpload, $extensionsValides)){  //vérif si extensionUpload integre bien une valeur d'extentionValide
                    
                        $chemin = "i/img_profil/".$_SESSION['ut_id'].".".$extensionUpload;          //crée un chemin ou sera upload la photo
                        
                        //test grace a une function auto pour deplacer le fichier uploader, 
                        //tmp_name = chemin temporaire du fichier ( le prendre d'ou il se trouve pour le mettre a sa destination voulu)
                        $result = move_uploaded_file($_FILES['img_p']['tmp_name'],$chemin);

                        //test de verification 
                        if($result){

                            $insertImgp = $bdd->prepare('UPDATE utilisateur SET img_p = :img_p WHERE ut_id = :ut_id');
                            $insertImgp -> execute(array(   //concatenation ( . pour separation)
                                'img_p'=> $_SESSION['ut_id'].".".$extensionUpload,
                                'ut_id' => $_SESSION['ut_id']
                            ));
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

        <?php
          include 'header.php';
        ?>

            
         
    <form action="" method="post" enctype="multipart/form-data"  class="sign-up-form width-50% items-center" >
                <div class="text-component text-center margin-bottom-sm">
                    <h1 class="text-lg text-center line-height-md "><strong>Edition du profil </strong></h1>
                </div>

                <?php if(isset($msg)){ echo $msg;}?>

        <div class="margin-bottom-sm">
            <label class="form-label margin-bottom-xxxs" for="">Identifiant</label>
            <input class="form-control width-100%" type="text" name="new_identifiant" placeholder="" value="<?php echo $user['identifiant']; ?>">
        </div>

        <div class="margin-bottom-sm">
            <label class="form-label margin-bottom-xxxs" for="">Mot de passe</label>
            <input class="form-control width-100%" type="password" name="new_mdp"  placeholder=""  >
        </div>

        <div class="margin-bottom-sm">
            <label class="form-label margin-bottom-xxxs" for="">Confimation</label>
            <input class="form-control width-100%" type="password" name="new_mdp2"  placeholder=""  >
        </div>

        <div class="margin-bottom-sm">
            <label class="form-label margin-bottom-xxxs" for="">Bio</label>
            <input class="form-control width-100%" type="text" name="new_bio" placeholder="" value="<?php echo $user['bio']; ?>">
        </div> 

        <div class="margin-bottom-sm">
            <label class="form-label margin-bottom-xxxs" for="email">Email</label>
            <input class="form-control width-100%" type="email" name="new_email"  placeholder="email@myemail.com" value="<?php echo $user['email']; ?>">
        </div>


        <div class="margin-bottom-sm  margin-top-xl">
            <div class="grid gap-xs">
                <div class="col-6@md">
                    <label class="form-label margin-bottom-xxxs" for="first_name">Prenom</label>
                    <input class="form-control width-100%" type="text" name="new_first_name" value="<?php echo $user['first_name']; ?>">
                </div>

                <div class="col-6@md">
                    <label class="form-label margin-bottom-xxxs" for="last_name">Nom</label>
                    <input class="form-control width-100%" type="text" name="new_last_name"  value="<?php echo $user['last_name']; ?>">
                </div>
            </div>
        </div>

        <div class="margin-bottom-sm">
            <div class="grid gap-xs">
            <div class="col-6@md">
                <label class="form-label margin-bottom-xxxs" for="city">Ville</label>
                <input class="form-control width-100%" type="text" name="new_city" id="city" value="<?php echo $user['city']; ?>">
            </div>

            <div class="col-6@md">
                <label class="form-label margin-bottom-xxxs" for="img_p">Image de profil </label>
                <input class="form-control width-100%" type="file" name="img_p" id="img_p" value="<?php echo $user['img_p']; ?>">
            </div>
            </div>
        </div>
        


        <div class="margin-bottom-sm">
            <div class="grid gap-xs">
                <div class="col-6@md">
                    <label class="form-label margin-bottom-xxxs" for="choix">Choix de votre catégorie (si tu es tatoueur):</label>
                    <select class="select__input form-control width-100%" name="new_cat_id" id="choix" >
                        <option value="<?php echo $user['cat_id']; ?>"> Actuellement <?php echo $user['cat_name']; ?></option>
                        <option value="1">Maori et Polynésien</option>
                        <option value="2">Old School</option>
                        <option value="3">Graphique</option>
                        <option value="4">Réaliste</option>
                        <option value="5">Biomécanique</option>
                        <option value="6">Ornementale</option>
                        <option value="7">Chicano</option>
                        <option value="8">New school (Cartoune)</option>
                        <option value="9">Portrait</option>
                        <option value="10">Asiatique</option>
                        <option value="11">Aucun (non tatoeur)</option>
                    </select>
                </div>
                <div class="col-6@md">
                    <label class="form-label margin-bottom-xxxs" for="role">Choix de votre catégorie</label>
                    <select class="select__input form-control width-100%" name="new_role_id">
                        <option value="<?php echo $user['role_id']; ?>"> Actuellement <?php echo $user['role_name']; ?></option>
                        <option value="1">Tatoueur</option>
                        <option value="2">Particulier</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="margin-bottom-sm text-center">
            <input type="submit" value="Mise a jour du profil" class="btn btn--primary btn--md">
        </div>         
    </form>
  <script src="assets/js/scripts.js"></script>  
  <script src="assets/js/profil.js"></script>  
  </body>
</html>
<?php } else {header('Location:connexion.php');}?>

