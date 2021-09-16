<?php
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=projetp;charset=utf8;', 'root','');

    $supp = $bdd->prepare("DELETE FROM utilisateur WHERE ut_id = ?");
    $supp->execute(array($_SESSION['ut_id']));
    session_destroy();
    header('Location:connexion.php');

?>