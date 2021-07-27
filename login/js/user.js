// JavaScript Document
function login()
{
	email		=	$("#email").val();
	password	=	$("#password").val();
	
	$.ajax({
		type:"POST",
		url:"controller/controller_user.php",
		data:{action:"login",email:email,password:password},
		success:function(data)
		{
			console.log(data);
			window.location.replace("mainPage.php");
		}
		
	});
}
function loginOff()
{
	$.ajax({
		type:"POST",
		url:"controller/controller_user.php",
		data:{action:"loginOff"},
		success:function (data){
			console.log(data);
			email		=	"";
			password	=	"";

			$.ajax({
				type:"POST",
				url:"controller/controller_user.php",
				data:{action:"login",email:email,password:password},
				success:function(data)
				{
					console.log(data);
				}

			});
			window.location.replace("login.php");
		}
	});
}