jQuery(document).ready(function($){
//ユーザーエージェントによる振分
//var userAgent = window.navigator.userAgent.toLowerCase();
//var appVersion = window.navigator.appVersion.toLowerCase();
//if(userAgent.indexOf("msie") > -1){}
//if(userAgent.indexOf("firefox") > -1){}
//if(userAgent.indexOf("chrome") > -1){}
//if(userAgent.indexOf("iphone") > -1){}
//if(userAgent.indexOf("android") > -1){}
//if(appVersion.indexOf("msie 7.") != -1){}


//リンク画像のホバー(画像を２枚用意)用
$("img.ovr").mouseover(function(){
		$(this).attr("src",$(this).attr("src").replace(/^(.+)(\.[a-z]+)$/, "$1_on$2"));
}).mouseout(function(){
		$(this).attr("src",$(this).attr("src").replace(/^(.+)_on(\.[a-z]+)$/, "$1$2"));
});

var winW = $(window).width();
var winH = $(window).height();
var scrlNum = 0;

//SPのnav
$(".spNavBtn").click(function(){
	winW = $(window).width();
	if(winW <= 767){
		if($(this).hasClass("show")){
			$(".spNav").slideUp();
			$(this).removeClass("show");
		}else{
			$(".spNav").slideDown();
			$(this).addClass("show");
		}
	}
	return false;
});


//SPのfixBtn
var inqPos;
$(window).scroll(function(){
  scrlNum = $(window).scrollTop();
  if(winW <= 767){
    winH = $(window).height();
    inqPos = $(".l-footer .inqs").position().top;
    if((scrlNum + winH) >= inqPos){
      $(".l-spFixBtns").fadeOut();
    }else{
      $(".l-spFixBtns").fadeIn();
    }
  }
});

/*----- 詳細2のthumb -----*/
$(".u-thumTxtList2 .clkImgs a").click(function(){
	if($(this).hasClass("show")){
		return false;
	}else{
		var thisBox = $(this).parents("li");
		var thisImg = $(this).find("img").attr("src");
		thisBox.find(".showImg img").attr("src", thisImg);
		thisBox.find(".clkImgs a").removeClass("show");
		$(this).addClass("show");
		return false;
	}
});
//wordpress用
$(".u-postList1 .liItem").each(function(){
	//showImgの設定
	var thisFstImg = $(this).find(".u-thumList1 li:eq(0) img").clone();
	$(".showImg", this).append(thisFstImg);

	//thumbsの1つ目をshowに
	$(this).find(".u-thumList1 li:eq(0)").addClass("show");
});

$(".u-postList1 .u-thumList1 li").click(function(){
	if($(this).hasClass("show")){
		return false;
	}else{
		var thisBox = $(this).parents(".liItem");
		var thisImg = $(this).find("img").attr("src");
		thisBox.find(".showImg img").attr("src", thisImg);
		thisBox.find(".u-thumList1 li").removeClass("show");
		$(this).addClass("show");
		return false;
	}
});
/*----- /詳細2のthumb -----*/


//topへ戻るボタン
$(".l-toTop").click(function(){
	$('html,body').animate({scrollTop: 0}, 400, 'swing');
	return false;
});

//$(".cbYt1").colorbox({iframe:true, innerWidth:720, innerHeight:480});
//$(".cbPh1").colorbox({opacity: 0.5});	
//$(".cbIf1").colorbox({iframe:true, innerWidth:947, innerHeight:600});

});//DocRdyFncEnd
