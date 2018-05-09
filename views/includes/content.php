<div class="container">
<h3 id="h2"><?= $title ?></h3>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="../../images/img_jeu/3365413-9174638891-31532.jpg" alt="1">
            <div class="container">
              <div class="carousel-caption text-left">
                <form action="actujeux" method="post">
                  <input type="hidden" name="plateform" value="PS4">
                  <input class="btn btn-sm btn-outline-secondary" type="submit" value="jeux PS4">
                </form>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="../../images/img_jeu/XboxOneS_CnsleCntrllr_Hrz_FrntTlt_TransBG_RGB.0.jpg" alt="2">
            <div class="container">
              <div class="carousel-caption">
                <form action="actujeux" method="post">
                  <input type="hidden" name="plateform" value="XBOX">
                  <input class="btn btn-sm btn-outline-secondary" type="submit" value="jeux XBOX">
                </form>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="../../images/img_jeu/laptop-157424_960_720.png" alt="3">
            <div class="container">
              <div class="carousel-caption text-right">
                <form action="actujeux" method="post">
                  <input type="hidden" name="plateform" value="PC">
                  <input class="btn btn-sm btn-outline-secondary" type="submit" value="jeux PC">
                </form>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="../../images/img_jeu/switch.jpg" alt="4">
            <div class="container">
              <div class="carousel-caption text-right">
                <form action="actujeux" method="post">
                  <input type="hidden" name="plateform" value="SWITCH">
                  <input class="btn btn-sm btn-outline-secondary" type="submit" value="jeux SWITCH">
                </form>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
</div>
