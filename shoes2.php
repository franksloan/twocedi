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
        <div class="header">
          <div class="col-xs-3">
            <h2>Shoes</h2>
          </div>
          <div class="col-xs-9">
            <nav>
              <ul class="pagination">
                <li><a href="shoes.php"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
                <li><a href="shoes.php">1</a></li>
                <li class="active"><a href="shoes2.php">2</a></li>
                <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div id="imageGallery">
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <a href='img/shoes/shoe15.jpg' class="thumbnail">
              <img src="img/shoes/shoe15.jpg" data-src="holder.js/100x180" alt="...">
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