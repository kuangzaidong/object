$(function(){
	var goodsArr = [];		//保存商品信息
	var ischeckbox = []; 	//保存是否选中
	var allcheckbox = true;	//保存全选
	
	//=====================================
	//初始化
	init();
	function init(){
		goodsArr = $.cookie("cart")? JSON.parse( $.cookie("cart") ) :[];
		for(var i=0;i<goodsArr.length;i++)
		{
			ischeckbox[i] = true;
		}
		loadData();
//		isAllCheck();

		var userState = $.cookie("userState");
		if(userState)
		{
			var obj = JSON.parse(userState);
			var a1 = $("<a href='javascript:;'>" +obj.user+ "</a>");
			var a2 = $("<a href='javascript:;'>&nbsp;&nbsp;消息(0)</a>");
			var a3 = $("<a class='J-ml5' href='../logIn/logIn.html'>退出</a>");
			$(".J_login_status").append(a1,a2,a3);
			$(".J-s-m-tiper").fadeOut();
		
		}else{
			var a1 = $("<a href='../logIn/login.html'>Hi，请登录</a>");
			var a2 = $("<a class='red' href='../register/register.html'>免费注册</a>");
			$(".J_login_status").append(a1,a2);
			$(".J-s-m-tiper").fadeIn();
		}

	}
	
	//点击了退出按钮
	$(".J_login_status").on("click",".J-ml5",function(){
		$.cookie("userState","", {expires:0, path:"/"});
	})
	
	
	
	
	
	
	//=======================================
	//加载数据
//	loadData();
	function loadData(){
		goodsArr = [];
		var total=0;
		var cartArr = $.cookie("cart")? JSON.parse( $.cookie("cart") ) :[];
		goodsArr = cartArr;
		$(".J-s-b-list").empty();
		
		//---------创建节点-------------
		if(cartArr.length>0)
		{
			createGoods(cartArr);
		}
		
		//设置单选框
		var total = 0;
		var num = 0;
		var weight=0;
		for(var i=0;i<ischeckbox.length;i++)
		{
			var obj = $(".J-checkbox").eq(i);
			var goods = goodsArr[i];
			if( ischeckbox[i] )
			{
				obj.css("background-position"," -127px -26px");
				total += (goods.num-0) * (goods.price-0);
				num += goods.num-0;
				weight += (goods.num-0) * (goods.weight-0);
				
			}
			else{
				obj.css("background-position","-127px -13px");
			}
		}
		isAllCheck();
		
		//设置价格
		$(".J-money").html(total);
		$(".J-money1").html(total);
		$(".J-money2").html("￥" + total);
		
		$(".J-buyNum").html(num + "件");
		$(".J-buyNum1").html(num);
		
		weight = weight.toFixed(2);
		$(".J-weight").html(weight + "kg");
		$(".J-weight1").html(weight );
		
	}

	
	//===============================
	//创建商品节点
	function createGoods(cartArr){

		var ul = $(".J-s-b-list");
		for(var i=0;i<cartArr.length;i++)
		{
			data = cartArr[i];
			var li = $("<li class='b-li-item'></li>");
			ul.append(li);
			var div1 = $("<div class='li-nm-info'><a class='J-checkbox' href='javascript:;'></a><img src="+ data.img+"></div>");
			var div2Str = "<div class='nm-im-name'>";
				div2Str += "<a href='javascript:;'>";
				div2Str += "<em>商家直送</em>";
				div2Str += data.name;
				div2Str += "<br><span>规格：" +data.model+ "</span>";
				div2Str += "</a>";
				div2Str += "</div>";
			var div2 = $(div2Str);
			
			var div3 = $("<div class='nm-im-price'><span>" +data.price+ "</span></div>");
			
			var div4Str = "<div class='nm-im-num'>";
				div4Str += "<span>";
				div4Str += "<input class='im-mis' type='button'  value='-' />";
				div4Str += "<input class='im-ipt' value=" + data.num + " />";
				div4Str += "<input class='im-add' type='button' value='+' />";
				div4Str += "</span>";
				div4Str += "</div>";			
			var div4 = $(div4Str);
			
			var div5Str = "<div class='nm-im-total'>";
				div5Str += "<span>" + (data.num-0)* (data.price-0)+ "</span><br/>";
				div5Str += "<span class='im-mod-yh'>";
				div5Str += "修改优惠";
				div5Str += "<i></i>";
				div5Str += "</span>";
				div5Str += "</div>";
			var div5 = $(div5Str);
			var weight = parseInt( (data.num-0)*parseFloat(data.weight)*100)/100;
			var div6 = $("<div class='nm-im-weight'><span>" +weight+ " kg</span></div>")	
			var div7 = $("<div class='nm-im-oper'><a href='javascript:;'>移入收藏夹</a><br><a class = 'J-delete' href='javascript:;'>删除</a></div>");
			li.append(div1,div2,div3,div4,div5,div6,div7);
		}
	}
	
	//================================================
	//点击单选框
	//全选
	$(".J-allselect").click(disposeAll);
	//全选
	$(".J-blockselect").click(disposeAll);
	//处理全选框按钮
	function disposeAll(){
		if(allcheckbox)
		{
			for(var i=0;i<ischeckbox.length;i++)
			{
				ischeckbox[i] = false;
			}
			
		}else{
			for(var i=0;i<ischeckbox.length;i++)
			{
				ischeckbox[i] = true;
			}
		}
		loadData();
	}
	
	//商品
	$(".J-s-b-list").on("click",".J-checkbox",function(){
		var index = $(this).index(".J-checkbox");		
		ischeckbox[index] = !ischeckbox[index];
		loadData();
	})
	
	
	//是否全选中
	function isAllCheck(){
		var istrue = true;
		for(var i=0;i<ischeckbox.length;i++)
		{
			if(ischeckbox[i] == false)
			{
				istrue = false;
				$(".J-blockselect").css("background-position","  -127px -13px");
				$.each($(".J-allselect"),function(){
					$(this).css("background-position","  -127px -13px");
				})
				allcheckbox = false;
				break;
			}
		}
		if(istrue)
		{
			$(".J-blockselect").css("background-position"," -127px -26px");
			$.each($(".J-allselect"),function(){
				$(this).css("background-position","  -127px -26px");
			})
			allcheckbox = true;
		}
	}
	
	//按下减按钮
	$(".J-s-b-list").on("click",".im-mis",function(){
		var index = $(this).index(".im-mis");
		goodsArr[index].num --;
		if(goodsArr[index].num <=0)
		{
			goodsArr.splice(index,1);
			ischeckbox.splice(index,1);
			isAllCheck();
		}
		$.cookie("cart",JSON.stringify(goodsArr),{expires:7,path:"/"});
		loadData();
	})
	
	//按下加按钮
	$(".J-s-b-list").on("click",".im-add",function(){
		var index = $(this).index(".im-add");
		goodsArr[index].num ++;
		$.cookie("cart",JSON.stringify(goodsArr),{expires:7,path:"/"});
		isAllCheck();
		loadData();
	});
	
	//数量输入失去焦点
	$(".J-s-b-list").on("blur",".im-ipt",function(){
		var value = $(this).val();
		var index = $(this).index(".im-ipt");
		var reg =/^[0-9]*$/;
		if(reg.test(value))
		{
			goodsArr[index].num = value;
		}else{
			
			goodsArr[index].num = 1;
			
		}
		
		$.cookie("cart",JSON.stringify(goodsArr),{expires:7,path:"/"});
		loadData();
	})
	
	//点击删除按钮
	$(".J-s-b-list").on("click",".J-delete",function(){
		var index = $(this).index(".J-delete");
		goodsArr.splice(index,1);
		ischeckbox.splice(index,1);
		$.cookie("cart",JSON.stringify(goodsArr),{expires:7,path:"/"});
		isAllCheck();
		loadData();
	})
	
	//点击删除选中
	$(".J-delSelect").click(function(){
		
		var newgoods = [];
		var newischeckbox = [];
		for(var i=0;i<goodsArr.length;i++)
		{
			if(ischeckbox[i] == false)
			{
				newgoods.push(goodsArr[i]);
				newischeckbox.push(ischeckbox[i]);
			}
		}
		ischeckbox = newischeckbox;
		goodsArr = newgoods;
		$.cookie("cart",JSON.stringify(goodsArr),{expires:7,path:"/"});
		loadData();
	})
	
	$(".J-delAll").click(function(){
		$.cookie("cart","",{expires:0,path:"/"});
		loadData();
	})
	
	
	
	//猜你喜欢
	youLike();
	function youLike(){
		var _url = urlH + "/feiniu/php/goodsDetails/like.php?option=0";
		$.get(_url,function(data){
			var dataArr = JSON.parse(data);
			createLike(dataArr);
		});
	}
	
	//创建'猜你喜欢'节点
	function createLike(dataArr){
		
		for(var i=0;i< parseInt(dataArr.length/5);i++)
		{
			var li = $("<li class='clearfix'></li>");
			for(var j=0;j<5;j++)
			{
				var obj = dataArr[i*5+j];
				var str = "<div class='li-item'>";
					str += "<a href='javascript:;'><img src=" +obj.img+ "></a>";
					str += "<span class='li-name'>";
					str += "<a class='name' href='javascript:;'>" + obj.name + "</a><br>";
					str += "<small>";
					str += "<b class='li-new'>￥<i class='pic'>" +obj.Nprice + "</i></b>";
					if(obj.Oprice){
						str += "<s class='li-old'>￥<i class='pic'>" +obj.Oprice + "</i></s>";
					}
					str += "<a class='li-btn J-add-btn' href='javascript:;'>加入购物车</a>";
					str += "</small>";
					str += "</span>";
					str += "</div>";
				$(str).appendTo(li);
			}
			li.appendTo( $(".J-lk-main") );
			
		}
	}
	
	//==========================================
	var bottomDiv = $(".J-s-co-area").offset().top;
	var windowH = $(window).height();
	$(window).scroll(function(){
		var top = $(this).scrollTop();
		if( (top+windowH)>bottomDiv )
		{
			$(".J-s-co-area").css({"position":"static","left":"0","bottom":"0"});
		}else{
			$(".J-s-co-area").css({"position":"fixed","left":"0","bottom":"0","right":"0","z-index":"2"});
		}
	})
	
	
	
})
