<?php
    require_once("inc/config.php");
    $pageTitle = "twocedi - Shirts";
    $m1 = "";
    $m2 = "active dropdown";
    $m3 = "dropdown";
    $m4 = "";
    include(ROOT_PATH . 'inc/header-inc.php');
    include(ROOT_PATH . 'inc/form-inc.php'); ?>

    <div class="container">
      <div class="row">
        <div class="header">
          <div class="col-xs-3">
            <h2>Fabric tees</h2>
          </div>
          <div class="col-xs-9">
            <nav>
              <ul class="pagination">
                <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
                <li class="active"><a href="shirts.php">1</a></li>
                <li><a href="shirts2.php">2</a></li>
                <li><a href="shirts3.php">3</a></li>
                <li><a href="shirts2.php"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div id="imageGallery">
              
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href='img/tees/1.jpg' class="thumbnail">
              <img src="img/tees/1.jpg" src="holder.js/100x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/tees/3.jpg" class="thumbnail">
              <img src="img/tees/3.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/tees/4.jpg" class="thumbnail">
              <img src="img/tees/4.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/tees/5.jpg" class="thumbnail">
              <img src="img/tees/5.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href='img/tees/7.jpg' class="thumbnail">
              <img src="img/tees/7.jpg" data-src="holder.js/100x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/tees/9.jpg" class="thumbnail">
              <img src="img/tees/9.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/tees/6.jpg" class="thumbnail">
              <img src="img/tees/6.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/tees/21.jpg" class="thumbnail">
              <img src="img/tees/21.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php
      include(ROOT_PATH . 'inc/footer-inc.php'); ?>