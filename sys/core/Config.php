<?php
/**
 * Created by PhpStorm.
 * User: SunXinjian
 * Date: 2015/8/29
 * Time: 10:23
 */
class Z_Config{
    public $config;
    private $loaded=array();
    public function __construct(){
        $this->config = &get_config();

    }

}