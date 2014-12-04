var handleMyMediaQuery = function(mql) {

	if (mql.matches)
	{
		document.write("<li><a href='index.php'>Home</a></li>");
	    document.write("<li><a href='new-range.php'>New Range</a></li>");
	    document.write("<li><a href='shirts.php'>Shirts</a></li>");
	    document.write("<li>><a href='bags.php'>Bags</a></li>");
	    document.write("<li>><a href='hats.php'>Hats</a></li>");
	    document.write("<li>><a href='shoes.php'>Shoes</a></li>");
	    document.write("<li>><a href='#textModal' data-toggle='modal'>Contact</a></li>");
	    document.write("<li>><a href='about.php'>About</a></li>");
	} else {
		// <li class=<?php echo "$m1"?>><a href="index.php">Home</a></li>
		document.write("<li><a href='index.php'>Home</a></li>");
	    document.write("<li>");
	      document.write("<a data-toggle='dropdown' data-target='#''>Products<b class='caret'></b></a>")
	      document.write("<ul class='dropdown-menu'>")
	       	document.write("<li><a href='new-range.php'>New Range</a></li>")
	        document.write("<li><a href='shirts.php'>Shirts</a></li>")
	        document.write("<li><a href='bags.php'>Bags</a></li>")
	        document.write("<li><a href='hats.php'>Hats</a></li>")
	        document.write("<li><a href='shoes.php'>Shoes</a></li>")
	      document.write("</ul>")
	    document.write("</li>")
	    document.write("<li>")
	    document.write("<a data-toggle='dropdown' data-target='#''>About twocedi<b class='caret'></b></a>")
	      document.write("<ul class='dropdown-menu'>")
	        document.write("<li><a href='about.php'>About</a></li>")
	        document.write("<li><a href='#textModal' data-toggle='modal'>Contact</a></li>")
	      document.write("</ul>")
	    document.write("</li>")
	}
}
myMediaQuery = window.matchMedia("screen and (max-width: 500px)");
handleMyMediaQuery(myMediaQuery);
myMediaQuery.addListener(handleMyMediaQuery);
