<?php
    define(DEBUG, FALSE);

    define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT']);
    define('ROOT_VIEW', ROOT_DIR.'/view');
    define('ROOT_LAYOUT', ROOT_DIR.'/web/layout');

    if (DEBUG) {
        echo 'ROOT_DIR='.ROOT_DIR.PHP_EOL;
        echo 'ROOT_VIEW='.ROOT_VIEW.PHP_EOL;
        echo 'ROOT_LAYOUT='.ROOT_LAYOUT.PHP_EOL;
    }
    include ROOT_DIR.'/web/layout.php';
?>
