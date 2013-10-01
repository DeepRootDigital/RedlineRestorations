$(document).ready(function(){

	// Top Menu Functionality

	$('.fixed-menu-bar ul li a').click(function(){
		if ($(this).text() == "About Us") {
			$('.content-panel-area').animate({'left':'0px'},300,function(){
			$(document).find("#scroll").removeAttr('id');
			if ($(document).find('.content-panel-area').css('left') == "0px") {
				$(document).find('.aboutus-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-1007px") {
				$(document).find('.service-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-2014px") {
				$(document).find('.process-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-3021px") {
				$(document).find('.restorations-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-4028px") {
				$(document).find('.blog-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-5035px") {
				$(document).find('.contactus-page').find('.one-big-page-panel').attr('id','scroll');
			}
		});
		}
		if ($(this).text() == "Services") {
			$('.content-panel-area').animate({'left':'-1007px'},300,function(){
			$(document).find("#scroll").removeAttr('id');
			if ($(document).find('.content-panel-area').css('left') == "0px") {
				$(document).find('.aboutus-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-1007px") {
				$(document).find('.service-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-2014px") {
				$(document).find('.process-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-3021px") {
				$(document).find('.restorations-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-4028px") {
				$(document).find('.blog-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-5035px") {
				$(document).find('.contactus-page').find('.one-big-page-panel').attr('id','scroll');
			}
		});
		}
		if ($(this).text() == "Our Process") {
			$('.content-panel-area').animate({'left':'-2014px'},300,function(){
			$(document).find("#scroll").removeAttr('id');
			if ($(document).find('.content-panel-area').css('left') == "0px") {
				$(document).find('.aboutus-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-1007px") {
				$(document).find('.service-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-2014px") {
				$(document).find('.process-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-3021px") {
				$(document).find('.restorations-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-4028px") {
				$(document).find('.blog-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-5035px") {
				$(document).find('.contactus-page').find('.one-big-page-panel').attr('id','scroll');
			}
		});
		}
		if ($(this).text() == "Restorations") {
			$('.content-panel-area').animate({'left':'-3021px'},300,function(){
			$(document).find("#scroll").removeAttr('id');
			if ($(document).find('.content-panel-area').css('left') == "0px") {
				$(document).find('.aboutus-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-1007px") {
				$(document).find('.service-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-2014px") {
				$(document).find('.process-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-3021px") {
				$(document).find('.restorations-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-4028px") {
				$(document).find('.blog-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-5035px") {
				$(document).find('.contactus-page').find('.one-big-page-panel').attr('id','scroll');
			}
		});
		}
		if ($(this).text() == "Blog") {
			$('.content-panel-area').animate({'left':'-4028px'},300,function(){
			$(document).find("#scroll").removeAttr('id');
			if ($(document).find('.content-panel-area').css('left') == "0px") {
				$(document).find('.aboutus-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-1007px") {
				$(document).find('.service-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-2014px") {
				$(document).find('.process-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-3021px") {
				$(document).find('.restorations-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-4028px") {
				$(document).find('.blog-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-5035px") {
				$(document).find('.contactus-page').find('.one-big-page-panel').attr('id','scroll');
			}
		});
		}
		if ($(this).text() == "Contact Us") {
			$('.content-panel-area').animate({'left':'-5035px'},300,function(){
			$(document).find("#scroll").removeAttr('id');
			if ($(document).find('.content-panel-area').css('left') == "0px") {
				$(document).find('.aboutus-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-1007px") {
				$(document).find('.service-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-2014px") {
				$(document).find('.process-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-3021px") {
				$(document).find('.restorations-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-4028px") {
				$(document).find('.blog-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-5035px") {
				$(document).find('.contactus-page').find('.one-big-page-panel').attr('id','scroll');
			}
		});
		}
	});

	// Code for adding scrolling

    //adding the event listerner for Mozilla
    if(window.addEventListener) {
    	document.addEventListener('DOMMouseScroll', moveObject, false);
    }

    //for IE/OPERA etc
    document.onmousewheel = moveObject;

    function moveObject(event) {
    	var delta = 0;

    	if (!event) event = window.event;

    	// normalize the delta
    	if (event.wheelDelta) {

        	// IE and Opera
        	delta = -event.wheelDelta / 40;

    	} 
    	else if (event.detail) {

        	// W3C
        	delta = event.detail / 4;
    	}

    	var currPos=document.getElementById('scroll').offsetTop;

    	//calculating the next position of the object
    	currPos=parseInt(currPos)-(delta*10);

    	//moving the position of the object
    	if (currPos > -1){
    		currPos = 0;
    		document.getElementById('scroll').style.marginTop = currPos+"px";
    	}
    	else {
    		document.getElementById('scroll').style.marginTop = currPos+"px";
    	}
	}

	// Slider for panel one
	$('.panel-one-slider').last().clone().prependTo('.panel-one-slide-wrapper');
	$(function () {
		setInterval(
			function () {
				$('.panel-one-slider h4').fadeOut(300);
				$('.panel-one-slider h5').fadeOut(300);
				$('.panel-slider-lines').fadeOut(300);
				$('.panel-slider-lines-inner').fadeOut(300);
				$('.panel-one-slide-wrapper').animate({'margin-left':'-=1000px'},500,function(){
					$('.panel-one-slider h4').fadeIn(300);
					$('.panel-slider-lines').fadeIn(300);
					$('.panel-slider-lines-inner').fadeIn(300);
					$('.panel-one-slider h5').fadeIn(300,function(){
						if ($('.panel-one-slide-wrapper').css('margin-left') == "-3000px"){
							$('.panel-one-slide-wrapper').css('margin-left',"0px");
						}
					});
				});
			},6000  
			);
	});
	

	// Blog Hovers

	$('.blog-panel-summary').hover(
		function(){
			$(this).find('.blog-summary-preview').animate({'margin-top':'139px'},400);
		},
		function(){
			$(this).find('.blog-summary-preview').animate({'margin-top':'2px'},400);
		});

	//Control top and bottom arrow buttons

	$('.up-arrow-hover').click(function(){
		movethismuch = $(this).parent().parent().find('.panel').height();
		movethismuch = movethismuch + 6;
		var arrowposition = $(this).offset();
		if ($(this).parent().hasClass('two')){
			$(this).parent().parent().animate({'margin-top':'0px'},400);
		}
		if ($(this).parent().hasClass('three')){
			$(this).parent().parent().animate({'margin-top':'-'+movethismuch+'px'},400);
		}
		if ($(this).parent().hasClass('four')){
			$(this).parent().parent().animate({'margin-top':'-'+movethismuch*2+'px'},400);
		}
	});

	$('.down-arrow-hover').click(function(){
		movethismuch = $(this).parent().parent().find('.panel').height();
		movethismuch = movethismuch + 6;
		if ($(this).parent().hasClass('one')){
			$(this).parent().parent().animate({'margin-top':'-'+movethismuch+'px'},400);
		}
		if ($(this).parent().hasClass('two')){
			$(this).parent().parent().animate({'margin-top':'-'+movethismuch*2+'px'},400);
		}
		if ($(this).parent().hasClass('three')){
			$(this).parent().parent().animate({'margin-top':'-'+movethismuch*3+'px'},400);
		}
	});

	// Control footer

	$('.down-arrow-footer').click(function(){
		$('.footer').animate({
			'bottom' : '0px'
		},300);
	});

	$('.footer-close-tab').click(function(){
		$('.footer').animate({
			'bottom' : '-534px'
		},300);
	});

	// Control the backgrounds and hover contents of up/down navigation

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
		if($('.content-panel-area').css('left') == "0px"){
		}
		else {
			$('.content-panel-area').animate({
			'left' : '+=1007px'
			},300,function(){
			$(document).find("#scroll").removeAttr('id');
			if ($(document).find('.content-panel-area').css('left') == "0px") {
				$(document).find('.aboutus-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-1007px") {
				$(document).find('.process-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-2014px") {
				$(document).find('.blog-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-3021px") {
				$(document).find('.contactus-page').find('.one-big-page-panel').attr('id','scroll');
			}
		});
		}
	});

	$('.right-button').click(function(){
		$('.content-panel-area').animate({
			'left' : '-=1007px'
		},300,function(){
			$(document).find("#scroll").removeAttr('id');
			if ($(document).find('.content-panel-area').css('left') == "0px") {
				$(document).find('.aboutus-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-1007px") {
				$(document).find('.process-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-2014px") {
				$(document).find('.blog-page').find('.one-big-page-panel').attr('id','scroll');
			}
			if ($(document).find('.content-panel-area').css('left') == "-3021px") {
				$(document).find('.contactus-page').find('.one-big-page-panel').attr('id','scroll');
			}
		});
	});

	// About Us team page

	$('.aboutus-panel-people li').click(function(){
		var movethisone = "." + $(this).attr('id');
		$('.aboutus-panel-people').animate({'margin-left':'785px'},400);
		$(movethisone).animate({'margin-left':'0px'},400);
	});

	$('.aboutus-individual-frame-text-first img').click(function(){
		$('.aboutus-panel-people').animate({'margin-left':'0px'},400);
		$('.aboutus-individual-frame').animate({'margin-left':'-1000px'},400);
	});

	$('.aboutus-individual-frame-text-first p').click(function(){
		$('.aboutus-panel-people').animate({'margin-left':'0px'},400);
		$('.aboutus-individual-frame').animate({'margin-left':'-1000px'},400);
	});

	$('.aboutus-individual-frame-overlay').click(function(){
		$('.aboutus-panel-people').animate({'margin-left':'0px'},400);
		$('.aboutus-individual-frame').animate({'margin-left':'-1000px'},400);
	});


	//Script for resizing windows

	resizeGutter();

	window.onresize = function(event) {
		resizeGutter();
	}

	function resizeGutter() {
		height = $(window).height();
		height = height - 100;
		width = $(".viewport-center").outerWidth();
		width = $(".fixed-menu-bar").outerWidth() - width;
		width = (width/2)-7;
		position = width + 1014;
		$(".left-gutter").css({"width":width+"px"});
		$(".right-gutter").css({"width":width+"px"});
		$(".right-gutter").css({"margin-left":position+"px"});
		$('.one-big-page-panel').css('margin-top','0px');
		$(".left-gutter").css('height',height+'px');
		$('.right-gutter').css('height',height+'px');
		$('.content-panel').css('height',height+'px');
	}

	// Top social menu icons control

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

	// Restorations Page

	function individualshow() {
		$(document).find('.restorations-individual-frame').first().css('display','block');
	}
	individualshow();

	$('.restorations-slider-right').click(function(){
		$(this).addClass('active-restoration');
		$(this).parent().find('img').last().animate({'margin-left':'-696px'},500,function(){
			$(this).parent().find('img').last().prependTo('.restorations-individual-frame-images');
			$('.active-restoration').parent().find('img').css('margin-left','0px');
			$('.active-restoration').removeClass('active-restoration');
		});	
	});

	$('.restorations-slider-left').click(function(){
		$(this).addClass('active-restoration');
		$(this).parent().find('img').last().animate({'margin-left':'696px'},500,function(){
			$(this).parent().find('img').last().prependTo('.restorations-individual-frame-images');
			$('.active-restoration').parent().find('img').css('margin-left','0px');
			$('.active-restoration').removeClass('active-restoration');
		});
	});

	$('.restorations-other-panel li').hover(function(){
		$(this).find('.restorations-grid-overlay').css('display','block');
	},function(){
		$(this).find('.restorations-grid-overlay').css('display','none');
	});

	$('.restorations-other-panel li').click(function(){
		var movethisone = "." + $(this).attr('id');
		$('.restorations-individual-frame').css('display','none');
		$('.restorations-page').find('.one-big-page-panel').animate({'margin-top':'-586px'},400);
		$(movethisone).css('display','block');
	});


// Pinterest stuff

(function(n,o,m){var a=n[m.k]={w:n,d:o,a:m,s:{},f:function(){return{callback:[],get:function(b,d){var c=null;return c=typeof b[d]==="string"?b[d]:b.getAttribute(d)},getData:function(b,d){d=a.a.dataAttributePrefix+d;return a.f.get(b,d)},set:function(b,d,c){if(typeof b[d]==="string")b[d]=c;else b.setAttribute(d,c)},make:function(b){var d=false,c,e;for(c in b)if(b[c].hasOwnProperty){d=a.d.createElement(c);for(e in b[c])b[c][e].hasOwnProperty&&typeof b[c][e]==="string"&&a.f.set(d,e,b[c][e]);break}return d},
	kill:function(b){if(typeof b==="string")b=a.d.getElementById(b);b&&b.parentNode&&b.parentNode.removeChild(b)},replace:function(b,d){b.parentNode.insertBefore(d,b);a.f.kill(b)},getEl:function(b){var d=null;return d=b.target?b.target.nodeType===3?b.target.parentNode:b.target:b.srcElement},listen:function(b,d,c){if(typeof a.w.addEventListener!=="undefined")b.addEventListener(d,c,false);else typeof a.w.attachEvent!=="undefined"&&b.attachEvent("on"+d,c)},call:function(b,d){var c,e,f="?";c=a.f.callback.length;
	e=a.a.k+".f.callback["+c+"]";a.f.callback[c]=function(g){d(g,c);a.f.kill(e)};if(b.match(/\?/))f="&";a.d.b.appendChild(a.f.make({SCRIPT:{id:e,type:"text/javascript",charset:"utf-8",src:b+f+"callback="+e}}))},debug:function(b){a.v.config.debug&&a.w.console&&a.w.console.log&&a.w.console.log(b)},presentation:function(){var b,d,c;b=a.f.make({STYLE:{type:"text/css"}});d=a.a.cdn[a.w.location.protocol]||a.a.cdn["http:"];c=a.a.rules.join("\n");c=c.replace(/\._/g,"."+m.k+"_");c=c.replace(/;/g,"!important;");
	c=c.replace(/_cdn/g,d);c=c.replace(/_rez/g,a.v.resolution);if(b.styleSheet)b.styleSheet.cssText=c;else b.appendChild(a.d.createTextNode(c));a.d.h?a.d.h.appendChild(b):a.d.b.appendChild(b)},getPos:function(b){var d=0,c=0;if(b.offsetParent){do{d+=b.offsetLeft;c+=b.offsetTop}while(b=b.offsetParent);return{left:d,top:c}}},hideFloatingButton:function(){if(a.s.floatingButton)a.s.floatingButton.style.display="none"},getThis:function(b,d){b=a.a.endpoint.builder+b+"&"+d;a.f.log("&type=getThis&href="+encodeURIComponent(b));
	a.w.open(b,"pin"+(new Date).getTime())},showFloatingButton:function(b){if(b.height>a.a.minImgSize&&b.width>a.a.minImgSize&&!b.src.match(/^data/)){if(!a.s.floatingButton){a.s.floatingButton=a.f.make({A:{className:a.a.k+"_pin_it_button "+a.a.k+"_pin_it_button_floating",title:"Pin it!",target:"_blank"}});a.f.set(a.s.floatingButton,a.a.dataAttributePrefix+"log","button_pinit_floating");a.d.b.appendChild(a.s.floatingButton)}var d=a.f.getPos(b),c=a.a.endpoint.create;c=c+"url="+encodeURIComponent(a.d.URL)+
	"&media="+encodeURIComponent(b.src)+"&description="+encodeURIComponent(b.getAttribute("data-pin-description")||b.title||b.alt||a.d.title);a.s.floatingButton.href=c;a.s.floatingButton.onclick=function(){a.w.open(this.href,"pin"+(new Date).getTime(),a.a.pop);a.f.hideFloatingButton();return a.v.hazFloatingButton=false};a.s.floatingButton.style.top=d.top+a.a.floatingButtonOffsetTop+"px";a.s.floatingButton.style.left=d.left+a.a.floatingButtonOffsetLeft+"px";a.s.floatingButton.style.display="block"}},over:function(b){if(b=
		a.f.getEl(b||a.w.event))if(b.tagName==="IMG"&&b.src&&!a.f.getData(b,"no-hover")&&!a.f.get(b,"nopin")&&a.v.config.hover){if(a.v.hazFloatingButton===false)a.v.hazFloatingButton=true;else a.f.hideFloatingButton();a.f.showFloatingButton(b)}else if(a.v.hazFloatingButton===true)if(b!==a.s.floatingButton){a.v.hazFloatingButton=false;a.f.hideFloatingButton()}},click:function(b){b=b||a.w.event;var d;if(b=a.f.getEl(b))if(d=a.f.getData(b,"log")){a.f.log("&type="+d+"&href="+encodeURIComponent(b.href||a.f.getData(b,
			"href")));if(!b.className.match(/hazClick/))b.className=b.className+" "+a.a.k+"_hazClick"}},filter:function(b){var d;d="";try{d=decodeURIComponent(b)}catch(c){}b=d.replace(/</g,"&lt;");return b=b.replace(/>/g,"&gt;")},behavior:function(){a.f.listen(a.d.b,"click",a.f.click);a.v.config.hover&&a.f.listen(a.d.b,"mouseover",a.f.over)},getPinCount:function(b){b="?url="+b+"&ref="+encodeURIComponent(a.v.here)+"&source="+a.a.countSource;a.f.call(a.a.endpoint.count+b,a.f.ping.count)},prettyPinCount:function(b){if(b>
			999)b=b<1E6?parseInt(b/1E3,10)+"K+":b<1E9?parseInt(b/1E6,10)+"M+":"++";return b},tile:function(b,d){b.style.display="block";var c={height:a.a.tile.scale.height,width:a.a.tile.scale.width},e=a.f.getData(b,"scale-height");if(e&&e>=a.a.tile.scale.minHeight)c.height=parseInt(e,10);if((e=a.f.getData(b,"scale-width"))&&e>=a.a.tile.scale.minWidth)c.width=parseInt(e,10);e=a.f.getData(b,"board-width")||b.offsetWidth;if(e>b.offsetWidth)e=b.offsetWidth;e=Math.floor(e/(c.width+a.a.tile.style.margin));if(e>a.a.tile.maxColumns)e=
			a.a.tile.maxColumns;if(e<a.a.tile.minColumns)return false;var f=a.f.make({SPAN:{className:a.a.k+"_embed_board_bd"}});f.style.height=c.height+"px";a.v.renderedWidth=e*(c.width+a.a.tile.style.margin)-a.a.tile.style.margin;f.style.width=a.v.renderedWidth+"px";for(var g=0,h=[],k=0,p=d.length;k<p;k+=1){var j=a.f.make({A:{className:a.a.k+"_embed_board_th",target:"_blank",href:b.href,title:d[k].description}});a.f.set(j,a.a.dataAttributePrefix+"log","embed_board");var i={height:d[k].images["237x"].height*
			(c.width/d[k].images["237x"].width),width:c.width},l=a.f.make({IMG:{src:d[k].images["237x"].url,nopin:"true",height:i.height,width:i.width,className:a.a.k+"_embed_board_img",alt:d[k].description}});l.style.height=i.height+"px";l.style.width=i.width+"px";l.style.marginTop=0-i.height/a.a.tile.style.margin+"px";if(i.height>c.height)i.height=c.height;j.appendChild(l);j.style.height=i.height+"px";j.style.width=i.width+"px";h[g]||(h[g]=0);j.style.top=h[g]+"px";j.style.left=g*(c.width+a.a.tile.style.margin)+
			"px";h[g]=h[g]+i.height+a.a.tile.style.margin;j.appendChild(l);f.appendChild(j);g=(g+1)%e}return f},makeFooter:function(b,d){b=a.f.make({A:{className:a.a.k+"_embed_board_ft",href:b.href,target:"_blank"}});if(a.v.renderedWidth>a.a.tile.minWidthToShowAuxText)b.innerHTML=a.v.strings.seeOn;a.f.set(b,a.a.dataAttributePrefix+"log",d);d=a.f.make({SPAN:{className:a.a.k+"_embed_board_ft_logo"}});b.appendChild(d);return b},cssHook:function(b,d){if(b=a.f.getData(b,"css-hook"))d.className=d.className+" "+b},
			fireBookmark:function(){a.d.b.appendChild(a.f.make({SCRIPT:{type:"text/javascript",charset:"utf-8",src:a.a.endpoint.bookmark+"?r="+Math.random()*99999999}}))},ping:{log:function(){},count:function(b,d){if(d=a.d.getElementById(a.a.k+"_pin_count_"+d)){a.f.debug("API replied with count: "+b.count);var c=d.parentNode,e=a.f.getData(c,"config");if(b.count===0)if(e==="above"){a.f.debug("Rendering zero count above.");d.className=a.a.k+"_pin_it_button_count";d.appendChild(a.d.createTextNode("0"))}else a.f.debug("Zero pin count not rendered to the side.");
			if(b.count>0){a.f.debug("Got "+b.count+" pins for the requested URL.");if(e==="above"||e==="beside"){a.f.debug("Rendering pin count "+e);d.className=a.a.k+"_pin_it_button_count";d.appendChild(a.d.createTextNode(a.f.prettyPinCount(b.count)))}else a.f.debug("No valid pin count position specified; not rendering.")}a.f.cssHook(c,d)}else a.f.debug("Pin It button container not found.")},pin:function(b,d){if((d=a.d.getElementById(a.a.k+"_"+d))&&b.data&&b.data[0]){a.f.debug("API replied with pin data");b=
			b.data[0];var c={};if(b.images)c=b.images["237x"];if(b&&b.id&&b.description&&c.url&&c.width&&c.height){a.f.debug("Found enough data to embed a pin");var e=a.f.make({SPAN:{className:a.a.k+"_embed_pin","data-pin-id":b.id}});if(a.f.getData(d,"style")!=="plain")e.className=e.className+" "+a.a.k+"_fancy";var f=a.f.make({A:{className:a.a.k+"_embed_pin_link",title:b.description,href:"http://pinterest.com/pin/"+b.id+"/",target:"_blank"}}),g=a.f.make({IMG:{className:a.a.k+"_embed_pin_link_img",alt:b.description,
				nopin:"true",src:c.url,width:c.width,height:c.height}});a.f.set(g,a.a.dataAttributePrefix+"log","image_from_embedded_pin");a.f.set(g,a.a.dataAttributePrefix+"href","http://pinterest.com/pin/"+b.id+"/");g.style.width=c.width+"px";g.style.height=c.height+"px";f.appendChild(g);c=a.f.make({I:{className:a.a.k+"_repin","data-pin-id":b.id}});a.f.set(c,a.a.dataAttributePrefix+"log","repin");a.f.set(c,a.a.dataAttributePrefix+"href",a.a.endpoint.repin.replace(/%s/,b.id));f.appendChild(c);c.onclick=function(){if(!this.className.match(/hazClick/))this.className=
				this.className+" "+a.a.k+"_hazClick";var h=a.a.endpoint.repin.replace(/%s/,a.f.get(this,"data-pin-id"));a.w.open(h,"pin"+(new Date).getTime(),a.a.popLarge);return false};c=a.f.make({I:{className:a.a.k+"_getThis",innerHTML:a.v.strings.getThis+"<i></i>","data-pin-id":b.id}});f.appendChild(c);c.onclick=function(){var h=a.f.get(this,"data-pin-id");a.f.getThis("do_embed_pin",h);return false};a.f.set(f,a.a.dataAttributePrefix+"log","embed_pin");e.appendChild(f);f=a.f.make({SPAN:{className:a.a.k+"_embed_pin_desc",
					innerHTML:a.f.filter(b.description)}});if(b.attribution&&b.attribution.url&&b.attribution.author_name&&b.attribution.provider_icon_url){a.f.debug("Building attribution line");c=a.f.make({SPAN:{className:a.a.k+"_embed_pin_attrib"}});c.appendChild(a.f.make({IMG:{className:a.a.k+"_embed_pin_attrib_icon",src:b.attribution.provider_icon_url}}));c.appendChild(a.f.make({SPAN:{className:a.a.k+"_embed_pin_attrib",innerHTML:a.v.strings.attribTo+' <a href="'+b.attribution.url+'" target="_blank">'+a.f.filter(b.attribution.author_name)+
						"</a>"}}));f.appendChild(c)}e.appendChild(f);if(b.pinner&&b.pinner.profile_url&&b.pinner.image_small_url&&b.pinner.full_name){a.f.debug("Building pinner line");f=a.f.make({A:{className:a.a.k+"_embed_pin_text",href:b.pinner.profile_url,target:"_blank"}});f.appendChild(a.f.make({IMG:{className:a.a.k+"_embed_pin_text_avatar",src:b.pinner.image_small_url}}));f.appendChild(a.f.make({SPAN:{className:a.a.k+"_embed_pin_text_container",innerHTML:a.v.strings.pinnedBy+' <em class="'+a.a.k+'_embed_pin_text_container_em">'+
						a.f.filter(b.pinner.full_name)+"</em>"}}));c=a.f.make({B:{className:a.a.k+"_embed_pin_link_shield"}});a.f.set(c,a.a.dataAttributePrefix+"log","pinner_from_embedded_pin");a.f.set(c,a.a.dataAttributePrefix+"href",b.pinner.profile_url);f.appendChild(c);e.appendChild(f)}if(b.board&&b.board.url&&b.board.image_thumbnail_url&&b.board.name){a.f.debug("Building board line");if(!b.board.url.match(/^(\/\/pinterest\.com|http:\/\/pinterest\.com|https:\/\/pinterest\.com)/)){b.board.url="//pinterest.com"+b.board.url;
						a.f.debug("appending Pinterest prefix to board URL")}f=a.f.make({A:{className:a.a.k+"_embed_pin_text",href:b.board.url,target:"_blank"}});f.appendChild(a.f.make({IMG:{className:a.a.k+"_embed_pin_text_avatar",src:b.board.image_thumbnail_url}}));f.appendChild(a.f.make({SPAN:{className:a.a.k+"_embed_pin_text_container",innerHTML:a.v.strings.onto+' <em class="'+a.a.k+'_embed_pin_text_container_em">'+a.f.filter(b.board.name)+"</em>"}}));c=a.f.make({B:{className:a.a.k+"_embed_pin_link_shield"}});a.f.set(c,
							a.a.dataAttributePrefix+"log","board_from_embedded_pin");a.f.set(c,a.a.dataAttributePrefix+"href",b.board.url);f.appendChild(c);e.appendChild(f)}a.f.cssHook(d,e);a.f.replace(d,e)}else a.f.debug("Not enough data to embed a pin; aborting")}},user:function(b,d){if((d=a.d.getElementById(a.a.k+"_"+d))&&b.data&&b.data.pins&&b.data.pins.length){a.f.debug("API replied with a user");var c=a.f.make({SPAN:{className:a.a.k+"_embed_board"}});if(a.f.getData(d,"style")!=="plain")c.className=c.className+" "+a.a.k+
						"_fancy";var e=a.f.make({SPAN:{className:a.a.k+"_embed_board_hd"}}),f=a.f.make({A:{className:a.a.k+"_embed_board_title",innerHTML:a.f.filter(b.data.user.full_name),target:"_blank",href:d.href}});a.f.set(f,a.a.dataAttributePrefix+"log","embed_user");e.appendChild(f);c.appendChild(e);if(b=a.f.tile(d,b.data.pins)){c.appendChild(b);d.href+="pins/";c.appendChild(a.f.makeFooter(d,"embed_user"));a.f.cssHook(d,c);a.f.replace(d,c)}}},board:function(b,d){if((d=a.d.getElementById(a.a.k+"_"+d))&&b.data&&b.data.pins&&
							b.data.pins.length){a.f.debug("API replied with a group of pins");var c=a.f.make({SPAN:{className:a.a.k+"_embed_board"}});if(a.f.getData(d,"style")!=="plain")c.className=c.className+" "+a.a.k+"_fancy";var e=a.f.tile(d,b.data.pins),f=a.f.make({SPAN:{className:a.a.k+"_embed_board_hd"}}),g=a.f.make({A:{className:a.a.k+"_embed_board_name",innerHTML:a.f.filter(b.data.board.name),target:"_blank",href:d.href}});a.f.set(g,a.a.dataAttributePrefix+"log","embed_board");f.appendChild(g);if(a.v.renderedWidth>
							a.a.tile.minWidthToShowAuxText){b=a.f.make({A:{log:"embed_board",className:a.a.k+"_embed_board_author",innerHTML:"<span>"+a.v.strings.attribTo+"</span> "+a.f.filter(b.data.user.full_name),target:"_blank",href:d.href}});a.f.set(b,a.a.dataAttributePrefix+"log","embed_board");f.appendChild(b)}else g.className=a.a.k+"_embed_board_title";c.appendChild(f);if(e){c.appendChild(e);c.appendChild(a.f.makeFooter(d,"embed_board"));a.f.cssHook(d,c);a.f.replace(d,c)}}}},parse:function(b,d){var c,e,f,g;g={};b=b.split("#")[0].split("?");
							if(b[1]){b=b[1].split("&");e=0;for(f=b.length;e<f;e+=1){c=b[e].split("=");if(c.length===2)if(d[c[0]])g[c[0]]=c[1]}}return g},fixUrl:function(b){var d="";try{d=decodeURIComponent(b)}catch(c){}if(d===b)b=encodeURIComponent(b);if(!b.match(/^http/i)){b.match(/^%2F%2F/i)||(b="%2F%2F"+b);b="http%3A"+b;a.f.debug("fixed URL: "+b)}return b},deepLink:{ios_safari:function(b){var d,c,e,f;d=b.href;b=d.split("?")[1];b=b.replace(/url=/,"source_url=");b=b.replace(/media=/,"image_url=");b="pinit://pinit/?"+b;c=(new Date).getTime();
							e=0;f=function(){a.w.setTimeout(function(){if(e<10)f();else{var g=c+e*80;if(((new Date).getTime()-g)/10<80)a.w.location=d}e+=1},80)};a.w.location=b;f()}},render:{buttonBookmark:function(b){a.f.debug("build bookmarklet button");var d=a.f.make({A:{href:b.href,className:a.a.k+"_pin_it_button "+a.a.k+"_pin_it_button_inline"}});a.f.set(d,a.a.dataAttributePrefix+"log","button_pinit_bookmarklet");var c=a.f.getData(b,"config");if(a.a.config.pinItCountPosition[c]===true){a.f.set(d,a.a.dataAttributePrefix+
								"config",c);d.className=d.className+" "+a.a.k+"_pin_it_"+c}else d.className=d.className+" "+a.a.k+"_pin_it_none";a.f.getPinCount(encodeURIComponent(a.v.here));d.onclick=function(){a.f.fireBookmark();return false};c=a.f.make({SPAN:{className:a.a.k+"_hidden",id:a.a.k+"_pin_count_"+a.f.callback.length,innerHTML:"<i></i>"}});d.appendChild(c);a.f.replace(b,d)},buttonPin:function(b){a.f.debug("build Pin It button");var d,c;c=a.f.parse(b.href,{url:true,media:true,description:true});if(c.media)c.media=a.f.fixUrl(c.media);
							else{c.media="";a.f.debug("no media found; click will pop bookmark")}if(c.url)c.url=a.f.fixUrl(c.url);else{c.url=encodeURIComponent(a.d.URL);a.f.debug("no url found; click will pin this page")}if(!c.description)c.description=encodeURIComponent(a.d.title||"");d=a.a.endpoint.create+"url="+c.url+"&media="+c.media+"&guid="+a.v.guid+"-"+a.v.buttonId+"&description="+c.description;a.v.buttonId+=1;d=a.f.make({A:{href:d,className:a.a.k+"_pin_it_button "+a.a.k+"_pin_it_button_inline",target:"_blank"}});a.f.set(d,
								a.a.dataAttributePrefix+"log","button_pinit");var e=a.f.getData(b,"config");if(a.a.config.pinItCountPosition[e]===true){a.f.set(d,a.a.dataAttributePrefix+"config",e);d.className=d.className+" "+a.a.k+"_pin_it_"+e}else d.className=d.className+" "+a.a.k+"_pin_it_none";d.onclick=function(){var f=a.f.parse(this.href,{url:true,media:true,description:true});f.description||a.f.log("&type=config_warning&warning_msg=no_description&href="+encodeURIComponent(a.d.URL));if(f.url&&f.url.match(/^http/i)&&f.media&&
								f.media.match(/^http/i))typeof a.f.deepLink[a.v.deepBrowser]==="function"?a.f.deepLink[a.v.deepBrowser](this):a.w.open(this.href,"pin"+(new Date).getTime(),a.a.pop);else{a.f.log("&type=config_error&error_msg=invalid_url&href="+encodeURIComponent(a.d.URL));a.f.fireBookmark()}return false};if(c.url){e=a.f.make({SPAN:{className:a.a.k+"_hidden",id:a.a.k+"_pin_count_"+a.f.callback.length,innerHTML:"<i></i>"}});d.appendChild(e);a.f.getPinCount(c.url);a.f.replace(b,d)}},buttonFollow:function(b){a.f.debug("build follow button");
								var d="_follow_me_button",c=a.f.getData(b,"render");if(c)d=d+"_"+c;d=a.f.make({A:{target:"_blank",href:b.href,innerHTML:b.innerHTML,className:a.a.k+d}});d.appendChild(a.f.make({B:{}}));d.appendChild(a.f.make({I:{}}));a.f.set(d,a.a.dataAttributePrefix+"log","button_follow");a.f.replace(b,d)},embedPin:function(b){a.f.debug("build embedded pin");(b=b.href.split("/")[4])&&parseInt(b,10)>0&&a.f.getPinsIn("pin","",{pin_ids:b})},embedUser:function(b){a.f.debug("build embedded profile");(b=b.href.split("/")[3])&&
								a.f.getPinsIn("user",b+"/pins/")},embedBoard:function(b){a.f.debug("build embedded board");var d=b.href.split("/")[3];b=b.href.split("/")[4];d&&b&&a.f.getPinsIn("board",d+"/"+b+"/pins/")}},getPinsIn:function(b,d,c){var e="",f="?",g;for(g in c)if(c[g].hasOwnProperty){e=e+f+g+"="+c[g];f="&"}a.f.call(a.a.endpoint[b]+d+e,a.f.ping[b])},build:function(b){if(typeof b!=="object"||b===null||!b.parentNode)b=a.d;var d=b.getElementsByTagName("A"),c,e,f,g={vertical:"above",horizontal:"beside"},h=[];c=0;for(b=
									d.length;c<b;c+=1)h.push(d[c]);c=0;for(b=h.length;c<b;c+=1)if(h[c].href&&h[c].href.match(a.a.myDomain)){d=a.f.getData(h[c],"do");if(!d&&h[c].href.match(/pin\/create\/button/)){d="buttonPin";f="none";if((e=a.f.get(h[c],"count-layout"))&&g[e])f=g[e];a.f.set(h[c],"data-pin-config",f)}if(typeof a.f.render[d]==="function"){h[c].id=a.a.k+"_"+a.f.callback.length;a.f.render[d](h[c])}}},config:function(){var b=a.d.getElementsByTagName("SCRIPT"),d=b.length,c,e;e=false;for(c=0;c<d;c+=1)if(a.a.me&&b[c]&&b[c].src&&
									b[c].src.match(a.a.me)){if(e===false){for(e=0;e<a.a.configParam.length;e+=1)a.v.config[a.a.configParam[e]]=a.f.get(b[c],a.a.dataAttributePrefix+a.a.configParam[e]);e=true}a.f.kill(b[c])}if(typeof a.v.config.build==="string")a.w[a.v.config.build]=function(f){a.f.build(f)};a.w.setTimeout(function(){a.f.log("&type=pidget")},1E3)},log:function(b){var d="?via="+encodeURIComponent(a.v.here)+"&guid="+a.v.guid;if(b)d+=b;a.f.call(a.a.endpoint.log+d,a.f.ping.log)},init:function(){a.d.b=a.d.getElementsByTagName("BODY")[0];
									a.d.h=a.d.getElementsByTagName("HEAD")[0];a.v={resolution:1,here:a.d.URL.split("#")[0],hazFloatingButton:false,config:{},strings:a.a.strings.en,guid:"",buttonId:0,deepBrowser:null};if(a.w.navigator.userAgent.match(/iP/)!==null)if(a.w.navigator.userAgent.match(/Pinterest/)===null&&a.w.navigator.userAgent.match(/CriOS/)===null)a.v.deepBrowser="ios_safari";for(var b=0;b<12;b+=1)a.v.guid+="0123456789ABCDEFGHJKLMNPQRSTUVWXYZ_abcdefghijkmnopqrstuvwxyz".substr(Math.floor(Math.random()*60),1);if(b=a.d.getElementsByTagName("HTML")[0].getAttribute("lang")){b=
										b.toLowerCase();if(typeof a.a.strings[b]==="object")a.v.strings=a.a.strings[b];else{b=b.split("-")[0];if(typeof a.a.strings[b]==="object")a.v.strings=a.a.strings[b]}}if(a.w.devicePixelRatio&&a.w.devicePixelRatio>=2)a.v.resolution=2;a.f.config();a.f.build();a.f.presentation();a.f.behavior()}}}()};a.f.init()})(window,document,{k:"PIN_"+(new Date).getTime(),myDomain:/^https?:\/\/pinterest\.com\//,me:/pinit.*?\.js$/,floatingButtonOffsetTop:10,floatingButtonOffsetLeft:10,endpoint:{bookmark:"//assets.pinterest.com/js/pinmarklet.js",
										builder:"http://business.pinterest.com/widget-builder/#",count:"//widgets.pinterest.com/v1/urls/count.json",pin:"//widgets.pinterest.com/v3/pidgets/pins/info/",repin:"//pinterest.com/pin/%s/repin/x/",board:"//widgets.pinterest.com/v3/pidgets/boards/",user:"//widgets.pinterest.com/v3/pidgets/users/",log:"//log.pinterest.com/",create:"//pinterest.com/pin/create/button/?"},config:{pinItCountPosition:{none:true,above:true,beside:true}},minImgSize:200,countSource:6,dataAttributePrefix:"data-pin-",configParam:["build",
										"debug","style","hover"],pop:"status=no,resizable=yes,scrollbars=yes,personalbar=no,directories=no,location=no,toolbar=no,menubar=no,width=632,height=270,left=0,top=0",popLarge:"status=no,resizable=yes,scrollbars=yes,personalbar=no,directories=no,location=no,toolbar=no,menubar=no,width=900,height=500,left=0,top=0",cdn:{"https:":"https://s-passets.pinimg.com","http:":"http://passets.pinterest.com"},tile:{scale:{minWidth:60,minHeight:60,width:92,height:175},minWidthToShowAuxText:150,minContentWidth:120,
										minColumns:1,maxColumns:6,style:{margin:2,padding:10}},strings:{en:{seeOn:"See On",getThis:"get this",attribTo:"by",pinnedBy:"Pinned by",onto:"Onto"},de:{seeOn:"Ansehen auf",getThis:"bekomme",attribTo:"von",pinnedBy:"Gepinnt von",onto:"Auf"},es:{seeOn:"Ver En",getThis:"obtener",attribTo:"por",pinnedBy:"Pineado por",onto:"En"},fr:{seeOn:"Voir sur",getThis:"obtenir",attribTo:"par",pinnedBy:"&#201;pingl&#233; par",onto:"Sur"},nl:{seeOn:"Bekijken op",getThis:"krijg",attribTo:"door",pinnedBy:"Gepind door",
										onto:"Op"},pt:{seeOn:"Ver em",getThis:"obter",attribTo:"por",pinnedBy:"Pin afixado por",onto:"Em"},"pt-br":{seeOn:"Ver em",getThis:"obter",attribTo:"por",pinnedBy:"Pinado por",onto:"Em"}},rules:["a._pin_it_button {  background-image: url(_cdn/images/pidgets/bps_rez.png); background-repeat: none; background-size: 40px 60px; height: 20px; margin: 0; padding: 0; vertical-align: baseline; text-decoration: none; width: 40px; background-position: 0 -20px }","a._pin_it_button:hover { background-position: 0 0px }",
										"a._pin_it_button:active, a._pin_it_button._hazClick { background-position: 0 -40px }","a._pin_it_button_inline { position: relative; display: inline-block; }","a._pin_it_button_floating { position: absolute; }","a._pin_it_button span._pin_it_button_count { position: absolute; color: #777; text-align: center; text-indent: 0; }","a._pin_it_above span._pin_it_button_count { background: transparent url(_cdn/images/pidgets/fpa_rez.png) 0 0 no-repeat; background-size: 40px 29px; position: absolute; bottom: 21px; left: 0px; height: 29px; width: 40px; font: 12px Arial, Helvetica, sans-serif; line-height: 24px; text-indent: 0;}",
										"a._pin_it_beside span._pin_it_button_count, a._pin_it_beside span._pin_it_button_count i { background-color: transparent; background-repeat: no-repeat; background-image: url(_cdn/images/pidgets/fpb_rez.png); }","a._pin_it_beside span._pin_it_button_count { padding: 0 3px 0 10px; background-size: 45px 20px; background-position: 0 0; position: absolute; top: 0; left: 41px; height: 20px; font: 10px Arial, Helvetica, sans-serif; line-height: 20px; }","a._pin_it_beside span._pin_it_button_count i { background-position: 100% 0; position: absolute; top: 0; right: -2px; height: 20px; width: 2px; }",
										"a._pin_it_button._pin_it_above { margin-top: 20px; }","a._follow_me_button, a._follow_me_button i { background-size: 200px 60px; background: transparent url(_cdn/images/pidgets/bfs_rez.png) 0 0 no-repeat }",'a._follow_me_button { color: #444; display: inline-block; font: bold normal normal 11px/20px "Helvetica Neue",helvetica,arial,san-serif; height: 20px; margin: 0; padding: 0; position: relative; text-decoration: none; text-indent: 19px; vertical-align: baseline;}',"a._follow_me_button:hover { background-position: 0 -20px}",
										"a._follow_me_button:active  { background-position: 0 -40px}","a._follow_me_button b { position: absolute; top: 3px; left: 3px; height: 14px; width: 14px; background-size: 14px 14px; background-image: url(_cdn/images/pidgets/log_rez.png); }","a._follow_me_button i { position: absolute; top: 0; right: -4px; height: 20px; width: 4px; background-position: 100% 0px; }","a._follow_me_button:hover i { background-position: 100% -20px;  }","a._follow_me_button:active i { background-position: 100% -40px; }",
										"a._follow_me_button_tall, a._follow_me_button_tall i { background-size: 400px 84px; background: transparent url(_cdn/images/pidgets/bft_rez.png) 0 0 no-repeat }",'a._follow_me_button_tall { color: #444; display: inline-block; font: bold normal normal 13px/28px "Helvetica Neue",helvetica,arial,san-serif; height: 28px; margin: 0; padding: 0; position: relative; text-decoration: none; text-indent: 33px; vertical-align: baseline;}',"a._follow_me_button_tall:hover { background-position: 0 -28px}","a._follow_me_button_tall:active  { background-position: 0 -56px}",
										"a._follow_me_button_tall b { position: absolute; top: 5px; left: 10px; height: 18px; width: 18px; background-size: 18px 18px; background-image: url(_cdn/images/pidgets/smt_rez.png); }","a._follow_me_button_tall i { position: absolute; top: 0; right: -10px; height: 28px; width: 10px; background-position: 100% 0px; }","a._follow_me_button_tall:hover i { background-position: 100% -28px;  }","a._follow_me_button_tall:active i { background-position: 100% -56px; }","span._embed_pin { display: inline-block; text-align: center; width: 237px; overflow: hidden; vertical-align: top; }",
										"span._embed_pin._fancy { background: rgba(0,0,0,0); box-shadow: 0 0 3px #aaa; border-radius: 3px; }","span._embed_pin a._embed_pin_link { display: block;  margin: 0 auto; padding: 0; position: relative;  line-height: 0}","span._embed_pin img { border: 0; margin: 0; padding: 0;}","span._embed_pin a._embed_pin_link i._repin { left: 10px; top: 10px; position: absolute; height: 33px; width: 64px; background: transparent url(_cdn/images/pidgets/repin_rez.png); background-size: 64px 99px; }","span._embed_pin a._embed_pin_link i._repin:hover { background-position: 0 -33px; }",
										"span._embed_pin a._embed_pin_link i._repin._hazClick { background-position: 0 -66px; }","span._embed_pin a._embed_pin_link i._getThis { display: none }","span._embed_pin a._embed_pin_link:hover i._getThis, span._embed_pin a._embed_pin_link:hover i._getThis i { background: transparent url(_cdn/images/pidgets/bfs1.png) }",'span._embed_pin a._embed_pin_link:hover i._getThis { color: #555; display: inline-block; font: normal normal normal 11px/20px "Helvetica Neue",helvetica,arial,san-serif; height: 20px; margin: 0; padding: 0 1px 0 5px; position: absolute; bottom: 10px; right: 10px; text-decoration: none;  }',
										"span._embed_pin a._embed_pin_link:hover i._getThis:hover { background-position: 0 -20px }","span._embed_pin a._embed_pin_link:hover i._getThis i { position: absolute; top: 0; right: -4px; height: 20px; width: 5px; background-position: 100% 0px }","span._embed_pin a._embed_pin_link:hover i._getThis:hover i { background-position: 100% -20px }",'span._embed_pin span._embed_pin_desc { color: #333; white-space: normal; border-bottom: 1px solid #eee; display: block; font-family: "Helvetica Neue", arial, sans-serif; font-size: 12px; line-height: 17px; padding: 10px; text-align: left; }',
										'span._embed_pin span._embed_pin_attrib, span._embed_pin span._embed_pin_text_container { color: #a7a7a7; font-family: "Helvetica", sans-serif; font-size: 10px; line-height: 18px; font-weight: bold; display: block;}',"span._embed_pin span._embed_pin_attrib img._embed_pin_attrib_icon { height: 16px; width: 16px; vertical-align: middle; margin-right: 5px; float: left;}","span._embed_pin span._embed_pin_attrib a { color: #a7a7a7; text-decoration: none;}",'span._embed_pin a._embed_pin_text, span._embed_pin a._embed_pin_text span._embed_pin_text_container { position: relative; text-decoration: none; display: block; font-weight: bold; color: #b7b7b7; font-family: "Helvetica Neue", arial, sans-serif; font-size: 11px; line-height: 14px; height: 39px; text-align: left; }',
										"span._embed_pin a._embed_pin_text { padding: 5px 0 0 7px; }","span._embed_pin a._embed_pin_text:hover { background: #eee;}","span._embed_pin a._embed_pin_text img._embed_pin_text_avatar { border-radius: 2px; overflow: hidden; height: 30px; width: 30px; vertical-align: middle; margin-right: 5px; float: left;}","span._embed_pin a._embed_pin_text span._embed_pin_text_container em._embed_pin_text_container_em { font-family: inherit; display: block; color: #717171; font-style: normal; width: 180px; text-overflow: ellipsis; overflow: hidden; white-space: nowrap; }",
										"span._embed_pin a._embed_pin_text b._embed_pin_link_shield { position: absolute; top: 0; left: 0; height: 100%; width: 100%; }","span._embed_board { display: inline-block; margin: 0; padding:10px 0; position: relative; text-align: center}","span._embed_board._fancy { background: rgba(0,0,0,0); border-radius: 3px; }","span._embed_board span._embed_board_hd { display: block; margin: 0 10px; padding: 0; line-height: 20px; height: 25px; position: relative;  }","span._embed_board span._embed_board_hd a { cursor: pointer; background: inherit; text-decoration: none; width: 48%; white-space: nowrap; position: absolute; top: 0; overflow: hidden;  text-overflow: ellipsis; }",
										"span._embed_board span._embed_board_hd a:hover { text-decoration: none; background: inherit; }","span._embed_board span._embed_board_hd a:active { text-decoration: none; background: inherit; }","span._embed_board span._embed_board_hd a._embed_board_title { width: 100%; position: absolute; left: 0; text-align: left; font-family: 'Tw Cen W01 Medium'; text-transform:uppercase; font-size: 18px; color:#fff;}","span._embed_board span._embed_board_hd a._embed_board_name { position: absolute; left: 0; text-align: left; ffont-family: 'Tw Cen W01 Medium'; font-size: 18px; text-transform:uppercase; color:#fff;}",
										"span._embed_board span._embed_board_hd a._embed_board_author { position: absolute; right: 0; text-align: right; font-family: Helvetica; font-size: 11px; color: #746d6a; font-weight: bold;}","span._embed_board span._embed_board_hd a._embed_board_author span { font-weight: normal; }","span._embed_board span._embed_board_bd { display:block; margin: 0 10px; overflow: hidden; border-radius: 2px; position: relative; }","span._embed_board span._embed_board_bd a._embed_board_th { cursor: pointer; display: inline-block; position: absolute; overflow: hidden; }",
										'span._embed_board span._embed_board_bd a._embed_board_th::before { position: absolute; content:""; z-index: 2; top: 0; left: 0; right: 0; bottom: 0; box-shadow: inset 0 0 2px #888; }',"span._embed_board span._embed_board_bd a._embed_board_th img._embed_board_img { border: none; position: absolute; top: 50%; left: 0; }","a._embed_board_ft { text-shadow: 0 1px #fff; display: block; text-align: center; border: 1px solid #ccc; margin: 10px 10px 0; height: 31px; line-height: 30px;border-radius: 2px; text-decoration: none; font-family: Helvetica; font-weight: bold; font-size: 13px; color: #746d6a; display:none; background: #f4f4f4 url(_cdn/images/pidgets/board_button_link.png) 0 0 repeat-x}",
										"a._embed_board_ft:hover { text-decoration: none; background: #fefefe url(_cdn/images/pidgets/board_button_hover.png) 0 0 repeat-x}","a._embed_board_ft:active { text-decoration: none; background: #e4e4e4 url(_cdn/images/pidgets/board_button_active.png) 0 0 repeat-x}","a._embed_board_ft span._embed_board_ft_logo { vertical-align: top; display: inline-block; margin-left: 2px; height: 30px; width: 66px; background: transparent url(_cdn/images/pidgets/board_button_logo.png) 50% 48% no-repeat; }","._hidden { display:none; }"]});

// Twitter stuff

!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");

});