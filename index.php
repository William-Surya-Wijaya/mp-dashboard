<?php
$route = isset($_GET['route']) ? $_GET['route'] : '';
$subroute = isset($_GET['subroute']) ? $_GET['subroute'] : '';

switch ($route) {
    case 'hallo':
        switch ($subroute) {
            case 'routename':
                echo 'This is the specific route.';
                break;

            // Add more cases as needed

            default:
                echo 'Invalid subroute.';
                break;
        }
        break;

    // Add more cases for other routes

    default:
        echo 'This is the Home page.';
        break;
}
