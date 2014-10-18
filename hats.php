<?php
    require_once("inc/config.php");
    $pageTitle = "twocedi - Hats";
    $m1 = "";
    $m2 = "active dropdown";
    $m3 = "dropdown";
    include(ROOT_PATH . 'inc/header-inc.php');
    include(ROOT_PATH . 'inc/form-inc.php'); ?>

    <div class="container">
      <div class="row">
        <h2>Hats</h2>
      </div>
      <div id="imageGallery">
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href='img/hats/hats1.jpg' class="thumbnail">
              <img src="img/hats/hats1.jpg" data-src="holder.js/100x180" alt="Blue and red pocket designs">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/hats/hats2.jpg" class="thumbnail">
              <img src="img/hats/hats2.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/hats/hats3.jpg" class="thumbnail">
              <img src="img/hats/hats3.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/hats/hats4.jpg" class="thumbnail">
              <img src="img/hats/hats4.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href='img/hats/hats5.jpg' class="thumbnail">
              <img src="img/hats/hats5.jpg" data-src="holder.js/100x180" alt="Blue and red pocket designs">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/hats/hats6.jpg" class="thumbnail">
              <img src="img/hats/hats6.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/hats/hats7.jpg" class="thumbnail">
              <img src="img/hats/hats7.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/hats/hats8.jpg" class="thumbnail">
              <img src="img/hats/hats8.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php
      include(ROOT_PATH . 'inc/footer-inc.php'); ?>