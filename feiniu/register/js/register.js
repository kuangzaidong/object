$(function(){
	
	var okArr = [false,false,false,false,false,false];
			 //验证手机号
		 function mobile(val){
		 	okArr[0] = false;
			if(val.length<1)
			{
				$("#mobileBox").show();
				$("#mobileBox").html("手机号码不能为空");
			}else
			{
				reg = /^[1][3578][0-9]{9}$/;
				if( reg.test(val) )
				{
					$("#mobileBox").hide();
					okArr[0] = true;
				}else{
					$("#mobileBox").show();
					$("#mobileBox").html("手机号码格式不正确，请重新输入");
				}
			}
		 };
		 //验证图形验证码
		 function imgCode(val){
		 	okArr[1] = false;
			if(val.length<1)
			{
				$("#imgcodeErr").show();
				$("#imgcodeErr").html("图形验证码不能为空");
				randomImg();
			}else
			{
				if( val === $("#captchaImg").html() )
				{
					$("#imgcodeErr").hide();
					okArr[1] = true;
				}else{
					$("#imgcodeErr").show();
					$("#imgcodeErr").html("图形验证码输入错误");
					randomImg();
				}
			}
		 };
		 //验证验证码
		 function code(val){
		 	console.log(val);
		 	console.log( $("#sendSms").html() );
		 	okArr[2] = false;
				if($("#sendSms").html() == "获取验证码")
				{
					return;
				}
				if(val.length<1)
				{
					$("#mbmsgBox").show();
					$("#mbmsgBox").html("验证码不能为空");
				}else{
					if( $("#sendSms").html()==val )
					{
						$("#mbmsgBox").hide();
						okArr[2] = true;
					}else{
						$("#mbmsgBox").show();
						$("#mbmsgBox").html("验证码输入不正确");
					}
				}
		 };
		 //验证密码
		 function paw(val){
		 	okArr[3] = false;
				$(".safeline span").eq(1).removeClass("son");
				$(".safeline span").eq(2).removeClass("son");
				$(".safeline span").eq(3).removeClass("son");
				if(val.length<1)
				{
					$("#pwBox").show();
					$("#pwBox").html("密码不能为空");
				}else{
					reg = 	/^.{6,16}$/;
					if( reg.test(val) )
					{
						//判断安全性
						var s=0;
						reg = /[a-z]+/;
						s += reg.test(val) ? 1 : 0;
						reg = /[A-Z]+/;
						s += reg.test(val) ? 1 : 0;
						reg = /[0-9]+/;
						s += reg.test(val) ? 1 : 0;
						
						reg = /[_]+/;
						s += reg.test(val) ? 1 : 0;
						
						console.log(val);
						console.log(s);
						if(s == 1)
						{
							$(".safeline span").eq(1).addClass("son");
							$(".safeline span").eq(2).removeClass("son");
							$(".safeline span").eq(3).removeClass("son");
						}
						
						if(s == 2)
						{
							$(".safeline span").eq(1).addClass("son");
							$(".safeline span").eq(2).addClass("son");
							$(".safeline span").eq(3).removeClass("son");
						}
						if(s > 2)
						{
							$(".safeline span").eq(1).addClass("son");
							$(".safeline span").eq(2).addClass("son");
							$(".safeline span").eq(3).addClass("son");
						}
						okArr[3] = true;
						$("#pwBox").hide();
					}else{
						$("#pwBox").show();
						$("#pwBox").html("密码长度只能在6-16位字符之间");
					}
				}
		 };
		 //确认密码
		 function okpaw(val){
		 	okArr[4] = false;
			if(val.length<1)
			{
				$("#pwBox2").show();
				$("#pwBox2").html("确认密码不能为空");
			
			}else{
				if( val == $(".J_cellphone:eq(3)").val())
				{
					$("#pwBox2").hide();
					okArr[4] = true;
				}else{
					$("#pwBox2").show();
					$("#pwBox2").html("两次输入的密码不相同");
				}
			}
		 };
		 
		 
	$('.J_cellphone:eq(3)').bind('input propertychange', function() {
		var val = $(this).val();
		paw(val);
    	
	});



		 
	$(".J_cellphone").blur(function(){
		 var reg = null;
		 var val = $(this).val();
		 
		 
		switch( $(this).index(".J_cellphone") )
		{
			//手机号
			case 0:{
				mobile(val);
			}break;
			//图形验证码
			case 1:{
				imgCode(val);
			}break;
			//验证码
			case 2:{
				code(val);
			}break;
			//密码
			case 3:{
				paw(val);
			}break;
			//确认密码
			case 4:{
				okpaw(val);
			}break;
		}
	})
	
	//点击用户协议
	$(".J_protocal").click(function(){
		okArr[5] = $(this).prop("checked");
		$("#protocalBox").hide();
	});
	
	$("#cbtn").click(function(){
		randomImg();
	})
	randomImg();
	//随机一个图形验证码
	function randomImg(){
		var tex = "";
		for(var i=0;i<6;i++)
		{
			var num = parseInt(Math.random()*(26+26+10));
			var str = null;
			if( num<26 )
			{
				str = String.fromCharCode( num -0 + 97);
			}else if( num<52 )
			{
				str = String.fromCharCode( num-26 + 65);
			}else{
				str = String.fromCharCode( num -52 + 48);
			}
			tex += str;
		}
		
		
		var R = parseInt( Math.random()*256 );
		var G = parseInt( Math.random()*256 );
		var B = parseInt( Math.random()*256 );
		
		var R1 = parseInt( Math.random()*256 );
		var G1 = parseInt( Math.random()*256 );
		var B1 = parseInt( Math.random()*256 );
		
		$("#captchaImg").html(tex);
		$("#captchaImg").css("background","rgb(" + R + "," + G + "," + B +")");
		
		$("#captchaImg").css("color","rgb(" + R1 + "," + G1 + "," + B1 +")");
	
	}

	//点击获取验证码按钮
	$("#sendSms").click(function(){
		var temp = "";
		for(var i=0;i<4;i++)
		{
			temp += parseInt( Math.random()*10 );
		}
		$("#sendSms").html( temp );
	})

	//导航栏点击
	$(".uli").click(function(){
		$(this).addClass("active").siblings().removeClass("active");
		
		if( $(this).index() ==1 )
		{
			$(".E-mail").fadeIn(300);
			$(".ui_tab_content").fadeOut(300);
			$(".m-g-footer").css("margin-top",550);
			
		}else{
			$(".E-mail").fadeOut(300);
			$(".ui_tab_content").fadeIn(300);
			$(".m-g-footer").css("margin-top",0);
		}
		
	})
	
	//点击注册
	$(".J_btn_agree").click(function(){
		if( okArr[5] == false)
		{
			$("#protocalBox").show();
		}
		for(var i=0;i<okArr.length;i++)
		{
			if( !okArr[i])
			{
				alert("注册失败");
				return;
			}
		}
		var user = $(".J_cellphone").eq(0).val();
		var paw  = $.md5( $(".J_cellphone").eq(3).val());
		
		var url = urlH + "/feiniu/php/userData/register.php?user="+ user+"&paw=" +paw;
		
		$.get(url,function(data){
			console.log(JSON.parse(data));
		})
		window.location.href = "../logIn/login.html";
	})
	
	
})
