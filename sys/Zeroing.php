<?php
/**
 * Created by PhpStorm.
 * User: SunXinjian
 * Date: 2015/8/21
 * Time: 8:54
 */

final class Zeroing{
    private static $_handle;
    public static function run(){
        self::init();
    }
    private static function init(){
        self::include_func();
        self::load_config();
        self::load_class();
        self::call_fun();
    }
    private static function include_func(){
        require_once COMMON_PATH.'function.php';
    }
    private static function load_config(){
        static $_config;
        //$_config=&get_config();
        //var_dump(get_conf_item('ERROR_REPORTING'));
        //var_dump($_config);
        //require_once CONFIG_PATH.'config.php';
    }
    private static function load_class(){
        self::$_handle['Config']=&load_class('Config',CORE_PATH);
        self::$_handle['Router']=&load_class('Router',CORE_PATH ,$_GET);
        self::$_handle['Controller']=&load_class('Controller',CORE_PATH);
    }
    private static function call_fun(){

        $class_name=self::$_handle['Router']->get_class();
        $class=&load_class($class_name,CONTROLLER_PATH);
        $method=self::$_handle['Router']->get_method();
        $param=$_GET;
        call_user_func_array(array($class,$method),$param);
    }
}
Zeroing::run();