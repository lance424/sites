
<?php

define('IN_PHPBB', true);
$php_root_dir = './';

$page = 'playbook-project';
$pageid = 'playbook-project';

ini_set("include_path","$php_root_dir:$php_root_dir . 'include':$php_root_dir . 'templates'");

include($php_root_dir . 'include/config.inc');

include($php_root_dir . 'templates/head.tpl');

include($php_root_dir . 'templates/header.tpl');

include($php_root_dir . 'templates/nav.tpl');

include($php_root_dir . 'include/content.inc');

include($php_root_dir . 'templates/contact_nav.tpl');

include($php_root_dir . 'templates/footer.tpl');

?>
