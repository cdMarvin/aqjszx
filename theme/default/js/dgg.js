
	//安康杯悬浮
        function akbzz_start(){
           // var azbFlg = getCookie("azbFlg") ;
        	//if(azbFlg != 'true'){
        		$('#akbzz_div').fadeIn(500);
			    var t1 = setTimeout("$('#akbzz_div').fadeOut(500)",3000); 
			    document.cookie="azbFlg=true";
        //	}
        }
        function getCookie(name) 
        { 
            var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
         
            if(arr=document.cookie.match(reg))
         
                return unescape(arr[2]); 
            else 
                return null; 
        } 
	//安康杯悬浮



        //获取登陆位置，将提示信息置于提示位置后面
        $loginDiv = $('.main-02-login');
        var offset = $loginDiv.offset();
        
        $('.inf-message').css({ position: "absolute", left: (offset.left + 120 ) + "px",top: (offset.top - 240 ) + "px"});
        
		/*关闭扫一扫*/
		$("#maincode").children("img").on("click",function(){
			//$("#maincode").fadeOut(500);
			window.open("http://202.61.88.159/login/login.userRegister.do");
		});
		
        //友情链接跳转
        $('.main-09-select select').change(function(){
        	if( $(this).val() != '' ){
        		window.open( $(this).val() );
        	}
        });
        
        //扫一扫固定
        // 获取浏览器窗口宽度
        var winWidth;
        var winHeight;
            
		if (window.innerWidth)
			  winWidth = window.innerWidth;
		else if ((document.body) && (document.body.clientWidth))
			  winWidth = document.body.clientWidth;
		// 获取窗口高度
		if (window.innerHeight)
			  winHeight = window.innerHeight;
		else if ((document.body) && (document.body.clientHeight))
			  winHeight = document.body.clientHeight;

        $('#maincode').css('position','fixed');
        $('#maincode').css('left',(winWidth - 180) + 'px');
        $('#maincode').css('top',(winHeight - 180) + 'px');
        
        //
        $(window).resize(function(){
        	if (window.innerWidth)
                winWidth = window.innerWidth;
	        else if ((document.body) && (document.body.clientWidth))
	            winWidth = document.body.clientWidth;
	        // 获取窗口高度
	        if (window.innerHeight)
	            winHeight = window.innerHeight;
	        else if ((document.body) && (document.body.clientHeight))
	            winHeight = document.body.clientHeight;
	        
        	$('#maincode').css('left',(winWidth - 150) + 'px');
            $('#maincode').css('top',(winHeight - 200) + 'px');
      	});
        
        //隐藏登录错误信息
        var timer = window.setTimeout(function(){
        	$('.inf-message').hide();
        	window.clearTimeout(timer);
        },2000);
        
        window.document.onkeydown = function(event){
            if(event.keyCode == 13){
                $('#jvForm').submit();
            }
        }
