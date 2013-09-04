$(document).ready(function(){

	//Control top and bottom arrow buttons

	$('.up-arrow-hover').click(function(){
		movethismuch = $(this).parent().parent().find('.panel').height();
		movethismuch = "+=" + (movethismuch+7) + "px";
		var arrowposition = $(this).offset();
		if (arrowposition.top < 150){
			$(this).parent().parent().find('.panel').animate({
				'margin-top' : movethismuch
			},300);
		}
		
	});

	$('.down-arrow-hover').click(function(){
		movethismuch = $(this).parent().parent().find('.panel').height();
		movethismuch = "-=" + (movethismuch+7) + "px";
		$(this).parent().parent().find('.panel').animate({
			'margin-top' : movethismuch
		},300);
	});

	$('.down-arrow-footer').click(function(){
		$('.footer').animate({
			'bottom' : '0px'
		},300);
	});

	$('.up-arrow-hover').hover(function(){
		$(this).find('h6').css('display','block');
	},
	function(){
		$(this).find('h6').css('display','none');
	});

	$('.down-arrow-hover').hover(function(){
		$(this).find('h6').css('display','block');
	},
	function(){
		$(this).find('h6').css('display','none');
	});

	$('.down-arrow-footer').hover(function(){
		$(this).find('h6').css('display','block');
	},
	function(){
		$(this).find('h6').css('display','none');
	});

	//Control left and right arrow buttons

	$('.left-button').click(function(){
		$('.content-panel-area').animate({
			'left' : '+=1007px'
		},300);
	});

	$('.right-button').click(function(){
		$('.content-panel-area').animate({
			'left' : '-=1007px'
		},300);
	});

	//Script for resizing windows
	resizeDiv();
	resizeGutter();

	window.onresize = function(event) {
		resizeDiv();
		resizeGutter();
	}

	function resizeDiv() {
		vph = $(window).height();
		vph = vph - 100;
		var trueheight = vph;
		if (trueheight < 580) {
			trueheight=580;
		}
		if (vph > 580) {
			vph = 580;
		}
		else {
			vph = 580;
		}
		$(".content-panel").css({"height": trueheight + "px"});
		$(".panel").css({"height": vph + "px"});
		$(".left-gutter").css({"height": trueheight + "px"});
		$(".right-gutter").css({"height": trueheight + "px"});
		$(".viewport-center").css({"height": vph + "px"});
		$(".down-arrow-hover").css({"margin-top": vph - 53 + "px"});
		$(".down-arrow-footer").css({"margin-top": vph - 53 + "px"});
		$(".one").css('margin-top','0px');
		$(".two").css({"margin-top": (vph+7) + "px"});
		$(".three").css({"margin-top": (vph+7) * 2 + "px"});
		$(".four").css({"margin-top": (vph+7) * 3 + "px"});
	}

	function resizeGutter() {
		width = $(".viewport-center").outerWidth();
		width = $(".viewport-center").outerWidth(true) - width;
		width = (width/2)-7;
		position = width + 1014;
		$(".left-gutter").css({"width":width+"px"});
		$(".right-gutter").css({"width":width+"px"});
		$(".right-gutter").css({"margin-left":position+"px"});
		// $(".left-button").css({"margin-left":width - 25 +"px"});
	}

	$('.fixed-menu-bar ul li:last-of-type').click(function(){
		$(document).find('.fixed-social-menu').slideDown(300);
		$(document).find('.fixed-social-icons').animate({"margin-top":"5px"},300,function(){
			$(document).find('.fixed-social-icons').css('z-index',10000000000);
			$(document).find('.fixed-social-icons').animate({"margin-top":"-1px"});
		});
		$(this).css('display','none');
		$('.close-button').css('display','block');
	});

	$('.close-button').click(function(){
		$(document).find('.fixed-social-icons').animate({"margin-top":"5px"},300,function(){
			$(document).find('.fixed-social-icons').css('z-index',100000);
			$(document).find('.fixed-social-icons').animate({'margin-top':'-24px'});
		});
		$(document).find('.fixed-social-menu').slideUp(950);
		$('.close-button').css('display','none');
		$('.fixed-menu-bar ul li:last-of-type').css('display','block');
	});


});