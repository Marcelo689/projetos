function telaCadastro()
{
	window.location.href="formCadastro.php";
}
function telaListar()
{
	window.location.href='listarCliente.php';
}
function telaEditar(id)
{	
	redirectPost("formEditarCadastro.php",{id:id});
}
function redirectPost(url, data) {
    var form = document.createElement('form');
    document.body.appendChild(form);
    form.method = 'post';
    form.action = url;
    for (var name in data) {
        var input = document.createElement('input');
        input.type = 'hidden';
        input.name = name;
        input.value = data[name];
        form.appendChild(input);
    }
    form.submit();
	}
function editar()
{
	nome  = $("#nome").val();
	idade = $("#idade").val();
	id    = $("#id").val();
	$.ajax({
		type:"POST",
		url:"controle/controle_cliente.php",
		data:{
			  acao:"atualizar",
			  nome:nome,
			  idade:idade,
			  id:id
			},
		success:function()
				{
					alert(nome+" atualizado com sucesso");
					window.location.href="listarCliente.php";
				}
	});
}

function buttonDeletar(valor)
{
	let confirmar = window.confirm("Você tem certeza?");
	
	if(confirmar)
	{
		$.ajax({
			method:"POST",
			url:"controle/controle_cliente.php",
			data:{id:valor,acao:"deletar"},
			success:function(data){
				alert("Cliente deletado do id:"+valor);
				window.location.href="listarCliente.php";
			}
		});
	}
}

function cadastrar()
{
	nome  =$("#nome").val();
	idade =$("#idade").val();
	
	if(nome != "" && idade != "")
	{
	$.ajax({
		method:"POST",
		url:"controle/controle_cliente.php",
		data:{
			idade:idade,
			acao:"inserir",
			nome:nome,
		},
		success:function(){
		alert("Parabéns "+nome+",você foi cadastrado com sucesso!");
			
		$("#nome").val("");
		$("#idade").val("");
		window.location.replace("listarCliente.php");
		},
		
		});
	}else{
		alert("Você deve preencher os campos!");
	}
}