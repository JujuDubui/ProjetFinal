<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="accueil">Univers Of The Game</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <?php if(isset($_SESSION['login_admin'])){ ?>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="addjeux">Ajouter</a></button>
    <?php } else{ ?>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><img src="../images/img_jeu/panierblanc30x20.png" alt="panier"><a href="panier">Panier</a></button>
    <?php } ?>
    	<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="logOut">Deconnexion</a></button>
    </form>
  </div>
</nav>
