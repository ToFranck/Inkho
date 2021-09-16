<?php 
  session_start();
  $bdd = new PDO('mysql:host=localhost;dbname=projetp;charset=utf8;', 'root','');

   if(isset($_POST['envoi'])){
       if(!empty($_POST['identifiant'])                              //check si les entrées sont diff de vide  
          AND !empty($_POST['first_name'])                          //$_post -> variables passées au script actuel
          AND !empty($_POST['last_name'])
          AND !empty($_POST['email'])  
          AND !empty($_POST['city'])  
          AND !empty($_POST['mdp'])
          AND !empty($_POST['bio']) 
          AND !empty($_POST['cat_id']) 
          AND !empty($_POST['role_id'])){
          
            
        
          $identifiant = htmlspecialchars($_POST['identifiant']);   //ma variable = a l'entre bloque en htmlspecialchars pour securité pour eviter un script ou autre
          $last_name = htmlspecialchars($_POST['last_name']);
          $first_name = htmlspecialchars($_POST['first_name']);
          $email = htmlspecialchars($_POST['email']);
          $city = htmlspecialchars($_POST['city']);
          $mdp = sha1($_POST['mdp']);                               // toujours la secu crypter le mdp
          $bio = htmlspecialchars($_POST['bio']);
          $role_id = htmlspecialchars($_POST['role_id']);
          $cat_id = htmlspecialchars($_POST['cat_id']);
              
          //Check si les entrées sont existantes
          
         
            $recupidentifiant= $bdd->prepare('SELECT identifiant FROM utilisateur WHERE identifiant =?');
            $recupidentifiant->execute(array($identifiant));                                       // execute 

               
            $userexist = $recupidentifiant->rowCount();                     //renvoie le nombre de lignes qui correspondent à un crit spécifié.
            if($userexist == 0){
            
              $recupemail= $bdd->prepare('SELECT email FROM utilisateur WHERE email =?');
              $recupemail->execute(array($email));                                        

               
              $userexist = $recupemail->rowCount();                                           
              if($userexist == 0){
                  
                $recupmdp= $bdd->prepare('SELECT mdp FROM utilisateur WHERE mdp =?');
                $recupmdp->execute(array($mdp));                                        
  
                 
                $userexist = $recupmdp->rowCount();                                           
                if($userexist == 0){
                  
          
          

                  $insertUser = $bdd->prepare('INSERT INTO utilisateur (identifiant, last_name, first_name, email,city, mdp,  bio, role_id, cat_id ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
                  $insertUser->execute(array($identifiant, $last_name, $first_name, $email, $city,  $mdp,  $bio, $role_id, $cat_id ));
                  
                  
                  
                  //J'effectue une requete preparer pour venir recupérer l'utilisateur dans la table utilisateur rentrer par l'utilisateur
                  $recupUser = $bdd->prepare('SELECT * FROM utilisateur WHERE identifiant = ? AND last_name = ? AND first_name= ? AND email = ? AND city = ? AND mdp = ?  AND bio = ? AND role_id = ? AND cat_id = ?');
                  $recupUser->execute(array($identifiant, $last_name, $first_name, $email, $city,  $mdp, $bio, $role_id, $cat_id));
                  //Si l'utilisateur existe dans cette table est supérieur à 0
                  // déclare les sessions
                  
                  //affecte toutes mes valeur de la session actuelle 
                    if($recupUser-> rowCount()>0){
                        $_SESSION['identifiant'] = $identifiant;
                        $_SESSION['last_name'] = $last_name;
                        $_SESSION['first_name'] = $first_name;
                        $_SESSION['email'] = $email;
                        $_SESSION['city'] = $city;
                        $_SESSION['mdp'] = $mdp;
                        $_SESSION['bio'] = $bio;
                        $_SESSION['cat_id'] = $cat_id;
                        $_SESSION['role_id'] = $role_id;
                        $_SESSION['ut_id'] = $recupUser->fetch()['ut_id'];
                        header("Location: connexion.php");

                        }
                }else {
                  echo"<p class='erreur'>Mot de passe deja utilisé</p>";
                }    
              }else {
                echo"<p class='erreur'>Email deja utilisé</p>";
              }
              
            }else {
              echo"<p class='erreur'>Identifiant deja utilisé</p>";
            }
        }else {
          echo"<p class='erreur'>Veuillez compléter tous les champs</p>";
          } 
        
    }
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link id="codyframe" rel="stylesheet" href="assets/css/style.css">
  <link href="assets/css/creation.css" rel="stylesheet">
  <!-- Uncomment the script below if you need to support browsers where CSS Variables have not been implemented (e.g., IE11) -->
  <!-- <script>
    if(!('CSS' in window) || !CSS.supports('color', 'var(--color-var)')) {var cfStyle = document.getElementById('codyframe');if(cfStyle) {var href = cfStyle.getAttribute('href');href = href.replace('style.css', 'style-fallback.css');cfStyle.setAttribute('href', href);}}
  </script> -->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    
  <title>Acceuil | Inkho</title>


  

</head>
<body>

  

  
    <form action="" method="post" class="sign-up-form width-50% items-center" >
      <div class="text-component text-center margin-bottom-sm">
        <h1>Nous Rejoindre</h1>
        <p>Inscrit toi en tant que Tatoueur ou Particulier <br> Tu as deja un compte? <a href="connexion.php">Connexion</a></p>
      </div>

    

      <div class="margin-bottom-sm">
        <label class="form-label margin-bottom-xxxs" for="">Identifiant</label>
        <input class="form-control width-100%" type="text" name="identifiant" id="id" placeholder="">
      </div>

      <div class="margin-bottom-sm">
        <label class="form-label margin-bottom-xxxs" for="">Mot de passe</label>
        <input class="form-control width-100%" type="text" name="mdp" id="mdp" placeholder="" >
      </div>

      <div class="margin-bottom-sm">
        <label class="form-label margin-bottom-xxxs" for="">bio</label>
        <input class="form-control width-100%" type="text" name="bio" id="bio" placeholder="">
      </div> 

      <div class="margin-bottom-sm">
        <label class="form-label margin-bottom-xxxs" for="email">Email</label>
        <input class="form-control width-100%" type="email" name="email" id="" placeholder="email@myemail.com">
      </div>


      <div class="margin-bottom-sm  margin-top-xl">
        <div class="grid gap-xs">
          <div class="col-6@md">
            <label class="form-label margin-bottom-xxxs" for="first_name">Prenom</label>
            <input class="form-control width-100%" type="text" name="first_name" id="first_name">
          </div>

          <div class="col-6@md">
            <label class="form-label margin-bottom-xxxs" for="last_name">Nom</label>
            <input class="form-control width-100%" type="text" name="last_name" id="last_name">
          </div>
        </div>
      </div>

      <div class="margin-bottom-sm">
        <div class="grid gap-xs">
          
            <label class="form-label margin-bottom-xxxs" for="city">Ville</label>
            <input class="form-control width-100%" type="text" name="city" id="city">
          
        </div>
      </div>
      


      <div class="margin-bottom-sm">
        <div class="grid gap-xs">
          <div class="col-6@md">
            <label class="form-label margin-bottom-xxxs" for="">Choix de votre catégorie (si tu es tatoueur):</label>
              <select class="select__input form-control width-100%" name="cat_id" id="">
                
                  
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
                  <option value="11" selected>Aucun (non tatoeur)</option>
                
              </select>
          </div>

          <div class="col-6@md">
              <label class="form-label margin-bottom-xxxs" for="role_id">Choix de votre Statut: </label>
              <select class="select__input form-control width-100%" name="role_id">
                
                  
                  <option value="1"selected>Tatoueur</option>
                  <option value="2">Particulier</option>
                  
                
              </select>
          </div>
          
        </div>
      </div>
      
      
      <div class="margin-bottom-sm text-right">     
        <input type="submit" name="envoi" class="btn btn--primary">
      </div> 

    </form>




    <script src="assets/js/scripts.js"></script>
  </body>
</html>