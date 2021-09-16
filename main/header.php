<style>

  #logo{
      padding: 0;
      font-size: 60px;
      color: rgb(146, 180, 245);
      font-family: 'Oswald', sans-serif;
      font-weight: bold;
      padding-right: 50px;
  }

  nav ul {
      display: flex;
      justify-content: center;
      list-style: none
  }

  nav ul li {
      padding: 50px 20px;
  }

  nav ul li a {
      color: white;
      text-decoration: none;
      font-family: 'Montserrat', sans-serif;
      font-size: 20px;
  }

  


  @media (max-width: 800px) {
      nav ul {
          /* height: 230px; */
          flex-direction: column;
          text-align: center;
      }

      nav ul li {
          padding: 20px 20px;
      }
  }

  @media (max-width: 600px) {
      nav ul {
          /* height: 230px; */
          flex-direction: column;
          text-align: center;
      }
     
      
  }

</style>

<nav>
    <ul>
        <li id="logo">Inkho</li>
        <?php if(isset($_SESSION['ut_id'])){                                                      
        ?>
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="les_styles.php">Styles</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="profil.php">Mon profil</a></li>
            <li><a href="deco.php">Deconnexion</a></li>

        <?php
            }else{  
        ?>
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="les_styles.php">Styles</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="connexion.php">Connexion</a></li>
        <?php
            }
        ?>
    </ul>
</nav>

      