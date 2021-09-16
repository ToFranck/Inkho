<?php
    
    Class Infoprofil{

       public function presentation(){

        $bdd = new PDO('mysql:host=localhost;dbname=projetp;charset=utf8;', 'root','');         //co a la bdd
        $uti_id = (int) $_SESSION['ut_id']; //recuperation de l'id de l'utilisateur ,supprimer les espaces avant et apres (get passe les parametres de quelque chose dans l'url)
        
        $req = $bdd->prepare("SELECT * FROM utilisateur, categorie, role WHERE ut_id = ? AND utilisateur.cat_id = categorie.cat_id AND utilisateur .role_id = role .role_id"); 
        //  where id " ce qu'on va lui donner

        $req ->execute(array($uti_id));
        $voirUti =  $req->fetch();


        $req = $bdd->prepare("SELECT * FROM image WHERE ut_id = ?");
        $req -> execute(array($uti_id));

        $voirImg = $req->fetchAll();


        }
        
}

    // $profil =new Infoprofil;
    // $profil ->presentation();
      
    



?>