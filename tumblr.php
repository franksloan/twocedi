<?php
    require_once("inc/config.php");
    $pageTitle = "Two Cedi - tumblr";
    $m1 = "";
    $m2 = "dropdown";
    $m3 = "dropdown";
    $m4 = "active";
    include(ROOT_PATH . 'inc/header-inc.php');
    include(ROOT_PATH . 'inc/form-inc.php'); ?>
    
    <div class="tumblr">
    	<div class="container">
            <div class="tumblr-buttons">
                <a href="http://www.tumblr.com/share" title="Share on Tumblr" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:81px; height:20px; background:url('https://platform.tumblr.com/v1/share_1.png') top left no-repeat transparent;"></a>
                <iframe class="btn" frameborder="0" border="0" scrolling="no" allowtransparency="true" height="25" width="117" src="http://platform.tumblr.com/v1/follow_button.html?button_type=2&tumblelog=staff&color_scheme=dark"></iframe>         
            </div>
    		<div class="tumblr-title">
    			<h1><a href="http://twocedi.tumblr.com/">Two Cedi</a></h1>
    			<span class="description" style="color: rgba(135, 207, 205, 0.701961);">
                   | Art | Fashion |
               	</span>
    		</div>
            <script type="text/javascript" src="http://twocedi.tumblr.com/js"></script>
		</div>
    </div>
    <?php
      include(ROOT_PATH . 'inc/footer-inc.php'); ?>