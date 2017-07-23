
<?php

if ( !defined('IN_PHPBB') ) {
    die('Hacking attempt');
}

if ( $page == 'index' ) {
    $upd_time=filemtime($php_root_dir . 'templates/index.tpl');
    include($php_root_dir . 'templates/index.tpl');
    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'playbook'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/playbook.tpl');
    include($php_root_dir . 'templates/playbook.tpl');
    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'playbook-training'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/playbook-training.tpl');
    include($php_root_dir . 'templates/playbook-training.tpl');
    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'playbook-project'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/playbook-project.tpl');
    include($php_root_dir . 'templates/playbook-project.tpl');
    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'playbook-program'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/playbook-program.tpl');
    include($php_root_dir . 'templates/playbook-program.tpl');
    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'payinvoice'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/payinvoice.tpl');
    include($php_root_dir . 'templates/payinvoice.tpl');
    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'msa'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/msa.tpl');
    include($php_root_dir . 'templates/msa.tpl');
    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'reasons'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/reaons.tpl');
    include($php_root_dir . 'templates/reasons.tpl');
    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'publications'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/publications.tpl');
    include($php_root_dir . 'templates/publications.tpl');
    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'newsletter_archive'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/newsletter_archive.tpl');
    include($php_root_dir . 'templates/newsletter_archive.tpl');
    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'about'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/about.tpl');
    include($php_root_dir . 'templates/about.tpl');
    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'perry'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/perry.tpl');
    include($php_root_dir . 'templates/perry.tpl');
    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'carol'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/carol.tpl');
    include($php_root_dir . 'templates/carol.tpl');
    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'contact'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/contact.tpl');
    include($php_root_dir . 'templates/contact.tpl');
    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'construction'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/construction.tpl');
    include($php_root_dir . 'templates/construction.tpl');
}
elseif ( $page == 'auth-index'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/auth.tpl');
    include($php_root_dir . 'templates/auth.tpl');
    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'auth-upd'  ) {
    include($php_root_dir . 'include/auth_upd.inc');
    include($php_root_dir . 'templates/news.tpl');
}

?>
