
$(document).ready(function(){
	$("#SearchQuery").focus(function(){
		$("#SearchQuery").val("");
		$("#SearchQuery").css({"border":'2px solid #00A8FF',"color": '#000000'});
	});
	$("#SearchQuery").blur(function(){
		$("#SearchQuery").val("请输入关键字");
		$("#SearchQuery").css({"border":'2px solid #BABABA',"color": '#BABABA'});
	});
})


$(document).ready(function(){
	var aColor1;
	var bColor1;
	var cColor1;
	var dColor1;
	$bColor1="rgb(0,168,255)";
	$dColor1="rgb(0,0,0)";
	$(".buttonST1").each(function(){
		$(this).mouseover(function(){
		$aColor1=$(this).css("background-color");
		$cColor1=$(this).css("color");
		$(this).css({"background-color":$bColor1,"color": $dColor1});
		});
	});
	$(".buttonST1").each(function(){
		$(this).mouseleave(function(){
		$(this).css({"background-color":$aColor1,"color":$cColor1});
		});
	});
})

$(document).ready(function(){
	var aColor2;
	var bColor2;
	var cColor2;
	var dColor2;
	$bColor2="rgb(0,0,0)";
	$dColor2="rgb(255,255,255)";
	$(".user").each(function(){
		$(this).mouseover(function(){
		$aColor2=$(this).css("background-color");
		$cColor2=$(this).css("color");
		$(this).css({"background-color":$bColor2,"color": $dColor2});
		});
	});
	$(".user").each(function(){
		$(this).mouseleave(function(){
		$(this).css({"background-color":$aColor2,"color": $cColor2});
		});
	});
})

