<?php

if ( !defined('IN_PHPBB') ) {
    die('Hacking attempt');
}

if ( $page == 'index' ) {
    $upd_time=filemtime($php_root_dir . 'templates/index.tpl');
    include($php_root_dir . 'templates/index.tpl');
#    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'links'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/links.tpl');
    include($php_root_dir . 'templates/links.tpl');
#    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'players'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/players.tpl');
    include($php_root_dir . 'templates/players.tpl');
#    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'coaches'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/coaches.tpl');
    include($php_root_dir . 'templates/coaches.tpl');
#    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'parents'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/parents.tpl');
    include($php_root_dir . 'templates/parents.tpl');
#    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'philosophy'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/philosophy.tpl');
    include($php_root_dir . 'templates/philosophy.tpl');
#    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'offense'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/offense.tpl');
    include($php_root_dir . 'templates/offense.tpl');
#    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'defense'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/defense.tpl');
    include($php_root_dir . 'templates/defense.tpl');
#    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'drills'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/drills.tpl');
    include($php_root_dir . 'templates/drills.tpl');
#    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'bio'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/bio.tpl');
    include($php_root_dir . 'templates/bio.tpl');
#    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'schedules'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/schedules.tpl');
    include($php_root_dir . 'templates/schedules.tpl');
#    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'contact'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/contact.tpl');
    include($php_root_dir . 'templates/contact.tpl');
#    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'construction'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/construction.tpl');
    include($php_root_dir . 'templates/construction.tpl');
}
elseif ( $page == 'auth-index'  ) {
    $upd_time=filemtime($php_root_dir . 'templates/auth.tpl');
    include($php_root_dir . 'templates/auth.tpl');
#    include($php_root_dir . 'templates/news.tpl');
}
elseif ( $page == 'auth-upd'  ) {
    include($php_root_dir . 'include/auth_upd.inc');
#    include($php_root_dir . 'templates/news.tpl');
}

?>
