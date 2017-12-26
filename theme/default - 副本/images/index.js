var unslider1 = $('.banner2').unslider({
	speed: 500,               //  The speed to animate each slide (in milliseconds)
	delay: 3000,              //  The delay between slide animations (in milliseconds)
	complete: function() {},  //  A function that gets called after every slide animation
	keys: true,               //  Enable keyboard (left, right) arrow shortcuts
	dots: true,               //  Display dot navigation
	fluid: false              //  Support responsive design. May break non-responsive designs
});
var unslider2 = $('.banner3').unslider({
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
setInterval('slid()',2000)