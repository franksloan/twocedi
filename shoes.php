<?php
    require_once("inc/config.php");
    $pageTitle = "twocedi - Shoes";
    $m1 = "";
    $m2 = "active dropdown";
    $m3 = "dropdown";
    $m4 = "";
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
            <a href="img/shoes/shoe11.jpg" class="thumbnail">
              <img src="img/shoes/shoe11.jpg" data-src="holder.js/100%x180" alt="...">
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
            <a href='img/shoes/shoe13.jpg' class="thumbnail">
              <img src="img/shoes/shoe13.jpg" data-src="holder.js/100x180" alt="Blue and red pocket designs">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/shoes/shoe10.jpg" class="thumbnail">
              <img src="img/shoes/shoe10.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/shoes/shoe14.jpg" class="thumbnail">
              <img src="img/shoes/shoe14.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/shoes/shoes6.jpg" class="thumbnail">
              <img src="img/shoes/shoes6.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href='img/shoes/shoe15.jpg' class="thumbnail">
              <img src="img/shoes/shoe15.jpg" data-src="holder.js/100x180" alt="Blue and red pocket designs">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/shoes/shoe8.jpg" class="thumbnail">
              <img src="img/shoes/shoe8.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php
      include(ROOT_PATH . 'inc/footer-inc.php'); ?>