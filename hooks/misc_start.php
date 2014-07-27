<?php

// add cookie that forces the desktop style
if ($_REQUEST['do'] == 'show-desktop') {
    vbsetcookie('show-desktop', '1', true);
    exec_header_redirect(base64_decode($vbulletin->input->clean_gpc('r', 'redirect', TYPE_STR)));
}

// removes cookie that forces the desktop style
if ($_REQUEST['do'] == 'show-mobile') {
    vbsetcookie('show-desktop', '0', true);
    exec_header_redirect(base64_decode($vbulletin->input->clean_gpc('r', 'redirect', TYPE_STR)));
}

// login form
if ($_REQUEST['do'] == 'mobile-login') {
    if ($vbulletin->userinfo['userid']) {
        exec_header_redirect('index.php');
    } else {
        print_no_permission();
    }
}