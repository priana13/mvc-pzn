<?php 

use Priana\BelajarMvc\Controller\HomeController;
use Priana\BelajarMvc\Router;

// $path = '/index';

// if( isset($_SERVER['PATH_INFO']) ){

//     $path = $_SERVER['PATH_INFO'];
// }

// require __DIR__ . '/../app/View' . $path . '.php';

require_once __DIR__ . '/../vendor/autoload.php';



Router::add('GET', '/' , HomeController::class , 'index');
Router::add('GET', '/hello' , HomeController::class , 'hello');
Router::add('GET', '/about' , HomeController::class , 'about');



Router::run();