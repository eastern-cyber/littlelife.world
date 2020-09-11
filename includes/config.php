<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = array(
        'name' => 'Fantasy World of Little Life - โลกแห่งจินตนาการของชีวิตน้อย ๆ',
        'site_url' => 'https://littlelife.world',
        'pretty_uri' => true,
        'nav_menu' => array(
            '' => 'Home',
            'about-us' => 'About Us',
            'products' => 'Products',
            'contact' => 'Contact',
        ),
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.0',
    );

    return isset($config[$key]) ? $config[$key] : null;
}
