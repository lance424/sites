
<html>
  <head>
    <link rel="stylesheet" href="<?php echo $env ?>include/<?php echo $css ?>" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title><?php echo $ps_title[$page] ?></title>
    <META content="<?php echo $ps_desc[$page] ?>" name=description>
    <META content="<?php echo $ps_kw[$page] ?>" name=keywords>

    <script type="text/javascript">
	  window['pageid']='<?php echo ${pageid} ?>';
    </script>

<?php

    include($php_root_dir . 'include/left_scr.inc');

?>

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-25431582-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>

  </head>
