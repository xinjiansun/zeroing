<?php
/**
 * Created by PhpStorm.
 * User: SunXinjian
 * Date: 2015/8/21
 * Time: 9:20
 */
/**
 * @desc 格式化输出数组
 * @param $data
 */
function pr($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

/**
 * @desc 加载类
 * @param $class
 * @param $path
 * @param null $param
 */
function &load_class($class,$path,$param=null){
    static $classes=array();
    if($classes[$class]){
        return $classes[$class];
    }
    if(strpos($path,SYS_PATH)===false){
        $class_name=$class;
    }else{
        $class_name='Z_'.$class;
    }echo $path.$class.'.php';
    if(file_exists($path.$class.'.php')){
        if(class_exists($class_name,false)===false){
            require_once $path.$class.'.php';
        }
    }else{
        echo  'file not exit';
        return;
    }
    return $classes[$class_name]=$param?new $class_name($param):new $class_name();
}

/**
 * @desc 加载配置数组
 * @param $conf
 * @return array|mixed
 */
function &get_config($conf=CONFIG_PATH){
    static $_config;
    $path=$conf.'config.php';
    if(empty($_config)){
        $_config=require $path;
    }else{
        $replace_conf=require $path;
        $_config=array_merge($_config,$replace_conf);
    }
    return $_config;
}

/**
 * @desc 取配置项值
 * @param $key
 * @return null
 */
function get_conf_item($config,$key){

    return isset($_config[$key]) ? $_config[$key] : NULL;
}


















