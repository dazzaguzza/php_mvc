<?php
_Route::add('get','/test.php','_Controller::index');
_Route::add('get','/test1.php','_Controller1::index');
_Route::run();
?>