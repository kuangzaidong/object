<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/6 0006
 * Time: 下午 7:13
 */

header('Access-Control-Allow-Origin:*');   //PHP后台设置支持跨域访问


class  goodData{
    public $goodId;     //商品ID
    public $name;       //商品名
    public $img;        //图片
    public $price;      //价格
    public $model;      //型号
    public $num;        //数量
    public $weight;     //重量
}


