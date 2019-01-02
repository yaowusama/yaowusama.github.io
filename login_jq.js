$(document).ready(function(){
		console.log("emmm");
		
		
		$("#login_button").on("click",function(){
			$("#background").css("display","block");
			$("#login").css("display","block");
			$("#login").animate({
				opacity:"0.9",
				top:"0",
				bottom:"0"
			},2000);
		});
		$("#submit").on("click",function(){
			$("#background").css("display","none");
			$("#login").css("display","none");
			var name=$(document).cookie("name")
			if (name) {
				console.log("logged");
				$("#login_button").text("退出");
				$("#login_button").attr("href","./user/quit.php");
			}else{
				console.log("失败");
			}
		})
})