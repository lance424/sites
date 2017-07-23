  <body onLoad="setbold(window.pageid);" topmargin="0">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <table width="800" cellpadding="0" cellspacing="5">
      <tr>
        <td width="20%">
          <a href="<?php echo $env ?>index.php"><img src="<?php echo ${env} ?>images/pslogo1.jpg" border="0"></a>
        </td>
        <td>
          <a href="<?php echo $env ?>index.php"><img src="<?php echo ${env} ?>images/logo6501.jpg" border="0"></a>
        </td>
      </tr>
      <tr>
        <td width="20%">
<!-- Twitter Follow -->
<a href="https://twitter.com/PerrysSolutions" class="twitter-follow-button" data-show-count="false">Follow @PerrysSolutions</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </td>
        <td>
<?php

    include($php_root_dir . 'templates/social.tpl');

?>
        </td>
      </tr>