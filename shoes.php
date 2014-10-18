<?php
    require_once("inc/config.php");
    $pageTitle = "twocedi - Shoes";
    $m1 = "";
    $m2 = "active dropdown";
    $m3 = "dropdown";
    include(ROOT_PATH . 'inc/header-inc.php');
    include(ROOT_PATH . 'inc/form-inc.php'); ?>

    <div class="container">
      <div class="row">
        <h2>Shoes</h2>
      </div>
      <div id="imageGallery">
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href='img/shoes/shoes2.jpg' class="thumbnail">
              <img src="img/shoes/shoes2.jpg" data-src="holder.js/100x180" alt="Blue and red pocket designs">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/shoes/shoes3.jpg" class="thumbnail">
              <img src="img/shoes/shoes3.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/shoes/shoes4.jpg" class="thumbnail">
              <img src="img/shoes/shoes4.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/shoes/flip.jpg" class="thumbnail">
              <img src="img/shoes/flip.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href='img/shoes/shoes1.jpg' class="thumbnail">
              <img src="img/shoes/shoes1.jpg" data-src="holder.js/100x180" alt="Blue and red pocket designs">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/shoes/shoes7.jpg" class="thumbnail">
              <img src="img/shoes/shoes7.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/shoes/shoes5.jpg" class="thumbnail">
              <img src="img/shoes/shoes5.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/shoes/shoes6.jpg" class="thumbnail">
              <img src="img/shoes/shoes6.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php
      include(ROOT_PATH . 'inc/footer-inc.php'); ?>