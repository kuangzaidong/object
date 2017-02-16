$(function(){
	var users = $.cookie("users") ? JSON.parse( $.cookie("users") ) : "";
	if( users != "")
	{

		$(".J-input-txt").eq(0).val( users.username );
		$(".J-input-txt").eq(1).val( users.pwd );
		$(".J-auto-rmb").prop("checked",true);
	}
	
	
	$(".J-login-submit").click(function(){
		var user = $(".J-input-txt").eq(0).val();
		var paw = $(".J-input-txt").eq(1).val();
		var istrue = $(".J-auto-rmb").prop("checked");
		
		if(user.length<1 || paw.length<1)
		{
			$(".J-errorMsg").html("账号和密码不匹配哦~");
			$(".J-msg-err").stop().find("i").css("background","url(images/dialog-login.png) no-repeat 0 -40px");
			$("form").css("margin-top",5);
			$(".J-msg-err").fadeIn(300);
			return;
		}
		
		var pawMd5 = $.md5(paw );
		var _url = urlH + "/feiniu/php/userData/login.php?user=" + user + "&paw=" +pawMd5;
		console.log(_url);
		$.get(_url,function(data){
			var obj = JSON.parse(data);
			console.log(obj);
			console.log(obj);
			if(obj.errcode == 0)
			{
				console.log("登录成功");
				if(istrue)
				{
					var users = {username:user, pwd:paw};
					console.log( users );
					$.cookie("users", JSON.stringify(users), {expires:30, path:"/"});
				}
				
				var userState = {
					user:user,
					state:1
				}
				$.cookie("userState", JSON.stringify(userState), {expires:0.5, path:"/"});
				window.location.href = "../index/index.html";
			}else{
				$(".J-errorMsg").html("账号和密码不匹配哦~");
				$(".J-msg-err").stop().find("i").css("background","url(images/dialog-login.png) no-repeat 0 -40px");
				$("form").css("margin-top",5);
				$(".J-msg-err").fadeIn(300);
				$.cookie("users","", {expires:0, path:"/"});
			}
		})
		
	})
	
	$(".J-input-txt").blur(function(){
		$(".J-msg-err").stop().fadeOut(300,function(){
				$("form").css("margin-top",48);
		});
	})
	
	//点击自动登录
	$(".J-auto-rmb").click(function(){
		if($(this).prop("checked") )
		{
			$(".J-errorMsg").html("公共场所不建议自动登录，以防帐号丢失");
			$(".J-msg-err").find("i").css("background","url(images/fn-icon.png) 0 0");
			$("form").css("margin-top",5);
			$(".J-msg-err").stop().fadeIn(300);
		}else{
			$(".J-msg-err").stop().fadeOut(300,function(){
				$("form").css("margin-top",48);
			});
		}
	})
})
