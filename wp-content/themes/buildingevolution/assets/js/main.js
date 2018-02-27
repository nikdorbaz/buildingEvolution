(function(window, $){
$(document).ready(function($) {
	
	var canvasAbout = document.getElementById('about-canvas')
	
	if ( canvasAbout ){
		var ctx = canvasAbout.getContext('2d');
		var widthCanvas = canvasAbout.nextSibling.parentElement.offsetWidth;
		var heightCanvas = canvasAbout.offsetHeight;
		
		canvasAbout.style.letterSpacing = '0.07em';
		canvasAbout.width = widthCanvas + 20;
		
		drawAbout(ctx, widthCanvas, heightCanvas);
	}
	
	
	// Initialization FullPage
	$('#fullpage').fullpage({
		slidesNavigation: false,
		controlArrows: false,
		navigation: true,
		onSlideLeave: 	
			function(anchorLink, index, slideIndex, direction, nextSlideIndex){
				console.log("onSlideLeave--" + "anchorLink: " + anchorLink + " index: " + index + " slideIndex: " + slideIndex + " direction: " + direction);
			},
		afterLoad: 	
			function(anchorLink, index){
				
				if (index == 2){
					$('.chaos-list>li').removeClass('anim-class');
				}
				if (index == 3){
					$('.vjs-big-play-button').trigger('click');
				}
			},
		onLeave: function(index, nextIndex, direction){
			$('.page-name').html($('#section'+nextIndex).data('name'));
			if (nextIndex == 2 || nextIndex == 4 || nextIndex == 5 || nextIndex == 6){
				$('.page-name').addClass('white');
				$('#fp-nav li').addClass('white');
				
			}else{
				$('.page-name').removeClass('white');
				$('#fp-nav li').removeClass('white');
			}
		},
	});
	
	// var eLeft = $('.aside-menu-item:first').offset().top + $('.aside-menu-item:first').outerWidth() - parseInt($('.aside-menu-item:first').css('padding-left')),
		// eRight = $('#fp-nav ul li:last').offset().top + $('#fp-nav ul li:last').outerHeight();
		
		// $('#fp-nav').css('margin-top', parseInt($('#fp-nav').css('margin-top'))+(eLeft - eRight));
	
	// Initialization slider
	$('.owl-carousel').owlCarousel({
		items: 1,
		loop:true,
		margin:10,
		nav:true,
		dotsData: true,
		navText: ["<img src='assets/images/arrowleft.png'>","<img src='assets/images/arrowright.png'>"]
	});
	
	// Scroll to top
	$('.to_top').click(function(e){
		$('#fp-nav>ul>li').first().children().trigger('click');
	})
	
	// Project slider
	var height_slider = $('.project-slider').parent().prev().outerHeight();
	init_project_slider(height_slider);
	
	// Styles for content blocks
	var wrap_content_height = $(window).height()*0.60,
		item_advantage = $(window).width()*0.17;
		item_advantage_figure = $('.item-advantage>figure').outerHeight(true);
	$('.wrap-content').height(wrap_content_height);
	$('.item-advantage').width(item_advantage).height(item_advantage);
	$('.item-advantage figure').css({
		padding: (item_advantage - item_advantage_figure)/2 + "px",
		paddingLeft: 0,
		paddingRight: 0
	});
	$('.item-advantage>a').height(wrap_content_height);
	$('.item-advantage>a').width(item_advantage).height(item_advantage);
	
	$('.owl-hover .owl-dot').mouseenter(function(e) {
		image = $( e.toElement ).data( 'image' );
		$( e.toElement ).append( '<img class="slider-image" src=" '+ image +' " width="100px">');
	});
	$('.owl-hover .owl-dot').mouseleave(function(e) {
		$('.slider-image').remove();
	});
	
});

function init_project_slider(height_slider){
	$('.main-image').height(height_slider*0.9);
	
	pr_images = [];
	$('.additional-images').each(function(i, el){
		pr_images[i] = el;
	});
	
	$('.additional-images').outerWidth(900);
}
})(window, jQuery);

// function drawing(ctx, i, width){
	

	// ctx.moveTo(10, 250);
	// ctx.lineTo(i-10, 250);
	// ctx.stroke();
	// startDraw(ctx, i, width);
	
// }

// function startDraw(ctx, i, width){
	
	// if (i < width){
		// setTimeout(function(){
			// i++;
			// drawing(ctx, i, width)
		// }, 5);	
	// }else{
		// return;
	// }
// }
function drawAbout(ctx, width, height){
	ctx.strokeStyle = 'rgba(128,128,128,0.9)';
	ctx.fillStyle = 'rgba(128,128,128,0.9)';
	ctx.beginPath();
	ctx.lineWidth = 1;
	ctx.moveTo(10, 250);
	ctx.lineTo(width-10, 250);
	ctx.stroke();
	ctx.closePath();
	ctx.fillStyle = 'rgba(128,128,128,0.9)';
	ctx.beginPath();
	ctx.lineWidth = 1;
	ctx.moveTo(10, 250);
	ctx.lineTo(10, 290);
	ctx.stroke();
	ctx.closePath();
	ctx.fillStyle = 'rgba(128,128,128,0.9)';
	ctx.beginPath();
	ctx.lineWidth = 1;
	ctx.moveTo(width*0.43, 250);
	ctx.lineTo(width*0.43, 400);
	ctx.stroke();
	ctx.closePath();
	ctx.fillStyle = 'rgba(128,128,128,0.9)';
	ctx.beginPath();
	ctx.lineWidth = 1;
	ctx.moveTo(width*0.86, 250);
	ctx.lineTo(width*0.86, 345);
	ctx.stroke();
	ctx.closePath();
	ctx.fillStyle = 'rgba(128,128,128,0.9)';
	ctx.beginPath();
	ctx.lineWidth = 1;
	ctx.moveTo(width-10, 250);
	ctx.lineTo(width-10, 190);
	ctx.stroke();
	ctx.closePath();
	
	// circles 
	ctx.beginPath();
    ctx.arc(10, 290, 2, 0, 2 * Math.PI, false);
    ctx.fillStyle = '#000';
    ctx.fill();
    ctx.strokeStyle = '#003300';
    ctx.stroke();
	ctx.closePath();
	
	ctx.beginPath();
    ctx.arc(width*0.43, 290, 2, 0, 2 * Math.PI, false);
    ctx.fillStyle = '#000';
    ctx.fill();
    ctx.strokeStyle = '#003300';
    ctx.stroke();
	ctx.closePath();
	
	ctx.beginPath();
    ctx.arc(width*0.43, 345, 2, 0, 2 * Math.PI, false);
    ctx.fillStyle = '#000';
    ctx.fill();
    ctx.strokeStyle = '#003300';
    ctx.stroke();
	ctx.closePath();
	
	ctx.beginPath();
    ctx.arc(width*0.43, 400, 2, 0, 2 * Math.PI, false);
    ctx.fillStyle = '#000';
    ctx.fill();
    ctx.strokeStyle = '#003300';
    ctx.stroke();
	ctx.closePath();
	
	ctx.beginPath();
    ctx.arc(width*0.86, 345, 2, 0, 2 * Math.PI, false);
    ctx.fillStyle = '#000';
    ctx.fill();
    ctx.strokeStyle = '#003300';
    ctx.stroke();
	ctx.closePath();
	
	ctx.beginPath();
    ctx.arc(width*0.86, 290, 2, 0, 2 * Math.PI, false);
    ctx.fillStyle = '#000';
    ctx.fill();
    ctx.strokeStyle = '#003300';
    ctx.stroke();
	ctx.closePath();
	
	ctx.beginPath();
	ctx.fillStyle = '#000';
	ctx.font="bold 14px 'Raleway', sans-serif";
	ctx.fillText("МЕНЕДЖЕР ПО ЛОГИСТИКЕ",30,295);
    ctx.stroke();
	ctx.closePath();
	
	ctx.beginPath();
	ctx.fillStyle = '#fff';
	ctx.font="bold 14px 'Raleway', sans-serif";
	ctx.fillText("ПРОРАБ", width*0.43 + 20,295);
    ctx.stroke();
	ctx.closePath();
	
	ctx.beginPath();
	ctx.fillStyle = '#fff';
	ctx.font="bold 14px 'Raleway', sans-serif";
	ctx.fillText("ТЕХ НАДЗОР",width*0.43 + 20,350);
    ctx.stroke();
	ctx.closePath();
	
	ctx.beginPath();
	ctx.fillStyle = '#fff';
	ctx.font="bold 14px 'Raleway', sans-serif";
	ctx.fillText("ИНЖЕНЕР",width*0.43 + 20,405);
    ctx.stroke();
	ctx.closePath();
	
	ctx.beginPath();
	ctx.fillStyle = '#000';
	ctx.font="bold 14px 'Raleway', sans-serif";
	ctx.fillText("АРХИТЕКТОР",width*0.86 + 20,295);
    ctx.stroke();
	ctx.closePath();
	
	ctx.beginPath();
	ctx.fillStyle = '#000';
	ctx.font="bold 14px 'Raleway', sans-serif";
	ctx.fillText("ДИЗАЙНЕР",width*0.86 + 20,350);
    ctx.stroke();
	ctx.closePath();
	
}