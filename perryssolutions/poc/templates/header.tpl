  <body onLoad="setbold(window.pageid);" topmargin="0">
    <table width="800" cellpadding="0" cellspacing="5">
      <tr>
        <td width="40%">
          <a href="<?php echo $env ?>index.php"><img src="<?php echo ${env} ?>images/pslogo1.jpg" border="0"></a>
        </td>
        <td>
          <a href="<?php echo $env ?>index.php"><img src="<?php echo ${env} ?>images/logo6501.jpg" border="0"></a>
        </td>
      </tr>
      <tr>
        <td width="40%">
          &nbsp
        </td>
        <td>
<?php

    include($php_root_dir . 'templates/social.tpl');

?>
        </td>
      </tr>
