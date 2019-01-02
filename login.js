window.onload=function(){
	var name = document.getElementById("name");
	var password = document.getElementById("password");
	var name_info = document.getElementById("name_info");
	var password_info = document.getElementById("password_info");
	name.onfocus=function(){
		console.log("name");
		name.setAttribute("placeholder"," ");
	};
	password.onfocus=function(){
		console.log("password");
		password.setAttribute("placeholder"," ");
	}
	name.onblur=function(){
		if (!name.value) {
			name_info.innerHTML="请输入用户名";
			name.setAttribute("placeholder","用户名");
		}else{
			name_info.innerHTML="<br>";
		}
	}
	password.onblur=function(){
		if (!password.value) {
			password_info.innerHTML="请输入密码";
			password.setAttribute("placeholder","密码");
		}else{
			password_info.innerHTML="<br>";
		}
	}
}
