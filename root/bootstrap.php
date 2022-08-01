<?php
namespace Core;

error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
if(isset($_POST['exit'])) {
    session_unset();
    session_destroy();
    header("Location: /authorization/");
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/project/config/connection.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/autoload.php';

$routes = require $_SERVER['DOCUMENT_ROOT'] . '/project/config/routes.php';

$track = ( new Router )      -> getTrack($routes, $_SERVER['REQUEST_URI']);
$page  = ( new Dispatcher )  -> getPage($track);
//if(empty($_SESSION['user'])) {
//    session_unset();
//    session_destroy();
//    header("Location: /authorization/");
//}
echo (new View) -> render($page);
