<?php
/**
 * 商标数据
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/11 0011
 * Time: 下午 11:35
 */

header('Access-Control-Allow-Origin:*');   //PHP后台设置支持跨域访问


class imgData{
    public $id;
    public $link;
    public $img;
}

class  Data{
    public $imgData;
    public $index;
}

$returnData = array();
for($i=0;$i<10;$i++)
{
    $obj = new  imgData();
    $obj->img = "images/brandTwo-00" . $i . ".jpg";
    $obj->id = "00" . $i;
    array_push($returnData,$obj);
}
$data = new Data();
$data->imgData = $returnData;
$data->index = $_GET['index'];

echo json_encode($data);