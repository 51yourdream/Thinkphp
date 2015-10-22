/*
	公共加载函数
 */

function qkhl_load(ob){
		$("#qkhl-refresh").next().removeClass("hidden");
		var url = $(ob).attr("url");
		$.post(url,function(data){
			$("#data-container").html(data);
			$("#qkhl-refresh").next().addClass("hidden");
		},'html');
}

function qkhl_nav(ob){
	$(ob).next("ul").slideToggle('fast');
	if($(ob).attr("url")){
		$("#qkhl-refresh").attr({url:$(ob).attr("url")});
		qkhl_load(ob);
	}
	
}