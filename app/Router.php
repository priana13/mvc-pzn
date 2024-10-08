<?php 

namespace Priana\BelajarMvc;

class Router 
{
    private static array $routes = [];

    public static function add(string $method , string $path , string $controller , string $function): void
    {
        self::$routes[] = [
            "method" => $method, 
            "path" => $path, 
            "controller" => $controller, 
            "function" => $function
        ];

        // var_dump(self::$routes); die();
        
    }

    public static function run()
    {

        $path = '/';

        if(isset( $_SERVER['PATH_INFO'] )){

            $path = $_SERVER['PATH_INFO'];
        }
        // var_dump($path); die();


        $method = $_SERVER['REQUEST_METHOD'];

        // $routes = self::$routes;

        // var_dump(self::$routes); die();

        foreach (self::$routes as $key => $route) {

            // var_dump($route); die();

            if($path == $route['path'] && $method == $route['method'] ) {

                // var_dump($route['controller']); die();

                $con  = 'Priana\BelajarMvc\Controller\HomeController';

                $controller   = new $route['controller'];
                // $controller   = new $con;

                $functionName = $route['function'];

                echo $controller->$functionName();

                // echo 'Controller: ' . $route['controller'] . ',' . 'Method: ' . $route['method']  . ', Function: ' . $route['function'];

                return;
            }
        }

        http_response_code(404);

        echo "Page Not Found";

    }
} 