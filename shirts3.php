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
      <nav>
        <ul class="pagination">
          <li><a href="shirts2.php"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
          <li><a href="shirts.php">1</a></li>
          <li><a href="shirts2.php">2</a></li>
          <li class="active"><a href="shirts3.php">3</a></li>
          <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
        </ul>
      </nav>
      <div id="imageGallery">
        <div class="row">
          <h2>Vim! tees</h2>
        </div>
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href='img/tees/16.jpg' class="thumbnail">
              <img src="img/tees/16.jpg" data-src="holder.js/100x180" alt="Blue and red pocket designs">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/tees/23.jpg" class="thumbnail">
              <img src="img/tees/23.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/tees/22.jpg" class="thumbnail">
              <img src="img/tees/22.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href="img/tees/24.jpg" class="thumbnail">
              <img src="img/tees/24.jpg" data-src="holder.js/100%x180" alt="...">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href='img/tees/13.jpg' class="thumbnail">
              <img src="img/tees/13.jpg" data-src="holder.js/100x180" alt="Blue and red pocket designs">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href='img/tees/26jpg' class="thumbnail">
              <img src="img/tees/26.jpg" data-src="holder.js/100x180" alt="Blue and red pocket designs">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href='img/tees/25.jpg' class="thumbnail">
              <img src="img/tees/25.jpg" data-src="holder.js/100x180" alt="Blue and red pocket designs">
            </a>
          </div>
          <div class="col-xs-6 col-md-3">
            <a href='img/tees/27.jpg' class="thumbnail">
              <img src="img/tees/27.jpg" data-src="holder.js/100x180" alt="Blue and red pocket designs">
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php
      include(ROOT_PATH . 'inc/footer-inc.php'); ?>