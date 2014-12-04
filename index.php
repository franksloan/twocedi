    <?php
    require_once("inc/config.php");
    $pageTitle = "twocedi - Home Page";
    $m1 = "active";
    $m2 = "dropdown";
    $m3 = "dropdown";
    $m4 = "";
    include(ROOT_PATH . 'inc/header-inc.php'); ?>

    <div id="homeslide" class="carousel slide jumbotron">
      <div class="container">
        <ol class="carousel-indicators">
          <li class="active" data-target="#homeslide" data-slide-to="0"></li>
          <li data-target="#homeslide" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <a class="nolink" href="new-range.php">
              <h1>New twocedi styles</h1>
              <p class="lead">Check out the new range!</p>
            </a>
          </div>
          <div class="item">
            <h1>Contact us</h1>
            <p>Feel free to contact us with any requests or ideas!</p>
            <a class="btn btn-primary" href="#textModal" data-toggle="modal">Email</a>
            <a class="btn btn-info" href="tel:+233249515480">Phone</a>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#homeslide" data-slide="prev">
        <span class="icon-prev"></span>
      </a>
      <a class="right carousel-control" href="#homeslide" data-slide="next">
        <span class="icon-next"></span>
      </a>
    </div>

    <?php
    include(ROOT_PATH . 'inc/form-inc.php'); ?>

    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="row">
            <div class="col-sm-6">
              <a href="shoes.php"> 
                <div class="row">
                  <div class="col-sm-8">
                    <h2>Shoes</h2>
                    <p>We fully customise most shoes with our funky coloured textiles - heels, pumps, trainers, hi-tops, anything you want!</p>
                  </div>
                  <div class="col-sm-4">
                    <a href='shoes.php' class="thumbnail">
                      <img class="img-responsive" src="img/tcs-3.jpg">
                    </a>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-sm-6">
              <a href="shirts.php">
                <div class="row">
                  <div class="col-sm-8">
                    <h2>Shirts</h2>
                    <p>The most trendy hete in Accra - with our African maps, the twocedi logos and our and trademark <i><b>Vim!</b></i> tees.</p>
                  </div>
                  <div class="col-sm-4">
                    <a href='shirts.php' class="thumbnail">
                      <img class="img-responsive" src="img/africa.jpg">
                    </a>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="row">
                <a href="hats.php">
                  <div class="col-sm-8">
                    <h2>Hats</h2>
                    <p>We have snap-backs, caps and a few other hats for you!</p>
                  </div>
                  <div class="col-sm-4">
                    <a href='hats.php' class="thumbnail">
                      <img class="img-responsive" src="img/trilby.jpg">
                    </a>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="row">
                <a href="bags.php">
                  <div class="col-sm-8">
                      <h2>Anything else</h2>
                      <p>Phone cases, bags, wallets or belts - if you want something different in our designs then let us know.</p>
                  </div>
                  <div class="col-sm-4">
                    <a href='bags.php' class="thumbnail">
                      <img class="img-responsive" src="img/bag.jpg">
                    </a>
                  </div>
                </a>
              </div>  
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <a class="twitter-timeline" href="https://twitter.com/twocedi" data-widget-id="513755243994042368">Tweets by @twocedi</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
      </div>
      <?php
      include(ROOT_PATH . 'inc/footer-inc.php'); ?>
