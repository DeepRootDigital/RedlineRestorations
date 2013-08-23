$(document).ready(function(){

	//Control top and bottom arrow buttons

	$('.up-arrow-hover').click(function(){
		movethismuch = $(this).parent().parent().find('.panel').height();
		movethismuch = "+=" + movethismuch + "px";
		$(this).parent().parent().find('.panel').animate({
			'margin-top' : movethismuch
		},300);
	});

	$('.down-arrow-hover').click(function(){
		movethismuch = $(this).parent().parent().find('.panel').height();
		movethismuch = "-=" + movethismuch + "px";
		$(this).parent().parent().find('.panel').animate({
			'margin-top' : movethismuch
		},300);
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
		$(".content-panel").css({"height": vph + "px"});
		$(".panel").css({"height": vph + "px"});
		$(".left-gutter").css({"height": vph + "px"});
		$(".right-gutter").css({"height": vph + "px"});
		$(".viewport-center").css({"height": vph + "px"});
		$(".down-arrow-hover").css({"margin-top": vph - 53 + "px"});
		$(".two").css({"margin-top": vph + "px"});
		$(".three").css({"margin-top": vph * 2 + "px"});
		$(".four").css({"margin-top": vph * 3 + "px"});
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


});