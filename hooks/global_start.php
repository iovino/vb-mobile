<?php

// the theme directory to use
define('MOBILE_TEMPLATE_DIR', DIR . '/mobile/views/master');

require_once(DIR . '/includes/adminfunctions_template.php');
require_once(DIR . '/mobile/hooks/lib/Mobile_Detect.php');

// need this for the mobile/desktop link in the footer
$request_uri = base64_encode($_SERVER['REQUEST_URI']);

// mobile detection
$mobile_detect = new Mobile_Detect;
$mobile_user   = $mobile_detect->isMobile();

// check if we're forcing the desktop view
if ($_COOKIE[COOKIE_PREFIX . 'show-desktop'] == 0)
{
    // check if user is a mobile user
    if (1)
    {
        render_mobile_style(MOBILE_TEMPLATE_DIR);
    }
}

// renders the mobile style
function render_mobile_style($dir)
{
    global $vbulletin;

    // fetch all the template files from $dir
    foreach (scandir($dir) as $key => $file)
    {
        // skip path identifiers
        if (in_array($file, array(".", ".."))) {continue;}

        // check for child directory
        if (is_dir(MOBILE_TEMPLATE_DIR . DIRECTORY_SEPARATOR . $file))
        {
           render_mobile_style(MOBILE_TEMPLATE_DIR . DIRECTORY_SEPARATOR . $file);
        }

        else
        {
            // build the template's name and content from the file
            $mobile_template_name = str_replace('.html', '', $file);
            $mobile_template_data = file_get_contents($dir . DIRECTORY_SEPARATOR . $file);

            // add the template to the cache for rendering
            $vbulletin->templatecache["$mobile_template_name"] = compile_template($mobile_template_data);
        }
    }
}

