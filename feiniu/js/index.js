$(function(){
	var FlagArr = [false,false,false,false,false,false,false,false,false,false,false,false];
	//从cookie 中获得数据
	var userState = $.cookie("userState");
	if(userState)
	{
		var obj = JSON.parse(userState);
		var a1 = $("<a href='javascript:;'>" +obj.user+ "</a>");
		var a2 = $("<a href='javascript:;'>&nbsp;&nbsp;消息(0)</a>");
		
		var a3 = $("<a class='J-ml5' href='../logIn/logIn.html'>退出</a>");
		$(".J_login_status").append(a1,a2,a3);
	}else{
		var a1 = $("<a href='../logIn/login.html'>Hi，请登录</a>");
		var a2 = $("<a class='red' href='../register/register.html'>免费注册</a>");
		$(".J_login_status").append(a1,a2);
	}

	//点击了退出按钮
	$(".J_login_status").on("click",".J-ml5",function(){
		$.cookie("userState","", {expires:0, path:"/"});
	})
	//---------------
	var cartArr = $.cookie("cart")? JSON.parse( $.cookie("cart") ) :[];
	$.each($(".J-c-num"), function() {
		$(this).html(cartArr.length);
		
	});
	
	//==========================================
	//顶部广告关闭
	$(".J_btn_closeadv").on("click",function(){
		$(".J_top_banner").stop().slideUp(500);
	})
	
	setTimeout(function(){
		$(".J-u-b-b").slideDown(500);
		$(".J_banner_box02").slideUp(500);
	},5000);
	
	//展开
	$(".fold").click(function(){
		$(".J-u-b-b").slideUp(500);
		$(".J_banner_box02").slideDown(500);
	})
	
	//合上
	$(".unfold").click(function(){
		$(".J-u-b-b").slideDown(500);
		$(".J_banner_box02").slideUp(500);
	})
	
	//导航栏
	$(".dd").mouseenter(function(){
		$(this).addClass("enter");
		var index = $(this).index(".dd");
		
		switch(index)
		{
			case 0:{
				$(".J_dist_list_box").stop().slideDown(500);	
				$(".J_dist_list_box").on("click","a",function(){
					$(".J_dist_list_box").find("a").removeClass("z-select");
					$(this).addClass("z-select");
					$(".J_cur_place").html($(this).html());
				})
			}break;
			case 1:{
				$(".J_loaded").stop().slideDown(500);	
			}break;
			case 2:{
				$(".j_m_lst").stop().slideDown(500);
			}break;
			case 3:{
				$(".j_mf_i").stop().slideDown(500);
			}break;
		}
	})
	
	$(".dd").mouseleave(function(){
		$(this).removeClass("enter");
		var index = $(this).index(".dd");
		switch(index)
		{
			case 0:{
				$(".J_dist_list_box").stop().slideUp(500);
			}
			case 1:{
				$(".J_loaded").stop().slideUp(500);	
			}break;
			case 2:{
				$(".j_m_lst").stop().slideUp(500);
			}break;
			case 3:{
				$(".j_mf_i").stop().slideUp(500);
			}break;
		}
	});
	
	//================================================
	// 轮播图(大图)
	imgSlider();
	function imgSlider(){
		var num = 0;	//控制轮动到第几张
		var imgNum = 0;	//图片数量
		var url = urlH + "/feiniu/php/index/imgScroll.php";
		var dataArr = null;
		$.get(url,function(data){
			dataArr = JSON.parse(data);
			imgNum = dataArr.length;
			var oul = $(".J_big_slide");
			for(var i=0;i<imgNum;i++)
			{
				var obj = dataArr[i];
				var li = $("<li></li>");
				var a = $("<a href='#'></a>");
		
				var img = $("<img>");
				img.attr("src",obj.img);
				img.appendTo(a);
				a.appendTo(li);
				li.appendTo(oul);
				$("<li></li>").appendTo( $(".J_slider_nav") );
			}	
			
			//初始化
			$(".J_big_slide li").eq(0).fadeIn(200).siblings().fadeOut(200);
			$(".m-fn-main").css("background",dataArr[0].bgColor);
			var w = -$(".J_slider_nav").width()/2;
			$(".J_slider_nav").css("margin-left", w );
			$(".J_slider_nav li").eq(0).addClass("z-select");
			
				
			var sliderTim  = setInterval(function(){
				num++;
				move();
			},3000);
			
			$(".J_slide").mouseenter(function(){
				clearInterval(sliderTim);
				$(".J_page_box").css("display","block");
			});
			
			$(".J_slide").mouseleave(function(){
				$(".J_page_box").css("display","none");
				sliderTim  = setInterval(function(){
					num++;
					move();
				},3000);
			});
			
			$(".J_page_box a").click(function(){
				if($(this).index() == 0)
				{
					num --;
				}else{
					num ++;
				}
				move();
			})
			
			$(".J_page_box a").mouseenter(function(){
				$(this).fadeTo(500,0.5);
			});
			
			$(".J_page_box a").mouseleave(function(){
				$(this).fadeTo(500,0.2);
			});
			
			
			$(".J_slider_nav li").mouseenter(function(){
				num = $(this).index();
				move();
			});
			
			function move(){
				if(num <0)
				{
					num = imgNum-1;
				}
				
				if(num >= imgNum)
					{num=0}
				
				$(".J_big_slide li").eq(num).fadeIn(500).siblings().fadeOut(500);
				$(".m-fn-main").css("background",dataArr[num].bgColor);
				$(".J_slider_nav li").eq(num).addClass("z-select").siblings().removeClass("z-select");
			}
			
			
		});
		
		
		
		
	}
	
	//===============================================
	//轮播图（今日推荐）
	dailySlider();
	function dailySlider(){
		var url = urlH + "/feiniu/php/index/dailyRecom.php";
		$.get(url,function(data){
			var dataArr = JSON.parse(data);
			var leNum = dataArr.length;
			$(".J_s_lst").width(leNum *250);
			
			for(var i=0;i<leNum;i++)
			{
				var li = $("<li></li>");
				var a = $("<a href='#'></a>");
				var img = $("<img  >");
				img.attr("src",dataArr[i].img)
				li.appendTo( $(".J_s_lst") );
				a.appendTo(li);
				img.appendTo(a);
			}
		});
		
		
		$(".u-rmd-slide").mouseenter(function(){
			$(".J_page_box1").show(500);
		});
		
		$(".u-rmd-slide").mouseleave(function(){
			$(".J_page_box1").hide(500);
		});
		
		$(".J_page_box1 a").mouseenter(function(){
				$(this).fadeTo(500,0.5);
		});
			
		$(".J_page_box1 a").mouseleave(function(){
			$(this).fadeTo(500,0.2);
		});
		
		$(".J_page_box1 a").click(function(){
			var x=0;
			if( $(this).index()==0 )
			{
				x = $(".J_s_lst").position().left;
				x = ( x +250*4) > 0 ? -$(".J_s_lst").width() : x;
				x = x + 250*4;
			}else{
				var x = $(".J_s_lst").position().left;
				x = ( x - 250*4) <= (-$(".J_s_lst").width()) ?	 0 : x - 250*4;
			}
			$(".J_s_lst").stop().animate({"left":x},500);
		});
	}
	
	
	//===============================================
	//轮播图（特色频道）
	featureSlider();
	function featureSlider(){
		var num = 0;	//控制轮动到第几张
		var imgNum = 0;	//图片数量
		var url = urlH + "/feiniu/php/index/featureScroll.php";
		$.get(url,function(data){
			dataArr = JSON.parse(data);
			imgNum = dataArr.length;
			var oul = $("#specFloor .s-lst");
			for(var i=0;i<imgNum;i++)
			{
				var obj = dataArr[i];
				var li = $("<li></li>");
				var a = $("<a href='javascript:;'></a>");
				var img = $("<img src='"+ obj.img +"'>");
				//img.attr("src",obj.img);
				img.appendTo(a);
				a.appendTo(li);
				li.appendTo(oul);
				$("<li></li>").appendTo( $("#specFloor .s-ctr") );
			}	
			

			//初始化
			$("#specFloor .s-lst li").eq(0).clone().appendTo( $("#specFloor .s-lst") );
			oul.width((imgNum+1) *400);	
			var w = -$("#specFloor .s-ctr").width()/2;
			$("#specFloor .s-ctr").css("margin-left", w );
			$("#specFloor .s-ctr li").eq(0).addClass("z-select");
			
//			$(".J_big_slide li").eq(0).fadeIn(200).siblings().fadeOut(200);

			
			var sliderTim  = setInterval(function(){
				num++;
				move();
			},3000);
			
			$("#specFloor .m-c-slide").mouseenter(function(){
				clearInterval(sliderTim);
				$(".J_page_box2").css("display","block");
			});
			
			$("#specFloor .m-c-slide").mouseleave(function(){
				$(".J_page_box2").css("display","none");
				sliderTim  = setInterval(function(){
					num++;
					move();
				},3000);
			});
			
			$(".J_page_box2 a").click(function(){
				if($(this).index() == 0)
				{
					num --;
				}else{
					num ++;
				}
				move();
			})
			
			$(".J_page_box2 a").mouseenter(function(){
				$(this).fadeTo(500,0.5);
			});
			
			$(".J_page_box2 a").mouseleave(function(){
				$(this).fadeTo(500,0.2);
			});
			
			
			$("#specFloor .s-ctr li").mouseenter(function(){
				num = $(this).index();
				move();
			});
			
			function move(){
				if(num <0)
				{
					num = imgNum-1;
				}
				
				if(num > imgNum)
				{
					$("#specFloor .s-lst ").css("left",0);
					num=1
				}
				
				$("#specFloor .s-lst").stop().animate({"left":-num*400},500);
				if(num == imgNum)
				{
					$("#specFloor .s-ctr li").eq(0).addClass("z-select").siblings().removeClass("z-select");
				}else
				{
					$("#specFloor .s-ctr li").eq(num).addClass("z-select").siblings().removeClass("z-select");
					
				}
			}
		});
		
	}
	
	//===============================================
	//话费充值中心
	$(".J-tab-cm li").click(function(){
		$(this).addClass("z-select").siblings().removeClass("z-select");
	})
	
	
	//=================================================
	//右侧边栏
	$(".J-sdb").height( $(window).height() );
	$(".J_u-sdb-m").height ( $(".J-sdb").height()-250 - 80 );
	$(window).resize(function(){
		$(".J-sdb").height( $(window).height() );
		var w = $(".J-sdb").height()-250 - 80;
		$(".J_u-sdb-m").height (w);
		if(w <250)
		{
			$(".J_u-sdb-m .J-sbd-tab").hide();
		}else
		{
			$(".J_u-sdb-m .J-sbd-tab").show();
		}
	})
	
	$(".J-sdb-cart").mouseenter(function(){
		$(this).css("background-color","#c70034");
		$(this).find("a").css("background-position-X","-24px");
	})
	
	$(".J-sdb-cart").mouseleave(function(){
		$(this).css("background-color","#333");
		$(this).find("a").css("background-position-X","0");
	})
	
	$(".J-sbd-tab").mouseenter(function(){
		$(this).css("background-color","#c70034").find(".tip").stop().animate({"left":-90},500);
		$(this).find("a").css("background-position-X","-24px");
	})
	$(".J-sbd-tab").mouseleave(function(){
		var self = $(this);
		$(this).find(".tip").stop().animate({"left":35},500,function(){
			self.css("background","#333");
			self.find("a").css("background-position-X","0");
			
		});
	})
	
	
		//=================================================
	//检测滚动高度
	$(window).scroll(function(){
//		console.log( $(".J_n_m").offset().top  );
//		console.log( $(this).scrollTop() );

		var top = $(this).scrollTop() ;
		
		if( top > $(".J_n_m").offset().top)
		{
			$(".J-fixcont").slideDown(500);
			$(".m-fn-siderbar").fadeIn(500);
		}else{
			$(".J-fixcont").slideUp(500);
			$(".m-fn-siderbar").fadeOut(500);
		}
		
		
		if( top > $(".J-floor").offset().top )
		{
			$(".J_fn_lift").fadeIn(500);
		}else{
			$(".J_fn_lift").fadeOut(500);
		}
		
		
		//-----楼梯-------
		if (isMoving == false) {
			var index = 0; //楼层的下标
			$(".J-floor").each(function(){
				var boxtop = $(this).offset().top;
				if (top >= boxtop-200 ) {
					index = $(this).index(".J-floor");
				}
			})
			$(".J_fn_lift li").eq(index).addClass("active").siblings().removeClass("active");
		}
		
		
		//-----懒加载数据----
		$(".J-floor").each(function(){
				var boxtop = $(this).offset().top;
				if (top >= boxtop-600 ) {
					index = $(this).index(".J-floor");
					if(FlagArr[index] == false)
					{
						switch(index)
						{
							case 0:	createFloor(1,"#floorOne","2000");break;
							case 1:	createFloor(2,"#floorTwo","2000");break;
							case 2:	createFloor(3,"#floorThree","2000");break;
							case 3:	createFloor(4,"#floorFour","1000");break;
							case 4:	createFloor(5,"#floorFive","3000");break;
							case 5:	createFloor(6,"#floorSix","1000");break;
								
							case 6:	createFloor(7,"#floorSeven","3000");break;
							case 7:	createFloor(8,"#floorEight","2000");break;
							case 8:	createFloor(9,"#floorNine","2000");break;
							case 9:	createFloor(10,"#floorTen","2000");break;
							case 10:createFloor(11,"#floorEleven","2000");break;
							case 11:createFloor(12,"#floorTwelve","2000");break;
						}
						FlagArr[index] = true; 
					}
				}
		})
		
		
	})
	
	//=====================================================
	//楼层处理  start
	//导航
	$(".J-floor").on("mouseenter",".J-tab-menu li",function(){
		$(this).addClass("z-select").siblings().removeClass("z-select");
		var index = $(this).index(".loaded");
						
		var box = $(this).parents(".J-floor").find(".J_f-m");
		
		var temp1 = parseInt(index/6);
		switch(temp1){
			case 0: temp1 = 2;break;
			case 1: temp1 = 2;break;
			case 2: temp1 = 2;break;
			case 3: temp1 = 1;break;
			case 4: temp1 = 3;break;
			case 5: temp1 = 1;break;
			case 6: temp1 = 3;break;
			case 7: temp1 = 2;break;
			case 8: temp1 = 2;break;
			case 9: temp1 = 2;break;
			case 10: temp1 = 2;break;
			case 11: temp1 = 2;break;
		}
		var temp2 = index%6;
		var num = temp1+"00"+temp2;
	
		box.empty();
		createPShow( box,num );
			
	})

	
//	//第一层
//	createFloor(1,"#floorOne","2000");
//	createFloor(2,"#floorTwo","2000");
//	createFloor(3,"#floorThree","2000");
//	createFloor(4,"#floorFour","1000");
//	createFloor(5,"#floorFive","3000");
//	createFloor(6,"#floorSix","1000");
//	
//	createFloor(7,"#floorSeven","3000");
//	createFloor(8,"#floorEight","2000");
//	createFloor(9,"#floorNine","2000");
//	createFloor(10,"#floorTen","2000");
//	createFloor(11,"#floorEleven","2000");
//	createFloor(12,"#floorTwelve","2000");
	
	//创建楼层
	function createFloor(num,id,goods){
		
		var mainBox = $(id);
		
		
		var url = urlH + "/feiniu/php/index/floor.php?num=" + num;
		$.get(url,function(data){
			var data = JSON.parse(data);
			
			//创建节点
			createTop( data).appendTo( mainBox );
			createCon(data,goods).appendTo( mainBox );
			
		});
		
	}
	
	//- 创建头-----------------------------
	function createTop(data){
		var div_ut = $("<div class='u-t m-fn-floor '></div>");
		var h3 = $("<h3 class='fl'>" + data.head + "<i>" + data.num +"</i></h3>")
		h3.appendTo(div_ut);
		var ul_tab = $("<ul class='f-tab fr J-tab-menu'></ul>");
		ul_tab.appendTo(div_ut);
		var navArr = data.navArr;
		for(var i=0;i<navArr.length;i++)
		{
			var li = $("<li class=' loaded'></li>");
			var a = $("<a href='javascript:;'>"+navArr[i]+"</a>");
			a.appendTo( li );
			if( i != (navArr.length -2) )
			{
				var span = $("<span></span>");
				span.appendTo(li);
			}
			li.appendTo(ul_tab);
			if( i==0 )
			{
				li.addClass("z-select");
			}
		}
		return div_ut;
	}
	
	//创建中间内容----------------------------------
	function createCon(data,goods){
//		var leftData = data.leftData;
		var div_uc = $("<div class='u-c'></div>");
		div_uc.height( data.heigth );
		
		var div_fs = $("<div class='f-s fl'></div>");
		div_fs.appendTo( div_uc );
		div_fs.width( data.leftW );
		div_fs.height( data.heigth );
		
		var div_fm = $("<div class='f-m fl J_f-m'><!-- <div> -->");
		div_fm.appendTo( div_uc );
		div_fm.width( data.rightW );
		div_fm.height( data.heigth );
		
	
		createData(div_fs,data.leftData);
		createPShow( div_fm,goods );
		return div_uc;
	}
	
	//创建左侧数据
	function createData(obj,data){
		var img = $("<a href='javascript:;' class='ad'><img src=" +data.img+ "></a>");
		img.appendTo( obj );
		if(data.imgB != null)
		{
			var img1 = $("<a href='javascript:;' class='ad'><img src=" +data.imgB+ "></a>");
			img1.appendTo( obj );
		}
		var ul = $("<ul></ul>");
		ul.appendTo( obj );
		
		var li1 = $("<li class='sale'></li>");
		li1.appendTo(ul);
		for(var i=0;i<data.sale.length;i++)
		{
			
			var a = $("<a href='javascript:;'> " + data.sale[i]+ "></a>")
			a.appendTo(li1);
		}
		
		var li2 = $("<li class='words oh'></li>");
		var words = data.words;
		for(var i=0;i<words.length;i++)
		{
			var a = $( "<a href='javascript:;'>" + words[i]+ "</a>");
			a.appendTo(li2);
		}
		li2.appendTo( ul );
		
	}
	
	//创建商品展示
	function createPShow(box,goods){
		
		var url = urlH + "/feiniu/php/index/goodShow.php?num=" + goods;
		$.get(url,function(data){
			var dataArr = JSON.parse(data);
			
			var div_b = $("<div class='b J-panel'></div>");
			div_b.appendTo( box );
			var ul = $("<ul></ul>");
			ul.appendTo( div_b );
			for(var i=0;i<dataArr.length;i++)
			{
				var data = dataArr[i];
				var li = $("<li></li>");
				li.appendTo( ul );
				var div_pi = $("<div class='p-i'></div>");
				div_pi.appendTo( li );
				var img = $("<a href='../goodsDetails/goodsDetails.html?goodeId=" +data.goodId + "'" +"><img src=" +data.img+ "></a>")
				img.appendTo( div_pi );
				var div_pn = $("<div class='p-n'></div>");
				div_pn.appendTo( li );
				var h = $("<a href='../goodsDetails/goodsDetails.html?goodeId=" +data.goodId + "'" +">" +data.headline+ "</a>");
				h.appendTo( div_pn );
				var div_up = $("<div class='u-price clearfix'></div>");
				div_up.appendTo( li );
				var np = $("<p class='s-p fl '></p>");
				np.appendTo( div_up );
				var np_span1 = $("<span>￥</span>");
				np_span1.appendTo( np );
				var np_span2 = $("<span class='iteminfo_sm_price'>" + data.nPrice + "</span>")
				np_span2.appendTo( np );
				if(data.oPrice != "")
				{
					var s = $("<s class='o-p fl'></s>");
					s.appendTo( div_up );
					var s_span1 = $("<span>￥</span>");
					s_span1.appendTo( s );
					var s_span2 = $("<span class='iteminfo_it_mprice'>" +data.oPrice+ "</span> ");
					s_span2.appendTo( s );
				}
			}
		});
	}
	
	//楼层处理  end
	//=========================================================
	
	
//	楼梯效果
	var isMoving = false;
	$(".J_fn_lift li").click(function(){
//		$(this).index();
		
		$(this).addClass("active").siblings().removeClass("active");
		
		
		var top = $(".J-floor").eq( $(this).index()).offset().top; 
		
		isMoving = true; //正要开始动画运动
		$("html,body").stop().animate({"scrollTop": top}, 500, function(){
			isMoving = false; //动画运动结束
		});
		
	})
	
	//=================================================
	//回到顶部
	$(".J_go_top").click(function(){
		isMoving = true; //正要开始动画运动
		$("html,body").stop().animate({"scrollTop": 0}, 500, function(){
			isMoving = false; //动画运动结束
		});
	})
	

	//===============加载导航栏数据==================================
	navData();
	function navData(){
		for(var index=0;index<15;index++)
		{
			var _url = urlH + "/feiniu/php/index/navData.php?group=" +index;
			$.get(_url,function(_json){
				var data = JSON.parse(_json);
				var itemDiv = $(".J_cate_item").eq(data.index);
				itemDiv.empty();
				
				var div1 = $("<div class='col fl'></div>");
				var div2 = $("<div class='col fl'></div>");
				var div3 = $("<div class='col fl'></div>");
				var div4 = $("<div class='col brand fl'></div>");
				var divArr = [div1,div2,div3,div4];
				var k=0;
				for(var i=0;i<data.groupArr.length;i++)
				{
					var group = data.groupArr[i];
					var dl = $("<dl class='clearfix'></dl>");
					var dt = $("<dt>" +group.title+ "</dt>");
					dt.appendTo( dl );
					for(var j=0;j<group.data.length;j++)
					{
						$("<dd><a href='#'>" +group.data[j]+ "</a></dd>").appendTo(dl);
					}
					if(k==3)
					{
						k=0;
					}
					divArr[k++].append( dl );
				}
				
				var ul = $("<ul class='clearfix'></ul>");
				ul.appendTo( divArr[3] );
				for(var i=0;i<data.imgArr.length;i++)
				{
					ul.append( $("<li><img src=" +data.imgArr[i]+ "></li>") );
				}
				
				divArr[3].append( $("<a href='javascript'><img src=" +data.img+ "></a>") );
				
				itemDiv.append(divArr);
			})	
		}
	}
	
	
	//===============================================
	//轮播图旁的下拉列表
	$(".J_cate_list_ul li").mouseenter(function(){
		$(this).stop(). animate({"padding-left":15},300);
		$(this).addClass("cur");
		
		var index = $(this).index(".J_cate_list_ul li");		
		$(".J_cate_item").eq( index ).stop().fadeIn().siblings().stop().fadeOut();
		
	});
	
	$(".J_cate_list_ul li").mouseleave(function(){
		$(this).stop().removeClass("cur");
		$(this).animate({"padding-left":5},300);
		
//		var index = $(this).index(".J_cate_list_ul li");		
//		$(".J_cate_item").eq( index ).stop().fadeOut();
		
	});
	$(".J-cg-box").mouseenter(function(){
		$(".J_cate_box").stop().fadeIn();
	})
	
	
	$(".J-cg-box").mouseleave(function(){
		$(".J_cate_box").stop().fadeOut();
	})
	
	
	//============================================
	//创建商标
	$.each($(".J-m-fn-brand"), function() {
		var index = $(this).index(".J-m-fn-brand");
		var _url = urlH + "/feiniu/php/index/brand.php?index=" +index;
		$.get(_url,function(data){
			var obj = JSON.parse(data);
			var arr = obj.imgData;
			var ul = $("<ul class='clearfix'></ul>").appendTo( $(".J-m-fn-brand").eq(obj.index) );
			for(var i=0;i<arr.length;i++)
			{
				var img = $("<img >");
				img.attr("src",arr[i].img);
				var li = $("<li></li>");
				var a = $("<a href='javascript:;'></a>");
				img.appendTo(a);
				a.appendTo(li);
				li.appendTo(ul);

			}
			
		})
		
		
	});
	
	
})
