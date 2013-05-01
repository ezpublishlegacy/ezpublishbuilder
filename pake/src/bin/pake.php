<?php

// set classpath
if (getenv('PHP_CLASSPATH')) {
    set_include_path(dirname(__FILE__).'/../lib'.PATH_SEPARATOR.getenv('PHP_CLASSPATH').PATH_SEPARATOR.get_include_path());
} else {
    set_include_path(dirname(__FILE__).'/../lib'.PATH_SEPARATOR.get_include_path());
}

require 'pake/autoload.php';
require 'pake/cli_init.php';

if (basename(__FILE__) == basename($_SERVER['SCRIPT_NAME'])) {
    $retval = pakeApp::get_instance()->run();

    if (false === $retval) {
        exit(1);
    }
}
