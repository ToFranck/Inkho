<?php
    session_start();  //commencement de la session
    
    if(isset($_SESSION['ut_id'])){                                                          //si on detect une co redirection vers la page home
        header('Location:index.php');
        exit;
    } 
    $bdd = new PDO('mysql:host=localhost;dbname=projetp;charset=utf8;', 'root','');         //co a la bdd
    if(isset($_POST['envoi'])){                                                             //boucle si j'envoie
                                                                                            // Pour encoder, sécurise pour eviter l'insertion de code          
            $email = htmlspecialchars($_POST['email']);             
                                                                                            // crypt le mdp
            $mdp = sha1($_POST['mdp']);  

        if(!empty($_POST['email']) AND !empty($_POST['mdp'])){                              //check si les input ne sont pas vide 
                            
                                                                                                // reqt Récupérer les utilisateurs:
            $recupUser= $bdd->prepare('SELECT * FROM utilisateur WHERE email = ? AND mdp = ?');
            $recupUser->execute(array($email, $mdp));                                       // execute 

            $userexist = $recupUser->rowCount();                                            //renvoie le nombre de lignes qui correspondent à un critère spécifié.
            if($userexist == 1){
                $userinfo = $recupUser->fetch();                                            // rechercher ses informations puis les mettres dans des variables de sessions
                $_SESSION['ut_id'] = $userinfo['ut_id'];                                    // fetch() fait une recherche precise 
                $_SESSION['identifiant'] = $userinfo['identifiant'];
                $_SESSION['email'] = $userinfo['email'];
                
                header("Location: profil.php?ut_id=".$_SESSION['ut_id']);
        
            }else{
                    $msg1 =  "<p class='erreur'>Votre mot de passe ou adresse est incorrect</p>";
                }

        }else{
                $msg1 = "<p class='erreur items-center'>Veuillez compléter tous les champs</p>";
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <title>Connexion | Inkho</title>

    <link id="codyframe" rel="stylesheet" href="assets/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link href="assets/css/connexion.css" rel="stylesheet">

  
</head>
<body>


       
                       
        
        <form action="" method="post" class="sign-up-form width-100% items-center form" >
                    <div class="text-component text-center margin-bottom-sm">
                        <h1>Connexion</h1> 
                    </div>

                    <?php if(isset($msg1)){ echo $msg1;}?>
                    


                <div class="margin-sm">
                    <label class="form-label margin-bottom-xxxs" for="email">Email</label><br>
                    <input class="form-control width-100%" type="email" name="email" id="email" placeholder=""  autocomplete="off">
                </div>

                <div class="margin-sm">
                    <label class="form-label margin-bottom-xxxs" for="mdp">Mot de passe</label>
                    <input class="form-control width-100%" type="password" name="mdp" id="mdp" placeholder=""  autocomplete="off">
                    <p id="crea">Pas encore de compte? <a href="creation_compte.php">Ici</a></p>
                    <p id="forget">Mot de passe oublié? <a href="#">Ici</a></p>
                </div>

                <div class="margin-sm">
                    <!-- <button class="btn btn--primary btn--md width-100%" name="envoi">Join</button> -->
                    <input type="submit" name="envoi" class="btn btn--primary btn--md width-100%">
                    
                </div>

                <div class="margin-sm">
                    <a href="index.php"><img src="https://img.icons8.com/material-outlined/24/000000/long-arrow-left.png"></a>
                </div>
        </form>


        

        <form action="landing.php" method="post" class="sign-up-form width-20% items-center form2" >
                    <div class="text-component text-center margin-bottom-sm">
                        <h1>Recuperation</h1> 
                    </div>

             

                <div class="margin-sm">
                    <label class="form-label margin-bottom-xxxs" for="">Mail</label><br>
                    <input class="form-control width-100%" type="email" name="email" id="email" placeholder="">
                </div>

                
                <div class="margin-sm">
                    <button class="btn btn--primary btn--md width-100%">Join</button>
                    
                </div>

                <div class="margin-sm">
                    <a href="connexion.php"><img src="https://img.icons8.com/material-outlined/24/000000/long-arrow-left.png"></a>
                </div>
        </form>


    
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/co.js"></script>
</body>
</html>




