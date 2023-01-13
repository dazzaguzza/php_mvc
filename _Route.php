<?php
class _Route{

    private static $routes = [];

    public static function add($method, $path, $callback){
        self::$routes[] = compact('method','path','callback');
    }

    public static function run(){
        return call_user_func(
            current(
                array_filter(self::$routes, 'self::check')
            )['callback']
        );
    }

    public static function check($route){
        return self::match($route['method'],$route['path']);
    }

    private static function match($method,$path){
        return $method === strtolower($_SERVER['REQUEST_METHOD']) && ($path ===($_SERVER['PHP_SELF'] ?? '/'));
    }
}

?>