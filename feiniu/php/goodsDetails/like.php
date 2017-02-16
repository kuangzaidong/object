<?php
/**
 * 猜你喜欢
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/8 0008
 * Time: 下午 11:08
 */

header('Access-Control-Allow-Origin:*');   //PHP后台设置支持跨域访问
class  goodData{
    public $goodId;     //商品ID
    public $name;       //商品名
    public $img;        //图片
    public $Nprice;     //新价格
    public $Oprice;      //旧价格
}


$option = $_GET['option'];  //=0;  购物车      =1，加入购物车弹框  =2,商品详情右侧
switch($option)
{
    case 0:{
        $idArr = array("000","001","002","003","004");
        $nameArr = array(   "漫步者（EDIFIER） K800 高品质电脑耳麦 黑色",
            "Beats Solo2 Wireless无线蓝牙耳麦 耳机头戴式 土豪银",
            "漫步者（EDIFIER） H180 高保真音乐耳塞",
            "Beats Beats Solo3 Wireless 头戴式无线蓝牙耳机黑色",
            "漫步者（EDIFIER） H230P 入耳式手机耳机 酷雅黑");
        $NpriceArr = array("56","1399","37","1566","69");
        $OpriceArr = array("59","","39","","");
        $num = 5;
        $imgStr = "../classify/classify-0001/headset00";
    }break;
    case 1:{
        $idArr = array("000","001","002","003");
        $nameArr = array(   "伊利金典纯牛奶250ML*12/箱",
                            "伊利 纯牛奶 250ML*24/箱",
                            "光明 钻石包莫斯利安酸牛奶（原味） 200g*12盒/箱",
                            "乐事 无限组合装薯片 104g×3罐/组 休闲零食");
        $NpriceArr = array("48.5","52.8","53.9","17.9");
        $OpriceArr = array("65","76","60.9","21");
        $num = 4;
        $imgStr = "../classify/classify-0003/food00";
    }break;
    case 2:{
        $idArr = array("000","001","002","003");
        $nameArr = array(   "漫步者（EDIFIER） H180P 高音质",
            "漫步者（EDIFIER） H850 高保真音乐耳机 黑色",
            "漫步者（EDIFIER） K830 高品质电脑耳麦");
        $NpriceArr = array("44","229","129");
        $OpriceArr = array("49","249","149");
        $num = 3;
        $imgStr = "../classify/classify-0001/headset00";
    }break;
    case 3:{
        $idArr = array("000","001","002","003");
        $nameArr = array(   "津威  乳酸菌饮品 100ml*5瓶*8/箱",
            "伊利 味可滋浓郁香蕉昔乳饮品 240ML*12/箱",
            "伊利 优酸乳爆趣珠苹果味 250g*24/箱");
        $NpriceArr = array("68.8","60","33");
        $OpriceArr = array("89","62","60");
        $num = 3;
        $imgStr = "../classify/classify-0004/food00";
    }break;
    case 4:{
        $idArr = array("000","001","002","003");
        $nameArr = array( "好时KISSES 牛奶巧克力 82g/袋",
            "好时KISSES 巴旦木牛奶巧克力 82g/袋",
            "好时KISSES 黑巧克力 82g/袋");
        $NpriceArr = array("12.5","12.5","12.5");
        $OpriceArr = array("16.2","16.2","18.3");
        $num = 3;
        $imgStr = "../classify/classify-0005/chocolate00";
    }break;
}


$returnData =array();
for($i=0;$i<$num;$i++)
{
    $data = new goodData();
    $data->goodId =$idArr[$i];
    $data->name = $nameArr[$i];
    $data->Nprice = $NpriceArr[$i];
    $data->Oprice = $OpriceArr[$i];
    $data->img = $imgStr . $i  . ".jpg";
    array_push($returnData,$data);
}

echo json_encode($returnData);

