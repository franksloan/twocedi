<?php
    require_once("inc/config.php");
    $pageTitle = "twocedi - New Range";
    $m1 = "";
    $m2 = "active dropdown";
    $m3 = "dropdown";
    include(ROOT_PATH . 'inc/header-inc.php');
    include(ROOT_PATH . 'inc/form-inc.php'); ?>

    <div class="container">
      <div class="row">
        <h2>New twocedi range</h2>
      </div>
      <div id="imageGallery">
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href='img/newrange/new.jpg' class="thumbnail">
              <img src="img/newrange/new.jpg" data-src="holder.js/100x180" alt="Blue and red pocket designs">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/newrange/new4.jpg" class="thumbnail">
              <img src="img/newrange/new4.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/newrange/new1.jpg" class="thumbnail">
              <img src="img/newrange/new1.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/newrange/new7.jpg" class="thumbnail">
              <img src="img/newrange/new7.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href='img/newrange/new2.jpg' class="thumbnail">
              <img src="img/newrange/new2.jpg" data-src="holder.js/100x180" alt="Blue and red pocket designs">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/newrange/new5.jpg" class="thumbnail">
              <img src="img/newrange/new5.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/newrange/new3.jpg" class="thumbnail">
              <img src="img/newrange/new3.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
        </div>
        </div>
      </div>
      <?php
      include(ROOT_PATH . 'inc/footer-inc.php'); ?>