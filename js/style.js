jQuery(document).ready(function($) {
	//定义播放按钮
	$("#stop").hide();
	$(".playback").click(function() {
		$('.playback').hide();	
		$("#stop").show();	
	});	
	$("#stop").click(function() {
		$(".playback").show();
		$('#stop').hide();	
	});
	//判断是否点击显示列表按钮。
	$(".playlist").hide();
	$(".list>i").click(function() {
		if ($(this).hasClass('enable')) {
			$(this).removeClass('enable');
			$(".playlist").slideToggle();
		} else {
			$(this).addClass('enable');
			$(".playlist").slideToggle();
		}
	});
	//定义滚动条
	$(".playlist").niceScroll({  
		cursorcolor:"#81C300",  
		cursoropacitymax:1,  
		touchbehavior:false,  
		cursorwidth:"8px",  
		cursorborder:"0",  
		cursorborderradius:"5px"  
	}); 
  	$("div[id^='ascrail']").bind("click",function(e){  
        var ev=e||event;  
        ev.stopPropagation();  
        return false;  
    });  
});
