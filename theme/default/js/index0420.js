$(function(){
	$(".friendlink select").change(function(){
	    var val = $(this).val();
	    if(val != ''){
	    	window.open(val,'','height=500,width=611,scrollbars=yes,status =yes')
	    }
	});
});
var unslider1 = $('.banner2').unslider({
	speed: 500,               //  The speed to animate each slide (in milliseconds)
	delay: 3000,              //  The delay between slide animations (in milliseconds)
	complete: function() {},  //  A function that gets called after every slide animation
	keys: true,               //  Enable keyboard (left, right) arrow shortcuts
	dots: true,               //  Display dot navigation
	fluid: false              //  Support responsive design. May break non-responsive designs
});
$(function(){
	$('.sedlink').hover(function(){
		$(this).find('.sedlinkA').css('display','block').end().find('.sublinkA').css('background','#133a61');
	},function(){
		$(this).find('.sedlinkA').css('display','none').end().find('.sublinkA').css('background','#205d84');
	})
})
$(function(){
	$('.sedlinkA').hover(function(){
		$(this).css('background-color','#4988C7').siblings('.sublinkA').css('background','#133a61');
	},function(){
		$(this).css('background-color','#205d84').siblings('.sublinkA').css('background','#205d84');
	})
	$('.bannerhonner ul').css('width',$('.bannerhonner li').length*(160+45));
})
var left = -35;
function slid(){
	if((-left)==$('.bannerhonner li').length*(160+45)+35){
		left = -35
	}else{
		left-=205;	
	}
	$('.bannerhonner ul').animate({
		'margin-left':left
	},1000)
}
setInterval('slid()',2000);
var tops = 0;
function newsulfu(){
	if((-tops)==$('.newsul a').length*27){
		tops = 0
	}else{
		tops-=27;	
	}
	$('.newsul').animate({
		'margin-top':tops
	},800)
}
// setInterval('newsulfu()',2000);

// add nowenjun 2016年4月15日21:17:01
function startmarquee(lh,speed,delay) {
	var p=false;
	var t;
	var o=document.getElementById("marqueebox");
	o.innerHTML+=o.innerHTML;
	o.style.marginTop=0;
	o.onmouseover=function(){p=true;}
	o.onmouseout=function(){p=false;}

	function start(){
		t=setInterval(scrolling,speed);
		if(!p) o.style.marginTop=parseInt(o.style.marginTop)-1+"px";
	}
	function scrolling(){
		if(parseInt(o.style.marginTop)%lh!=0){
			o.style.marginTop=parseInt(o.style.marginTop)-1+"px";
			if(Math.abs(parseInt(o.style.marginTop))>=o.scrollHeight/2)
				o.style.marginTop=0;
		}else{
			clearInterval(t);
			setTimeout(start,delay);
		}
	}
	setTimeout(start,delay);
}
startmarquee(27,20,1500);