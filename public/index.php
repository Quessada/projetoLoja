<?php 

$request = $_SERVER['REQUEST_URI'];

//  echo $request;

switch ($request) {
    case '/' :
        require dirname(__DIR__) . '/index.php';
        break;
    case '/produtos' :
        require dirname(__DIR__) . '/produtos/index.php';
        break;
    default:
        http_response_code(404);
        // require dirname(__DIR__) . '/views/404.php';
        break;
}

?>