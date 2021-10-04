<?php


    // assign file paths to PHP constants
    // __FILE__ returns th ecurrent path to this file
    // dirname() returns the path to the parrent directory
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH . '/publc');
    define("SHARED_PATH", PRIVATE_PATH . '/shared');
    
    
    // assign teh root URL to a PHP constant
    // * do not need to include the domain
    // * use same docyment as webserver
    // * can set a ahrdcoded value:
    // define("WWW_ROOT", '/~serhiychurkin/part-1');
    // define("WWW_ROOT", '');
    $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
    define("WWW_ROOT", $doc_root);

    require_once('functions.php');
?>