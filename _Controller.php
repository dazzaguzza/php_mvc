<?php
class _Controller{
    public static function index(){
 
        $get = new _GET($_GET['title'],$_GET['contents']);

        return self::view('_test.php',compact('get'));
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