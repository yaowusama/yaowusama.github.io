$(document).ready(function(){
		console.log("emmm");
		
		$("#top").animate({
			opacity:"0.9",
			top:"20%"
		},2000);
		$("#top").on("click",function(){
			$("#background").css("display","block");
			$("#login").css("display","block");
			$("#login_button").css("display","none");
		});
		$("#submit").on("click",function(){
			$("#background").css("display","none");
			$("#login").css("display","none");
		})
		/*
		$("#center").animate({
			top:"35%"
		},2000);
		*/




		//$("#a").hide();
		//$("#a").fadeIn(2000);
})