<?php
/**
 * Created by PhpStorm.
 * User: SunXinjian
 * Date: 2015/8/21
 * Time: 10:15
 */
class Z_Router{
    private $class;
    private $method='index';

    public function __construct($param){
        $this->class=$param['c'];
        $this->method=$param['a'];
    }
    public function get_class(){
        return $this->class;
    }
    public function get_method(){
        return $this->method;
    }
    public function parse_url(){

    }
}