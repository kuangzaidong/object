<?php
/**
 * 导航数据
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/11 0011
 * Time: 上午 11:28
 */


header('Access-Control-Allow-Origin:*');   //PHP后台设置支持跨域访问



class  group
{
    public $title;
    public $data;
}

class navData{
    public $groupArr;
    public $imgArr;
    public $img;
    public $index;
}

$groupNum =  $_GET['group'];

switch( $groupNum ){
    case 0:{
        $titleArr = array("糖果巧克力","饮料","咖啡/茶","坚果炒货","酒","冲调饮品");
        $dataAtt = array();
        $dataAtt0 =array("口香糖","果冻","布丁","润喉糖","碎冰冰","巧克力","糖果","婚庆时刻");
        array_push($dataAtt,$dataAtt0);
        $dataAtt1 =array("茶饮料","植物蛋白饮料","果蔬汁","乳饮料","功能饮料","咖啡饮料","碳酸饮料","水");
        array_push($dataAtt,$dataAtt1);
        $dataAtt2 =array("绿茶","咖啡/伴侣","花草茶","袋泡茶","速溶咖啡","乌龙茶","碧螺春","铁观音","普洱茶","龙井茶","咖啡豆粉");
        array_push($dataAtt,$dataAtt2);
        $dataAtt3 =array("核桃","瓜子","花生","豆类","炒货","腰果","杏仁","其他坚果","碧根果","开心果","夏威夷","果松子");
        array_push($dataAtt,$dataAtt3);
        $dataAtt4 =array("白酒","葡萄酒","啤酒","滋补酒/保健酒","黄酒","预调酒","洋酒");
        array_push($dataAtt,$dataAtt4);
        $dataAtt5 =array("天然粉","成人奶粉","冲饮果汁","奶茶","麦片/谷物","豆奶/豆浆粉","蜂蜜/蜂制品","藕粉","芝麻糊","核桃糊","其它冲调饮品");
        array_push($dataAtt,$dataAtt5);
    }break;
    case 1:{
        $titleArr = array("环球购/跨境","进口酒","进口水/饮料","进口牛奶/乳品","进口冲调饮品","进口米面油");
        $dataAtt = array();
        $dataAtt0 =array("口香糖","果冻","布丁","润喉糖","碎冰冰","巧克力","糖果","婚庆时刻");
        array_push($dataAtt,$dataAtt0);
        $dataAtt1 =array("茶饮料","植物蛋白饮料","果蔬汁","乳饮料","功能饮料","咖啡饮料","碳酸饮料","水");
        array_push($dataAtt,$dataAtt1);
        $dataAtt2 =array("绿茶","咖啡/伴侣","花草茶","袋泡茶","速溶咖啡","乌龙茶","碧螺春","铁观音","普洱茶","龙井茶","咖啡豆粉");
        array_push($dataAtt,$dataAtt2);
        $dataAtt3 =array("核桃","瓜子","花生","豆类","炒货","腰果","杏仁","其他坚果","碧根果","开心果","夏威夷","果松子");
        array_push($dataAtt,$dataAtt3);
        $dataAtt4 =array("白酒","葡萄酒","啤酒","滋补酒/保健酒","黄酒","预调酒","洋酒");
        array_push($dataAtt,$dataAtt4);
        $dataAtt5 =array("天然粉","成人奶粉","冲饮果汁","奶茶","麦片/谷物","豆奶/豆浆粉","蜂蜜/蜂制品","藕粉","芝麻糊","核桃糊","其它冲调饮品");
        array_push($dataAtt,$dataAtt5);
    }break;
    case 2:{
        $titleArr = array("环球购","进口美护","身体护理","美发护发","男士护理","面部护肤");
        $dataAtt = array();
        $dataAtt0 =array("口香糖","果冻","布丁","润喉糖","碎冰冰","巧克力","糖果","婚庆时刻");
        array_push($dataAtt,$dataAtt0);
        $dataAtt1 =array("茶饮料","植物蛋白饮料","果蔬汁","乳饮料","功能饮料","咖啡饮料","碳酸饮料","水");
        array_push($dataAtt,$dataAtt1);
        $dataAtt2 =array("绿茶","咖啡/伴侣","花草茶","袋泡茶","速溶咖啡","乌龙茶","碧螺春","铁观音","普洱茶","龙井茶","咖啡豆粉");
        array_push($dataAtt,$dataAtt2);
        $dataAtt3 =array("核桃","瓜子","花生","豆类","炒货","腰果","杏仁","其他坚果","碧根果","开心果","夏威夷","果松子");
        array_push($dataAtt,$dataAtt3);
        $dataAtt4 =array("白酒","葡萄酒","啤酒","滋补酒/保健酒","黄酒","预调酒","洋酒");
        array_push($dataAtt,$dataAtt4);
        $dataAtt5 =array("天然粉","成人奶粉","冲饮果汁","奶茶","麦片/谷物","豆奶/豆浆粉","蜂蜜/蜂制品","藕粉","芝麻糊","核桃糊","其它冲调饮品");
        array_push($dataAtt,$dataAtt5);
    }break;
    case 3:{
        $titleArr = array("生活用纸","锅具","一次性用品","衣物清洁护理","餐桌配件","水具酒具");
        $dataAtt = array();
        $dataAtt0 =array("口香糖","果冻","布丁","润喉糖","碎冰冰","巧克力","糖果","婚庆时刻");
        array_push($dataAtt,$dataAtt0);
        $dataAtt1 =array("茶饮料","植物蛋白饮料","果蔬汁","乳饮料","功能饮料","咖啡饮料","碳酸饮料","水");
        array_push($dataAtt,$dataAtt1);
        $dataAtt2 =array("绿茶","咖啡/伴侣","花草茶","袋泡茶","速溶咖啡","乌龙茶","碧螺春","铁观音","普洱茶","龙井茶","咖啡豆粉");
        array_push($dataAtt,$dataAtt2);
        $dataAtt3 =array("核桃","瓜子","花生","豆类","炒货","腰果","杏仁","其他坚果","碧根果","开心果","夏威夷","果松子");
        array_push($dataAtt,$dataAtt3);
        $dataAtt4 =array("白酒","葡萄酒","啤酒","滋补酒/保健酒","黄酒","预调酒","洋酒");
        array_push($dataAtt,$dataAtt4);
        $dataAtt5 =array("天然粉","成人奶粉","冲饮果汁","奶茶","麦片/谷物","豆奶/豆浆粉","蜂蜜/蜂制品","藕粉","芝麻糊","核桃糊","其它冲调饮品");
        array_push($dataAtt,$dataAtt5);
    }break;
    case 4:{
        $titleArr = array("床上用品","健康/保健","鲜花/园艺","家纺","五金电料","宠物商品");
        $dataAtt = array();
        $dataAtt0 =array("口香糖","果冻","布丁","润喉糖","碎冰冰","巧克力","糖果","婚庆时刻");
        array_push($dataAtt,$dataAtt0);
        $dataAtt1 =array("茶饮料","植物蛋白饮料","果蔬汁","乳饮料","功能饮料","咖啡饮料","碳酸饮料","水");
        array_push($dataAtt,$dataAtt1);
        $dataAtt2 =array("绿茶","咖啡/伴侣","花草茶","袋泡茶","速溶咖啡","乌龙茶","碧螺春","铁观音","普洱茶","龙井茶","咖啡豆粉");
        array_push($dataAtt,$dataAtt2);
        $dataAtt3 =array("核桃","瓜子","花生","豆类","炒货","腰果","杏仁","其他坚果","碧根果","开心果","夏威夷","果松子");
        array_push($dataAtt,$dataAtt3);
        $dataAtt4 =array("白酒","葡萄酒","啤酒","滋补酒/保健酒","黄酒","预调酒","洋酒");
        array_push($dataAtt,$dataAtt4);
        $dataAtt5 =array("天然粉","成人奶粉","冲饮果汁","奶茶","麦片/谷物","豆奶/豆浆粉","蜂蜜/蜂制品","藕粉","芝麻糊","核桃糊","其它冲调饮品");
        array_push($dataAtt,$dataAtt5);
    }break;
    case 5:{
        $titleArr = array("糖果巧克力","饮料","咖啡/茶","坚果炒货","酒","冲调饮品","冲调饮品");
        $dataAtt = array();
        $dataAtt0 =array("口香糖","果冻","布丁","润喉糖","碎冰冰","巧克力","糖果","婚庆时刻");
        array_push($dataAtt,$dataAtt0);
        $dataAtt1 =array("茶饮料","植物蛋白饮料","果蔬汁","乳饮料","功能饮料","咖啡饮料","碳酸饮料","水");
        array_push($dataAtt,$dataAtt1);
        $dataAtt2 =array("绿茶","咖啡/伴侣","花草茶","袋泡茶","速溶咖啡","乌龙茶","碧螺春","铁观音","普洱茶","龙井茶","咖啡豆粉");
        array_push($dataAtt,$dataAtt2);
        $dataAtt3 =array("核桃","瓜子","花生","豆类","炒货","腰果","杏仁","其他坚果","碧根果","开心果","夏威夷","果松子");
        array_push($dataAtt,$dataAtt3);
        $dataAtt4 =array("白酒","葡萄酒","啤酒","滋补酒/保健酒","黄酒","预调酒","洋酒");
        array_push($dataAtt,$dataAtt4);
        $dataAtt5 =array("天然粉","成人奶粉","冲饮果汁","奶茶","麦片/谷物","豆奶/豆浆粉","蜂蜜/蜂制品","藕粉","芝麻糊","核桃糊","其它冲调饮品");
        array_push($dataAtt,$dataAtt5);
        $dataAtt6 =array("天然粉","成人奶粉","冲饮果汁","奶茶","麦片/谷物","豆奶/豆浆粉","蜂蜜/蜂制品","藕粉","芝麻糊","核桃糊","其它冲调饮品");
        array_push($dataAtt,$dataAtt6);
    }break;
    case 6:{
        $titleArr = array("糖果巧克力","饮料","咖啡/茶","坚果炒货","酒","冲调饮品");
        $dataAtt = array();
        $dataAtt0 =array("口香糖","果冻","布丁","润喉糖","碎冰冰","巧克力","糖果","婚庆时刻");
        array_push($dataAtt,$dataAtt0);
        $dataAtt1 =array("茶饮料","植物蛋白饮料","果蔬汁","乳饮料","功能饮料","咖啡饮料","碳酸饮料","水");
        array_push($dataAtt,$dataAtt1);
        $dataAtt2 =array("绿茶","咖啡/伴侣","花草茶","袋泡茶","速溶咖啡","乌龙茶","碧螺春","铁观音","普洱茶","龙井茶","咖啡豆粉");
        array_push($dataAtt,$dataAtt2);
        $dataAtt3 =array("核桃","瓜子","花生","豆类","炒货","腰果","杏仁","其他坚果","碧根果","开心果","夏威夷","果松子");
        array_push($dataAtt,$dataAtt3);
        $dataAtt4 =array("白酒","葡萄酒","啤酒","滋补酒/保健酒","黄酒","预调酒","洋酒");
        array_push($dataAtt,$dataAtt4);
        $dataAtt5 =array("天然粉","成人奶粉","冲饮果汁","奶茶","麦片/谷物","豆奶/豆浆粉","蜂蜜/蜂制品","藕粉","芝麻糊","核桃糊","其它冲调饮品");
        array_push($dataAtt,$dataAtt5);
    }break;
    case 7:{
        $titleArr = array("糖果巧克力","饮料","咖啡/茶","坚果炒货","酒","冲调饮品");
        $dataAtt = array();
        $dataAtt0 =array("口香糖","果冻","布丁","润喉糖","碎冰冰","巧克力","糖果","婚庆时刻");
        array_push($dataAtt,$dataAtt0);
        $dataAtt1 =array("茶饮料","植物蛋白饮料","果蔬汁","乳饮料","功能饮料","咖啡饮料","碳酸饮料","水");
        array_push($dataAtt,$dataAtt1);
        $dataAtt2 =array("绿茶","咖啡/伴侣","花草茶","袋泡茶","速溶咖啡","乌龙茶","碧螺春","铁观音","普洱茶","龙井茶","咖啡豆粉");
        array_push($dataAtt,$dataAtt2);
        $dataAtt3 =array("核桃","瓜子","花生","豆类","炒货","腰果","杏仁","其他坚果","碧根果","开心果","夏威夷","果松子");
        array_push($dataAtt,$dataAtt3);
        $dataAtt4 =array("白酒","葡萄酒","啤酒","滋补酒/保健酒","黄酒","预调酒","洋酒");
        array_push($dataAtt,$dataAtt4);
        $dataAtt5 =array("天然粉","成人奶粉","冲饮果汁","奶茶","麦片/谷物","豆奶/豆浆粉","蜂蜜/蜂制品","藕粉","芝麻糊","核桃糊","其它冲调饮品");
        array_push($dataAtt,$dataAtt5);
    }break;
    case 8:{
        $titleArr = array("糖果巧克力","饮料","咖啡/茶","坚果炒货","酒","冲调饮品","酒","冲调饮品");
        $dataAtt = array();
        $dataAtt0 =array("口香糖","果冻","布丁","润喉糖","碎冰冰","巧克力","糖果","婚庆时刻");
        array_push($dataAtt,$dataAtt0);
        $dataAtt1 =array("茶饮料","植物蛋白饮料","果蔬汁","乳饮料","功能饮料","咖啡饮料","碳酸饮料","水");
        array_push($dataAtt,$dataAtt1);
        $dataAtt2 =array("绿茶","咖啡/伴侣","花草茶","袋泡茶","速溶咖啡","乌龙茶","碧螺春","铁观音","普洱茶","龙井茶","咖啡豆粉");
        array_push($dataAtt,$dataAtt2);
        $dataAtt3 =array("核桃","瓜子","花生","豆类","炒货","腰果","杏仁","其他坚果","碧根果","开心果","夏威夷","果松子");
        array_push($dataAtt,$dataAtt3);
        $dataAtt4 =array("白酒","葡萄酒","啤酒","滋补酒/保健酒","黄酒","预调酒","洋酒");
        array_push($dataAtt,$dataAtt4);
        $dataAtt5 =array("天然粉","成人奶粉","冲饮果汁","奶茶","麦片/谷物","豆奶/豆浆粉","蜂蜜/蜂制品","藕粉","芝麻糊","核桃糊","其它冲调饮品");
        array_push($dataAtt,$dataAtt5);
        $dataAtt6 =array("白酒","葡萄酒","啤酒","滋补酒/保健酒","黄酒","预调酒","洋酒");
        array_push($dataAtt,$dataAtt6);
        $dataAtt7 =array("天然粉","成人奶粉","冲饮果汁","奶茶","麦片/谷物","豆奶/豆浆粉","蜂蜜/蜂制品","藕粉","芝麻糊","核桃糊","其它冲调饮品");
        array_push($dataAtt,$dataAtt7);
    }break;
    case 9:{
        $titleArr = array("糖果巧克力","饮料","咖啡/茶","坚果炒货","酒","冲调饮品");
        $dataAtt = array();
        $dataAtt0 =array("口香糖","果冻","布丁","润喉糖","碎冰冰","巧克力","糖果","婚庆时刻");
        array_push($dataAtt,$dataAtt0);
        $dataAtt1 =array("茶饮料","植物蛋白饮料","果蔬汁","乳饮料","功能饮料","咖啡饮料","碳酸饮料","水");
        array_push($dataAtt,$dataAtt1);
        $dataAtt2 =array("绿茶","咖啡/伴侣","花草茶","袋泡茶","速溶咖啡","乌龙茶","碧螺春","铁观音","普洱茶","龙井茶","咖啡豆粉");
        array_push($dataAtt,$dataAtt2);
        $dataAtt3 =array("核桃","瓜子","花生","豆类","炒货","腰果","杏仁","其他坚果","碧根果","开心果","夏威夷","果松子");
        array_push($dataAtt,$dataAtt3);
        $dataAtt4 =array("白酒","葡萄酒","啤酒","滋补酒/保健酒","黄酒","预调酒","洋酒");
        array_push($dataAtt,$dataAtt4);
        $dataAtt5 =array("天然粉","成人奶粉","冲饮果汁","奶茶","麦片/谷物","豆奶/豆浆粉","蜂蜜/蜂制品","藕粉","芝麻糊","核桃糊","其它冲调饮品");
        array_push($dataAtt,$dataAtt5);
    }break;
    case 10:{
        $titleArr = array("糖果巧克力","饮料","咖啡/茶","坚果炒货","酒","冲调饮品");
        $dataAtt = array();
        $dataAtt0 =array("口香糖","果冻","布丁","润喉糖","碎冰冰","巧克力","糖果","婚庆时刻");
        array_push($dataAtt,$dataAtt0);
        $dataAtt1 =array("茶饮料","植物蛋白饮料","果蔬汁","乳饮料","功能饮料","咖啡饮料","碳酸饮料","水");
        array_push($dataAtt,$dataAtt1);
        $dataAtt2 =array("绿茶","咖啡/伴侣","花草茶","袋泡茶","速溶咖啡","乌龙茶","碧螺春","铁观音","普洱茶","龙井茶","咖啡豆粉");
        array_push($dataAtt,$dataAtt2);
        $dataAtt3 =array("核桃","瓜子","花生","豆类","炒货","腰果","杏仁","其他坚果","碧根果","开心果","夏威夷","果松子");
        array_push($dataAtt,$dataAtt3);
        $dataAtt4 =array("白酒","葡萄酒","啤酒","滋补酒/保健酒","黄酒","预调酒","洋酒");
        array_push($dataAtt,$dataAtt4);
        $dataAtt5 =array("天然粉","成人奶粉","冲饮果汁","奶茶","麦片/谷物","豆奶/豆浆粉","蜂蜜/蜂制品","藕粉","芝麻糊","核桃糊","其它冲调饮品");
        array_push($dataAtt,$dataAtt5);
    }break;
    case 11:{
        $titleArr = array("糖果巧克力","饮料","咖啡/茶","坚果炒货","酒","冲调饮品");
        $dataAtt = array();
        $dataAtt0 =array("口香糖","果冻","布丁","润喉糖","碎冰冰","巧克力","糖果","婚庆时刻");
        array_push($dataAtt,$dataAtt0);
        $dataAtt1 =array("茶饮料","植物蛋白饮料","果蔬汁","乳饮料","功能饮料","咖啡饮料","碳酸饮料","水");
        array_push($dataAtt,$dataAtt1);
        $dataAtt2 =array("绿茶","咖啡/伴侣","花草茶","袋泡茶","速溶咖啡","乌龙茶","碧螺春","铁观音","普洱茶","龙井茶","咖啡豆粉");
        array_push($dataAtt,$dataAtt2);
        $dataAtt3 =array("核桃","瓜子","花生","豆类","炒货","腰果","杏仁","其他坚果","碧根果","开心果","夏威夷","果松子");
        array_push($dataAtt,$dataAtt3);
        $dataAtt4 =array("白酒","葡萄酒","啤酒","滋补酒/保健酒","黄酒","预调酒","洋酒");
        array_push($dataAtt,$dataAtt4);
        $dataAtt5 =array("天然粉","成人奶粉","冲饮果汁","奶茶","麦片/谷物","豆奶/豆浆粉","蜂蜜/蜂制品","藕粉","芝麻糊","核桃糊","其它冲调饮品");
        array_push($dataAtt,$dataAtt5);
    }break;
    case 12:{
        $titleArr = array("糖果巧克力","饮料","咖啡/茶","坚果炒货","酒","冲调饮品");
        $dataAtt = array();
        $dataAtt0 =array("口香糖","果冻","布丁","润喉糖","碎冰冰","巧克力","糖果","婚庆时刻");
        array_push($dataAtt,$dataAtt0);
        $dataAtt1 =array("茶饮料","植物蛋白饮料","果蔬汁","乳饮料","功能饮料","咖啡饮料","碳酸饮料","水");
        array_push($dataAtt,$dataAtt1);
        $dataAtt2 =array("绿茶","咖啡/伴侣","花草茶","袋泡茶","速溶咖啡","乌龙茶","碧螺春","铁观音","普洱茶","龙井茶","咖啡豆粉");
        array_push($dataAtt,$dataAtt2);
        $dataAtt3 =array("核桃","瓜子","花生","豆类","炒货","腰果","杏仁","其他坚果","碧根果","开心果","夏威夷","果松子");
        array_push($dataAtt,$dataAtt3);
        $dataAtt4 =array("白酒","葡萄酒","啤酒","滋补酒/保健酒","黄酒","预调酒","洋酒");
        array_push($dataAtt,$dataAtt4);
        $dataAtt5 =array("天然粉","成人奶粉","冲饮果汁","奶茶","麦片/谷物","豆奶/豆浆粉","蜂蜜/蜂制品","藕粉","芝麻糊","核桃糊","其它冲调饮品");
        array_push($dataAtt,$dataAtt5);
    }break;
    case 13:{
        $titleArr = array("糖果巧克力","饮料","咖啡/茶","坚果炒货","酒","冲调饮品","糖果巧克力","饮料","咖啡/茶","坚果炒货","酒","冲调饮品");
        $dataAtt = array();
        $dataAtt0 =array("口香糖","果冻","布丁","润喉糖","碎冰冰","巧克力","糖果","婚庆时刻");
        array_push($dataAtt,$dataAtt0);
        $dataAtt1 =array("茶饮料","植物蛋白饮料","果蔬汁","乳饮料","功能饮料","咖啡饮料","碳酸饮料","水");
        array_push($dataAtt,$dataAtt1);
        $dataAtt2 =array("绿茶","咖啡/伴侣","花草茶","袋泡茶","速溶咖啡","乌龙茶","碧螺春","铁观音","普洱茶","龙井茶","咖啡豆粉");
        array_push($dataAtt,$dataAtt2);
        $dataAtt3 =array("核桃","瓜子","花生","豆类","炒货","腰果","杏仁","其他坚果","碧根果","开心果","夏威夷","果松子");
        array_push($dataAtt,$dataAtt3);
        $dataAtt4 =array("白酒","葡萄酒","啤酒","滋补酒/保健酒","黄酒","预调酒","洋酒");
        array_push($dataAtt,$dataAtt4);
        $dataAtt5 =array("天然粉","成人奶粉","冲饮果汁","奶茶","麦片/谷物","豆奶/豆浆粉","蜂蜜/蜂制品","藕粉","芝麻糊","核桃糊","其它冲调饮品");
        array_push($dataAtt,$dataAtt5);
        $dataAtt6 =array("口香糖","果冻","布丁","润喉糖","碎冰冰","巧克力","糖果","婚庆时刻");
        array_push($dataAtt,$dataAtt6);
        $dataAtt7 =array("茶饮料","植物蛋白饮料","果蔬汁","乳饮料","功能饮料","咖啡饮料","碳酸饮料","水");
        array_push($dataAtt,$dataAtt7);
        $dataAtt8 =array("绿茶","咖啡/伴侣","花草茶","袋泡茶","速溶咖啡","乌龙茶","碧螺春","铁观音","普洱茶","龙井茶","咖啡豆粉");
        array_push($dataAtt,$dataAtt8);
        $dataAtt9 =array("核桃","瓜子","花生","豆类","炒货","腰果","杏仁","其他坚果","碧根果","开心果","夏威夷","果松子");
        array_push($dataAtt,$dataAtt9);
        $dataAtt10 =array("白酒","葡萄酒","啤酒","滋补酒/保健酒","黄酒","预调酒","洋酒");
        array_push($dataAtt,$dataAtt10);
        $dataAtt11 =array("天然粉","成人奶粉","冲饮果汁","奶茶","麦片/谷物","豆奶/豆浆粉","蜂蜜/蜂制品","藕粉","芝麻糊","核桃糊","其它冲调饮品");
        array_push($dataAtt,$dataAtt11);
    }break;
    case 14:{
        $titleArr = array("糖果巧克力","饮料");
        $dataAtt = array();
        $dataAtt0 =array("口香糖","果冻","布丁","润喉糖","碎冰冰","巧克力","糖果","婚庆时刻");
        array_push($dataAtt,$dataAtt0);
        $dataAtt1 =array("茶饮料","植物蛋白饮料","果蔬汁","乳饮料","功能饮料","咖啡饮料","碳酸饮料","水");
        array_push($dataAtt,$dataAtt1);
    }break;
}




$returnData = array();
for($i=0;$i<count($titleArr);$i++)
{
    $group =new  group();
    $group->title = $titleArr[$i];
    $group->data = $dataAtt[$i];
    array_push($returnData,$group);
}
$navData = new navData();
$navData->groupArr = $returnData;
$navData->imgArr = array("images/nav/000.jpg","images/nav/001.jpg","images/nav/002.jpg","images/nav/003.jpg",
    "images/nav/004.jpg","images/nav/005.jpg","images/nav/006.jpg","images/nav/007.jpg","images/nav/008.png",
    "images/nav/009.png");
$navData->img = "images/nav/010.jpg";
$navData->index =$groupNum;

echo json_encode($navData);