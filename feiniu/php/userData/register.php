<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/5 0005
 * Time: 下午 5:54
 */

header('Access-Control-Allow-Origin:*');   //PHP后台设置支持跨域访问

$user = $_GET['user'];
$paw = $_GET['paw'];
//保存用户信息
class userInfo{
    public $user;
    public $paw;
}

class  Data{
    public $uid;
    public $token;
    public $time;
}
//保存返回数据
class  returnData{
    public $errcode;
    public $errmsg;
    public $data;
}

$uInfo = new userInfo();
$uInfo->user = $user;
$uInfo->paw = $paw;
$returnData = new returnData();


$userInfo =  file_get_contents("json/userinfo.json");


$arr = $userInfo ? json_decode($userInfo): array();
$istrue = false;
for($i=0;$i<count($arr);$i++)
{
    if($arr[$i]->user == $user)
    {
        $returnData->errcode =1;
        $returnData->errmsg = "用户已注册";

        echo json_encode($returnData);
        $istrue = true;
    }
}
if(! $istrue)
{
    array_push($arr,$uInfo);
    file_put_contents("json/userinfo.json",json_encode($arr));

    $returnData->errcode =0;
    $returnData->errmsg = "注册成功";
    $data = new Data();
    $data->uid = "10081";
    $data->token = "befdsu51d1554f5sf5dsf12fs";
    $data->time = "14646662226";
    $returnData->data = $data;
    echo json_encode($returnData);
}