<?php
// Load WordPress test environment
// https://github.com/nb/wordpress-tests
// The path to wordpress-tests
$path = './vendor/wordpress-tests/bootstrap.php';
if( file_exists( $path ) ) {
    require_once $path;
} else {
    exit( "Couldn't find wordpress-tests please run\n git submodule init && git submodule update\n" );
}
//load all jigoshop classes
$_SESSION['travis']='true';
require_once './jigoshop.php';