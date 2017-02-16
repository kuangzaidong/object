<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/3 0003
 * Time: 下午 1:46
 */

header('Access-Control-Allow-Origin:*');   //PHP后台设置支持跨域访问

class imgData{
    public $img;
//    public $like;
    public $bgColor;
}
$colorArr = array("#26cdaf","#75080b","#cc0c23","#5d1b03","#008071","#ff8a02","#ff5174","#fbdbea");

$dataArr = array();
for($i=0;$i<8;$i++)
{
    $data = new imgData();
    $data->img = "images/scroll00" . ($i+1) . ".jpg";
    $data->bgColor = $colorArr[$i];
    array_push($dataArr,$data);
}

echo json_encode($dataArr);