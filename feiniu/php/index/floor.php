<?php
/**
 * 楼层数据
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/4 0004
 * Time: 下午 3:46
 */

header('Access-Control-Allow-Origin:*');   //PHP后台设置支持跨域访问


class  florData{
    public $num;        //楼层
    public $head;       //标题
    public $navArr;    //导航
    public $leftW;     //左侧宽度
    public $rightW;    //右侧宽度
    public $heigth;    //高度
    public $leftData;  //右侧数据
}

class leftData{         //左侧数据
    public $img;
    public $imgB;
    public $sale;
    public $assists;
    public $words;
    public $words2;
}



$floorNum = $_GET['num'];
$florData = new  florData();

switch($floorNum)
{
    case 1:{
        $florData->num = "1F";
        $florData->head = "食品饮料";
        $florData->leftW = 190;
        $florData->heigth = 488;
        $florData->rightW = 1000;
        $florData->navArr = array("精选推荐","休闲零食","酒水饮料","茶冲乳品","粮油调味","营养保健");
        $leftData = new leftData();
        $leftData->img = "images/m-fn-floor-001.jpg";
        $leftData->sale = array("大牌饼干 满99减30元 ","汇源满38元赠马克杯");
        $leftData->words = array("薯　片","巧克力","蜜　饯","葡萄酒","酸　奶","口香糖","白　酒","咖　啡","肉零食","饮用水","食用油","饼　干 ","茶饮料", "大　米", "坚　果");
    }break;
    case 2 :{
        $florData->num = "2F";
        $florData->head = "生鲜食品";
        $florData->leftW = 190;
        $florData->heigth = 488;
        $florData->rightW = 1000;
        $florData->navArr = array("精选推荐","新鲜水果","海鲜肉禽","蛋奶饮品","方便速食","蔬菜烘焙");
        $leftData = new leftData();
        $leftData->img = "images/m-fn-floor-301.jpg";
        $leftData->sale = array("智利车厘子","买一送一");
        $leftData->words = array("柳丁橙"," 苹 果", "芒 果"," 车厘子"," 橙 类"," 礼 盒",
            " 鲜牛奶"," 酸 奶", "水 饺", "火锅丸", "羊 肉", "牛 肉","三文鱼","虾 类","猪 肉");
    }break;

    case 3 :{
        $florData->num = "3F";
        $florData->head = "个护美妆";
        $florData->leftW = 190;
        $florData->heigth = 488;
        $florData->rightW = 1000;
        $florData->navArr = array("精选推荐","应季护肤","洗护发洗浴","面部护肤","女性护理","口腔护理");
        $leftData = new leftData();
        $leftData->img = "images/m-fn-floor-101.jpg";
        $leftData->sale = array("进口护肤，秋季全攻略","口腔护理，你我更亲近");
        $leftData->words = array("洗发水"," 面　膜", "牙　膏"," 护发素"," 爽肤水"," 牙　刷"," 沐浴露"," 护肤套", "漱口水", "香　皂", "乳　液", "卫生巾", "面　霜", "身体乳", "润唇膏");
    }break;

      case 4 :{
          $florData->num = "4F";
          $florData->head = "家电数码";
          $florData->leftW = 390;
          $florData->heigth = 488;
          $florData->rightW = 800;
          $florData->navArr = array("精选推荐","季节电器","手机数码","电脑办公","小家电","大家电");
          $leftData = new leftData();
          $leftData->img = "images/m-fn-floor-201.jpg";
          $leftData->sale = array("极速沸腾 畅享健康","好太太大放价 超值满减");
          $leftData->assists = array("指定小家电满300减60","苏泊尔电水壶满100减10","苏泊尔电饭煲满300减20","AKG全场7折起");
          $leftData->words = array("苹　果"," 华　为", "单 反"," 充电宝"," 路由器"," 惠 普");
          $leftData->words2 = array(" 电磁炉"," 微波炉", "电饭煲", "加湿器", "空　调", "剃须刀");
      }break;
        case 5 :{
            $florData->num = "5F";
            $florData->head = "服饰内衣";
            $florData->leftW = 390;
            $florData->heigth = 732;
            $florData->rightW = 800;
            $florData->navArr = array("精选活动","女装","男装","配饰","保暖内衣","贴身小件");
            $leftData = new leftData();
            $leftData->img = "images/m-fn-floor-401.jpg";
            $leftData->imgB = "images/m-fn-floor-402.jpg";
            $leftData->sale = array("柏灵顿亲子装19元起 ","顶瓜瓜 每满199减50");
            $leftData->words = array("女羽绒服"," 男外套", "女棉服"," 男羽绒服"," 女裤装","男裤装",
                " 金银投资"," 保暖配件", "精品文胸", "保暖内衣", "家居服", "内裤");
        }break;

    case 6 :{
        $florData->num = "6F";
        $florData->head = "鞋靴箱包";
        $florData->leftW = 390;
        $florData->heigth = 488;
        $florData->rightW = 800;
        $florData->navArr = array("精选活动","女鞋","男鞋","男女包","旅行箱包","轻奢");
        $leftData = new leftData();
        $leftData->img = "images/m-fn-floor-501.jpg";
        $leftData->sale = array("女鞋清仓大促 最低39元起 ","依思Q 买1送1");
        $leftData->words = array("大于8cm"," 过膝女靴", "妈妈鞋"," 男棉鞋","热门新品","棉拖",
            " 斜跨小包"," 双肩包", "通勤包", "铝框箱", "电脑包", "奢品围巾");
    }break;
    case 7 :{
        $florData->num = "7F";
        $florData->head = "户外运动";
        $florData->leftW = 390;
        $florData->heigth = 732;
        $florData->rightW = 800;
        $florData->navArr = array("精选活动","运动鞋服","运动健身","户外鞋服","户外装备","汽车配件");
        $leftData = new leftData();
        $leftData->img = "images/m-fn-floor-601.jpg";
        $leftData->imgB = "images/m-fn-floor-602.jpg";
        $leftData->sale = array("运动棉服 59元起 ","运动棉服 59元起");
        $leftData->words = array("NIKE"," Adidas", "跑步鞋"," 运动服饰","健身器材","运动内衣",
            "登山鞋"," 冲锋衣裤", "户外野营", "机油", "记录仪", "汽车座垫");
    }break;
    case 8 :{
        $florData->num = "8F";
        $florData->head = "家清日百";
        $florData->leftW = 190;
        $florData->heigth = 488;
        $florData->rightW = 1000;
        $florData->navArr = array("精选推荐","生活用纸","洗衣清洁","清洁工具","厨房餐厅","家居收纳");
        $leftData = new leftData();
        $leftData->img = "images/m-fn-floor-701.jpg";
        $leftData->sale = array("水具餐具 满199减80 ","纸品品牌团 剁手1元疯抢");
        $leftData->words = array("软抽纸","洗衣液","洗洁精","卷筒纸","洗衣粉","进　口","垃圾袋","旋风拖","保暖用品",
            "锅　具","保温杯","保鲜盒","收纳箱","压缩袋","地　垫");


    }break;

    case 9 :{
        $florData->num = "9F";
        $florData->head = "家纺家装";
        $florData->leftW = 190;
        $florData->heigth = 488;
        $florData->rightW = 1000;
        $florData->navArr = array("精选推荐","家纺","智能家电","灯具建材","厨房卫浴","家具");
        $leftData = new leftData();
        $leftData->img = "images/m-fn-floor-801.jpg";
        $leftData->sale = array("智能电视 ","巾浴巾 每满99减50");
        $leftData->words = array("软抽纸","洗衣液","洗洁精","卷筒纸","洗衣粉","进　口","垃圾袋","旋风拖","保暖用品",
            "锅　具","保温杯","保鲜盒","收纳箱","压缩袋","地　垫");
    }break;

    case 10 :{
        $florData->num = "10F";
        $florData->head = "母婴馆";
        $florData->leftW = 190;
        $florData->heigth = 488;
        $florData->rightW = 1000;
        $florData->navArr = array("精选推荐","奶粉尿裤","洗护喂哺","孕妈婴纺","童装童鞋","车床玩具");
        $leftData = new leftData();
        $leftData->img = "images/m-fn-floor-901.jpg";
        $leftData->sale = array("惠氏满399减100 ","贝亲满188减60");
        $leftData->words = array("软抽纸","洗衣液","洗洁精","卷筒纸","洗衣粉","进　口","垃圾袋","旋风拖","保暖用品",
            "锅　具","保温杯","保鲜盒","收纳箱","压缩袋","地　垫");
    }break;

    case 11 :{
        $florData->num = "11F";
        $florData->head = "图书卡券";
        $florData->leftW = 190;
        $florData->heigth = 488;
        $florData->rightW = 1000;
        $florData->navArr = array("精选推荐","童书早教","文艺小说","益智游戏","音像文具","热卖卡券");
        $leftData = new leftData();
        $leftData->img = "images/m-fn-floor-A01.jpg";
        $leftData->sale = array("惠氏满399减100 ","贝亲满188减60");
        $leftData->words = array("软抽纸","洗衣液","洗洁精","卷筒纸","洗衣粉","进　口","垃圾袋","旋风拖","保暖用品",
            "锅　具","保温杯","保鲜盒","收纳箱","压缩袋","地　垫");
    }break;

    case 12 :{
        $florData->num = "12F";
        $florData->head = "购遍全球";
        $florData->leftW = 190;
        $florData->heigth = 488;
        $florData->rightW = 1000;
        $florData->navArr = array("精选推荐","进口爆款推荐","进口休闲食品","进口乳品冲调","进口酒饮粮油","海淘紫选");
        $leftData = new leftData();
        $leftData->img = "images/m-fn-floor-B01.jpg";
        $leftData->sale = array("惠氏满399减100 ","贝亲满188减60");
        $leftData->words = array("软抽纸","洗衣液","洗洁精","卷筒纸","洗衣粉","进　口","垃圾袋","旋风拖","保暖用品",
            "锅　具","保温杯","保鲜盒","收纳箱","压缩袋","地　垫");
    }break;
}


$florData->leftData = $leftData;

echo json_encode($florData);


