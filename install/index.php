<?php
    ini_set('display_errors', 'off');
    set_time_limit(300);
    
    if (!empty($_SERVER['HTTP_USER_AGENT'])) {
        session_name(md5($_SERVER['HTTP_USER_AGENT']));
    }
    session_start();
    
    require_once 'libs/libs.php';
    require_once 'core/Model.php';
    require_once 'core/Design.php';
    require_once 'core/Controller.php';
    require_once 'core/route.php';
    
    Route::start();
    
    