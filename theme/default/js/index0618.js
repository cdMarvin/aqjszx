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
	$('.newsu2').animate({
		'margin-top':tops
	},800)
}


// setInterval('newsulfu()',2000);
var stopscroll = false;
var scrollElem = document.getElementById("ceng1");
var marqueesHeight = scrollElem.style.height;
scrollElem.onmouseover = new Function('stopscroll = true');
scrollElem.onmouseout  = new Function('stopscroll = false');
var preTop = 0;
var currentTop = 0;
var stoptime = 0;
var leftElem = document.getElementById("ceng2"); 
scrollElem.appendChild(leftElem.cloneNode(true));
init_srolltext();

init_srolltext2();
function init_srolltext(){
	scrollElem.scrollTop = 0;
	setInterval('scrollUp()', 165);//确定滚动速度的, 数值越小, 速度越快
}
function init_srolltext2(){
	scrollElem.scrollTop = 0;
	setInterval('scrollUp()', 165);//确定滚动速度的, 数值越小, 速度越快
}
function scrollUp(){
	if(stopscroll) return;
	currentTop += 2; //设为1, 可以实现间歇式的滚动; 设为2, 则是连续滚动
	if(currentTop == 19) {
		stoptime += 1;
		currentTop -= 1;
		if(stoptime == 180) {
			currentTop = 0;
			stoptime = 0;
		}
	}else{
		preTop = scrollElem.scrollTop;
		scrollElem.scrollTop += 1;
		if(preTop == scrollElem.scrollTop){
			scrollElem.scrollTop = 0;
			scrollElem.scrollTop += 1;
		}
	}
}