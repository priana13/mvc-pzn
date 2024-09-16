<?php 

use Priana\BelajarMvc\Router;

// $path = '/index';

// if( isset($_SERVER['PATH_INFO']) ){

//     $path = $_SERVER['PATH_INFO'];
// }

// require __DIR__ . '/../app/View' . $path . '.php';

require_once __DIR__ . '/../vendor/autoload.php';



Router::add('GET', '/' , 'HomeController' , 'index');
Router::add('GET', '/hello' , 'HelloController' , 'hello');
Router::add('GET', '/about' , 'AboutController' , 'about');



Router::run();