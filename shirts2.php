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
            <h2>twocedi tees</h2>
          </div>
          <div class="col-xs-9">
            <nav>
              <ul class="pagination">
                <li><a href="shirts.php"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
                <li><a href="shirts.php">1</a></li>
                <li class="active"><a href="shirts2.php">2</a></li>
                <li><a href="shirts3.php">3</a></li>
                <li><a href="shirts3.php"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div id="imageGallery">
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href='img/tees/11.jpg' class="thumbnail">
              <img src="img/tees/11.jpg" data-src="holder.js/100x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/tees/14.jpg" class="thumbnail">
              <img src="img/tees/14.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/tees/12.jpg" class="thumbnail">
              <img src="img/tees/12.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/tees/15.jpg" class="thumbnail">
              <img src="img/tees/15.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href='img/tees/18.jpg' class="thumbnail">
              <img src="img/tees/18.jpg" data-src="holder.js/100x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/tees/20.jpg" class="thumbnail">
              <img src="img/tees/20.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/tees/19.jpg" class="thumbnail">
              <img src="img/tees/19.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>      
        </div>
      </div>
    </div>
    <?php
      include(ROOT_PATH . 'inc/footer-inc.php'); ?>