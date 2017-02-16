<?php
/**
 * 特色频道 轮播数据
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/3 0003
 * Time: 下午 5:56
 */

header('Access-Control-Allow-Origin:*');   //PHP后台设置支持跨域访问

class imgData{
    public $img;
}

$dataArr = array();
for($i=0;$i<4;$i++)
{
    $data = new imgData();
    $data->img = "images/scroll-fe-00" .($i+1)  .".jpg";
    array_push($dataArr,$data);
}

echo json_encode($dataArr);

