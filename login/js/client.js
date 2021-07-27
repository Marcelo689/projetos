// JavaScript Document
function autoCompleteSelect()
{
	city =$("#city").val();
	
	if(city !== "")
	{
		switch(city)
		{
			case "1":
				$("#state").val("1");
				$("#country").val("1");
				break;
			case "2":
				$("#state").val("1");
				$("#country").val("1");
				break;
			case "3":
				$("#state").val("1");
				$("#country").val("1");
				break;
			case "4":
				$("#state").val("1");
				$("#country").val("1");
				break;
			case "5":
				$("#state").val("1");
				$("#country").val("1");
				break;
			default:
				break;
		}
	}
}
function resetForm()
{
	document.getElementById("form").reset();
}
function autoCompleteSql()
{
	$("#table").empty();
	input = $("#filter").val();
	
	$.ajax({
		type:"POST",
		url:"controller/controller_client.php",
		data:{input:input,action:"list"},
		success:function(data)
		{
			console.log(data);
		}
	});
	
	$("#table").load("table.php");
}
function registerClient()
{
	name 	= $("#name").val();
	age 	= $("#age").val();
	gender  = $("#gender").val();
	
   	city = $("#city").val();
	state = $("#state").val();
	country = $("#country").val();
	
	
	if(name == "")
	{
		$("#nameAlert").remove();
		var nameAlert =$("<p id='nameAlert'></p>").text("Please, insert your name!");
		
		$("#name").before(nameAlert);
	}else{
		$("#nameAlert").remove();
	}
	
	if(age == "")
	{
		$("#ageAlert").remove();
		var ageAlert =$("<p id='ageAlert'></p>").text("Please, insert your age!");
		
		$("#age").before(ageAlert);
	}else{
		$("#ageAlert").remove();
	}
	
	if(gender == "")
	{
		$("#genderAlert").remove();
		var ageAlert =$("<p id='genderAlert'></p>").text("Please, insert your gender!");
		
		$("#gender").before(ageAlert);
	}else{
		$("#genderAlert").remove();
	}
	
	
	if(city == "")
	{
		$("#cityAlert").remove();
		var cityAlert =$("<p id='cityAlert'></p>").text("Please, insert your city!");
		
		$("#city").before(cityAlert);
	}else{
		$("#cityAlert").remove();
	}
	
	if(state == "" )
	{
		$("#stateAlert").remove();
		var stateAlert =$("<p id='stateAlert'></p>").text("Please, insert your state!");
		
		$("#state").before(stateAlert);
	}else{
		$("#stateAlert").remove();
	}
	
	if(country == "")
	{
		$("#countryAlert").remove();
		var countryAlert =$("<p id='countryAlert'></p>").text("Please, insert your country!");
		
		$("#country").before(countryAlert);
	}else{
		$("#countryAlert").remove();
	}
	
	if(country != "" && state != "" && city != "" && age != "" && name != "" && gender != "" )
		{
	$.ajax({
		type:"POST",
		url:"controller/controller_client.php",
		data:{action:"insert",name:name,age:age,gender:gender,city:city,state:state,country:country},
		success:function (data)
		{
			console.log(data);
			//mainPageLink("mainPage.php");
		}
	});
		}
}
function deleteClient(id)
{
	confirmar = confirm("Você tem certeza que deseja deletar?");
	if(confirmar == true)
		{
	
	$.ajax({
		type:"POST",
		url:"controller/controller_client.php",
		data:{action:"delete",id:id},
		success:function (data){
			console.log(data);
			autoCompleteSql();
			
		}
	});
		}
}
function deleteClientList(id)
{
	confirmar = confirm("Você tem certeza que deseja deletar?");
	if(confirmar == true)
		{
	
	$.ajax({
		type:"POST",
		url:"controller/controller_client.php",
		data:{action:"delete",id:id},
		success:function (data){
			loadPage("list.php");
		}
	});
		}
}

function editClient(data)
{
	var form =document.createElement("form");
	form.method = "post";
	form.action = "formEdit.php";
	
	for(const val in data){
	var input   = document.createElement("input");
	input.type  = "hidden";
	input.name  = val; 
	input.value = data[val];
	form.appendChild(input);
	}
	document.body.appendChild(form);
	form.submit();
}

function formEdit()
{
	id      = $("#id").val();
	name 	= $("#name").val();
	age 	= $("#age").val();
	gender  = $("#gender").val();
	
   	city = $("#city").val();
	state = $("#state").val();
	country = $("#country").val();

	if(name == "")
	{
		$("#nameAlert").remove();
		var nameAlert =$("<p id='nameAlert'></p>").text("Please, insert your name!");
		
		$("#name").before(nameAlert);
	}else{
		$("#nameAlert").remove();
	}
	
	if(age == "")
	{
		$("#ageAlert").remove();
		var ageAlert =$("<p id='ageAlert'></p>").text("Please, insert your age!");
		
		$("#age").before(ageAlert);
	}else{
		$("#ageAlert").remove();
	}
	
	if(gender == "")
	{
		$("#genderAlert").remove();
		var ageAlert =$("<p id='genderAlert'></p>").text("Please, insert your gender!");
		
		$("#gender").before(ageAlert);
	}else{
		$("#genderAlert").remove();
	}
	
	
	if(city == "")
	{
		$("#cityAlert").remove();
		var cityAlert =$("<p id='cityAlert'></p>").text("Please, insert your city!");
		
		$("#city").before(cityAlert);
	}else{
		$("#cityAlert").remove();
	}
	
	if(state == "" )
	{
		$("#stateAlert").remove();
		var stateAlert =$("<p id='stateAlert'></p>").text("Please, insert your state!");
		
		$("#state").before(stateAlert);
	}else{
		$("#stateAlert").remove();
	}
	
	if(country == "")
	{
		$("#countryAlert").remove();
		var countryAlert =$("<p id='countryAlert'></p>").text("Please, insert your country!");
		
		$("#country").before(countryAlert);
	}else{
		$("#countryAlert").remove();
	}
	
	if(country != "" && state != "" && city != "" && age != "" && name != "" && gender != "" )
		{
	$.ajax({
		type:"POST",
		url:"controller/controller_client.php",
		data:{action:"update",id:id,name:name,age:age,gender:gender,city:city,state:state,country:country},
		success:function (data)
		{
			console.log(data);
			mainPageLink();
		}
	});
		}
}

function mainPageLink()
{
	window.location.replace("mainPage.php");
}

function erase()
{
	$("#index").empty();
}

function loadPage(url)
{
	erase();
	$("#index").load(url);
}