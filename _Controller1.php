<?php
class _Controller1{
    public static function index(){
 
        $get = new _GET($_GET['title'],$_GET['contents']);

        return self::view('_test1.php',compact('get'));
    }

    public static function view($view, $vars = []){

        $vars = get_object_vars(current($vars));
        foreach($vars as $name => $value){
            $$name = $value;
        }

        include($view);
    }
}
?>