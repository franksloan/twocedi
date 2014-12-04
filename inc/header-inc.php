<html>
  <head> 
    <title><?php echo "$pageTitle"?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>    
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <link href="css/tumblr.css" rel="stylesheet" media="screen">
    <link href="css/twocedistyle.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class"sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand text-muted brand" href="index.php"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class=<?php echo "$m1"?>><a href="index.php">Home</a></li>
            <li class=<?php echo "$m2"?>>
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Products<b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="new-range.php">New Range</a></li>
                <li><a href="shirts.php">Shirts</a></li>
                <li><a href="bags.php">Bags</a></li>
                <li><a href="hats.php">Hats</a></li>
                <li><a href="shoes.php">Shoes</a></li>
              </ul>
            </li>
            <li class=<?php echo "$m4"?>><a href="tumblr.php">tumblr</a></li>
            <li class=<?php echo "$m3"?>>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">About twocedi<b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="about.php">About</a></li>
                <li><a href="#textModal" data-toggle="modal">Contact</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>