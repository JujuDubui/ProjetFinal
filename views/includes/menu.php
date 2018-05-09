<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="accueil">Univers Of The Game</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php if(empty($_SESSION['login_admin'])){ ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Actu jeux
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <form action="actujeux" method="POST"><input type="hidden" name="plateform" value="PS4"><input class="dropdown-item" type="submit" value="PS4"></form>
          <form action="actujeux" method="POST"><input type="hidden" name="plateform" value="XBOX"><input class="dropdown-item" type="submit" value="XBOX"></form>
          <form action="actujeux" method="POST"><input type="hidden" name="plateform" value="PC"><input class="dropdown-item" type="submit" value="PC"></form>
          <form action="actujeux" method="POST"><input type="hidden" name="plateform" value="SWITCH"><input class="dropdown-item" type="submit" value="SWITCH"></form>
        </div>
      </li>
      <?php } ?>
      <?php if(!empty($_SESSION['login'])){ ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Boutique
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="boutique">Accueil du magasin</a>
        </div>
      </li>
    <?php } ?>
    <?php if(!empty($_SESSION['login'])){?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="profil"><img src="../images/img_jeu/co.jpg" alt="Users"> <?= $_SESSION['login'] ?></a>
            <a class="dropdown-item" href="panier">Panier<?php if(isset($_SESSION['panier'])){?>(<?=$_SESSION['nb_jeu']?>)</a>
            <?php } else{?>(0)<?php } ?></a>
            <a class="dropdown-item" href="commandeclient">Commandes</a>
            <a class="dropdown-item" href="logOut">Deconnexion</a>
        </div>
      </li>
      <?php
      } else {
          if(isset($_SESSION['login_admin'])){
      ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="panneau">Gestionnaire d'utilisateurs</a>
          <a class="dropdown-item" href="boutique">Boutique</a>
          <a class="dropdown-item" href="Vente">graphique vente</a>
          <a class="dropdown-item" href="logOut">Deconnexion</a>
        </div>
      </li>
      <?php }else{ ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Users
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="inscription">Inscription</a>
              <a class="dropdown-item" href="connexion">Connexion</a>
          </div>
        </li>
      <?php }} ?>
      <?php if(!isset($_SESSION['login_admin'])){?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Help
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php if(isset($_SESSION['login']) OR isset($_SESSION['login_admin'])){ ?>
          <a class="dropdown-item" href="help">Contactez-moi</a>
        <?php } else{ ?>
          <a class="dropdown-item" href="connexion">Contactez-moi</a>
        <?php }?>
        </div>
      </li>
    <?php } else{} ?>
    </ul>
    <?php if(isset($_SESSION['login_admin'])){ ?>
      <form method="POST" class="form-inline mt-2 mt-md-0" action="commandeallclient">
        <input style="position:relative;right:25px;" class="form-control mr-sm-2" type="text" name="login" placeholder="nom d'un client">
        <input style="position:relative;right:25px;" class="btn btn-outline-success my-2 my-sm-0" type="submit" value="search order">
      </form>
    <?php } ?>
    <form method="POST" action="Search" class="form-inline mt-2 mt-md-0">
              <input class="form-control mr-sm-2" type="text" name="search" placeholder="nom d'un jeu" aria-label="Search">
              <input class="btn btn-outline-success my-2 my-sm-0" value="search game" type="submit">
    </form>
  </div>
</nav>
