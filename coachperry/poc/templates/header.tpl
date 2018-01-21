  <body onLoad="setbold(window.pageid);" topmargin="0">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div class="header">
      <!--a href="<?php echo $env ?>"><img src="<?php echo ${env} ?>images/pslogo1.jpg" border="0"></a-->
      Coach Perry
      <!--a href="<?php echo $env ?>"><img src="<?php echo ${env} ?>images/logo6501.jpg" border="0"></a-->
    </div>

<?php

    include($php_root_dir . 'templates/social.tpl');

?>
