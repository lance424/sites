
<?php

define('IN_PHPBB', true);
$php_root_dir = './';

$page = 'index';
#$pageid = 'index';

ini_set("include_path","$php_root_dir:$php_root_dir . 'include':$php_root_dir . 'templates'");

include($php_root_dir . 'include/config.inc');

?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <META content="<?php echo $ps_desc[$page] ?>" name=description>
    <META content="<?php echo $ps_kw[$page] ?>" name=keywords>
    <link rel="stylesheet" href="<?php echo $env ?>include/<?php echo $css ?>" type="text/css">
    <title><?php echo $ps_title[$page] ?></title>

    <!-- Google Analytics javascript -->
    <!--script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-25431582-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script-->

  </head>

  <body>
    <div id="page">

      <div id="header">
        <a href="<?php echo $env ?>index.php"><img src="<?php echo ${env} ?>images/pslogo1.jpg" border="0"></a>
        <a href="<?php echo $env ?>index.php"><img src="<?php echo ${env} ?>images/logo6501.jpg" border="0"></a>
      </div>  <!-- end header -->

      <div id="social">
        <!-- Twitter Follow -->
        <a href="https://twitter.com/PerrysSolutions" class="twitter-follow-button" data-show-count="false">Follow @PerrysSolutions</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <strong>Like what you are reading? Recommend it!</strong>  
        <!-- LinkedIn -->
        <script type="text/javascript" src="http://platform.linkedin.com/in.js"></script><script type="in/share" data-url="<?php echo $_SERVER['SCRIPT_NAME'] ?>"></script>  
        <!-- Twitter Tweet -->
        <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo $_SERVER['SCRIPT_NAME'] ?>" data-count="none">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>  
        <!-- Facebook -->
        <iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo $_SERVER['SCRIPT_NAME'] ?>&layout=button_count&show_faces=false&width=175&action=recommend&colorscheme=light&height=20" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:175px; height:20px;" allowTransparency="true"></iframe>
      </div> <!-- end social -->

      <div id="nav">
        <a href="<?php echo $env ?>">Home</a>
        <a href="<?php echo $env ?>playbook.php">Playbook of Services</a>
        <a href="<?php echo $env ?>playbook-project.php">- Projects</a>
        <a href="<?php echo $env ?>playbook-training.php">- Training</a>
        <a href="<?php echo $env ?>playbook-program.php">- Program Management</a>
        <!--a href="<?php echo $env ?>doeiit.php">DOE In Industrial Testing</a-->
        <!--a href="<?php echo $env ?>moredoe.php">Description of Techniques</a-->
        <!--a href="<?php echo $env ?>t-test.php">T-Test Example</a-->
        <a href="<?php echo $env ?>reasons.php">Testimonials</a>
        <a href="<?php echo $env ?>publications.php">Publications</a>
        <a href="<?php echo $env ?>about.php">About Us</a>
        <a href="<?php echo $env ?>contact.php">Getting Started</a>
        <a href="<?php echo $env ?>payinvoice.php">Pay Invoice</a>
      </div>  <!-- end nav -->

      <div id="content">
        <h1>Every great team needs a great coach</h1>
        <p>Trust, strategy and training in the fundamentals are all keys to success. Perry's Solutions has the experience to provide excellent coaching, with proven and successful results.  We use our status as thought leaders in the field of Design of Experiments (DOE) to give our clients fast and effective solutions to any business problems. </p>

        <h2>Why choose Perry's Solutions, Inc.?</h2>
        <p>At Perry's Solutions, Inc. we work tirelessly to provide effective and long-lasting improvements to local businesses and the community. If your business is experiencing problems like:</p>
        <ul>
          <li>You have <a href="<?php echo ${env} ?>playbook-project.php">hit the wall</a> on a product or process development</li>
          <li>You need help <a href="<?php echo ${env} ?>playbook-project.php">predicting and avoiding any potholes</a> on an upcoming project.</li>
          <li>Your best internal <a href="<?php echo ${env} ?>playbook-project.php">problem solvers are too busy</a></li>
          <li>You need to provide your team with the training that will bring them to the <a href="<?php echo ${env} ?>playbook-training.php">highest level of performance, </a>while saving time and money.</li>
          <li>You have a great idea, but <a href="<?php echo ${env} ?>playbook-program.php">need help</a> turning it into reality</li>
        </ul>

        <h1>Let Perry's Solutions give your business a competitive edge!</h1>

<?php include($php_root_dir . 'include/offer.inc'); ?>

        <p> If you value trust, knowledge and experience for your business consulting needs, you have come to the right place. We have provided businesses with practical solutions and real results. Those businesses chose us because of our:
        <ul>
          <li>Trust and discretion</li>
          <li>Applied industrial experience</li>
          <li>Focus, Flexibility and a Personal Touch</li>
          <li>Academic perspective (depth of understanding)</li>
          <li>Engineering background (technical understanding in R&D, design and manufacturing)</li>
          <li>Program management perspective (results and outcome orientation)</li>
          <li>Demonstrated ability to apply and teach in many areas</li>
          <ul>
            <li>Flexible, fresh perspective as an outsider</li>
            <li>Medical device, defense, aerospace, consumer products</li>
            <li>Product design and manufacturing processes</li>
            <li>Large and small projects</li>
          </ul>
        </ul>

<?php $ytplayer_video = 'http://www.youtube.com/embed/2s5aRzGFzIA'; include($php_root_dir . 'templates/ytplayer.tpl'); ?>

      </div>  <!-- end content -->

      <div id="news">
        <p><img src="<?php echo $env ?>images/News.jpg">
        <h3>Testimonials
          <a href="<?php echo $env ?>reasons.php"><img src="<?php echo $env ?>images/testimonials.gif" border="0"></a>
        </h3>
        <p></p>
        <p></p>
        <p></p><a class="twitter-timeline" href="https://twitter.com/PerrysSolutions" data-widget-id="333698925389287424">Tweets by @PerrysSolutions</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>  <!-- end news -->

      <div id="contact">
        <p><strong>Email your situation to see the benefit of further discussion</strong>
        <br><i>E-mail</i><br><a href="mailto:info@perryssolutions.com">info@perryssolutions.com</a>
        <br><i>Phone</i><br>651-230-3861
        <br><i>Mail</i><br>5865 Neal Ave N, #182<br>Stillwater, MN 55082</p>
      </div>  <!-- end contct -->

      <div id="footer">
        <p>© 2013 Perry's Solutions, Inc.<p>
        <p><a href="<?php echo ${env} ?>auth">Auth</a><p>
      </div>  <!-- end footer -->

<?php #include($php_root_dir . 'templates/header.tpl'); 

#include($php_root_dir . 'templates/nav.tpl');

#include($php_root_dir . 'include/content.inc');

#include($php_root_dir . 'templates/contact_nav.tpl');

#include($php_root_dir . 'templates/footer.tpl');

?>

    </div>  <!-- end page -->

  </body>

</html>
