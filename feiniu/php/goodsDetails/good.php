<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/6 0006
 * Time: 下午 3:42
 */

header('Access-Control-Allow-Origin:*');   //PHP后台设置支持跨域访问

class  goodData
{
    public $goodId;     //商品ID
    public $name;       //商品名
    public $Ttitle;     //二级标题
    public $maxImg;     //大图
    public $midImg;     //中图
    public $minImg;     //小图
    public $present;    //宝贝介绍
    public $price;      //价格
    public $model;      //型号
    public $modelImg;   //型号图
    public $groups;     //分组
    public $parName;    //参数名
    public $parVal;     //参数值
    public $weight;     //重量
}
//$goodsNum = $_GET['num'];
$returnData = new goodData();
$goodId = $_GET['goodId'];
switch($goodId){
    case "0001":{
        $returnData->goodId = "0001";
        $returnData->name = "AKG/爱科技 y23U 入耳式HIFI电脑手机线控通话 耳机 蓝色";
        $returnData->Ttitle = "轻盈入耳 准确发声 灵巧造型";
        $maxImgArr = array("images/goods0001/goos-100.jpg","images/goods0001/goos-101.jpg","images/goods0001/goos-102.jpg");
        $returnData->maxImg = $maxImgArr;
        $midImgArr = array("images/goods0001/goos-200.jpg","images/goods0001/goos-201.jpg","images/goods0001/goos-202.jpg");
        $returnData->midImg = $midImgArr;
        $minImgArr = array("images/goods0001/goos-000.jpg","images/goods0001/goos-001.jpg","images/goods0001/goos-002.jpg");
        $returnData->minImg =$minImgArr;
        $returnData->present = "images/goods0001/goos-0000.jpg";
        $returnData->price = "258";
        $modelArr = array("蓝色","红色","白色");
        $returnData->model = $modelArr;
        $modelImgArr = array("images/goods0001/goos-000.jpg","images/goods0001/goos-001.jpg","images/goods0001/goos-002.jpg");
        $returnData->modelImg = $modelImgArr;
        $groupsArr = array("手机数码、电脑办公","电脑外设","耳机、耳麦","AKG耳机、耳麦");
        $returnData->groups = $groupsArr;
        $parNameArr = array("品牌：","型号：","佩戴方式：","类型：","发声原理：","传输方式：","用途：");
        $parValArr = array("AKG","Y23U","入耳式","耳麦","动圈式","有线功能","普通　语音");
        $returnData->parName = $parNameArr;
        $returnData->parVal = $parValArr;
        $returnData->weight = "0.05";
    }break;
    case "0002":{
        $returnData->goodId = "0002";
        $returnData->name = "光明 巧风巧克力味含乳饮料 250ml*24/箱";
        $returnData->Ttitle = "经济实惠 新老包装随机发货";
        $maxImgArr = array("images/goods0002/goos-100.jpg","images/goods0002/goos-101.jpg","images/goods0002/goos-102.jpg");
        $returnData->maxImg = $maxImgArr;
        $midImgArr = array("images/goods0002/goos-200.jpg","images/goods0002/goos-201.jpg","images/goods0002/goos-202.jpg");
        $returnData->midImg = $midImgArr;
        $minImgArr = array("images/goods0002/goos-000.jpg","images/goods0002/goos-001.jpg","images/goods0002/goos-002.jpg");
        $returnData->minImg =$minImgArr;
        $returnData->present = "images/goods0002/goos-0000.jpg";
        $returnData->price = "73";
//        $modelArr = array("蓝色","红色","白色");
//        $returnData->model = $modelArr;
//        $modelImgArr = array("images/goods0001/goos-000.jpg","images/goods0001/goos-001.jpg","images/goods0001/goos-002.jpg");
//        $returnData->modelImg = $modelImgArr;
        $groupsArr = array("食品、饮料、酒水","牛奶/乳品","含乳饮料","光明含乳饮料");
        $returnData->groups = $groupsArr;
        $parNameArr = array("品牌：","口味","包装方式：");
        $parValArr = array("光明","巧克力味","箱装");
        $returnData->parName = $parNameArr;
        $returnData->parVal = $parValArr;
        $returnData->weight = "2500";
    }break;
    case "0003":{
        $returnData->goodId = "0003";
        $returnData->name = "德芙心印牛奶夹心巧克力 53克/盒";
        $returnData->Ttitle = "";
        $maxImgArr = array("images/goods0003/goos-100.jpg","images/goods0003/goos-101.jpg","images/goods0003/goos-102.jpg","images/goods0003/goos-103.jpg","images/goods0003/goos-104.jpg");
        $returnData->maxImg = $maxImgArr;
        $midImgArr = array("images/goods0003/goos-200.jpg","images/goods0003/goos-201.jpg","images/goods0003/goos-202.jpg","images/goods0003/goos-203.jpg","images/goods0003/goos-204.jpg");
        $returnData->midImg = $midImgArr;
        $minImgArr = array("images/goods0003/goos-000.jpg","images/goods0003/goos-001.jpg","images/goods0003/goos-002.jpg","images/goods0003/goos-003.jpg","images/goods0003/goos-004.jpg");
        $returnData->minImg =$minImgArr;
        $returnData->present = "images/goods0003/goos-0000.jpg";
        $returnData->price = "23.8";
//        $modelArr = array("蓝色","红色","白色");
//        $returnData->model = $modelArr;
//        $modelImgArr = array("images/goods0001/goos-000.jpg","images/goods0001/goos-001.jpg","images/goods0001/goos-002.jpg");
//        $returnData->modelImg = $modelImgArr;
        $groupsArr = array("食品、饮料、酒水","糖果巧克力","巧克力","德芙(Dove)巧克力");
        $returnData->groups = $groupsArr;
        $parNameArr = array("品牌：","口味：","包装：","形状：","制作工艺：");
        $parValArr = array("德芙(Dove","牛奶巧克力","盒装","其它形状","非手工巧克力");
        $returnData->parName = $parNameArr;
        $returnData->parVal = $parValArr;
        $returnData->weight = "0.12";
    };
}



echo json_encode($returnData);