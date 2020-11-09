<?php 

    $request = $_SERVER['REQUEST_URI'];


    $rota = explode("?", $request);


    switch ($rota[0]) {
        case '/' :
            require dirname(__DIR__) . '/main.php';
            break;
        case '/produtos' :
            require dirname(__DIR__) . '/produtos/index.php';
            break;
        case '/admin/users/create' :
                require dirname(__DIR__) . '/admin/create/index.php';
            break;
        case '/login' :
            require dirname(__DIR__) . '/admin/login/index.php';
            break;
        case '/create-data' :
            require dirname(__DIR__) . '/admin/create/create.php';
        break;
        case '/empresa' :
            require dirname(__DIR__) . '/about.php';
            break;
        case '/admin/products/create' :
            require dirname(__DIR__) . '/admin/products/index.php';
            break;
        case '/products/create-data':
            require dirname(__DIR__) . '/admin/products/create.php';
            break;
        default:
            http_response_code(404);
            // require dirname(__DIR__) . '/views/404.php';
            break;
    }

?>