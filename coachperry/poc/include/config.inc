<?php

$css = 'coachperry.css';

### Define the environment for links ###
$chk_path = explode("/", "$_SERVER[SCRIPT_NAME]");

$env_chk = $chk_path[1];
if ($env_chk == 'dev') {
    $env = '/dev/';
    $dir = $chk_path[3];
    $yr = $chk_path[4];
}
elseif ($env_chk == 'poc') {
    $env = '/poc/';
    $dir = $chk_path[3];
    $yr = $chk_path[4];
}
elseif ($env_chk == 'tst') {
    $env = '/tst/';
    $dir = $chk_path[3];
    $yr = $chk_path[4];
}
else {
    $env = '/';
    $dir = $chk_path[2];
    $yr = $chk_path[3];
}

#$ps_kw_file = "$php_root_dir".'auth/data/ps_kw.dat';
#$ps_kws = file("$ps_kw_file");
#foreach ($ps_kws as $ps_kw_line) {
#    if ($ps_kw_line) {
#        $vals = explode('|', $ps_kw_line);
#        $ps_kw_page = $vals[0];
#        $ps_kw_word = $vals[1];
#        $ps_kw_desc = $vals[2];
#        $ps_kw_title = trim($vals[3]);
#        $ps_kw[$ps_kw_page] = "$ps_kw_word";
#        $ps_desc[$ps_kw_page] = "$ps_kw_desc";
#        $ps_title[$ps_kw_page] = "$ps_kw_title";
#    }
#}

?>
