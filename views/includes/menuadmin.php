<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="accueil">Univers Of The Game</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form method="POST" class="form-inline mt-2 mt-md-0" action="commandeallclient">
      <input style="position:relative;right:40px;" class="form-control mr-sm-2" type="text" name="login" placeholder="nom d'un client">
      <input style="position:relative;right:40px;" class="btn btn-outline-success my-2 my-sm-0" type="submit" value="search order">
    </form>
  <form method="POST" action="Search" class="form-inline mt-2 mt-md-0">
            <input style="position:relative;right:25px;" class="form-control mr-sm-2" type="text" name="search" placeholder="nom d'un jeu" aria-label="Search">
            <input style="position:relative;right:25px;" class="btn btn-outline-success my-2 my-sm-0" value="search game" type="submit">
  </form>
    <form class="form-inline my-2 my-lg-0">
    	<button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="logOut">Deconnexion</a></button>
    </form>
  </div>
</nav>
