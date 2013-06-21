<?php

/**************************************************************
"Learning with Texts" (LWT) is released into the Public Domain.
This applies worldwide.
In case this is not legally possible, any entity is granted the
right to use this work for any purpose, without any conditions, 
unless such conditions are required by law.


Developed by J. P. in 2011, 2012, 2013.
***************************************************************/

/**************************************************************
lwtstop.php
-----------
This script must be installed into the WordPress main directory.
To properly logout from both WordPress and LWT, use:
http://...path-to-wp-blog.../lwtstop.php
(link also provided on LWT main page)
***************************************************************/

require_once( 'wp-load.php' );

wp_logout();
setcookie('LWT-WP-User', $wpuser, time() - 1000, '/');
header("Location: ./wp-login.php?redirect_to=./lwtstart.php");
exit;

?>