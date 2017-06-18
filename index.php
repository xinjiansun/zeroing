<?php
/**
 * Created by PhpStorm.
 * User: SunXinjian
 * Date: 2015/8/21
 * Time: 8:52
 */
define('BASE_PATH',__DIR__.'\\');
define('SYS_PATH',BASE_PATH.'sys\\');
define('COMMON_PATH',SYS_PATH.'common\\');
define('CONFIG_PATH',SYS_PATH.'config\\');
define('CORE_PATH',SYS_PATH.'core\\');
define('APP_PATH',__DIR__.'app\\');
define('CONTROLLER_PATH',APP_PATH.'controller\\');
require_once SYS_PATH.'Zeroing.php';
?>