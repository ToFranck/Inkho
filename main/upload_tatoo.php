<?php

        require('db.php');
        if(isset($_SESSION['ut_id'])){ 
                //btn add
                if(isset($_POST['add'])){
                        echo "ok"; 

                        
                        $nom = $_POST['tatoo_name'];
                        
                        $tatoo = $_FILES['tatoo'];

                        $upload = "i/img_profil/tatoo/".$tatoo;  // dossier d'insertion

                        move_uploaded_file($_FILES['tatoo']['tmp_name'], $upload);

                        //requette insertion query execute 
                        $sql = "INSERT INTO image(nom,tatoo

                        
                }

        }
        

?>